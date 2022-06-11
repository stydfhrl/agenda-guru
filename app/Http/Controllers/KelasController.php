<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){
        $data = kelas::select('kelas.*', 'gurus.*', 'kelas.id as id_kelas')
        ->leftJoin('gurus', 'kelas.guru_id', 'gurus.id')
        ->paginate(5);
        return view('kelas.kelasview', compact('data'));
    }

    public function create(){
        $guru = Guru::all();
        return view('kelas.addkelas',[
            'guru' => $guru
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama_kelas' => 'required',
        ]);
        kelas::create($request->all());   
        return redirect()->route('kelas');
    }

    public function edit($id){
        $data = kelas::find($id);
        $guru = Guru::all();
        return view('kelas.editkelas', compact('data', 'guru'));
    }

    public function update(Request $request, $id){
        $data = kelas::find($id);
        $data->update($request->all());
        return redirect()->route('kelas');
    }

    public function destroy($id){
        $data = kelas::find($id);
        $data->delete();
        return redirect()->route('kelas');
    }
}
