<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateOverseaAgency;
use App\Models\Country;
use App\Models\OverseasAgency;
use Illuminate\Http\Request;

class OverseasAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request('search');
        $overseas_agencies = OverseasAgency::query()
            ->where('company_name', 'LIKE', "%{$search}%")
            ->orWhere('company_phone', 'LIKE', "%{$search}%")
            ->orWhere('company_email', 'LIKE', "%{$search}%")
            ->orWhere('company_address', 'LIKE', "%{$search}%")
            ->get();
        return view('overseas_agent.index', compact('overseas_agencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countryies = Country::all();
        return view('overseas_agent.create', compact('countryies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $oversea = new OverseasAgency();
        $oversea->company_name = $request->company_name;
        $oversea->type_of_company = $request->type_of_company;
        $oversea->company_phone = $request->company_phone;
        $oversea->company_email = $request->company_email;
        $oversea->company_address = $request->company_address;
        $oversea->countrie_id = $request->countrie_id;
        $oversea->save();
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
        $countryies = Country::all();
        $overseas_agency = OverseasAgency::findOrFail($id);
        return view('overseas_agent.edit', compact('countryies', 'overseas_agency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOverseaAgency $request, $id)
    {
        $oversea = OverseasAgency::findOrFail($id);
        $oversea->company_name = $request->company_name;
        $oversea->type_of_company = $request->type_of_company;
        $oversea->company_phone = $request->company_phone;
        $oversea->company_email = $request->company_email;
        $oversea->company_address = $request->company_address;
        $oversea->countrie_id = $request->countrie_id;
        $oversea->update();
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
        $oversea = OverseasAgency::findOrFail($id);
        $oversea->delete();
        return redirect()->back()->with('success', 'Process is completed.');
    }
}
