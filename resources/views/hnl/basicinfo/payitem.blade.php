@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
    기본정보 등록
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


@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>급여항목</h1>
        <ol class="breadcrumb">
            <li class="active">
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                    메인으로
                </a>
            </li>
        </ol>
    </section>

    <section class="content" ng-app="payitem" ng-controller="payitemCtrl">
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
                        <div class="bs-example">
                            <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                                <li class="active">
                                    <a href="#basicpay" data-toggle="tab">통상임금</a>
                                </li>
                                <li>
                                    <a href="#lawpay" data-toggle="tab">법정수당</a>
                                </li>
                                <li>
                                    <a href="#welfare" data-toggle="tab">복리후생</a>
                                </li>
                                <li>
                                    <a href="#contractpay" data-toggle="tab">약정수당</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade active in" id="basicpay">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>명칭</th>
                                                    <th>급여계산기준</th>
                                                    <th>수습율적용</th>
                                                    <th>퇴직금대상</th>
                                                    <th>비과세여부</th>
                                                    <th>기본급포함</th>
                                                    <th>설정</th>
                                                    <th>삭제</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($payitem1 as $p1)
                                                <form method="POST" action="{{ route('update/payitem', $p1->id) }}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td>
                                                        <input type="text" class="form-control input-sm" readonly value="{{ $p1->title }}" name="title">
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="paycalc">
                                                            @foreach($paycalc as $pc)
                                                                <option {!! ($pc === $p1->paycalc  ? 'selected' : '') !!} value="{{ $pc }}">{{ $pc }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="probaion">
                                                            @foreach($colapply as $col)
                                                                <option {!! ($col === $p1->probaion  ? 'selected' : '') !!} value="{{ $col }}">{{ $col }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="is_severance_pay">
                                                            @foreach($exitpay as $exit)
                                                                <option {!! ($exit === $p1->is_severance_pay  ? 'selected' : '') !!} value="{{ $exit }}">{{ $exit }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="is_taxfree">
                                                            @foreach($istexfree as $itf)
                                                                <option {!! ($itf === $p1->is_taxfree  ? 'selected' : '') !!} value="{{ $itf }}">{{ $itf }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    @if($p1->title === '주휴수당')
                                                    <td>
                                                        <select class="form-control input-sm" name="in_basicpay">
                                                            @foreach($inbasicpay as $ibi)
                                                                <option {!! ($ibi === $p1->in_basicpay  ? 'selected' : '') !!} value="{{ $ibi }}">{{ $ibi }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    @else
                                                    <td>

                                                    </td>
                                                    @endif
                                                    <td>
                                                        <button class="btn btn-success btn-sm">설정</button>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('confirm-delete/payitem', $p1->id) }}" class="btn btn-warning btn-sm" data-toggle="modal"
                                                           data-target="#delete_confirm" {!! (($p1->title === '기본급') || ($p1->title === '주휴수당') || ($p1->title === '직책수당')  || ($p1->title === '근속수당')  || ($p1->title === '직무수당')  ? 'disabled' : '') !!}>지우기</a>
                                                    </td>
                                                </tr>
                                                </form>
                                            @endforeach
                                            <form method="POST" action="{{ route('insert/payitem1') }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                            <tr>
                                                <td></td>
                                                <td><input class="form-control input-sm" name="i_title"></td>
                                                <td>
                                                    <select class="form-control input-sm" name="i_paycalc">
                                                        @foreach($paycalc as $pc)
                                                            <option value="{{ $pc }}">{{ $pc }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" name="i_probaion">
                                                        @foreach($colapply as $col)
                                                            <option value="{{ $col }}">{{ $col }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" name="i_is_severance_pay">
                                                        @foreach($exitpay as $exit)
                                                            <option value="{{ $exit }}">{{ $exit }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" name="i_is_taxfree">
                                                        @foreach($istexfree as $itf)
                                                            <option value="{{ $itf }}">{{ $itf }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td></td>
                                                <td><button class="btn btn-primary btn-sm">추가</button></td>

                                                <td></td>
                                            </tr>
                                            </form>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="lawpay">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>명칭</th>
                                                <th>급여계산기준</th>
                                                <th>수습율적용</th>
                                                <th>퇴직금대상</th>
                                                <th>비과세여부</th>
                                                <th>설정</th>
                                                <th>삭제</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($payitem2 as $p2)
                                                <form method="POST" action="{{ route('update/payitem2', $p2->id) }}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="text" class="form-control input-sm" readonly value="{{ $p2->title }}" name="title">
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="paycalc">
                                                            @foreach($paycalc as $pc)
                                                                <option {!! ($pc === $p2->paycalc  ? 'selected' : '') !!} value="{{ $pc }}">{{ $pc }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="probaion">
                                                            @foreach($colapply as $col)
                                                                <option {!! ($col === $p2->probaion  ? 'selected' : '') !!} value="{{ $col }}">{{ $col }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="is_severance_pay">
                                                            @foreach($exitpay as $exit)
                                                                <option {!! ($exit === $p2->is_severance_pay  ? 'selected' : '') !!} value="{{ $exit }}">{{ $exit }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="is_taxfree">
                                                            @foreach($istexfree as $itf)
                                                                <option {!! ($itf === $p2->is_taxfree  ? 'selected' : '') !!} value="{{ $itf }}">{{ $itf }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success btn-sm">설정</button>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('confirm-delete/payitem2', $p2->id) }}" class="btn btn-warning btn-sm" data-toggle="modal"
                                                           data-target="#delete_confirm" {!! (($p2->title === '연장수당') || ($p2->title === '야간수당') || ($p2->title === '휴일수당')  || ($p2->title === '휴일연장')  || ($p2->title === '휴일야간') || ($p2->title === '연차수당')  ? 'disabled' : '') !!}>지우기</a>
                                                    </td>
                                                </tr>
                                                </form>
                                                </tr>
                                            @endforeach
                                            <form method="POST" action="{{ route('insert/payitem2') }}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                <tr>
                                                    <td></td>
                                                    <td><input class="form-control input-sm" name="i_title"></td>
                                                    <td>
                                                        <select class="form-control input-sm" name="i_paycalc">
                                                            @foreach($paycalc as $pc)
                                                                <option value="{{ $pc }}">{{ $pc }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="i_probaion">
                                                            @foreach($colapply as $col)
                                                                <option value="{{ $col }}">{{ $col }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="i_is_severance_pay">
                                                            @foreach($exitpay as $exit)
                                                                <option value="{{ $exit }}">{{ $exit }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="i_is_taxfree">
                                                            @foreach($istexfree as $itf)
                                                                <option value="{{ $itf }}">{{ $itf }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td><button class="btn btn-primary btn-sm">추가</button></td>
                                                </tr>
                                            </form>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="welfare">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>명칭</th>
                                                <th>급여계산기준</th>
                                                <th>수습율적용</th>
                                                <th>퇴직금대상</th>
                                                <th>비과세여부</th>
                                                <th>설정</th>
                                                <th>삭제</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($payitem3 as $p3)
                                                <form method="POST" action="{{ route('update/payitem3', $p3->id) }}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="text" class="form-control input-sm" readonly value="{{ $p3->title }}" name="title">
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="paycalc">
                                                            @foreach($paycalc as $pc)
                                                                <option {!! ($pc === $p3->paycalc  ? 'selected' : '') !!} value="{{ $pc }}">{{ $pc }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="probaion">
                                                            @foreach($colapply as $col)
                                                                <option {!! ($col === $p3->probaion  ? 'selected' : '') !!} value="{{ $col }}">{{ $col }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="is_severance_pay">
                                                            @foreach($exitpay as $exit)
                                                                <option {!! ($exit === $p3->is_severance_pay  ? 'selected' : '') !!} value="{{ $exit }}">{{ $exit }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="is_taxfree">
                                                            @foreach($istexfree as $itf)
                                                                <option {!! ($itf === $p3->is_taxfree  ? 'selected' : '') !!} value="{{ $itf }}">{{ $itf }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success btn-sm">설정</button>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('confirm-delete/payitem3', $p3->id) }}" class="btn btn-warning btn-sm" data-toggle="modal"
                                                           data-target="#delete_confirm" {!! (($p3->title === '식대') || ($p3->title === '차량유지비') || ($p3->title === '육아수당')  || ($p3->title === '연구활동비')  || ($p3->title === '명절떡값')  ? 'disabled' : '') !!}>지우기</a>
                                                    </td>
                                                </tr>
                                                </form>
                                                </tr>
                                            @endforeach
                                            <form method="POST" action="{{ route('insert/payitem3') }}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                <tr>
                                                    <td></td>
                                                    <td><input class="form-control input-sm" name="i_title"></td>
                                                    <td>
                                                        <select class="form-control input-sm" name="i_paycalc">
                                                            @foreach($paycalc as $pc)
                                                                <option value="{{ $pc }}">{{ $pc }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="i_probaion">
                                                            @foreach($colapply as $col)
                                                                <option value="{{ $col }}">{{ $col }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="i_is_severance_pay">
                                                            @foreach($exitpay as $exit)
                                                                <option value="{{ $exit }}">{{ $exit }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="i_is_taxfree">
                                                            @foreach($istexfree as $itf)
                                                                <option value="{{ $itf }}">{{ $itf }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td><button class="btn btn-primary btn-sm">추가</button></td>
                                                </tr>
                                            </form>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contractpay">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>명칭</th>
                                                <th>급여계산기준</th>
                                                <th>수습율적용</th>
                                                <th>퇴직금대상</th>
                                                <th>비과세여부</th>
                                                <th>설정</th>
                                                <th>삭제</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($payitem4 as $p4)
                                                <form method="POST" action="{{ route('update/payitem4', $p4->id) }}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="text" clas s="form-control input-sm" readonly value="{{ $p4->title }}">
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="paycalc">
                                                            @foreach($paycalc as $pc)
                                                                <option {!! ($pc === $p4->paycalc  ? 'selected' : '') !!} value="{{ $pc }}">{{ $pc }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="probaion">
                                                            @foreach($colapply as $col)
                                                                <option {!! ($col === $p4->probaion  ? 'selected' : '') !!} value="{{ $col }}">{{ $col }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="is_severance_pay">
                                                            @foreach($exitpay as $exit)
                                                                <option {!! ($exit === $p4->is_severance_pay  ? 'selected' : '') !!} value="{{ $exit }}">{{ $exit }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="is_taxfree">
                                                            @foreach($istexfree as $itf)
                                                                <option {!! ($itf === $p4->is_taxfree  ? 'selected' : '') !!} value="{{ $itf }}">{{ $itf }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success btn-sm">설정</button>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('confirm-delete/payitem4', $p4->id) }}" class="btn btn-warning btn-sm" data-toggle="modal"
                                                           data-target="#delete_confirm" {!! (($p4->title === '상여금') || ($p4->title === '특별성과금') || ($p4->title === '특근수당')  || ($p4->title === '특별수당') ? 'disabled' : '') !!}>지우기</a>
                                                    </td>
                                                </tr>
                                                </form>
                                                </tr>
                                            @endforeach
                                            <form method="POST" action="{{ route('insert/payitem4') }}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                <tr>
                                                    <td></td>
                                                    <td><input class="form-control input-sm" name="i_title"></td>
                                                    <td>
                                                        <select class="form-control input-sm" name="i_paycalc">
                                                            @foreach($paycalc as $pc)
                                                                <option value="{{ $pc }}">{{ $pc }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="i_probaion">
                                                            @foreach($colapply as $col)
                                                                <option value="{{ $col }}">{{ $col }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="i_is_severance_pay">
                                                            @foreach($exitpay as $exit)
                                                                <option value="{{ $exit }}">{{ $exit }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="i_is_taxfree">
                                                            @foreach($istexfree as $itf)
                                                                <option value="{{ $itf }}">{{ $itf }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td><button class="btn btn-primary btn-sm">추가</button></td>
                                                </tr>
                                            </form>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
                        <div class="col-lg-2">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>명 칭</th>
                                        <th>사용 여부</th>
                                    </tr>
                                    @foreach($tdeduction as $td)
                                    <tr>
                                        <th>{{ $td->title }}</th>
                                        <form class="checkbox{{$td->id}}" action="{{ route('check/tdeduction',$td->id) }}" method="POST">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                            <td>
                                                <input type="checkbox" name="my-checkbox" data-on-color="info"
                                                       data-off-color="primary" data-animate onchange="$('.checkbox{{ $td->id }}').submit();" value="{!! ($td->is_check == 0) ? 'false' : 'true' !!}" {!! ($td->is_check == 1) ? 'checked' : '' !!}>
                                            </td>
                                        </form>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- confirm modal -->
        <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
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


    <script src="{{ asset('assets/js/hnl/payitem.js') }}" type="text/javascript"></script>

@stop