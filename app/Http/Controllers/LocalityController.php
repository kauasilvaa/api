<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocalityModels;

class LocalityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $localities = LocalityModels::all();
        return response()->json($localities);
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
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "road" => "required|string|max:255",
            "neighborhood" => "nullable|string",
            "number"=> "required|int",
            "cep"=> "required|int",
            "city"=> "required|string",
            "state"=> "required|string",
            "country"=>"required|string",
            
        ]);
        
        $locality = LocalityModels::create($validatedData);

        return response()->json($locality, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $locality = LocalityModels::find($id);

        if(!$locality){
            return response()->json(["message" => "locality not found"], 404);
        }

        return response()->json($locality);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        {
            $locality = LocalityModels::find($id);
    
            if(!$locality){
                return response()->json(["message" => "locality not found"], 404);
            }
    
            $validatedData = $request->validate([
                
                "road" => "required|string",
                "neighborhood" => "required|string",
                "number"=> "required|int",
                "cep"=> "required|int",
                "city"=> "required|string",
                "state"=> "required|string",
                "country"=>"required|string",
                
            ]);
    
            $locality->update($validatedData);
    
            return response()->json($locality, 200);
        }
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $locality = LocalityModels::find($id); 

        if(!$locality){
            return response()->json(["message" => "locality not found"], 404);
        }

        $locality->delete();

        return response()->json(["message" => "locality deleted successfully"], 200);
    }
}
