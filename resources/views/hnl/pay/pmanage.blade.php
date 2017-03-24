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
    <h1>급여 기준표</h1>
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
                               data-l="true"></i> 급여기준표
                        </h4>
                            <span class="pull-right">
                                <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                            </span>
                    </div>
                    <div class="panel-body">
                        <div class="bs-example">
                            <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                                <li class="active">
                                    <a href="#basic" data-toggle="tab">기본 총괄표</a>
                                </li>
                                <li>
                                    <a href="#wtime" data-toggle="tab">근로시간 구성</a>
                                </li>
                                <li>
                                    <a href="#pays" data-toggle="tab">급여 세부항목 구성</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade active in" id="basic">
                                    <table class="table table-bordered">
                                        <caption>
                                            <i class="livicon" data-name="adjust" data-size="12" data-c="#000" data-hc="#fff" data-loop="true"></i> 기본총괄표
                                        </caption>
                                        <thead>
                                        <tr>
                                            <th rowspan="2">순번</th>
                                            <th rowspan="2">이름</th>
                                            <th rowspan="2">고정월 총 지급액</th>
                                            <th rowspan="2">시급</th>
                                            <th colspan="4">임금구성</th>
                                            <th colspan="3">급여구분</th>
                                        </tr>
                                        <tr>
                                            <th>통상임금</th>
                                            <th>법정수당</th>
                                            <th>약정수당</th>
                                            <th>복리후생</th>
                                            <th>비과세</th>
                                            <th>임금총액</th>
                                            <th>보수총액</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <input type="hidden" value="{{$i = 1}}">
                                        @forelse($getuserinfo as $u)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $u->name }}</td>
                                                <td>{{ $u->paymonth }}</td>
                                                <td>{{ $u->hour_pay }}</td>
                                                <td>{{ $u->sum_nw }}</td>
                                                <td>{{ $u->sum_sa }}</td>
                                                <td>{{ $u->sum_bf }}</td>
                                                <td>{{ $u->sum_ca }}</td>
                                                <td>{{ $u->none_tax_price }}</td>
                                                <td>{{ $u->month_price }}</td>
                                                <td>{{ $u->total_price }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="11">No List</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="wtime">
                                    <table class="table table-condensed table-bordered">
                                        <caption>
                                            <i class="livicon" data-name="adjust" data-size="12" data-c="#000" data-hc="#fff" data-loop="true"></i> 근로시간 구성
                                        </caption>
                                        <thead>
                                        <tr>
                                            <th>순번</th>
                                            <th>이름</th>
                                            <th>총근로시간</th>
                                            <th>소정근로</th>
                                            <th>주휴시간</th>
                                            <th>연장근로</th>
                                            <th>야간근로</th>
                                            <th>휴일근로</th>
                                            <th>휴일연장</th>
                                            <th>휴일야간</th>
                                            <th>연차수당</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <input type="hidden" value="{{$i = 1}}">
                                        @forelse($ucalc as $u)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $u->name }}</td>
                                                <td>{{ $u->total }}</td>
                                                <td>{{ $u->mtotal }}</td>
                                                <td>{{ $u->mbreak }}</td>
                                                <td>{{ $u->mover }}</td>
                                                <td>{{ $u->mnight }}</td>
                                                <td>{{ $u->mwwork }}</td>
                                                <td>{{ $u->mwover }}</td>
                                                <td>{{ $u->mwnight }}</td>
                                                <td>{{ $u->mwbt }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td>{{ $i }}</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="pays">
                                    <table class="table table-condensed table-bordered">
                                        <caption>
                                            <i class="livicon" data-name="adjust" data-size="12" data-c="#000" data-hc="#fff" data-loop="true"></i> 급여세부항목
                                        </caption>
                                        <thead>
                                        <tr>
                                            <th>순번</th>
                                            <th>이름</th>
                                            <th>기본급</th>
                                            <th>주휴수당</th>
                                            <th>직책수당</th>
                                            <th>연장수당</th>
                                            <th>야간수당</th>
                                            <th>휴일수당</th>
                                            <th>연차수당</th>
                                            <th>성과급</th>
                                            <th>특별수당</th>
                                            <th>식대</th>
                                            <th>차량유지비</th>
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
