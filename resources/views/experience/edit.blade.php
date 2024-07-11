@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">Edit Data Pengalaman</div>
        <div class="card-body">
            <form action="{{ route('admin.experience.update', $edit->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="">Nama Perusahaan</label>
                    <input value="{{ $edit->company_name }}" type="text" name="company_name" placeholder="Masukkan Nama Perusahaan Anda"
                        class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nama Pekerjaan</label>
                    <input value="{{ $edit->job_name }}" type="text" name="job_name"
                        placeholder="Masukkan Nama Pekerjaan Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Deskripsi Pekerjaan</label>
                    <textarea name="job_description" id="" cols="30" rows="10" class="form-control" required>{{ $edit->job_description }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Mulai</label>
                    <input value="{{ $edit->tgl_mulai }}" type="date" name="tgl_mulai"
                        placeholder="Masukkan Tanggal Mulai Anda Bekerja" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Selesai</label>
                    <input value="{{ $edit->tgl_selesai }}" type="date" name="tgl_selesai"
                        placeholder="Masukkan Tanggal Selesai Anda Bekerja" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
