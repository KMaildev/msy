@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card-header bg-info">
                <h4 class="mb-0 text-white">
                    Labour Management
                </h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive m-t-20">
                        <table id="config-table" class="table display table-striped border">
                            <thead>
                                <tr>
                                    <th style="width: 1%;">#</th>
                                    <th style="width: 5%; text-align: center;">Name</th>
                                    <th style="width: 1%; text-align: center;">M/F</th>
                                    <th style="width: 3%; text-align: center;">NRC</th>
                                    <th style="width: 5%; text-align: center;">Father Name</th>
                                    <th style="width: 3%; text-align: center;">Passport No</th>
                                    <th style="width: 1%; text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($passports as $key => $passport)
                                    <tr>
                                        <td style="text-align: center;">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </td>
                                        <td style="text-align: center;">
                                            {{ $passport->name }}
                                        </td>
                                        <td style="text-align: center;">
                                            {{ ucfirst($passport->gender ?? '-') }}
                                        </td>
                                        <td style="text-align: center;">
                                            {{ $passport->nrc ?? '-' }}
                                        </td>
                                        <td style="text-align: center;">
                                            {{ $passport->father_name ?? '-' }}
                                        </td>
                                        <td style="text-align: center;">
                                            {{ $passport->passport ?? '-' }}
                                        </td>
                                        <td style="text-align: center;">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">

                                                    <a class="dropdown-item"
                                                        href="{{ route('owic.edit', $passport->id) }}">OWIC</a>

                                                    <a class="dropdown-item"
                                                        href="{{ route('reject.edit', $passport->id) }}">Reject</a>

                                                    <a class="dropdown-item"
                                                        href="{{ route('passport.edit', $passport->id) }}">Edit</a>

                                                    <form action="{{ route('passport.destroy', $passport->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="dropdown-item del_confirm"
                                                            id="confirm-text" data-toggle="tooltip">Delete</button>
                                                    </form>

                                                    <a class="dropdown-item"
                                                        href="{{ route('passport.edit', $passport->id) }}">View
                                                        Detail</a>
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

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="mb-0 text-white">
                        Information
                    </h4>
                </div>
                <table class="table no-border">
                    <p style="padding-top: 10px; padding-left: 10px; font-weight: bold;">
                        Demand Information
                    </p>
                    <tbody>
                        <tr>
                            <td>Oversea Company</td>
                            <td class="font-medium">
                                {{ $demand->overseas_agencies_table->company_name ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Demand Date</td>
                            <td class="font-medium">
                                {{ $demand->demand_date ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Cabinet Date</td>
                            <td class="font-medium">
                                {{ $demand->cabinet_date ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Demand Male</td>
                            <td class="font-medium">
                                {{ $demand->male ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Demand Female</td>
                            <td class="font-medium">
                                {{ $demand->female ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Demand Total</td>
                            <td class="font-medium">
                                {{ $demand->male + $demand->female }}
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="table no-border">
                    <p style="padding-top: 10px; padding-left: 10px; font-weight: bold;">
                        Contract Information
                    </p>
                    <tbody>
                        <tr>
                            <td>Contract Date</td>
                            <td class="font-medium">
                                {{ $demand->contracts_table->contract_date ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Contract Male</td>
                            <td class="font-medium">
                                {{ $demand->contracts_table->contract_male ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Contract Female</td>
                            <td class="font-medium">
                                {{ $demand->contracts_table->contract_female ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Contract Total</td>
                            <td class="font-medium">
                                {{ $demand->contracts_table->contract_male + $demand->contracts_table->contract_female }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreSending', '#create-form') !!}
@endsection
