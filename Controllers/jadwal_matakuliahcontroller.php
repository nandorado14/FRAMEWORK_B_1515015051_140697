<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;

class jadwal_matakuliahcontroller extends Controller
{
     public function awal()
{
	return "Helo dari jadwal_matakuliahcontroller";

}
public function tambah()
{
	return $this->simpan();

}
public function simpan()
{
	$jadwal_matakuliah = new jadwal_matakuliah();
	$jadwal_matakuliah->mahasiswa_id = 'N0001';
	$jadwal_matakuliah->ruangan_id = '405';
	$jadwal_matakuliah->dosen_matakuliah_id = 'a21';
	$jadwal_matakuliah->save();
	return "data dengan username {$jadwal_matakuliah->mahasiswa_id} telah disimpan";
}
}
