<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $galleries = Gallery::latest()->when(request()->q, function ($galleries) {
            $galleries = $galleries->where('title', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        $today = Carbon::now()->format('Y-m-d');

        return view('admin.gallery.create', compact('today'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2000',
            'title'         => 'required|unique:galleries',
            'publish'       => 'required',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('gallery', $image->hashName(), 'public');

        $gallery = Gallery::create([
            'image'         => $image->hashName(),
            'title'         => $request->input('title'),
            'slider'        => $request->input('slider'),
            'keterangan'    => $request->input('keterangan'),
            'publish'       => $request->publish
        ]);

        if($gallery){
            //redirect dengan pesan sukses
            return redirect()->route('admin.gallery.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.gallery.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title'             => 'required|unique:galleries,title,' . $gallery->id,
            'publish'           => 'required',
        ]);

        if ($request->file('image') == "") {

            $gallery = Gallery::findOrFail($gallery->id);
            $gallery->update([
                'title'         => $request->input('title'),
                'slider'        => $request->input('slider'),
                'keterangan'    => $request->input('keterangan'),
                'publish'       => $request->publish
            ]);
        } else {

            //remove old image
            Storage::disk('public')->delete('gallery/' . $gallery->image);

            //upload new image
            $image = $request->file('image');
            $image->storeAs('gallery', $image->hashName(), 'public');

            $gallery = Gallery::findOrFail($gallery->id);
            $gallery->update([
                'image'         => $image->hashName(),
                'title'         => $request->input('title'),
                'slider'        => $request->input('slider'),
                'keterangan'    => $request->input('keterangan'),
                'publish'       => $request->publish
            ]);
        }

        if ($gallery) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.gallery.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.gallery.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $image = Storage::disk('public')->delete('gallery/' . basename($gallery->image));

        $gallery->delete();

        if ($gallery) {
            return response()->json([
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}
