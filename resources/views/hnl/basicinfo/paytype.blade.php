@extends('hnl/layouts/default')
{{-- Page title--}}
@section('title')
    기본정보 등록
    @parent
@stop

{{--page level styles--}}
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

 Page content

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
                                <div class="col-lg-2">
                                    <table class="table table-condensed table-bordered table-th">
                                        <caption>포괄연봉제</caption>
                                        <tr>
                                            <th>명 칭</th>
                                            <th>포괄여부</th>
                                        </tr>
                                        <tr>
                                            <td colspan="2">통상임금</td>
                                        </tr>
                                        @foreach($paymonth1 as $p1)
                                        <tr>
                                            <td>{{ $p1->title }}</td>
                                            <td>
                                                <form class="checkboxa{{$p1->id}}" action="{{ route('check/paytype',$p1->id) }}" method="POST">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                <input type="hidden" name="paytype" value="a" />
                                                <input type="hidden" name="pay" value="a" />
                                                <input type="checkbox" name="my-checkbox" data-on-color="info"
                                                       data-off-color="primary" data-animate onchange="$('.checkboxa{{$p1->id}}').submit();" value="{!! ($p1->use_this == 0) ? 'false' : 'true' !!}" {!! ($p1->use_this == 1) ? 'checked' : '' !!}>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="2">법정수당</td>
                                        </tr>
                                        @foreach($paymonth2 as $p2)
                                            <tr>
                                                <td>{{ $p2->title }}</td>
                                                <td>
                                                    <form class="checkboxb{{$p2->id}}" action="{{ route('check/paytype',$p2->id) }}" method="POST">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                        <input type="hidden" name="paytype" value="a" />
                                                        <input type="hidden" name="pay" value="a1" />
                                                        <input type="checkbox" name="my-checkbox" data-on-color="info"
                                                               data-off-color="primary" data-animate onchange="$('.checkboxb{{$p2->id}}').submit();" value="{!! ($p2->use_this == 0) ? 'false' : 'true' !!}" {!! ($p2->use_this == 1) ? 'checked' : '' !!}>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="2">복리후생</td>
                                        </tr>
                                        @foreach($paymonth3 as $p3)
                                            <tr>
                                                <td>{{ $p3->title }}</td>
                                                <td>
                                                    <form class="checkboxc{{$p3->id}}" action="{{ route('check/paytype',$p3->id) }}" method="POST">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                        <input type="hidden" name="paytype" value="a" />
                                                        <input type="hidden" name="pay" value="a2" />
                                                        <input type="checkbox" name="my-checkbox" data-on-color="info"
                                                               data-off-color="primary" data-animate onchange="$('.checkboxc{{$p3->id}}').submit();" value="{!! ($p3->use_this == 0) ? 'false' : 'true' !!}" {!! ($p3->use_this == 1) ? 'checked' : '' !!}>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="2">약정수당</td>
                                        </tr>
                                        @foreach($paymonth4 as $p4)
                                            <tr>
                                                <td>{{ $p4->title }}</td>
                                                <td>
                                                    <form class="checkboxd{{$p4->id}}" action="{{ route('check/paytype',$p4->id) }}" method="POST">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                        <input type="hidden" name="paytype" value="a" />
                                                        <input type="hidden" name="pay" value="a3" />
                                                        <input type="checkbox" name="my-checkbox" data-on-color="info"
                                                               data-off-color="primary" data-animate onchange="$('.checkboxd{{$p4->id}}').submit();" value="{!! ($p4->use_this == 0) ? 'false' : 'true' !!}" {!! ($p4->use_this == 1) ? 'checked' : '' !!}>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="col-lg-2">
                                    <table class="table table-condensed table-bordered table-th">
                                        <caption>포괄월급제</caption>
                                        <tr>
                                            <th>명 칭</th>
                                            <th>포괄여부</th>
                                        </tr>
                                        <tr>
                                            <td colspan="2">통상임금</td>
                                        </tr>
                                        @foreach($paymonth1 as $p1)
                                            <tr>
                                                <td>{{ $p1->title }}</td>
                                                <td>
                                                    <form class="checkboxe{{$p1->id}}" action="{{ route('check/paytype',$p1->id) }}" method="POST">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                        <input type="hidden" name="paytype" value="b" />
                                                        <input type="hidden" name="pay" value="a" />
                                                        <input type="checkbox" name="my-checkbox" data-on-color="info"
                                                           data-off-color="primary" data-animate onchange="$('.checkboxe{{$p1->id}}').submit();" value="{!! ($p1->use_this1 == 0) ? 'false' : 'true' !!}" {!! ($p1->use_this1 == 1) ? 'checked' : '' !!}>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="2">법정수당</td>
                                        </tr>
                                        @foreach($paymonth2 as $p2)
                                            <tr>
                                                <td>{{ $p2->title }}</td>
                                                <td>
                                                    <form class="checkboxf{{$p2->id}}" action="{{ route('check/paytype',$p2->id) }}" method="POST">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                        <input type="hidden" name="paytype" value="b" />
                                                        <input type="hidden" name="pay" value="a1" />
                                                        <input type="checkbox" name="my-checkbox" data-on-color="info"
                                                               data-off-color="primary" data-animate onchange="$('.checkboxf{{$p2->id}}').submit();" value="{!! ($p2->use_this1 == 0) ? 'false' : 'true' !!}" {!! ($p2->use_this1 == 1) ? 'checked' : '' !!}>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="2">복리후생</td>
                                        </tr>
                                        @foreach($paymonth3 as $p3)
                                            <tr>
                                                <td>{{ $p3->title }}</td>
                                                <td>
                                                    <form class="checkboxg{{$p3->id}}" action="{{ route('check/paytype',$p3->id) }}" method="POST">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                        <input type="hidden" name="paytype" value="b" />
                                                        <input type="hidden" name="pay" value="a2" />
                                                        <input type="checkbox" name="my-checkbox" data-on-color="info"
                                                               data-off-color="primary" data-animate onchange="$('.checkboxg{{$p3->id}}').submit();" value="{!! ($p3->use_this1 == 0) ? 'false' : 'true' !!}" {!! ($p3->use_this1 == 1) ? 'checked' : '' !!}>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="2">약정수당</td>
                                        </tr>
                                        @foreach($paymonth4 as $p4)
                                            <tr>
                                                <td>{{ $p4->title }}</td>
                                                <td>
                                                    <form class="checkboxh{{$p4->id}}" action="{{ route('check/paytype',$p4->id) }}" method="POST">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                        <input type="hidden" name="paytype" value="b" />
                                                        <input type="hidden" name="pay" value="a3" />
                                                        <input type="checkbox" name="my-checkbox" data-on-color="info"
                                                               data-off-color="primary" data-animate onchange="$('.checkboxh{{$p4->id}}').submit();" value="{!! ($p4->use_this1 == 0) ? 'false' : 'true' !!}" {!! ($p4->use_this1 == 1) ? 'checked' : '' !!}>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="2"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-lg-2">
                                    <table class="table table-condensed table-bordered table-th">
                                        <caption>일당제</caption>
                                        <tr>
                                            <th> 명칭</th>
                                            <th>포괄여부</th>
                                        </tr>
                                        @foreach($payday as $pd)
                                            <tr>
                                                <td>{{ $pd }}</td>
                                                <td>
                                                        <input type="checkbox" name="my-checkbox" data-on-color="info"
                                                               data-off-color="primary" data-animate{{-- onchange="$('.checkboxa{{$pd->id}}').submit();" value="{!! ($pd->use_this2 == 0) ? 'false' : 'true' !!}" {!! ($pd->use_this2 == 1) ? 'checked' : '' !!}--}}>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

 page level scripts

@section('footer_scripts')

    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-switch/js/bootstrap-switch.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/switchery/js/switchery.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/card/lib/js/jquery.card.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/js/pages/radio_checkbox.js') }}"></script>

@stop
