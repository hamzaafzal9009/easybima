@extends('layouts.wizard')
@section('title', 'Adult Health Insurance')
@section('style')
    <style>
        .hiddenRow {
            padding: 0 !important;
        }

        .colpanyLogo {
            height: 75px;
        }

        .pd-10 {
            padding: 10px
        }

    </style>
@endsection
@section('content')
    <div class="set-full-height">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="green" id="wizardProfile">
                            <form action="" method="post">
                                @csrf
                                <div class="wizard-header">
                                    <h3 class="wizard-title">
                                        Okay, we've started finding <br> insurers for you.
                                    </h3>
                                </div>
                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#about" data-toggle="tab">About</a></li>
                                        <li><a href="#health" data-toggle="tab">Health</a></li>
                                        <li><a href="#quotes" data-toggle="tab">Quotes</a></li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane" id="about">
                                        <div class="row">
                                            <h4 class="info-text"> Let's start with the basic information.</h4>
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">First Name
                                                            <small>(required)</small></label>
                                                        <input name="firstname" type="text" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">record_voice_over</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Last Name
                                                            <small>(required)</small></label>
                                                        <input name="lastname" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">phone</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Mobile Number
                                                            <small>(required)</small></label>
                                                        <input name="mobile" type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email <small>(required)</small></label>
                                                        <input name="email" type="email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <input type="checkbox" name="accept"> &nbsp;&nbsp;<span>I accept the <a
                                                            href="{{ asset('upload/ua/user-agreement.pdf') }}"
                                                            target="_blank" rel=”nofollow”>User &amp; Agreement</a> of
                                                        Easybima.com</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="health">
                                        <h4 class="info-text"> Lets get yours health information</h4>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">attach_money</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Annual inpatient cover limit (Ksh)
                                                            <small>(required)</small></label>
                                                        <input name="aicl" type="text" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">healing</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">If you have any preexisting medical
                                                            condition
                                                            <small>(required)</small></label>
                                                        <select name="pre_condition" id="pre_condition"
                                                            class="form-control">
                                                            <option value="0">No</option>
                                                            <option value="1">Yes</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">calendar_today</i>
                                                    </span>
                                                    <div class="form-group">
                                                        <label for="dob">Date of Birth <small>(The
                                                                Applicant)(required)</small></label>
                                                        <input name="dob" type="date" placeholder="DOB"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="quotes">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text"> Here are some insurance companies! </h4>
                                            </div>
                                            <div class="col-sm-12">
                                                <table class="table table-responsive table-striped">
                                                    <tr>
                                                        <th></th>
                                                        <th>Feature 1</th>
                                                        <th>Feature 2</th>
                                                        <th>Feature 3</th>
                                                        <th>Price <small>Ksh</small></th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="https://static.rfstat.com/renderforest/images/v2/logo-homepage/gradient_2.png"
                                                                alt="company_logo" class="colpanyLogo">
                                                        </td>
                                                        <td>Some Stuff</td>
                                                        <td>Some more stuff</td>
                                                        <td>And some more</td>
                                                        <td>1000</td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <span class="btn btn-primary btn-sm">Select Policy</span>
                                                                <span class="btn btn-success btn-sm" data-toggle="collapse"
                                                                    data-target="#accordion" class="clickable">View
                                                                    Details</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5" class="hiddenRow">
                                                            <div id="accordion" class="collapse pd-10">Company Details
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next'
                                            value='Next' />
                                        <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd'
                                            name='finish' value='Finish' />
                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd'
                                            name='previous' value='Previous' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
