<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Mews\Purifier\Facades\Purifier;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->when(request()->q, function ($posts) {
            $posts = $posts->where('title', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::latest()->get();
        $today = Carbon::now()->format('Y-m-d');

        return view('admin.post.create', compact('categories', 'today'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2000',
            'title'         => 'required|unique:posts',
            'category_id'   => 'required',
            'content'       => 'required',
            'publish'       => 'required',
        ]);

        //upload image
        $image = $request->file('image');
        //$image->storeAs('public/posts', $image->hashName());

        $image->storeAs('posts', $image->hashName(), 'public');

        $post = Post::create([
            'image'       => $image->hashName(),
            'title'       => $request->input('title'),
            'slug'        => Str::slug($request->input('title'), '-'),
            'category_id' => $request->input('category_id'),
            'content'     => Purifier::clean($request->input('content')),
            'publish'     => $request->publish
        ]);

        if ($post) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.post.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.post.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Post $post)
    {
        $categories = Category::latest()->get();
        return view('admin.post.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title'         => 'required|unique:posts,title,' . $post->id,
            'category_id'   => 'required',
            'content'       => 'required',
            'publish'       => 'required',
        ]);

        if ($request->file('image') == "") {

            $post = Post::findOrFail($post->id);
            $post->update([
                'title'       => $request->input('title'),
                'slug'        => Str::slug($request->input('title'), '-'),
                'category_id' => $request->input('category_id'),
                'content'     => Purifier::clean($request->input('content')),
                'publish'     => $request->publish
            ]);
        } else {

            //remove old image
            Storage::disk('public')->delete('posts/' . $post->image);

            //upload new image
            $image = $request->file('image');
            $image->storeAs('posts', $image->hashName(), 'public');

            $post = Post::findOrFail($post->id);
            $post->update([
                'image'       => $image->hashName(),
                'title'       => $request->input('title'),
                'slug'        => Str::slug($request->input('title'), '-'),
                'category_id' => $request->input('category_id'),
                'content'     => Purifier::clean($request->input('content')),
                'publish'     => $request->publish
            ]);
        }

        if ($post) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.post.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.post.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $image = Storage::disk('public')->delete('posts/' . basename($post->image));

        $post->delete();

        if ($post) {
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
