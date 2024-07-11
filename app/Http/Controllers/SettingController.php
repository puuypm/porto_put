<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function index()
    {
        $datas = Setting::get();
        $title = "Data Setting";
        return view('setting.index', compact('datas', 'title'));
    }

    public function create()
    {
        $title = "Tambah Setting";
        return view('setting.create', compact('title'));
    }

    public function store(Request $request)
    {
        $pp = $request->file('profile_picture');
        $ppCustom = time() . "_" . $pp->getClientOriginalName();
        $path = 'uploads';
        $pp->move($path, $ppCustom);

        Setting::create([
            'profile_picture' => $ppCustom,
        ]);

        return back();
    }

    public function edit(string $id)
    {
        $edit = Setting::find($id);
        $title = "Edit Data " . $edit->name;
        return view('setting.edit', compact('edit', 'title'));
    }

    public function update(Request $request, string $id)
    {
        Setting::where('id', $id)->update([
            'company_name' => $request->company_name,
            'job_name' => $request->job_name,
            'job_description' => $request->job_description,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai,
        ]);

        return redirect()->to('admin/setting')->with('message', 'Data berhasil ditambah');
    }

    public function destroy(string $id)
    {
        Setting::where('id', $id)->delete();
        return redirect()->to('admin/setting')->with('message', 'Data berhasil dihapus');
    }
}
