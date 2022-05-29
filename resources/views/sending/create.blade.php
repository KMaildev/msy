@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="mb-0 text-white">Create New Sending</h4>
                </div>
                <form action="{{ route('sending.store') }}" method="POST" autocomplete="off" id="create-form">
                    @csrf
                    <input type="hidden" name="demand_id" value="{{ $demand->id }}">
                    <input type="hidden" name="contract_id" value="{{ $demand->contracts_table->id }}">

                    <div class="card-body">
                        <h4 class="card-title">Demand Information</h4>
                    </div>
                    <hr>
                    <div class="form-body">

                        {{-- Demand Information --}}
                        <div class="card-body">
                            <div class="row pt-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Oversea Company Name</label>
                                        <input type="text" class="form-control"
                                            value="{{ $demand->overseas_agencies_table->company_name ?? '' }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Demand Date</label>
                                        <input type="text" class="form-control" value="{{ $demand->demand_date }}"
                                            readonly>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Cabinet Date</label>
                                        <input type="text" class="form-control" value="{{ $demand->cabinet_date }}"
                                            readonly>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Demand Male</label>
                                        <input type="text" class="form-control" value="{{ $demand->male }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Demand Female</label>
                                        <input type="text" class="form-control" value="{{ $demand->female }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Demand Total</label>
                                        <input type="text" class="form-control"
                                            value="{{ $demand->male + $demand->female }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title mt-5">Contract Information</h4>
                        </div>
                        <hr>

                        {{-- Contract Information --}}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Contract Date</label>
                                        <input type="text" class="form-control"
                                            value="{{ $demand->contracts_table->contract_date ?? '' }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Contract Male</label>
                                        <input type="text" class="form-control"
                                            value="{{ $demand->contracts_table->contract_male ?? '' }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Contract Female</label>
                                        <input type="text" class="form-control"
                                            value="{{ $demand->contracts_table->contract_female ?? '' }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Contract Total</label>
                                        <input type="text" class="form-control"
                                            value="{{ $demand->contracts_table->contract_male + $demand->contracts_table->contract_female }}"
                                            readonly>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Remark</label>
                                        <input type="text" class="form-control"
                                            value="{{ $demand->contracts_table->remark }}" readonly>
                                    </div>
                                </div>
                            </div>

                            <h4 class="card-title mt-5">Sending Information</h4>
                        </div>
                        <hr>

                        {{-- Sending Information --}}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Sending Date</label>
                                        <input type="text"
                                            class="form-control @error('sending_date') form-control-danger @enderror"
                                            name="sending_date">
                                        @error('sending_date')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Sending Male</label>
                                        <input type="text"
                                            class="form-control @error('sending_male') form-control-danger @enderror"
                                            name="sending_male" oninput="MaleFemaleTotalCalc()" id="male" value="0">
                                        @error('sending_male')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Sending Female</label>
                                        <input type="text"
                                            class="form-control @error('sending_female') form-control-danger @enderror"
                                            name="sending_female" oninput="MaleFemaleTotalCalc()" id="female" value="0">
                                        @error('sending_female')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Sending Total</label>
                                        <input type="text" class="form-control" id="total" readonly>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Remark</label>
                                        <input type="text"
                                            class="form-control @error('remark') form-control-danger @enderror"
                                            name="remark">
                                        @error('remark')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="card-body">
                                <button type="submit" class="btn btn-success text-white">
                                    <i class="fa fa-check"></i>
                                    Save
                                </button>
                                <a href="{{ route('contract.index') }}" class="btn btn-dark">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreSending', '#create-form') !!}
    <script type="text/javascript">
        function MaleFemaleTotalCalc() {
            var male = document.getElementById("male").value;
            var female = document.getElementById("female").value;
            var t = parseInt(female) + parseInt(male);
            document.getElementById('total').value = t;
        }
    </script>
@endsection
