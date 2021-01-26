@extends('layouts.panel')
@section('title', 'Dashboard')
@section('content')

    <div class="content">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="fa fa-users text-success"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Total Users</p>
                                    <p class="card-title">1000
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-clock-o"></i> Updated an hour ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-money-coins text-success"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Total Subscribers</p>
                                    <p class="card-title">345
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-clock-o"></i> Updated an hour ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-bank text-danger"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Total Companies</p>
                                    <p class="card-title">23
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-clock-o"></i> In the last hour
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-money-coins text-primary"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Total Earning</p>
                                    <p class="card-title">3553 Ksh
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-clock-o"></i> Updated Now
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card card-stats">
                    <div class="card-header">
                        <h4 class="text-center">Last 5 Registered Users</h4>
                    </div>
                    <div class="card-body ">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Hamza</td>
                                    <td>hamza@gmail.com</td>
                                    <td>20-07-2020</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Dom</td>
                                    <td>dom@gmail.com</td>
                                    <td>17-07-2020</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Rob</td>
                                    <td>rob@gmail.com</td>
                                    <td>10-07-2020</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Rob3</td>
                                    <td>rob3@gmail.com</td>
                                    <td>7-07-2020</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Rob4</td>
                                    <td>rob4@gmail.com</td>
                                    <td>1-07-2020</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card card-stats">
                    <div class="card-header">
                        <h4 class="text-center">Last 5 Registered Companies</h4>
                    </div>
                    <div class="card-body ">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Company Name</th>
                                    <th>No. of Policies</th>
                                    <th>Created Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>C1</td>
                                    <td>12</td>
                                    <td>20-07-2020</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>c2</td>
                                    <td>1</td>
                                    <td>17-07-2020</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>C5</td>
                                    <td>12</td>
                                    <td>10-07-2020</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>C6</td>
                                    <td>11</td>
                                    <td>7-07-2020</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>C7</td>
                                    <td>7</td>
                                    <td>1-07-2020</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
