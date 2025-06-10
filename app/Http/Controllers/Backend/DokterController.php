<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    //
    public function AllDokter(){
        $dokter=Dokter::latest()->get();
        return view('backend.dokter.all_dokter',compact('dokter'));
    }// End Method
}
