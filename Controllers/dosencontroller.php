<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosencontroller extends Controller
{
	  public function awal()
{
	return "Helo dari dosencontroller";

}
public function tambah()
{
	return $this->simpan();

}
public function simpan()
{
	$dosen = new dosen();
	$dosen->nama = 'nando';
	$dosen->nip = '12345';
	$dosen->alamat = 'kstubun';
	$dosen->save();
	return "data dengan username {$dosen->nama} telah disimpan";
    
}
}
