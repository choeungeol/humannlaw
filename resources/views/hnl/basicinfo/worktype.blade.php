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
                               data-l="true"></i> 근무 유형
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="bs-example">
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
                                <li class="pull-right">
                                    <button class="btn btn-sm btn-primary" ng-click="addTab()" ng-disabled="(tabs | filter: {title:'J'}).length> 0">추가</button>
                                    <button class="btn btn-sm btn-warning" ng-click="removeTab()" ng-disabled="tabs.length <= 5">삭제</button>
                                </li>
                            </ul>
                                <div id="myTabContent" class="tab-content">
                                    @foreach($typename as $t => $v)
                                    <form class="tab-pane fade {!! $t === 'A' ? 'active in' : '' !!}" id="{{ $t }}type" method="POST" action="{{ route('insert/worktype') }}">
                                        <input type="hidden" name="type" value="{{ $t }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <table class="table table-condensed" style="margin-bottom:0px;">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">요일</th>
                                                    @foreach($v as $va)
                                                    <th>{{ $va->week }}</th>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <th colspan="2">주 근무횟수 </th>
                                                    @foreach($v as $va)
                                                    <th>
                                                        <select class="form-control input-sm" name="now_{{ $va->sortnum }}" placeholder="09:00">
                                                             @foreach($worknum as $wn)
                                                                        <option value="{{ $wn }}" {!! ($wn === $va->worknum ? 'selected' : '') !!}>{{ $wn }}</option>
                                                             @endforeach
                                                        </select>
                                                    </th>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <th colspan="2">근무유형</th>
                                                    @foreach($v as $va)
                                                    <th>
                                                        <select class="form-control input-sm" name="worktype_{{ $va->sortnum }}" placeholder="09:00">
                                                            @foreach($worktype as $wt)
                                                                <option value="{{ $wt }}"{!! ($wt === $va->worktype ? 'selected' : '') !!}>{{ $wt }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                    @endforeach
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th style="vertical-align: middle;" rowspan="2">근무시간</th>
                                                    <td>시작</td>
                                                    @foreach($v as $va)
                                                    <td>
                                                        @if($va->sworktime == 0)
                                                        <input type="text" class="form-control input-sm" name="work_start_time{{ $va->sortnum }}" placeholder="09:00">
                                                        @else
                                                        <input type="text" class="form-control input-sm" name="work_start_time{{ $va->sortnum }}" placeholder="09:00" value="{{ $va->sworktime }}">
                                                        @endif
                                                    </td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <td>종료</td>
                                                    @foreach($v as $va)
                                                    <td>
                                                        @if($va->eworktime == 0)
                                                        <input class="form-control input-sm" type="text" name="work_end_time{{ $va->sortnum }}" placeholder="09:00">
                                                        @else
                                                        <input class="form-control input-sm" type="text" name="work_end_time{{ $va->sortnum }}" placeholder="09:00" value="{{ $va->eworktime }}">
                                                        @endif
                                                    </td>
                                                    @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-condensed" style="margin-bottom:1px;">
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간</th>
                                                <td>시간</td>
                                                @foreach($v as $va)
                                                    <td>
                                                        @if($va->breaktime == 0)
                                                        <input class="form-control input-sm" type="text" name="break_time{{ $va->sortnum }}" placeholder="09:00">
                                                        @else
                                                        <input class="form-control input-sm" type="text" name="break_time{{ $va->sortnum }}" placeholder="09:00" value="{{ $va->breaktime }}">
                                                        @endif
                                                    </td>
                                                @endforeach
                                            </tr>
                                        </table>
                                        <table class="table table-condensed">
                                            <tr>
                                                <th>1달 소정근로시간</th>
                                                <th>1달 주휴시간</th>
                                                <th>1달 연장근로시간</th>
                                                <th>1달 야간근로시간</th>
                                                <th>1달 휴일근로시간</th>
                                                <th>1달 휴일연장</th>
                                                <th>1달 휴일야간</th>
                                                <th>월 연차시간</th>
                                                <th>총 근로시간</th>
                                            </tr>
                                            <tr>
                                                @foreach($v as $va)
                                                <td>{{ $va->mtotal }}</td>
                                                <td>{{ $va->mbreak }}</td>
                                                <td>{{ $va->mover }}</td>
                                                <td>{{ $va->mnight }}</td>
                                                <td>{{ $va->mwwork }}</td>
                                                <td>{{ $va->mwover }}</td>
                                                <td>{{ $va->mwnight }}</td>
                                                <td>{{ $va->mwbt }}</td>
                                                @endforeach
                                            </tr>
                                        </table>
                                        <button class="btn btn-primary btn-sm"> 저장하기 </button>
                                    </form>
                                    @endforeach
                                <div class="slimScrollBar" style="background: rgb(216, 74, 56); width: 3px; position: absolute; top: 0px; opacity: 1; display: none; border-radius: 0px; z-index: 99; right: 1px; height: 130px;"></div>
                            <div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <a href="#" class="button button-block button-rounded button-primary button-large">저장</a>
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

@stop