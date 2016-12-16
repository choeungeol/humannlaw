@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
    인사정보 등록
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
        <h1>사원 정보</h1>
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
        <div class="form-horizontal">
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
                            <div class="bs-example">
                                <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                                    <li class="active">
                                        <a href="#pregi" data-toggle="tab">사원 정보</a>
                                    </li>
                                    <li>
                                        <a href="#pinfo" data-toggle="tab">근로자 정보</a>
                                    </li>
                                    <li>
                                        <a href="#winfo" data-toggle="tab">근무 정보</a>
                                    </li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <form class="tab-pane fade active in" id="pregi" method="POST" action="{{ route('insert/pinfo') }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <div class="panel panel-primary">
                                            <div class="panel-heading border-light">
                                                <h4 class="panel-title">
                                                    <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                                                       data-l="true"></i> 일반 정보
                                                </h4>
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                                                </span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <img width="200px" src="http://www.iconsfind.com/wp-content/uploads/2015/10/20151012_561baed03a54e.png">
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="form-file-input">사원 사진</label>
                                                            <div class="col-md-9 pad-top20 ">
                                                                <input type="file" id="profile_pic">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">사원번호:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control input-sm" name="employee_num" placeholder="사원번호">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">주소:</label>
                                                                <div class="col-md-3">
                                                                    <input type="text" class="form-control input-sm" name="employee_post" placeholder="우편번호">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control input-sm" name="employee_addr1" placeholder="주소1">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">추가입력:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control input-sm" name="employee_addr2" placeholder="주소2">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">근무상태:</label>
                                                                <div class="col-md-9">
                                                                    <select class="form-control input-sm" name="work_condition">
                                                                        <option value="A">정상</option>
                                                                        <option value="B">퇴직</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">성명:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control input-sm" name="name" placeholder="성명">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">연락처:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control input-sm" name="tel" placeholder="연락처">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">입사일자:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control input-sm" name="join_day" placeholder="입사일자">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">국적:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control input-sm" name="country" placeholder="국적">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">주민번호:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control input-sm" name="regi_no" placeholder="주민번호">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">이메일:</label>
                                                                <div class="col-md-9">
                                                                    <input type="email" class="form-control input-sm" name="email" placeholder="이메일">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">퇴사일자:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control input-sm" name="exit_day" placeholder="퇴사일자">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">급여지급일:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control input-sm" name="payday" placeholder="급여지급일">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                                            <label class="control-label col-md-3">부서:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-sm" name="job" placeholder="부서">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">채용형태:</label>
                                                            <div class="col-md-3">
                                                                <select class="form-control input-sm" name="employee_type">
                                                                    <option value="A">정규직</option>
                                                                    <option value="B">계약직</option>
                                                                    <option value="C">단시간</option>
                                                                    <option value="D">일용직</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" class="form-control input-sm" name="contract" placeholder="계약기간">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input type="text" class="form-control input-sm" name="renewal" placeholder="재갱신횟수">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">근무유형:</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control input-sm" name="worktype">
                                                                    <option value="A">A타입</option>
                                                                    <option value="B">B타입</option>
                                                                    <option value="C">C타입</option>
                                                                    <option value="D">D타입</option>
                                                                    <option value="E">E타입</option>
                                                                    <option value="F">F타입</option>
                                                                    <option value="G">G타입</option>
                                                                    <option value="H">H타입</option>
                                                                    <option value="I">I타입</option>
                                                                    <option value="J">J타입</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">취업장소:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-sm" name="location" placeholder="취업장소">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">직위:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-sm" name="position" placeholder="직위">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">급여형태:</label>
                                                            <div class="col-md-3">
                                                                <select class="form-control input-sm" name="paytype">
                                                                    <option value="A">연봉</option>
                                                                    <option value="B">월급</option>
                                                                    <option value="C">일당</option>
                                                                    <option value="D">시급</option>
                                                                </select>
                                                            </div>
                                                            <label class="control-label col-md-3">수습급여비율:</label>
                                                            <div class="col-md-3">
                                                                <select class="form-control input-sm" name="first_pay">
                                                                    <option value="A">해당없음</option>
                                                                    <option value="B">90%</option>
                                                                    <option value="C">80%</option>
                                                                    <option value="D">70%</option>
                                                                    <option value="E">60%</option>
                                                                    <option value="F">50%</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">근로시간:</label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control input-sm datetime2" name="swtime" placeholder="시작">
                                                            </div>
                                                            <div class="col-md-1"> ~ </div>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control input-sm datetime2" name="ewtime" placeholder="종료">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">사업장:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-sm" name="workplace" placeholder="사업장">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">담당업무</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-sm" name="active_partner" placeholder="담당업무">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">휴게시간:</label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control input-sm datetime2" name="sbtime" placeholder="시작">
                                                            </div>
                                                            <div class="col-md-1"> ~ </div>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control input-sm datetime2" name="ebtime" placeholder="종료">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading border-light">
                                                <h4 class="panel-title">
                                                    <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                                                       data-l="true"></i> 개인 정보
                                                </h4>
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                                                </span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">최종학력:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-sm" name="last_ability" placeholder="최종학력">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">결혼여부:</label>
                                                            <div class="col-md-9">
                                                                <input type="hidden" name="ismarried" value="false">
                                                                <input type="checkbox" name="ismarried" class="square" value="true" placeholder="결혼여부">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">혈액형</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-sm" name="blood" placeholder="혈액형">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">특기:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-sm" name="speciality" placeholder="특기">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">급여은행:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-sm" name="pay_bank" placeholder="급여은행">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">보훈여부:</label>
                                                            <div class="col-md-9">
                                                                <input type="hidden" name="isveterans" value="false">
                                                                <input type="checkbox" name="isveterans" class="square" value="true">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">신장:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-sm" name="height" placeholder="신장">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">종교:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-sm" name="faith" placeholder="종교">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">병력구분:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-sm" name="medical_history" placeholder="병력구분">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">계좌 번호:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-sm" name="account_num" placeholder="계좌 번호">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">장애인여부:</label>
                                                            <div class="col-md-9">
                                                                <input type="hidden" name="isdisabled" value="false">
                                                                <input type="checkbox" name="isdisabled" class="square" value="true" placeholder="장애인여부">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">체중:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-sm" name="weight" placeholder="체중">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">취미:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-sm" name="hobby" placeholder="취미">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">부양가족수:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-sm" name="have_family" placeholder="부양가족수">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">예금주:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-sm" name="account_name" placeholder="예금주">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <button class="btn btn-block btn-rounded btn-primary btn-large">저장</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="tab-pane fade" id="pinfo">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading border-light">
                                                <h4 class="panel-title">
                                                    <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                                                       data-l="true"></i> 근로자 정보
                                                </h4>
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                                                </span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                <div class="table-scrollable">
                                                    <table class="table table-hover table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>사번</th>
                                                            <th>이름</th>
                                                            <th>국적</th>
                                                            <th>부서</th>
                                                            <th>직위</th>
                                                            <th>입사일</th>
                                                            <th>퇴사일</th>
                                                            <th>주민번호</th>
                                                            <th>주소</th>
                                                            <th>연락처</th>
                                                            <th>이메일</th>
                                                            <th>은행</th>
                                                            <th>계좌번호</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($pinfo as $p)
                                                        <tr>
                                                            <td>{{ $p->employee_num }}</td>
                                                            <td>{{ $p->name }}</td>
                                                            <td>{{ $p->country }}</td>
                                                            <td>{{ $p->job }}</td>
                                                            <td>{{ $p->position }}</td>
                                                            <td>{{ $p->join_day }}</td>
                                                            <td>{{ $p->exit_day }}</td>
                                                            <td>{{ $p->regi_no }}</td>
                                                            <td>{{ $p->employee_post }} {{ $p->employee_addr1 }} {{ $p->employee_addr2 }}</td>
                                                            <td>{{ $p->tel }}</td>
                                                            <td>{{ $p->email }}</td>
                                                            <td>{{ $p->paybank }}</td>
                                                            <td>{{ $p->account_num }}</td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="winfo">
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
                                                <div class="table-scrollable">
                                                    <table class="table table-hover table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>사번</th>
                                                            <th>이름</th>
                                                            <th>담당업무</th>
                                                            <th>취업장소</th>
                                                            <th>출근시각</th>
                                                            <th>퇴근시각</th>
                                                            <th>총휴게시간</th>
                                                            <th>근무유형</th>
                                                            <th>급여유형</th>
                                                            <th>급여액</th>
                                                            <th>채용형태</th>
                                                            <th>수습여부</th>
                                                            <th>수습율</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($pinfo as $p)
                                                            <tr>
                                                                <td>{{ $p->employee_num }}</td>
                                                                <td>{{ $p->name }}</td>
                                                                <td>{{ $p->active_partner }}</td>
                                                                <td>{{ $p->location }}</td>
                                                                <td>{{ $p->swtime }}</td>
                                                                <td>{{ $p->ewtime }}</td>
                                                                <td>{{ $p->btime }}시간</td>
                                                                <td>{{ $p->worktype }}</td>
                                                                <td>{{ $p->paytype }}</td>
                                                                <td></td>
                                                                <td>{{ $p->employee_type }}</td>
                                                                <td></td>
                                                                <td>{{ $p->first_pay }}</td>
                                                            </tr>
                                                        @endforeach
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
@stop