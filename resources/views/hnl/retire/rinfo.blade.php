@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
    퇴직관리 등록
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <meta name="_token" content="{{ csrf_token() }}">
    <style>
        .th-center th{
            text-align:center;
            background-color:grey;
            vertical-align:middle;
            color:white;
        }
        .th-center td{
            text-align:center;
        }
    </style>
@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>퇴직금 현황</h1>
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
                               data-l="true"></i> 퇴직금 현황
                        </h4>
                            <span class="pull-right">
                                <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                            </span>
                    </div>
                    <div class="panel-body">
                        <table class="table table-condensed table-bordered th-center">
                            <thead>
                            <tr>
                                <th>사번</th>
                                <th>성명</th>
                                <th>퇴직일자</th>
                                <th>근속기간</th>
                                <th>평균임금</th>
                                <th>퇴직금</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>9101718</td>
                                <td>김건희</td>
                                <td>2016-02-29</td>
                                <td>456일</td>
                                <td>1,681,319</td>
                                <td>2,123,840</td>
                            </tr>
                            <tr>
                                <td>8402631</td>
                                <td>이명혜</td>
                                <td>2016-02-29</td>
                                <td>412일</td>
                                <td>681,319</td>
                                <td>923,840</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')



@stop
