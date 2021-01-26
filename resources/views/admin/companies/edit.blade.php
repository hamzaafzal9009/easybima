@extends('layouts.panel')
@section('title', 'Dashboard')
@section('content')
    <div class="content">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-md-6">
                            <h4 class="card-title">Edit {{ $company->c_name }}</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('companies.update') }}" method="get" id="add-company-form"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="form-group has-label">
                                <label for="cName">Company Name</label>
                                <input type="text" id="cName" name="cName" class="form-control"
                                    placeholder="Enter Company Name"
                                    value="{{ old('cName') == '' ? $company->c_name : old('cName') }}" required>
                            </div>
                            <input type="hidden" name="c_id" value="{{$company->id}}">
                            <div class="form-group has-label">
                                <label for="cOwner">Company Owner Name</label>
                                <input type="text" id="cOwner" name="cOwner" class="form-control"
                                    placeholder="Enter Company Owner Name"
                                    value="{{ old('cOwner') == '' ? $company->c_owner : old('cOwner') }}" required>
                            </div>
                            <div class="form-group has-label">
                                <label for="cNum">Company Contact Number</label>
                                <input type="text" id="cNum" name="cNum" class="form-control"
                                    placeholder="Enter Company Contact info"
                                    value="{{ old('cNum') == '' ? $company->c_contact : old('cNum') }}" required>
                            </div>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="{{ asset('upload') }}/{{ $company->c_logo }}" alt="...">
                                    
                                </div>
                            </div>
                            <div class="modal-footer" id="model-footer-btn">
                                <div class="left-side">
                                    <button type="button" class="btn btn-default btn-link" data0-dismiss="modal"
                                        id="cancel-btn">Cancel</button>
                                </div>
                                <div class="divider"></div>
                                <div class="right-side">
                                    <button type="submit" class="btn btn-success btn-link" id="submit-btn">Update</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('scripts')
    <script src="{{ asset('panel/js/plugins/bootstrap-notify.js') }}"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="{{ asset('panel/demo/demo.js') }}"></script>
    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <script>
                $.notify({
                    message: "{{ $error }}"

                }, {
                    type: 'danger',
                    timer: 3000,
                    placement: {
                        from: 'top',
                        align: 'right'
                    }
                });

            </script>
        @endforeach

    @endif
@endsection
@endsection
