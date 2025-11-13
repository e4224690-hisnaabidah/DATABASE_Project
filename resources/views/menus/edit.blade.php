@extends('layouts.app')
@section('content')
<div class="card p-4 shadow-lg">
    <div class="card-body">
        <h4 class="fw-bold mb-4 text-center" style="color:#800000;">
            🦑 Edit Menu
        </h4>
        <p class="text-center text-muted mb-4">
            Perbarui data menu yang sudah ada di <strong>Omah Kerang</strong>.
        </p>

        <form action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Menu</label>
                <input 
                    type="text" 
                    name="nama_menu" 
                    class="form-control border-danger shadow-sm" 
                    value="{{ old('nama_menu', $menu->nama_menu) }}">
                @error('nama_menu') 
                    <small class="text-danger">{{ $message }}</small> 
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Harga</label>
                <input 
                    type="number" 
                    name="harga" 
                    class="form-control border-danger shadow-sm" 
                    value="{{ old('harga', $menu->harga) }}">
                @error('harga') 
                    <small class="text-danger">{{ $message }}</small> 
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Foto Menu</label><br>
                @if($menu->foto)
                    <img 
                        src="{{ asset('storage/'.$menu->foto) }}" 
                        width="130" 
                        class="rounded shadow-sm mb-3 border border-3 border-danger" 
                        alt="Foto Menu">
                @endif
                <input type="file" name="foto" class="form-control border-danger shadow-sm">
                @error('foto') 
                    <small class="text-danger">{{ $message }}</small> 
                @enderror
            </div>

            <div class="text-end mt-4">
                <button class="btn btn-success me-2 shadow-sm">💾 Update</button>
                <a href="{{ route('menus.index') }}" class="btn btn-secondary shadow-sm">⬅️ Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
