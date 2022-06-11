<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index(){
        $data = agenda::select('agendas.*', 'gurus.*', 'kelas.*', 'mapels.*', 'agendas.id as id_agenda')
        ->leftJoin('gurus', 'agendas.guru_id', 'gurus.id')
        ->leftJoin('kelas', 'kelas.id', 'agendas.kelas_id')
        ->leftJoin('mapels', 'mapels.id', 'gurus.mapel_id')->get();
        return view('agenda.agendaview', [
            'data' => $data
        ]);
    }

    public function create(){
        $guru = Guru::all();
        $kelas = Kelas::all();
        $mapel = Mapel::all();
        return view('agenda.addagenda',[
            'guru' => $guru,
            'kelas' => $kelas,
            'mapel' => $mapel
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'materi' => 'required',
            'darijam' => 'required',
            'sampaijam' => 'required',
            'metode' => 'required',
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
        $guru = Guru::all();
        $kelas = Kelas::all();
        $mapel = Mapel::all();
        return view('agenda.editagenda', compact('data', 'guru', 'kelas', 'mapel'));
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
