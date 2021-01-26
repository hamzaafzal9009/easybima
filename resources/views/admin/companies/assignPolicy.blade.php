@extends('layouts.panel')
@section('title', 'Dashboard')
@section('content')

    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center text-md-left">Assign New Policy to {{ $company->c_name }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="container-md">
                            <form method="POST" action="{{ route('companies.assignNewPolicy') }}" id="assign-policy-form"
                                class="form-horizontal">
                                @csrf

                                <div class="row justify-content-md-center">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="hidden" name="c_id" value="{{ $company->id }}">
                                            <select id="policies" name="policy_id" class="selectpicker form-control"
                                                data-style="btn btn-outline-info btn-round" title="Choose Policy" required>
                                                <option value="0" disabled>Select Policy</option>
                                                @foreach ($policies as $policy)
                                                    <option value="{{ $policy->id }}">{{ $policy->p_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>





                                <div id="features-details">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>Features Details:</h5>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="features-list"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="row my-4">
                                        <div class="col-md-12">
                                            <h5>Policy Price <small><sub>in Ksh</sub></small></h5>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Enter Policy Price" name="p_price" class="form-control"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row my-4">
                                        <div class="col-md-12">
                                            <h5>Policy Details:</h5>
                                            <textarea class="ckeditor form-control" name="p_details"
                                                placeholder="Enter Policy Detail" cols="7" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-3">
                                        <button type="submit" id="submit-btn"
                                            class="btn btn-outline-primary btn-block btn-round">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('scripts')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    <script>
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });

    </script>

    <script>
        jQuery(document).ready(function($) {
            $('#features-details').hide();
            $('#features-list').hide();
            $('#submit-btn').prop('disabled', true);
            $('#policies').on('change', function() {

                $('#features-list').empty();
                let p_id = $('#policies').val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                let type = "GET";
                let ajaxurl = `/company/policy/${p_id}/features`;

                $.ajax({
                    type: type,
                    url: ajaxurl,
                    dataType: 'json',
                    success: function(data) {
                        $('#features-list').show();
                        $('#submit-btn').prop('disabled', false);
                        if (data != null) {
                            console.dir(JSON.stringify(data));
                            let featuresLength = data.length;
                            if (featuresLength != 0) {

                                $('#features-details').show();
                                for (let i = 0; i < featuresLength; i++) {
                                    let fieldLabel = data[i].p_feature;
                                    console.log(fieldLabel);
                                    let fieldHTML =
                                        `<div id="fields" class="row"><div class="col-md-12"><div class="form-group"><label>Details of ${fieldLabel}</label><input type="text" class="form-control" name="feature_detail[${data[i].id}]" value="" placeholder="Enter Feature Detail" required/></div></div></div>`;
                                    $('#features-list').append(fieldHTML);
                                }
                            } else {

                                $('#features-details').hide();
                                $('#features-list').hide();
                                $('#submit-btn').prop('disabled', true);
                                $.notify({
                                    message: "You do not have added any policy features yet! First Add Policy Features"

                                }, {
                                    type: 'danger',
                                    timer: 3000,
                                    placement: {
                                        from: 'top',
                                        align: 'right'
                                    }
                                });
                            }
                        }
                    },
                    error: function(data) {
                        console.error(data);
                    }
                });
            });

            //     $('#assign-policy-form').submit(function(e) {
            //         e.preventDefault();
            //         let url = "{{ route('companies.assignNewPolicy') }}";

            //         let p_id = $('policies').val();
            //         let p_f = $('[name=feature_detail]').val();
            //         console.log(p_f);
            //         // let data = $(this).serialize();

            //         // $.ajax({
            //         //     url: url,
            //         //     method: 'POST',
            //         //     data: data,
            //         //     success: function(response) {
            //         //         console.log(response);
            //         //     },
            //         //     error: function(error) {
            //         //         console.log(error)
            //         //     }
            //         // });
            //     });



        });

    </script>
@endsection
@endsection
