<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengukuran;
use App\Http\Controllers\Controller;

class PengukuranController extends Controller
{
    public function file()
    {
        //$data = Home::paginate(1);
        //$data = Home::getTable('homes')->latest('created_at')->first();
        $data = Pengukuran::latest('id')->first();
        return view('pengukuran',['data'=>$data]);
    }
}
