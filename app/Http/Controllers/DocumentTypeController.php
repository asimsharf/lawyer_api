<?php

namespace App\Http\Controllers;

use App\Model\DocumentType;
use Illuminate\Http\Request;
use App\Http\Resources\DocumentType\DocumentTypeResource;
use App\Http\Resources\DocumentType\DocumentTypeCollection;
class DocumentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DocumentTypeCollection::collection(DocumentType::paginate(10));
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
            $documentType = new DocumentType();
            $documentType->name = $request->name;
            $saveDocumentType = $documentType->save();
            if($saveDocumentType){
                return response(["DocumentType"=>$documentType ], 201)->header('Content-Type', 'Application/json');
            }
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\DocumentType  $documentType
     * @return \Illuminate\Http\Response
     */
    public function show(DocumentType $documentType)
    {
        return new DocumentTypeResource($documentType);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\DocumentType  $documentType
     * @return \Illuminate\Http\Response
     */
    public function edit(DocumentType $documentType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\DocumentType  $documentType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocumentType $documentType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\DocumentType  $documentType
     * @return \Illuminate\Http\Response
     */
    public function destroy(DocumentType $documentType)
    {
        //
    }
}
