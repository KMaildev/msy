<?php

namespace App\Http\Controllers;

use App\Exports\PassportExport;
use App\Http\Requests\StorePassport;
use App\Http\Requests\UpdatePassport;
use App\Imports\PassportImport;
use App\Models\Passport;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;

class PassportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passports = Passport::where('reject_status', NULL)->paginate(50);
        if (request('search')) {
            $passports = Passport::where(function ($query) {
                $query->where('name', 'Like', '%' . request('search') . '%');
                $query->orWhere('father_name', 'Like', '%' . request('search') . '%');
                $query->orWhere('nrc', 'Like', '%' . request('search') . '%');
                $query->orWhere('date_of_birth', 'Like', '%' . request('search') . '%');
                $query->orWhere('passport', 'Like', '%' . request('search') . '%');
                $query->orWhere('local_agent_name', 'Like', '%' . request('search') . '%');
                $query->orWhere('address', 'Like', '%' . request('search') . '%');
                $query->orWhere('remark', 'Like', '%' . request('search') . '%');
                $query->orWhere('phone', 'Like', '%' . request('search') . '%');
            })->paginate(1000);
        }

        if (request('from_date') && request('to_date')) {
            $passports = Passport::whereBetween('join_date', [request('from_date'), request('to_date')])->paginate(1000);;
        }

        return view('passport.index', compact('passports'));
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
        $Passport->join_date = date("Y-m-d");
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


    /**
     * @return \Illuminate\Support\Collection
     */
    public function passport_import()
    {
        Excel::import(new PassportImport, request()->file('file'));
        return redirect()->back()->with('success', 'Created successfully.');
    }



    /**
     * @return \Illuminate\Support\Collection
     */
    public function passport_export()
    {
        $passports = Passport::all();
        return Excel::download(new PassportExport($passports), 'passport_' . date("Y-m-d H:i:s") . '.xlsx');
    }
}
