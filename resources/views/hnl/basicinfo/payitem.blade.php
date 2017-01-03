@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
    기본정보 등록
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <meta name="_token" content="{{ csrf_token() }}">

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

    <section class="content">
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($payitem1 as $p1)
                                                <tr>
                                                    <td>{{ $p1->id }}</td>
                                                    <td>
                                                        <input type="text" class="form-control input-sm" readonly value="{{ $p1->title }}">
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="paycalc">
                                                            @foreach($paycalc as $pc)
                                                                <option {!! ($pc === $p1->paycalc  ? 'selected' : '') !!} value="{{ $p1->paycalc }}">{{ $pc }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="probaion">
                                                            @foreach($colapply as $col)
                                                                <option {!! ($col === $p1->probaion  ? 'selected' : '') !!} value="{{ $p1->probaion }}">{{ $col }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="is_severance_pay">
                                                            @foreach($exitpay as $exit)
                                                                <option {!! ($exit === $p1->is_severance_pay  ? 'selected' : '') !!} value="{{ $p1->is_severance_pay }}">{{ $exit }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="is_taxfree">
                                                            @foreach($istexfree as $itf)
                                                                <option {!! ($itf === $p1->is_taxfree  ? 'selected' : '') !!} value="{{ $p1->is_taxfree }}">{{ $itf }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    @if($p1->title === '주휴수당')
                                                    <td>
                                                        <select class="form-control input-sm" name="in_basicpay">
                                                            @foreach($inbasicpay as $ibi)
                                                                <option {!! ($ibi === $p1->in_basicpay  ? 'selected' : '') !!} value="{{ $p1->in_basicpay }}">{{ $ibi }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    @else
                                                    <td>

                                                    </td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                            <form method="POST" action="{{ route('insert/payitem1') }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                            <tr>
                                                <td></td>
                                                <td><input class="form-control input-sm" name="i_title"></td>
                                                <td>
                                                    <select class="form-control input-sm" name="i_paycalc">
                                                        @foreach($paycalc as $pc)
                                                            <option {!! ($pc === $p1->paycalc  ? 'selected' : '') !!} value="{{ $p1->paycalc }}">{{ $pc }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" name="i_probaion">
                                                        @foreach($colapply as $col)
                                                            <option {!! ($col === $p1->probaion  ? 'selected' : '') !!} value="{{ $p1->probaion }}">{{ $col }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" name="i_is_severance_pay">
                                                        @foreach($exitpay as $exit)
                                                            <option {!! ($exit === $p1->is_severance_pay  ? 'selected' : '') !!} value="{{ $p1->is_severance_pay }}">{{ $exit }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm" name="i_is_taxfree">
                                                        @foreach($istexfree as $itf)
                                                            <option {!! ($itf === $p1->is_taxfree  ? 'selected' : '') !!} value="{{ $p1->is_taxfree }}">{{ $itf }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td><button class="btn btn-primary">추가</button></td>
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
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($payitem2 as $p2)
                                                <tr>
                                                    <td>{{ $p2->id }}</td>
                                                    <td>
                                                        <input type="text" class="form-control input-sm" readonly value="{{ $p2->title }}">
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="paycalc">
                                                            @foreach($paycalc as $pc)
                                                                <option {!! ($pc === $p2->paycalc  ? 'selected' : '') !!} value="{{ $p2->paycalc }}">{{ $pc }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="probaion">
                                                            @foreach($colapply as $col)
                                                                <option {!! ($col === $p2->probaion  ? 'selected' : '') !!} value="{{ $p2->probaion }}">{{ $col }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="is_severance_pay">
                                                            @foreach($exitpay as $exit)
                                                                <option {!! ($exit === $p2->is_severance_pay  ? 'selected' : '') !!} value="{{ $p2->is_severance_pay }}">{{ $exit }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="is_taxfree">
                                                            @foreach($istexfree as $itf)
                                                                <option {!! ($itf === $p2->is_taxfree  ? 'selected' : '') !!} value="{{ $p2->is_taxfree }}">{{ $itf }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td><input class="form-control input-sm" name="i_title"></td>
                                                <td><input class="form-control input-sm" name="i_paycalc"></td>
                                                <td><input class="form-control input-sm" name="i_probaion"></td>
                                                <td><input class="form-control input-sm" name="i_is_severance_pay"></td>
                                                <td><input class="form-control input-sm" name="i_is_taxfree"></td>
                                            </tr>
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
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($payitem3 as $p3)
                                                <tr>
                                                    <td>{{ $p3->id }}</td>
                                                    <td>
                                                        <input type="text" class="form-control input-sm" readonly value="{{ $p3->title }}">
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="paycalc">
                                                            @foreach($paycalc as $pc)
                                                                <option {!! ($pc === $p3->paycalc  ? 'selected' : '') !!} value="{{ $p3->paycalc }}">{{ $pc }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="probaion">
                                                            @foreach($colapply as $col)
                                                                <option {!! ($col === $p3->probaion  ? 'selected' : '') !!} value="{{ $p3->probaion }}">{{ $col }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="is_severance_pay">
                                                            @foreach($exitpay as $exit)
                                                                <option {!! ($exit === $p3->is_severance_pay  ? 'selected' : '') !!} value="{{ $p3->is_severance_pay }}">{{ $exit }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="is_taxfree">
                                                            @foreach($istexfree as $itf)
                                                                <option {!! ($itf === $p3->is_taxfree  ? 'selected' : '') !!} value="{{ $p3->is_taxfree }}">{{ $itf }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td><input class="form-control input-sm" name="i_title"></td>
                                                <td><input class="form-control input-sm" name="i_paycalc"></td>
                                                <td><input class="form-control input-sm" name="i_probaion"></td>
                                                <td><input class="form-control input-sm" name="i_is_severance_pay"></td>
                                                <td><input class="form-control input-sm" name="i_is_taxfree"></td>
                                            </tr>
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
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($payitem4 as $p4)
                                                <tr>
                                                    <td>{{ $p4->id }}</td>
                                                    <td>
                                                        <input type="text" class="form-control input-sm" readonly value="{{ $p4->title }}">
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="paycalc">
                                                            @foreach($paycalc as $pc)
                                                                <option {!! ($pc === $p4->paycalc  ? 'selected' : '') !!} value="{{ $p4->paycalc }}">{{ $pc }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="probaion">
                                                            @foreach($colapply as $col)
                                                                <option {!! ($col === $p4->probaion  ? 'selected' : '') !!} value="{{ $p4->probaion }}">{{ $col }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="is_severance_pay">
                                                            @foreach($exitpay as $exit)
                                                                <option {!! ($exit === $p4->is_severance_pay  ? 'selected' : '') !!} value="{{ $p4->is_severance_pay }}">{{ $exit }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control input-sm" name="is_taxfree">
                                                            @foreach($istexfree as $itf)
                                                                <option {!! ($itf === $p4->is_taxfree  ? 'selected' : '') !!} value="{{ $p4->is_taxfree }}">{{ $itf }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td><input class="form-control input-sm" name="i_title"></td>
                                                <td><input class="form-control input-sm" name="i_paycalc"></td>
                                                <td><input class="form-control input-sm" name="i_probaion"></td>
                                                <td><input class="form-control input-sm" name="i_is_severance_pay"></td>
                                                <td><input class="form-control input-sm" name="i_is_taxfree"></td>
                                            </tr>
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
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>공제명칭</th>
                                        <th>공제코드</th>
                                        <th>출력명칭</th>
                                        <th>사용여부</th>
                                        <th>출력순번</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>소득세</td>
                                        <td>01</td>
                                        <td>소득세</td>
                                        <td><input class="custom-checkbox" type="checkbox"></td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>주민세</td>
                                        <td>02</td>
                                        <td>주민세</td>
                                        <td><input class="custom-checkbox" type="checkbox"></td>
                                        <td>2</td>
                                    </tr>
                                </tbody>
                            </table>
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