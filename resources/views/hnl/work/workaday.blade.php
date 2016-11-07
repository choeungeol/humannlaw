@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
    근태관리 등록
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <meta name="_token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/vendors/fullcalendar/css/fullcalendar.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/fullcalendar/css/fullcalendar.print.css') }}" rel="stylesheet"  media='print' type="text/css">
    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/pages/calendar_custom.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iCheck/css/line/line.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap-switch/css/bootstrap-switch.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/switchery/css/switchery.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/awesomeBootstrapCheckbox/awesome-bootstrap-checkbox.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/formelements.css') }}"/>
@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <h1>일용직</h1>
        <ol class="breadcrumb">
            <li class="active">
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                    메인으로
                </a>
            </li>
        </ol>
    </section>
    <section class="content">
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
                        <table class="table table-bordered table-condensed">
                            <thead>
                            <tr>
                                <th class="success" rowspan="2">공제근태</th>
                                <th class="success">공제유형</th>
                                <td colspan="5">
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label>
                                            <input type="checkbox" class="square" checked/> 지각
                                        </label>
                                        <label>
                                            <input type="checkbox" class="square"/> 조퇴
                                        </label>
                                        <label>
                                            <input type="checkbox" class="square"/> 외출
                                        </label>
                                        <label>
                                            <input type="checkbox" class="square"/> 결근
                                        </label>
                                    </div>
                                </td>
                                <th class="success">적용일자</th>
                                <td><button type="button" class="btn btn-primary btn-sm">달력</button></td>
                            </tr>
                            <tr>
                                <th class="success">급여반영</th>
                                <td>여,부</td>
                                <th class="success">공제시급</th>
                                <td>자동</td>
                                <th class="success">공제시간</th>
                                <td>__시간</td>
                                <th class="success">공제금액</th>
                                <td>__원</td>
                            </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered table-condensed">
                            <thead>
                            <tr>
                                <th class="success" rowspan="2">추가근무</th>
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
                                <td><button type="button" class="btn btn-primary btn-sm">달력</button></td>
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
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 일용직
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-condensed">
                            <tr>
                                <th rowspan="4">근태일정</th>
                                @for ($i = 1; $i < 17; $i++)
                                    <th>{{ $i }}일</th>
                                @endfor
                            </tr>
                            <tr>
                                @for ($i = 1; $i < 17; $i++)
                                    <td>YES</td>
                                @endfor
                            </tr>
                            <tr>
                                @for ($i = 17; $i < 32; $i++)
                                    <th>{{ $i }}일</th>
                                @endfor
                            </tr>
                            <tr>
                                @for ($i = 17; $i < 32; $i++)
                                    <td>YES</td>
                                @endfor
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop

{{-- page level scripts --}}
@section('footer_scripts')

        <!--for calendar-->
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/fullcalendar/js/fullcalendar.min.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('assets/js/pages/calendar.js') }}"  type="text/javascript"></script>

    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-switch/js/bootstrap-switch.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/switchery/js/switchery.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/card/lib/js/jquery.card.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/js/pages/radio_checkbox.js') }}"></script>

@stop