<?php

namespace App\Http\Controllers;

use App\Models\Skill2;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Skill::get();
        $title = "Data Keahlian";
        return view('skill.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Keahlian";
        return view('skill.create', compact('title'));
        $title = "Tambah Keahlian";
        return view('skill2.create2', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Skill::create([
            'tools' => $request->tools,
        ]);
        return redirect()->to('admin/skill')->with('message', 'Data berhasil ditambah');

        Skill2::create2([
            'workflow' => $request->workflow,
            'bahasa' => $request->bahasa,
        ]);
        return redirect()->to('admin/skill2')->with('message', 'Data berhasil ditambah');
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
        $edit = Skill::find($id);
        $title = "Edit Data" . $edit->tools;
        return view('skill.edit', compact('edit', 'title'));

        $edit = Skill2::find($id);
        $title = "Edit Data" . $edit->workflow;
        return view('skill2.edit2', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Skill::where('id', $id)->update([
            'tools' => $request->tools,
        ]);
        return redirect()->to('admin/skill')->with('message', 'Keahlian berhasil diubah');

        Skill2::where('id', $id)->update2([
            'workflow' => $request->workflow,
            'bahasa' => $request->bahasa,
        ]);
        return redirect()->to('admin/skill2')->with('message', 'Keahlian berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Skill::where('id', $id)->delete();
        return redirect()->to('admin/skill')->with('message', 'Data berhasil dihapus');
        Skill2::where('id', $id)->delete2();
        return redirect()->to('admin/skill2')->with('message', 'Data berhasil dihapus');
    }

}
