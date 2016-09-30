<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RewardSupplier;
use App\Http\Requests;

class RewardSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rewardSuppliers = RewardSupplier::all();
        return $rewardSuppliers;
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
        $rewardSupplier = new RewardSupplier;
        $rewardSupplier->name = $request->name;
        $rewardSupplier->name_jur = $request->name_jur;
        $rewardSupplier->address_jur = $request->address_jur;
        $rewardSupplier->address_fact = $request->address_fact;
        $rewardSupplier->city_id = $request->city_id;
        $rewardSupplier->country_id = $request->country_id;
        $rewardSupplier->staff = $request->staff;
        $rewardSupplier->staff_name = $request->staff_name;
        $rewardSupplier->phone_contact = $request->phone_contact;
        $rewardSupplier->email_contact = $request->email_contact;
        $rewardSupplier->discount = $request->discount;
        $rewardSupplier->money_earned_total = $request->money_earned_total;
        $rewardSupplier->debt = $request->debt;

        $result = [];
        $result['result'] = $rewardSupplier->save();

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
        $rewardSupplier = RewardSupplier::findOrFail($id);
        return $rewardSupplier;

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
        $rewardSupplier = RewardSupplier::find($id);

        if (isset($request->name))
            $rewardSupplier->name = $request->name;
        if (isset($request->name_jur))
            $rewardSupplier->name_jur = $request->name_jur;
        if (isset($request->address_jur))
            $rewardSupplier->address_jur = $request->address_jur;
        if (isset($request->address_fact))
            $rewardSupplier->address_fact = $request->address_fact;
        if (isset($request->phone_contact))
            $rewardSupplier->phone_contact = $request->phone_contact;
        if (isset($request->email_contact))
            $rewardSupplier->email_contact = $request->email_contact;
        if (isset($request->city_id))
            $rewardSupplier->city_id = $request->city_id;
        if (isset($request->country_id))
            $rewardSupplier->country_id = $request->country_id;
        if (isset($request->staff))
            $rewardSupplier->staff = $request->staff;
        if (isset($request->staff_name))
            $rewardSupplier->staff_name = $request->staff_name;
        if (isset($request->discount))
            $rewardSupplier->discount = $request->discount;
        if (isset($request->money_earned_total))
            $rewardSupplier->money_earned_total = $request->money_earned_total;
        if (isset($request->debt))
            $rewardSupplier->debt = $request->debt;

        $result = [];
        $result['result'] = $rewardSupplier->save();

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
        $rewardSupplier = RewardSupplier::findOrFail($id);

        $result=[];
        $result['result']=$rewardSupplier->delete();

        return $result;

    }
}
