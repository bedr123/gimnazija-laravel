<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Resources\CollectionResource;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Staff::all();
        return CollectionResource::make($staff);
    }

    public function store(StoreStaffRequest $request)
    {
        $data = $request->validated();

        $staff = Staff::create($data);

        return new StaffResource($staff);
    }

    public function show($slug)
    {
        $staff = Staff::where('slug', $slug)->firstOrFail();

        return new StaffResource($staff);
    }

    public function delete($slug)
    {
        $staff = Staff::where('slug', $slug)->firstOrFail();
        
        $staff->delete();
    }
}
