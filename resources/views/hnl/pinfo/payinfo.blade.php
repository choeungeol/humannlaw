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
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 급여 정보
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="panel panel-blue">
                            <div class="panel-heading">
                                <h4 class="panel-title">

                                </h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-4">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label class="control-label col-lg-3" for="first_Name">급여유형:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control input-sm" id="first_Name" placeholder="급여유형">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label class="control-label col-lg-3" for="first_Name">급여금액:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control input-sm" id="first_Name" placeholder="급여금액">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label class="control-label col-lg-3" for="first_Name">근무유형:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control input-sm" id="first_Name" placeholder="근무유형">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h4 class="panel-title">

                                </h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-4">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label class="control-label col-lg-3" for="first_Name">사원번호:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control input-sm" id="first_Name" placeholder="사원번호">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3" for="first_Name">성명:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control input-sm" id="first_Name" placeholder="성명">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3" for="first_Name">근무상태:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control input-sm" id="first_Name" placeholder="근무상태">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label class="control-label col-lg-3" for="first_Name">사업장:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control input-sm" id="first_Name" placeholder="사업장">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3" for="first_Name">부서:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control input-sm" id="first_Name" placeholder="부서">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3" for="first_Name">직위:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control input-sm" id="first_Name" placeholder="직위">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label class="control-label col-lg-3" for="first_Name">채용형태:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control input-sm" id="first_Name" placeholder="채용형태">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3" for="first_Name">계약기간:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control input-sm" id="first_Name" placeholder="계약기간">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3" for="first_Name">입사일자:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control input-sm" id="first_Name" placeholder="입사일자">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3" for="first_Name">퇴사일자:</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control input-sm" id="first_Name" placeholder="퇴사일자">
                                            </div>
                                        </div>
                                    </div>
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

    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-switch/js/bootstrap-switch.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/switchery/js/switchery.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/card/lib/js/jquery.card.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/js/pages/radio_checkbox.js') }}"></script>
@stop