<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index(){
        $data = agenda::all();
        return view('agenda.agendaview', compact('data'));
    }

    public function create(){
        return view('agenda.addagenda');
    }

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
        return redirect()->route('agenda');
    }

    public function edit($id){
        $data = agenda::find($id);
        return view('agenda.editagenda', compact('data'));
    }

    public function update(Request $request, $id){
        $data = agenda::find($id);
        $data->update($request->all());
        if($request->hasFile('screenshot')){
            $request->file('screenshot')->move('dokumentasi/', $request->file('screenshot')->getClientOriginalName());
            $data->screenshot = $request->file('screenshot')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('agenda');
    }

    public function destroy($id){
        $data = agenda::find($id);
        $data->delete();
        return redirect()->route('agenda');
    }
}
