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
            <div class="col-lg-12">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> 급여기준
                        </h3>
                            <span class="pull-right">
                                <i class="fa fa-fw fa-chevron-up clickable"></i>
                                <i class="fa fa-fw fa-times removepanel clickable"></i>
                            </span>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form method="post" class="form-horizontal">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="first_Name">지급년월 설정:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control input-sm" id="first_Name" placeholder="지급년월 설정">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="input_Email">지급일 설정:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control input-sm" id="input_Email" placeholder="지급일 설정">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">일할 계산방법:</label>
                                        <div class="col-md-9">
                                            <select class="form-control input-sm">
                                                <option>월일수</option>
                                                <option>30일</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="last_Name">상여 지급기준:</label>
                                        <div class="col-md-9">
                                            <select class="form-control input-sm">
                                                <option>기본급</option>
                                                <option>정액제</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="phone_Number">대상월 상여 지급율:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control input-sm" id="phone_Number" placeholder="대상월 상여 지급율">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="confirm_Password">최근 불러오기: </label>
                                        <div class="col-md-9">
                                            <button type="button" class="btn btn-default btn-sm">최근 불러오기</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
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
                                    <a href="#wday" data-toggle="tab">일급제</a>
                                </li>
                                <li>
                                    <a href="#wtime" data-toggle="tab">시급제</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade active in" id="basic">
                                    <div class="row">
                                        <table class="table table-bordered">
                                            <caption>
                                                <i class="livicon" data-name="adjust" data-size="12" data-c="#000" data-hc="#fff" data-loop="true"></i> 지급항목
                                            </caption>
                                            <tr>
                                                <th>기본급여</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <th>식대</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <th>자가운전보조비</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <th>직무수당</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                            </tr>
                                            <tr>
                                                <th>휴일수당</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <th>시간외 근무수당</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <th>성과급</th>
                                                <td><input type="text" class="form-control input-sm"></td>
                                                <th></th>
                                                <td></td>
                                            </tr>
                                        </table>
                                        <table class="table table-bordered">
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
                                        </table>
                                        <div class="pull-right">
                                        <a href="{{ URL::to('hnl/pay/pchangec') }}" class="btn btn-primary btn-sm">변동사항 확인</a>
                                        <button class="btn btn-success btn-sm">급여계산</button>
                                        <button class="btn btn-success btn-sm">급여저장</button>
                                        <button class="btn btn-info btn-sm">급여대장</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="wday">
                                    <table class="table table-condensed table-bordered">
                                        <caption>
                                            <i class="livicon" data-name="adjust" data-size="12" data-c="#000" data-hc="#fff" data-loop="true"></i> 일급제
                                        </caption>
                                        <thead>
                                        <tr>
                                            <th>순번</th>
                                            <th>이름</th>
                                            <th>주민번호</th>
                                            <th>주소</th>
                                            <th>이직사유</th>
                                            <th>일당</th>
                                            <th>일 평균 근로시간</th>
                                            <th>근로일 수</th>
                                            <th>임금총액</th>
                                            <th>소득세</th>
                                            <th>주민세</th>
                                            <th>국민연금</th>
                                            <th>건강보험</th>
                                            <th>장기요양</th>
                                            <th>고용보험</th>
                                            <th>기타공제</th>
                                            <th>차인지급액</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @for ($i = 1; $i < 5; $i++)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>홍길동</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>150,000</td>
                                                <td>급여정보</td>
                                                <td>20</td>
                                                <td>3,000,000</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        @endfor
                                        </tbody>
                                    </table>
                                    <table class="table table-condensed table-bordered">
                                        <caption>
                                            <i class="livicon" data-name="adjust" data-size="12" data-c="#000" data-hc="#fff" data-loop="true"></i> 급여구성항목
                                        </caption>
                                        <thead>
                                        <tr>
                                            <th>순번</th>
                                            <th>이름</th>
                                            <th>일당</th>
                                            <th>일 평균 근로시간</th>
                                            <th>근로일수</th>
                                            <th>임금총액</th>
                                            <th>기본급</th>
                                            <th>연장수당</th>
                                            <th>야간수당</th>
                                            <th>휴일수당</th>
                                            <th>휴일연장</th>
                                            <th>휴일야간</th>
                                            <th>연차수당</th>
                                            <th>기타수당</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @for ($i = 1; $i < 5; $i++)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>홍길동</td>
                                                <td>150,000</td>
                                                <td>8</td>
                                                <td>20</td>
                                                <td>3,000,000</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><input type="text" class="form-control input-sm"></td>
                                            </tr>
                                        @endfor
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="wtime">
                                    <table class="table table-condensed table-bordered">
                                        <caption>
                                            <i class="livicon" data-name="adjust" data-size="12" data-c="#000" data-hc="#fff" data-loop="true"></i> 일용직
                                        </caption>
                                        <thead>
                                        <tr>
                                            <th>순번</th>
                                            <th>이름</th>
                                            <th>주민번호</th>
                                            <th>주소</th>
                                            <th>이직사유</th>
                                            <th>시급</th>
                                            <th>일 평균 근로시간</th>
                                            <th>근로일 수</th>
                                            <th>임금총액</th>
                                            <th>소득세</th>
                                            <th>주민세</th>
                                            <th>국민연금</th>
                                            <th>건강보험</th>
                                            <th>장기요양</th>
                                            <th>고용보험</th>
                                            <th>기타공제</th>
                                            <th>차인지급액</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @for ($i = 1; $i < 5; $i++)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>홍길동</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>7,000</td>
                                                <td>급여정보</td>
                                                <td>20</td>
                                                <td>3,000,000</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        @endfor
                                        </tbody>
                                    </table>
                                    <table class="table table-condensed table-bordered">
                                        <caption>
                                            <i class="livicon" data-name="adjust" data-size="12" data-c="#000" data-hc="#fff" data-loop="true"></i> 일반직원
                                        </caption>
                                        <thead>
                                        <tr>
                                            <th>순번</th>
                                            <th>이름</th>
                                            <th>시급</th>
                                            <th>총 근로시간</th>
                                            <th>소정 근로시간</th>
                                            <th>연장 근로시간</th>
                                            <th>야간 근로시간</th>
                                            <th>주휴 부여시간</th>
                                            <th>연차 부여시간</th>
                                            <th>임금총액</th>
                                            <th>기본급</th>
                                            <th>연장수당</th>
                                            <th>야간수당</th>
                                            <th>연차수당</th>
                                            <th>기타수당</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @for ($i = 1; $i < 5; $i++)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>홍길동</td>
                                                <td>7,000</td>
                                                <td>244</td>
                                                <td>174</td>
                                                <td>25</td>
                                                <td>5</td>
                                                <td>32</td>
                                                <td>8</td>
                                                <td>1,708,000</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        @endfor
                                        </tbody>
                                    </table>
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



@stop
