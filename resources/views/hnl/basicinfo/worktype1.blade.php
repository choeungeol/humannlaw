@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
    기본정보 등록
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <meta name="_token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/vendors/daterangepicker/css/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/clockface/css/clockface.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/vendors/pickadate/css/default.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/pickadate/css/default.date.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/pickadate/css/default.time.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/airDatepicker/css/datepicker.min.css') }}" rel="stylesheet" type="text/css" />

@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>근무 유형</h1>
        <ol class="breadcrumb">
            <li class="active">
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                    메인으로
                </a>
            </li>
        </ol>
    </section>
    <section class="content" ng-app="worktype" ng-controller="worktypeCtrl">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-danger">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 교대제 근무유형
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;" >
                            <li ng-repeat="t in tabs">
                                <a href="#<% t.href %>type" data-toggle="tab" aria-expanded="true"><% t.title %>형</a>
                            </li>
                            <li class="">
                                <div class="form-inline">
                                    <input type="text" class="form-control">
                                    <label>* 기본설정</label>
                                    <select class="form-control">
                                        <option ng-repeat="t in tabs"><% t.title %>형</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            @foreach($typename as $t => $v)
                            <form class="tab-pane fade {!! $t === 'A' ? 'active in' : '' !!}" method="POST" action="">
                                <input type="hidden" name="type" value="{{ $t }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <table class="table table-condensed" style="margin-bottom:0px;">
                                    <tr>
                                        <th style="vertical-align: middle;" rowspan="2">근무시간&nbsp;</th>
                                        <td>시작</td>
                                        <td>
                                            @if($v[0]->sworktime == 0)
                                                <input type="text" class="form-control input-sm datetime2" name="work_start_time{{ $v[0]->sortnum }}" placeholder="09:00">
                                            @else
                                                <input type="text" class="form-control input-sm datetime2" name="work_start_time{{ $v[0]->sortnum }}" placeholder="09:00" value="{{ $v[0]->sworktime }}">
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>종료</td>
                                        <td>
                                            @if($v[0]->eworktime == 0)
                                                <input class="form-control input-sm datetime2" type="text" name="work_end_time{{ $v[0]->sortnum }}" placeholder="09:00" data-format="hh:mm">
                                            @else
                                                <input class="form-control input-sm datetime2" type="text" name="work_end_time{{ $v[0]->sortnum }}" placeholder="09:00" value="{{ $v[0]->eworktime }}" data-format="hh:mm">
                                            @endif
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="table table-condensed" style="margin-bottom:1px;">
                                    <tr>
                                        <th style="vertical-align: middle;" rowspan="2">휴게시간1</th>
                                        <td>시작</td>
                                        <td>
                                            @if($v[0]->sbtime1 == 0)
                                                <input class="form-control input-sm datetime2" type="text" name="break_stime1{{ $v[0]->sortnum }}" placeholder="09:00" data-format="hh:mm">
                                            @else
                                                <input class="form-control input-sm datetime2" type="text" name="break_stime1{{ $v[0]->sortnum }}" placeholder="09:00" value="{{ $v[0]->sbtime1 }}" data-format="hh:mm">
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>종료</td>
                                        <td>
                                            @if($v[0]->ebtime1 == 0)
                                                <input class="form-control input-sm datetime2" type="text" name="break_etime1{{ $v[0]->sortnum }}" placeholder="09:00" data-format="hh:mm">
                                            @else
                                                <input class="form-control input-sm datetime2" type="text" name="break_etime1{{ $v[0]->sortnum }}" placeholder="09:00" value="{{ $v[0]->ebtime1 }}" data-format="hh:mm">
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                                <table class="table table-condensed" style="margin-bottom:1px;">
                                    <tr>
                                        <th style="vertical-align: middle;" rowspan="2">휴게시간2</th>
                                        <td>시작</td>
                                        <td>
                                            @if($v[0]->sbtime2 == 0)
                                                <input class="form-control input-sm datetime2" type="text" name="break_stime2{{ $v[0]->sortnum }}" placeholder="09:00" data-format="hh:mm">
                                            @else
                                                <input class="form-control input-sm datetime2" type="text" name="break_stime2{{ $v[0]->sortnum }}" placeholder="09:00" value="{{ $v[0]->sbtime2 }}" data-format="hh:mm">
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>종료</td>
                                        <td>
                                            @if($v[0]->ebtime2 == 0)
                                                <input class="form-control input-sm datetime2" type="text" name="break_etime2{{ $v[0]->sortnum }}" placeholder="09:00" data-format="hh:mm">
                                            @else
                                                <input class="form-control input-sm datetime2" type="text" name="break_etime2{{ $v[0]->sortnum }}" placeholder="09:00" value="{{ $v[0]->ebtime2 }}" data-format="hh:mm">
                                            @endif
                                        </td>
                                    </tr>
                                </table>
{{--                                <table class="table table-condensed" style="margin-bottom:1px;">
                                    <tr>
                                        <th style="vertical-align: middle;" rowspan="2">휴게시간3</th>
                                        <td>시작</td>
                                        <td>
                                            @if($t->sbtime3 == 0)
                                                <input class="form-control input-sm datetime2" type="text" name="break_stime3{{ $t->sortnum }}" placeholder="09:00" data-format="hh:mm">
                                            @else
                                                <input class="form-control input-sm datetime2" type="text" name="break_stime3{{ $t->sortnum }}" placeholder="09:00" value="{{ $t->sbtime3 }}" data-format="hh:mm">
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>종료</td>
                                        <td>
                                            @if($t->ebtime3 == 0)
                                                <input class="form-control input-sm datetime2" type="text" name="break_etime3{{ $t->sortnum }}" placeholder="09:00" data-format="hh:mm">
                                            @else
                                                <input class="form-control input-sm datetime2" type="text" name="break_etime3{{ $t->sortnum }}" placeholder="09:00" value="{{ $t->ebtime3 }}" data-format="hh:mm">
                                            @endif
                                        </td>
                                    </tr>
                                </table>--}}
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')


        <!-- begining of page level js -->
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/daterangepicker/js/daterangepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/vendors/clockface/js/clockface.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/datepicker.js') }}" type="text/javascript"></script>

    <!-- begining of page level js -->
    <script src="{{ asset('assets/vendors/pickadate/js/picker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/pickadate/js/picker.date.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/pickadate/js/picker.time.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/airDatepicker/js/datepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/airDatepicker/js/datepicker.en.js') }}" type="text/javascript"></script>

    <script type="text/javascript" src="{{ asset('assets/js/hnl/src/timepickerdirective.js') }}"></script>

    <script src="{{ asset('assets/js/hnl/worktype.js') }}" type="text/javascript"></script>

@stop