<?php

namespace App\Http\Controllers;

use App\Exports\LabourManagementExport;
use App\Http\Requests\StoreLabourManagement;
use App\Models\Demand;
use App\Models\LabourManagement;
use App\Models\Passport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LabourManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        $demand = Demand::findOrFail($id);
        $passports = Passport::where('reject_status', NULL)->get();

        $contract_labours = LabourManagement::where('demand_id', $id)->get();
        return view('labour_management.create', compact('demand', 'passports', 'contract_labours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }


    public function store_labour(StoreLabourManagement $request)
    {
        $data = $request->except('_token');
        $passport_id = count($data['passport_id']);
        for ($i = 0; $i < $passport_id; $i++) {
            $save = new LabourManagement();
            $save->passport_id = $data['passport_id'][$i];
            $save->demand_id = $data['demand_id'];
            $save->contract_id =  $data['contract_id'];
            $save->overseas_agencies_id =  $data['overseas_agencies_id'];
            $save->save();
        }
        return redirect()->back()->with('success', 'Process is completed.');
    }


    public function view_contract_labour($id = null)
    {
        $demand = Demand::findOrFail($id);
        $passports = Passport::where('reject_status', NULL)->get();

        $contract_labours = LabourManagement::where('demand_id', $id)->get();
        return view('labour_management.view_contract_labour', compact('demand', 'passports', 'contract_labours'));
    }

    public function delete_labour($id)
    {
        $labour = LabourManagement::findOrFail($id);
        $labour->delete();
        return redirect()->back()->with('success', 'Process is completed.');
    }


    /**
     * @return \Illuminate\Support\Collection
     */
    public function export_contract_labour($id)
    {
        $contract_labours = LabourManagement::where('demand_id', $id)->get();
        return Excel::download(new LabourManagementExport($contract_labours), 'labour_' . date("Y-m-d H:i:s") . '.xlsx');
    }
}
