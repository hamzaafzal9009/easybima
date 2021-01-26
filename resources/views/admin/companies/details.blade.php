@extends('layouts.panel')
@section('title', '{{ $company->c_name }}')
@section('content')

    <div class="content">

        <h3><strong>{{ $company->c_name }}</strong> Details</h3>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-md-6 text-center text-md-left">
                            <h4 class="card-title">Policies</h4>
                        </div>
                        <div class="col-md-6 text-center text-md-right">
                            <a href="{{ route('companies.assign', $company->id) }}" type="button"
                                class="btn btn-outline-success float-md-right">Assign Policy</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="toolbar">
                        </div>
                        <table id="" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Policy Name</th>
                                    <th class="disabled-sorting text-right">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if (count($company->policies) < 1)
                                    <tr class="text-center">
                                        <td colspan="3">No Record Found</td>
                                    </tr>
                                @endif
                                @foreach ($company->policies as $policy)
                                    <tr>
                                        <td>{{ $policy->p_name }}</td>
                                        <td class="text-right">
                                            <a class='btn btn-outline-primary btn-round btn-icon btn-icon-mini btn-sm'
                                                href="{{ route('companies.features', ['policy_id' => $policy->id, 'company_id' => $company->id]) }}"
                                                title='Edit Policy'>
                                                <i class='nc-icon nc-alert-circle-i'></i>
                                            </a>
                                            <a class='btn btn-outline-default btn-round btn-icon btn-icon-mini btn-sm'
                                                href="{{ route('companies.deleteAssignedPolicy', ['policy_id' => $policy->id, 'company_id' => $company->id]) }}"
                                                title='Edit Policy'>
                                                <i class='nc-icon nc-simple-remove'></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-md-12">
                            <h4 class="card-title">Users</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="toolbar">
                        </div>
                        <table id="usersTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Email </th>
                                    <th class="disabled-sorting text-right">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if (count($users) < 1)
                                    <tr class="text-center">
                                        <td colspan="3">No Record Found</td>
                                    </tr>
                                @endif
                                @foreach ($users as $user)
                                    <tr>
                                        <td> {{ $user->username }} </td>
                                        <td> {{ $user->email }} </td>
                                        <td>
                                            <a class='btn btn-outline-primary btn-round btn-icon btn-icon-mini btn-sm pull-right'
                                                href="{{ route('users.details', $user->id) }}" title='Edit Policy'>
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
@endsection
