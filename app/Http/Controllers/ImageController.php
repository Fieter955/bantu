<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        $gambar = Image::all();
        return view('uplodimage.index', [
            'image' => $gambar
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar (maksimal 2MB)
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);



            $image = new Image;
            $image->image = $filename;
            $image->save();

            

            return view('uplodimage.index', [
                'image' =>$image
            ]);        }

        return redirect()->back()->with('error', 'Gagal mengunggah gambar');
    }
}
