<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    function tampil() {
        $info = Info::all();
        return view('info.tampil', compact('info'));
    }


    function tambah() {
        return view ('info.tambah');
    }

    function submit(Request $request) {
        $info = new Info();

         $info->title= $request->title;
         $info->description= $request->description;
         $info->fasilitas= $request->fasilitas;
         $info->price= $request->price;
         $info->stock= $request->stock;

         $info->save();

         return redirect()->route('info.tampil');

    }

    function edit($id) {
        $info = Info::find($id);

        return view('info.edit', compact('info'));
    }


    function update(Request $request, $id) {
        $info = Info::find($id);
        $info->title= $request->title;
         $info->description= $request->description;
         $info->fasilitas= $request->fasilitas;
         $info->price= $request->price;
         $info->stock= $request->stock;

         $info->update();

         return redirect()->route('info.tampil');
    }


    function delete($id){
        $info=Info::find($id);
        $info->delete();
        return redirect()->route('info.tampil');
    }
    

}
