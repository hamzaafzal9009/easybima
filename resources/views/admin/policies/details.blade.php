@extends('layouts.panel')
@section('title', 'Dashboard')
@section('content')

    <div class="content">


        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-md-12">
                            <h4 class="card-title">Companies Sell <strong>{{ $policy->p_name }}</strong> Policy</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="toolbar">
                        </div>
                        <table id="companiesTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Company Name</th>
                                    <th>Contact Info </th>
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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-md-12">
                            <h4 class="card-title">Users Who Bought <strong>{{ $policy->p_name }}</strong> Policy</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="toolbar">
                        </div>
                        <table id="usersTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Email </th>
                                    <th class="disabled-sorting text-right">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td> {{$user->username}} </td>
                                        <td> {{$user->email}} </td>
                                        <td> 
                                            <a class='btn btn-outline-primary btn-round btn-icon btn-icon-mini btn-sm pull-right' href="{{ route('users.details', $user->id) }}" title='Edit Policy'>
                                                <i class='nc-icon nc-alert-circle-i'></i>
                                            </a> 
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('scripts')
    <script src="{{ asset('panel/js/plugins/bootstrap-notify.js') }}"></script>
    <script src="{{ asset('panel/demo/demo.js') }}"></script>
    <script>
        $(document).ready(function() {
            var table = $('#companiesTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('get-policy-companies') }}/{{ $policy->id }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        name: 'c_name',
                        "render": function(data, type, row) {
                            console.log(row);
                            if (row.companies.length != 0) {
                                return row.companies[0].c_name
                            } else {
                                return ""
                            }

                        },
                        orderable: false,
                        searchable: false
                    },
                    {
                        name: 'c_contacnt',
                        "render": function(data, type, row) {
                            if (row.companies.length != 0) {
                                return row.companies[0].c_contact
                            } else {
                                return ""
                            }

                        },
                        orderable: false,
                        searchable: false
                    },
                    {
                        name: 'created_at',
                        "render": function(data, type, row) {
                            if (row.companies.length != 0) {
                                if (row.companies[0].created_at != null) {
                                    var date = row.companies[0].created_at.split('T');
                                    return date[0]
                                } else {
                                    return "null"
                                }
                            }
                        },
                        orderable: false,
                        searchable: false
                    },
                    {
                        name: 'action',
                        'render': function(data, type, row) {
                            var TXT = '';
                            TXT +=
                                "<a class='btn btn-outline-primary btn-round btn-icon btn-icon-mini btn-sm pull-right' title='Edit Policy' href='{{ url('edit-policy') }}/" +
                                row.id + "'><i class='nc-icon nc-ruler-pencil'></i></a>";
                            return TXT;
                        },

                        orderable: false,
                        searchable: false

                    }
                ]
            });

        });

    </script>

    <script>
        function deleteCustomer(id) {
            window.location('/')
            console.log(id);
        }

    </script>

@endsection
@endsection
