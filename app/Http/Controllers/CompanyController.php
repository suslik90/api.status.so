<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Http\Requests;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return $companies;
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
        $company = new Company;
        $company->name = $request->name;
        $company->name_jur = $request->name_jur;
        $company->address_jur = $request->address_jur;
        $company->phone_contact = $request->phone_contact;
        $company->email_contact = $request->email_contact;
        $company->cheque_avg = $request->cheque_avg;
        $company->money_earned_total = $request->money_earned_total;
        $company->money_thresold_current = $request->money_thresold_current;

        $result = [];
        $result['result'] = $company->save();

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
        $company = Company::findOrFail($id);
        return $company;
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
        $company = Company::find($id);

        if (isset($request->name))
            $company->name = $request->name;
        if (isset($request->name_jur))
            $company->name_jur = $request->name_jur;
        if (isset($request->address_jur))
            $company->address_jur = $request->address_jur;
        if (isset($request->phone_contact))
            $company->phone_contact = $request->phone_contact;
        if (isset($request->email_contact))
            $company->email_contact = $request->email_contact;
        if (isset($request->cheque_avg))
            $company->cheque_avg = $request->cheque_avg;
        if (isset($request->money_earned_total))
            $company->money_earned_total = $request->money_earned_total;
        if (isset($request->money_thresold_current))
            $company->money_thresold_current = $request->money_thresold_current;

        $result = [];
        $result['result'] = $company->save();

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
        $company = Company::findOrFail($id);

        $result=[];
        $result['result']=$company->delete();

        return $result;
    }
}
