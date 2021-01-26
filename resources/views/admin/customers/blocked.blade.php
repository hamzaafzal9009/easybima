@extends('layouts.panel')
@section('title', 'Dashboard')
@section('content')

    <div class="content">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Customers</h4>
                    </div>
                    <div class="card-body">
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <table id="customersTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Subscriber</th>
                                    <th>Created Date</th>
                                    <th>Blocked Date</th>
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
    <script>
        $(document).ready(function(){
            var table = $('#customersTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('customers.getBlocked') }}",
                columns: [{
                        data: 'id',
                        name: 'id',
                        orderable: false, 
                        searchable: false
                    },
                    {
                        data: 'username',
                        name: 'username'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        name: 'subscriber',
                        "render": function(data, type, row) {
                            if (row.user_profile) {
                                console.log(row.user_profile);    
                                return "<span class='badge badge-pill badge-primary'>Yes</span>"
                            }else{
                                return "<span class='badge badge-pill badge-warning'>No</span>"
                            }
                            
                        },
                        orderable: false, 
                        searchable: false
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        "render": function(data, type, row) {
                            var date = data.split('T');
                            return date[0]
                        }
                    },
                    {
                        data: 'deleted_at',
                        name: 'deleted_at',
                        "render": function(data, type, row) {
                            var date = data.split('T');
                            return date[0]
                        }
                    },
                    {
                        name: 'action',
                        'render': function(data, type, row) {
                            var TXT = '';
                            TXT += "<a class='btn btn-outline-info btn-round btn-icon btn-icon-mini btn-sm pull-right' title='Delete User' href='{{ url("delete-customer") }}/" + row.id +"'><i class='nc-icon nc-simple-remove'></i></a>";
                            TXT += "<a class='btn btn-outline-primary btn-round btn-icon btn-icon-mini btn-sm pull-right' title='Unblock User' href='{{ url("unblock-customer") }}/" + row.id +"'><i class='nc-icon nc-check-2'></i></a>";
                            return TXT;
                        },

                        orderable: false, 
                        searchable: false
 
                    }
                ]
            });
            
        });
    </script>

@endsection
@endsection
