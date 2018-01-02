<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class APIController extends Controller
{
    //
    public function getDaerah() {
        $label = Input::get('value');
        $data = DB::table('m_daerah_kelurahan')
            ->join('m_daerah_kecamatan', 'm_daerah_kelurahan.id_kec', '=', 'm_daerah_kecamatan.id_kec')
            ->join('m_daerah_kabupaten', 'm_daerah_kecamatan.id_kab', '=', 'm_daerah_kabupaten.id_kab')
            ->join('m_daerah_provinsi', 'm_daerah_kabupaten.id_prov', '=', 'm_daerah_provinsi.id_prov')
            ->select(
                DB::raw('upper(m_daerah_kelurahan.nama) as kelurahan'),
                DB::raw('upper(m_daerah_kecamatan.nama) as kecamatan'),
                DB::raw('upper(m_daerah_kabupaten.nama) as kabupaten'),
                DB::raw('upper(m_daerah_provinsi.nama) as provinsi'),
                DB::raw('concat(
                    upper(m_daerah_kelurahan.nama), ", ",
                    upper(m_daerah_kecamatan.nama), ", ",
                    upper(m_daerah_kabupaten.nama), ", ",
                    upper(m_daerah_provinsi.nama)
                ) as daerah')
            )
            ->where('m_daerah_kelurahan.nama', 'like', '%'.$label.'%')
            ->orWhere('m_daerah_kecamatan.nama', 'like', '%'.$label.'%')
            ->orWhere('m_daerah_kabupaten.nama', 'like', '%'.$label.'%')
            ->orWhere('m_daerah_provinsi.nama', 'like', '%'.$label.'%')
            ->limit(10)
            ->get()
        ;

        return json_encode($data);
    }
}
