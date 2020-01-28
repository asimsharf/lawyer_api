<?php

namespace App\Http\Controllers;

use App\Model\Countery;
use Illuminate\Http\Request;
use App\Http\Resources\Countery\CounteryResource;
use App\Http\Resources\Countery\CounteryCollection;
class CounteryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CounteryCollection::collection(Countery::paginate(10));
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
    public function store(Request $request)
    {
        try{
            $countery = new Countery();
            $countery->name = $request->name;
            $saveCountery = $countery->save();
            if($saveCountery){
                return response([
                    "Countery"=>new CounteryResource($countery)
                ], 201)->header('Content-Type', 'Application/json');
            }
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Countery  $countery
     * @return \Illuminate\Http\Response
     */
    public function show(Countery $countery)
    {
        return new CounteryResource($countery);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Countery  $countery
     * @return \Illuminate\Http\Response
     */
    public function edit(Countery $countery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Countery  $countery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Countery $countery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Countery  $countery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Countery $countery)
    {
        //
    }
}
