@extends('layouts.app')
@section('content')
<div class="card p-4 shadow-lg">
    <div class="card-body">
        <h4 class="fw-bold mb-4 text-center" style="color:#800000;">
            🍤 Tambah Menu Baru
        </h4>
        <p class="text-center text-muted mb-4">
            Isi data menu baru yang akan ditambahkan ke daftar <strong>Omah Kerang</strong>.
        </p>

        <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Menu</label>
                <input 
                    type="text" 
                    name="nama_menu" 
                    class="form-control border-danger shadow-sm" 
                    placeholder="Contoh: Udang Saus Padang" 
                    value="{{ old('nama_menu') }}">
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
                    placeholder="Contoh: 15000" 
                    value="{{ old('harga') }}">
                @error('harga') 
                    <small class="text-danger">{{ $message }}</small> 
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Foto Menu</label>
                <input type="file" name="foto" class="form-control border-danger shadow-sm">
                @error('foto') 
                    <small class="text-danger">{{ $message }}</small> 
                @enderror
            </div>

            <div class="text-end mt-4">
                <button class="btn btn-success me-2 shadow-sm">💾 Simpan</button>
                <a href="{{ route('menus.index') }}" class="btn btn-secondary shadow-sm">⬅️ Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
