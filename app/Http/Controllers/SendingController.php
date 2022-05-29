<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSending;
use App\Http\Requests\UpdateSending;
use App\Models\Contract;
use App\Models\Demand;
use App\Models\Sending;
use Illuminate\Http\Request;

class SendingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sendings = Sending::all();
        return view('sending.index', compact('sendings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        $demand = Demand::findOrFail($id);
        return view('sending.create', compact('demand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSending $request)
    {
        $sending = new Sending();
        $sending->sending_date = $request->sending_date;
        $sending->sending_male = $request->sending_male;
        $sending->sending_female = $request->sending_female;
        $sending->remark = $request->remark;
        $sending->demand_id = $request->demand_id;
        $sending->contract_id = $request->contract_id;
        $sending->save();
        return redirect()->back()->with('success', 'Process is completed.');
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
        $sending = Sending::findOrFail($id);
        $demain_id = $sending->demand_id;
        $demand = Demand::findOrFail($demain_id);
        return view('sending.edit', compact('demand', 'sending'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSending $request, $id)
    {
        $sending = Sending::findOrFail($id);
        $sending->sending_date = $request->sending_date;
        $sending->sending_male = $request->sending_male;
        $sending->sending_female = $request->sending_female;
        $sending->remark = $request->remark;
        $sending->demand_id = $request->demand_id;
        $sending->contract_id = $request->contract_id;
        $sending->update();
        return redirect()->back()->with('success', 'Process is completed.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sending = Sending::findOrFail($id);
        $sending->delete();
        return redirect()->back()->with('success', 'Deleted successfully.');
    }
}
