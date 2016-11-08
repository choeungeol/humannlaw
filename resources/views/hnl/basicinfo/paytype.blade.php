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
                                                    <td><input type="radio" class="square" name="1"></td>
                                                    <td><input type="radio" class="square" name="1"></td>
                                                    <td><input type="radio" class="square" name="1"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>포괄연장수당</td>
                                                    <td><input type="radio" class="square" name="2"></td>
                                                    <td><input type="radio" class="square" name="2"></td>
                                                    <td><input type="radio" class="square" name="2"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>포괄야간수당</td>
                                                    <td><input type="radio" class="square" name="3"></td>
                                                    <td><input type="radio" class="square" name="3"></td>
                                                    <td><input type="radio" class="square" name="3"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>포괄휴일수당</td>
                                                    <td><input type="radio" class="square" name="4"></td>
                                                    <td><input type="radio" class="square" name="4"></td>
                                                    <td><input type="radio" class="square" name="4"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>포괄연차수당</td>
                                                    <td><input type="radio" class="square" name="5"></td>
                                                    <td><input type="radio" class="square" name="5"></td>
                                                    <td><input type="radio" class="square" name="5"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>포괄기타수당</td>
                                                    <td><input type="radio" class="square" name="6"></td>
                                                    <td><input type="radio" class="square" name="6"></td>
                                                    <td><input type="radio" class="square" name="6"></td>
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
                                                    <td><input type="radio" class="square" name="7"></td>
                                                    <td><input type="radio" class="square" name="7"></td>
                                                    <td><input type="radio" class="square" name="7"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>야간수당</td>
                                                    <td><input type="radio" class="square" name="8"></td>
                                                    <td><input type="radio" class="square" name="8"></td>
                                                    <td><input type="radio" class="square" name="8"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>휴일수당</td>
                                                    <td><input type="radio" class="square" name="9"></td>
                                                    <td><input type="radio" class="square" name="9"></td>
                                                    <td><input type="radio" class="square" name="9"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>휴일연장수당</td>
                                                    <td><input type="radio" class="square" name="10"></td>
                                                    <td><input type="radio" class="square" name="10"></td>
                                                    <td><input type="radio" class="square" name="10"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>휴일야간수당</td>
                                                    <td><input type="radio" class="square" name="11"></td>
                                                    <td><input type="radio" class="square" name="11"></td>
                                                    <td><input type="radio" class="square" name="11"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>연차수당</td>
                                                    <td><input type="radio" class="square" name="12"></td>
                                                    <td><input type="radio" class="square" name="12"></td>
                                                    <td><input type="radio" class="square" name="12"></td>
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
                                                    <td><input type="radio" class="square" name="13"></td>
                                                    <td><input type="radio" class="square" name="13"></td>
                                                    <td><input type="radio" class="square" name="13"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>차량유지비</td>
                                                    <td><input type="radio" class="square" name="14"></td>
                                                    <td><input type="radio" class="square" name="14"></td>
                                                    <td><input type="radio" class="square" name="14"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>육아수당</td>
                                                    <td><input type="radio" class="square" name="15"></td>
                                                    <td><input type="radio" class="square" name="15"></td>
                                                    <td><input type="radio" class="square" name="15"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>교육수당</td>
                                                    <td><input type="radio" class="square" name="16"></td>
                                                    <td><input type="radio" class="square" name="16"></td>
                                                    <td><input type="radio" class="square" name="16"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>생산직야간근로</td>
                                                    <td><input type="radio" class="square" name="17"></td>
                                                    <td><input type="radio" class="square" name="17"></td>
                                                    <td><input type="radio" class="square" name="17"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>벽지수당</td>
                                                    <td><input type="radio" class="square" name="18"></td>
                                                    <td><input type="radio" class="square" name="18"></td>
                                                    <td><input type="radio" class="square" name="18"></td>
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
                                                    <td><input type="radio" class="square" name="19"></td>
                                                    <td><input type="radio" class="square" name="19"></td>
                                                    <td><input type="radio" class="square" name="19"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>특별상여</td>
                                                    <td><input type="radio" class="square" name="20"></td>
                                                    <td><input type="radio" class="square" name="20"></td>
                                                    <td><input type="radio" class="square" name="20"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>인정상여</td>
                                                    <td><input type="radio" class="square" name="21"></td>
                                                    <td><input type="radio" class="square" name="21"></td>
                                                    <td><input type="radio" class="square" name="21"></td>
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
                                                    <td><input type="radio" class="square" name="22"></td>
                                                    <td><input type="radio" class="square" name="22"></td>
                                                    <td><input type="radio" class="square" name="22"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>중간정산퇴직금</td>
                                                    <td><input type="radio" class="square" name="23"></td>
                                                    <td><input type="radio" class="square" name="23"></td>
                                                    <td><input type="radio" class="square" name="23"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>법정퇴직금</td>
                                                    <td><input type="radio" class="square" name="24"></td>
                                                    <td><input type="radio" class="square" name="24"></td>
                                                    <td><input type="radio" class="square" name="24"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>법정외퇴직금</td>
                                                    <td><input type="radio" class="square" name="25"></td>
                                                    <td><input type="radio" class="square" name="25"></td>
                                                    <td><input type="radio" class="square" name="25"></td>
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
                                                    <td><input type="radio" class="square" name="26"></td>
                                                    <td><input type="radio" class="square" name="26"></td>
                                                    <td><input type="radio" class="square" name="26"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>개인연금</td>
                                                    <td><input type="radio" class="square" name="27"></td>
                                                    <td><input type="radio" class="square" name="27"></td>
                                                    <td><input type="radio" class="square" name="27"></td>
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
                                                    <td><input type="radio" class="square" name="28"></td>
                                                    <td><input type="radio" class="square" name="28"></td>
                                                    <td><input type="radio" class="square" name="28"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>직책수당</td>
                                                    <td><input type="radio" class="square" name="29"></td>
                                                    <td><input type="radio" class="square" name="29"></td>
                                                    <td><input type="radio" class="square" name="29"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>물가수당</td>
                                                    <td><input type="radio" class="square" name="30"></td>
                                                    <td><input type="radio" class="square" name="30"></td>
                                                    <td><input type="radio" class="square" name="30"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>조정수당</td>
                                                    <td><input type="radio" class="square" name="31"></td>
                                                    <td><input type="radio" class="square" name="31"></td>
                                                    <td><input type="radio" class="square" name="31"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>자격수당</td>
                                                    <td><input type="radio" class="square" name="32"></td>
                                                    <td><input type="radio" class="square" name="32"></td>
                                                    <td><input type="radio" class="square" name="32"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>위험수당</td>
                                                    <td><input type="radio" class="square" name="33"></td>
                                                    <td><input type="radio" class="square" name="33"></td>
                                                    <td><input type="radio" class="square" name="33"></td>
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
                                                    <td><input type="radio" class="square" name="34"></td>
                                                    <td><input type="radio" class="square" name="34"></td>
                                                    <td><input type="radio" class="square" name="34"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>가족수당</td>
                                                    <td><input type="radio" class="square" name="35"></td>
                                                    <td><input type="radio" class="square" name="35"></td>
                                                    <td><input type="radio" class="square" name="35"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>숙직수당</td>
                                                    <td><input type="radio" class="square" name="36"></td>
                                                    <td><input type="radio" class="square" name="36"></td>
                                                    <td><input type="radio" class="square" name="36"></td>
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
                                                    <td><input type="radio" class="square" name="37"></td>
                                                    <td><input type="radio" class="square" name="37"></td>
                                                    <td><input type="radio" class="square" name="37"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>경조사비</td>
                                                    <td><input type="radio" class="square" name="38"></td>
                                                    <td><input type="radio" class="square" name="38"></td>
                                                    <td><input type="radio" class="square" name="38"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>우리사주</td>
                                                    <td><input type="radio" class="square" name="39"></td>
                                                    <td><input type="radio" class="square" name="39"></td>
                                                    <td><input type="radio" class="square" name="39"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>스톡옵션</td>
                                                    <td><input type="radio" class="square" name="40"></td>
                                                    <td><input type="radio" class="square" name="40"></td>
                                                    <td><input type="radio" class="square" name="40"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>경영성과배분금</td>
                                                    <td><input type="radio" class="square" name="41"></td>
                                                    <td><input type="radio" class="square" name="41"></td>
                                                    <td><input type="radio" class="square" name="41"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>휴업수당</td>
                                                    <td><input type="radio" class="square" name="42"></td>
                                                    <td><input type="radio" class="square" name="42"></td>
                                                    <td><input type="radio" class="square" name="42"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>노조전임자급여</td>
                                                    <td><input type="radio" class="square" name="43"></td>
                                                    <td><input type="radio" class="square" name="43"></td>
                                                    <td><input type="radio" class="square" name="43"></td>
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
                                                    <td><input type="radio" class="square" name="44"></td>
                                                    <td><input type="radio" class="square" name="44"></td>
                                                    <td><input type="radio" class="square" name="44"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>사무용품비</td>
                                                    <td><input type="radio" class="square" name="45"></td>
                                                    <td><input type="radio" class="square" name="45"></td>
                                                    <td><input type="radio" class="square" name="45"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>출장비</td>
                                                    <td><input type="radio" class="square" name="46"></td>
                                                    <td><input type="radio" class="square" name="46"></td>
                                                    <td><input type="radio" class="square" name="46"></td>
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
                                                    <td><input type="radio" class="square" name="47"></td>
                                                    <td><input type="radio" class="square" name="47"></td>
                                                    <td><input type="radio" class="square" name="47"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>육아휴직조정수</td>
                                                    <td><input type="radio" class="square" name="48"></td>
                                                    <td><input type="radio" class="square" name="48"></td>
                                                    <td><input type="radio" class="square" name="48"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>유사산휴가조정</td>
                                                    <td><input type="radio" class="square"></td>
                                                    <td><input type="radio" class="square"></td>
                                                    <td><input type="radio" class="square"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>산전후휴가급여</td>
                                                    <td><input type="radio" class="square" name="49"></td>
                                                    <td><input type="radio" class="square" name="49"></td>
                                                    <td><input type="radio" class="square" name="49"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>육아휴직급여</td>
                                                    <td><input type="radio" class="square" name="50"></td>
                                                    <td><input type="radio" class="square" name="50"></td>
                                                    <td><input type="radio" class="square" name="50"></td>
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
                                                    <td><input type="radio" class="square" name="51"></td>
                                                    <td><input type="radio" class="square" name="51"></td>
                                                    <td><input type="radio" class="square" name="51"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>포괄연장수당</td>
                                                    <td><input type="radio" class="square" name="52"></td>
                                                    <td><input type="radio" class="square" name="52"></td>
                                                    <td><input type="radio" class="square" name="52"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>포괄야간수당</td>
                                                    <td><input type="radio" class="square" name="53"></td>
                                                    <td><input type="radio" class="square" name="53"></td>
                                                    <td><input type="radio" class="square" name="53"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>포괄휴일수당</td>
                                                    <td><input type="radio" class="square" name="54"></td>
                                                    <td><input type="radio" class="square" name="54"></td>
                                                    <td><input type="radio" class="square" name="54"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>포괄연차수당</td>
                                                    <td><input type="radio" class="square" name="55"></td>
                                                    <td><input type="radio" class="square" name="55"></td>
                                                    <td><input type="radio" class="square" name="55"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>포괄기타수당</td>
                                                    <td><input type="radio" class="square" name="56"></td>
                                                    <td><input type="radio" class="square" name="56"></td>
                                                    <td><input type="radio" class="square" name="56"></td>
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
                                                    <td><input type="radio" class="square" name="57"></td>
                                                    <td><input type="radio" class="square" name="57"></td>
                                                    <td><input type="radio" class="square" name="57"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>야간수당</td>
                                                    <td><input type="radio" class="square" name="58"></td>
                                                    <td><input type="radio" class="square" name="58"></td>
                                                    <td><input type="radio" class="square" name="58"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>휴일수당</td>
                                                    <td><input type="radio" class="square" name="59"></td>
                                                    <td><input type="radio" class="square" name="59"></td>
                                                    <td><input type="radio" class="square" name="59"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>휴일연장수당</td>
                                                    <td><input type="radio" class="square" name="60"></td>
                                                    <td><input type="radio" class="square" name="60"></td>
                                                    <td><input type="radio" class="square" name="60"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>휴일야간수당</td>
                                                    <td><input type="radio" class="square" name="61"></td>
                                                    <td><input type="radio" class="square" name="61"></td>
                                                    <td><input type="radio" class="square" name="61"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>연차수당</td>
                                                    <td><input type="radio" class="square" name="62"></td>
                                                    <td><input type="radio" class="square" name="62"></td>
                                                    <td><input type="radio" class="square" name="62"></td>
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
                                                    <td><input type="radio" class="square" name="63"></td>
                                                    <td><input type="radio" class="square" name="63"></td>
                                                    <td><input type="radio" class="square" name="63"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>차량유지비</td>
                                                    <td><input type="radio" class="square" name="64"></td>
                                                    <td><input type="radio" class="square" name="64"></td>
                                                    <td><input type="radio" class="square" name="64"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>육아수당</td>
                                                    <td><input type="radio" class="square" name="65"></td>
                                                    <td><input type="radio" class="square" name="65"></td>
                                                    <td><input type="radio" class="square" name="65"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>교육수당</td>
                                                    <td><input type="radio" class="square" name="66"></td>
                                                    <td><input type="radio" class="square" name="66"></td>
                                                    <td><input type="radio" class="square" name="66"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>생산직야간근로</td>
                                                    <td><input type="radio" class="square" name="67"></td>
                                                    <td><input type="radio" class="square" name="67"></td>
                                                    <td><input type="radio" class="square" name="67"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>벽지수당</td>
                                                    <td><input type="radio" class="square" name="68"></td>
                                                    <td><input type="radio" class="square" name="68"></td>
                                                    <td><input type="radio" class="square" name="68"></td>
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
                                                    <td><input type="radio" class="square" name="69"></td>
                                                    <td><input type="radio" class="square" name="69"></td>
                                                    <td><input type="radio" class="square" name="69"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>특별상여</td>
                                                    <td><input type="radio" class="square" name="70"></td>
                                                    <td><input type="radio" class="square" name="70"></td>
                                                    <td><input type="radio" class="square" name="70"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>인정상여</td>
                                                    <td><input type="radio" class="square" name="71"></td>
                                                    <td><input type="radio" class="square" name="71"></td>
                                                    <td><input type="radio" class="square" name="71"></td>
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
                                                    <td><input type="radio" class="square" name="72"></td>
                                                    <td><input type="radio" class="square" name="72"></td>
                                                    <td><input type="radio" class="square" name="72"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>중간정산퇴직금</td>
                                                    <td><input type="radio" class="square" name="73"></td>
                                                    <td><input type="radio" class="square" name="73"></td>
                                                    <td><input type="radio" class="square" name="73"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>법정퇴직금</td>
                                                    <td><input type="radio" class="square" name="74"></td>
                                                    <td><input type="radio" class="square" name="74"></td>
                                                    <td><input type="radio" class="square" name="74"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>법정외퇴직금</td>
                                                    <td><input type="radio" class="square" name="75"></td>
                                                    <td><input type="radio" class="square" name="75"></td>
                                                    <td><input type="radio" class="square" name="75"></td>
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
                                                    <td><input type="radio" class="square" name="76"></td>
                                                    <td><input type="radio" class="square" name="76"></td>
                                                    <td><input type="radio" class="square" name="76"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>개인연금</td>
                                                    <td><input type="radio" class="square" name="77"></td>
                                                    <td><input type="radio" class="square" name="77"></td>
                                                    <td><input type="radio" class="square" name="77"></td>
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
                                                    <td><input type="radio" class="square" name="78"></td>
                                                    <td><input type="radio" class="square" name="78"></td>
                                                    <td><input type="radio" class="square" name="78"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>직책수당</td>
                                                    <td><input type="radio" class="square" name="79"></td>
                                                    <td><input type="radio" class="square" name="79"></td>
                                                    <td><input type="radio" class="square" name="79"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>물가수당</td>
                                                    <td><input type="radio" class="square" name="80"></td>
                                                    <td><input type="radio" class="square" name="80"></td>
                                                    <td><input type="radio" class="square" name="80"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>조정수당</td>
                                                    <td><input type="radio" class="square" name="81"></td>
                                                    <td><input type="radio" class="square" name="81"></td>
                                                    <td><input type="radio" class="square" name="81"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>자격수당</td>
                                                    <td><input type="radio" class="square" name="82"></td>
                                                    <td><input type="radio" class="square" name="82"></td>
                                                    <td><input type="radio" class="square" name="82"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>위험수당</td>
                                                    <td><input type="radio" class="square" name="83"></td>
                                                    <td><input type="radio" class="square" name="83"></td>
                                                    <td><input type="radio" class="square" name="83"></td>
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
                                                    <td><input type="radio" class="square" name="84"></td>
                                                    <td><input type="radio" class="square" name="84"></td>
                                                    <td><input type="radio" class="square" name="84"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>가족수당</td>
                                                    <td><input type="radio" class="square" name="85"></td>
                                                    <td><input type="radio" class="square" name="85"></td>
                                                    <td><input type="radio" class="square" name="85"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>숙직수당</td>
                                                    <td><input type="radio" class="square" name="86"></td>
                                                    <td><input type="radio" class="square" name="86"></td>
                                                    <td><input type="radio" class="square" name="86"></td>
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
                                                    <td><input type="radio" class="square" name="87"></td>
                                                    <td><input type="radio" class="square" name="87"></td>
                                                    <td><input type="radio" class="square" name="87"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>경조사비</td>
                                                    <td><input type="radio" class="square" name="88"></td>
                                                    <td><input type="radio" class="square" name="88"></td>
                                                    <td><input type="radio" class="square" name="88"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>우리사주</td>
                                                    <td><input type="radio" class="square" name="89"></td>
                                                    <td><input type="radio" class="square" name="89"></td>
                                                    <td><input type="radio" class="square" name="89"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>스톡옵션</td>
                                                    <td><input type="radio" class="square" name="90"></td>
                                                    <td><input type="radio" class="square" name="90"></td>
                                                    <td><input type="radio" class="square" name="90"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>경영성과배분금</td>
                                                    <td><input type="radio" class="square" name="91"></td>
                                                    <td><input type="radio" class="square" name="91"></td>
                                                    <td><input type="radio" class="square" name="91"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>휴업수당</td>
                                                    <td><input type="radio" class="square" name="92"></td>
                                                    <td><input type="radio" class="square" name="92"></td>
                                                    <td><input type="radio" class="square" name="92"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>노조전임자급여</td>
                                                    <td><input type="radio" class="square" name="93"></td>
                                                    <td><input type="radio" class="square" name="93"></td>
                                                    <td><input type="radio" class="square" name="93"></td>
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
                                                    <td><input type="radio" class="square" name="94"></td>
                                                    <td><input type="radio" class="square" name="94"></td>
                                                    <td><input type="radio" class="square" name="94"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>사무용품비</td>
                                                    <td><input type="radio" class="square" name="95"></td>
                                                    <td><input type="radio" class="square" name="95"></td>
                                                    <td><input type="radio" class="square" name="95"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>출장비</td>
                                                    <td><input type="radio" class="square" name="96"></td>
                                                    <td><input type="radio" class="square" name="96"></td>
                                                    <td><input type="radio" class="square" name="96"></td>
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
                                                    <td><input type="radio" class="square" name="97"></td>
                                                    <td><input type="radio" class="square" name="97"></td>
                                                    <td><input type="radio" class="square" name="97"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>육아휴직조정수</td>
                                                    <td><input type="radio" class="square" name="98"></td>
                                                    <td><input type="radio" class="square" name="98"></td>
                                                    <td><input type="radio" class="square" name="98"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>유사산휴가조정</td>
                                                    <td><input type="radio" class="square" name="99"></td>
                                                    <td><input type="radio" class="square" name="99"></td>
                                                    <td><input type="radio" class="square" name="99"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>산전후휴가급여</td>
                                                    <td><input type="radio" class="square" name="100"></td>
                                                    <td><input type="radio" class="square" name="100"></td>
                                                    <td><input type="radio" class="square" name="100"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>육아휴직급여</td>
                                                    <td><input type="radio" class="square" name="101"></td>
                                                    <td><input type="radio" class="square" name="101"></td>
                                                    <td><input type="radio" class="square" name="101"></td>
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
                                                    <td><input type="radio" class="square" name="102"></td>
                                                    <td><input type="radio" class="square" name="102"></td>
                                                    <td><input type="radio" class="square" name="102"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○연장수당</td>
                                                    <td><input type="radio" class="square" name="103"></td>
                                                    <td><input type="radio" class="square" name="103"></td>
                                                    <td><input type="radio" class="square" name="103"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○야간수당</td>
                                                    <td><input type="radio" class="square" name="104"></td>
                                                    <td><input type="radio" class="square" name="104"></td>
                                                    <td><input type="radio" class="square" name="104"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○휴일수당</td>
                                                    <td><input type="radio" class="square" name="105"></td>
                                                    <td><input type="radio" class="square" name="105"></td>
                                                    <td><input type="radio" class="square" name="105"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○휴일연장수당</td>
                                                    <td><input type="radio" class="square" name="106"></td>
                                                    <td><input type="radio" class="square" name="106"></td>
                                                    <td><input type="radio" class="square" name="106"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○휴일야간수당</td>
                                                    <td><input type="radio" class="square" name="108"></td>
                                                    <td><input type="radio" class="square" name="108"></td>
                                                    <td><input type="radio" class="square" name="108"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○주휴일</td>
                                                    <td><input type="radio" class="square" name="107"></td>
                                                    <td><input type="radio" class="square" name="107"></td>
                                                    <td><input type="radio" class="square" name="107"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td class="bold">○기타수당</td>
                                                    <td><input type="radio" class="square" name="109"></td>
                                                    <td><input type="radio" class="square" name="109"></td>
                                                    <td><input type="radio" class="square" name="109"></td>
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
                                                    <td><input type="radio" class="square" name="110"></td>
                                                    <td><input type="radio" class="square" name="110"></td>
                                                    <td><input type="radio" class="square" name="110"></td>
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