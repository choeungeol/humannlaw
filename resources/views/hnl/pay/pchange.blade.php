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
        <h1>변동사항 입력</h1>
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
            <div class="col-lg-8">
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
                        <div class="bs-example">
                            <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                                <li class="active">
                                    <a href="#basic" data-toggle="tab">연봉/월급제</a>
                                </li>
                                <li>
                                    <a href="#wday" data-toggle="tab">일당제</a>
                                </li>
                                <li>
                                    <a href="#wtime" data-toggle="tab">시급제</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade active in" id="basic">
                                    <div class="row">
                                        <table class="table table-condensed table-bordered">
                                            <caption>
                                                <i class="livicon" data-name="adjust" data-size="12" data-c="#000" data-hc="#fff" data-loop="true"></i> 지급항목
                                            </caption>
                                            <tr>
                                                <th rowspan="2">통상임금</th><th>기본급</th><th>주휴수당</th><th>직책수당</th><th>근속수당</th><th>직무수당</th><th> - </th>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control input-sm" disabled></td>
                                                <td><input type="text" class="form-control input-sm" disabled></td>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">법정수당</th><th>연장수당</th><th>야간수당</th><th>휴일수당</th><th>휴일연장</th><th>휴일야간</th><th>연차수당</th>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control input-sm" disabled></td>
                                                <td><input type="text" class="form-control input-sm" disabled></td>
                                                <td><input type="text" class="form-control input-sm" disabled></td>
                                                <td><input type="text" class="form-control input-sm" disabled></td>
                                                <td><input type="text" class="form-control input-sm" disabled></td>
                                                <td><input type="text" class="form-control input-sm" disabled></td>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">복리후생</th><th>식대</th><th>차량유지비</th><th>육아수당</th><th>연구활동비</th><th>명절떡값</th><th> - </th>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">약정수당</th><th>상여금</th><th>특별성과금</th><th>특근수당</th><th>특별수당</th><th> - </th><th> - </th>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>총액</th>
                                                <td colspan="6"><input type="text" class="form-control input-sm" disabled></td>
                                            </tr>
                                        </table>
                                        {{--<table class="table table-bordered">
                                            <caption>
                                                <i class="livicon" data-name="adjust" data-size="12" data-c="#000" data-hc="#fff" data-loop="true"></i> 공제항목
                                            </caption>
                                            <tr>
                                                <th>소득세</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <th>지방소득세</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <th>국민연금</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <th>건강보험</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                            </tr>
                                            <tr>
                                                <th>고용보험</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <th>기타공제</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <th>상조회비</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <th>노인 장기요양 보험료</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                            </tr>
                                            <tr>
                                                <th>건강보험료 정산</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <th>정산 소득세</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <th>정산 주민세</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <th></th>
                                                <td></td>
                                            </tr>
                                        </table>
                                        <table class="table table-condensed table-bordered">
                                            <caption>
                                                <i class="livicon" data-name="adjust" data-size="12" data-c="#000" data-hc="#fff" data-loop="true"></i> 근태항목
                                            </caption>
                                            <tr>
                                                <th colspan="5">근태공제금액</th>
                                                <th colspan="5">추가수당금액</th>
                                                <th>휴가·휴직</th>
                                            </tr>
                                            <tr>
                                                <th>지각 공제</th>
                                                <th>조퇴 공제</th>
                                                <th>외출 공제</th>
                                                <th>결근 공제</th>
                                                <th>총 공제금액</th>
                                                <th>추가 연장</th>
                                                <th>추가 야간</th>
                                                <th>추가 휴일</th>
                                                <th>특별 근로</th>
                                                <th>총 추가금액</th>
                                                <th>무급일수</th>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <td><input type="text" class="form-control input-sm"></td>
                                            </tr>
                                        </table>
                                        <table class="table table-condensed table-bordered">
                                            <tr>
                                                <th rowspan="3">근태공제금액</th>
                                                <th>기타 비과세</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <th>생산직 비과세</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <th>국외 근로</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                            </tr>
                                            <tr>
                                                <th>비급여</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <th>소득세 미반영</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <th>미신고비 과세</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                            </tr>
                                            <tr>
                                                <th>육아 보육수당</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <th>연구 활동비</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <th>학자금 비과세</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                            </tr>
                                        </table>--}}
{{--                                        <div class="pull-right">
                                        <a href="{{ URL::to('hnl/pay/pchangec') }}" class="btn btn-primary btn-sm">변동사항 확인</a>
                                        <button class="btn btn-success btn-sm">급여계산</button>
                                        <button class="btn btn-success btn-sm">급여저장</button>
                                        <button class="btn btn-info btn-sm">급여대장</button>
                                        </div>--}}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="wday">
                                    <table class="table table-hover table-bordered">
                                        <caption>
                                            <i class="livicon" data-name="adjust" data-size="12" data-c="#000" data-hc="#fff" data-loop="true"></i> 일당제
                                        </caption>
                                        <tr>
                                            <th>일당</th>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <th>근무일수</th>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <th>총 급여액</th>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <th>일 평균근로시간</th>
                                            <td><input type="text" class="form-control input-sm"></td>
                                            <th>이직사유</th>
                                            <td><input type="text" class="form-control input-sm"></td>
                                        </tr>
                                    </table>
                                    <table class="table table-hover table-bordered">
                                        <tr>
                                            <th>기본급</th>
                                            <th>주휴수당</th>
                                            <th>연장수당</th>
                                            <th>야간수당</th>
                                            <th>휴일수당</th>
                                            <th>휴일연장</th>
                                            <th>휴일야간</th>
                                            <th>연차수당</th>
                                            <th>기타수당</th>
                                            <th>총급여액</th>
                                        </tr>
                                        <tr>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <td><input type="text" class="form-control input-sm"></td>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="wtime">
                                    <table class="table table-condensed table-bordered">
                                        <caption>
                                            <i class="livicon" data-name="adjust" data-size="12" data-c="#000" data-hc="#fff" data-loop="true"></i> 시급제
                                        </caption>
                                        <tr>
                                            <th>시급</th>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <th>근무일수</th>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <th>총 급여액</th>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <th>일 평균 근로시간</th>
                                            <td><input type="text" class="form-control input-sm"></td>
                                            <th>이직사유</th>
                                            <td><input type="text" class="form-control input-sm"></td>
                                        </tr>
                                    </table>
                                    <table class="table table-condensed table-bordered">
                                        <caption>
                                            <i class="livicon" data-name="adjust" data-size="12" data-c="#000" data-hc="#fff" data-loop="true"></i> 1달 동안의 근무시간
                                        </caption>
                                        <tr>
                                            <th>소정근로</th>
                                            <th>연장근로</th>
                                            <th>야간근로</th>
                                            <th>연차시간</th>
                                            <th>주휴시간</th>
                                            <th>총 근무시간</th>
                                        </tr>
                                        <tr>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                        </tr>
                                        <tr>
                                            <th>기본급</th>
                                            <th>연장수당</th>
                                            <th>야간수당</th>
                                            <th>연차수당</th>
                                            <th>주휴수당</th>
                                            <th>기타수당</th>
                                            <th>총 급여액</th>
                                        </tr>
                                        <tr>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                            <td><input type="text" class="form-control input-sm"></td>
                                            <td><input type="text" class="form-control input-sm" disabled></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-primary">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 사원목록
                        </h4>
                            <span class="pull-right">
                                <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                            </span>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover table-bordered">
                            <tr>
                                <td>사번</td><td>이름</td><td>생년월일</td><td>수정</td>
                            </tr>
                            <tr>
                                <td>0001</td>
                                <td>홍길동</td>
                                <td>1988-11-11</td>
                                <td><button class="btn btn-sm btn-default" type="button">수정</button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 공통공제사항
                        </h4>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                    </span>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover table-bordered">
                            <tr>
                                <th>월총지급액</th>
                                <td>3,400,000</td>
                                <th>월비과세액</th>
                                <td>400,000</td>
                                <th>월보수총액</th>
                                <td>3,000,000</td>
                                <th>기준보수월액</th>
                                <td>2,800,000</td>
                                <th>부양가족수</th>
                                <td>2</td>
                            </tr>
                        </table>
                        <table class="table table-hover table-bordered">
                            <tr>
                                <th rowspan="2">법정 공제사항</th>
                                <th>소득세</th>
                                <th>주민세</th>
                                <th>국민연금</th>
                                <th>건강보험</th>
                                <th>장기요양보험</th>
                                <th>고용보험</th>
                            </tr>
                            <tr>
                                <td>67,350</td>
                                <td>6,730</td>
                                <td>126,000</td>
                                <td>91,800</td>
                                <td>6,010</td>
                                <td>19,500</td>
                            </tr>
                            <tr>
                                <th rowspan="2">약정 공제사항</th>
                                <th>축의금</th>
                                <th>가불금</th>
                                <th>부의금</th>
                                <th>전별금</th>
                                <th>연말정산</th>
                                <th>기타</th>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 변동사항확인
                        </h4>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                    </span>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover table-bordered">
                            <tr>
                                <th>사번</th>
                                <th>이름</th>
                                <th>직책수당</th>
                                <th>연장수당</th>
                                <th>휴일수당</th>
                                <th>식대</th>
                                <th>상여금</th>
                                <th>특별성과금</th>
                                <th>축의금</th>
                                <th>가불금</th>
                                <th>연말정산</th>
                            </tr>
                            <tr>
                                <th>1</th>
                                <th>홍길동</th>
                                <th>100,000</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>2</th>
                                <th>고길동</th>
                                <th>100,000</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
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
