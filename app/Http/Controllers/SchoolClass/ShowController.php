<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.// Ethan source code is here, if you read this please inform it to me.
     */
    public function __invoke(Request $request, string $id)
    {
    $title = "Sistem Sekolah - Detail Kelas";
    $classes = [
            [
                'id' => 1,
                'name' => 'XII AKL 1',
                'grade' => 'XII',
                'major' => 'AKL',
                'homeroom_teacher' => 'Budi Santoso'
            ],
            [
                'id' => 2,
                'name' => 'XII TKJ 1',
                'grade' => 'XII',
                'major' => 'TKJ',
                'homeroom_teacher' => 'Siti Aminah'
            ]
    ];

        return view('classes.show', [
            'title' => $title,
            'classes' => $classes,
        ]);
    }
}