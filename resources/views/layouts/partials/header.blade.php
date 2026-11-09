<header class="bg-[#16213A] text-white">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
        <div>
            <a href="{{ route('students.index') }}" class="font-display text-lg font-semibold tracking-wide text-white">
                Sistem Sekolah
            </a>
            <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400">Buku Induk Siswa</p>
        </div>

        <nav class="flex items-center gap-8 text-xs uppercase tracking-[0.15em]">
            <a href="{{ route('students.index') }}" 
               class="transition hover:text-amber-400 {{ request()->routeIs('students.*') ? 'text-amber-400 font-semibold' : 'text-slate-300' }}">
                Siswa
            </a>
            <a href="{{ route('teachers.index') }}" 
               class="transition hover:text-amber-400 {{ request()->routeIs('teachers.*') ? 'text-amber-400 font-semibold' : 'text-slate-300' }}">
                Guru
            </a>
            <a href="{{ route('classes.index') }}" 
               class="transition hover:text-amber-400 {{ request()->routeIs('classes.*') ? 'text-amber-400 font-semibold' : 'text-slate-300' }}">
                Kelas
            </a>
            <a href="{{ route('majors.index') }}" 
               class="transition hover:text-amber-400 {{ request()->routeIs('majors.*') ? 'text-amber-400 font-semibold' : 'text-slate-300' }}">
                Jurusan
            </a>
        </nav>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="py-2 px-4 bg-amber-600 rounded-lg text-white hover:bg-amber-700">
                LOGOUT
            </button>
        </form>
    </div>
</header>