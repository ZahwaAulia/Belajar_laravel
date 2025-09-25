<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return 'Menampilkan data Matakuliah';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
  return 'Menampilkan data Matakuliah';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         return 'Menampilkan data Matakuliah';
    }

    /**
     * Display the specified resource.
     */

public function show($kode = null)
    {
        if($kode){
            return 'Anda mengakses matakuliah' .$kode;


        }else {
            return 'Masukkan Kode matakuliah!';
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return 'Menampilkan data Matakuliah';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
         return 'Menampilkan data Matakuliah';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
         return 'Menampilkan data Matakuliah';
    }
}
