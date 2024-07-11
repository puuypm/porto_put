@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title->workflow }}</div>
        <div class="card-body">
            <form action="{{ route('admin.skill2.store') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Workflow</label>
                    <input type="text" textarea name="workflow" id="" cols="30" rows="10" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Bahasa</label>
                    <input type="text" name="bahasa" id="" cols="30" rows="10" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
