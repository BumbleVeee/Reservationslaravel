<?php

namespace App\Http\Controllers;

use App\Models\airline;
use App\Http\Requests\StoreairlineRequest;
use App\Http\Requests\UpdateairlineRequest;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return airline::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        airline::create($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        airline::create($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(airline $airline)
    {
        return airline::find($airline);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(airline $airline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        airline::find($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(airline $airline)
    {
        airline::find($airline)->delete();
    }
}
