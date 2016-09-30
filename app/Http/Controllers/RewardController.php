<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Reward;

class RewardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rewards = Reward::all();
        return $rewards;
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reward = new Reward;
        $reward->reward_supplier_id = $request->reward_supplier_id;
        $reward->code_1c = $request->code_1c;
        $reward->price = $request->price;
        $reward->photo_url = $request->photo_url;
        $reward->text = $request->text;
        $reward->date_from = $request->date_from;
        $reward->date_to = $request->date_to;
        $reward->count = $request->count;
        $reward->possible_tradepoints = $request->possible_tradepoints;
        $reward->rating = $request->rating;

        $result = [];
        $result['result'] = $reward->save();

        return $result;
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reward = Reward::findOrFail($id);
        return $reward;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reward = Reward::find($id);

        if (isset($request->reward_supplier_id))
            $reward->reward_supplier_id = $request->reward_supplier_id;
        if (isset($request->code_1c))
            $reward->code_1c = $request->code_1c;
        if (isset($request->price))
            $reward->price = $request->price;
        if (isset($request->photo_url))
            $reward->photo_url = $request->photo_url;
        if (isset($request->text))
            $reward->text = $request->text;
        if (isset($request->date_from))
            $reward->date_from = $request->date_from;
        if (isset($request->date_to))
            $reward->date_to = $request->date_to;
        if (isset($request->count))
            $reward->count = $request->count;
        if (isset($request->possible_tradepoints))
            $reward->possible_tradepoints = $request->possible_tradepoints;
        if (isset($request->rating))
            $reward->rating = $request->rating;

        $result = [];
        $result['result'] = $reward->save();

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reward = Reward::findOrFail($id);

        $result=[];
        $result['result']=$reward->delete();

        return $result;
    }
}
