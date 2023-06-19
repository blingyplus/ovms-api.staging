<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Http\Requests\StoreOwnerRequest;
use App\Http\Requests\UpdateOwnerRequest;
use Illuminate\Http\Request;
use App\Http\Resources\OwnerResource;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Owner::query();

        // Filter by date range
        if ($request->has('start_date') && $request->has('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');
            $query->whereBetween('created_at', [$startDate, $endDate]);
        }

        // Filter by created_by
        if ($request->has('created_by')) {
            $createdBy = $request->input('created_by');
            $query->where('created_by', $createdBy);
        }

        // Filter by delete_status
        $query->where('delete_status', 0);

        $owners = $query->get();

        return OwnerResource::collection($owners);
        return response()->json(['message' => 'Owners retrieved successfully', 'data' => OwnerResource::collection($owners)]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOwnerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOwnerRequest $request)
    {
        return Owner::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Owner  $Owner
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $Owner)
    {
        return new OwnerResource($Owner);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOwnerRequest  $request
     * @param  \App\Models\Owner  $Owner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOwnerRequest $request, Owner $Owner)
    {
        $Owner->update($request->all());
        return response()->json(['message' => 'Owner updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Owner  $Owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $Owner)
    {
        $Owner->delete_status = 1;
        $Owner->save();

        // Optionally, you can return a response indicating the success of the operation
        return response()->json(['message' => 'Owner deleted successfully']);
    }
}
