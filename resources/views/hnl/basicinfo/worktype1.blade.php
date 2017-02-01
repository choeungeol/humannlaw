@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
    기본정보 등록
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <meta name="_token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/vendors/daterangepicker/css/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/clockface/css/clockface.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/vendors/pickadate/css/default.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/pickadate/css/default.date.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/pickadate/css/default.time.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/airDatepicker/css/datepicker.min.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/css/pages/tab.css') }}" />

@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>근무 유형</h1>
        <ol class="breadcrumb">
            <li class="active">
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                    메인으로
                </a>
            </li>
        </ol>
    </section>
    <section class="content" ng-app="worktype" ng-controller="worktypeCtrl">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-danger">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 교대제 근무유형
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;" >
                            <li ng-repeat="t in tabs">
                                <a href="#<% t.href %>type" data-toggle="tab" aria-expanded="true"><% t.title %>형</a>
                            </li>
                            <li class="">
                                <div class="form-inline">
                                    <input type="text" class="form-control">
                                    <label>* 기본설정</label>
                                    <select class="form-control">
                                        <option ng-repeat="t in tabs"><% t.title %>형</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                        <div id="TabContent" class="tab-content">
                            @foreach($typename as $t => $v)
                            <form class="tab-pane fade {!! $t === 'A' ? 'active in' : '' !!}" method="POST" id="{{$t}}type" action="{{ route('insert/worktype1') }}">
                                <input type="hidden" name="type" value="{{ $t }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="form-inline col-md-12">
                                    <div class="input-group">
                                        <div class="form-inline">
                                            <input type="text" class="form-control" name="part" placeholder="조를 입력하세요" value="{{ $v[0]->part }}">
                                            <input type="text" class="form-control" name="change" placeholder="교대수를 입력하세요" value="{{ $v[0]->change }}">
                                        </div>
                                        <div class="input-group-btn">
                                            <button class="btn btn-default">
                                                입력
                                            </button>
                                        </div>
                                    </div>
                                    * 최대 5교대까지
                                </div>
                                @if($v[0]->change == null)
                                    <table class="table table-bordered" style="margin-bottom:0px;">
                                        <tr>
                                            <td>교대수를 먼저 입력해 주세요.</td>
                                        </tr>
                                    </table>
                                @else
                                    <div class="col-md-6">
                                    <table class="table table-bordered" style="margin-bottom:0px;">
                                        <tr>
                                            <th style="vertical-align: middle;" rowspan="6">1교대 &nbsp;</th>
                                            <th style="vertical-align: middle;" rowspan="2">근무시간 &nbsp;</th>
                                            <td>시작</td>
                                            <td>
                                                @if($v[0]->sworktime == 0)
                                                    <input type="text" class="form-control input-sm datetime2" name="first_work_start_time" placeholder="09:00">
                                                @else
                                                    <input type="text" class="form-control input-sm datetime2" name="first_work_start_time" value="{{ $v[0]->first_sworktime }}" placeholder="09:00">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>종료</td>
                                            <td>
                                                @if($v[0]->eworktime == 0)
                                                    <input class="form-control input-sm datetime2" type="text" name="first_work_end_time" placeholder="09:00">
                                                @else
                                                    <input class="form-control input-sm datetime2" type="text" name="first_work_end_time" placeholder="09:00" value="{{ $v[0]->first_eworktime }}">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="vertical-align: middle;" rowspan="2">휴게시간1</th>
                                            <td>시작</td>
                                            <td>
                                                @if($v[0]->sbtime1 == 0)
                                                    <input class="form-control input-sm datetime2" type="text" name="first_break_stime1" placeholder="09:00">
                                                @else
                                                    <input class="form-control input-sm datetime2" type="text" name="first_break_stime1" placeholder="09:00" value="{{ $v[0]->first_sbtime1 }}">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>종료</td>
                                            <td>
                                                @if($v[0]->ebtime1 == 0)
                                                    <input class="form-control input-sm datetime2" type="text" name="first_break_etime1" placeholder="09:00">
                                                @else
                                                    <input class="form-control input-sm datetime2" type="text" name="first_break_etime1" placeholder="09:00" value="{{ $v[0]->first_ebtime1 }}">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="vertical-align: middle;" rowspan="2">휴게시간2</th>
                                            <td>시작</td>
                                            <td>
                                                @if($v[0]->sbtime2 == 0)
                                                    <input class="form-control input-sm datetime2" type="text" name="first_break_stime2" placeholder="09:00">
                                                @else
                                                    <input class="form-control input-sm datetime2" type="text" name="first_break_stime2" placeholder="09:00" value="{{ $v[0]->first_sbtime2 }}">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>종료</td>
                                            <td>
                                                @if($v[0]->ebtime2 == 0)
                                                    <input class="form-control input-sm datetime2" type="text" name="first_break_etime2" placeholder="09:00">
                                                @else
                                                    <input class="form-control input-sm datetime2" type="text" name="first_break_etime2" placeholder="09:00" value="{{ $v[0]->first_ebtime2 }}">
                                                @endif
                                            </td>
                                        </tr>
                                        @if($v[0]->change == 2 || $v[0]->change == 3 || $v[0]->change == 4 || $v[0]->change == 5)
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="6">2교대 &nbsp;</th>
                                                <th style="vertical-align: middle;" rowspan="2">근무시간 &nbsp;</th>
                                                <td>시작</td>
                                                <td>
                                                    @if($v[0]->sworktime == 0)
                                                        <input type="text" class="form-control input-sm datetime2" name="second_work_start_time" placeholder="09:00">
                                                    @else
                                                        <input type="text" class="form-control input-sm datetime2" name="second_work_start_time" value="{{ $v[0]->second_sworktime }}" placeholder="09:00">
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                <td>
                                                    @if($v[0]->eworktime == 0)
                                                        <input class="form-control input-sm datetime2" type="text" name="second_work_end_time" placeholder="09:00">
                                                    @else
                                                        <input class="form-control input-sm datetime2" type="text" name="second_work_end_time" placeholder="09:00" value="{{ $v[0]->second_eworktime }}">
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간1</th>
                                                <td>시작</td>
                                                <td>
                                                    @if($v[0]->sbtime1 == 0)
                                                        <input class="form-control input-sm datetime2" type="text" name="second_break_stime1" placeholder="09:00">
                                                    @else
                                                        <input class="form-control input-sm datetime2" type="text" name="second_break_stime1" placeholder="09:00" value="{{ $v[0]->second_sbtime1 }}">
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                <td>
                                                    @if($v[0]->ebtime1 == 0)
                                                        <input class="form-control input-sm datetime2" type="text" name="second_break_etime1" placeholder="09:00">
                                                    @else
                                                        <input class="form-control input-sm datetime2" type="text" name="second_break_etime1" placeholder="09:00" value="{{ $v[0]->second_ebtime1 }}">
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간2</th>
                                                <td>시작</td>
                                                <td>
                                                    @if($v[0]->sbtime2 == 0)
                                                        <input class="form-control input-sm datetime2" type="text" name="second_break_stime2" placeholder="09:00">
                                                    @else
                                                        <input class="form-control input-sm datetime2" type="text" name="second_break_stime2" placeholder="09:00" value="{{ $v[0]->second_sbtime2 }}">
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                <td>
                                                    @if($v[0]->ebtime2 == 0)
                                                        <input class="form-control input-sm datetime2" type="text" name="second_break_etime2" placeholder="09:00">
                                                    @else
                                                        <input class="form-control input-sm datetime2" type="text" name="second_break_etime2" placeholder="09:00" value="{{ $v[0]->second_ebtime2 }}">
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
                                        @if($v[0]->change == 3 || $v[0]->change == 4 || $v[0]->change == 5)
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="6">3교대 &nbsp;</th>
                                                <th style="vertical-align: middle;" rowspan="2">근무시간 &nbsp;</th>
                                                <td>시작</td>
                                                <td>
                                                    @if($v[0]->sworktime == 0)
                                                        <input type="text" class="form-control input-sm datetime2" name="third_work_start_time" placeholder="09:00">
                                                    @else
                                                        <input type="text" class="form-control input-sm datetime2" name="third_work_start_time" value="{{ $v[0]->third_sworktime }}" placeholder="09:00">
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                <td>
                                                    @if($v[0]->eworktime == 0)
                                                        <input class="form-control input-sm datetime2" type="text" name="third_work_end_time" placeholder="09:00">
                                                    @else
                                                        <input class="form-control input-sm datetime2" type="text" name="third_work_end_time" placeholder="09:00" value="{{ $v[0]->third_eworktime }}">
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간1</th>
                                                <td>시작</td>
                                                <td>
                                                    @if($v[0]->sbtime1 == 0)
                                                        <input class="form-control input-sm datetime2" type="text" name="third_break_stime1" placeholder="09:00">
                                                    @else
                                                        <input class="form-control input-sm datetime2" type="text" name="third_break_stime1" placeholder="09:00" value="{{ $v[0]->third_sbtime1 }}">
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                <td>
                                                    @if($v[0]->ebtime1 == 0)
                                                        <input class="form-control input-sm datetime2" type="text" name="third_break_etime1" placeholder="09:00">
                                                    @else
                                                        <input class="form-control input-sm datetime2" type="text" name="third_break_etime1" placeholder="09:00" value="{{ $v[0]->third_ebtime1 }}">
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간2</th>
                                                <td>시작</td>
                                                <td>
                                                    @if($v[0]->sbtime2 == 0)
                                                        <input class="form-control input-sm datetime2" type="text" name="third_break_stime2" placeholder="09:00">
                                                    @else
                                                        <input class="form-control input-sm datetime2" type="text" name="third_break_stime2" placeholder="09:00" value="{{ $v[0]->third_sbtime2 }}">
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                <td>
                                                    @if($v[0]->ebtime2 == 0)
                                                        <input class="form-control input-sm datetime2" type="text" name="third_break_etime2" placeholder="09:00">
                                                    @else
                                                        <input class="form-control input-sm datetime2" type="text" name="third_break_etime2" placeholder="09:00" value="{{ $v[0]->third_ebtime2 }}">
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
                                        @if($v[0]->change == 4 || $v[0]->change == 5)
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="6">4교대 &nbsp;</th>
                                                <th style="vertical-align: middle;" rowspan="2">근무시간 &nbsp;</th>
                                                <td>시작</td>
                                                <td>
                                                    @if($v[0]->sworktime == 0)
                                                        <input type="text" class="form-control input-sm datetime2" name="fourth_work_start_time" placeholder="09:00">
                                                    @else
                                                        <input type="text" class="form-control input-sm datetime2" name="fourth_work_start_time" value="{{ $v[0]->fourth_sworktime }}" placeholder="09:00">
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                <td>
                                                    @if($v[0]->eworktime == 0)
                                                        <input class="form-control input-sm datetime2" type="text" name="fourth_work_end_time" placeholder="09:00">
                                                    @else
                                                        <input class="form-control input-sm datetime2" type="text" name="fourth_work_end_time" placeholder="09:00" value="{{ $v[0]->fourth_eworktime }}">
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간1</th>
                                                <td>시작</td>
                                                <td>
                                                    @if($v[0]->sbtime1 == 0)
                                                        <input class="form-control input-sm datetime2" type="text" name="fourth_break_stime1" placeholder="09:00">
                                                    @else
                                                        <input class="form-control input-sm datetime2" type="text" name="fourth_break_stime1" placeholder="09:00" value="{{ $v[0]->fourth_sbtime1 }}">
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                <td>
                                                    @if($v[0]->ebtime1 == 0)
                                                        <input class="form-control input-sm datetime2" type="text" name="fourth_break_etime1" placeholder="09:00">
                                                    @else
                                                        <input class="form-control input-sm datetime2" type="text" name="fourth_break_etime1" placeholder="09:00" value="{{ $v[0]->fourth_ebtime1 }}">
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간2</th>
                                                <td>시작</td>
                                                <td>
                                                    @if($v[0]->sbtime2 == 0)
                                                        <input class="form-control input-sm datetime2" type="text" name="fourth_break_stime2" placeholder="09:00">
                                                    @else
                                                        <input class="form-control input-sm datetime2" type="text" name="fourth_break_stime2" placeholder="09:00" value="{{ $v[0]->fourth_sbtime2 }}">
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                <td>
                                                    @if($v[0]->ebtime2 == 0)
                                                        <input class="form-control input-sm datetime2" type="text" name="fourth_break_etime2" placeholder="09:00">
                                                    @else
                                                        <input class="form-control input-sm datetime2" type="text" name="fourth_break_etime2" placeholder="09:00" value="{{ $v[0]->fourth_ebtime2 }}">
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
                                        @if($v[0]->change == 5)
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="6">5교대 &nbsp;</th>
                                                <th style="vertical-align: middle;" rowspan="2">근무시간 &nbsp;</th>
                                                <td>시작</td>
                                                <td>
                                                    @if($v[0]->sworktime == 0)
                                                        <input type="text" class="form-control input-sm datetime2" name="fifth_work_start_time" placeholder="09:00">
                                                    @else
                                                        <input type="text" class="form-control input-sm datetime2" name="fifth_work_start_time" value="{{ $v[0]->fifth_sworktime }}" placeholder="09:00">
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                <td>
                                                    @if($v[0]->eworktime == 0)
                                                        <input class="form-control input-sm datetime2" type="text" name="fifth_work_end_time" placeholder="09:00">
                                                    @else
                                                        <input class="form-control input-sm datetime2" type="text" name="fifth_work_end_time" placeholder="09:00" value="{{ $v[0]->fifth_eworktime }}">
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간1</th>
                                                <td>시작</td>
                                                <td>
                                                    @if($v[0]->sbtime1 == 0)
                                                        <input class="form-control input-sm datetime2" type="text" name="fifth_break_stime1" placeholder="09:00">
                                                    @else
                                                        <input class="form-control input-sm datetime2" type="text" name="fifth_break_stime1" placeholder="09:00" value="{{ $v[0]->fifth_sbtime1 }}">
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                <td>
                                                    @if($v[0]->ebtime1 == 0)
                                                        <input class="form-control input-sm datetime2" type="text" name=fifth_break_etime1" placeholder="09:00">
                                                    @else
                                                        <input class="form-control input-sm datetime2" type="text" name="fifth_break_etime1" placeholder="09:00" value="{{ $v[0]->fifth_ebtime1 }}">
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간2</th>
                                                <td>시작</td>
                                                <td>
                                                    @if($v[0]->sbtime2 == 0)
                                                        <input class="form-control input-sm datetime2" type="text" name="fifth_break_stime2" placeholder="09:00">
                                                    @else
                                                        <input class="form-control input-sm datetime2" type="text" name="fifth_break_stime2" placeholder="09:00" value="{{ $v[0]->fifth_sbtime2 }}">
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                <td>
                                                    @if($v[0]->ebtime2 == 0)
                                                        <input class="form-control input-sm datetime2" type="text" name="fifth_break_etime2" placeholder="09:00">
                                                    @else
                                                        <input class="form-control input-sm datetime2" type="text" name="fifth_break_stime2" placeholder="09:00" value="{{ $v[0]->fifth_ebtime2 }}">
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
                                    </table>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>1달 소정근로시간</th>
                                            <th>1달 연장근로시간</th>
                                            <th>1달 야간근로시간</th>
                                            <th>월 주휴시간</th>
                                            <th>월 연차시간</th>
                                            <th>총 근로시간</th>
                                        </tr>
                                        <tr>
{{--                                            <td>{{ $t[1]->mtotal }}</td>
                                            <td>{{ $t[1]->mover }}</td>
                                            <td>{{ $t[1]->mnight }}</td>
                                            <td>{{ $t[1]->mbreak }}</td>
                                            <td>{{ $t[1]->mwbt }}</td>
                                            <td>{{ $t[1]->total }}</td>--}}
                                        </tr>
                                    </table>
                                    </div>
                                @endif
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')


        <!-- begining of page level js -->
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/daterangepicker/js/daterangepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/vendors/clockface/js/clockface.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/datepicker.js') }}" type="text/javascript"></script>

    <!-- begining of page level js -->
    <script src="{{ asset('assets/vendors/pickadate/js/picker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/pickadate/js/picker.date.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/pickadate/js/picker.time.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/airDatepicker/js/datepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/airDatepicker/js/datepicker.en.js') }}" type="text/javascript"></script>

    <script type="text/javascript" src="{{ asset('assets/js/hnl/src/timepickerdirective.js') }}"></script>

    <script src="{{ asset('assets/js/hnl/worktype.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/tabs_accordions.js') }}" type="text/javascript"></script>
@stop