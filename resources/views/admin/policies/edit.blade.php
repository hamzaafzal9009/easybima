@extends('layouts.panel')
@section('title', 'Dashboard')
@section('content')

    <div class="content">


        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-md-6">
                            <h4 class="card-title">Edit Policy <small><strong>{{ $policy->p_name }}</strong></small></h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="toolbar">
                        </div>
                        <form id="form" action="{{ route('policy.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $policy->id }}">

                            <div class="row">
                                <label class="col-sm-2 col-form-label">Policy Name</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="p_name"
                                            placeholder="Enter Policy Name" value="{{ $policy->p_name }}" required="true" />
                                    </div>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-12">
                                    <h4 class="d-inline">Edit Policy Features</h4>
                                    <a href="javascript:void(0)" class="btn-outline-info btn-sm float-right"
                                        data-toggle="modal" data-target="#addPolicyFeature">Add New
                                        Feature</a>
                                </div>
                            </div>
                            @if (count($policy->features) < 1)
                                <p class="text-center text-grey">No Feature Added</p>
                            @endif
                            @foreach ($policy->features as $key => $item)
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Policy Feature {{ $key + 1 }}</label>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="feature[{{ $item->id }}]"
                                                placeholder="Enter Policy Name" value="{{ $item->p_feature }}"
                                                required="true" />
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <a class='btn btn-outline-warning btn-round btn-icon btn-icon-mini btn-sm pull-right'
                                            title='View Policy' href="{{ route('policy.deletePolicyFeature', $item->id) }}"
                                            onclick="return confirm('Are you sure you want to delete?')"><i
                                                class='nc-icon nc-simple-remove'></i></a>
                                    </div>
                                </div>
                            @endforeach
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="addPolicyFeature" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('policy.addPolicyFeature', $policy->id) }} " method="post" id="add-company-form"
                        enctype="multipart/form-data">
                        <div class="modal-header justify-content-center">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="nc-icon nc-simple-remove"></i>
                            </button>
                            <h4 class="title title-up">Add New Policy Feature</h4>
                        </div>
                        <div class="modal-body">
                            @csrf
                            <div class="form-group has-label">
                                <label for="pFeature">Policy Feature Name</label>
                                <input type="text" id="pFeature" name="pFeature" class="form-control"
                                    placeholder="Enter Policy Feature Name" value="{{ old('pFeature') }}">
                            </div>
                        </div>
                        <div class="modal-footer" id="model-footer-btn">
                            <div class="left-side">
                                <button type="button" class="btn btn-default btn-link" data-dismiss="modal"
                                    aria-label="Close" id="cancel-btn">Cancel</button>

                            </div>
                            <div class="divider"></div>
                            <div class="right-side">
                                <button type="submit" class="btn btn-success btn-link" id="submit-btn">Add</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@section('scripts')
    <script>
        function setFormValidation(id) {
            $(id).validate({
                highlight: function(element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
                    $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
                },
                success: function(element) {
                    $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
                    $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
                },
                errorPlacement: function(error, element) {
                    $(element).closest('.form-group').append(error);
                },
            });
        }

        $(document).ready(function() {
            setFormValidation('#form');
        });

    </script>

    @if (count($errors) > 0)
        <script>
            $(document).ready(function() {
                $('#addPolicyFeature').modal('show');
            });

        </script>
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
