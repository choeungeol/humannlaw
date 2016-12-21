@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
    기본정보 등록
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <meta name="_token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iCheck/css/all.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iCheck/css/line/line.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap-switch/css/bootstrap-switch.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/switchery/css/switchery.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/awesomeBootstrapCheckbox/awesome-bootstrap-checkbox.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/formelements.css') }}"/>

    <style>
        .table-th th{
            text-align:center;
            background-color:lightgrey;
            font-weight:bold;
            vertical-align: middle;
        }

        .table-th input {

           text-align:center;
        }
        .bold{
            font-weight:bold;
        }


    </style>

@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>급여 유형</h1>
        <ol class="breadcrumb">
            <li class="active">
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                    메인으로
                </a>
            </li>
        </ol>
    </section>
    <section class="content" ng-app="">
        <div class="row" ng-controller="">
            <div class="col-lg-12">
                <div class="panel panel-danger">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 급여 유형
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="bs-example">
                                <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                                    <li class="active">
                                        <a href="#cass" data-toggle="tab">포괄연봉제</a>
                                    </li>
                                    <li>
                                        <a href="#cmps" data-toggle="tab">포괄월급제</a>
                                    </li>
                                    <li>
                                        <a href="#dp" data-toggle="tab">일당제</a>
                                    </li>
{{--                                    <li>
                                        <a href="#tp" data-toggle="tab">시급제</a>
                                    </li>--}}
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade active in" id="cass">
                                        <div class="col-lg-2">
                                            <table class="table table-condensed table-bordered table-th">
                                                <tr>
                                                    <th>명 칭</th>
                                                    <th>포괄여부</th>
                                                </tr>
                                                @foreach($paymonth1 as $p1)
                                                <tr>
                                                    <td>{{ $p1 }}</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="2"></td>
                                                </tr>
                                                @foreach($paymonth2 as $p2)
                                                    <tr>
                                                        <td>{{ $p2 }}</td>
                                                        <td><input type="checkbox" class="square"></td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="2"></td>
                                                </tr>
                                                @foreach($paymonth3 as $p3)
                                                    <tr>
                                                        <td>{{ $p3 }}</td>
                                                        <td><input type="checkbox" class="square"></td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="2"></td>
                                                </tr>
                                                @foreach($paymonth4 as $p4)
                                                    <tr>
                                                        <td>{{ $p4 }}</td>
                                                        <td><input type="checkbox" class="square"></td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="2"></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="cmps">
                                        <div class="col-lg-2">
                                            <table class="table table-condensed table-bordered table-th">
                                                <tr>
                                                    <th>명 칭</th>
                                                    <th>포괄여부</th>
                                                </tr>
                                                @foreach($paymonth1 as $p1)
                                                    <tr>
                                                        <td>{{ $p1 }}</td>
                                                        <td><input type="checkbox" class="square"></td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="2"></td>
                                                </tr>
                                                @foreach($paymonth2 as $p2)
                                                    <tr>
                                                        <td>{{ $p2 }}</td>
                                                        <td><input type="checkbox" class="square"></td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="2"></td>
                                                </tr>
                                                @foreach($paymonth3 as $p3)
                                                    <tr>
                                                        <td>{{ $p3 }}</td>
                                                        <td><input type="checkbox" class="square"></td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="2"></td>
                                                </tr>
                                                @foreach($paymonth4 as $p4)
                                                    <tr>
                                                        <td>{{ $p4 }}</td>
                                                        <td><input type="checkbox" class="square"></td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="2"></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="dp">
                                        <div class="col-lg-2">
                                            <table class="table table-condensed table-bordered table-th">
                                                <thead>
                                                <tr>
                                                    <th> 명칭</th><th>포괄여부</th>
                                                </tr>
                                                @foreach($payday as $pd)
                                                    <tr>
                                                        <td>{{ $pd }}</td><td><input type="checkbox" class="square"></td>
                                                    </tr>
                                                @endforeach
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                    {{--<div class="tab-pane fade" id="tp">
                                        <div class="col-lg-2">

                                        </div>
                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-switch/js/bootstrap-switch.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/switchery/js/switchery.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/card/lib/js/jquery.card.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/js/pages/radio_checkbox.js') }}"></script>

@stop