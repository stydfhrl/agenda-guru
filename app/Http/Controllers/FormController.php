<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Agenda;
use Illuminate\Http\Request;


class FormController extends Controller
{
    public function index(){
        $guru = Guru::all();
        $mapel = Mapel::all();
        $kelas = Kelas::all();
        $data = agenda::select('agendas.*', 'gurus.*', 'kelas.*', 'mapels.*', 'agendas.id as id_agenda')
        ->leftJoin('gurus', 'agendas.guru_id', 'gurus.id')
        ->leftJoin('kelas', 'kelas.id', 'agendas.kelas_id')
        ->leftJoin('mapels', 'mapels.id', 'gurus.mapel_id')->get();

        return view('formview', compact('data'),[
            'data' => $data,
            'guru' => $guru,
            'mapel' => $mapel,
            'kelas' => $kelas
        ]);
    }

    // public function create(){
    //     return view('formview');
    // }

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
        return redirect()->route('form');
    }

    public function destroy($id){
        $data = agenda::find($id);
        $data->delete();
        return redirect()->route('form');
    }
}
