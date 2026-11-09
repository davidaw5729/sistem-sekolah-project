@extends('layouts.app')

@section('title', $title)

@section('content')
    
    @if ($errors->any())
        <x-alert type="WARNING">
            Terdapat kesalahan ketika menambahkan data jurusan baru ke dalam sistem sekolah
        </x-alert>
    @endif

    <div class="mb-8 border-b border-[#E5E3DB] pb-5">
    
        <a href="{{ route('majors.index') }}" class="text-xs uppercase tracking-[0.15em] text-slate-400 hover:text-[#A16207]">&larr; Buku
            Induk</a>
        <h1 class="font-display mt-2 text-3xl font-semibold text-[#16213A]">Catat Jurusan Baru</h1>
        <p class="mt-1 text-sm text-slate-500">Isi data untuk mendaftarkan jurusan ke buku induk.</p>
    </div>

    <form action="{{ route('majors.store') }}" method="POST" class="space-y-6 border border-[#E5E3DB] bg-white p-8">
        @csrf

      
        <div>
            <label for="code"
                class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Kode Jurusan</label>
            <input type="text" id="code" name="code" value="{{ old('code') }}" placeholder="Contoh: AKL, TKJ, BID"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm placeholder:text-slate-400 focus:border-[#A16207] focus:bg-white focus:outline-none @error('code') border-red-500 @enderror">
            @error('code')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

       
        <div>
            <label for="name"
                class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Nama Jurusan</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Contoh: Akuntansi dan Keuangan Lembaga"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm placeholder:text-slate-400 focus:border-[#A16207] focus:bg-white focus:outline-none @error('name') border-red-500 @enderror">
            @error('name')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

      
        <div>
            <label for="description"
                class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Deskripsi</label>
            <textarea id="description" name="description" rows="3" placeholder="Penjelasan singkat mengenai jurusan"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm placeholder:text-slate-400 focus:border-[#A16207] focus:bg-white focus:outline-none @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
            @error('description')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

       
        <div class="flex justify-end gap-4 border-t border-[#EFEDE6] pt-6">
            <a href="{{ route('majors.index') }}" class="px-4 py-2.5 text-sm font-medium text-slate-500 hover:text-[#16213A]">Batal</a>
            <button type="submit"
                class="bg-[#16213A] px-6 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">Simpan
                ke Buku Induk</button>
        </div>
    </form>
@endsection