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
                                    <div class="tab-pane fade active in" id="Atype">
                                        <table class="table table-condensed" style="margin-bottom:0px;">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">요일</th>
                                                    @foreach($days as $d)
                                                    <th>{{ $d }}</th>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <th colspan="2">주 근무횟수 </th>
                                                    @for($i= 0; $i <= 4; $i++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="now_{{ $i }}">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn  === '매주' ? 'selected' : '') !!} name="now">{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                    @endfor
                                                    @for($a= 0; $a <= 1; $a++)
                                                        <th>
                                                            <select class="form-control input-sm" ng-model="weeknow_{{ $a }}" >
                                                                @foreach($worknum as $wn)
                                                                    <option value="{{ $wn }}"{!! ($wn === '없음' ? 'selected' : '') !!} name="weeknow">{{ $wn }}</option>
                                                                @endforeach
                                                            </select>
                                                        </th>
                                                    @endfor
                                                </tr>
                                                <tr>
                                                    <th colspan="2">근무유형</th>
                                                    @for($i= 0; $i <= 6; $i++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="worktype_{{ $i }}">
                                                            @foreach($worktype as $wt)
                                                                <option value="{{ $wt }}"{!! ($wt === '근무일' ? 'selected' : '') !!}>{{ $wt }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                    @endfor
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th style="vertical-align: middle;" rowspan="2">근무시간</th>
                                                    <td>시작</td>
                                                    @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input type="text" class="form-control input-sm" id="a_times{{ $i }}" ng-model="$parent.a_work_start_time{{ $i }}">
                                                        <% a_work_start_time1 %>
                                                    </td>
                                                    @endfor
                                                </tr>
                                                <tr>
                                                    <td>종료</td>
                                                    @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="a_timee{{ $i }}" ng-model="a_work_end_time{{ $i }}">
                                                    </td>
                                                    @endfor
                                                </tr>
                                            </tbody>
                                        </table>
                                        <button type="button" class="btn btn-default btn-sm" ng-click="aworkadd()"> 근무시간 임시저장</button>
                                        <button type="button" class="btn btn-default btn-sm" ng-click="calc()"> 계산</button>

                                        <table class="table table-condensed" style="margin-bottom:1px;">
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간<br>
                                                    <a class="btn btn-sm btn-primary" ng-click="addRow()">추가</a>
                                                </th>
                                                <td>시작</td>
                                                @for($i=1 ; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="a_timese{{ $i }}" ng-model="a_break_start_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="a_timeee{{ $i }}" ng-model="a_break_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                        </table>
                                        <div class="form-inline">
                                        <button type="button" class="btn btn-default btn-sm" ng-click="abreakadd()"> 휴게시간 임시저장</button>
                                        </div>

                                        <table class="table table-condensed" ng-repeat="bt in breaktimes" style="margin-bottom:1px;">
                                            <form class="<% bt.num %>">
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">
                                                    <% bt.name %> <% bt.num %>
                                                    <br>
                                                    <button type="button" class="btn btn-sm btn-warning" ng-click="removeRow(bt.name)">삭제</button>
                                                </th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="aa_time{{ $i }}" ng-model="aa_break_start_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="aa_time{{ $i }}" ng-model="aa_break_end_time{{ $i }}">
                                                    </td>
                                            @endfor
                                            </tr>
                                        </form>
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
                                                <td><% cwtmonth[1] %>시간 <% cwtmonth[0] %>분</td>
                                                <td><% cbtmonth[1] %>시간 <% cbtmonth[0] %>분</td>
                                                <td></td>
                                                <td></td>
                                                <td><% cwwt[1] %>시간 <% cwwt[0]%>분</td>
                                                <td></td>
                                                <td> </td>
                                                <td> </td>
                                                <td><% allc[1] %>시간 <% allc[0] %>분</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="Btype">
                                        <table class="table table-condensed" style="margin-bottom:1px;">
                                            <thead>
                                            <tr>
                                                <th colspan="2">요일</th>
                                                @foreach($days as $d)
                                                    <th>{{ $d }}</th>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <th colspan="2">주 근무횟수 </th>
                                                @for($i= 0; $i <= 4; $i++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="bnow_{{ $i }}">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn  === '매주' ? 'selected' : '') !!} name="bnow">{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                                @for($a= 0; $a <= 1; $a++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="bweeknow_{{ $a }}" >
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '없음' ? 'selected' : '') !!} name="bweeknow">{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <th colspan="2">근무유형</th>
                                                @for($i= 0; $i <= 6; $i++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="bworktype_{{ $i }}">
                                                            @foreach($worktype as $wt)
                                                                <option value="{{ $wt }}"{!! ($wt === '근무일' ? 'selected' : '') !!}>{{ $wt }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">근무시간</th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="b_times{{ $i }}" ng-model="b_work_start_time{{ $i }}" value="19:11:11">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="b_timee{{ $i }}"ng-model="b_work_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>

                                        <button type="button" class="btn btn-default btn-sm" ng-click="bworkadd()"> 근무시간 임시저장</button>
                                        <button type="button" class="btn btn-default btn-sm" ng-click="bcalc()"> 계산</button>

                                        <table class="table table-condensed" style="margin-bottom:1px;">
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간<br>
                                                    <a class="btn btn-sm btn-primary" ng-click="addRowb()">추가</a>
                                                </th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="b_timese{{ $i }}" ng-model="b_break_start_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="b_timeee{{ $i }}" ng-model="b_break_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                        </table>

                                        <button type="button" class="btn btn-default btn-sm" ng-click="bbreakadd()"> 휴게시간 임시저장</button>
                                        <table class="table table-condensed" ng-repeat="bt in breaktimes" style="margin-bottom:1px;">
                                            <form class="<% bt.num %>">
                                                <tr>
                                                    <th style="vertical-align: middle;" rowspan="2">
                                                        <% bt.name %> <% bt.num %>
                                                        <br>
                                                        <button type="button" class="btn btn-sm btn-warning" ng-click="removeRow(bt.name)">삭제</button>
                                                    </th>
                                                    <td>시작</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" id="bb_times{{ $i }}" ng-model="bb_break_start_time{{ $i }}">
                                                        </td>
                                                    @endfor
                                                </tr>
                                                <tr>
                                                    <td>종료</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" id="bb_timee{{ $i }}" ng-model="bb_break_end_time{{ $i }}">
                                                        </td>
                                                @endfor
                                                </tr>
                                            </form>
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
                                                <td><% bcwtmonth[1] %>시간 <% bcwtmonth[0] %>분</td>
                                                <td><% bcbtmonth[1] %>시간 <% bcbtmonth[0] %>분</td>
                                                <td></td>
                                                <td></td>
                                                <td><% bcwwt[1] %>시간 <% bcwwt[0]%>분</td>
                                                <td></td>
                                                <td> </td>
                                                <td> </td>
                                                <td><% ballc[1] %>시간 <% ballc[0] %>분</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="Ctype">
                                        <table class="table table-condensed" style="margin-bottom:1px;">
                                            <thead>
                                            <tr>
                                                <th colspan="2">요일</th>
                                                @foreach($days as $d)
                                                    <th>{{ $d }}</th>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <th colspan="2">주 근무횟수 </th>
                                                @for($i= 0; $i <= 4; $i++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="cnow_{{ $i }}">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn  === '매주' ? 'selected' : '') !!} name="cnow">{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                                @for($a= 0; $a <= 1; $a++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="cweeknow_{{ $a }}" >
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '없음' ? 'selected' : '') !!} name="cweeknow">{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <th colspan="2">근무유형</th>
                                                @for($i= 0; $i <= 6; $i++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="cworktype_{{ $i }}">
                                                            @foreach($worktype as $wt)
                                                                <option value="{{ $wt }}"{!! ($wt === '근무일' ? 'selected' : '') !!}>{{ $wt }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">근무시간</th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="c_times{{ $i }}" ng-model="c_work_start_time{{ $i }}" value="09:00:00">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="c_timee{{ $i }}"  ng-model="c_work_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>

                                        <button type="button" class="btn btn-default btn-sm" ng-click="cworkadd()"> 근무시간 임시저장</button>
                                        <button type="button" class="btn btn-default btn-sm" ng-click="ccalc()"> 계산</button>

                                        <table class="table table-condensed" style="margin-bottom:1px;">
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간<br>
                                                    <a class="btn btn-sm btn-primary" ng-click="addRowc()">추가</a>
                                                </th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="c_timese{{ $i }}" ng-model="c_break_start_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="c_timeee{{ $i }}" ng-model="c_break_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                        </table>

                                        <button type="button" class="btn btn-default btn-sm" ng-click="cbreakadd()"> 휴게시간 임시저장</button>

                                        <table class="table table-condensed" ng-repeat="bt in breaktimes" style="margin-bottom:0px;">
                                            <form class="<% bt.num %>">
                                                <tr>
                                                    <th style="vertical-align: middle;" rowspan="2">
                                                        <% bt.name %> <% bt.num %>
                                                        <br>
                                                        <button type="button" class="btn btn-sm btn-warning" ng-click="removeRowc(bt.name)">삭제</button>
                                                    </th>
                                                    <td>시작</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" id="cc_times{{ $i }}" ng-model="cc_break_start_time{{ $i }}">
                                                        </td>
                                                    @endfor
                                                </tr>
                                                <tr>
                                                    <td>종료</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" id="cc_timee{{ $i }}" ng-model="cc_break_end_time{{ $i }}">
                                                        </td>
                                                @endfor
                                                </tr>
                                            </form>
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
                                                <td><% ccwtmonth[1] %>시간 <% ccwtmonth[0] %>분</td>
                                                <td><% ccbtmonth[1] %>시간 <% ccbtmonth[0] %>분</td>
                                                <td></td>
                                                <td></td>
                                                <td><% ccwwt[1] %>시간 <% ccwwt[0]%>분</td>
                                                <td></td>
                                                <td> </td>
                                                <td> </td>
                                                <td><% callc[1] %>시간 <% callc[0] %>분</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="Dtype">
                                        <table class="table table-condensed" style="margin-bottom:1px;">
                                            <thead>
                                            <tr>
                                                <th colspan="2">요일</th>
                                                @foreach($days as $d)
                                                    <th>{{ $d }}</th>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <th colspan="2">주 근무횟수 </th>
                                                @for($i= 0; $i <= 4; $i++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="dnow_{{ $i }}">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn  === '매주' ? 'selected' : '') !!} name="dnow">{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                                @for($a= 0; $a <= 1; $a++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="dweeknow_{{ $a }}" >
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '없음' ? 'selected' : '') !!} name="dweeknow">{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <th colspan="2">근무유형</th>
                                                @for($i= 0; $i <= 6; $i++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="dworktype_{{ $i }}">
                                                            @foreach($worktype as $wt)
                                                                <option value="{{ $wt }}"{!! ($wt === '근무일' ? 'selected' : '') !!}>{{ $wt }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">근무시간</th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="d_times{{ $i }}" ng-model="d_work_start_time{{ $i }}" value="19:11:11">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="d_timee{{ $i }}"  ng-model="d_work_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>

                                        <button type="button" class="btn btn-default btn-sm" ng-click="dworkadd()"> 근무시간 임시저장</button>
                                        <button type="button" class="btn btn-default btn-sm" ng-click="dcalc()"> 계산</button>
                                        <table class="table table-condensed" style="margin-bottom:1px;">
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간<br>
                                                    <a class="btn btn-sm btn-primary" ng-click="addRowd()">추가</a>
                                                </th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="d_timese{{ $i }}" ng-model="d_break_start_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="d_timeee{{ $i }}" ng-model="d_break_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                        </table>

                                        <button type="button" class="btn btn-default btn-sm" ng-click="dbreakadd()"> 휴게시간 임시저장</button>

                                        <table class="table table-condensed" ng-repeat="bt in breaktimes" style="margin-bottom:1px;">
                                            <form class="<% bt.num %>">
                                                <tr>
                                                    <th style="vertical-align: middle;" rowspan="2">
                                                        <% bt.name %> <% bt.num %>
                                                        <br>
                                                        <button type="button" class="btn btn-sm btn-warning" ng-click="removeRowd(bt.name)">삭제</button>
                                                    </th>
                                                    <td>시작</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" id="dd_times{{ $i }}" ng-model="dd_break_start_time{{ $i }}">
                                                        </td>
                                                    @endfor
                                                </tr>
                                                <tr>
                                                    <td>종료</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" id="dd_timee{{ $i }}" ng-model="dd_break_end_time{{ $i }}">
                                                        </td>
                                                @endfor
                                                </tr>
                                            </form>
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
                                                <td><% dcwtmonth[1] %>시간 <% dcwtmonth[0] %>분</td>
                                                <td><% dcbtmonth[1] %>시간 <% dcbtmonth[0] %>분</td>
                                                <td></td>
                                                <td></td>
                                                <td><% dcwwt[1] %>시간 <% dcwwt[0]%>분</td>
                                                <td></td>
                                                <td> </td>
                                                <td> </td>
                                                <td><% dallc[1] %>시간 <% dallc[0] %>분</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="Etype">
                                        <table class="table table-condensed" style="margin-bottom:1px;">
                                            <thead>
                                            <tr>
                                                <th colspan="2">요일</th>
                                                @foreach($days as $d)
                                                    <th>{{ $d }}</th>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <th colspan="2">주 근무횟수 </th>
                                                @for($i= 0; $i <= 4; $i++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="enow_{{ $i }}">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn  === '매주' ? 'selected' : '') !!} name="enow">{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                                @for($a= 0; $a <= 1; $a++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="eweeknow_{{ $a }}" >
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '없음' ? 'selected' : '') !!} name="eweeknow">{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <th colspan="2">근무유형</th>
                                                @for($i= 0; $i <= 6; $i++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="eworktype_{{ $i }}">
                                                            @foreach($worktype as $wt)
                                                                <option value="{{ $wt }}"{!! ($wt === '근무일' ? 'selected' : '') !!}>{{ $wt }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">근무시간</th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="e_times{{ $i }}" ng-model="e_work_start_time{{ $i }}" value="19:11:11">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="e_timee{{ $i }}" ng-model="e_work_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>

                                        <button type="button" class="btn btn-default btn-sm" ng-click="eworkadd()"> 근무시간 임시저장</button>
                                        <button type="button" class="btn btn-default btn-sm" ng-click="ecalc()"> 계산</button>

                                        <table class="table table-condensed" style="margin-bottom:1px;">
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간<br>
                                                    <a class="btn btn-sm btn-primary" ng-click="addRowe()">추가</a>
                                                </th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="e_timese{{ $i }}" ng-model="e_break_start_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="e_timeee{{ $i }}" ng-model="e_break_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                        </table>
                                        <button type="button" class="btn btn-default btn-sm" ng-click="ebreakadd()"> 휴게시간 임시저장</button>

                                        <table class="table table-condensed" ng-repeat="bt in breaktimes" style="margin-bottom:1px;">
                                            <form class="<% bt.num %>">
                                                <tr>
                                                    <th style="vertical-align: middle;" rowspan="2">
                                                        <% bt.name %> <% bt.num %>
                                                        <br>
                                                        <button type="button" class="btn btn-sm btn-warning" ng-click="removeRowe(bt.name)">삭제</button>
                                                    </th>
                                                    <td>시작</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" id="ee_times{{ $i }}" ng-model="ee_break_start_time{{ $i }}">
                                                        </td>
                                                    @endfor
                                                </tr>
                                                <tr>
                                                    <td>종료</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" id="ee_timee{{ $i }}" ng-model="ee_break_end_time{{ $i }}">
                                                        </td>
                                                @endfor
                                                </tr>
                                            </form>
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
                                                <td><% ecwtmonth[1] %>시간 <% ecwtmonth[0] %>분</td>
                                                <td><% ecbtmonth[1] %>시간 <% ecbtmonth[0] %>분</td>
                                                <td></td>
                                                <td></td>
                                                <td><% ecwwt[1] %>시간 <% ecwwt[0]%>분</td>
                                                <td></td>
                                                <td> </td>
                                                <td> </td>
                                                <td><% eallc[1] %>시간 <% eallc[0] %>분</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="Ftype">
                                        <table class="table table-condensed" style="margin-bottom:1px;">
                                            <thead>
                                            <tr>
                                                <th colspan="2">요일</th>
                                                @foreach($days as $d)
                                                    <th>{{ $d }}</th>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <th colspan="2">주 근무횟수 </th>
                                                @for($i= 0; $i <= 4; $i++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="fnow_{{ $i }}">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn  === '매주' ? 'selected' : '') !!} name="now">{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                                @for($a= 0; $a <= 1; $a++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="fweeknow_{{ $a }}" >
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '없음' ? 'selected' : '') !!} name="weeknow">{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <th colspan="2">근무유형</th>
                                                @for($i= 0; $i <= 6; $i++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="fworktype_{{ $i }}">
                                                            @foreach($worktype as $wt)
                                                                <option value="{{ $wt }}"{!! ($wt === '근무일' ? 'selected' : '') !!}>{{ $wt }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">근무시간</th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="f_times{{ $i }}" ng-model="f_work_start_time{{ $i }}" value="19:11:11">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="f_timee{{ $i }}" ng-model="f_work_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>

                                        <button type="button" class="btn btn-default btn-sm" ng-click="fworkadd()"> 근무시간 임시저장</button>
                                        <button type="button" class="btn btn-default btn-sm" ng-click="fcalc()"> 계산</button>

                                        <table class="table table-condensed" style="margin-bottom:1px;">
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간<br>
                                                    <a class="btn btn-sm btn-primary" ng-click="addRowf()">추가</a>
                                                </th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="f_timese{{ $i }}" ng-model="f_break_start_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="f_timeee{{ $i }}" ng-model="f_break_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                        </table>

                                        <button type="button" class="btn btn-default btn-sm" ng-click="fbreakadd()"> 휴게시간 임시저장</button>

                                        <table class="table table-condensed" ng-repeat="bt in breaktimes" style="margin-bottom:1px;">
                                            <form class="<% bt.num %>">
                                                <tr>
                                                    <th style="vertical-align: middle;" rowspan="2">
                                                        <% bt.name %> <% bt.num %>
                                                        <br>
                                                        <button type="button" class="btn btn-sm btn-warning" ng-click="removeRowf(bt.name)">삭제</button>
                                                    </th>
                                                    <td>시작</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" id="ff_times{{ $i }}" ng-model="ff_break_start_time{{ $i }}">
                                                        </td>
                                                    @endfor
                                                </tr>
                                                <tr>
                                                    <td>종료</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" id="ff_timee{{ $i }}" ng-model="ff_break_end_time{{ $i }}">
                                                        </td>
                                                @endfor
                                                </tr>
                                            </form>
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
                                                <td><% fcwtmonth[1] %>시간 <% fcwtmonth[0] %>분</td>
                                                <td><% fcbtmonth[1] %>시간 <% fcbtmonth[0] %>분</td>
                                                <td></td>
                                                <td></td>
                                                <td><% fcwwt[1] %>시간 <% fcwwt[0]%>분</td>
                                                <td></td>
                                                <td> </td>
                                                <td> </td>
                                                <td><% fallc[1] %>시간 <% fallc[0] %>분</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="Gtype">
                                        <table class="table table-condensed" style="margin-bottom:0px;">
                                            <thead>
                                            <tr>
                                                <th colspan="2">요일</th>
                                                @foreach($days as $d)
                                                    <th>{{ $d }}</th>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <th colspan="2">주 근무횟수 </th>
                                                @for($i= 0; $i <= 4; $i++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="gnow_{{ $i }}">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn  === '매주' ? 'selected' : '') !!} name="now">{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                                @for($a= 0; $a <= 1; $a++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="gweeknow_{{ $a }}" >
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '없음' ? 'selected' : '') !!} name="weeknow">{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <th colspan="2">근무유형</th>
                                                @for($i= 0; $i <= 6; $i++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="gworktype_{{ $i }}">
                                                            @foreach($worktype as $wt)
                                                                <option value="{{ $wt }}"{!! ($wt === '근무일' ? 'selected' : '') !!}>{{ $wt }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">근무시간</th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="g_times{{ $i }}" ng-model="g_work_start_time{{ $i }}" value="19:11:11">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="g_timee{{ $i }}" ng-model="g_work_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>

                                        <button type="button" class="btn btn-default btn-sm" ng-click="gworkadd()"> 근무시간 임시저장</button>
                                        <button type="button" class="btn btn-default btn-sm" ng-click="gcalc()"> 계산</button>

                                        <table class="table table-condensed" style="margin-bottom:1px;">
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간<br>
                                                    <a class="btn btn-sm btn-primary" ng-click="addRowg()">추가</a>
                                                </th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="g_timese{{ $i }}" ng-model="g_break_start_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="g_timeee{{ $i }}" ng-model="g_break_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                        </table>

                                        <button type="button" class="btn btn-default btn-sm" ng-click="gbreakadd()"> 휴게시간 임시저장</button>

                                        <table class="table table-condensed" ng-repeat="bt in breaktimes" style="margin-bottom:0px;">
                                            <form class="<% bt.num %>">
                                                <tr>
                                                    <th style="vertical-align: middle;" rowspan="2">
                                                        <% bt.name %> <% bt.num %>
                                                        <br>
                                                        <button type="button" class="btn btn-sm btn-warning" ng-click="removeRowg(bt.name)">삭제</button>
                                                    </th>
                                                    <td>시작</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" id="gg_times{{ $i }}" ng-model="gg_break_start_time{{ $i }}">
                                                        </td>
                                                    @endfor
                                                </tr>
                                                <tr>
                                                    <td>종료</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" id="gg_timee{{ $i }}" ng-model="gg_break_end_time{{ $i }}">
                                                        </td>
                                                @endfor
                                                </tr>
                                            </form>
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
                                                <td><% gcwtmonth[1] %>시간 <% gcwtmonth[0] %>분</td>
                                                <td><% gcbtmonth[1] %>시간 <% gcbtmonth[0] %>분</td>
                                                <td></td>
                                                <td></td>
                                                <td><% gcwwt[1] %>시간 <% gcwwt[0]%>분</td>
                                                <td></td>
                                                <td> </td>
                                                <td> </td>
                                                <td><% gallc[1] %>시간 <% gallc[0] %>분</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="Htype">
                                        <table class="table table-condensed" style="margin-bottom:1px;">
                                            <thead>
                                            <tr>
                                                <th colspan="2">요일</th>
                                                @foreach($days as $d)
                                                    <th>{{ $d }}</th>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <th colspan="2">주 근무횟수 </th>
                                                @for($i= 0; $i <= 4; $i++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="hnow_{{ $i }}">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn  === '매주' ? 'selected' : '') !!} name="now">{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                                @for($a= 0; $a <= 1; $a++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="hweeknow_{{ $a }}" >
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '없음' ? 'selected' : '') !!} name="weeknow">{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <th colspan="2">근무유형</th>
                                                @for($i= 0; $i <= 6; $i++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="hworktype_{{ $i }}">
                                                            @foreach($worktype as $wt)
                                                                <option value="{{ $wt }}"{!! ($wt === '근무일' ? 'selected' : '') !!}>{{ $wt }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">근무시간</th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="h_times{{ $i }}" ng-model="h_work_start_time{{ $i }}" value="19:11:11">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="h_timee{{ $i }}" ng-model="h_work_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>

                                        <button type="button" class="btn btn-default btn-sm" ng-click="hworkadd()"> 근무시간 임시저장</button>
                                        <button type="button" class="btn btn-default btn-sm" ng-click="hcalc()"> 계산</button>

                                        <table class="table table-condensed" style="margin-bottom:0px;">
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간<br>
                                                    <a class="btn btn-sm btn-primary" ng-click="addRowh()">추가</a>
                                                </th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text"id="h_timese{{ $i }}" ng-model="h_break_start_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="h_timeee{{ $i }}" ng-model="h_break_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                        </table>

                                        <button type="button" class="btn btn-default btn-sm" ng-click="hbreakadd()"> 휴게시간 임시저장</button>

                                        <table class="table table-condensed" ng-repeat="bt in breaktimes" style="margin-bottom:1px;">
                                            <form class="<% bt.num %>">
                                                <tr>
                                                    <th style="vertical-align: middle;" rowspan="2">
                                                        <% bt.name %> <% bt.num %>
                                                        <br>
                                                        <button type="button" class="btn btn-sm btn-warning" ng-click="removeRowh(bt.name)">삭제</button>
                                                    </th>
                                                    <td>시작</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" id="hh_times{{ $i }}" ng-model="hh_break_start_time{{ $i }}">
                                                        </td>
                                                    @endfor
                                                </tr>
                                                <tr>
                                                    <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="hh_timee{{ $i }}" ng-model="hh_break_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                                </tr>
                                            </form>
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
                                                <td><% hcwtmonth[1] %>시간 <% hcwtmonth[0] %>분</td>
                                                <td><% hcbtmonth[1] %>시간 <% hcbtmonth[0] %>분</td>
                                                <td></td>
                                                <td></td>
                                                <td><% hcwwt[1] %>시간 <% hcwwt[0]%>분</td>
                                                <td></td>
                                                <td> </td>
                                                <td> </td>
                                                <td><% hallc[1] %>시간 <% hallc[0] %>분</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="Itype">
                                        <table class="table table-condensed" style="margin-bottom:0px;">
                                            <thead>
                                            <tr>
                                                <th colspan="2">요일</th>
                                                @foreach($days as $d)
                                                    <th>{{ $d }}</th>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <th colspan="2">주 근무횟수 </th>
                                                @for($i= 0; $i <= 4; $i++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="inow_{{ $i }}">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn  === '매주' ? 'selected' : '') !!} name="now">{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                                @for($a= 0; $a <= 1; $a++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="iweeknow_{{ $a }}" >
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '없음' ? 'selected' : '') !!} name="weeknow">{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <th colspan="2">근무유형</th>
                                                @for($i= 0; $i <= 6; $i++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="iworktype_{{ $i }}">
                                                            @foreach($worktype as $wt)
                                                                <option value="{{ $wt }}"{!! ($wt === '근무일' ? 'selected' : '') !!}>{{ $wt }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">근무시간</th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="i_times{{ $i }}" ng-model="i_work_start_time{{ $i }}" value="19:11:11">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="i_timee{{ $i }}" ng-model="i_work_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>

                                        <button type="button" class="btn btn-default btn-sm" ng-click="iworkadd()"> 근무시간 임시저장</button>
                                        <button type="button" class="btn btn-default btn-sm" ng-click="icalc()"> 계산</button>

                                        <table class="table table-condensed" style="margin-bottom:0px;">
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간<br>
                                                    <a class="btn btn-sm btn-primary" ng-click="addRowi()">추가</a>
                                                </th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="i_timese{{ $i }}" ng-model="i_break_start_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="i_timeee{{ $i }}" ng-model="i_break_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                        </table>

                                        <button type="button" class="btn btn-default btn-sm" ng-click="ibreakadd()"> 휴게시간 임시저장</button>

                                        <table class="table table-condensed" ng-repeat="bt in breaktimes" style="margin-bottom:0px;">
                                            <form class="<% bt.num %>">
                                                <tr>
                                                    <th style="vertical-align: middle;" rowspan="2">
                                                        <% bt.name %> <% bt.num %>
                                                        <br>
                                                        <button type="button" class="btn btn-sm btn-warning" ng-click="removeRowi(bt.name)">삭제</button>
                                                    </th>
                                                    <td>시작</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" id="ii_times{{ $i }}" ng-model="ii_break_start_time{{ $i }}">
                                                        </td>
                                                    @endfor
                                                </tr>
                                                <tr>
                                                    <td>종료</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" id="ii_timee{{ $i }}" ng-model="ii_break_end_time{{ $i }}">
                                                        </td>
                                                @endfor
                                                </tr>
                                            </form>
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
                                                <td><% icwtmonth[1] %>시간 <% icwtmonth[0] %>분</td>
                                                <td><% icbtmonth[1] %>시간 <% icbtmonth[0] %>분</td>
                                                <td></td>
                                                <td></td>
                                                <td><% icwwt[1] %>시간 <% icwwt[0]%>분</td>
                                                <td></td>
                                                <td> </td>
                                                <td> </td>
                                                <td><% iallc[1] %>시간 <% iallc[0] %>분</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="Jtype">
                                        <table class="table table-condensed" style="margin-bottom:0px;">
                                            <thead>
                                            <tr>
                                                <th colspan="2">요일</th>
                                                @foreach($days as $d)
                                                    <th>{{ $d }}</th>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <th colspan="2">주 근무횟수 </th>
                                                @for($i= 0; $i <= 4; $i++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="jnow_{{ $i }}">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn  === '매주' ? 'selected' : '') !!} name="now">{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                                @for($a= 0; $a <= 1; $a++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="jweeknow_{{ $a }}" >
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '없음' ? 'selected' : '') !!} name="weeknow">{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <th colspan="2">근무유형</th>
                                                @for($i= 0; $i <= 6; $i++)
                                                    <th>
                                                        <select class="form-control input-sm" ng-model="jworktype_{{ $i }}">
                                                            @foreach($worktype as $wt)
                                                                <option value="{{ $wt }}"{!! ($wt === '근무일' ? 'selected' : '') !!}>{{ $wt }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">근무시간</th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="j_times{{ $i }}" ng-model="j_work_start_time{{ $i }}" value="19:11:11">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="j_timee{{ $i }}" ng-model="j_work_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>

                                        <button type="button" class="btn btn-default btn-sm" ng-click="jworkadd()"> 근무시간 임시저장</button>
                                        <button type="button" class="btn btn-default btn-sm" ng-click="jcalc()"> 계산</button>

                                        <table class="table table-condensed" style="margin-bottom:0px;">
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간<br>
                                                    <a class="btn btn-sm btn-primary" ng-click="addRowj()">추가</a>
                                                </th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="j_timese{{ $i }}" ng-model="j_break_start_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="j_timeee{{ $i }}" ng-model="j_break_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                        </table>

                                        <button type="button" class="btn btn-default btn-sm" ng-click="jbreakadd()"> 휴게시간 임시저장</button>

                                        <table class="table table-condensed" ng-repeat="bt in breaktimes" style="margin-bottom:0px;">
                                            <form class="<% bt.num %>">
                                                <tr>
                                                    <th style="vertical-align: middle;" rowspan="2">
                                                        <% bt.name %> <% bt.num %>
                                                        <br>
                                                        <button type="button" class="btn btn-sm btn-warning" ng-click="removeRowj(bt.name)">삭제</button>
                                                    </th>
                                                    <td>시작</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" id="jj_times{{ $i }}" ng-model="jj_break_start_time{{ $i }}">
                                                        </td>
                                                    @endfor
                                                </tr>
                                                <tr>
                                                    <td>종료</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" id="jj_timee{{ $i }}" ng-model="jj_break_end_time{{ $i }}">
                                                        </td>
                                                    @endfor
                                                </tr>
                                            </form>
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
                                                <td><% jcwtmonth[1] %>시간 <% jcwtmonth[0] %>분</td>
                                                <td><% jcbtmonth[1] %>시간 <% jcbtmonth[0] %>분</td>
                                                <td></td>
                                                <td></td>
                                                <td><% jcwwt[1] %>시간 <% jcwwt[0]%>분</td>
                                                <td></td>
                                                <td> </td>
                                                <td> </td>
                                                <td><% jallc[1] %>시간 <% jallc[0] %>분</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
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