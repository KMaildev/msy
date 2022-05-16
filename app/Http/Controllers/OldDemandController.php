<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDemand;
use App\Http\Requests\UpdateDemand;
use App\Models\Country;
use App\Models\Demand;
use Illuminate\Http\Request;

class OldDemandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demands = Demand::where('demand_status', 'old_demand')->paginate(50);
        if (request('search')) {
            $demands = Demand::where(function ($query) {
                $query->where('company_name', 'Like', '%' . request('search') . '%');
            })->paginate(1000);
        }
        return view('old_demand.index', compact('demands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countryies = Country::all();
        return view('old_demand.create', compact('countryies'));
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
        return view('old_demand.edit', compact('demand', 'countryies'));
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
}
