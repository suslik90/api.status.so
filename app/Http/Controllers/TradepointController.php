<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tradepoint;
use App\Http\Requests;

class TradepointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tradepoints = Tradepoint::all();
        return $tradepoints;
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
        $tradepoint = new Tradepoint;
        $tradepoint->company_id = $request->company_id;
        $tradepoint->name = $request->name;
        $tradepoint->address_text = $request->address_text;
        $tradepoint->address_geocoord = $request->address_geocoord;
        $tradepoint->phone = $request->phone;
        $tradepoint->work_hours = $request->work_hours;
        $tradepoint->cheque_avg = $request->cheque_avg;
        $tradepoint->customers_new = $request->customers_new;

        $result = [];
        $result['result'] = $tradepoint->save();

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
        $tradepoint = Tradepoint::findOrFail($id);
        return $tradepoint;

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
        $tradepoint = Tradepoint::find($id);

        if (isset($request->company_id))
            $tradepoint->company_id = $request->company_id;
        if (isset($request->name))
            $tradepoint->name = $request->name;
        if (isset($request->address_text))
            $tradepoint->address_text = $request->address_text;
        if (isset($request->address_geocoord))
            $tradepoint->address_geocoord = $request->address_geocoord;
        if (isset($request->phone))
            $tradepoint->phone = $request->phone;
        if (isset($request->work_hours))
            $tradepoint->work_hours = $request->work_hours;
        if (isset($request->cheque_avg))
            $tradepoint->cheque_avg = $request->cheque_avg;
        if (isset($request->customers_new))
            $tradepoint->customers_new = $request->customers_new;

        $result = [];
        $result['result'] = $tradepoint->save();

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
        $tradepoint = Tradepoint::findOrFail($id);

        $result=[];
        $result['result']=$tradepoint->delete();

        return $result;

    }
}
