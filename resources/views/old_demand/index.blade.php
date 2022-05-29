@extends('layouts.main')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Old Demand</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('old_demand.index') }}">Old Demand</a>
                    </li>
                    <li class="breadcrumb-item active">Table</li>
                </ol>
                <a href="{{ route('old_demand.create') }}" class="btn btn-success d-none d-lg-block m-l-15 text-white">
                    <i class="fa fa-plus-circle"></i> Create
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-sm-12 col-md-4">
                            <span>Search</span>
                            <form action="{{ route('old_demand.index') }}" method="GET" autocomplete="off">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Search..." name="search">
                                            <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="table-responsive py-3">
                    <span style="margin: 2px; font-weight: bold;">Total: </span>
                    <table class="table color-table success-table color-bordered-table muted-bordered-table">
                        <thead>
                            <tr>
                                <th style="width: 1%;">#</th>
                                <th style="width: 5%; text-align: center;">Name</th>
                                <th style="width: 5%; text-align: center;">Oversea Company</th>
                                <th style="width: 5%; text-align: center;">Male</th>
                                <th style="width: 5%; text-align: center;">Female</th>
                                <th style="width: 5%; text-align: center;">Total</th>
                                <th style="width: 5%; text-align: center;">Demand Date</th>
                                <th style="width: 5%; text-align: center;">Contract Date</th>
                                <th style="width: 5%; text-align: center;">Sending Date</th>
                                <th style="width: 1%; text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($demands as $key => $demand)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        {{ $demand->company_name }}
                                    </td>

                                    <td>
                                        {{ $demand->overseas_agencies_table->company_name ?? '' }}
                                    </td>

                                    <td style="text-align: right; font-weight: bold">
                                        {{ $demand->male }}
                                    </td>

                                    <td style="text-align: right; font-weight: bold">
                                        {{ $demand->female }}
                                    </td>

                                    <td style="text-align: right; font-weight: bold">
                                        {{ $demand->male + $demand->female }}
                                    </td>

                                    <td>
                                        {{ $demand->demand_date }}
                                    </td>

                                    <td>
                                        {{ $demand->contracts_table->contract_date ?? '' }}
                                    </td>

                                    <td>
                                        {{ $demand->sendings_table->sending_date ?? '' }}
                                    </td>

                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">

                                                <a class="dropdown-item" href="#">
                                                    View Detail
                                                </a>

                                                <a class="dropdown-item"
                                                    href="{{ route('create_contract', $demand->id) }}">
                                                    Contract
                                                </a>

                                                <a class="dropdown-item"
                                                    href="{{ route('old_demand.edit', $demand->id) }}">Edit</a>

                                                <form action="{{ route('old_demand.destroy', $demand->id) }}"
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
                                {{ $demands->sum('male') }}
                            </th>
                            <th style="text-align: right; font-weight: bold">
                                {{ $demands->sum('female') }}
                            </th>
                            <th style="text-align: right; font-weight: bold">
                                {{ $demands->sum('female') + $demands->sum('male') }}
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
