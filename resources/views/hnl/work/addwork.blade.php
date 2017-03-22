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

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iCheck/css/all.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iCheck/css/line/line.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap-switch/css/bootstrap-switch.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/switchery/css/switchery.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/awesomeBootstrapCheckbox/awesome-bootstrap-checkbox.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/formelements.css') }}"/>


    <link href="{{ asset('assets/vendors/daterangepicker/css/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/tables.css') }}" />

    <style>
        .table th{
            text-align:center;
        }
        .table-middle td, th{
            vertical-align: middle !important;
            text-align: center;
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
                               data-l="true"></i> 사원정보
                        </h4>
                            <span class="pull-right">
                                <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                            </span>
                    </div>
                    <div class="panel-body">
                        <a class="btn btn-raised btn-info btn-large" data-toggle="modal" data-href="#searchmember" href="#searchmember">검색</a>
                        <table class="table table-bordered table-middle">
                            <tr>
                                <th>사번</th>
                                <th>이름</th>
                                <th>근무상태</th>
                                <th>채용형태</th>
                            </tr>
                            <tr>
                                @if($searchp)
                                    <td>{{ $searchp->employee_num }}</td>
                                    <td>{{ $searchp->name }}</td>
                                    <td>{{ $searchp->work_condition }}</td>
                                    <td>{{ $searchp->employee_type }}</td>
                                @endif
                            </tr>
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
                               data-l="true"></i> 공제근태
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-middle">
                            <caption class="bg-primary">&nbsp;&nbsp;공제근태 내역&nbsp;&nbsp;</caption>
                            <tr>
                                <th>공제 유형</th>
                                <th>급여 반영</th>
                                <th>공제 시급</th>
                                <th>공제 시간</th>
                                <th>공제 금액</th>
                                <th>적용 일자</th>
                                <th>삭제</th>
                            </tr>
                            @forelse($geuntaeadd as $ga)
                            <tr>
                                <td>{{ $ga->geuntae_title }}</td>
                                <td>
                                    {{ $ga->pay_apply == 0 ? '아니오':'예' }}
                                </td>
                                <td>{{ $ga->minus_timepay }}</td>
                                <td>{{ $ga->minus_time }}</td>
                                <td>{{ $ga->minus_pay }}</td>
                                <td>{{ $ga->use_date }}</td>
                                <td>
                                    <a href="{{ route('confirm-delete/ework1', $ga->id) }}" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#delete_confirm">삭제</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7">No List</td>
                            </tr>
                            @endforelse
                        </table>
                        <table class="table table-bordered table-middle">
                            <form action="{{ route('insert/addwork') }}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <input type="hidden" name="id" value="{{ $id }}">
                                <input type="hidden" name="where" value="geuntae">
                                <caption class="bg-primary">&nbsp;&nbsp;공제근태 입력&nbsp;&nbsp;</caption>
                                <tr>
                                    <th>&nbsp;&nbsp;공제근태&nbsp;&nbsp;</th>
                                    <td>
                                        <select class="form-control input-sm" name="gtitle">
                                            @foreach($geuntae as $g)
                                                <option value="{{ $g->title }}">{{ $g->title }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <th>적용일자</th>
                                    <td>
                                        <input type="text" class="datetime4 form-control input-sm" name="udate"/>
                                    </td>
                                    <th>급여반영</th>
                                    <td><input type="checkbox" class="switch" value="1" name="papply" data-size="small"></td>
                                    <th>공제시급</th>
                                    <td><input type="text" class="form-control input-sm" name="mpaytime"></td>
                                    <th>공제시간</th>
                                    <td><input type="text" class="form-control input-sm" name="mtime"></td>
                                    <th>공제금액</th>
                                    <td><input type="text" class="form-control input-sm" name="mpay"></td>
                                    <th>
                                        <button class="btn btn-primary" type="submit">등록</button>
                                    </th>
                                </tr>
                            </form>
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
                               data-l="true"></i> 추가근무
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-middle">
                            <caption class="bg-primary">&nbsp;&nbsp;추가근무 내역&nbsp;&nbsp;</caption>
                            <tr>
                                <th>공제 유형</th>
                                <th>급여 반영</th>
                                <th>공제 시간</th>
                                <th>공제 금액</th>
                                <th>적용 일자</th>
                                <th>삭제</th>
                            </tr>
                            @forelse($extraworkadd as $aw)
                                <tr>
                                    <td>{{ $aw->extrawork_title }}</td>
                                    <td>
                                        {{ $aw->pay_apply == 0 ? '아니오':'예' }}
                                    </td>
                                    <td>{{ $aw->add_time }}</td>
                                    <td>{{ $aw->add_pay }}</td>
                                    <td>{{ $aw->use_date }}</td>
                                    <td>
                                        <a href="{{ route('confirm-delete/ework2', $aw->id) }}" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#delete_confirm">삭제</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">No List</td>
                                </tr>
                            @endforelse
                        </table>
                        <form action="{{ route('insert/addwork') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" name="id" value="{{ $id }}">
                            <input type="hidden" name="where" value="addwork">
                            <table class="table table-bordered table-middle">
                                <caption class="bg-primary">&nbsp;&nbsp;추가근무 입력&nbsp;&nbsp;</caption>
                                <tr>
                                    <th>추가유형</th>
                                    <td>
                                        <select class="form-control input-sm" name="etitle">
                                            @foreach($addextrawork as $a)
                                                <option value="{{ $a->title }}">{{ $a->title }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <th>적용일자</th>
                                    <td>
                                        <input type="text" class="datetime4 form-control input-sm" name="udate"/>
                                    </td>
                                    <th>급여반영</th>
                                    <td><input type="checkbox" class="switch" value="1" name="papply" data-size="small"></td>
                                    <th>추가 근무시간</th>
                                    <td><input type="text" class="form-control input-sm" name="ex_worktime"></td>
                                    <th>추가 근무수당</th>
                                    <td><input type="text" class="form-control input-sm" name="ex_workpay"></td>
                                    <th>
                                        <button class="btn btn-primary">등록</button>
                                    </th>
                                </tr>
                            </table>
                        </form>
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
                               data-l="true"></i> 휴가휴직
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-middle">
                            <caption class="bg-primary">&nbsp;&nbsp;휴가휴직 내역&nbsp;&nbsp;</caption>
                            <tr>
                                <th>공제 유형</th>
                                <th>급여 반영</th>
                                <th>적용 일자</th>
                                <th>반영 일수</th>
                                <th>삭제</th>
                            </tr>
                            @forelse($vacationadd as $va)
                                <tr>
                                    <td>{{ $va->vacation_title }}</td>
                                    <td>
                                        {{ $va->pay_apply == 0 ? '아니오':'예' }}
                                    </td>
                                    <td>{{ $va->use_date }}</td>
                                    <td>{{ $va->use_dates }}</td>
                                    <td>
                                        <a href="{{ route('confirm-delete/ework3', $va->id) }}" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#delete_confirm">삭제</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No List</td>
                                </tr>
                            @endforelse
                        </table>
                        <form action="{{ route('insert/addwork') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" name="id" value="{{ $id }}">
                            <input type="hidden" name="where" value="vacation">
                            <table class="table table-bordered table-middle">
                                <caption class="bg-primary">&nbsp;&nbsp;휴가휴직 입력&nbsp;&nbsp;</caption>
                                <tr>
                                    <th>휴가·휴직 유형</th>
                                    <td>
                                        <select class="form-control input-sm" name="vtitle">
                                            @foreach($vacation as $v)
                                                <option value="{{ $v->title }}">{{ $v->title }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <th>적용일자</th>
                                    <td><input type="text" class="datetime4 form-control input-sm"  name="udate"/></td>
                                    <th>급여반영</th>
                                    <td><input type="checkbox" class="switch" value="1" name="papply" data-size="small"></td>
                                    <th>반영일수</th>
                                    <td><input type="text" class="form-control input-sm" name="apply_date"></td>
                                    <th>
                                        <button class="btn btn-primary">등록</button>
                                    </th>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- search member modal-->
        <div class="modal fade in" id="searchmember" tabindex="-1" role="dialog" aria-hidden="false">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">사원 검색</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table table-condensed table-bordered" id="table2">
                            <thead>
                            <tr>
                                <th>순번</th>
                                <th>사번</th>
                                <th>이름</th>
                                <th>부서</th>
                                <th>직위</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pinfo as $key=>$p)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $p->employee_num }}</td>
                                    <td><a href="{{ route('addwork_view',$p->id) }}">{{ $p->name }}</a></td>
                                    <td>
                                        @foreach($jobtitle as $job)
                                            @if($job->id == $p->job)
                                                {{ $job->name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($position as $pos)
                                            @if($pos->id == $p->position)
                                                {{ $pos->pos_name }}
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                        {{--                        <button class="btn btn-primary">등록</button>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                </div>
            </div>
        </div>
        <!--  confirm modal -->
        <!-- END modal-->
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

    <script src="{{ asset('assets/vendors/pickadate/js/picker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/pickadate/js/picker.date.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/pickadate/js/picker.time.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/flatpickrCalendar/js/flatpickr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/airDatepicker/js/datepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/airDatepicker/js/datepicker.en.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/custom_datepicker.js') }}" type="text/javascript"></script>

    <script type="text/javascript" src="{{ asset('assets/js/pages/table-advanced.js') }}" ></script>

    <script src="{{ asset('assets/js/hnl/addwork.js') }}" type="text/javascript"></script>



@stop