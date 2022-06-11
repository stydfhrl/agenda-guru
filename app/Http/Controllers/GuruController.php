<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use App\Models\Mapel;
use Illuminate\Http\Request;


class GuruController extends Controller
{
    // Guru
    public function index(){
        $data = guru::with('guruuser', 'gurumapel')->get();
        return view('guru.guruview', ['data' => $data]);
    }

    public function create(){
        $mapel = Mapel::all();
        $user = User::all();
        return view('guru.addguru',[
            'mapel' => $mapel,
            'user' => $user
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama_guru' => 'required',
            'nik' => 'required',
        ]);
        guru::create($request->all());   
        return redirect()->route('guru');
    }

    public function edit($id){
        $data = guru::find($id);
        $mapel = Mapel::all();
        $user = User::all();
        return view('guru.editguru', compact('data','mapel','user'));
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
