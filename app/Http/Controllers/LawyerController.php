<?php

namespace App\Http\Controllers;

use App\Model\Lawyer;
use App\Model\Document;
use Illuminate\Http\Request;
use App\Http\Resources\Lawyer\LawyerResource;
use App\Http\Resources\Lawyer\LawyerCollection;
class LawyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LawyerCollection::collection(Lawyer::paginate(10));
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
            $doc= new Document();
            $doc->document_path=$request->document_path;
            $doc->document_type_id= $request->document_type_id;
            $saveDocument = $doc->save();
            $law = new Lawyer();

            $law->name = $request->name;
            $law->email = $request->email;
            $law->password = md5($request->password);
            $law->phone = $request->phone;
            $law->remember_token = $request->remember_token;
            $law->office_name = $request->office_name;
            $law->gender = $request->gender;
            $law->profile_image = $request->profile_image;
            $law->background_imge = $request->background_imge;
            $law->address_text = $request->address_text;
            $law->latitude = $request->latitude;
            $law->longitude = $request->longitude;
            $law->city_id = $request->city_id;
            $law->document_id = $doc->id;
            $saveLawyer= $law->save();

            if($saveLawyer &&  $saveDocument){
                return response(["lawyer"=>$law ], 201)->header('Content-Type', 'Application/json');
            }


        } catch(\Exception $e){
            return $e->getMessage();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function show(Lawyer $lawyer)
    {
        return new LawyerResource($lawyer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function edit(Lawyer $lawyer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lawyer $lawyer)
    {
        try{
            $update= $lawyer->update($request->all());
            if( $update)
            return response(["lawyer"=> $lawyer ], 201)
            ->header('Content-Type', 'Application/json');

        } catch(\Exception $e){
            return $e->getMessage();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lawyer $lawyer)
    {
        try{

            $delete= $lawyer->delete();
            if( $delete)
                return response(["lawyer"=> $lawyer ], 201)
                ->header('Content-Type', 'Application/json');

        } catch(\Exception $e){
            return $e->getMessage();
        }

    }
}
