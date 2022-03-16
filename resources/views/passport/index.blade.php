@extends('layouts.main')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Passport</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <a href="{{ route('passport.create') }}" class="btn btn-info d-none d-lg-block m-l-15 text-white">
                    <i class="fa fa-plus-circle"></i> Create
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Success Table</h4>
                    <div class="table-responsive">
                        <table class="table color-table success-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Father Name</th>
                                    <th>NRC</th>
                                    <th>Date of Birth</th>
                                    <th>Passport</th>
                                    <th>Passport Date</th>
                                    <th>Local Agent Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Gender</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($passports as $passport)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $passport->name }}</td>
                                        <td>{{ $passport->father_name }}</td>
                                        <td>{{ $passport->nrc }}</td>
                                        <td>{{ $passport->date_of_birth }}</td>
                                        <td>{{ $passport->passport }}</td>
                                        <td>{{ $passport->passport_date }}</td>
                                        <td>{{ $passport->local_agent_name }}</td>
                                        <td>{{ $passport->phone }}</td>
                                        <td>{{ $passport->address }}</td>
                                        <td>{{ $passport->gender }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{ route('passport.edit', $passport->id) }}">Edit</a>

                                                    <form action="{{ route('passport.destroy', $passport->id) }}"
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
                        {!! $passports->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
