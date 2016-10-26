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
                <div class="panel panel-success">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 급여 항목 (지급 항목)
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form method="post" class="form-horizontal">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th><th>지급 명칭</th><th>지급코드</th><th>출력명칭</th><th>비과세 구분</th><th>비과세 한도</th>
                                            <th>급여 지급율 적용</th><th>상여 지급율 적용</th><th>퇴직금 대상</th><th>수습적용율</th><th>급여 계산기준</th>
                                            <th>4대보험 보수총액 포함여부</th><th>근태이용 지급연결</th><th>사용 여부</th><th>출력 여부</th><th>출력 순번</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>기본급</td>
                                            <td>01</td>
                                            <td>기본급</td>
                                            <td></td>
                                            <td>0</td>
                                            <td><input class="custom-checkbox" type="checkbox"></td>
                                            <td><input class="custom-checkbox" type="checkbox"></td>
                                            <td>03개월</td>
                                            <td>80.00</td>
                                            <td>일수계산</td>
                                            <td><input class="custom-checkbox" type="checkbox"><input class="custom-checkbox" type="checkbox"><input class="custom-checkbox" type="checkbox"><input class="custom-checkbox" type="checkbox"></td>
                                            <td></td>
                                            <td><input class="custom-checkbox" type="checkbox"></td>
                                            <td><input class="custom-checkbox" type="checkbox"></td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>직책수당</td>
                                            <td>02</td>
                                            <td>직책수당</td>
                                            <td></td>
                                            <td>0</td>
                                            <td><input class="custom-checkbox" type="checkbox"></td>
                                            <td><input class="custom-checkbox" type="checkbox"></td>
                                            <td>03개월</td>
                                            <td>80.00</td>
                                            <td>일수계산</td>
                                            <td><input class="custom-checkbox" type="checkbox"><input class="custom-checkbox" type="checkbox"><input class="custom-checkbox" type="checkbox"><input class="custom-checkbox" type="checkbox"></td>
                                            <td></td>
                                            <td><input class="custom-checkbox" type="checkbox"></td>
                                            <td><input class="custom-checkbox" type="checkbox"></td>
                                            <td>2</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-success">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 급여 항목 (공제 항목)
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
                                        <th>#</th>
                                        <th>공제명칭</th>
                                        <th>공제코드</th>
                                        <th>출력명칭</th>
                                        <th>사용여부</th>
                                        <th>출력순번</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>소득세</td>
                                        <td>01</td>
                                        <td>소득세</td>
                                        <td><input class="custom-checkbox" type="checkbox"></td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>주민세</td>
                                        <td>02</td>
                                        <td>주민세</td>
                                        <td><input class="custom-checkbox" type="checkbox"></td>
                                        <td>2</td>
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