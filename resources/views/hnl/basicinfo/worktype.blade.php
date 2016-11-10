@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
    기본정보 등록
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <meta name="_token" content="{{ csrf_token() }}">

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
                            <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                                <li class="active">
                                    <a href="#atype" data-toggle="tab" aria-expanded="true">A형</a>
                                </li>
                                <li class="">
                                    <a href="#btype" data-toggle="tab" aria-expanded="false">B형</a>
                                </li>
                                <li class="">
                                    <a href="#ctype" data-toggle="tab" aria-expanded="false">C형</a>
                                </li>
                                <li class="">
                                    <div class="form-inline">
                                    <input type="text" class="form-control">
                                    <label>* 기본설정</label>
                                    <select class="form-control">
                                        <option>A형</option>
                                        <option>B형</option>
                                        <option>C형</option>
                                    </select>
                                    </div>
                                </li>
                            </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade active in" id="atype">
                                        <table class="table table-condensed">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">요일</th>
                                                    <th>월요일</th>
                                                    <th>화요일</th>
                                                    <th>수요일</th>
                                                    <th>목요일</th>
                                                    <th>금요일</th>
                                                    <th>토요일</th>
                                                    <th>일요일</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2">근무유형</th>
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            <option>근무일</option>
                                                            <option>유급휴일</option>
                                                            <option>무급휴일</option>
                                                            <option>무급휴무일</option>
                                                        </select>
                                                    </th>
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            <option>근무일</option>
                                                            <option>유급휴일</option>
                                                            <option>무급휴일</option>
                                                            <option>무급휴무일</option>
                                                        </select>
                                                    </th>
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            <option>근무일</option>
                                                            <option>유급휴일</option>
                                                            <option>무급휴일</option>
                                                            <option>무급휴무일</option>
                                                        </select>
                                                    </th>
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            <option>근무일</option>
                                                            <option>유급휴일</option>
                                                            <option>무급휴일</option>
                                                            <option>무급휴무일</option>
                                                        </select>
                                                    </th>
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            <option>근무일</option>
                                                            <option>유급휴일</option>
                                                            <option>무급휴일</option>
                                                            <option>무급휴무일</option>
                                                        </select>
                                                    </th>
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            <option>근무일</option>
                                                            <option>유급휴일</option>
                                                            <option>무급휴일</option>
                                                            <option>무급휴무일</option>
                                                        </select>
                                                    </th>
                                                    <th>
                                                        <select class="form-control input-sm">
                                                            <option>근무일</option>
                                                            <option>유급휴일</option>
                                                            <option>무급휴일</option>
                                                            <option>무급휴무일</option>
                                                        </select>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="vertical-align: middle;">근무시간</td>
                                                    <td>시작<br><br>종료</td>
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
                                                    <td>
                                                        <input class="form-control input-sm" type="time">
                                                        <input class="form-control input-sm" type="time">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align: middle;">휴게시간<br>
                                                        <a class="btn btn-sm btn-primary" ng-click="addRow()">추가</a>
                                                    </td>
                                                    <td>시작<br><br>종료</td>
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
                                                    <td>
                                                        <input class="form-control input-sm" type="time">
                                                        <input class="form-control input-sm" type="time">
                                                    </td>
                                                </tr>
                                                <tr ng-repeat="bt in breaktimes">
                                                    <td style="vertical-align: middle;">
                                                        <% bt.name %> <% bt.num %>
                                                        <br>
                                                        <button type="button" class="btn btn-sm btn-warning" ng-click="removeRow(bt.name)">삭제</button>
                                                    </td>
                                                    <td>시작<br><br>종료</td>
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
                                                    <td>
                                                        <input class="form-control input-sm" type="time">
                                                        <input class="form-control input-sm" type="time">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align: middle;">연장근무</td>
                                                    <td>시작<br><br>종료</td>
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
                                                    <td>
                                                        <input class="form-control input-sm" type="time">
                                                        <input class="form-control input-sm" type="time">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align: middle;">야간근무</td>
                                                    <td>시작<br><br>종료</td>
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
                                                    <td>
                                                        <input class="form-control input-sm" type="time">
                                                        <input class="form-control input-sm" type="time">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="btype">
                                        <table class="table table-condensed">
                                            <thead>
                                            <tr>
                                                <th colspan="2">요일</th>
                                                <th>월요일</th>
                                                <th>화요일</th>
                                                <th>수요일</th>
                                                <th>목요일</th>
                                                <th>금요일</th>
                                                <th>토요일</th>
                                                <th>일요일</th>
                                            </tr>
                                            <tr>
                                                <th colspan="2">근무유형</th>
                                                <th>
                                                    <select class="form-control input-sm">
                                                        <option>근무일</option>
                                                        <option>유급휴일</option>
                                                        <option>무급휴일</option>
                                                        <option>무급휴무일</option>
                                                    </select>
                                                </th>
                                                <th>
                                                    <select class="form-control input-sm">
                                                        <option>근무일</option>
                                                        <option>유급휴일</option>
                                                        <option>무급휴일</option>
                                                        <option>무급휴무일</option>
                                                    </select>
                                                </th>
                                                <th>
                                                    <select class="form-control input-sm">
                                                        <option>근무일</option>
                                                        <option>유급휴일</option>
                                                        <option>무급휴일</option>
                                                        <option>무급휴무일</option>
                                                    </select>
                                                </th>
                                                <th>
                                                    <select class="form-control input-sm">
                                                        <option>근무일</option>
                                                        <option>유급휴일</option>
                                                        <option>무급휴일</option>
                                                        <option>무급휴무일</option>
                                                    </select>
                                                </th>
                                                <th>
                                                    <select class="form-control input-sm">
                                                        <option>근무일</option>
                                                        <option>유급휴일</option>
                                                        <option>무급휴일</option>
                                                        <option>무급휴무일</option>
                                                    </select>
                                                </th>
                                                <th>
                                                    <select class="form-control input-sm">
                                                        <option>근무일</option>
                                                        <option>유급휴일</option>
                                                        <option>무급휴일</option>
                                                        <option>무급휴무일</option>
                                                    </select>
                                                </th>
                                                <th>
                                                    <select class="form-control input-sm">
                                                        <option>근무일</option>
                                                        <option>유급휴일</option>
                                                        <option>무급휴일</option>
                                                        <option>무급휴무일</option>
                                                    </select>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td style="vertical-align: middle;">근무시간</td>
                                                <td>시작<br><br>종료</td>
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
                                                <td>
                                                    <input class="form-control input-sm" type="time">
                                                    <input class="form-control input-sm" type="time">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle;">휴게시간<br>
                                                    <a class="btn btn-sm btn-primary" ng-click="addRowb()">추가</a>
                                                </td>
                                                <td>시작<br><br>종료</td>
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
                                                <td>
                                                    <input class="form-control input-sm" type="time">
                                                    <input class="form-control input-sm" type="time">
                                                </td>
                                            </tr>
                                            <tr ng-repeat="bt in breaktimesb">
                                                <td style="vertical-align: middle;">
                                                    <% bt.name %> <% bt.num %>
                                                    <br>
                                                    <button type="button" class="btn btn-sm btn-warning" ng-click="removeRowb(bt.name)">삭제</button>
                                                </td>
                                                <td>시작<br><br>종료</td>
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
                                                <td>
                                                    <input class="form-control input-sm" type="time">
                                                    <input class="form-control input-sm" type="time">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle;">연장근무</td>
                                                <td>시작<br><br>종료</td>
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
                                                <td>
                                                    <input class="form-control input-sm" type="time">
                                                    <input class="form-control input-sm" type="time">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle;">야간근무</td>
                                                <td>시작<br><br>종료</td>
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
                                                <td>
                                                    <input class="form-control input-sm" type="time">
                                                    <input class="form-control input-sm" type="time">
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="ctype">
                                        <table class="table table-condensed">
                                            <thead>
                                            <tr>
                                                <th colspan="2">요일</th>
                                                <th>월요일</th>
                                                <th>화요일</th>
                                                <th>수요일</th>
                                                <th>목요일</th>
                                                <th>금요일</th>
                                                <th>토요일</th>
                                                <th>일요일</th>
                                            </tr>
                                            <tr>
                                                <th colspan="2">근무유형</th>
                                                <th>
                                                    <select class="form-control input-sm">
                                                        <option>근무일</option>
                                                        <option>유급휴일</option>
                                                        <option>무급휴일</option>
                                                        <option>무급휴무일</option>
                                                    </select>
                                                </th>
                                                <th>
                                                    <select class="form-control input-sm">
                                                        <option>근무일</option>
                                                        <option>유급휴일</option>
                                                        <option>무급휴일</option>
                                                        <option>무급휴무일</option>
                                                    </select>
                                                </th>
                                                <th>
                                                    <select class="form-control input-sm">
                                                        <option>근무일</option>
                                                        <option>유급휴일</option>
                                                        <option>무급휴일</option>
                                                        <option>무급휴무일</option>
                                                    </select>
                                                </th>
                                                <th>
                                                    <select class="form-control input-sm">
                                                        <option>근무일</option>
                                                        <option>유급휴일</option>
                                                        <option>무급휴일</option>
                                                        <option>무급휴무일</option>
                                                    </select>
                                                </th>
                                                <th>
                                                    <select class="form-control input-sm">
                                                        <option>근무일</option>
                                                        <option>유급휴일</option>
                                                        <option>무급휴일</option>
                                                        <option>무급휴무일</option>
                                                    </select>
                                                </th>
                                                <th>
                                                    <select class="form-control input-sm">
                                                        <option>근무일</option>
                                                        <option>유급휴일</option>
                                                        <option>무급휴일</option>
                                                        <option>무급휴무일</option>
                                                    </select>
                                                </th>
                                                <th>
                                                    <select class="form-control input-sm">
                                                        <option>근무일</option>
                                                        <option>유급휴일</option>
                                                        <option>무급휴일</option>
                                                        <option>무급휴무일</option>
                                                    </select>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td style="vertical-align: middle;">근무시간</td>
                                                <td>시작<br><br>종료</td>
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
                                                <td>
                                                    <input class="form-control input-sm" type="time">
                                                    <input class="form-control input-sm" type="time">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle;">휴게시간<br>
                                                    <a class="btn btn-sm btn-primary" ng-click="addRowc()">추가</a>
                                                </td>
                                                <td>시작<br><br>종료</td>
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
                                                <td>
                                                    <input class="form-control input-sm" type="time">
                                                    <input class="form-control input-sm" type="time">
                                                </td>
                                            </tr>
                                            <tr ng-repeat="bt in breaktimesc">
                                                <td style="vertical-align: middle;">
                                                    <% bt.name %> <% bt.num %>
                                                    <br>
                                                    <button type="button" class="btn btn-sm btn-warning" ng-click="removeRowc(bt.name)">삭제</button>
                                                </td>
                                                <td>시작<br><br>종료</td>
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
                                                <td>
                                                    <input class="form-control input-sm" type="time">
                                                    <input class="form-control input-sm" type="time">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle;">연장근무</td>
                                                <td>시작<br><br>종료</td>
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
                                                <td>
                                                    <input class="form-control input-sm" type="time">
                                                    <input class="form-control input-sm" type="time">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle;">야간근무</td>
                                                <td>시작<br><br>종료</td>
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
                                                <td>
                                                    <input class="form-control input-sm" type="time">
                                                    <input class="form-control input-sm" type="time">
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
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

    <script src="{{ asset('assets/js/hnl/addwork.js') }}" type="text/javascript"></script>

@stop