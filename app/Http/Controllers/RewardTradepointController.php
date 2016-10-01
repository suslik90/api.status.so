<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RewardTradepoint;
use App\Http\Requests;

class RewardTradepointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rewardTradepoints = RewardTradepoint::all();
        return $rewardTradepoints;
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
        $rewardTradepoint = new RewardTradepoint;
        $rewardTradepoint->reward_supplier_id = $request->reward_supplier_id;
        $rewardTradepoint->name = $request->name;
        $rewardTradepoint->address_text = $request->address_text;
        $rewardTradepoint->address_geocoord = $request->address_geocoord;
        $rewardTradepoint->phone = $request->phone;
        $rewardTradepoint->work_hours = $request->work_hours;

        $result = [];
        $result['result'] = $rewardTradepoint->save();

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
        $rewardTradepoint = RewardTradepoint::findOrFail($id);
        return $rewardTradepoint;

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
        $rewardTradepoint = RewardTradepoint::find($id);

        if (isset($request->reward_supplier_id))
            $rewardTradepoint->reward_supplier_id = $request->reward_supplier_id;
        if (isset($request->name))
            $rewardTradepoint->name = $request->name;
        if (isset($request->address_text))
            $rewardTradepoint->address_text = $request->address_text;
        if (isset($request->address_geocoord))
            $rewardTradepoint->address_geocoord = $request->address_geocoord;
        if (isset($request->phone))
            $rewardTradepoint->phone = $request->phone;
        if (isset($request->work_hours))
            $rewardTradepoint->work_hours = $request->work_hours;

        $result = [];
        $result['result'] = $rewardTradepoint->save();

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
        $rewardTradepoint = RewardTradepoint::findOrFail($id);

        $result=[];
        $result['result']=$rewardTradepoint->delete();

        return $result;

    }
}
