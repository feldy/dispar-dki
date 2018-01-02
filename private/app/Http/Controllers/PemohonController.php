<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemohonController extends Controller
{
    public function index(Request $request) {
//        dd($request);
        switch ($request->status) {
            case "new": return view('pages.pemohon.forminput'); break;
            case "verified": return view('pages.pemohon.dump.forminput-verified'); break;
            case "rejected": return view('pages.pemohon.dump.forminput-rejected'); break;
            default: return view('pages.pemohon.home'); break;
        }
    }
}
