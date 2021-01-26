@extends('layouts.panel')
@section('title', 'Dashboard')
@section('content')

    <div class="content">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-md-6">
                            <h4 class="card-title">Policies</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="toolbar">
                        </div>
                        <table id="policiesTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Polciy Name</th>
                                    <th>Total Companies</th>
                                    <th>Total Users</th>
                                    {{-- <th>Created Date</th> --}}
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
    </div>
@section('scripts')
    <script src="{{ asset('panel/js/plugins/bootstrap-notify.js') }}"></script>
    <script src="{{ asset('panel/demo/demo.js') }}"></script>
    <script>
        $(document).ready(function() {
            var table = $('#policiesTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('policies.allPolicies') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'p_name',
                        name: 'p_name',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'companies_count',
                        name: 'companies_count',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'users_count',
                        name: 'users_count',
                        orderable: false,
                        searchable: false
                    },
                    // {
                    //     data: 'created_at',
                    //     name: 'created_at',
                    //     "render": function(data, type, row) {
                    //         if (data != null) {

                    //             var date = data.split('T');
                    //             return date[0]

                    //         }
                    //         return null; 
                    //     },
                    //     orderable: false,
                    //     searchable: false
                    // },
                    {
                        name: 'action',
                        'render': function(data, type, row) {
                            console.log(row);
                            var TXT = '';

                            TXT +=
                                "<a class='btn btn-outline-primary btn-round btn-icon btn-icon-mini btn-sm pull-right' title='Edit Policy' href='{{ url('edit-policy') }}/" +
                                row.id + "'><i class='nc-icon nc-ruler-pencil'></i></a>";
                            if (row.companies_count != 0) {

                                TXT +=
                                    "<a class='btn btn-outline-info btn-round btn-icon btn-icon-mini btn-sm pull-right' title='View Policy' href='{{ url('policy-companies') }}/" +
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

    <script>
        function deleteCustomer(id) {
            window.location('/')
            console.log(id);
        }

    </script>

@endsection
@endsection
