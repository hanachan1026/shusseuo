<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
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

    public function apiClientPage()
    {
        return view('apiClientPage');
    }

//    public function hello()
//    {
////        $query = Request::get('q');
////        $base_url = 'localhost:8000';
////        $header = [
////            'Content-Type: application/json'
////        ];
////        $view = null;
////        if($query == "kansai") {
////            $curl = curl_init();
////            curl_setopt($curl, CURLOPT_URL, $base_url.'api/v1/place/kansai');
////            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
////            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
////            curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
////            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
////            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
////            curl_setopt($curl, CURLOPT_HEADER, true);
////
////            $response = curl_exec($curl);
////
////            $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
////            $header = substr($response, 0, $header_size);
////            $body = substr($response, $header_size);
////            $result = json_decode($body, true);
////            curl_close($curl);
////            $url = "localhost:8000/api/v1/place/kansai";
////            $view = view('result');
////        }
//
//        return "hello";
//    }
}
