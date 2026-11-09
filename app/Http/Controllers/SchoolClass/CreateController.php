<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        $title = 'Sistem Sekolah - Tambah Kelas';
        $majors = [
            ['id' => 1, 'name' => 'Akuntansi dan Keuangan Lembaga'],
            ['id' => 2, 'name' => 'Teknik Komputer dan Jaringan'],
            ['id' => 3, 'name' => 'Bisnis Digital'],
        ];
        $teachers = [
            ['id' => 1, 'name' => 'Budi Santoso'],
            ['id' => 2, 'name' => 'Siti Aminah'],
        ];

        return view('classes.create', compact('title', 'majors', 'teachers'));
    }
}