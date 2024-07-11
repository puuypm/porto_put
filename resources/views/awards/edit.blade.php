@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">Edit Data Awards</div>
        <div class="card-body">
            <form action="{{ route('admin.awards.update',$edit->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="">Nama Penghargaan</label>
                    <input value="{{ $edit->name_awards }}" type="text" name="name_awards"
                        placeholder="Masukkan Nama Penghargaan Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tahun Penyelenggara</label>
                    <input value="{{ $edit->thn_penyelenggara }}" type="date" name="thn_penyelenggara"
                        placeholder="Masukkan Tahun Penyelenggara" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Penyelenggara</label>
                    <input value="{{ $edit->penyelenggara }}" type="text" name="penyelenggara" placeholder="Masukkan Nama Penyelenggara"
                        class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
