<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use App\Models\Cheque;
use App\Http\Requests;

class ChequeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cheques = Cheque::all();
        return $cheques;
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
        $cheque = new Cheque;
        $cheque->user_id = $request->user_id;
        $cheque->card_id = $request->card_id;
        $cheque->company_id = $request->company_id;
        $cheque->tradepoint_id = $request->tradepoint_id;
        $cheque->sum_total = $request->sum_total;
        $cheque->sum_clear = $request->sum_clear;
        $cheque->sum_powerup = $request->sum_powerup;
        $cheque->cheque_datetime = $request->cheque_datetime;
        $cheque->scan_datetime = $request->scan_datetime;
        $cheque->confirm_datetime = $request->confirm_datetime;
        $cheque->scanned_qr = $request->scanned_qr;
        $cheque->cashback = $request->cashback;

        $result = [];
        $result['result'] = $cheque->save();

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
        $cheque = Cheque::findOrFail($id);
        return $cheque;

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
        $cheque = Cheque::find($id);

        if (isset($request->user_id))
            $cheque->user_id = $request->user_id;
        if (isset($request->card_id))
            $cheque->card_id = $request->card_id;
        if (isset($request->company_id))
            $cheque->company_id = $request->company_id;
        if (isset($request->tradepoint_id))
            $cheque->tradepoint_id = $request->tradepoint_id;
        if (isset($request->sum_total))
            $cheque->sum_total = $request->sum_total;
        if (isset($request->sum_clear))
            $cheque->sum_clear = $request->sum_clear;
        if (isset($request->sum_powerup))
            $cheque->sum_powerup = $request->sum_powerup;
        if (isset($request->cheque_datetime))
            $cheque->cheque_datetime = $request->cheque_datetime;
        if (isset($request->scan_datetime))
            $cheque->scan_datetime = $request->scan_datetime;
        if (isset($request->confirm_datetime))
            $cheque->confirm_datetime = $request->confirm_datetime;
        if (isset($request->scanned_qr))
            $cheque->scanned_qr = $request->scanned_qr;
        if (isset($request->cashback))
            $cheque->cashback = $request->cashback;

        $result = [];
        $result['result'] = $cheque->save();

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
        $cheque = Cheque::findOrFail($id);

        $result=[];
        $result['result']=$cheque->delete();

        return $result;
    }
}
