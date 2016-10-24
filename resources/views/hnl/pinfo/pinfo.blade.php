@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
    인사정보 등록
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <meta name="_token" content="{{ csrf_token() }}">

@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Welcome to GOOD LABOR (사원 정보)</h1>
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
        <form method="post" class="form-horizontal">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 사원 정보
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-2">
                                <img width="200px" src="http://www.iconsfind.com/wp-content/uploads/2015/10/20151012_561baed03a54e.png">
                            </div>
                            <div class="col-lg-10">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="first_Name">사원번호:</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-sm" id="first_Name" placeholder="사원번호">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="input_Email">영문명:</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-sm" id="input_Email" placeholder="영문명">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="input_Password">주민번호:</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-sm" id="input_Password" placeholder="주민번호">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="input_Password">근무상태:</label>
                                            <div class="col-md-9">
                                                <select class="form-control input-sm">
                                                    <option>정상</option>
                                                    <option>퇴직</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="input_Password">입사일자:</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-sm" id="input_Password" placeholder="입사일자">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">소속:</label>
                                            <div class="col-md-9">
                                                <select class="form-control input-sm">
                                                    <option></option>
                                                    <option>1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="last_Name">성명:</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-sm" id="last_Name" placeholder="성명">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="phone_Number">한자명:</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control input-sm" id="phone_Number" placeholder="한자명">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="confirm_Password">e-메일:</label>
                                            <div class="col-md-9">
                                                <input type="email" class="form-control input-sm" id="confirm_Password" placeholder="e-메일">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="postal_Address">입사구분:</label>
                                            <div class="col-md-9">
                                                <select class="form-control input-sm">
                                                    <option></option>
                                                    <option>1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">직급호봉:</label>
                                            <div class="col-md-9">
                                                <select class="form-control input-sm">
                                                    <option></option>
                                                    <option>1</option>
                                                </select>
                                            </div>
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
                <div class="panel panel-primary">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 근무 정보
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="first_Name">사업장:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="first_Name" placeholder="사업장">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="input_Email">직위:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="input_Email" placeholder="직위">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="input_Password">승급일자:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="input_Password" placeholder="승급일자">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="input_Password">직무:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="input_Password" placeholder="직무">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="first_Name">재입사일자:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="first_Name" placeholder="재입사일자">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="input_Email">직책:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="input_Email" placeholder="직책">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="input_Password">직군:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="input_Password" placeholder="직군">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="input_Password">퇴직일:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="input_Password" placeholder="퇴직일">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="first_Name">그룹전입일:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="first_Name" placeholder="그룹전입일">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="input_Email">승격일자:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="input_Email" placeholder="승격일자">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="input_Password">직종:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control input-sm" id="input_Password" placeholder="직종">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')



@stop