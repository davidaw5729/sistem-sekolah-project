<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\UpdateRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\Student\StoreRequest; 
use League\Uri\QueryString;// <-- Tambahkan baris ini

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $title = "Sistem Sekolah - Daftar Siswa";

        $search = $request->query('search');
        $class = $request->query('class');
        $major = $request->query('major');

        $students = Student::select(['id', 'nis', 'name', 'class', 'major'])
            ->when($search, function ($query, $search) {
                $query->where(function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                             ->orWhere('nis', 'like', "%{$search}%");
                });
            })

        ->when($class,fn($query, $class) =>$query->where('class', '=', $class))
        ->when($major,fn($query, $major) =>$query->where('major', '=', $major))
        ->paginate(10)
        ->withQueryString();

        $SchoolClasses = ['10 AKL','11 AKL', '11 TKJ 1', '11 TKJ 2', '10 BID', '12 TKJ 1','12 TKJ 2', '12 TKJ 3'];
        $majors = ['AKL', 'TKJ', 'BID'];

        return view('students.index', [
            'title' => $title,
            'students' => $students,
            'SchoolClasses' => $SchoolClasses,
            'majors' => $majors
        ]);
    }

    public function create()
    {
        $title = "Sistem Sekolah - Tambah Siswa";
        return view('students.create', ['title' => $title]);
    }

    public function store(StoreRequest $request)
    {
        // Validasi
        $validatedRequest = $request->validated();

        // Tambahkan Data ke Database
        Student::create($validatedRequest);

        // Handle If Success
        return redirect()->route('students.index');
    }

    public function show(Student $student)
    {
        $title = "Sistem Sekolah - Detail Siswa";

        return view('students.show', [
            'title'   => $title,
            'student' => $student
        ]);
    }

    public function edit(Student $student)
    {
        $title = "Sistem Sekolah - Ubah Siswa";
        return view('students.edit', [
            'title'   => $title,
            'student' => $student
        ]);
    }

    public function update(UpdateRequest $request, Student $student)
{
    // Validasi input diambil dari Form Request (UpdateRequest)
    $validatedRequest = $request->validated();

    // Update Data ke database
    $student->update($validatedRequest);

    // Redirect jika sukses
    return redirect()->route('students.index');
}

    public function destroy(Student $student)
    {
        // 1. Hapus data siswa dari database
    $student->delete();

    // 2. Redirect kembali ke halaman daftar siswa (index)
    return redirect()->route('students.index');
        return "Menghapus data siswa";
    }
}