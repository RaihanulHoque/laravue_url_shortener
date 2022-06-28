<?php

namespace App\Http\Controllers;
use App\Models\UrlShorter;
use Illuminate\Http\Request;
use illuminate\Support\Carbon;
use AshAllenDesign\ShortURL\Facades\ShortURL;

class UrlShorterController extends Controller
{

    public function addUrl(Request $request){
        $url = $request->url;
        $existingUrl = UrlShorter::where('destination_url' , '=', $url)->first();
        if($existingUrl === null){
            $shortURLObject = ShortURL::destinationUrl($request->url)->make();
            $shortURL = $shortURLObject->default_short_url;
            return $shortURL;
        }else{
            return $existingUrl;
        }
        return $url;
    }

    /**
     * Fining a destination URL by the HASH code
     */
    public function getDestinationUrl($hash){
        // return "working..."; exit();
        $urlQuery = UrlShorter::where('url_key' , '=', $hash)->first();
        if($urlQuery){
            $destinationUrl = $urlQuery->destination_url;
            //return $destinationUrl;
            return redirect()->away($destinationUrl);
        }else{
            return null;
        }

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UrlShorter::orderBy('id', 'DESC')->get();
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
