<?php

namespace App\Http\Controllers;

use App\Model\Lawyer;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lawyer $lawyer)
    {
        //
    }
}
