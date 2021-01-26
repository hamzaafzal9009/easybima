@extends('layouts.panel')
@section('title', 'Dashboard')
@section('content')

@section('styles')
    <style>
        #lottie {
            height: 75px;
            width: 75px;
        }

        /* #model-footer-animation {
                                    display: none
                                } */

    </style>
@endsection
<div class="content">


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header row">
                    <div class="col-md-6">
                        <h4 class="card-title">Companies</h4>
                    </div>
                    <div class="col-md-6 justify-content-start">
                        <div class="float-md-right">
                            <span class="btn btn-outline-primary" data-toggle="modal" data-target="#addComanyTable">Add
                                New Company</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="toolbar">
                    </div>
                    <table id="policiesTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Company Name</th>
                                <th>Company Owner</th>
                                <th>Company Contact #</th>
                                <th>Total Policies</th>
                                <th>Total Users</th>
                                <th>Created Date</th>
                                <th class="disabled-sorting text-right">Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addComanyTable" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('companies.add') }}" method="post" id="add-company-form"
                    enctype="multipart/form-data">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                        </button>
                        <h4 class="title title-up">Add New Company</h4>
                    </div>
                    <div class="modal-body">

                        @csrf

                        <div class="form-group has-label">
                            <label for="cName">Company Name</label>
                            <input type="text" id="cName" name="cName" class="form-control"
                                placeholder="Enter Company Name" value="{{ old('cName') }}" required>
                        </div>

                        <div class="form-group has-label">
                            <label for="cOwner">Company Owner Name</label>
                            <input type="text" id="cOwner" name="cOwner" class="form-control"
                                placeholder="Enter Company Owner Name" value="{{ old('cOwner') }}" required>
                        </div>
                        <div class="form-group has-label">
                            <label for="cNum">Company Contact Number</label>
                            <input type="text" id="cNum" name="cNum" class="form-control"
                                placeholder="Enter Company Contact info" value="{{ old('cNum') }}" required>
                        </div>
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                <img src="{{ asset('images/image_placeholder.jpg') }}" alt="...">
                                <small class="text-small text-danger">Image Must be smaller then 2 mb</small>
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            <div>
                                <span class="btn btn-rose btn-round btn-file">
                                    <span class="fileinput-new">Select Logo</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="logo" required />
                                </span>
                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                    data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" id="model-footer-btn">
                        <div class="left-side">
                            <button type="button" class="btn btn-default btn-link" data0-dismiss="modal"
                                id="cancel-btn">Cancel</button>
                            {{-- <lottie-player src="https://assets7.lottiefiles.com/datafiles/riuf5c21sUZ05w6/data.json"
                                id="lottie" background="transparent" speed="1" loop autoplay></lottie-player> --}}
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
    <script src="{{ asset('panel/js/plugins/bootstrap-notify.js') }}"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="{{ asset('panel/demo/demo.js') }}"></script>
    <script>
        $(document).ready(function() {
            var table = $('#policiesTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('companies.all') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'c_name',
                        name: 'c_name',
                        orderable: false,
                        searchable: true
                    },
                    {
                        data: 'c_owner',
                        name: 'c_owner',
                        orderable: false,
                        searchable: true
                    },
                    {
                        data: 'c_contact',
                        name: 'c_contact',
                        orderable: false,
                        searchable: true
                    },
                    {
                        data: 'policies_count',
                        name: 'policies_count',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'users_count',
                        name: 'users_count',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        "render": function(data, type, row) {
                            var date = data.split('T');
                            return date[0]
                        },
                        orderable: false,
                        searchable: false
                    },
                    {
                        name: 'action',
                        'render': function(data, type, row) {
                            console.log(row);
                            var TXT = '';
                            
                            TXT +=
                                "<a class='btn btn-outline-warning btn-round btn-icon btn-icon-mini btn-sm pull-right' title='Delete Company' href='{{ url('delete-company') }}/" +
                                row.id + "'><i class='nc-icon nc-simple-remove'></i></a>";

                            TXT +=
                                "<a class='btn btn-outline-primary btn-round btn-icon btn-icon-mini btn-sm pull-right' title='Edit Company' href='{{ url('edit-company') }}/" +
                                row.id + "'><i class='nc-icon nc-ruler-pencil'></i></a>";
                            if (row.companies_count != 0) {
                                TXT +=
                                    "<a class='btn btn-outline-info btn-round btn-icon btn-icon-mini btn-sm pull-right' title='View Company' href='{{ url('company') }}/" +
                                    row.id + "'><i class='nc-icon nc-alert-circle-i'></i></a>";
                            }

                            return TXT;
                        },

                        orderable: false,
                        searchable: false

                    }
                ]
            });

        });

    </script>

    @if (count($errors) > 0)
        <script>
            $(document).ready(function(){
                $('#addComanyTable').modal('show');
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

    {{-- <script>
        $(document).ready(function() {
            $('#lottie').hide();
            $('#submit-btn').click(function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $('#lottie').show();
                $('#submit-btn').hide();
                $('#cancel-btn').hide();

                $.ajax({
                    url: "{{ route('companies.add') }}",
                    method: 'post',
                    data: $('#add-company-form').serialize(),
                    success: function(response) {
                        console.log(response);
                    //     if (response.status == true) {
                    //         $.notify({
                    //             message: response.msg
                    //         }, {
                    //             type: 'success',
                    //             timer: 3000,
                    //             placement: {
                    //                 from: 'top',
                    //                 align: 'right'
                    //             }
                    //         });
                               
                    //     }

                    //         $('#lottie').hide();
                    //         $('#submit-btn').show();
                    //         $('#cancel-btn').show();
                    // }
                });
            });
        })

    </script> --}}
@endsection
@endsection
