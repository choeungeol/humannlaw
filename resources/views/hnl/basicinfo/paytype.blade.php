@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
    기본정보 등록
    @parent
@stop

{{-- page level styles --}}
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

{{-- Page content --}}
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
    <section class="content">
        <div class="row">
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
                                <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                                    <li class="active">
                                        <a href="#cass" data-toggle="tab">포괄연봉제</a>
                                    </li>
                                    <li>
                                        <a href="#cmps" data-toggle="tab">포괄월급제</a>
                                    </li>
                                    <li>
                                        <a href="#dp" data-toggle="tab">일당제</a>
                                    </li>
                                    <li>
                                        <a href="#tp" data-toggle="tab">시급제</a>
                                    </li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade active in" id="cass">
                                        <div class="col-lg-6">
                                            <table class="table table-condensed table-bordered table-th">
                                                <caption><h4>기초수당</h4></caption>
                                                <tr>
                                                    <th rowspan="2"></th>
                                                    <th rowspan="2">구분</th>
                                                    <th colspan="3">노동법</th>
                                                    <th rowspan="2">사용여부</th>
                                                    <th rowspan="2">연결명</th>
                                                    <th rowspan="2">연결코드</th>
                                                </tr>
                                                <tr>
                                                    <th>통상</th>
                                                    <th>평균</th>
                                                    <th>기타</th>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○포괄</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>포괄기본수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>포괄연장수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>포괄야간수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>포괄휴일수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>포괄연차수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>포괄기타수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○법정수당</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>연장수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>야간수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>휴일수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>휴일연장수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>휴일야간수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>연차수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○비과세가능수당</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>식대</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>차량유지비</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>육아수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>교육수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>생산직야간근로</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>벽지수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○상여금</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>정기상여</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>특별상여</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>인정상여</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○퇴직소득</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>해고예고수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>중간정산퇴직금</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>법정퇴직금</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>법정외퇴직금</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○연금</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>퇴직연금</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>개인연금</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-lg-6">
                                            <table class="table table-condensed table-bordered table-th">
                                                <caption><h4>세부수당</h4></caption>
                                                <thead>
                                                <tr>
                                                    <th rowspan="2"></th>
                                                    <th rowspan="2">구분</th>
                                                    <th colspan="3">노동법</th>
                                                    <th rowspan="2">사용여부</th>
                                                    <th rowspan="2">연결명</th>
                                                    <th rowspan="2">연결코드</th>
                                                </tr>
                                                <tr>
                                                    <th>통상</th>
                                                    <th>평균</th>
                                                    <th>기타</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○통상수당</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>직무수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>직책수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>물가수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>조정수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>자격수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>위험수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○평균수당</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>승무수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>가족수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>숙직수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○기타금품</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>사회보험대납료</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>경조사비</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>우리사주</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>스톡옵션</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>경영성과배분금</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>휴업수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>노조전임자급여</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○기타소득</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>피복비</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>사무용품비</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>출장비</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○휴가휴직수당</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>산전후휴가수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>육아휴직조정수</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>유사산휴가조정</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>산전후휴가급여</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>육아휴직급여</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="cmps">
                                        <div class="col-lg-6">
                                            <table class="table table-condensed table-bordered table-th">
                                                <caption><h4>기초수당</h4></caption>
                                                <tr>
                                                    <th rowspan="2"></th>
                                                    <th rowspan="2">구분</th>
                                                    <th colspan="3">노동법</th>
                                                    <th rowspan="2">사용여부</th>
                                                    <th rowspan="2">연결명</th>
                                                    <th rowspan="2">연결코드</th>
                                                </tr>
                                                <tr>
                                                    <th>통상</th>
                                                    <th>평균</th>
                                                    <th>기타</th>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○포괄</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>포괄기본수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>포괄연장수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>포괄야간수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>포괄휴일수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>포괄연차수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>포괄기타수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○법정수당</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>연장수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>야간수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>휴일수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>휴일연장수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>휴일야간수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>연차수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○비과세가능수당</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>식대</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>차량유지비</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>육아수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>교육수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>생산직야간근로</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>벽지수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○상여금</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>정기상여</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>특별상여</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>인정상여</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○퇴직소득</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>해고예고수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>중간정산퇴직금</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>법정퇴직금</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>법정외퇴직금</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○연금</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>퇴직연금</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>개인연금</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-lg-6">
                                            <table class="table table-condensed table-bordered table-th">
                                                <caption><h4>세부수당</h4></caption>
                                                <thead>
                                                <tr>
                                                    <th rowspan="2"></th>
                                                    <th rowspan="2">구분</th>
                                                    <th colspan="3">노동법</th>
                                                    <th rowspan="2">사용여부</th>
                                                    <th rowspan="2">연결명</th>
                                                    <th rowspan="2">연결코드</th>
                                                </tr>
                                                <tr>
                                                    <th>통상</th>
                                                    <th>평균</th>
                                                    <th>기타</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○통상수당</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>직무수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>직책수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>물가수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>조정수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>자격수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>위험수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○평균수당</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>승무수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>가족수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>숙직수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○기타금품</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>사회보험대납료</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>경조사비</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>우리사주</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>스톡옵션</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>경영성과배분금</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>휴업수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>노조전임자급여</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○기타소득</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>피복비</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>사무용품비</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>출장비</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○휴가휴직수당</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>산전후휴가수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>육아휴직조정수</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>유사산휴가조정</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>산전후휴가급여</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>육아휴직급여</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="dp">
                                        <div class="col-lg-6">
                                            <table class="table table-condensed table-bordered table-th">
                                                <thead>
                                                <tr>
                                                    <th rowspan="2"></th>
                                                    <th rowspan="2">구분</th>
                                                    <th colspan="3">노동법</th>
                                                    <th rowspan="2">사용여부</th>
                                                    <th rowspan="2">연결명</th>
                                                    <th rowspan="2">연결코드</th>
                                                </tr>
                                                <tr>
                                                    <th>통상</th>
                                                    <th>평균</th>
                                                    <th>기타</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○기본급</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○연장수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○야간수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○휴일수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○휴일연장수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○휴일야간수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○주휴일</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○기타수당</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tp">
                                        <div class="col-lg-6">
                                            <table class="table table-condensed table-bordered table-th">
                                                <thead>
                                                <tr>
                                                    <th rowspan="2"></th>
                                                    <th rowspan="2">구분</th>
                                                    <th colspan="3">노동법</th>
                                                    <th rowspan="2">사용여부</th>
                                                    <th rowspan="2">연결명</th>
                                                    <th rowspan="2">연결코드</th>
                                                </tr>
                                                <tr>
                                                    <th>통상</th>
                                                    <th>평균</th>
                                                    <th>기타</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○기본급</td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td><input type="checkbox" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

@stop