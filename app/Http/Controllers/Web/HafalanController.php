<?php

namespace App\Http\Controllers\Web;

use App\Helpers\LogActivity;
use App\Http\Controllers\Controller;
use App\Http\Requests\HafalanRequest;
use App\Models\Hafalan;
use App\Models\Santri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class HafalanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $keyword = $request->keyword;

        $subquery = Hafalan::select('santri_id', DB::raw('MAX(created_at) as max_created_at'))
            ->groupBy('santri_id');

        $query = Hafalan::joinSub($subquery, 'latest_hafalans', function($join) {
            $join->on('hafalan.santri_id', '=', 'latest_hafalans.santri_id')
                ->on('hafalan.created_at', '=', 'latest_hafalans.max_created_at');
        });

        $query->join('santris', 'hafalan.santri_id', '=', 'santris.id');

        if ($keyword) {
            $query->where(function($q) use ($keyword) {
                $q->where('santris.nama', 'LIKE', "%$keyword%")
                ->orWhere('hafalan.surah', 'LIKE', "%$keyword%")
                ->orWhere('hafalan.keterangan', 'LIKE', "%$keyword%");
            });
        }

        $data = $query->with('santri')->paginate(10);

        return view('hafalan.index', compact('data'));
    }

    public function create()
    {
        $data = Santri::all();
        return view('hafalan.create', compact('data'));
    }

    public function store(HafalanRequest $request)
    {
        $validatedData = $request->validated();

        $hafalan = new Hafalan();
        $hafalan->santri_id = $validatedData['santri_id'];
        $hafalan->surah = $validatedData['surah'];
        $hafalan->ayat = $validatedData['ayat'];
        $hafalan->juz = $validatedData['juz'];
        $hafalan->tanggal_hafalan = $validatedData['tanggal_hafalan'];
        $hafalan->keterangan = $validatedData['keterangan'];

        $hafalan->save();

        LogActivity::addToLog('Tambah Data Hafalan');

        return redirect()->route('hafalan.index')
            ->with('alert', 'Hafalan baru berhasil ditambahkan.');
    }

    public function show($id)
    {
        return view('santri.show', ['santri' => Santri::findOrFail($id)]);
    }

    public function edit($id)
    {
        $hafalan = Hafalan::findOrFail($id);
        $santri = Santri::all();
        return view('hafalan.edit', compact('hafalan', 'santri'));
    }

    public function detail($id)
    {
        $hafalan = Hafalan::findOrFail($id);
        return view('riwayat_hafalan.detail', compact('hafalan'));
    }

    public function update(HafalanRequest $request, $id)
    {
        $validatedData = $request->validated();

        $hafalan = Hafalan::findOrFail($id);
        $hafalan->santri_id = $validatedData['santri_id'];
        $hafalan->surah = $validatedData['surah'];
        $hafalan->ayat = $validatedData['ayat'];
        $hafalan->juz = $validatedData['juz'];
        $hafalan->tanggal_hafalan = $validatedData['tanggal_hafalan'];
        $hafalan->keterangan = $validatedData['keterangan'];

        $hafalan->save();

        LogActivity::addToLog('Edit Data Hafalan');

        return redirect()->route('hafalan.index')
            ->with('alert', 'Hafalan berhasil diupdate.');
    }

    public function destroy($id)
    {
        if (auth()->user()->role == 'Administrator' || auth()->user()->role == 'Pengururs') {
            $hafalan = Hafalan::findOrFail($id);
            $hafalan->delete();

            LogActivity::addToLog('Hapus Data Hafalan');
            return redirect()->route('hafalan.index')
                ->with('alert', 'Data Hafalan berhasil dihapus.');
        }

        abort(403);
    }
}
