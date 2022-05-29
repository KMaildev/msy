@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Edit</h4>
                </div>

                <div class="card-body">
                    <form autocomplete="off" action="{{ route('passport.update', $passport->id) }}" method="POST"
                        id="edit-form">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <h3 class="card-title">Person Info</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group @error('name') has-danger @enderror">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control @error('name') form-control-danger @enderror"
                                            name="name" value="{{ $passport->name }}">
                                        @error('name')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('father_name') has-danger @enderror">
                                        <label class="form-label">Father Name</label>
                                        <input type="text" class="form-control" name="father_name"
                                            value="{{ $passport->father_name }}">
                                        @error('father_name')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group @error('nrc') has-danger @enderror">
                                        <label class="form-label">NRC</label>
                                        <input type="text" class="form-control" name="nrc" value="{{ $passport->nrc }}">
                                        @error('nrc')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group @error('date_of_birth') has-danger @enderror">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="text" class="form-control" name="date_of_birth"
                                            value="{{ $passport->date_of_birth }}">
                                        @error('date_of_birth')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group @error('passport') has-danger @enderror">
                                        <label class="form-label">Passport</label>
                                        <input type="text" class="form-control" name="passport"
                                            value="{{ $passport->passport }}">
                                        @error('passport')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group @error('passport_date') has-danger @enderror">
                                        <label class="form-label">Passport Date</label>
                                        <input type="text" class="form-control" name="passport_date"
                                            value="{{ $passport->passport_date }}">
                                        @error('passport_date')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group @error('place_of_passport') has-danger @enderror">
                                        <label class="form-label">Place of Passport</label>
                                        <input type="text" class="form-control" name="place_of_passport"
                                            value="{{ $passport->place_of_passport }}">
                                        @error('place_of_passport')
                                            <div class="form-control-feedback"> {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group @error('local_agent_name') has-danger @enderror">
                                        <label class="form-label">Local Agent Name</label>
                                        <input type="text" class="form-control" name="local_agent_name"
                                            value="{{ $passport->local_agent_name }}">
                                        @error('local_agent_name')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group @error('phone') has-danger @enderror">
                                        <label class="form-label">Phone</label>
                                        <input type="text" class="form-control" name="phone"
                                            value="{{ $passport->phone }}">
                                        @error('phone')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group @error('address') has-danger @enderror">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address"
                                            value="{{ $passport->address }}">
                                        @error('address')
                                            <div class="form-control-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Gender</label>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="male" value="male" name="gender"
                                                class="form-check-input" @if ($passport->gender == 'male') checked @endif>
                                            <label class="form-check-label" for="male">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="female" value="female" name="gender"
                                                class="form-check-input" @if ($passport->gender == 'female') checked @endif>
                                            <label class="form-check-label" for="female">Female</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group @error('remark') has-danger @enderror">
                                        <label class="form-label">Remark</label>
                                        <input type="text" class="form-control" name="remark"
                                            value="{{ $passport->remark }}">
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
    {!! JsValidator::formRequest('App\Http\Requests\UpdatePassport', '#edit-form') !!}
@endsection
