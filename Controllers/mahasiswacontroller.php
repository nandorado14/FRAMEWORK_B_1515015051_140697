<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswacontroller extends Controller
{
     public function awal()
{
	return "Helo dari mahasiswacontroller";

}
public function tambah()
{
	return $this->simpan();

}
public function simpan()
{
	$mahasiswa = new mahasiswa();
	$mahasiswa->nama = 'dony';
	$mahasiswa->nim = '1515015066';
	$mahasiswa->alamat = 'kstubun';
	$mahasiswa->pengguna_id = 'DR066';
	$mahasiswa->save();
	return "data dengan username {$mahasiswa->username} telah disimpan";
}
}
