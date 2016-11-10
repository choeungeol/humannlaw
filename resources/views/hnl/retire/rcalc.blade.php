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
        }
    </style>

@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>퇴직금 계산</h1>
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
                               data-l="true"></i> 퇴직금계산
                        </h4>
                            <span class="pull-right">
                                <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                            </span>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <div class="row">
                                <form method="post" class="form-horizontal">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="first_Name">개인별 계산:</label>
                                            <div class="col-md-9">
                                                <div class="form-inline" role="form">
                                                        <input type="password" class="form-control" id="inlinePassword" placeholder="사원번호">
                                                        <input type="email" class="form-control" id="inlineEmail" placeholder="성명">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="col-xs-3 control-label" for="inputSuccess">기준일(중간정산일):</label>
                                            <div class="col-lg-9">
                                                <input type="text" id="inputSuccess" class="form-control" placeholder="중간정산일">
                                                <span class="help-block">※퇴직금 중도정산(중도정산 초기화 포함)일 경우만 입력</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="last_Name">퇴직금 대상월:</label>
                                            <div class="col-md-9">
                                                <div class="form-inline">
                                                <select class="form-control">
                                                    <option></option>
                                                    <option>2016-11-01</option>
                                                    <option></option>
                                                </select>
                                                    <button class="btn btn-sm btn-default">초기화</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="col-xs-3 control-label" for="inputSuccess">평균임금(귀속)기준일:</label>
                                            <div class="col-lg-9">
                                                <input type="text" id="inputSuccess" class="form-control" placeholder="귀속">
                                                <span class="help-block">※퇴직금 중도정산(중도정산 초기화 포함)일 경우만 입력</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <table class="table table-condensed table-bordered th-center">
                                            <tr>
                                                <th>입사일자</th>
                                                <td>2016-05-05</td>
                                                <th>퇴사일자</th>
                                                <td>2016-11-04</td>
                                                <th>근속기간</th>
                                                <td>6개월</td>
                                            </tr>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="panel panel-primary">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 급여내역
                        </h4>
                            <span class="pull-right">
                                <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                            </span>
                    </div>
                    <div class="panel-body">
                        <table class="table table-condensed table-bordered th-center">
                            <tr>
                                <th rowspan="2">산정기간</th>
                                <td><input type="text" class="form-control input-sm"></td>
                                <td><input type="text" class="form-control input-sm"></td>
                                <td><input type="text" class="form-control input-sm"></td>
                                <td><input type="text" class="form-control input-sm"></td>
                                <th rowspan="2">계</th>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control input-sm"></td>
                                <td><input type="text" class="form-control input-sm"></td>
                                <td><input type="text" class="form-control input-sm"></td>
                                <td><input type="text" class="form-control input-sm"></td>
                            </tr>
                            <tr>
                                <th>산정일수</th>
                                <td><input type="text" class="form-control input-sm"></td>
                                <td><input type="text" class="form-control input-sm"></td>
                                <td><input type="text" class="form-control input-sm"></td>
                                <td><input type="text" class="form-control input-sm"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="6"></td>
                            </tr>
                            <tr>
                                <th>총계</th>
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
            <div class="col-lg-4">
                <div class="panel panel-primary">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 상여내역
                        </h4>
                            <span class="pull-right">
                                <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                            </span>
                    </div>
                    <div class="panel-body">
                        <table class="table table-condensed table-bordered th-center">
                            <tr>
                                <th>지급년월</th>
                                <th>지급명</th>
                                <th>금액</th>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control input-sm"></td>
                                <td><input type="text" class="form-control input-sm"></td>
                                <td><input type="text" class="form-control input-sm"></td>
                            </tr>
                            <tr>
                                <th colspan="2">상여금 계(3개월) </th>
                                <td><input type="text" class="form-control input-sm"></td>
                            </tr>
                            <tr>
                                <th  colspan="2">연(월)차 계(3개월)</th>
                                <td><input type="text" class="form-control input-sm"></td>
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
                               data-l="true"></i> 퇴직금 내역
                        </h4>
                            <span class="pull-right">
                                <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                            </span>
                    </div>
                    <div class="panel-body">
                        <table class="table table-condensed table-bordered th-center">
                            <tr>
                                <th>3개월 총계</th>
                                <td></td>
                                <th>평균임금</th>
                                <td></td>
                                <th>통상임금</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>퇴직위로금</th>
                                <td></td>
                                <th>해고예고수당</th>
                                <td></td>
                                <th>퇴직금</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>퇴직소득세</th>
                                <td></td>
                                <th>퇴직지방소득세</th>
                                <td></td>
                                <th>퇴직전환금</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>퇴직보험금</th>
                                <td></td>
                                <th>공제금1</th>
                                <td></td>
                                <th>공제금2</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>공제금3</th>
                                <td></td>
                                <th>공제금4</th>
                                <td></td>
                                <th>실지급액</th>
                                <td></td>
                            </tr>
                        </table>
                        <table class="table table-condensed table-bordered th-center">
                            <tr>
                                <th>퇴직금 구분</th>
                                <td>
                                    <select class="form-control">
                                        <option>퇴직금 계산</option>
                                    </select>
                                </td>
                                <th>지급년월일</th>
                                <td><input type="text" class="form-control input-sm"></td>
                                <th>세액공제 대상여부</th>
                                <td>
                                    <div class="form-inline">
                                        <input type="text" class="form-control input-sm" disabled>
                                        <button type="button" class="btn btn-sm btn-default"> + 처 리</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>퇴직사유</th>
                                <td>
                                    <select class="form-control">
                                        <option>   </option>
                                    </select>
                                </td>
                                <th></th>
                                <td></td>
                                <th></th>
                                <td></td>
                            </tr>
                        </table>
                        <table class="table table-condensed table-bordered th-center">
                            <tr>
                                <th colspan="8"><h4>퇴직 계산 조정</h4></th>
                            </tr>
                            <tr>
                                <th colspan="3">퇴직금 기간조정</th>
                                <td><input type="text" class="form-control input-sm">일</td>
                                <th colspan="3">퇴직소득 중복일수</th>
                                <td><input type="text" class="form-control input-sm">개월</td>
                            </tr>
                            <tr>
                                <th>퇴직위로금</th>
                                <td><input type="text" class="form-control input-sm"></td>
                                <th>해고예고수당</th>
                                <td><input type="text" class="form-control input-sm"></td>
                                <th>상여금</th>
                                <td><input type="text" class="form-control input-sm"></td>
                                <th>연월차</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>공제금1</th>
                                <td><input type="text" class="form-control input-sm"></td>
                                <th>공제금2</th>
                                <td><input type="text" class="form-control input-sm"></td>
                                <th>공제금3</th>
                                <td><input type="text" class="form-control input-sm"></td>
                                <th>공제금4</th>
                                <td><input type="text" class="form-control input-sm"></td>
                            </tr>
                            <tr>
                                <th>퇴직보험금</th>
                                <td><input type="text" class="form-control input-sm"></td>
                                <th></th>
                                <td></td>
                                <th>통상임금</th>
                                <td><input type="text" class="form-control input-sm"></td>
                                <th>퇴직금</th>
                                <td><input type="text" class="form-control input-sm"></td>
                            </tr>
                        </table>
                        <table class="table table-condensed table-bordered th-center">
                            <tr>
                                <th colspan="4"><h4>과세 이언</h4></th>
                            </tr>
                            <tr>
                                <th>과세이연 금액</th>
                                <td><input type="text" class="form-control input-sm">일</td>
                                <th>종전 퇴직급여액 포함여부</th>
                                <td>
                                    <select class="form-control">
                                        <option>   </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>퇴직연금 사업자명</th>
                                <td><input type="text" class="form-control input-sm"></td>
                                <th>사업자 등록번호</th>
                                <td><input type="text" class="form-control input-sm"></td>
                            </tr>
                            <tr>
                                <th>계좌번호</th>
                                <td><input type="text" class="form-control input-sm"></td>
                                <th>이전(이체)일</th>
                                <td><input type="text" class="form-control input-sm"></td>
                            </tr>
                            <tr>
                                <th>만기일</th>
                                <td><input type="text" class="form-control input-sm"></td>
                                <th></th>
                                <td></td>
                            </tr>
                        </table>
                        <table class="table table-condensed table-bordered th-center">
                            <tr>
                                <th colspan="4"><h4>퇴직연금 일시금</h4></th>
                            </tr>
                            <tr>
                                <th>퇴직연금 계좌번호</th>
                                <td><input type="text" class="form-control input-sm">일</td>
                                <th>퇴직연금 일시금 총 수령액</th>
                                <td>
                                    <select class="form-control">
                                        <option>   </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>퇴직연금 원리금 합계액</th>
                                <td><input type="text" class="form-control input-sm"></td>
                                <th>퇴직연금 소득자 불입액</th>
                                <td><input type="text" class="form-control input-sm"></td>
                            </tr>
                            <tr>
                                <th>퇴직연금 소득공제액</th>
                                <td><input type="text" class="form-control input-sm"></td>
                                <th>기수령한 퇴직급여액</th>
                                <td><input type="text" class="form-control input-sm"></td>
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
