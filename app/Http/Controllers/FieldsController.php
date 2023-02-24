<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFieldsRequest;
use App\Http\Requests\UpdateFieldsRequest;
use App\Models\Fields;

class FieldsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFieldsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Fields $fields)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fields $fields)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFieldsRequest $request, Fields $fields)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fields $fields)
    {
        //
    }
}
