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
        <h1>직위 부서</h1>
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
            <div class="col-lg-7">
                <div class="panel panel-primary">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 부서 코드
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>실부서 코드</th><th>입력 코드</th><th>명칭</th><th>사용여부</th><th>출력순서</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>0001</td>
                                    <td>01</td>
                                    <td>본사</td>
                                    <td><input class="custom-checkbox" type="checkbox"></td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>0002</td>
                                    <td>02</td>
                                    <td>총무</td>
                                    <td><input class="custom-checkbox" type="checkbox"></td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>0003</td>
                                    <td>03</td>
                                    <td>경영지원</td>
                                    <td><input class="custom-checkbox" type="checkbox"></td>
                                    <td>3</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="panel panel-primary">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 직위 코드
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>코드</th><th>코드명</th><th>사용여부</th><th>출력순서</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>000</td>
                                    <td>회장</td>
                                    <td><input class="custom-checkbox" type="checkbox" id="autoopen"></td>
                                    <td>
                                        1
                                    </td>
                                </tr>
                                <tr>
                                    <td>001</td>
                                    <td>대표</td>
                                    <td><input class="custom-checkbox" type="checkbox" id="autoopen"></td>
                                    <td>
                                        2
                                    </td>
                                </tr>
                                <tr>
                                    <td>000</td>
                                    <td>이사</td>
                                    <td><input class="custom-checkbox" type="checkbox" id="autoopen"></td>
                                    <td>
                                        3
                                    </td>
                                </tr>
                                </tbody>
                            </table>
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