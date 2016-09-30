<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Http\Requests;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Card::all();
        return $cards;
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
        $card = new Card;
        $card->user_id = $request->user_id;
        $card->company_id = $request->company_id;
        $card->start_datetime = $request->start_datetime;
        $card->last_usage_datetime = $request->last_usage_datetime;
        $card->money_spent_total = $request->money_spent_total;
        $card->cheque_avg = $request->cheque_avg;
        $card->multiplicator = $request->multiplicator;
        $card->level = $request->level;
        $card->money_spent_thresold = $request->money_spent_thresold;
        $card->balance_current = $request->balance_current;
        $card->balance_debt = $request->balance_debt;

        $result = [];
        $result['result'] = $card->save();

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
        $card = Card::findOrFail($id);
        return $card;

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
        $card = Card::find($id);

        if (isset($request->user_id))
            $card->user_id = $request->user_id;
        if (isset($request->company_id))
            $card->company_id = $request->company_id;
        if (isset($request->start_datetime))
            $card->start_datetime = $request->start_datetime;
        if (isset($request->last_usage_datetime))
            $card->last_usage_datetime = $request->last_usage_datetime;
        if (isset($request->money_spent_total))
            $card->money_spent_total = $request->money_spent_total;
        if (isset($request->cheque_avg))
            $card->cheque_avg = $request->cheque_avg;
        if (isset($request->multiplicator))
            $card->multiplicator = $request->multiplicator;
        if (isset($request->level))
            $card->level = $request->level;

        if (isset($request->money_spent_thresold))
            $card->money_spent_thresold = $request->money_spent_thresold;
        if (isset($request->balance_current))
            $card->balance_current = $request->balance_current;
        if (isset($request->balance_debt))
            $card->balance_debt = $request->balance_debt;

        $result = [];
        $result['result'] = $card->save();

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
        $card = Card::findOrFail($id);

        $result=[];
        $result['result']=$card->delete();

        return $result;

    }
}
