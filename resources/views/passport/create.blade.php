@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Create</h4>
                </div>

                <div class="card-body">
                    <form autocomplete="off" action="{{ route('passport.store') }}" method="POST" id="create-form">
                        @csrf
                        <div class="form-body">
                            <h3 class="card-title">Person Info</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group @error('name') has-danger @enderror">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control @error('name') form-control-danger @enderror"
                                            name="name">
                                        @error('name')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('father_name') has-danger @enderror">
                                        <label class="form-label">Father Name</label>
                                        <input type="text" class="form-control" name="father_name">
                                        @error('father_name')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group @error('nrc') has-danger @enderror">
                                        <label class="form-label">NRC</label>
                                        <input type="text" class="form-control" name="nrc">
                                        @error('nrc')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group @error('date_of_birth') has-danger @enderror">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="text" class="form-control" name="date_of_birth">
                                        @error('date_of_birth')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group @error('passport') has-danger @enderror">
                                        <label class="form-label">Passport</label>
                                        <input type="text" class="form-control" name="passport">
                                        @error('passport')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group @error('passport_date') has-danger @enderror">
                                        <label class="form-label">Passport Date</label>
                                        <input type="text" class="form-control" name="passport_date">
                                        @error('passport_date')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group @error('local_agent_name') has-danger @enderror">
                                        <label class="form-label">Local Agent Name</label>
                                        <input type="text" class="form-control" name="local_agent_name">
                                        @error('local_agent_name')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group @error('phone') has-danger @enderror">
                                        <label class="form-label">Phone</label>
                                        <input type="text" class="form-control" name="phone">
                                        @error('phone')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group @error('address') has-danger @enderror">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address">
                                        @error('address')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Gender</label>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="Male" value="Male" name="gender"
                                                class="form-check-input" checked>
                                            <label class="form-check-label" for="Male">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="Female" value="Female" name="gender"
                                                class="form-check-input">
                                            <label class="form-check-label" for="Female">Female</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group @error('remark') has-danger @enderror">
                                        <label class="form-label">Remark</label>
                                        <input type="text" class="form-control" name="remark">
                                        @error('remark')
                                            <div class="form-control-feedback"> {{ $message }} </div>
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
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StorePassport', '#create-form') !!}
@endsection
