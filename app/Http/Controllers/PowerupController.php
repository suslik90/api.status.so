<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Powerup;
use App\Http\Requests;

class PowerupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $powerups = Powerup::all();
        return $powerups;
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
        $powerup = new Powerup;
        $powerup->company_id = $request->company_id;
        $powerup->title = $request->title;
        $powerup->photo_url = $request->photo_url;
        $powerup->cashback = $request->cashback;
        $powerup->code_1c = $request->code_1c;
        $powerup->possible_tradepoints = $request->possible_tradepoints;
        $powerup->date_from = $request->date_from;
        $powerup->date_to = $request->date_to;
        $powerup->category = $request->category;

        $result = [];
        $result['result'] = $powerup->save();

        return $result;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $powerup = Powerup::findOrFail($id);
        return $powerup;

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
        $powerup = Powerup::find($id);

        if (isset($request->company_id))
            $powerup->company_id = $request->company_id;
        if (isset($request->title))
            $powerup->title = $request->title;
        if (isset($request->photo_url))
            $powerup->photo_url = $request->photo_url;
        if (isset($request->cashback))
            $powerup->cashback = $request->cashback;
        if (isset($request->code_1c))
            $powerup->code_1c = $request->code_1c;
        if (isset($request->possible_tradepoints))
            $powerup->possible_tradepoints = $request->possible_tradepoints;
        if (isset($request->date_from))
            $powerup->date_from = $request->date_from;

        if (isset($request->date_to))
            $powerup->date_to = $request->date_to;
        if (isset($request->category))
            $powerup->category = $request->category;

        $result = [];
        $result['result'] = $powerup->save();

        return $result;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $powerup = Powerup::findOrFail($id);

        $result=[];
        $result['result']=$powerup->delete();

        return $result;

    }
}
