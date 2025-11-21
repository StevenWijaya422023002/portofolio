<?php

namespace App\Http\Controllers;

use App\Models\foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FotoController extends Controller
{
     function tampil() {
        $foto = foto::all();
        return view('foto.tampil', compact('foto'));
    }


    function tambah() {
        return view ('foto.tambah');
    }

     public function submit(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $request->file('image')->store('foto', 'public');

        $foto = new Foto();
        $foto->image = $path;
        $foto->save();

        return redirect()->route('foto.tampil')->with('success', 'Gambar berhasil diupload!');
    }

    function edit($id) {
        $foto = Foto::find($id);

        return view('foto.edit', compact('foto'));
    }


   public function update(Request $request, $id)
    {
        
        $request->validate([
            'image' => 'image|mimes:jpeg,jpg,png|max:2048',
        ]);

        
        $foto = Foto::find($id);

        
        if ($request->file('image')) {


            Storage::disk('public')->delete($foto->image);
           
            
            $path = $request->file('image')->store('foto', 'public');
            $foto->image = $path;
        }

        $foto->save();

        return redirect()
            ->route('foto.tampil')
            ->with('success', 'Foto berhasil diperbarui!');
    }



     function delete($id){
        $foto=foto::find($id);
        $foto->delete();
        return redirect()->route('foto.tampil');
    }
}
