<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Client::all();
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
    public function store(StoreClientRequest $request)
    {
        //

        return Client::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($client)
    {
        //
        return Client::findOrFail($client);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request,  $client)
    {
        //
        $client = Client::findOrFail($client);
        $client->update($request->all());
        return $client;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($client)
    {
        //
        return Client::destroy($client);
    }
}
