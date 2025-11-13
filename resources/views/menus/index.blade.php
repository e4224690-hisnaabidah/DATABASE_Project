@extends('layouts.app')
@section('content')
<div class="text-center mb-4">
</div>

<div class="d-flex justify-content-end mb-3">
    <a href="{{ route('menus.create') }}" class="btn btn-primary shadow-sm px-3">+ Tambah Menu</a>
</div>

<div class="table-responsive shadow-sm rounded">
    <table class="table align-middle text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Menu</th>
                <th>Foto</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody style="background-color:#fff;">
            @foreach($menus as $menu)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="fw-semibold" style="color:#990E0E;">{{ $menu->nama_menu }}</td>
                    <td>
                        @if($menu->foto)
                            <img src="{{ asset('storage/'.$menu->foto) }}" width="100" class="rounded shadow-sm" style="border:3px solid #FFF0C4;">
                        @else
                            <small class="text-muted">Tidak ada</small>
                        @endif
                    </td>
                    <td class="fw-bold text-danger">Rp {{ number_format($menu->harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-warning btn-sm">✏️ Edit</a>
                        <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus menu ini? 😢')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">🗑️ Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
