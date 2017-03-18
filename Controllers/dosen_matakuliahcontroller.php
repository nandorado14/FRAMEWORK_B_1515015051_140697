<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen_matakuliah;

class dosen_matakuliahcontroller extends Controller
{
    public function awal()
{
	return "Helo dari dosen_matakuliahcontroller";

}
public function tambah()
{
	return $this->simpan();

}
public function simpan()
{
	$dosen_matakuliah = new dosen_matakuliah();
	$dosen_matakuliah->dosen_id = 'a21';
	$dosen_matakuliah->matakuliah_id = 'framework';
	$dosen_matakuliah->save();
	return "data dengan username {$dosen_matakuliah->dosen_id} telah disimpan";
}
}
