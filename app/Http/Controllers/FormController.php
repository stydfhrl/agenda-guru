<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;


class FormController extends Controller
{
    public function index(){
        $data = agenda::all();
        return view('formview', compact('data'));
    }

    // public function create(){
    //     return view('formview');
    // }

    public function store(Request $request){
        $this->validate($request, [
            'nama_guru' => 'required',
            'mapel' => 'required',
            'materi' => 'required',
            'darijam' => 'required',
            'sampaijam' => 'required',
            'absensi' => 'required',
            'nama_kelas' => 'required',
            'metode' => 'required',
            'link_belajar' => 'required',
            'screenshot' => 'required',
            'keterangan' => 'required',
        ]);
        $data = agenda::create($request->all());   
        if($request->hasFile('screenshot')){
            $request->file('screenshot')->move('dokumentasi/', $request->file('screenshot')->getClientOriginalName());
            $data->screenshot = $request->file('screenshot')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('form');
    }

    public function destroy($id){
        $data = agenda::find($id);
        $data->delete();
        return redirect()->route('form');
    }
}
