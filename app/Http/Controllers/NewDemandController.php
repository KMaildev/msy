<?php

namespace App\Http\Controllers;

use App\Exports\DemandExport;
use App\Http\Requests\StoreDemand;
use App\Http\Requests\UpdateDemand;
use App\Models\Country;
use App\Models\Demand;
use App\Models\OverseasAgency;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class NewDemandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demands = Demand::where('demand_status', 'new_demand')->paginate(1000);
        if (request('search')) {
            $search = request('search');
            $demands = Demand::whereHas('overseas_agencies_table', function ($q) use ($search) {
                $q->where('company_name', 'LIKE', '%' . $search . '%');
                $q->orWhere('type_of_company', 'LIKE', '%' . $search . '%');
                $q->orWhere('company_phone', 'LIKE', '%' . $search . '%');
                $q->orWhere('company_address', 'LIKE', '%' . $search . '%');
            })->get();
        }

        if (request('from_date') && request('to_date')) {
            $from_date = request('from_date');
            $to_date = request('to_date');
            $demands = Demand::whereBetween('demand_date', [$from_date, $to_date])->get();
        }

        return view('new_demand.index', compact('demands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countryies = Country::all();
        return view('new_demand.create', compact('countryies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDemand $request)
    {
        $demand = new Demand();
        $demand->company_name = $request->company_name;
        $demand->countrie_id = $request->countrie_id;
        $demand->overseas_agencie_id = $request->overseas_agencie_id;
        $demand->male = $request->male ?? 0;
        $demand->female = $request->female ?? 0;
        $demand->demand_date = $request->demand_date;
        $demand->cabinet_date = $request->cabinet_date;
        $demand->demand_status = $request->demand_status;
        $demand->issue_date = $request->issue_date;
        $demand->issue_number = $request->issue_number;
        $demand->save();
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
        $demand = Demand::findOrFail($id);
        $countryies = Country::all();
        $overseas_agencyies = OverseasAgency::all();
        return view('new_demand.edit', compact('demand', 'countryies', 'overseas_agencyies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDemand $request, $id)
    {
        $demand = Demand::findOrFail($id);
        $demand->company_name = $request->company_name;
        $demand->countrie_id = $request->countrie_id;
        $demand->overseas_agencie_id = $request->overseas_agencie_id;
        $demand->male = $request->male ?? 0;
        $demand->female = $request->female ?? 0;
        $demand->demand_date = $request->demand_date;
        $demand->cabinet_date = $request->cabinet_date;
        $demand->demand_status = $request->demand_status;
        $demand->issue_date = $request->issue_date;
        $demand->issue_number = $request->issue_number;
        $demand->update();
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
        $passport = Demand::findOrFail($id);
        $passport->delete();
        return redirect()->back()->with('success', 'Process is completed.');
    }


    /**
     * @return \Illuminate\Support\Collection
     */
    public function new_demand_export()
    {
        $demands = Demand::where('demand_status', 'new_demand')->get();
        return Excel::download(new DemandExport($demands), 'demand_' . date("Y-m-d H:i:s") . '.xlsx');
    }
}
