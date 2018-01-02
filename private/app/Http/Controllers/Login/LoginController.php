<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function proses(Request $request) {
//        dd($request);
        switch ($request->userName) {
            case "pemohon": return redirect()->route('pemohon'); break;
            case "pemeriksa": return redirect()->route('pemeriksa'); break;
            default: return redirect()->route('index'); break;
        }
    }
}
