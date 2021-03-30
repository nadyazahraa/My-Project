<?php

namespace App\Http\Controllers;

use App\Models\Milk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;

class MilkController extends Controller
{
    public function index()
    {
        $milks = Milk::all();
        return view('admin.view', compact('milks'));
    }


    public function create()
    {
        return view('admin.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar'      => 'required|image|mimes:png,jpg,jpeg',
            'judul'       => 'required',
            'harga'       => 'required',
            'description' => 'required',
        ]);

        //upload image
        $image = $request->file('gambar');
        $imageName = $image->hashName();
        $request->gambar->move(public_path('img'), $imageName);

        $milks = Milk::create([
            'gambar'      => $imageName,
            'judul'       => $request->judul,
            'harga'       => $request->harga,
            'description' => $request->description
        ]);

        return redirect('milk');
    }


    public function edit($id)
    {
        $milks = Milk::findOrFail($id);
        return view('admin.edit', ['milks' => $milks]);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul'       => 'required',
            'harga'       => 'required',
            'description' => 'required',
        ]);

        //get data Milks by ID
        $milks = Milk::findOrFail($id);

        if($request->file('gambar') == "") {

            $milks->update([
                'judul'       => $request->judul,
                'harga'       => $request->harga,
                'description' => $request->description
            ]);

        } else {

            //hapus old image
            File::delete('img/'.$milks->gambar);

            //upload new image
            $image = $request->file('gambar');
            $imageName = $image->hashName();
            $request->gambar->move(public_path('img'), $imageName);

            $milks->update([
                'gambar'      => $imageName,
                'judul'       => $request->judul,
                'harga'       => $request->harga,
                'description' => $request->description
            ]);
        }

        return redirect('milk');
    }


    public function destroy($id)
    {
        $milks = Milk::findOrFail($id);
        File::delete('img/'.$milks->gambar);
        $milks->delete();

        return redirect('milk');
    }

}