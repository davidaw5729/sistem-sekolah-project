<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function __invoke($id)
    {
        $title = 'Sistem Sekolah - Edit Kelas';
        $classes = [
            [
                'id' => 1,
                'name' => 'XII AKL 1',
                'grade' => 'XII',
                'major_id' => 1,
                'teacher_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'XII TKJ 1',
                'grade' => 'XII',
                'major_id' => 2,
                'teacher_id' => 2,
            ]
        ];

        $class = collect($classes)->firstWhere('id', (int) $id);

        if (!$class) {
            abort(404);
        }

        $majors = [
            ['id' => 1, 'name' => 'Akuntansi dan Keuangan Lembaga'],
            ['id' => 2, 'name' => 'Teknik Komputer dan Jaringan'],
            ['id' => 3, 'name' => 'Bisnis Digital'],
        ];
        $teachers = [
            ['id' => 1, 'name' => 'Budi Santoso'],
            ['id' => 2, 'name' => 'Siti Aminah'],
        ];

        return view('classes.edit', compact('title', 'class', 'majors', 'teachers'));
    }
}