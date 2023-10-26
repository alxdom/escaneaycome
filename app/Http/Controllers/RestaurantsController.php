<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Restaurant::with(['company'])->first();

        return view("restaurants.index",
        [
            'name' => $response->name,
            'slogan' => $response->slogan,
            'company' => $response->company->name,
            'logo'=> $response->logo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
}
