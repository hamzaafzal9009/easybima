@extends('layouts.panel')
@section('title', 'Customer Details')
@section('styles')
    <style>
        .uppercase{
            text-transform: uppercase;
        }
        .lowercase {
            text-transform: lowercase;
        }
    </style>
@endsection
@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="{{asset('panel/img/bg/damir-bosnjak.jpg')}}" alt="...">
                </div>
                <div class="card-body">
                    <div class="author">
                        <a href="#">
                            <img class="avatar border-gray" src="{{ asset('frontend/imgs/fav.png') }}" alt="...">
                            <h5 class="title uppercase">{{ $customer->userProfile->name }}</h5>
                        </a>
                        <p class="description">
                            @<span class="lowercase">{{ $customer->username}}</span>
                        </p>
                    </div>
                    <p class="description text-center">
                        {{ $customer->email }}
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Policy Details</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled team-members">
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-2">
                                    <div class="avatar">
                                        <img src="{{ asset('upload/companyLogo') }}/{{ $company->c_logo }}" alt="Company Logo" class="img-circle img-no-padding img-responsive">
                                    </div>
                                </div>
                                <div class="col-md-7 col-7">
                                    {{ $company->c_name }}
                                    <br />
                                    <span class="text-muted">
                                        <small>
                                            {{ $policy->p_name }}
                                        </small>
                                    </span>
                                </div>
                                <div class="col-md-3 col-3 text-right">
                                    <a href="tel:{{ $company->c_contact }}" class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-phone"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">User Details</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" disabled placeholder="Full Name" value="{{ $customer->userProfile->name }}">
                                </div>
                            </div>
                            <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" placeholder="Username" value="{{ $customer->username }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Contact #</label>
                                    <input type="number" class="form-control" placeholder="Contact #" value="{{ $customer->userProfile->phone_no }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Email" value="{{ $customer->email }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Date Of Birth</label>
                                    <input type="text" class="form-control" placeholder="Date Of Birth" value="{{ $customer->userProfile->dob }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pre Medical Condition</label>
                                    <input type="text" class="form-control" placeholder="pre" value="{{ $customer->userProfile->pre_medical_condition == 1 ? 'TRUE' : 'FALSE'  }}" disabled>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
