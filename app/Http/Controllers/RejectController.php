<?php

namespace App\Http\Controllers;

use App\Exports\PassportExport;
use App\Http\Requests\UpdateReject;
use App\Models\Passport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RejectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passports = Passport::where('reject_status', 'rejected')->paginate(50);
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

        return view('reject.index', compact('passports'));
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
        $passport = Passport::findOrFail($id);
        return view('reject.edit', compact('passport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReject $request, $id)
    {
        $Passport = Passport::findOrFail($id);
        $Passport->reject_status = 'rejected';
        $Passport->reject_date = $request->reject_date;
        $Passport->reject_reason = $request->reject_reason;
        $Passport->update();
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
        //
    }


    /**
     * @return \Illuminate\Support\Collection
     */
    public function reject_passport_export()
    {
        $passports = Passport::where('reject_status', 'rejected')->get();
        return Excel::download(new PassportExport($passports), 'passport_' . date("Y-m-d H:i:s") . '.xlsx');
    }
}
