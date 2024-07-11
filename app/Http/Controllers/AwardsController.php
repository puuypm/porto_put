<?php

namespace App\Http\Controllers;

use App\Models\Awards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AwardsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Awards::get();
        $title = "Data Penghargaan";
        return view('awards.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Penghargaan";
        return view('awards.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Awards::create([
            'name_awards' => $request->name_awards,
            'thn_penyelenggara' => $request->thn_penyelenggara,
            'penyelenggara' => $request->penyelenggara,
        ]);

        return redirect()->to('admin/awards')->with('message', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // select * from tbluser where id = id
        $edit = Awards::find($id);
        $title = "Edit Data" . $edit->name_awards;
        return view('awards.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Awards::where('id', $id)->update([
            'name_awards' => $request->name_awards,
            'thn_penyelenggara' => $request->thn_penyelenggara,
            'penyelenggara' => $request->penyelenggara,
        ]);

        return redirect()->to('admin/awards')->with('message', 'Penghargaan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Awards::where('id', $id)->delete();
        return redirect()->to('admin/awards')->with('message', 'Data berhasil dihapus');
    }
}
