<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Education::get();
        $title = "Data Pendidikan";
        return view('education.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Pendidikan";
        return view('education.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Education::create([
            'nama_sekolah' => $request->nama_sekolah,
            'jurusan' => $request->jurusan,
            'fakultas' => $request->fakultas,
            'tahunmasuk' => $request->tahunmasuk,
            'tahunkeluar' => $request->tahunkeluar,
            'gpa' => $request->gpa,
        ]);

        return redirect()->to('admin/education')->with('message', 'Data berhasil ditambah');
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
        $edit = Education::find($id);
        $title = "Edit Data" . $edit->nama_sekolah;
        return view('education.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Education::where('id', $id)->update([
            'nama_sekolah' => $request->nama_sekolah,
            'jurusan' => $request->jurusan,
            'fakultas' => $request->fakultas,
            'tahunmasuk' => $request->tahunmasuk,
            'tahunkeluar' => $request->tahunkeluar,
            'gpa' => $request->gpa,
        ]);

        return redirect()->to('admin/education')->with('message', 'Pendidikan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Education::where('id', $id)->delete();
        return redirect()->to('admin/education')->with('message', 'Data berhasil dihapus');
    }
}
