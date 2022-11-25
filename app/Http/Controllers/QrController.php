<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qrcode;

class QrController extends Controller
{
    public function index()
    {
        $qrcode = Qrcode::all();
        return view('qrcode', [
            'data'  =>  $qrcode
        ]);
    }
}
