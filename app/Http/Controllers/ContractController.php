<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContracts;
use App\Http\Requests\UpdateContracts;
use App\Models\Contract;
use App\Models\Country;
use App\Models\Demand;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contracts = Contract::all();
        return view('contract.index', compact('contracts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        $demand = Demand::findOrFail($id);
        return view('contract.create', compact('demand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContracts $request)
    {
        $contract = new Contract();
        $contract->contract_date = $request->contract_date;
        $contract->contract_male = $request->contract_male;
        $contract->contract_female = $request->contract_female;
        $contract->remark = $request->remark;
        $contract->demand_id = $request->demand_id;
        $contract->save();
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
        $contract = Contract::findOrFail($id);
        $demain_id = $contract->demand_id;
        $demand = Demand::findOrFail($demain_id);
        return view('contract.edit', compact('demand', 'contract'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContracts $request, $id)
    {
        $contract = Contract::findOrFail($id);
        $contract->contract_date = $request->contract_date;
        $contract->contract_male = $request->contract_male;
        $contract->contract_female = $request->contract_female;
        $contract->remark = $request->remark;
        $contract->update();
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
        $contract = Contract::findOrFail($id);
        $contract->delete();
        return redirect()->back()->with('success', 'Deleted successfully.');
    }
}
