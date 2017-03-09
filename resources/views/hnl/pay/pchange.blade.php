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
                <div class="panel panel-primary">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 사원정보
                        </h4>
                            <span class="pull-right">
                                <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                            </span>
                    </div>
                    <div class="panel-body">
                        <a class="btn btn-raised btn-info btn-large" data-toggle="modal" data-href="#searchmember" href="#searchmember">검색</a>
                        <table class="table table-bordered">
                            <tr>
                                <th>사번</th>
                                <th>이름</th>
                                <th>근무상태</th>
                                <th>채용형태</th>
                            </tr>
                            <tr>
                                @if($searchp)
                                <td>{{ $searchp->employee_num }}</td>
                                <td>{{ $searchp->name }}</td>
                                <td>{{ $searchp->work_condition }}</td>
                                <td>{{ $searchp->employee_type }}</td>
                                @endif
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
                                    <form class="panel-body" action="{{ route('insert/payitem') }}" method="POST">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <input type="hidden" name="id" value="{{ $id }}">
                                        <input type="hidden" name="is_another" value="pchange">
                                        <table class="table table-condensed table-bordered">
                                            <tr>
                                                <th rowspan="2">통상임금</th>
                                                @foreach($nw as $p1)
                                                    <th>{{ $p1->title }}</th>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                @foreach($nw as $k => $p1)
                                                        <td><input type="text" class="form-control input-sm" name="inputA{{$k++}}" value="{{ $p1->price }}" {!! ($p1->title === '기본급') || ($p1->title === '주휴수당') ? 'readonly' : '' !!}></td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <th rowspan="2">법정수당</th>
                                                @foreach($sa as $p2)
                                                    <th>{{ $p2->title }}</th>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                @foreach($sa as $k => $p2)
                                                    <td><input type="text" class="form-control input-sm" value="{{ $p2->price }}" name="inputB{{ $k++ }}" {!! ($p2->title === '연장수당') || ($p2->title === '야간수당') || ($p2->title === '휴일수당') || ($p2->title === '휴일연장') || ($p2->title === '휴일야간') || ($p2->title === '연차수당') ? 'readonly' : '' !!}></td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <th rowspan="2">복리후생</th>
                                                @foreach($bf as $p3)
                                                    <th>{{  $p3->title }}</th>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                @foreach($bf as $k => $p3)
                                                    <td><input type="text" class="form-control input-sm" value="{{ $p3->price }}" name="inputC{{ $k++ }}" value=""></td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <th rowspan="2">약정수당</th>
                                                @foreach($ca as $p4)
                                                    <th>{{  $p4->title }}</th>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                @foreach($ca as $k => $p4)
                                                    <td><input type="text" class="form-control input-sm" value="{{ $p4->price }}" name="inputD{{ $k++ }}" value=""></td>
                                                @endforeach
                                            </tr>
                                        </table>
                                        <button class="btn btn-default col-lg-12" type="submit">등 록</button>
                                    </form>
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
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- search member modal-->
        <div class="modal fade in" id="searchmember" tabindex="-1" role="dialog" aria-hidden="false">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">사원 검색</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table table-condensed table-bordered" id="table2">
                            <thead>
                            <tr>
                                <th>순번</th>
                                <th>사번</th>
                                <th>이름</th>
                                <th>부서</th>
                                <th>직위</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pinfo as $key=>$p)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $p->employee_num }}</td>
                                    <td><a href="{{ route('pchange_view',$p->id) }}">{{ $p->name }}</a></td>
                                    <td>
                                        @foreach($jobtitle as $job)
                                            @if($job->id == $p->job)
                                                {{ $job->name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($position as $pos)
                                            @if($pos->id == $p->position)
                                                {{ $pos->pos_name }}
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                        {{--                        <button class="btn btn-primary">등록</button>--}}
                    </div>
                </div>
            </div>
        </div>
        <!-- END modal-->
    </section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')



@stop
