<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Profile::get();
        $title = "Data Profile";
        return view('profile.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Profile";
        return view('profile.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Profile::create([
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'description' => $request->description,
            'linkedin_link' => $request->linkedin_link,
            'github_link' => $request->github_link,
            'instagram_link' => $request->instagram_link,
            'facebook_link' => $request->facebook_link,
            'youtube_link' => $request->youtube_link,
            'tiktok_link' => $request->tiktok_link,
        ]);

        return redirect()->to('admin/profile')->with('message', 'Data berhasil ditambah');
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
        $edit = Profile::find($id);
        $title = "Edit Data" . $edit->fullname;
        return view('profile.edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Profile::where('id', $id)->update([
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'description' => $request->description,
            'linkedin_link' => $request->linkedin_link,
            'github_link' => $request->github_link,
            'instagram_link' => $request->instagram_link,
            'facebook_link' => $request->facebook_link,
            'youtube_link' => $request->youtube_link,
            'tiktok_link' => $request->tiktok_link,
        ]);

        return redirect()->to('admin/profile')->with('message', 'Profile berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Profile::where('id', $id)->delete();
        return redirect()->to('admin/profile')->with('message', 'Data berhasil dihapus');
    }
}

