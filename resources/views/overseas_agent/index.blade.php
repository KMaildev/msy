@extends('layouts.main')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Overseas Agent</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('overseas_agent.index') }}">Overseas Agent</a>
                    </li>
                    <li class="breadcrumb-item active">Table</li>
                </ol>
                <a href="{{ route('overseas_agent.create') }}" class="btn btn-success d-none d-lg-block m-l-15 text-white">
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
                            <form action="{{ route('overseas_agent.index') }}" method="GET" autocomplete="off">
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
                    <span style="margin: 2px; font-weight: bold;">Total: {{ count($overseas_agencies) }}</span>
                    <table class="table color-table success-table color-bordered-table muted-bordered-table">
                        <thead>
                            <tr>
                                <th style="width: 1%;">#</th>
                                <th style="width: 5%; text-align: center;">Company Name</th>
                                <th style="width: 5%; text-align: center;">Type of Company</th>
                                <th style="width: 5%; text-align: center;">Company Phone</th>
                                <th style="width: 5%; text-align: center;">Company Email</th>
                                <th style="width: 5%; text-align: center;">Company Address</th>
                                <th style="width: 5%; text-align: center;">Country</th>
                                <th style="width: 1%; text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($overseas_agencies as $key => $overseas_agency)
                                <tr>
                                    <td>
                                        {{ $key + 1 }}
                                    </td>

                                    <td>
                                        {{ $overseas_agency->company_name }}
                                    </td>

                                    <td>
                                        {{ $overseas_agency->type_of_company }}
                                    </td>

                                    <td>
                                        {{ $overseas_agency->company_phone }}
                                    </td>

                                    <td>
                                        {{ $overseas_agency->company_email }}
                                    </td>

                                    <td>
                                        {{ $overseas_agency->company_address }}
                                    </td>

                                    <td>
                                        {{ $overseas_agency->countries_table->country }}
                                    </td>

                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{ route('overseas_agent.edit', $overseas_agency->id) }}">Edit</a>

                                                <form
                                                    action="{{ route('overseas_agent.destroy', $overseas_agency->id) }}"
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
                    </table>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')
@endsection
