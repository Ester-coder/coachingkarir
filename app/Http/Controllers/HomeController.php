<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    function showcaseconsultant() {
        // Contoh data konsultan
        $consultants = [
            ['name' => 'Consultant 1', 'image' => asset('adminlte/dist/assets/img/avatar.png')],
            ['name' => 'Consultant 2', 'image' => asset('adminlte/dist/assets/img/avatar2.png')],
            ['name' => 'Consultant 3', 'image' => asset('adminlte/dist/assets/img/avatar3.png')],
            // Tambahkan lebih banyak konsultan sesuai kebutuhan
        ];

        return view('home.showcaseconsultant', compact('consultants'));
    }

    function sesi() {
        $schedules = [
            ['date' => '2023-10-01', 'time' => '10:00 AM', 'topic' => 'Introduction to Consulting', 'consultant' => 'Consultant 1'],
            ['date' => '2023-10-02', 'time' => '01:00 PM', 'topic' => 'Advanced Consulting Techniques', 'consultant' => 'Consultant 2'],
            ['date' => '2023-10-03', 'time' => '03:00 PM', 'topic' => 'Client Management', 'consultant' => 'Consultant 3'],
            // Tambahkan lebih banyak jadwal sesuai kebutuhan
        ];
    
        return view('home.sesi', compact('schedules'));
    }

    public function jadwal()
    {
            // Contoh data jadwal sesi
            $schedules = [
                ['title' => 'Introduction to Consulting', 'start' => '2023-10-01T10:00:00', 'consultant' => 'Consultant 1'],
                ['title' => 'Advanced Consulting Techniques', 'start' => '2023-10-02T13:00:00', 'consultant' => 'Consultant 2'],
                ['title' => 'Client Management', 'start' => '2023-10-03T15:00:00', 'consultant' => 'Consultant 3'],
                // Tambahkan lebih banyak jadwal sesuai kebutuhan
            ];

            return view('home.jadwal', compact('schedules'));
    }
}
