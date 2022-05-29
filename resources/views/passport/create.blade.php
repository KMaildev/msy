@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Create</h4>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                                        <span class="hidden-sm-up">
                                            <i class="ti-home"></i>
                                        </span>
                                        <span class="hidden-xs-down">
                                            Manual
                                        </span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                                        <span class="hidden-sm-up">
                                            <i class="ti-user"></i>
                                        </span>
                                        <span class="hidden-xs-down">
                                            Import Excel
                                        </span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content tabcontent-border">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="p-20">

                                        <div class="card">
                                            <div class="card-header bg-info">
                                                <h4 class="m-b-0 text-white">Create</h4>
                                            </div>

                                            <div class="card-body">
                                                <form autocomplete="off" action="{{ route('passport.store') }}"
                                                    method="POST" id="create-form">
                                                    @csrf
                                                    <div class="form-body">
                                                        <h3 class="card-title">Person Info</h3>
                                                        <hr>
                                                        <div class="row p-t-20">
                                                            <div class="col-md-6">
                                                                <div class="form-group @error('name') has-danger @enderror">
                                                                    <label class="form-label">Name</label>
                                                                    <input type="text"
                                                                        class="form-control @error('name') form-control-danger @enderror"
                                                                        name="name">
                                                                    @error('name')
                                                                        <div class="form-control-feedback" style="color: red;">
                                                                            {{ $message }} </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div
                                                                    class="form-group @error('father_name') has-danger @enderror">
                                                                    <label class="form-label">Father Name</label>
                                                                    <input type="text" class="form-control"
                                                                        name="father_name">
                                                                    @error('father_name')
                                                                        <div class="form-control-feedback"> {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group @error('nrc') has-danger @enderror">
                                                                    <label class="form-label">NRC</label>
                                                                    <input type="text" class="form-control" name="nrc">
                                                                    @error('nrc')
                                                                        <div class="form-control-feedback"> {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div
                                                                    class="form-group @error('date_of_birth') has-danger @enderror">
                                                                    <label class="form-label">Date of Birth</label>
                                                                    <input type="text" class="form-control"
                                                                        name="date_of_birth">
                                                                    @error('date_of_birth')
                                                                        <div class="form-control-feedback"> {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div
                                                                    class="form-group @error('passport') has-danger @enderror">
                                                                    <label class="form-label">Passport</label>
                                                                    <input type="text" class="form-control"
                                                                        name="passport">
                                                                    @error('passport')
                                                                        <div class="form-control-feedback"> {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div
                                                                    class="form-group @error('passport_date') has-danger @enderror">
                                                                    <label class="form-label">Date of Passport</label>
                                                                    <input type="text" class="form-control"
                                                                        name="passport_date">
                                                                    @error('passport_date')
                                                                        <div class="form-control-feedback"> {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div
                                                                    class="form-group @error('place_of_passport') has-danger @enderror">
                                                                    <label class="form-label">Place of Passport</label>
                                                                    <input type="text" class="form-control"
                                                                        name="place_of_passport">
                                                                    @error('place_of_passport')
                                                                        <div class="form-control-feedback"> {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div
                                                                    class="form-group @error('local_agent_name') has-danger @enderror">
                                                                    <label class="form-label">Local Agent Name</label>
                                                                    <input type="text" class="form-control"
                                                                        name="local_agent_name">
                                                                    @error('local_agent_name')
                                                                        <div class="form-control-feedback"> {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div
                                                                    class="form-group @error('phone') has-danger @enderror">
                                                                    <label class="form-label">Phone</label>
                                                                    <input type="text" class="form-control" name="phone">
                                                                    @error('phone')
                                                                        <div class="form-control-feedback"> {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>


                                                            <div class="col-md-12">
                                                                <div
                                                                    class="form-group @error('address') has-danger @enderror">
                                                                    <label class="form-label">Address</label>
                                                                    <input type="text" class="form-control"
                                                                        name="address">
                                                                    @error('address')
                                                                        <div class="form-control-feedback"> {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="form-label">Gender</label>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" id="male" value="male"
                                                                            name="gender" class="form-check-input" checked>
                                                                        <label class="form-check-label"
                                                                            for="male">Male</label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" id="female" value="female"
                                                                            name="gender" class="form-check-input">
                                                                        <label class="form-check-label"
                                                                            for="female">Female</label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div
                                                                    class="form-group @error('remark') has-danger @enderror">
                                                                    <label class="form-label">Remark</label>
                                                                    <input type="text" class="form-control" name="remark">
                                                                    @error('remark')
                                                                        <div class="form-control-feedback"> {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <button type="submit" class="btn btn-success text-white">
                                                            <i class="fa fa-check"></i>
                                                            Save
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="p-20">

                                        <div class="card">
                                            <div class="card-header bg-info">
                                                <h4 class="m-b-0 text-white">Import Excel</h4>
                                            </div>

                                            <div class="card-body">
                                                <form action="{{ route('passport_import') }}" method="POST"
                                                    enctype="multipart/form-data" id="import-form">
                                                    @csrf

                                                    <input type="file" name="file" class="form-control"
                                                        accept=".xlsx, .csv">
                                                    <br><br>

                                                    <a href="{{ asset('data/simple.csv') }}"
                                                        class="btn btn-primary text-white" download="">
                                                        <i class="fa fa-download"></i>
                                                        Simple File Download
                                                    </a>

                                                    <button type="submit" class="btn btn-success text-white">
                                                        <i class="fa fa-check"></i>
                                                        Save
                                                    </button>

                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StorePassport', '#create-form') !!}
    {!! JsValidator::formRequest('App\Http\Requests\StoreImportPassport', '#import-form') !!}
@endsection
