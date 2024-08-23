<?php

namespace App\Http\Controllers;
use App\Models\CompetitorModels;

use Illuminate\Http\Request;

class CompetitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $competitors = CompetitorModels::all();
        return response()->json($competitors);
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
            "name" => "required|string|max:255",
            "years" => "required|int",
            "height"=> "required|float",
            "weight"=> "required|float",
            "sex"=> "required|string",
            "cpf"=> "required|int",
            "rg"=> "required|int",
            "team"=> "required|string",

        ]);
        
        $competitor = CompetitorModels::create($validatedData);

        return response()->json($competitor, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $competitor = CompetitorModels::find($id);

        if(!$competitor){
            return response()->json(["message" => "competitor not found"], 404);
        }

        return response()->json($competitor);
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
            $competitor = CompetitorModels::find($id);
    
            if(!$competitor){
                return response()->json(["message" => "competitor not found"], 404);
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
    
            $competitor->update($validatedData);
    
            return response()->json($competitor, 200);
        }
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $competitor = CompetitorModels::find($id); 

        if(!$competitor){
            return response()->json(["message" => "competitor not found"], 404);
        }

        $competitor->delete();

        return response()->json(["message" => "competitor deleted successfully"], 200);
    }
}
