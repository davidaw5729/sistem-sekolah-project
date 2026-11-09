<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    private function getTeachersData(): array
    {
        return [
            [
                'id' => 1,
                'nip' => '198501012024',
                'name' => 'Budi Santoso',
                'gender' => 'Laki-Laki',
                'subject' => 'Akuntansi Dasar',
                'phone_number' => '081234560001',
                'status' => 'Aktif',
            ],
            [
                'id' => 2,
                'nip' => '198703152024',
                'name' => 'Siti Aminah',
                'gender' => 'Perempuan',
                'subject' => 'Jaringan Komputer',
                'phone_number' => '081234560002',
                'status' => 'Aktif',
            ]
        ];
    }

    public function index() 
    {
        return view('teachers.index', [
            'title' => 'Sistem Sekolah - Daftar Guru',
            'teachers' => $this->getTeachersData(),
        ]);
    }

    public function show(string $id) 
    {
        $teachers = $this->getTeachersData();
        $teacher = collect($teachers)->firstWhere('id', (int) $id);

        if (!$teacher) {
            abort(404, 'Data guru tidak ditemukan');
        }

        return view('teachers.show', [
            'title' => 'Sistem Sekolah - Detail Guru',
            'teacher' => $teacher,
        ]);
    }
    
    public function create() 
    {
        return view('teachers.create', [
            'title' => 'Sistem Sekolah - Tambah Guru',
        ]);
    } 

    public function edit(string $id) 
    {
        $teachers = $this->getTeachersData();
        $teacher = collect($teachers)->firstWhere('id', (int) $id);

        if (!$teacher) {
            abort(404, 'Data guru tidak ditemukan');
        }

        return view('teachers.edit', [
            'title' => 'Sistem Sekolah - Edit Guru',
            'teacher' => $teacher,
        ]);
    }  

    public function store(Request $request) 
    {
        return "Melakukan penambahan data guru";
    }  

    public function update(Request $request, string $id) 
    {
        return "Melakukan perubahan data guru dengan ID: {$id}";
    }  

    public function destroy(string $id) 
    {
        return "Menghapus data guru dengan ID: {$id}";
    }  
}