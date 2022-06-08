<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;


class GuruController extends Controller
{
    // Guru
    public function index(){
        $data = guru::all();
        return view('guru.guruview', compact('data'));
    }

    public function create(){
        return view('guru.addguru');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama_guru' => 'required',
            'nik' => 'required',
            'mapel' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);
        guru::create($request->all());   
        return redirect()->route('guru');
    }

    public function edit($id){
        $data = guru::find($id);
        return view('guru.editguru', compact('data'));
    }

    public function update(Request $request, $id){
        $data = guru::find($id);
        $data->update($request->all());
        return redirect()->route('guru');
    }

    public function destroy($id){
        $data = guru::find($id);
        $data->delete();
        return redirect()->route('guru');
    }
    // End Guru
}
