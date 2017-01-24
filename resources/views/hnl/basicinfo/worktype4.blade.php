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
    <section class="content"  ng-app="worktype" ng-controller="worktypeCtrl">
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-danger">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 일용직 근무유형
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
                            @foreach($typename as $k=> $t)
                                <form class="tab-pane fade {!! $k === 'A' ? 'active in' : '' !!}" id="{{ $k }}type" method="POST" action="{{ route('insert/worktype4') }}">
                                    <input type="hidden" name="type" value="{{ $k }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <table class="table table-bordered" style="margin-bottom:0px;">
                                        <caption>
                                            <div class="form-group">
                                                <label class="control-label col-md-1">일당:</label>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control input-sm" name="daypay" placeholder="일당" value="{{ $t[1]->daypay }}">
                                                </div>
                                                <label class="control-label col-md-1">근무일수:</label>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control input-sm" name="workday" placeholder="근무일수" value="{{  $t[1]->workday }}">
                                                </div>
                                            </div>
                                        </caption>
                                        <tr>
                                            <th style="vertical-align: middle;" rowspan="2">일일 근무시간&nbsp;</th>
                                            <td>시작</td>
                                            <td>
                                                @if($t[0]->sworktime == 0)
                                                    <input type="text" class="form-control input-sm datetime2" name="work_start_time" placeholder="09:00">
                                                @else
                                                    <input type="text" class="form-control input-sm datetime2" name="work_start_time" placeholder="09:00" value="{{ $t[0]->sworktime }}">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>종료/<label>익일
                                                    @if($t[0]->nextdaytime == 1 or $t[0]->nextdaytime === 'on')
                                                        <input type="checkbox" name="is_next_time" checked value="1">
                                                    @else
                                                        <input type="checkbox" name="is_next_time">
                                                    @endif
                                                </label>&nbsp;&nbsp;&nbsp;
                                                <i class="fa fa-question-circle" title="익일 체크" data-container="body" data-toggle="popover" data-placement="top" data-content="익일 시간 입력시 체크하시고 24시 이후의 총 시간을 입력하세요 ex)익일 새벽 5시 = 05:00"></i>
                                            </td>
                                            <td>
                                                @if($t[0]->eworktime == 0)
                                                    <input class="form-control input-sm datetime2" type="text" name="work_end_time" placeholder="09:00" data-format="hh:mm">
                                                @else
                                                    <input class="form-control input-sm datetime2" type="text" name="work_end_time" placeholder="09:00" value="{{ $t[0]->eworktime }}" data-format="hh:mm">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="vertical-align: middle;" rowspan="2">일일 휴게시간1</th>
                                            <td>시작</td>
                                            <td>
                                                @if($t[0]->sbtime1 == 0)
                                                    <input class="form-control input-sm datetime2" type="text" name="break_stime1" placeholder="09:00" data-format="hh:mm">
                                                @else
                                                    <input class="form-control input-sm datetime2" type="text" name="break_stime1" placeholder="09:00" value="{{ $t[0]->sbtime1 }}" data-format="hh:mm">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>종료</td>
                                            <td>
                                                @if($t[0]->ebtime1 == 0)
                                                    <input class="form-control input-sm datetime2" type="text" name="break_etime1" placeholder="09:00" data-format="hh:mm">
                                                @else
                                                    <input class="form-control input-sm datetime2" type="text" name="break_etime1" placeholder="09:00" value="{{ $t[0]->ebtime1 }}" data-format="hh:mm">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="vertical-align: middle;" rowspan="2">일일 휴게시간2</th>
                                            <td>시작</td>
                                            <td>
                                                @if($t[0]->sbtime2 == 0)
                                                    <input class="form-control input-sm datetime2" type="text" name="break_stime2" placeholder="09:00" data-format="hh:mm">
                                                @else
                                                    <input class="form-control input-sm datetime2" type="text" name="break_stime2" placeholder="09:00" value="{{ $t[0]->sbtime2 }}" data-format="hh:mm">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>종료</td>
                                            <td>
                                                @if($t[0]->ebtime2 == 0)
                                                    <input class="form-control input-sm datetime2" type="text" name="break_etime2" placeholder="09:00" data-format="hh:mm">
                                                @else
                                                    <input class="form-control input-sm datetime2" type="text" name="break_etime2" placeholder="09:00" value="{{ $t[0]->ebtime2 }}" data-format="hh:mm">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="vertical-align: middle;" rowspan="2">일일 휴게시간3</th>
                                            <td>시작</td>
                                            <td>
                                                @if($t[0]->sbtime3 == 0)
                                                    <input class="form-control input-sm datetime2" type="text" name="break_stime3" placeholder="09:00" data-format="hh:mm">
                                                @else
                                                    <input class="form-control input-sm datetime2" type="text" name="break_stime3" placeholder="09:00" value="{{ $t[0]->sbtime3 }}" data-format="hh:mm">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>종료</td>
                                            <td>
                                                @if($t[0]->ebtime3 == 0)
                                                    <input class="form-control input-sm datetime2" type="text" name="break_etime3" placeholder="09:00" data-format="hh:mm">
                                                @else
                                                    <input class="form-control input-sm datetime2" type="text" name="break_etime3" placeholder="09:00" value="{{ $t[0]->ebtime3 }}" data-format="hh:mm">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="vertical-align: middle;" rowspan="2">일일 휴게시간4</th>
                                            <td>시작</td>
                                            <td>
                                                @if($t[0]->sbtime4 == 0)
                                                    <input class="form-control input-sm datetime2" type="text" name="break_stime4" placeholder="09:00" data-format="hh:mm">
                                                @else
                                                    <input class="form-control input-sm datetime2" type="text" name="break_stime4" placeholder="09:00" value="{{ $t[0]->sbtime4 }}" data-format="hh:mm">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>종료</td>
                                            <td>
                                                @if($t[0]->ebtime4 == 0)
                                                    <input class="form-control input-sm datetime2" type="text" name="break_etime4" placeholder="09:00" data-format="hh:mm">
                                                @else
                                                    <input class="form-control input-sm datetime2" type="text" name="break_etime4" placeholder="09:00" value="{{ $t[0]->ebtime4 }}" data-format="hh:mm">
                                                @endif
                                            </td>
                                        </tr>
                                    </table>
                                    <table class="table table-condensed">
                                        <tr>
                                            <th>소정</th>
                                            <th>연장</th>
                                            <th>야간</th>
                                            <th>휴일수당</th>
                                            <th>휴일연장</th>
                                            <th>휴일야간</th>
                                            <th>주휴일</th>
                                            <th>연차수당</th>
                                            <th>총합</th>
                                        </tr>
                                        <tr>
                                            <td>{{ $t[1]->mtotal }}</td>
                                            <td>{{ $t[1]->mover }}</td>
                                            <td>{{ $t[1]->mnight }}</td>
                                            <td>{{ $t[1]->mwwork }}</td>
                                            <td>{{ $t[1]->mwover }}</td>
                                            <td>{{ $t[1]->mwnight }}</td>
                                            <td>{{ $t[1]->mbreak }}</td>
                                            <td>{{ $t[1]->mwbt }}</td>
                                            <td>{{ $t[1]->total }}</td>
                                        </tr>
                                    </table>
                                    <button class="btn btn-primary btn-sm"> 저장하기 </button>
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