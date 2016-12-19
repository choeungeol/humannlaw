@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
    급여관리 등록
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <meta name="_token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />

@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>급여 대장</h1>
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
                               data-l="true"></i> 검색
                        </h4>
                            <span class="pull-right">
                                <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                            </span>
                    </div>
                    <div class="panel-body">
                        <form class="form-inline" role="form">
                            <div class="col-xs-6">
                                <label class="control-label">
                                    급여년도 / 월
                                    <select class="form-control input-sm">
                                        <option>Year</option>
                                        <option>1991</option>
                                        <option>1992</option>
                                        <option>1993</option>
                                        <option>1994</option>
                                        <option>1995</option>
                                        <option>1996</option>
                                        <option>1997</option>
                                        <option>1998</option>
                                        <option>1999</option>
                                        <option>2000</option>
                                        <option>2001</option>
                                        <option>2002</option>
                                        <option>2003</option>
                                        <option>2004</option>
                                        <option>2005</option>
                                        <option>2006</option>
                                        <option>2007</option>
                                        <option>2008</option>
                                        <option>2009</option>
                                        <option>2000</option>
                                        <option>2011</option>
                                        <option>2012</option>
                                        <option>2013</option>
                                        <option>2014</option>
                                        <option>2015</option>
                                        <option>2016</option>
                                        <option>2017</option>
                                        <option>2018</option>
                                    </select>년
                                    <select class="form-control input-sm">
                                        <option>Month</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>월
                                </label>
                                <label>
                                    <button type="button" class="btn btn-sm btn-default"> + </button>
                                    <button type="button" class="btn btn-sm btn-default"> - </button>
                                </label>
                            </div>
                        </form>
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
                               data-l="true"></i> 리스트
                        </h4>
                            <span class="pull-right">
                                <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                            </span>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <tr>
                                <th><input type="checkbox" class="custom-checkbox"></th>
                                <th>연도</th>
                                <th>월</th>
                                <th>급여대장명</th>
                                <th>등록일</th>
                                <th>저장횟수</th>
                                <th>부서명</th>
                                <th>급여대장</th>
                                <th>엑셀</th>
                                <th>수정</th>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="custom-checkbox"></td>
                                <td>2016년</td>
                                <td>07월</td>
                                <td>2016년 07월 급여대장</td>
                                <td>2016-07-28</td>
                                <td>2</td>
                                <td>,</td>
                                <td colspan="3"><- 급여대장명을 클릭하십시오.</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="custom-checkbox"></td>
                                <td>2016년</td>
                                <td>06월</td>
                                <td>2016년 06월 급여대장</td>
                                <td>2016-06-28</td>
                                <td>2</td>
                                <td>,</td>
                                <td colspan="3"><- 급여대장명을 클릭하십시오.</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="custom-checkbox"></td>
                                <td>2016년</td>
                                <td>05월</td>
                                <td>2016년 05월 급여대장</td>
                                <td>2016-05-28</td>
                                <td>2</td>
                                <td>,</td>
                                <td colspan="3"><- 급여대장명을 클릭하십시오.</td>
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
                               data-l="true"></i> 리스트
                        </h4>
                            <span class="pull-right">
                                <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                            </span>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th colspan="3">인적사항</th>
                                <th>통상임금</th>
                                <th>법정수당</th>
                                <th>복리후생</th>
                                <th>약정수당</th>
                                <th>변동사항</th>
                                <th rowspan="4">임금총액</th>
                                <th colspan="2">공제사항</th>
                                <th rowspan="4">공제총액</th>
                                <th rowspan="4">차인지급액</th>
                            </tr>
                            <tr>
                                <th>성명</th>
                                <th>생년월일</th>
                                <th>수습여부</th>
                                <th>기본급</th>
                                <th>연장수당</th>
                                <th>식대</th>
                                <th>상여금</th>
                                <th>근태공제</th>
                                <th>소득세</th>
                                <th>국민연금</th>
                            </tr>
                            <tr>
                                <th>입사일</th>
                                <th>급여형태</th>
                                <th>부서</th>
                                <th>직책수당</th>
                                <th>야간수당</th>
                                <th>차량유지비</th>
                                <th>특별성과급</th>
                                <th>추가근무</th>
                                <th>주민세</th>
                                <th>건강보험</th>
                            </tr>
                            <tr>
                                <th>퇴사일</th>
                                <th>채용형태</th>
                                <th>직위</th>
                                <th>직무수당</th>
                                <th>휴일수당</th>
                                <th> - </th>
                                <th>특별수당</th>
                                <th></th>
                                <th>고용보험</th>
                                <th>장기요양보험</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>홍길동</td>
                                <td>정규직</td>
                                <td>본사</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td rowspan="3"></td>
                                <td></td>
                                <td></td>
                                <td rowspan="3"></td>
                                <td rowspan="3"></td>
                              </tr>
                            <tr>
                                <td>2012-08-21</td>
                                <td>연봉제</td>
                                <td>과장</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                               </tr>
                            <tr>
                                <td>2016-09-01</td>
                                <td>770816</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <td>김만홍</td>
                                <td>기간제</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td rowspan="3"></td>
                                <td></td>
                                <td></td>
                                <td rowspan="3"></td>
                                <td rowspan="3"></td>
                                </tr>
                            <tr>
                                <td>2014-06-01</td>
                                <td>월급제</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>801106</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered">

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" ></script>
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form_examples.js') }}"></script>

@stop
