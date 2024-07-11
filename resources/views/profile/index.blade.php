@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <div align="right" class="mb-3">
                <a href="{{ route('admin.profile.create') }}" class="btn btn-primary">Tambah Profile</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Nomor Telepon</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Deskripsi</th>
                            <th>LinkedIn</th>
                            <th>Github</th>
                            <th>Instagram</th>
                            <th>Facebook</th>
                            <th>Youtube</th>
                            <th>Tiktok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->fullname }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->address }}</td>
                                <td>{{ $data->description }}</td>
                                <td>{{ $data->linkedin_link }}</td>
                                <td>{{ $data->github_link }}</td>
                                <td>{{ $data->instagram_link }}</td>
                                <td>{{ $data->facebook_link }}</td>
                                <td>{{ $data->youtube_link }}</td>
                                <td>{{ $data->tiktok_link }}</td>
                                <td>
                                    <a href="{{ route('admin.profile.edit', $data->id) }}"
                                        class="btn btn-success btn-sm">Edit</a>

                                    <form method="POST" action="{{ route('admin.profile.destroy', $data->id) }}"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
