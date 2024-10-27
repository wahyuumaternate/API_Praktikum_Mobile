@extends('admin.layouts.main', ['title' => 'Books'])

@section('main')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Daftar Buku</h5>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->description }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
