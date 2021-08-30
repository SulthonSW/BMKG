<?php

namespace App\Http\Controllers;

use App\Models\Pengukuran;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function cpeng(request $request)
    {
        $input = new Pengukuran;
        $input->suhu = $request->suhu;
        $input->arah_angin = $request->arah_angin;
        $input->curah_hujan = $request->curah_hujan;
        $input->tekanan_udara = $request->tekanan_udara;
        $input->kelembaban = $request->kelembaban;
        $input->save();
    }

    public function speng()
    {
     return Pengukuran::all();
    }
}
