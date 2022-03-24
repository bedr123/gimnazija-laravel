<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\IndexSlider;
use App\Http\Resources\IndexSliderResource;
use App\Http\Resources\CollectionResource;

class IndexSliderController extends Controller
{
    public function index()
    {
        $indexSlider = IndexSlider::all();
        
        return new CollectionResource($indexSlider);
    }
    
    public function store(Request $request) {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);
        

        $newimagename = Str::random(20) . "." . $request->image->extension();

        $request->image->move(storage_path('app/public/slider'), $newimagename);

        $sliderimage = IndexSlider::create([
            'image' => config('app.url') . '/storage/slider/' . $newimagename,
            'order' => $request->order
        ]);

        return new IndexSliderResource($sliderimage);
    }

    public function update(Request $request, $id) {
        $sliderimage = IndexSlider::findOrFail($id);
        
        $sliderimage->update([
            'order' => $request->order
        ]);

        return new IndexSliderResource($sliderimage);
    }

    public function destroy($id) {
        $indexSlider = IndexSlider::findOrFail($id);
        $indexSlider->delete();
        return response()->json([
            'message' => 'Uspjesno izbrisano.'
        ]);
    }
}
