<?php

namespace App\Http\Controllers;

use App\Model\City;
use App\Model\Countery;
use Illuminate\Http\Request;
use App\Http\Resources\CityResource;
class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Countery $countery)
    {
        return CityResource::collection( $countery->cities);
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
            $city = new City();
            $city->name = $request->name;
            $city->countery_id = $request->countery_id;
            $saveCity = $city->save();
            if($saveCity){
                return response(["City"=>$city ], 201)->header('Content-Type', 'Application/json');
            }
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        try{
            $update= $city->update($request->all());
            if( $update){
                return response(["city"=> $city ], 201)->header('Content-Type', 'Application/json');
            }
        } catch(\Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        try{
            $delete= $city->delete();
            if( $delete){
                return response(["city"=> $city ], 201)->header('Content-Type', 'Application/json');
            }
        } catch(\Exception $e){
            return $e->getMessage();
        }
    }
}
