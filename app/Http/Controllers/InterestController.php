<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InterestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Interest::get();
        $title = "Data Minat";
        return view('interest.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Minat";
        return view('interest.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Interest::create([
            'description_interest' => $request->description_interest,
        ]);

        return redirect()->to('admin/interest')->with('message', 'Data berhasil ditambah');
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
        $edit = Interest::find($id);
        $title = "Edit Data" . $edit->description_interest;
        return view('interest.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Interest::where('id', $id)->update([
            'description_interest' => $request->description_interest,
        ]);

        return redirect()->to('admin/interest')->with('message', 'Minat berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Interest::where('id', $id)->delete();
        return redirect()->to('admin/interest')->with('message', 'Data berhasil dihapus');
    }
}
