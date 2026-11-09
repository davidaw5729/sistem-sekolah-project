@extends('layouts.app')

@section('title', $title)

@section('content')
    
    @if ($errors->any())
        <x-alert type="WARNING">
            Terdapat kesalahan ketika memperbarui data jurusan ke dalam sistem sekolah
        </x-alert>
    @endif

    <div class="mb-8 border-b border-[#E5E3DB] pb-5">
   
        <a href="{{ route('majors.index') }}" class="text-xs uppercase tracking-[0.15em] text-slate-400 hover:text-[#A16207]">&larr; Buku
            Induk</a>
        <h1 class="font-display mt-2 text-3xl font-semibold text-[#16213A]">Ubah Data Jurusan</h1>
        <p class="mt-1 text-sm text-slate-500">Memperbarui catatan Jurusan <span
                class="font-medium text-[#16213A]">{{ $major['code'] ?? $major->code ?? 'Jurusan' }}</span>.</p>
    </div>

    <form action="{{ route('majors.update', $major['id'] ?? $major->id ?? 1) }}" method="POST" class="space-y-6 border border-[#E5E3DB] bg-white p-8">
        @csrf
        @method('PUT')

   
        <div>
            <label for="code"
                class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Kode Jurusan</label>
            <input type="text" id="code" name="code" value="{{ old('code', $major['code'] ?? $major->code ?? '') }}"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm placeholder:text-slate-400 focus:border-[#A16207] focus:bg-white focus:outline-none @error('code') border-red-500 @enderror">
            @error('code')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

    
        <div>
            <label for="name"
                class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Nama Jurusan</label>
            <input type="text" id="name" name="name" value="{{ old('name', $major['name'] ?? $major->name ?? '') }}"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm placeholder:text-slate-400 focus:border-[#A16207] focus:bg-white focus:outline-none @error('name') border-red-500 @enderror">
            @error('name')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

       
        <div>
            <label for="description"
                class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Deskripsi</label>
            <textarea id="description" name="description" rows="3"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm placeholder:text-slate-400 focus:border-[#A16207] focus:bg-white focus:outline-none @error('description') border-red-500 @enderror">{{ old('description', $major['description'] ?? $major->description ?? '') }}</textarea>
            @error('description')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
            @enderror
        </div>

      
        <div class="flex justify-end gap-4 border-t border-[#EFEDE6] pt-6">
            <a href="{{ route('majors.index') }}" class="px-4 py-2.5 text-sm font-medium text-slate-500 hover:text-[#16213A]">Batal</a>
            <button type="submit"
                class="bg-[#16213A] px-6 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">Perbarui
                Catatan</button>
        </div>
    </form>
@endsection