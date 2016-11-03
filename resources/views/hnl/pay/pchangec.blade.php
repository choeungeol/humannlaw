@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
    급여관리 등록
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <meta name="_token" content="{{ csrf_token() }}">

@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Welcome to GOOD LABOR</h1>
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
                               data-l="true"></i> 변동사항입력
                        </h4>
                            <span class="pull-right">
                                <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                            </span>
                    </div>
                    <div class="panel-body">
                        <table class="table table-condensed table-hover">
                            <thead>
                            <tr>
                                <th>지급년월</th>
                                <th>급여구분</th>
                                <th>사번</th>
                                <th>성명</th>
                                <th>기본급여</th>
                                <th>식대</th>
                                <th>자가운전보조비</th>
                                <th>직무수당</th>
                                <th>휴일수당</th>
                                <th>시간외근무수당</th>
                                <th>성과급</th>
                                <th>소득세</th>
                                <th>지방소득세</th>
                                <th>국민연금</th>
                                <th>건강보험</th>
                                <th>고용보험</th>
                                <th>기타공제</th>
                                <th>상조회비</th>
                                <th>노인장기요양보험료</th>
                                <th>건강보험료정산</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>2015-01</td>
                                <td>급여</td>
                                <td>840002</td>
                                <td>이정효</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>181760</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="col-lg-12">
                            <a class="btn btn-primary btn-sm col-lg-12" href="javascript:history.back()">돌아가기</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')



@stop
