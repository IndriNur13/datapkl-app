<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class PesertaController extends Controller
{

    public function indexpeserta(Request $request)
    {
        $data = [
            'sekolah'           => Sekolah::all(),
            'datapeserta'       => Peserta::with('sekolah')->get()
        ];
        return view('peserta.indexpeserta', $data);
    }

    public function daftarpeserta(Request $request)
    {
        $request->validate([
            'namapeserta'           => 'required',
            'nis'                   => 'required',
            'sekolah_id'            => 'required',
            'jurusan'               => 'required'
        ]);

        $dataStore = [
            'namapeserta'           => $request->namapeserta,
            'nis'                   => $request->nis,
            'sekolah_id'            => $request->sekolah_id,
            'jurusan'               => $request->jurusan
        ];
        Peserta::create($dataStore);
        return redirect('/indexpeserta');
    }

    public function hapus(Request $request, $id)
    {
        Peserta::where('id', $id)->delete();
        return redirect('/indexpeserta');
    }
}
