<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddPairsRequest;
use App\Models\Pairs;
use Illuminate\Http\Request;

class PairsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pairs = Pairs::all();

        return response()->json(
            [
                'status' => 200,
                'pairs' => $pairs
            ],
            200
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddPairsRequest $request)
    {
        //
        try {
            $pairs = Pairs::create($request->all());

            return response()->json(
                [
                    'status' => 201,
                    'message' => "La pair a été ajouté avec succès",
                    'pairs' => $pairs
                ],
                201
            );
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pairs  $pairs
     * @return \Illuminate\Http\Response
     */
    public function show(Pairs $pairs)
    {
        //
        return response()->json(
            [
                'status' => 200,
                'pairs' => $pairs
            ],
            200
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pairs  $pairs
     * @return \Illuminate\Http\Response
     */
    public function edit(Pairs $pairs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pairs  $pairs
     * @return \Illuminate\Http\Response
     */
    public function update(AddPairsRequest $request, Pairs $pairs)
    {
        //
        $pairs->update($request->all());
        return response()->json(
            [
                'status' => 201,
                'message' => "La pair a été modifier avec succès",
                'pairs' => $pairs
            ],
            201
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pairs  $pairs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pairs $pairs)
    {

        $pairs->delete();
        return response()->json(
            [
                'status' => 201,
                'message' => "La pair a été supprimé avec succès"
            ],
            201
        );
    }
}
