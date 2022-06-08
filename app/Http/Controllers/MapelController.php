<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;

class MapelController extends Controller
{
    public function index(){
        $data = mapel::all();
        return view('mapel.mapelview', compact('data'));
    } 

    public function create(){
        return view('mapel.addmapel');
    }

    public function store(Request $request){
        $this->validate($request, [
            'mapel' => 'required'
        ]);
        mapel::create($request->all());   
        return redirect()->route('mapel');
    }

    public function edit($id){
        $data = mapel::find($id);
        return view('mapel.editmapel', compact('data'));
    }

    public function update(Request $request, $id){
        $data = mapel::find($id);
        $data->update($request->all());
        return redirect()->route('mapel');
    }

    public function destroy($id){
        $data = mapel::find($id);
        $data->delete();
        return redirect()->route('mapel');
    }

}
