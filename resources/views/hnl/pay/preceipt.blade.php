@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
    급여관리 등록
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
    .th-center th {
        text-align:center;
        background-color:gray;
    }

    .th-center td {
        text-align:center;
    }
    </style>

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
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            급여명세서 (월급제/연봉제)
                        </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                </span>
                    </div>
                    <div class="panel-body no-padding">
                        <div class="col-lg-12">
                            <div class="form-inline" role="form">
                                <div class="form-group">
                                    <label class="sr-only" for="inputEmail">부서</label>
                                    <input type="text" class="form-control" id="inlineEmail" placeholder="부서">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="inputPassword">급여년도/월</label>
                                    <input type="date" class="form-control" id="inlinePassword" placeholder="급여년도">
                                </div>
                                <button type="button" class="btn btn-primary mar-top">검색</button>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <table class="table table-condensed table-hover table-bordered text-center th-center">
                                <caption>
                                    <h4>전체출력</h4>
                                </caption>
                                <thead>
                                <tr>
                                    <th>연도</th>
                                    <th>월</th>
                                    <th>등록일시</th>
                                    <th>등록자수</th>
                                    <th>평균기본시급</th>
                                    <th>평균통상시급</th>
                                    <th>평균기본월급</th>
                                    <th>총임금계</th>
                                    <th>총공제계</th>
                                    <th>총지급액</th>
                                    <th>급여명세서</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>2016년</td>
                                    <td>08월</td>
                                    <td>2016-08-05 13:41:53</td>
                                    <td>4명</td>
                                    <td>7,830</td>
                                    <td>45,569</td>
                                    <td>2,616,049</td>
                                    <td>15,109,342</td>
                                    <td>2,097,870</td>
                                    <td>13,011,472</td>
                                    <td><button type="button" class="btn btn-default btn-sm">전체출력</button></td>
                                </tr>
                                <tr>
                                    <td>2016년</td>
                                    <td>08월</td>
                                    <td>2016-08-04 12:58:35</td>
                                    <td>1명</td>
                                    <td>0</td>
                                    <td>150,000</td>
                                    <td>3,918,750</td>
                                    <td>20,049,000</td>
                                    <td>1,680,840</td>
                                    <td>18,368,160</td>
                                    <td><button type="button" class="btn btn-default btn-sm">개별출력</button></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-12">
                            <table class="table table-condensed table-hover table-bordered text-center th-center">
                                <caption>
                                    <h4>개별출력</h4>
                                </caption>
                                <thead>
                                <tr>
                                    <th><input type="checkbox" class="square" style="margin-bottom:0px;"></th>
                                    <th>연도</th>
                                    <th>월</th>
                                    <th>사번</th>
                                    <th>이름</th>
                                    <th>채용형태</th>
                                    <th>급여유형</th>
                                    <th>직위</th>
                                    <th>호봉</th>
                                    <th>기본시급</th>
                                    <th>통상시급</th>
                                    <th>기본월급</th>
                                    <th>결정임금</th>
                                    <th>급여명세서</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="checkbox" class="square" style="margin-bottom:0px;"></td>
                                    <td>2016년</td>
                                    <td>08월</td>
                                    <td>0002</td>
                                    <td><a href="#" data-toggle="modal" data-target="#modal-1">김명화</a></td>
                                    <td>정규직</td>
                                    <td>월급제</td>
                                    <td>과장</td>
                                    <td>ㅡ</td>
                                    <td>11,209</td>
                                    <td>11,209</td>
                                    <td>2,342,612</td>
                                    <td>3,000,020</td>
                                    <td><button type="button" class="btn btn-default btn-sm">급여명세서</button></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="square" style="margin-bottom:0px;"></td>
                                    <td>2016년</td>
                                    <td>08월</td>
                                    <td>0003</td>
                                    <td>김재정</td>
                                    <td>정규직</td>
                                    <td>월급제</td>
                                    <td>ㅡ</td>
                                    <td>ㅡ</td>
                                    <td>12,637</td>
                                    <td>13,594</td>
                                    <td>2,641,080</td>
                                    <td>4,577,637</td>
                                    <td><button type="button" class="btn btn-default btn-sm">급여명세서</button></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade modal-fade-in-scale-up" tabindex="-1" id="modal-1" role="dialog" aria-labelledby="modalLabelfade" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title" id="modalLabelfade">(김명화) 2016년 08월 급여내역</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table table-condensed table-bordered text-center th-center">
                            <tr>
                                <th>성명</th>
                                <th>직책</th>
                                <th>입사일</th>
                            </tr>
                            <tr>
                                <td>김명화</td>
                                <td>과장</td>
                                <td>2016년 5월 1일 </td>
                            </tr>
                        </table>
                        <table class="table table-condensed table-bordered th-center">
                            <caption class="text-center">
                                <h4>급 여 내 역</h4>
                            </caption>
                            <tr>
                                <th rowspan="2" style="vertical-align: middle">기본급</th>
                                <td>통상시급</td>
                                <td>11,208</td>
                                <td>원</td>
                                <th rowspan="2" style="vertical-align: middle">기본급</th>
                                <th rowspan="2" style="vertical-align: middle">2,342,612</th>
                                <th rowspan="2" style="vertical-align: middle">원</th>
                            </tr>
                            <tr>
                                <td>기본시급</td>
                                <td>11,209</td>
                                <td>원</td>
                            </tr>
                            <tr>
                                <th rowspan="4" style="vertical-align: middle">통상임금수당</th>
                                <td>직책수당</td>
                                <td>0</td>
                                <td>원</td>
                                <td>조정수당</td>
                                <td>0</td>
                                <td>원</td>
                            </tr>
                            <tr>
                                <td>근속수당</td>
                                <td>0</td>
                                <td>원</td>
                                <td>ㅡ</td>
                                <td>ㅡ</td>
                                <td>원</td>
                            </tr>
                            <tr>
                                <td>특별수당</td>
                                <td>0</td>
                                <td>원</td>
                                <td>ㅡ</td>
                                <td>ㅡ</td>
                                <td>원</td>
                            </tr>
                            <tr>
                                <td>자격수당</td>
                                <td>0</td>
                                <td>원</td>
                                <th>소계</th>
                                <th>0</th>
                                <th>원</th>
                            </tr>
                            <tr>
                                <th rowspan="4" style="vertical-align: middle">법정수당</th>
                                <td>기본연장</td>
                                <td>365,189</td>
                                <td>원</td>
                                <td>추가연장</td>
                                <td>0</td>
                                <td>원</td>
                            </tr>
                            <tr>
                                <td>기본야간</td>
                                <td>0</td>
                                <td>원</td>
                                <td>추가야간</td>
                                <td>0</td>
                                <td>원</td>
                            </tr>
                            <tr>
                                <td>기본휴일</td>
                                <td>292,219</td>
                                <td>원</td>
                                <td>추가휴일</td>
                                <td>0</td>
                                <td>원</td>
                            </tr>
                            <tr>
                                <td>연차수당</td>
                                <td>0</td>
                                <td>원</td>
                                <th>소계</th>
                                <th>657,408</th>
                                <th>원</th>
                            </tr>
                            <tr>
                                <th rowspan="2" style="vertical-align: middle">기타수당(비과세)</th>
                                <td>차량유지</td>
                                <td>0</td>
                                <td>원</td>
                                <td>자녀보육</td>
                                <td>0</td>
                                <td>원</td>
                            </tr>
                            <tr>
                                <td>식대</td>
                                <td>0</td>
                                <td>원</td>
                                <td>연구활동비</td>
                                <td>0</td>
                                <td>원</td>
                            </tr>
                            <tr>
                                <th rowspan="2" style="vertical-align: middle">기타수당(과세)</th>
                                <td>조정수당</td>
                                <td>0</td>
                                <td>원</td>
                                <td>기타2</td>
                                <td>0</td>
                                <td>원</td>
                            </tr>
                            <tr>
                                <td>기타1</td>
                                <td>0</td>
                                <td>원</td>
                                <td>기타3</td>
                                <td>0</td>
                                <td>원</td>
                            </tr>
                            <tr>
                                <th rowspan="2" style="vertical-align: middle">기타수당(기타)</th>
                                <td>ㅡ</td>
                                <td>ㅡ</td>
                                <td>원</td>
                                <td>기타11</td>
                                <td>기타11</td>
                                <td>원</td>
                            </tr>
                            <tr>
                                <td>ㅡ</td>
                                <td>ㅡ</td>
                                <td>원</td>
                                <th>소계</th>
                                <th>0</th>
                                <th>원</th>
                            </tr>
                            <tr>
                                <th colspan="5">급여총액</th>
                                <th>3,000,020</th>
                                <th>원</th>
                            </tr>
                        </table>
                        <table class="table table-condensed table-bordered text-center th-center">
                            <caption>
                                <h4 class="text-center">공 제 내 역</h4>
                            </caption>
                            <tr>
                                <th rowspan="2" style="vertical-align: middle">4대보험</th>
                                <td>국민연금</td>
                                <td>135,000</td>
                                <td>원</td>
                                <td>고용보험</td>
                                <td>19,500</td>
                                <td>원</td>
                            </tr>
                            <tr>
                                <td>건강보험</td>
                                <td>91,050</td>
                                <td>원</td>
                                <td>장기요양</td>
                                <td>5,960</td>
                                <td>원</td>
                            </tr>
                            <tr>
                                <th>세금</th>
                                <td>소득세</td>
                                <td>84,850</td>
                                <td>원</td>
                                <td>주민세</td>
                                <td>8,480</td>
                                <td>원</td>
                            </tr>
                            <tr>
                                <th rowspan="3" style="vertical-align: middle">기타공제</th>
                                <td>가불</td>
                                <td>0</td>
                                <td>원</td>
                                <td>기타공제</td>
                                <td>0</td>
                                <td>원</td>
                            </tr>
                            <tr>
                                <td>근태공제</td>
                                <td>0</td>
                                <td>원</td>
                                <td>ㅡ</td>
                                <td>ㅡ</td>
                                <td>원</td>
                            </tr>
                            <tr>
                                <td>ㅡ</td>
                                <td>ㅡ</td>
                                <td>원</td>
                                <td>ㅡ</td>
                                <td>ㅡ</td>
                                <td>원</td>
                            </tr>
                            <tr>
                                <th colspan="5" class="text-center">공제총액</th>
                                <th>344,840</th>
                                <th>원</th>
                            </tr>
                            <tr>
                                <th colspan="5" class="text-center">실 지급총액</th>
                                <th>2,655,180</th>
                                <th>원</th>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-primary" data-dismiss="modal">Close me!</button>
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
