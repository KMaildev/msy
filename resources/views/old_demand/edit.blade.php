@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content tabcontent-border">
                                <div class="card">
                                    <div class="card-header bg-info">
                                        <h4 class="m-b-0 text-white">Edit</h4>
                                    </div>

                                    <div class="card-body">
                                        <form autocomplete="off" action="{{ route('old_demand.update', $demand->id) }}"
                                            method="POST" id="create-form">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" value="old_demand" name="demand_status">
                                            <div class="form-body">
                                                <h3 class="card-title">Demand Info</h3>
                                                <hr>
                                                <div class="row p-t-20">

                                                    <div class="col-md-12">
                                                        <div class="form-group @error('company_name') has-danger @enderror">
                                                            <label class="form-label">Company Name</label>
                                                            <select class="form-control form-select" name="company_name">
                                                                <option value="MSYN"
                                                                    @if ($demand->company_name == 'MSYN') checked @endif>MSYN
                                                                </option>
                                                                <option value="MP"
                                                                    @if ($demand->company_name == 'MP') checked @endif>MP
                                                                </option>
                                                            </select>
                                                            @error('company_name')
                                                                <div class="form-control-feedback" style="color: red;">
                                                                    {{ $message }} </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group @error('countrie_id') has-danger @enderror">
                                                            <label class="form-label">Country</label>
                                                            <select class="select2 form-control form-select"
                                                                name="countrie_id">
                                                                @foreach ($countryies as $country)
                                                                    <option value="{{ $country->id }}"
                                                                        @if ($demand->countrie_id == $country->id) selected @endif>
                                                                        {{ $country->country }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('countrie_id')
                                                                <div class="form-control-feedback"> {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div
                                                            class="form-group @error('overseas_agencie_id') has-danger @enderror">
                                                            <label class="form-label">
                                                                Overseas Company Name
                                                            </label>
                                                            <select class="select2 form-control form-select"
                                                                name="overseas_agencie_id">
                                                                @foreach ($overseas_agencyies as $overseas_agency)
                                                                    <option value="{{ $overseas_agency->id }}"
                                                                        @if ($demand->overseas_agencie_id == $overseas_agency->id) selected @endif>
                                                                        {{ $overseas_agency->company_name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>

                                                            @error('overseas_agencie_id')
                                                                <div class="form-control-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group @error('contact') has-danger @enderror">
                                                            <label class="form-label">Contact(Agent Name)</label>
                                                            <input type="text"
                                                                class="form-control @error('contact') form-control-danger @enderror"
                                                                name="contact" id="contact">
                                                            @error('contact')
                                                                <div class="form-control-feedback" style="color: red;">
                                                                    {{ $message }} </div>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-4">
                                                        <div class="form-group @error('male') has-danger @enderror">
                                                            <label class="form-label">Male</label>
                                                            <input type="text"
                                                                class="form-control @error('male') form-control-danger @enderror"
                                                                name="male" oninput="MaleFemaleTotalCalc()"
                                                                id="male" value="{{ $demand->male }}">
                                                            @error('male')
                                                                <div class="form-control-feedback" style="color: red;">
                                                                    {{ $message }} </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group @error('female') has-danger @enderror">
                                                            <label class="form-label">Female</label>
                                                            <input type="text"
                                                                class="form-control @error('female') form-control-danger @enderror"
                                                                name="female" oninput="MaleFemaleTotalCalc()"
                                                                id="female" value="{{ $demand->female }}">
                                                            @error('female')
                                                                <div class="form-control-feedback" style="color: red;">
                                                                    {{ $message }} </div>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-4">
                                                        <div class="form-group @error('total') has-danger @enderror">
                                                            <label class="form-label">Total</label>
                                                            <input type="text"
                                                                class="form-control @error('total') form-control-danger @enderror"
                                                                id="total">
                                                            @error('total')
                                                                <div class="form-control-feedback" style="color: red;">
                                                                    {{ $message }} </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group @error('demand_date') has-danger @enderror">
                                                            <label class="form-label">Demand Date</label>
                                                            <input type="text"
                                                                class="form-control @error('demand_date') form-control-danger @enderror"
                                                                name="demand_date" value="{{ $demand->demand_date }}">
                                                            @error('demand_date')
                                                                <div class="form-control-feedback" style="color: red;">
                                                                    {{ $message }} </div>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-4" hidden>
                                                        <div
                                                            class="form-group @error('cabinet_date') has-danger @enderror">
                                                            <label class="form-label">Cabinet Date</label>
                                                            <input type="text"
                                                                class="form-control @error('cabinet_date') form-control-danger @enderror"
                                                                name="cabinet_date" value="{{ $demand->cabinet_date }}">
                                                            @error('cabinet_date')
                                                                <div class="form-control-feedback" style="color: red;">
                                                                    {{ $message }} </div>
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
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection


@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\UpdateDemand', '#create-form') !!}
    <script>
        var total = document.getElementById("total");

        function MaleFemaleTotalCalc() {
            var male = document.getElementById("male").value;
            var female = document.getElementById("female").value;
            var t = parseInt(female) + parseInt(male);
            total.value = t;
        }


        function autoAjaxCallContact() {
            var overseas_agencies = '{{ $demand->overseas_agencie_id }}';
            if (overseas_agencies) {
                $.ajax({
                    url: "/overseas_agent_get_ajax/" + overseas_agencies,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        if (data) {
                            contact.value = data.contact;
                        } else {
                            contact.val = "Null";
                        }
                    },
                });
            }
        }
        autoAjaxCallContact();
    </script>
@endsection
