@extends('layouts.panel')
@section('title', $company->c_name)
@section('content')

    <div class="content">

        {{-- <h3 class="text-capitalize">{{ $company->c_name }} <br>
            <small>{{ $policy->p_name }} <span class="font-weight-light">Details</span></small>
        </h3>
        --}}
        <h3 class="text-capitalize d-inline">Company Name: </h3>
        <h4 class="text-capitalize d-inline">{{ $company->c_name }}</h4>
        <br>
        <h3 class="text-capitalize d-inline">Policy Name: </h3>
        <h4 class="text-capitalize d-inline">{{ $policy->p_name }}</h4>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="toolbar">
                    </div>
                    <div class="row p-4">
                        <div class="col-md-12">
                            <div class="card p-3">

                                
                                <hr>
                                <h5>Features Details</h5>

                                <div class="card-body table-full-width table-hover table-striped">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="30%">Feature Name</th>
                                                <th width="68%">Feature Details</th>
                                                {{-- <th class="disabled-sorting text-right"></th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if (count($mData) < 1)
                                                <tr>
                                                    <td colspan="4">
                                                        <p class="text-center">No Data Found</p>
                                                    </td>
                                                </tr>
                                            @endif
                                            @foreach ($mData as $item)
                                                <tr>
                                                    <td> {{ $item['features']['p_feature'] }} </td>
                                                    <td> {{ $item['feature_details'] }} </td>
                                                    {{-- <td class="disabled-sorting text-right">1</td> --}}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="card p-3">
                                <h5>Users</h5>

                                <div class="card-body table-full-width table-hover table-striped">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="30%">Name</th>
                                                <th width="68%">Email</th>
                                                <th class="disabled-sorting text-right"></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if (count($mData) < 1)
                                                <tr>
                                                    <td colspan="4">
                                                        <p class="text-center">No Data Found</p>
                                                    </td>
                                                </tr>
                                            @endif
                                            @foreach ($mData as $item)
                                                <tr>
                                                    <td> {{ $item['features']['p_feature'] }} </td>
                                                    <td> {{ $item['feature_details'] }} </td>
                                                    <td class="disabled-sorting text-right">1</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="container m-4">
                        <div class="col-sm-12">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <h4>Details</h4>
                                </div>
                                <div class="p-2 align-self-center">
                                    <span data-toggle="modal" data-target="#myModal" class="btn btn-outline-primary">Edit
                                        Details</span>
                                </div>

                            </div>
                            <span>{!! html_entity_decode($details->details) !!}</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                        </button>
                        <h5 class="title title-up">Details</h5>
                    </div>
                    <div class="modal-body">

                        <form method="post" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <textarea class="ckeditor form-control"
                                    name="p_details">{{ html_entity_decode($details->details) }}</textarea>
                            </div>
                        </form>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <div class="left-side">
                            <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Never mind</button>
                        </div>
                        <div class="divider"></div>
                        <div class="right-side">
                            <button type="button" class="btn btn-success btn-link">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('scripts')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });

    </script>
@endsection
@endsection
