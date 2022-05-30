@extends('layouts.main')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Contract</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('contract.index') }}">Contract</a>
                    </li>
                    <li class="breadcrumb-item active">Table</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-lg-9 col-sm-12 col-md-9">
                            <span>Export</span>
                            <div class="button-group">
                                <a href="{{ route('passport_export') }}" class="btn waves-effect waves-light btn-success">
                                    Export to Excel
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12 col-md-3">
                            <span>Search</span>
                            <form action="{{ route('contract.index') }}" method="GET" autocomplete="off">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="search">
                                            <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="table-responsive py-3">
                    <span style="margin: 2px; font-weight: bold;">Total: {{ count($contracts) }}</span>
                    <table class="table color-table success-table color-bordered-table muted-bordered-table">
                        <thead>
                            <tr>
                                <th style="width: 1%;">#</th>
                                <th style="width: 2%; text-align: center;">Name</th>
                                <th style="width: 5%; text-align: center;">Oversea Company</th>
                                <th style="width: 3%; text-align: center;">Male</th>
                                <th style="width: 3%; text-align: center;">Female</th>
                                <th style="width: 5%; text-align: center;">Total</th>
                                <th style="width: 5%; text-align: center;">Contract Date</th>
                                <th style="width: 1%; text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contracts as $key => $contract)
                                <tr>
                                    <td>
                                        {{ $key + 1 }}
                                    </td>

                                    <td>
                                        {{ $contract->demands_table->company_name ?? '' }}
                                    </td>

                                    <td>
                                        {{ $contract->demands_table->overseas_agencies_table->company_name ?? '' }}
                                    </td>

                                    <td style="text-align: right; font-weight: bold">
                                        {{ number_format($contract->contract_male) }}
                                    </td>

                                    <td style="text-align: right; font-weight: bold">
                                        {{ number_format($contract->contract_female) }}
                                    </td>

                                    <td style="text-align: right; font-weight: bold">
                                        {{ number_format($contract->contract_male + $contract->contract_female) }}
                                    </td>

                                    <td style="text-align: center; font-weight: bold">
                                        {{ $contract->contract_date }}
                                    </td>

                                    <td style="text-align: center;">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">

                                                <a class="dropdown-item"
                                                    href="{{ route('create_sending', $contract->demand_id) }}">
                                                    Sending
                                                </a>

                                                <a class="dropdown-item"
                                                    href="{{ route('add_labour', $contract->demand_id) }}">
                                                    Contract Labour
                                                </a>

                                                <a class="dropdown-item"
                                                    href="{{ route('view_contract_labour', $contract->demand_id) }}">
                                                    View Contract Labour
                                                </a>

                                                <a class="dropdown-item"
                                                    href="{{ route('contract.edit', $contract->id) }}">Edit</a>

                                                <form action="{{ route('contract.destroy', $contract->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="dropdown-item del_confirm"
                                                        id="confirm-text" data-toggle="tooltip">Delete</button>
                                                </form>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tr>
                            <th colspan="3">Total</th>
                            <th style="text-align: right; font-weight: bold">
                                {{ $contracts->sum('contract_male') }}
                            </th>
                            <th style="text-align: right; font-weight: bold">
                                {{ $contracts->sum('contract_female') }}
                            </th>
                            <th style="text-align: right; font-weight: bold">
                                {{ $contracts->sum('contract_male') + $contracts->sum('contract_female') }}
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')
@endsection
