<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    //
    public function AllPasien(){
        $pasien=Pasien::latest()->get();
        return view('backend.pasien.all_pasien',compact('pasien'));
    }// End Method
}
