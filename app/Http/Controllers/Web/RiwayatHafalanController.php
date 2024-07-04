<?php

namespace App\Http\Controllers\Web;

use App\Helpers\LogActivity;
use App\Http\Controllers\Controller;
use App\Http\Requests\HafalanRequest;
use App\Models\Hafalan;
use Illuminate\Http\Request;
use App\Models\Santri; 
use Illuminate\Support\Facades\DB; // Import DB
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;

class RiwayatHafalanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $santri_id = $request->input('santri_id');
        $keyword = $request->keyword;

        // Temukan data santri berdasarkan santri_id
        $santri = Santri::findOrFail($santri_id);

        // Query dasar untuk mendapatkan hafalan berdasarkan santri_id
        $query = Hafalan::where('santri_id', $santri_id);

        // Menambahkan kondisi pencarian jika ada keyword
        if ($keyword) {
            $query->where(function ($q) use ($keyword) {
                $q->where('surah', 'LIKE', "%$keyword%")
                    ->orWhere('keterangan', 'LIKE', "%$keyword%");
            });
        }

        // Mengambil data dengan paginasi
        $hafalans = $query->paginate(10);

        // Dapatkan data untuk perkembangan juz
        $data = Hafalan::select('santri_id', DB::raw('MAX(juz) as juz_terakhir'))
            ->where('santri_id', $santri_id)
            ->groupBy('santri_id')
            ->first();

        return view('riwayat_hafalan.index', compact('santri', 'hafalans', 'data'));
    }

    public function destroy($id)
    {
        if (auth()->user()->role == 'Administrator' || auth()->user()->role == 'Pengururs') {
            $hafalan = Hafalan::findOrFail($id);
            $hafalan->delete();

            LogActivity::addToLog('Hapus Data Hafalan');
            return redirect()->route('riwayat_hafalan.index', ['santri_id' => $hafalan->santri_id])
                ->with('alert', 'Data Hafalan berhasil dihapus.');
        }

        abort(403);
    }

}
