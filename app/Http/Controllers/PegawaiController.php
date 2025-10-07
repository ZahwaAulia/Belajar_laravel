<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;


class PegawaiController extends Controller
{


    public function index()
    {
        $name = "Zahwa";
        $tanggal_lahir = "2006-08-31";
        $hari_ini = date("Y-m-d");
        $umur = date_diff(date_create($tanggal_lahir), date_create($hari_ini))->y;


        $hobbies = ["Membaca Novel", "main badminton"];


        $tgl_harus_wisuda = "2028-10-26";


        $selisih_hari = (strtotime($tgl_harus_wisuda) - strtotime($hari_ini)) / 60 / 60 / 24;


        $current_semester = 4;


        if ($current_semester < 4) {
            $message = "Masih Awal, Kejar TAK!";
        } else {
            $message = "Jangan main-main, kurang-kurangi main game!";
        }


        $future_goal = "Software Engineer";


        return view('index', [
            'name' => $name,
            'my_age' => $umur,
            'hobbies' => $hobbies,
            'tgl_harus_wisuda' => $tgl_harus_wisuda,
            'time_to_study_left' => $selisih_hari,
            'current_semester' => $current_semester,
            'message' => $message,
            'future_goal' => $future_goal
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
}


