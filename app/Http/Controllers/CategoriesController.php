<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CollectionResource;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return CollectionResource::make($categories);
    }

    public function store(Request $request)
    {
        $request->validate([
            'naziv' => 'string|required'
        ]);

        $category = Category::create([
            'naziv' => $request->naziv
        ]);

        return new CategoryResource($category);
    }

    public function delete($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $category->delete();

        return [
            'message' => 'Kategorija izbrisana.'
        ];
    }
}
