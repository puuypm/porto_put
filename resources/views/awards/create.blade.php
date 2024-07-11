@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.awards.store') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Nama Penghargaan</label>
                    <input type="text" name="name_awards" placeholder="Masukkan Nama Penghargaan Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tahun Penyelenggara</label>
                    <input type="date" name="thn_penyelenggara" placeholder="Masukkan Tahun Penyelenggara" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Penyelenggara</label>
                    <input type="text" name="penyelenggara" placeholder="Masukkan Nama Penyelenggara" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
