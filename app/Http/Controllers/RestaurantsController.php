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
            'logo'=> $response->logo,
            'restaurant_id'=> $response->id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Convert img to base64
        $logoBase64 = "data:image/png;base64,".base64_encode(file_get_contents($request->logo));

        $restaurant = Restaurant::where("id", $id)->update([
            "name"=> $request->name,
            "slogan"=> $request->slogan,
            "logo"=> $logoBase64
        ]);

        return redirect()->route("restaurants.index");
    }
}
