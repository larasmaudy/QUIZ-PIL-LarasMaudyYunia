<?php

namespace App\Http\Controllers;
use App\models\Students;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $student = Students::orderBy('id', 'desc')->paginate(3);

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'nama' => 'required|unique:students|max:225',
            'alamat' => 'required',
            'notlp' => 'required|numberic',
            'email' => 'required', 
        ]);


        $student = new Students;

        $student->Nama = $request->nama;
        $student->Alamat = $request->alamat;
        $student->No_Tlp = $request->notlp;
        $student->Email= $request->email;
        $student->save();
    }
    public function show($id)
    {
        $student = Students::where('id', $id)->first();
        return view('students.show', ['students' => $student]);
    }
    public function edit($id)
    {
        $student = Students::where('id', $id)->first();
        return view('students.edit', ['students' => $student]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:students|max:225',
            'alamat' => 'required',
            'notlp' => 'required|numberic',
            'email' => 'required',   
        ]);

        Students::find($id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'notlp' => $request->notlp,
            'email' => $request->email,
        ]);

        return redirect ('/');
    }
    public function destory($id)
    {
        Students::find($id)->delete();
        return redirect ('/'); 
    }
}
