<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Direction;
use App\Http\Resources\CollectionResource;
use App\Http\Resources\DirectionResource;
use App\Http\Requests\StoreDirectionRequest;
use App\Http\Requests\UpdateDirectionRequest;

class DirectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directions = Direction::get();
        return new CollectionResource($directions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDirectionRequest $request)
    {
        $data = $request->validated();

        if ($request->slike) {
            for ($i = 0; $i < count($request->slike); $i++) {
                $request->validate([
                    'slike.' . $i => 'mimes:png,jpg,jpeg'
                ]);
            }
        }

        if ($request->hasFile('ikonica')) {
            $newimagename = Str::random(25) . '.' . $request->ikonica->extension();

            $request->ikonica->move(storage_path('app/public/smjerovi'), $newimagename);

            $data['ikonica'] = config('app.url') . '/storage/smjerovi/' . $newimagename;
        }

        $direction = Direction::create($data);

        if ($request->slike) {
            foreach ($request->slike as $slika) {
                $newimagename = Str::random(25) . '.' . $slika->extension();
    
                $slika->move(storage_path('app/public/galerija'), $newimagename);
    
                $direction->images()->create([
                    'slika' => config('app.url') . '/storage/galerija/' . $newimagename
                ]);
            }
        }

        return new DirectionResource($direction);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $direction = Direction::where('slug', $slug)->firstOrFail();

        return new DirectionResource($direction);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDirectionRequest $request, $slug)
    {
        $direction = Direction::where('slug', $slug)->firstOrFail();

        $data = $request->validated();

        if ($request->slike) {
            for ($i = 0; $i < count($request->slike); $i++) {
                $request->validate([
                    'slike.' . $i => 'mimes:png,jpg,jpeg'
                ]);
            }
        }

        if ($request->ikonica) {
            $newimagename = Str::random(25) . '.' . $request->ikonica->extension();

            $request->ikonica->move(storage_path('app/public/smjerovi'), $newimagename);

            $data['ikonica'] = config('app.url') . '/storage/smjerovi/' . $newimagename;
        }

        $direction->slug = null;

        $direction->update($data);

        if ($request->slike) {
            foreach ($request->slike as $slika) {
                $newimagename = Str::random(25) . '.' . $slika->extension();
    
                $slika->move(storage_path('app/public/galerija'), $newimagename);
    
                $direction->images()->create([
                    'slika' => config('app.url') . '/storage/galerija/' . $newimagename
                ]);
            }
        }

        return new DirectionResource($direction);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $direction = Direction::where('slug'. $slug)->firstOrFail();
        $direction->delete();
        return [
            'message' => 'Smjer izbrisan.'
        ];
    }
}
