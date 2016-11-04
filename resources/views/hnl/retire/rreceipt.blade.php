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
            vertical-align:middle;
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
                <div class="panel panel-primary">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 퇴직금 내역서
                        </h4>
                            <span class="pull-right">
                                <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                            </span>
                    </div>
                    <div class="panel-body">
                        <table class="table table-condensed table-bordered th-center">
                            <tr>
                                <th colspan="4"><h4>퇴직금 계산 결과</h4></th>
                            </tr>
                            <tr>
                                <td colspan="4"></td>
                            </tr>
                            <tr>
                                <td colspan="2">입사일자</td>
                                <td colspan="2">2008년 6월 13일</td>
                            </tr>
                            <tr>
                                <td colspan="2">퇴직일자</td>
                                <td colspan="2">2016년 9월 10일</td>
                            </tr>
                            <tr>
                                <td colspan="2">재직일자</td>
                                <td colspan="2">3011일</td>
                            </tr>
                            <tr>
                                <td colspan="4"></td>
                            </tr>
                            <tr>
                                <th colspan="4"><h4>퇴직전 3개월간 임금총액</h4></th>
                            </tr>
                            <tr>
                                <th>기간</th>
                                <th>기간별 일수</th>
                                <th>기본급</th>
                                <th>기타수당</th>
                            </tr>
                            <tr>
                                <td>2016.6.10 ~ 2016.6.30</td>
                                <td>21일</td>
                                <td>2,100,000원</td>
                                <td>87,500원</td>
                            </tr>
                            <tr>
                                <td>2016.7.1 ~ 2016.7.30</td>
                                <td>31일</td>
                                <td>3,000,000원</td>
                                <td>125,000원</td>
                            </tr>
                            <tr>
                                <td>2016.8.1 ~ 2016.8.30</td>
                                <td>31일</td>
                                <td>3,000,000원</td>
                                <td>125,000원</td>
                            </tr>
                            <tr>
                                <td>2016.9.1 ~ 2016.9.30</td>
                                <td>31일</td>
                                <td>900,000원</td>
                                <td>37,500원</td>
                            </tr>
                            <tr>
                                <td>합계</td>
                                <td>92일</td>
                                <td>9,000,000원 ①</td>
                                <td>375,000원 ②</td>
                            </tr>
                            <tr>
                                <td colspan="4"></td>
                            </tr>
                            <tr>
                                <th>연간 상여금 총액 ③</th>
                                <td>0원</td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <th>연차수당 ④</th>
                                <td>원</td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="4"></td>
                            </tr>
                            <tr>
                                <th>1일 평균임금</th>
                                <td>101,902.18원</td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <th>통상임금</th>
                                <td>원</td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="4"></td>
                            </tr>
                            <tr>
                                <th>퇴직금</th>
                                <th>25,218,695.66원</th>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="4"></td>
                            </tr>
                            <tr>
                                <th colspan="4"><h4>1일 평균임금 계산식</h4></th>
                            </tr>
                            <tr>
                                <td colspan="4">1일 평균임금 = 퇴직일 이전 3개월간에 지급 받은 임금 총액 / 퇴직일 이전 3개월간의 총 일수</td>
                            </tr>
                            <tr>
                                <td colspan="4">1일 평균임금 계산과정 = 9,000,000 ① + 375,000 ② + 0 ③(3/12) + 0 ④(3/12) / 92</td>
                            </tr>
                            <tr>
                                <th colspan="4"><h4>퇴직금 계산식</h4></th>
                            </tr>
                            <tr>
                                <td colspan="4">퇴직금 = 1일 평균임금 x 30(일) x (총재직일수/365)</td>
                            </tr>
                            <tr>
                                <td colspan="4">퇴직금 계산과정 = 1일 평균임금 101,902,18원 x 30일 x (3011일/365일)</td>
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
