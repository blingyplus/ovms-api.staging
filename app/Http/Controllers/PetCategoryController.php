<?php

namespace App\Http\Controllers;

use App\Models\PetCategory;
use App\Http\Requests\StorePetCategoryRequest;
use App\Http\Requests\UpdatePetCategoryRequest;

class PetCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PetCategory::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePetCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePetCategoryRequest $request)
    {
        return PetCategory::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PetCategory  $petCategory
     * @return \Illuminate\Http\Response
     */
    public function show(StorePetCategoryRequest $request, $petCategory)
    {
        return PetCategory::create($request->all());

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PetCategory  $petCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(UpdatePetCategoryRequest $request, $petCategory)
    {
        $petCategory->update($request->all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePetCategoryRequest  $request
     * @param  \App\Models\PetCategory  $petCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePetCategoryRequest $request, PetCategory $petCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PetCategory  $petCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PetCategory $petCategory)
    {
        //
    }
}
