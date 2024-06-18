<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\HafalanRequest;
use App\Models\Hafalan;
use Illuminate\Http\Request;

class HafalanController extends Controller
{
    public function index()
    {
        $hafalan = Hafalan::with('santri')->get();
        return view('hafalan.index', compact('hafalan'));
    }

    public function create()
    {
        return view('hafalan.create');
    }

    public function store(HafalanRequest $request)
    {
        $hafalan = Hafalan::create($request->all());
        return redirect()->route('hafalan.index')->with('success', 'Hafalan created successfully');
    }

    public function print($id)
    {
        $hafalan = Hafalan::findOrFail($id);
        return view('hafalan.print', compact('hafalan'));
    }

    public function destroy($id)
    {
        $hafalan = Hafalan::findOrFail($id);
        $hafalan->delete();
        return redirect()->route('hafalan.index')->with('success', 'Hafalan deleted successfully');
    }
}
