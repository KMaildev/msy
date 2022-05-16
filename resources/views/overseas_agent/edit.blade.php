@extends('layouts.main')
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content tabcontent-border">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="p-20">

                                <div class="card">
                                    <div class="card-header bg-info">
                                        <h4 class="m-b-0 text-white">Edit</h4>
                                    </div>

                                    <div class="card-body">
                                        <form autocomplete="off"
                                            action="{{ route('overseas_agent.update', $overseas_agency->id) }}"
                                            method="POST" id="create-form">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-body">
                                                <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                        <div class="form-group @error('company_name') has-danger @enderror">
                                                            <label class="form-label">Company Name</label>
                                                            <input type="text"
                                                                class="form-control @error('company_name') form-control-danger @enderror"
                                                                name="company_name"
                                                                value="{{ $overseas_agency->company_name }}">
                                                            @error('company_name')
                                                                <div class="form-control-feedback" style="color: red;">
                                                                    {{ $message }} </div>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div
                                                            class="form-group @error('type_of_company') has-danger @enderror">
                                                            <label class="form-label">Type of Company</label>
                                                            <input type="text"
                                                                class="form-control @error('type_of_company') form-control-danger @enderror"
                                                                name="type_of_company"
                                                                value="{{ $overseas_agency->type_of_company }}">
                                                            @error('type_of_company')
                                                                <div class="form-control-feedback" style="color: red;">
                                                                    {{ $message }} </div>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div
                                                            class="form-group @error('type_of_company') has-danger @enderror">
                                                            <label class="form-label">Company Phone</label>
                                                            <input type="text"
                                                                class="form-control @error('company_phone') form-control-danger @enderror"
                                                                name="company_phone"
                                                                value="{{ $overseas_agency->company_phone }}">
                                                            @error('type_of_company')
                                                                <div class="form-control-feedback" style="color: red;">
                                                                    {{ $message }} </div>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div
                                                            class="form-group @error('company_email') has-danger @enderror">
                                                            <label class="form-label">Company Email</label>
                                                            <input type="text"
                                                                class="form-control @error('company_email') form-control-danger @enderror"
                                                                name="company_email"
                                                                value="{{ $overseas_agency->company_email }}">
                                                            @error('company_email')
                                                                <div class="form-control-feedback" style="color: red;">
                                                                    {{ $message }} </div>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div
                                                            class="form-group @error('company_address') has-danger @enderror">
                                                            <label class="form-label">Company Address</label>
                                                            <input type="text"
                                                                class="form-control @error('company_address') form-control-danger @enderror"
                                                                name="company_address"
                                                                value="{{ $overseas_agency->company_address }}">
                                                            @error('company_address')
                                                                <div class="form-control-feedback" style="color: red;">
                                                                    {{ $message }} </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group @error('countrie_id') has-danger @enderror">
                                                            <label class="form-label">Country</label>
                                                            <select class="form-control form-select" name="countrie_id">
                                                                @foreach ($countryies as $country)
                                                                    <option value="{{ $country->id }}"
                                                                        @if ($country->id == $overseas_agency->countrie_id) selected @endif>
                                                                        {{ $country->country }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        @error('countrie_id')
                                                            <div class="form-control-feedback" style="color: red;">
                                                                {{ $message }} </div>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-success text-white">
                                                        <i class="fa fa-check"></i>
                                                        Save
                                                    </button>
                                                </div>

                                            </div>
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
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\UpdateOverseaAgency', '#create-form') !!}
@endsection
