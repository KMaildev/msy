<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePassport;
use App\Http\Requests\UpdatePassport;
use App\Models\Passport;
use Illuminate\Http\Request;

class PassportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passports = Passport::latest()->paginate(50);
        return view('passport.index', compact('passports'))
            ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('passport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePassport $request)
    {
        $Passport = new Passport();
        $Passport->name = $request->name;
        $Passport->father_name = $request->father_name;
        $Passport->nrc = $request->nrc;
        $Passport->date_of_birth = $request->date_of_birth;
        $Passport->passport = $request->passport;
        $Passport->passport_date = $request->passport_date;
        $Passport->local_agent_name = $request->local_agent_name;
        $Passport->phone = $request->phone;
        $Passport->address = $request->address;
        $Passport->gender = $request->gender;
        $Passport->remark = $request->remark;
        $Passport->save();
        return redirect()->back()->with('success', 'Created successfully.');
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
        $passport = Passport::findOrFail($id);
        return view('passport.edit', compact('passport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePassport $request, $id)
    {
        $Passport = Passport::findOrFail($id);
        $Passport->name = $request->name;
        $Passport->father_name = $request->father_name;
        $Passport->nrc = $request->nrc;
        $Passport->date_of_birth = $request->date_of_birth;
        $Passport->passport = $request->passport;
        $Passport->passport_date = $request->passport_date;
        $Passport->local_agent_name = $request->local_agent_name;
        $Passport->phone = $request->phone;
        $Passport->address = $request->address;
        $Passport->gender = $request->gender;
        $Passport->remark = $request->remark;
        $Passport->update();
        return redirect()->back()->with('success', 'Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $passport = Passport::findOrFail($id);
        $passport->delete();
        return redirect()->back()->with('success', 'Deleted successfully.');
    }
}
