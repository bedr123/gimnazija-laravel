<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\PostResource;
use App\Http\Resources\CollectionResource;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return CollectionResource::make($posts);
    }

    public function store(StorePostRequest $request)
    {
        $data = $request->validated();
        
        if ($request->hasFile('slika')) {
            $newImageName = Str::random(50) . "." . $request->slika->extension();
            $request->slika->move(storage_path('app/public/novosti'), $newImageName);
            $data['slika'] = config('app.url') . '/storage/novosti/' . $newImageName;
        }

        $post = Post::create($data);

        return new PostResource($post);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return new PostResource($post);
    }

    public function update(UpdatePostRequest $request, $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $data = $request->validated();

        if ($request->hasFile('slika')) {
            $newImageName = Str::random(50) . "." . $request->slika->extension();
            $request->slika->move(storage_path('app/public/novosti'), $newImageName);
            $data['slika'] = config('app.url') . '/storage/novosti/' . $newImageName;
        }
        
        $post->slug = null;
        $post->update($data);

        return new PostResource($post);
    }

    public function delete($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->delete();
        return [
            'message' => 'Novost obrisana.'
        ];
    }
}
