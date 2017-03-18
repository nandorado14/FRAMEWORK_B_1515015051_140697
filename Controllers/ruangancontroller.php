<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruangancontroller extends Controller
{
     public function awal()
{
	return "Helo dari ruangancontroller";

}
public function tambah()
{
	return $this->simpan();

}
public function simpan()
{
	$ruangan = new ruangan();
	$ruangan->title = 'mawar';
	$ruangan->save();
	return "data dengan username {$ruangan->title} telah disimpan";
}
}
