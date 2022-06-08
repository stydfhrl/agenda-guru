<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index(){
        $data = kelas::all();
        return view('kelas.kelasview', compact('data'));
    }

    public function create(){
        return view('kelas.addkelas');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama_kelas' => 'required',
            'wali_kelas' => 'required',
        ]);
        kelas::create($request->all());   
        return redirect()->route('kelas');
    }

    public function edit($id){
        $data = kelas::find($id);
        return view('kelas.editkelas', compact('data'));
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
