<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',  // Validation rule for 'name'
        ]);
        $validatedData['name']=$request->name;
        Type::create([
            'name' => $validatedData['name'],
        ]);
        return response()->json([
            'message'=>'ur data had been stored',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $getTypes=Type::all();
        return response()->json([
            'message'=>'here is your types',
            'your types'=>$getTypes
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
