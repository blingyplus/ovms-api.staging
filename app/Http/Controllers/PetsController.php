<?php
namespace App\Http\Controllers;

use App\Models\Pets;
use Illuminate\Http\Request;
use App\Http\Requests\StorePetsRequest;
use App\Http\Requests\UpdatePetsRequest;
use App\Http\Resources\PetResource;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = Pets::where('delete_status', 0)->get();
        return response()->json(['message' => 'Pets retrieved successfully', 'data' => $pets]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePetsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePetsRequest $request)
    {
        $pet = Pets::create($request->all());
        return response()->json(['message' => 'Pet created successfully', 'data' => $pet], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pet = Pets::findOrFail($id);
        return response()->json(['message' => 'Pet retrieved successfully', 'data' => new PetResource($pet)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePetsRequest  $request
     * @param  \App\Models\Pets  $pets
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePetsRequest $request, Pets $pets)
    {
        $pets->update($request->all());
        return response()->json(['message' => 'Pet updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pets  $pets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pets $pets)
    {
        $pets->delete_status = 1;
        $pets->save();
        return response()->json(['message' => 'Pet deleted successfully']);
    }
}

