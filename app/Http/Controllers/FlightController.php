<?php

namespace App\Http\Controllers;

use App\Models\flight;
use App\Http\Requests\StoreflightRequest;
use App\Http\Requests\UpdateflightRequest;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return flight::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(flight $request)
    {
        flight::create($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreflightRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(flight $flight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(flight $flight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateflightRequest $request, flight $flight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(flight $flight)
    {
        //
    }
}
