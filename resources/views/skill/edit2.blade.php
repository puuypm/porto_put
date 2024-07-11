@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.skill2.update2', $edit->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="">Workflow</label>
                    <input value="{{ $edit->workflow }}" type="text" name="workflow" id="" cols="30" rows="10" class="form-control" required>{{ $edit->workflow }}
                </div>
                <div class="form-group mb-3">
                    <label for="">Bahasa</label>
                    <input value="{{ $edit->bahasa }}" type="text" name="bahasa" id="" cols="30" rows="10" class="form-control" required>{{ $edit->bahasa }}
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
