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
                                                    <th colspan="2">주 근무횟수</th>
                                                    @for($i= 0; $i <= 4; $i++)
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '매주' ? 'selected' : '') !!}>{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                    @endfor
                                                    @for($a= 0; $a <= 1; $a++)
                                                        <th>
                                                            <select class="form-control input-sm">
                                                                @foreach($worknum as $wn)
                                                                    <option value="{{ $wn }}"{!! ($wn === '없음' ? 'selected' : '') !!}>{{ $wn }}</option>
                                                                @endforeach
                                                            </select>
                                                        </th>
                                                    @endfor
                                                </tr>
                                                <tr>
                                                    <th colspan="2">근무유형</th>
                                                    @for($i= 0; $i <= 6; $i++)
                                                    <th>
                                                        <select class="form-control input-sm">
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
                                                        <input type="text" class="form-control input-sm" id="time{{ $i }}"  ng-model="a_work_start_time{{ $i }}">
                                                    </td>
                                                    @endfor
                                                </tr>
                                                <tr>
                                                    <td>종료</td>
                                                    @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="time1{{ $i }}" ng-model="a_work_end_time{{ $i }}">
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
                                                        <input class="form-control input-sm" type="text" id="time2{{ $i }}" ng-model="a_break_start_time{{ $i }}">

                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="time3{{ $i }}" ng-model="a_break_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                        </table>
                                        <div class="form-inline">
                                        <button type="button" class="btn btn-default btn-sm" ng-click="abreakadd()"> 휴게시간 임시저장</button>
                                            총 휴게시간 : <% cbt %>  총 실 근무시간 : <% cwt %>
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
                                                        <input class="form-control input-sm" type="text" id="time4{{ $i }}" ng-model="aa_break_start_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" id="time5{{ $i }}" ng-model="aa_break_end_time{{ $i }}">
                                                    </td>
                                            @endfor
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
                                                <td><% cwtmonth %></td>
                                                <td><% cbtmonth %></td>
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
                                                <th colspan="2">주 근무횟수</th>
                                                @for($i= 1; $i <= 4; $i++)
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '매주' ? 'selected' : '') !!}>{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                                @for($a= 1; $a <= 1; $a++)
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '없음' ? 'selected' : '') !!}>{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <th colspan="2">근무유형</th>
                                                @for($i= 1; $i <= 6; $i++)
                                                    <th>
                                                        <select class="form-control input-sm">
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
                                                        <input class="form-control input-sm" type="text" ng-model="b_work_start_time{{ $i }}" value="19:11:11">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="b_work_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-condensed" style="margin-bottom:1px;">
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간<br>
                                                    <a class="btn btn-sm btn-primary" ng-click="addRowb()">추가</a>
                                                </th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="b_break_start_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="b_break_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tr>
                                        </table>
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
                                                            <input class="form-control input-sm" type="text" ng-model="bb_break_start_time{{ $i }}">
                                                        </td>
                                                    @endfor
                                                </tr>
                                                <tr>
                                                    <td>종료</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" ng-model="bb_break_end_time{{ $i }}">
                                                        </td>
                                                @endfor
                                            </form>
                                        </table>
                                        <table class="table table-condensed">
                                            <tr>
                                                <th></th>
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
                                                <th colspan="2">주 근무횟수</th>
                                                @for($i= 1; $i <= 4; $i++)
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '매주' ? 'selected' : '') !!}>{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                                @for($a= 1; $a <= 1; $a++)
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '없음' ? 'selected' : '') !!}>{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <th colspan="2">근무유형</th>
                                                @for($i= 1; $i <= 6; $i++)
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            @foreach($worktype as $wt)
                                                                <option value="{{ $wt }}"{!! ($wt === '근무일' ? 'selected' : '') !!}>{{ $wt }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            </thead>
                                            <tbody>
<<<<<<< Updated upstream
                                                <tr>
                                                    <td style="vertical-align: middle;">근무시간</td>
                                                    <td>시작<br><br>종료 </td>
                                                    <td>
                                                        <input class="form-control input-sm" type="time">
                                                        <input class="form-control input-sm" type="time">
                                                    </td>
                                                    <td>
                                                        <input class="form-control input-sm" type="time">
                                                        <input class="form-control input-sm" type="time">
                                                    </td>
                                                    <td>
                                                        <input class="form-control input-sm" type="time">
                                                        <input class="form-control input-sm" type="time">
                                                    </td>
=======
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">근무시간</th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
>>>>>>> Stashed changes
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="c_work_start_time{{ $i }}" value="09:00:00">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="c_work_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-condensed" style="margin-bottom:1px;">
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간<br>
                                                    <a class="btn btn-sm btn-primary" ng-click="addRowc()">추가</a>
                                                </th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="c_break_start_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="c_break_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tr>
                                        </table>
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
                                                            <input class="form-control input-sm" type="text" ng-model="cc_break_start_time{{ $i }}">
                                                        </td>
                                                    @endfor
                                                </tr>
                                                <tr>
                                                    <td>종료</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" ng-model="cc_break_end_time{{ $i }}">
                                                        </td>
                                                @endfor
                                            </form>
                                        </table>
                                        <table class="table table-condensed">
                                            <tr>
                                                <th></th>
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
                                                <th colspan="2">주 근무횟수</th>
                                                @for($i= 1; $i <= 4; $i++)
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '매주' ? 'selected' : '') !!}>{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                                @for($a= 1; $a <= 1; $a++)
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '없음' ? 'selected' : '') !!}>{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <th colspan="2">근무유형</th>
                                                @for($i= 1; $i <= 6; $i++)
                                                    <th>
                                                        <select class="form-control input-sm">
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
                                                        <input class="form-control input-sm" type="text" ng-model="a_work_start_time{{ $i }}" value="19:11:11">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="a_work_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-condensed" style="margin-bottom:1px;">
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간<br>
                                                    <a class="btn btn-sm btn-primary" ng-click="addRowd()">추가</a>
                                                </th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="d_break_start_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="d_break_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tr>
                                        </table>
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
                                                            <input class="form-control input-sm" type="text" ng-model="dd_break_start_time{{ $i }}">
                                                        </td>
                                                    @endfor
                                                </tr>
                                                <tr>
                                                    <td>종료</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" ng-model="dd_break_end_time{{ $i }}">
                                                        </td>
                                                @endfor
                                            </form>
                                        </table>
                                        <table class="table table-condensed">
                                            <tr>
                                                <th></th>
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
                                                <th colspan="2">주 근무횟수</th>
                                                @for($i= 1; $i <= 4; $i++)
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '매주' ? 'selected' : '') !!}>{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                                @for($a= 1; $a <= 1; $a++)
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '없음' ? 'selected' : '') !!}>{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <th colspan="2">근무유형</th>
                                                @for($i= 1; $i <= 6; $i++)
                                                    <th>
                                                        <select class="form-control input-sm">
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
                                                        <input class="form-control input-sm" type="text" ng-model="e_work_start_time{{ $i }}" value="19:11:11">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="e_work_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-condensed" style="margin-bottom:1px;">
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간<br>
                                                    <a class="btn btn-sm btn-primary" ng-click="addRowe()">추가</a>
                                                </th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="e_break_start_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="e_break_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tr>
                                        </table>
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
                                                            <input class="form-control input-sm" type="text" ng-model="ee_break_start_time{{ $i }}">
                                                        </td>
                                                    @endfor
                                                </tr>
                                                <tr>
                                                    <td>종료</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" ng-model="ee_break_end_time{{ $i }}">
                                                        </td>
                                                @endfor
                                            </form>
                                        </table>
                                        <table class="table table-condensed">
                                            <tr>
                                                <th></th>
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
                                                <th colspan="2">주 근무횟수</th>
                                                @for($i= 1; $i <= 4; $i++)
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '매주' ? 'selected' : '') !!}>{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                                @for($a= 1; $a <= 1; $a++)
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '없음' ? 'selected' : '') !!}>{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <th colspan="2">근무유형</th>
                                                @for($i= 1; $i <= 6; $i++)
                                                    <th>
                                                        <select class="form-control input-sm">
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
                                                        <input class="form-control input-sm" type="text" ng-model="f_work_start_time{{ $i }}" value="19:11:11">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="f_work_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-condensed" style="margin-bottom:1px;">
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간<br>
                                                    <a class="btn btn-sm btn-primary" ng-click="addRowf()">추가</a>
                                                </th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="f_break_start_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="f_break_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tr>
                                        </table>
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
                                                            <input class="form-control input-sm" type="text" ng-model="ff_break_start_time{{ $i }}">
                                                        </td>
                                                    @endfor
                                                </tr>
                                                <tr>
                                                    <td>종료</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" ng-model="ff_break_end_time{{ $i }}">
                                                        </td>
                                                @endfor
                                            </form>
                                        </table>
                                        <table class="table table-condensed">
                                            <tr>
                                                <th></th>
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
                                                <th colspan="2">주 근무횟수</th>
                                                @for($i= 0; $i <= 4; $i++)
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '매주' ? 'selected' : '') !!}>{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                                @for($a= 1; $a <= 1; $a++)
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '없음' ? 'selected' : '') !!}>{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <th colspan="2">근무유형</th>
                                                @for($i= 1; $i <= 6; $i++)
                                                    <th>
                                                        <select class="form-control input-sm">
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
                                                        <input class="form-control input-sm" type="text" ng-model="g_work_start_time{{ $i }}" value="19:11:11">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="g_work_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-condensed" style="margin-bottom:1px;">
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간<br>
                                                    <a class="btn btn-sm btn-primary" ng-click="addRowg()">추가</a>
                                                </th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="g_break_start_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="g_break_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tr>
                                        </table>
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
                                                            <input class="form-control input-sm" type="text" ng-model="gg_break_start_time{{ $i }}">
                                                        </td>
                                                    @endfor
                                                </tr>
                                                <tr>
                                                    <td>종료</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" ng-model="gg_break_end_time{{ $i }}">
                                                        </td>
                                                @endfor
                                            </form>
                                        </table>
                                        <table class="table table-condensed">
                                            <tr>
                                                <th></th>
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
                                                <th colspan="2">주 근무횟수</th>
                                                @for($i= 1; $i <= 4; $i++)
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '매주' ? 'selected' : '') !!}>{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                                @for($a= 1; $a <= 1; $a++)
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '없음' ? 'selected' : '') !!}>{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <th colspan="2">근무유형</th>
                                                @for($i= 1; $i <= 6; $i++)
                                                    <th>
                                                        <select class="form-control input-sm">
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
                                                        <input class="form-control input-sm" type="text" ng-model="h_work_start_time{{ $i }}" value="19:11:11">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="h_work_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-condensed" style="margin-bottom:0px;">
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간<br>
                                                    <a class="btn btn-sm btn-primary" ng-click="addRowh()">추가</a>
                                                </th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="h_break_start_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="h_break_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tr>
                                        </table>
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
                                                            <input class="form-control input-sm" type="text" ng-model="hh_break_start_time{{ $i }}">
                                                        </td>
                                                    @endfor
                                                </tr>
                                                <tr>
                                                    <td>종료</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" ng-model="hh_break_end_time{{ $i }}">
                                                        </td>
                                                @endfor
                                            </form>
                                        </table>
                                        <table class="table table-condensed">
                                            <tr>
                                                <th></th>
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
                                                <th colspan="2">주 근무횟수</th>
                                                @for($i= 1; $i <= 4; $i++)
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '매주' ? 'selected' : '') !!}>{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                                @for($a= 1; $a <= 1; $a++)
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '없음' ? 'selected' : '') !!}>{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <th colspan="2">근무유형</th>
                                                @for($i= 1; $i <= 6; $i++)
                                                    <th>
                                                        <select class="form-control input-sm">
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
                                                        <input class="form-control input-sm" type="text" ng-model="i_work_start_time{{ $i }}" value="19:11:11">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="i_work_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-condensed" style="margin-bottom:0px;">
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간<br>
                                                    <a class="btn btn-sm btn-primary" ng-click="addRowi()">추가</a>
                                                </th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="i_break_start_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="i_break_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tr>
                                        </table>
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
                                                            <input class="form-control input-sm" type="text" ng-model="ii_break_start_time{{ $i }}">
                                                        </td>
                                                    @endfor
                                                </tr>
                                                <tr>
                                                    <td>종료</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" ng-model="ii_break_end_time{{ $i }}">
                                                        </td>
                                                @endfor
                                            </form>
                                        </table>
                                        <table class="table table-condensed">
                                            <tr>
                                                <th></th>
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
                                                <th colspan="2">주 근무횟수</th>
                                                @for($i= 1; $i <= 4; $i++)
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '매주' ? 'selected' : '') !!}>{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                                @for($a= 1; $a <= 1; $a++)
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            @foreach($worknum as $wn)
                                                                <option value="{{ $wn }}"{!! ($wn === '없음' ? 'selected' : '') !!}>{{ $wn }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <th colspan="2">근무유형</th>
                                                @for($i= 1; $i <= 6; $i++)
                                                    <th>
                                                        <select class="form-control input-sm">
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
                                                        <input class="form-control input-sm" type="text" ng-model="j_work_start_time{{ $i }}" value="19:11:11">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="j_work_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-condensed" style="margin-bottom:0px;">
                                            <tr>
                                                <th style="vertical-align: middle;" rowspan="2">휴게시간<br>
                                                    <a class="btn btn-sm btn-primary" ng-click="addRowj()">추가</a>
                                                </th>
                                                <td>시작</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="j_break_start_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>종료</td>
                                                @for($i=1; $i < 8; $i++)
                                                    <td>
                                                        <input class="form-control input-sm" type="text" ng-model="j_break_end_time{{ $i }}">
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tr>
                                        </table>
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
                                                            <input class="form-control input-sm" type="text" ng-model="jj_break_start_time{{ $i }}">
                                                        </td>
                                                    @endfor
                                                </tr>
                                                <tr>
                                                    <td>종료</td>
                                                    @for($i=1; $i < 8; $i++)
                                                        <td>
                                                            <input class="form-control input-sm" type="text" ng-model="jj_break_end_time{{ $i }}">
                                                        </td>
                                                @endfor
                                            </form>
                                        </table>
                                        <table class="table table-condensed">
                                            <tr>
                                                <th></th>
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