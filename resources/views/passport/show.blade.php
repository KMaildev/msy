@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">
                        {{ $passport->name }}
                    </h4>
                </div>
                <div class="card-body">
                    <a href="{{ route('passport_detail_export', $passport->id) }}"
                        class="btn waves-effect waves-light btn-success">
                        Export to Excel
                    </a>
                    <br><br>
                    <table class="table">
                        <tr>
                            <th style="width: 50%">Name</th>
                            <td>
                                {{ $passport->name }}
                            </td>
                        <tr>

                        <tr>
                            <th style="width: 50%">Gender</th>
                            <td>
                                {{ ucfirst(trans($passport->gender)) }}
                            </td>
                        <tr>

                        <tr>
                            <th style="width: 50%">NRC</th>
                            <td>
                                {{ $passport->nrc }}
                            </td>
                        <tr>

                        <tr>
                            <th style="width: 50%">Father Name</th>
                            <td>
                                {{ $passport->father_name }}
                            </td>
                        <tr>

                        <tr>
                            <th style="width: 50%">Date of Birth</th>
                            <td>
                                {{ $passport->date_of_birth }}
                            </td>
                        <tr>

                        <tr>
                            <th style="width: 50%">Address</th>
                            <td>
                                {{ $passport->address }}
                            </td>
                        <tr>

                        <tr>
                            <th style="width: 50%">Passport No</th>
                            <td>
                                {{ $passport->passport }}
                            </td>
                        <tr>

                        <tr>
                            <th style="width: 50%">Date of Passport</th>
                            <td>
                                {{ $passport->passport_date }}
                            </td>
                        <tr>

                        <tr>
                            <th style="width: 50%">Local Agent Name</th>
                            <td>
                                {{ $passport->local_agent_name }}
                            </td>
                        <tr>

                        <tr>
                            <th style="width: 50%">OWIC</th>
                            <td>
                                {{ $passport->owic }}
                            </td>
                        <tr>

                        <tr>
                            <th style="width: 50%">OWIC Date</th>
                            <td>
                                {{ $passport->owic_date }}
                            </td>
                        <tr>

                        <tr>
                            <th style="width: 50%">Place of Passport</th>
                            <td>
                                {{ $passport->place_of_passport }}
                            </td>
                        <tr>

                        <tr>
                            <th style="width: 50%">Phone No</th>
                            <td>
                                {{ $passport->phone }}
                            </td>
                        <tr>

                        <tr>
                            <th style="width: 50%">Remark</th>
                            <td>
                                {{ $passport->remark }}
                            </td>
                        <tr>

                        <tr>
                            <th style="width: 50%">Reject Status</th>
                            <td
                                style="background-color: {{ $passport->reject_status ? 'red' : '#3c9e76' }}; color: white;">
                                {{ $passport->reject_status ?? '' }}
                            </td>
                        <tr>

                        <tr>
                            <th style="width: 50%">Reject Date</th>
                            <td>
                                {{ $passport->reject_date ?? '' }}
                            </td>
                        <tr>

                        <tr>
                            <th style="width: 50%">Reject Reason</th>
                            <td>
                                {{ $passport->reject_reason ?? '' }}
                            </td>
                        <tr>

                        <tr>
                            <th style="width: 50%">Overseas Company</th>
                            <td>
                                {{ $passport->labour_management_table->overseas_agencies_table->company_name ?? '' }}
                            </td>
                        <tr>

                        <tr>
                            <th style="width: 50%">Contract Date</th>
                            <td>
                                {{ $passport->labour_management_table->contract_table->contract_date ?? '' }}
                            </td>
                        <tr>

                        <tr>
                            <th style="width: 50%">Sending Date</th>
                            <td>
                                {{ $passport->labour_management_table->sendings_table->sending_date ?? '' }}
                            </td>
                        <tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
