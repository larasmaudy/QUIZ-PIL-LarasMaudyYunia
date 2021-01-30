<?php

namespace App\Http\Controllers;
use App\models\Presences;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index()
    {
        $presence = Presences::orderBy('id', 'desc')->paginate(3);

        return view('presences.index', compact('presence'));
    }

    public function create()
    {
        return view('presences.create');
    }

    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'waktu' => 'required|unique:presences|max:225',
            'namamhs' => 'required',
            'mk' => 'required',
            'ket' => 'required', 
        ]);


        $presences = new Presences;

        $presence->Waktu = $request->waktu;
        $presence->Nama_Mahasiswa = $request->namamhs;
        $presence->Mata_Kuliah = $request->mk;
        $presence->Keterangan= $request->ket;
        $presence->save();
    }
    public function show($id)
    {
        $presences = Presences::where('id', $id)->first();
        return view('presences.show', ['presences' => $presence]);
    }
    public function edit($id)
    {
        $presences = Presences::where('id', $id)->first();
        return view('presences.edit', ['presences' => $presence]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'waktu' => 'required|unique:presences|max:225',
            'namamhs' => 'required',
            'mk' => 'required',
            'ket' => 'required',   
        ]);

        Presences::find($id)->update([
            'waktu' => $request->waktu,
            'namamhs' => $request->namamhs,
            'mk' => $request->mk,
            'ket' => $request->ket,
        ]);

        return redirect ('/');
    }
    public function destory($id)
    {
        Presences::find($id)->delete();
        return redirect ('/'); 
    }
}
