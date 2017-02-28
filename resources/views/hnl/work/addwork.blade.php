@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
    근태관리 등록
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <meta name="_token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/vendors/pickadate/css/default.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/pickadate/css/default.date.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/pickadate/css/default.time.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/airDatepicker/css/datepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/flatpickrCalendar/css/flatpickr.min.css') }}" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iCheck/css/line/line.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap-switch/css/bootstrap-switch.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/switchery/css/switchery.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/awesomeBootstrapCheckbox/awesome-bootstrap-checkbox.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/formelements.css') }}"/>


    <link href="{{ asset('assets/vendors/daterangepicker/css/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .table th{
            text-align:center;
        }
    </style>

@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <h1>연봉/ 월급제</h1>
        <ol class="breadcrumb">
            <li class="active">
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                    메인으로
                </a>
            </li>
        </ol>
    </section>
    <section class="content" ng-app="addwork" ng-controller="addworkCtrl">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 기본등록
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-8 text-center">
                        <table class="table table-bordered table-condensed">
                            <caption class="bg-primary">&nbsp;&nbsp;공제근태&nbsp;&nbsp;</caption>
                            <thead>
                            <tr>
                                <th class="success">공제유형</th>
                                <td>
                                    <select class="form-control input-sm">
                                        <option>지각</option>
                                        <option>조퇴</option>
                                        <option>외출</option>
                                        <option>결근</option>
                                    </select>
                                </td>
                                <th class="success">적용일자</th>
                                <td>
                                    <input type="text" class="form-control input-sm" class="disabled-days"/>
                                </td>
                                <th class="success">급여반영</th>
                                <td><input type="checkbox" class="switch" data-size="small"></td>
                            </tr>
                            <tr>
                                <th class="success">공제시급</th>
                                <td>!자동출력!</td>
                                <th class="success">공제시간</th>
                                <td><input type="text" class="form-control input-sm"></td>
                                <th class="success">공제금액</th>
                                <td><input type="text" class="form-control input-sm"></td>
                            </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered table-condensed">
                            <thead>
                            <tr>
                                <th class="success" rowspan="2">추가근무&nbsp;&nbsp;</th>

                                <th class="success">추가유형</th>
                                <td colspan="4">
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label>
                                            <input type="checkbox" class="square" checked/> 추가연장
                                        </label>
                                        <label>
                                            <input type="checkbox" class="square"/> 추가야간
                                        </label>
                                        <label>
                                            <input type="checkbox" class="square"/> 휴일근로
                                        </label>
                                        <label>
                                            <input type="checkbox" class="square"/> 특별근로
                                        </label>
                                    </div>
                                </td>
                                <th class="success">적용일자</th>
                                <td>
                                    <input type="text" class="form-control input-sm" />
                                </td>
                            </tr>
                            <tr>
                                <th class="success">급여반영</th>
                                <td>여,부</td>
                                <th class="success">추가 근무시간</th>
                                <td>___시간</td>
                                <th class="success">추가 근무수당</th>
                                <td colspan="2">__원</td>
                            </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered table-condensed">
                            <thead>
                            <tr>
                                <th class="success" rowspan="2">휴가 휴직</th>
                                <th class="success">휴가·휴직 유형</th>
                                <td colspan="5">
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label>
                                            <input type="checkbox" class="square" checked/> 병가
                                        </label>
                                        <label>
                                            <input type="checkbox" class="square"/> 육아휴직
                                        </label>
                                        <label>
                                            <input type="checkbox" class="square"/> 출산휴가
                                        </label>
                                        <label>
                                            <input type="checkbox" class="square"/> 일반휴직
                                        </label>
                                    </div>
                                </td>
                                <th class="success">적용일자</th>
                                <td>범위로 정할 수</td>
                            </tr>
                            <tr>
                                <th class="success">급여반영</th>
                                <td>여,부</td>
                                <th class="success"> ㅡ </th>
                                <td></td>
                                <th class="success"> ㅡ </th>
                                <td>반영일수</td>
                                <td colspan="2">__원</td>
                            </tr>
                            </thead>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-switch/js/bootstrap-switch.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/switchery/js/switchery.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/card/lib/js/jquery.card.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/js/pages/radio_checkbox.js') }}"></script>

    <script src="{{ asset('assets/vendors/pickadate/js/picker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/pickadate/js/picker.date.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/pickadate/js/picker.time.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/flatpickrCalendar/js/flatpickr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/airDatepicker/js/datepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/airDatepicker/js/datepicker.en.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/custom_datepicker.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/js/hnl/addwork.js') }}" type="text/javascript"></script>



@stop