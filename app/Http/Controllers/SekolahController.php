<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function indexsekolah(Request $request)
    {
        return view('sekolah.indexsekolah');
    }

    public function daftarsekolah(Request $request)
    {

        $request->validate([
            'namasekolah'           => 'required',
            'alamatsekolah'         => 'required',
            'namaperwakilan'        => 'required'
        ]);

        $dataStore = [
            'namasekolah'           => $request->namasekolah,
            'alamatsekolah'         => $request->alamatsekolah,
            'namaperwakilan'        => $request->namaperwakilan
        ];
        Sekolah::create($dataStore);
        return redirect('/indexsekolah');
    }
}
