@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
    인사정보 등록
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <meta name="_token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/css/pages/alertmessage.css') }}" rel="stylesheet"  type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iCheck/css/all.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iCheck/css/line/line.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap-switch/css/bootstrap-switch.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/switchery/css/switchery.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/awesomeBootstrapCheckbox/awesome-bootstrap-checkbox.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/formelements.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/colReorder.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/rowReorder.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/scroller.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/tables.css') }}" />

    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>급여 정보</h1>
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
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white" data-l="true"></i> 급여 정보
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                    일반정보
                            </h4>
                        </div>
                        <div class="panel-body">
                            <table class="table table-condensed table-bordered">
                                <caption>
                                    <a class="btn btn-raised btn-info btn-large" data-toggle="modal" data-href="#searchmember" href="#searchmember">검색</a>
                                </caption>
                                @if(!$searchp)
                                    <tr>
                                        <th>사원번호</th>
                                        <td><input type="text" class="form-control input-sm" readonly></td>
                                        <th>성 명</th>
                                        <td><input type="text" class="form-control input-sm" readonly></td>
                                        <th>주민번호</th>
                                        <td><input type="text" class="form-control input-sm" readonly></td>
                                    </tr>
                                    <tr>
                                        <th>부 서</th>
                                        <td><input type="text" class="form-control input-sm" readonly></td>
                                        <th>직 위</th>
                                        <td><input type="text" class="form-control input-sm" readonly></td>
                                        <th>사업장</th>
                                        <td><input type="text" class="form-control input-sm" readonly></td>
                                    </tr>
                                    <tr>
                                        <th>근무상태</th>
                                        <td><input type="text" class="form-control input-sm" readonly></td>
                                        <th>채용형태</th>
                                        <td><input type="text" class="form-control input-sm" readonly></td>
                                        <th>수습기간</th>
                                        <td><input type="text" class="form-control input-sm" readonly></td>
                                    </tr>
                                    <tr>
                                        <th>수습비율</th>
                                        <td><input type="text" class="form-control input-sm" readonly></td>
                                        <th>입사일</th>
                                        <td><input type="text" class="form-control input-sm" readonly></td>
                                        <th>퇴사일</th>
                                        <td><input type="text" class="form-control input-sm" readonly></td>
                                    </tr>
                                @else
                                    <tr>
                                        <th>사원번호</th>
                                        <td><input type="text" class="form-control input-sm" readonly value="{{ $searchp->employee_num }}"></td>
                                        <th>성 명</th>
                                        <td><input type="text" class="form-control input-sm" readonly value="{{ $searchp->name }}"></td>
                                        <th>주민번호</th>
                                        <td><input type="text" class="form-control input-sm" readonly value="{{ $searchp->regi_no }}"></td>
                                    </tr>
                                    <tr>
                                        <th>부 서</th>
                                        <td>
                                            @foreach($jobtitle as $job)
                                                @if($job->id == $searchp->job)
                                                    <input type="text" class="form-control input-sm" readonly value="{{ $job->name }}">
                                                @endif
                                            @endforeach
                                        </td>
                                        <th>직 위</th>
                                        <td>
                                            @foreach($position as $pos)
                                                @if($pos->id == $searchp->position)
                                                    <input type="text" class="form-control input-sm" readonly value="{{ $pos->pos_name }}">
                                                @endif
                                            @endforeach
                                        </td>
                                        <th>사업장</th>
                                        <td><input type="text" class="form-control input-sm" readonly value=""></td>
                                    </tr>
                                    <tr>
                                        <th>근무상태</th>
                                        <td><input type="text" class="form-control input-sm" readonly value="{{ $searchp->work_condition }}"></td>
                                        <th>채용형태</th>
                                        <td><input type="text" class="form-control input-sm" readonly value="{{ $searchp->employee_type }}"></td>
                                        <th>수습기간</th>
                                        <td><input type="text" class="form-control input-sm" readonly value=""></td>
                                    </tr>
                                    <tr>
                                        <th>수습비율</th>
                                        <td><input type="text" class="form-control input-sm" readonly value="{{ $searchp->first_pay }}"></td>
                                        <th>입사일</th>
                                        <td><input type="text" class="form-control input-sm" readonly value="{{ $searchp->join_day }}"></td>
                                        <th>퇴사일</th>
                                        <td><input type="text" class="form-control input-sm" readonly value="{{ $searchp->exit_day }}"></td>
                                    </tr>
                                @endif
                            </table>
                        </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    급여정보
                                </h4>
                            </div>
                            <form class="panel-body" action="{{ route('insert/payinfo') }}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                @if($searchp)
                                    <input type="hidden" name="id" value="{{ $searchp->id }}" />
                                @endif
                                <table class="table table-condensed table-bordered">
                                    <tr>
                                        <th>월급여액</th>
                                        <td>
                                            @if($payinfo)
                                                <input type="text" class="form-control input-sm" name="mpay" value="{{ $payinfo->paymonth }}">
                                            @else
                                                <input type="text" class="form-control input-sm" name="mpay" value="">
                                            @endif
                                        </td>
                                        <th>급여유형</th>
                                        @if(!$searchp)
                                        <td><input type="text" class="form-control input-sm" readonly value=""></td>
                                        @else
                                        <td><input type="text" name="paytype" class="form-control input-sm" readonly value="{{ $searchp->paytype }}"></td>
                                        @endif
                                        <th>근무유형</th>
                                        @if(!$searchp)
                                        <td><input type="text" class="form-control input-sm" readonly value=""></td>
                                        @else
                                        <td><input type="text" name="worktype" class="form-control input-sm" readonly value="{{ $searchp->worktype }}"></td>
                                        @endif
                                    </tr>
                                    @if($payinfo)
                                    <tr>
                                        <th>생산직비과세 여부( Y , N )</th>
                                        <td><input class="switch" type="checkbox" name="non_taxable" data-on-color="info" data-off-color="primary" data-animate {!! ($payinfo->non_taxable === null) ? '' : 'checked' !!}></td>
                                        <th>일용직 세액공제 여부( Y , N )</th>
                                        <td><input class="switch" type="checkbox" name="tax_deduction" data-on-color="info" data-off-color="primary" data-animate {!! ($payinfo->tax_deduction === null) ? '' : 'checked' !!}></td>
                                        <th>국외 근로 비과세 여부</th>
                                        <td>
                                            <select class="form-control input-sm" name="overseas_taxable">
                                                <option value="없음" {!! ($payinfo->overseas_taxable === '없음') ? 'selected' :'' !!}>없음</option>
                                                <option value="국외근로" {!! ($payinfo->overseas_taxable === '국외근로') ? 'selected' :'' !!}>국외근로</option>
                                                <option value="선원" {!! ($payinfo->overseas_taxable === '선원') ? 'selected' :'' !!}>선원</option>
                                                <option value="해외건설근로" {!! ($payinfo->overseas_taxable === '해외건설근로') ? 'selected' :'' !!}>해외건설근로</option>
                                            </select>
                                        </td>
                                    </tr>
                                        <tr>
                                            <th>통상시급</th>
                                            <td><input type="text" class="form-control input-sm" readonly value="{{ $payinfo->hour_pay }}"></td>
                                        </tr>
                                    @else
                                    <tr>
                                        <th>생산직비과세 여부( Y , N )</th>
                                        <td><input class="switch" type="checkbox" name="non_taxable" data-on-color="info" data-off-color="primary" data-animate></td>
                                        <th>일용직 세액공제 여부( Y , N )</th>
                                        <td><input class="switch" type="checkbox" name="tax_deduction" data-on-color="info" data-off-color="primary" data-animate></td>
                                        <th>국외 근로 비과세 여부</th>
                                        <td>
                                            <select class="form-control input-sm" name="overseas_taxable">
                                                <option value="없음">없음</option>
                                                <option value="국외근로">국외근로</option>
                                                <option value="선원">선원</option>
                                                <option value="해외건설근로">해외건설근로</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>통상시급</th>
                                        <td><input type="text" class="form-control input-sm" readonly></td>
                                    </tr>
                                    @endif
                                </table>
                                <button class="btn btn-default col-lg-12" type="submit">등 록</button>
                            </form>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    급여항목
                                </h4>
                            </div>
                            <form class="panel-body" action="{{ route('insert/payitem') }}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <input type="hidden" name="id" value="{{ $id }}">
                                    <table class="table table-condensed table-bordered">
                                    <tr>
                                        <th rowspan="2">통상임금</th>
                                        @foreach($payitem1 as $p1)
                                            <th>{{ $p1->title }}</th>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        @forelse((array)$nw as $p1)
                                            @if($mtotal)
                                            <td>
                                                <input type="text" class="form-control input-sm" name="inputA{{$p1->payitem_id}}" value="{!! ($p1->payitem_id === 1) ? $mtotal: '' !!}{!! ($p1->payitem_id === 2) ? $mbreak: ''!!}" {!! ($p1->title === '기본급') || ($p1->title === '주휴수당') ? 'readonly' : '' !!} >
                                            </td>
                                            @else
                                            <td>
                                                <input type="text" class="form-control input-sm" name="inputA{{$p1->payitem_id}}" value="{!! $p1->price !!}" {!! ($p1->title === '기본급') || ($p1->title === '주휴수당') ? 'readonly' : '' !!} >
                                            </td>
                                            @endif
                                        @empty
                                            @foreach($payitem1 as $p1)
                                            <td>
                                                <input type="text" class="form-control input-sm" name="inputA{{$p1->id}}" value="{!! ($p1->title === '기본급') ? $mtotal: '' !!}{!! ($p1->title === '주휴수당') ? $mbreak: ''!!}" {!! ($p1->title === '기본급') || ($p1->title === '주휴수당') ? 'readonly' : '' !!} >
                                            </td>
                                            @endforeach
                                        @endforelse

                                    </tr>
                                    <tr>
                                        <th rowspan="2">법정수당</th>
                                        @foreach($payitem2 as $p2)
                                            <th>{{ $p2->title }}</th>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        @forelse((array)$sa as $p2)
                                            @if($mover)
                                            <td><input type="text" class="form-control input-sm"
                                                       value="{{ ($p2->title === '연장수당') ? $mover : '' }}{{ ($p2->title === '야간수당') ? $mnight : '' }}{{ ($p2->title === '휴일수당') ? $mwwork : '' }}{{ ($p2->title === '휴일연장') ? $mwover : '' }}{{ ($p2->title === '휴일야간') ? $mwnight : '' }}{{ ($p2->title === '연차수당') ? $mwbt : '' }}"
                                                       name="inputB{{$p2->payitem_id}}" {!! ($p2->title === '연장수당') || ($p2->title === '야간수당') || ($p2->title === '휴일수당') || ($p2->title === '휴일연장') || ($p2->title === '휴일야간') || ($p2->title === '연차수당') ? 'readonly' : '' !!}></td>
                                            @else
                                            <td><input type="text" class="form-control input-sm" value="{{ $p2->price }}" name="inputB{{$p2->payitem_id}}" {!! ($p2->title === '연장수당') || ($p2->title === '야간수당') || ($p2->title === '휴일수당') || ($p2->title === '휴일연장') || ($p2->title === '휴일야간') || ($p2->title === '연차수당') ? 'readonly' : '' !!}></td>
                                            @endif
                                        @empty
                                            @foreach($payitem2 as $p2)
                                                <td>
                                                    <input type="text" class="form-control input-sm" name="inputA{{$p2->id}}" {{ ($p2->title === '연장수당') ? $mover : '' }}{{ ($p2->title === '야간수당') ? $mnight : '' }}{{ ($p2->title === '휴일수당') ? $mwwork : '' }}{{ ($p2->title === '휴일연장') ? $mwover : '' }}{{ ($p2->title === '휴일야간') ? $mwnight : '' }}{{ ($p2->title === '연차수당') ? $mwbt : '' }} {!! ($p2->title === '연장수당') || ($p2->title === '야간수당') || ($p2->title === '휴일수당') || ($p2->title === '휴일연장') || ($p2->title === '휴일야간') || ($p2->title === '연차수당') ? 'readonly' : '' !!} >
                                                </td>
                                            @endforeach
                                        @endforelse
                                    </tr>
                                    <tr>
                                        <th rowspan="2">복리후생</th>
                                        @foreach($payitem3 as $p3)
                                            <th>{{  $p3->title }}</th>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        @forelse((array)$bf as $p3)
                                            <td><input type="text" class="form-control input-sm" value="{{ $p3->price }}" name="inputC{{$p3->payitem_id}}"></td>
                                        @empty
                                            @foreach($payitem3 as $p3)
                                                <td>
                                                    <input type="text" class="form-control input-sm" name="inputA{{$p3->id}}">
                                                </td>
                                            @endforeach
                                        @endforelse
                                    </tr>
                                    <tr>
                                        <th rowspan="2">약정수당</th>
                                        @foreach($payitem4 as $p4)
                                            <th>{{  $p4->title }}</th>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        @forelse((array)$ca as $p4)
                                            <td><input type="text" class="form-control input-sm" value="{{ $p4->price }}" name="inputD{{$p4->payitem_id}}"></td>
                                        @empty
                                            @foreach($payitem4 as $p4)
                                                <td>
                                                    <input type="text" class="form-control input-sm" name="inputA{{$p4->id}}" >
                                                </td>
                                            @endforeach
                                        @endforelse
                                    </tr>
                                </table>
                                <button class="btn btn-default col-lg-12" type="submit">등 록</button>
                            </form>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    4대 보험 정보
                                </h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-6">
                                    <table class="table table-condensed table-bordered col-lg-6">
                                        <tr>
                                            <td>월 급여액</td>
                                            <td>
                                                @if($payinfo)
                                                    <input type="text" class="form-control input-sm" value="{{ $payinfo->paymonth }}" readonly>
                                                @else
                                                    <input type="text" class="form-control input-sm" value="">
                                                @endif
                                            </td>
                                            <td>비과세액</td>
                                            <td><input type="text" class="form-control input-sm"></td>
                                            <td>보수총액</td>
                                            <td><input type="text" class="form-control input-sm"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-lg-6">
                                    <table class="table table-condensed table-bordered col-lg-6">
                                        <tr>
                                            <th>구분</th>
                                            <th>국민연금</th>
                                            <th>건강보험</th>
                                            <th>고용보험</th>
                                            <th>산재보험</th>
                                        </tr>
                                        <tr>
                                            <td>소득기준</td>
                                            <td>
                                                <select class="form-control input-sm">
                                                    <option>기존보수월액</option>
                                                    <option>당월보수월액</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control input-sm">
                                                    <option>기존보수월액</option>
                                                    <option>당월보수월액</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control input-sm">
                                                    <option>기존보수월액</option>
                                                    <option>당월보수월액</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control input-sm">
                                                    <option>기존보수월액</option>
                                                    <option>당월보수월액</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>입사일 2일이후</td>
                                            <td>
                                                <select class="form-control input-sm">
                                                    <option>당월공제</option>
                                                    <option>익월공제</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control input-sm">
                                                    <option>당월공제</option>
                                                    <option>익월공제</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control input-sm">
                                                    <option>당월공제</option>
                                                    <option>익월공제</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control input-sm">
                                                    <option>당월공제</option>
                                                    <option>익월공제</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>공제대상여부</td>
                                            <td>
                                                <select class="form-control input-sm">
                                                    <option>없음</option>
                                                    <option>공제</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <button class="btn btn-default col-lg-12" type="submit">등 록</button>
                            </div>
                        </div>
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
                                <td><a href="{{ route('payinfo_view',$p->id) }}">{{ $p->name }}</a></td>
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

    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-switch/js/bootstrap-switch.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/switchery/js/switchery.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/card/lib/js/jquery.card.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/js/pages/radio_checkbox.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/jeditable/js/jquery.jeditable.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.buttons.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.colReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.responsive.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.rowReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.colVis.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.html5.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/pdfmake.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/vfs_fonts.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.scroller.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/table-advanced.js') }}" ></script>

@stop