@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">Edit Data Interest</div>
        <div class="card-body">
            <form action="{{ route('admin.interest.update', $edit->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="">Interests</label>
                    <textarea name="description_interest" id="" cols="30" rows="10" class="form-control" required>{{ $edit->description_interest }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
