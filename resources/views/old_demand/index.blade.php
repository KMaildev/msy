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
                        <div class="col-lg-5 col-sm-12 col-md-5">
                            <span>Export</span>
                            <div class="button-group">
                                <a href="{{ route('new_demand_export') }}"
                                    class="btn waves-effect waves-light btn-success">
                                    Export to Excel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="table-responsive py-3">
                    <span style="margin: 2px; font-weight: bold;">Total: {{ count($demands) }}</span>
                    <table class="table">
                        <thead>
                            <tr>
                                <td rowspan="2" style="width: 1%;">
                                    #
                                </td>

                                <td rowspan="2" style="width: 5%; text-align: center;">
                                    Name
                                </td>

                                <td rowspan="2" style="width: 10%; text-align: center;">
                                    Oversea Company
                                </td>

                                <td colspan="4"
                                    style="color: white; background-color: #c01faa; text-align: center; widht: 10%">
                                    Demand Information
                                </td>

                                <td colspan="7"
                                    style="color: white; background-color: #1339b3; text-align: center; widht: 10%">
                                    Contract Information
                                </td>

                                <td colspan="7"
                                    style="color: white; background-color: #07834f; text-align: center; widht: 10%">
                                    Sending Information
                                </td>

                                <th rowspan="2" style="width: 1%; text-align: center;">
                                    Action
                                </th>
                            </tr>

                            <tr>
                                {{-- Demand Information --}}
                                <td style="color: white; background-color: #c01faa; text-align: center; widht: 10%">
                                    Date
                                </td>
                                <td style="color: white; background-color: #c01faa; text-align: center; widht: 10%">
                                    Male
                                </td>
                                <td style="color: white; background-color: #c01faa; text-align: center; widht: 10%">
                                    Female
                                </td>
                                <td style="color: white; background-color: #c01faa; text-align: center; widht: 10%">
                                    Total
                                </td>

                                {{-- Contract Information --}}
                                <td style="color: white; background-color: #1339b3; text-align: center; widht: 10%">
                                    Date
                                </td>
                                <td style="color: white; background-color: #1339b3; text-align: center; widht: 10%">
                                    Male
                                </td>
                                <td style="color: white; background-color: #1339b3; text-align: center; widht: 10%">
                                    Female
                                </td>
                                <td style="color: white; background-color: #1339b3; text-align: center; widht: 10%">
                                    Total
                                </td>
                                <th style="color: white; background-color: #1339b3; text-align: center; widht: 10%">
                                    Balance Male
                                </th>
                                <th style="color: white; background-color: #1339b3; text-align: center; widht: 10%">
                                    Balance Female
                                </th>
                                <th style="color: white; background-color: #1339b3; text-align: center; widht: 10%">
                                    Balance Total
                                </th>

                                {{-- Sending Information --}}
                                <td style="color: white; background-color: #07834f; text-align: center; widht: 10%">
                                    Date
                                </td>
                                <td style="color: white; background-color: #07834f; text-align: center; widht: 10%">
                                    Male
                                </td>
                                <td style="color: white; background-color: #07834f; text-align: center; widht: 10%">
                                    Female
                                </td>
                                <td style="color: white; background-color: #07834f; text-align: center; widht: 10%">
                                    Total
                                </td>
                                <th style="color: white; background-color: #07834f; text-align: center; widht: 10%">
                                    Balance Male
                                </th>
                                <th style="color: white; background-color: #07834f; text-align: center; widht: 10%">
                                    Balance Female
                                </th>
                                <th style="color: white; background-color: #07834f; text-align: center; widht: 10%">
                                    Balance Total
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $demandMaleTotal = [];
                                $demandFemaleTotal = [];
                                
                                $contractMaleTotal = [];
                                $contractFemaleTotal = [];
                                $ContractBalanceMale = [];
                                $ContractBalanceFemale = [];
                                
                                $sendingMaleTotal = [];
                                $sendingFemaleTotal = [];
                                $sendingBalanceMale = [];
                                $sendingBalanceFemale = [];
                            @endphp
                            @foreach ($demands as $key => $demand)
                                @if ($demand->demand_status == 'old_demand')
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            {{ $demand->company_name }}
                                        </td>

                                        <td>
                                            {{ $demand->overseas_agencies_table->company_name ?? '' }}
                                        </td>

                                        {{-- Demand --}}
                                        <td
                                            style="text-align: right; font-weight: bold; background-color: #c01faa; color: white;">
                                            {{ $demand->demand_date }}
                                        </td>
                                        <td
                                            style="text-align: right; font-weight: bold; background-color: #c01faa; color: white;">
                                            {{ $demand->male }}
                                            @php
                                                $demandMaleTotal[] = $demand->male ?? 0;
                                            @endphp
                                        </td>

                                        <td
                                            style="text-align: right; font-weight: bold; background-color: #c01faa; color: white;">
                                            {{ $demand->female }}
                                            @php
                                                $demandFemaleTotal[] = $demand->female ?? 0;
                                            @endphp
                                        </td>

                                        <td
                                            style="text-align: right; font-weight: bold; background-color: #c01faa; color: white;">
                                            {{ $demand->male + $demand->female }}
                                        </td>
                                        {{-- Demand --}}

                                        {{-- Contract --}}
                                        <td style="color: white; background-color: #1339b3;">
                                            {{ $demand->contracts_table->contract_date ?? '' }}
                                        </td>

                                        <td style="color: white; background-color: #1339b3; text-align: right;">
                                            {{ $demand->contracts_table->contract_male ?? 0 }}
                                            @php
                                                $contractMaleTotal[] = $demand->contracts_table->contract_male ?? 0;
                                            @endphp
                                        </td>

                                        <td style="color: white; background-color: #1339b3; text-align: right;">
                                            {{ $demand->contracts_table->contract_female ?? 0 }}
                                            @php
                                                $contractFemaleTotal[] = $demand->contracts_table->contract_female ?? 0;
                                            @endphp
                                        </td>

                                        <!--Contract Total-->
                                        <td style="color: white; background-color: #1339b3; text-align: right;">
                                            @php
                                                $contract_male = $demand->contracts_table->contract_male ?? 0;
                                                $contract_female = $demand->contracts_table->contract_female ?? 0;
                                                echo $contract_male + $contract_female;
                                            @endphp
                                        </td>

                                        <!--Balance Male-->
                                        <td style="color: white; background-color: #1339b3; text-align: right;">
                                            @php
                                                $demand_male = $demand->male ?? 0;
                                                $contract_male = $demand->contracts_table->contract_male ?? 0;
                                                $contract_balance_male = $demand_male - $contract_male;
                                                echo $contract_balance_male;
                                                $ContractBalanceMale[] = $contract_balance_male;
                                            @endphp
                                        </td>

                                        <!--Balance MFemale-->
                                        <td style="color: white; background-color: #1339b3; text-align: right;">
                                            @php
                                                $demand_female = $demand->female ?? 0;
                                                $contract_female = $demand->contracts_table->contract_female ?? 0;
                                                $contract_balance_female = $demand_female - $contract_female;
                                                echo $contract_balance_female;
                                                $ContractBalanceFemale[] = $contract_balance_female;
                                            @endphp
                                        </td>

                                        <!--Balance Total-->
                                        <td style="color: white; background-color: #1339b3; text-align: right;">
                                            @php
                                                $demand_male = $demand->male ?? 0;
                                                $demand_female = $demand->female ?? 0;
                                                $demand_total = $demand_male + $demand_female;
                                                
                                                $contract_male = $demand->contracts_table->contract_male ?? 0;
                                                $contract_female = $demand->contracts_table->contract_female ?? 0;
                                                $contract_total = $contract_male + $contract_female;
                                                
                                                echo $demand_total - $contract_total;
                                            @endphp
                                        </td>
                                        {{-- Contract --}}

                                        <!--Sending-->
                                        <td style="background-color: #07834f; color: white">
                                            {{ $demand->sendings_table->sending_date ?? '' }}
                                        </td>

                                        <td style="background-color: #07834f; color: white; text-align: right;">
                                            {{ $demand->sendings_table->sending_male ?? 0 }}
                                            @php
                                                $sendingMaleTotal[] = $demand->sendings_table->sending_male ?? 0;
                                            @endphp
                                        </td>

                                        <td style="background-color: #07834f; color: white; text-align: right;">
                                            {{ $demand->sendings_table->sending_female ?? 0 }}
                                            @php
                                                $sendingFemaleTotal[] = $demand->sendings_table->sending_female ?? 0;
                                            @endphp
                                        </td>

                                        <td style="background-color: #07834f; color: white; text-align: right;">
                                            @php
                                                $sending_male = $demand->sendings_table->sending_male ?? 0;
                                                $sending_female = $demand->sendings_table->sending_female ?? 0;
                                                $sending_total = $sending_male + $sending_female;
                                                echo $sending_total;
                                                
                                            @endphp
                                        </td>

                                        <td style="background-color: #07834f; color: white; text-align: right;">
                                            @php
                                                $contract_male = $demand->contracts_table->contract_male ?? 0;
                                                $sending_male = $demand->sendings_table->sending_male ?? 0;
                                                $sending_balance_male = $contract_male - $sending_male;
                                                echo $sending_balance_male;
                                                $sendingBalanceMale[] = $sending_balance_male;
                                            @endphp
                                        </td>

                                        <td style="background-color: #07834f; color: white; text-align: right;">
                                            @php
                                                $contract_female = $demand->contracts_table->contract_female ?? 0;
                                                $sending_female = $demand->sendings_table->sending_female ?? 0;
                                                $sending_balance_female = $contract_female - $sending_female;
                                                echo $sending_balance_female;
                                                $sendingBalanceFemale[] = $sending_balance_female;
                                            @endphp
                                        </td>

                                        <td style="background-color: #07834f; color: white; text-align: right;">
                                            @php
                                                $sending_balance_total = $sending_balance_male + $sending_balance_female;
                                                echo $sending_balance_total;
                                            @endphp
                                        </td>
                                        {{-- Sending --}}

                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">

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
                                @endif
                            @endforeach
                        </tbody>
                        <tr>
                            <th colspan="4">Total</th>
                            <th style="background-color: #c01faa; color: white; text-align: right; font-weight: bold">
                                @php
                                    $demandMaleTotal = array_sum($demandMaleTotal);
                                    echo $demandMaleTotal;
                                @endphp
                            </th>
                            <th style="background-color: #c01faa; color: white; text-align: right; font-weight: bold">
                                @php
                                    $demandFemaleTotal = array_sum($demandFemaleTotal);
                                    echo $demandFemaleTotal;
                                @endphp
                            </th>
                            <th style="background-color: #c01faa; color: white; text-align: right; font-weight: bold">
                                @php
                                    echo $demandMaleTotal + $demandFemaleTotal;
                                @endphp
                            </th>

                            {{-- Contract --}}
                            <th></th>
                            <th style="background-color: #1339b3; color: white; text-align: right; font-weight: bold">
                                @php
                                    $contractMaleTotal = array_sum($contractMaleTotal);
                                    echo $contractMaleTotal;
                                @endphp
                            </th>
                            <th style="background-color: #1339b3; color: white; text-align: right; font-weight: bold">
                                @php
                                    $contractFemaleTotal = array_sum($contractFemaleTotal);
                                    echo $contractFemaleTotal;
                                @endphp
                            </th>
                            {{-- Total --}}
                            <th style="background-color: #1339b3; color: white; text-align: right; font-weight: bold">
                                @php
                                    echo $contractMaleTotal + $contractFemaleTotal;
                                @endphp
                            </th>
                            {{-- Balance Male Total --}}
                            <th style="background-color: #1339b3; color: white; text-align: right; font-weight: bold">
                                @php
                                    $ContractBalanceMale = array_sum($ContractBalanceMale);
                                    echo $ContractBalanceMale;
                                @endphp
                            </th>
                            <th style="background-color: #1339b3; color: white; text-align: right; font-weight: bold">
                                @php
                                    $ContractBalanceFemale = array_sum($ContractBalanceFemale);
                                    echo $ContractBalanceFemale;
                                @endphp
                            </th>

                            <th style="background-color: #1339b3; color: white; text-align: right; font-weight: bold">
                                @php
                                    echo $ContractBalanceMale + $ContractBalanceFemale;
                                @endphp
                            </th>
                            {{-- Contract --}}

                            {{-- Sending --}}
                            <th></th>
                            <th style="background-color: #07834f; color: white; text-align: right; font-weight: bold">
                                @php
                                    $sendingMaleTotal = array_sum($sendingMaleTotal);
                                    echo $sendingMaleTotal;
                                @endphp
                            </th>
                            <th style="background-color: #07834f; color: white; text-align: right; font-weight: bold">
                                @php
                                    $sendingFemaleTotal = array_sum($sendingFemaleTotal);
                                    echo $sendingFemaleTotal;
                                @endphp
                            </th>
                            <th style="background-color: #07834f; color: white; text-align: right; font-weight: bold">
                                @php
                                    echo $sendingMaleTotal + $sendingFemaleTotal;
                                @endphp
                            </th>

                            <th style="background-color: #07834f; color: white; text-align: right; font-weight: bold">
                                @php
                                    $sendingBalanceMale = array_sum($sendingBalanceMale);
                                    echo $sendingBalanceMale;
                                @endphp
                            </th>
                            <th style="background-color: #07834f; color: white; text-align: right; font-weight: bold">
                                @php
                                    $sendingBalanceFemale = array_sum($sendingBalanceFemale);
                                    echo $sendingBalanceFemale;
                                @endphp
                            </th>

                            <th style="background-color: #07834f; color: white; text-align: right; font-weight: bold">
                                @php
                                    echo $sendingBalanceMale + $sendingBalanceFemale;
                                @endphp
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
