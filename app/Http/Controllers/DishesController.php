<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class DishesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dishes = Dish::get();

        return view("dishes.index",
        [
            'data' => $dishes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dishes.create");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dish = Dish::where("id", $id)->with(['time', 'category'])->first();

        return view("dishes.edit",
        [
            'data' => $dish
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Convert img to base64
        $imageBase64 = "data:image/png;base64,".base64_encode(file_get_contents($request->image));

        $dish = Dish::where("id", $id)->update([
            "name"=> $request->name,
            "description"=> $request->description,
            "image"=> $imageBase64
        ]);

        return redirect()->route("dishes.edit", $dish->id);

        // return redirect()->route("dishes.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish)
    {
        //
    }
}
