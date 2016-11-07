@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
    인사정보 등록
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <meta name="_token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/vendors/pickadate/css/default.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/pickadate/css/default.date.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/pickadate/css/default.time.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/airDatepicker/css/datepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/flatpickrCalendar/css/flatpickr.min.css') }}" rel="stylesheet" type="text/css"/>

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
                        <div class="bs-example">
                            <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                                <li class="active">
                                    <a href="#pregi" data-toggle="tab">근로자 등록</a>
                                </li>
                                <li>
                                    <a href="#pinfo" data-toggle="tab">근로자 정보</a>
                                </li>
                                <li>
                                    <a href="#winfo" data-toggle="tab">근무 정보</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade active in" id="pregi">

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
                                                                <input class="form-control flatpickr input-sm" data-weeknumbers=true placeholder="입사일자">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="input_Password">퇴사일자:</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control flatpickr input-sm" data-weeknumbers=true placeholder="퇴사일자">
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
                                                            <label class="control-label col-md-3" for="phone_Number">우편번호:</label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control input-sm" id="phone_Number" placeholder="우편번호">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="phone_Number">주소1:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-sm" id="phone_Number" placeholder="주소1">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="phone_Number">주소2:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-sm" id="phone_Number" placeholder="주소2">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3" for="postal_Address">연락처:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control input-sm" id="phone_Number" placeholder="연락처">
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
                                                        <label class="control-label col-md-3" for="first_Name">부서:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="first_Name" placeholder="부서">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="input_Email">직위:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="input_Email" placeholder="직위">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="input_Password">채용형태:</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control input-sm">
                                                                <option>정규직</option>
                                                                <option>계약직</option>
                                                                <option>단시간 근로자</option>
                                                                <option>일용직</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="input_Password">계약기간:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="input_Password" placeholder="계약기간">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="input_Password">재갱신 횟수:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="input_Password" placeholder="직무">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="input_Password">급여형태:</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control input-sm">
                                                                <option>수습기간</option>
                                                                <option>수습급여비율</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="input_Password">근무형태:</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control input-sm">
                                                                <option>정상</option>
                                                                <option>퇴직</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="first_Name">취업장소:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="first_Name" placeholder="취업장소">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="first_Name">담당업무:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="first_Name" placeholder="담당업무">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="input_Email">근로시간:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="input_Email" placeholder="근로시간">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="input_Password">휴게시간:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="input_Password" placeholder="휴게시간">
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
                                                        <label class="control-label col-md-3" for="first_Name">최종학력:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="first_Name" placeholder="최종학력">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="input_Email">보훈 여부:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="input_Email" placeholder="보훈 여부">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="input_Password">장애인 여부:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="input_Password" placeholder="장애인 여부">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="input_Password">결혼 여부:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="input_Password" placeholder="결혼 여부">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="input_Password">은행명:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="input_Password" placeholder="은행명">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="first_Name">신장:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="first_Name" placeholder="신장">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="input_Email">체중:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="input_Email" placeholder="체중">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="input_Password">혈액형:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="input_Password" placeholder="혈액형">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="input_Password">종교:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="input_Password" placeholder="종교">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="input_Password">계좌 번호:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="input_Password" placeholder="계좌 번호">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="first_Name">취미:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="first_Name" placeholder="취미">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="input_Email">특기:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="input_Email" placeholder="특기">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="input_Password">병역구분:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="input_Password" placeholder="병역구분">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="input_Password">국적:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="input_Password" placeholder="국적">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="input_Password">예금주:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control input-sm" id="input_Password" placeholder="예금주">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <table class="table table-condensed">
                                                        <thead>
                                                        <tr>
                                                            <th>부양가족수</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-inline">
                                                                    <label>총 (본인포함)
                                                                        <input type="text" class="form-control input-sm" style="width:50px;"> 20세 이하 자녀
                                                                        <select class="form-control input-sm">
                                                                            <option>0인</option>
                                                                            <option>1인</option>
                                                                        </select>
                                                                    </label><br>
                                                                    <label>부모님(60세 이상, 연소득 100만원 이하)
                                                                        <select class="form-control input-sm">
                                                                            <option>0인</option>
                                                                            <option>1인</option>
                                                                        </select>
                                                                        배우자 유무
                                                                        <label>
                                                                            <input type="checkbox" class="square" />
                                                                        </label>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="#" class="button button-block button-rounded button-primary button-large">저장</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pinfo">
                                    <div class="table-scrollable">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                            <tr>
                                                <th rowspan="2"></th>
                                                <th colspan="3">인적정보</th>
                                                <th colspan="4">직무정보</th>
                                                <th colspan="4">개인정보</th>
                                            </tr>
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
                                                <th>기타</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>00001</td>
                                                <td>Kelly</td>
                                                <td>USA</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>00002</td>
                                                <td>Ramos</td>
                                                <td>Brazil</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>00003</td>
                                                <td>Cox</td>
                                                <td>Africa</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>00004</td>
                                                <td>Greer</td>
                                                <td>korea</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="winfo">
                                    <p>근무정보란</p>
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

    <script src="{{ asset('assets/vendors/pickadate/js/picker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/pickadate/js/picker.date.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/pickadate/js/picker.time.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/flatpickrCalendar/js/flatpickr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/airDatepicker/js/datepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/airDatepicker/js/datepicker.en.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/custom_datepicker.js') }}" type="text/javascript"></script>


    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-switch/js/bootstrap-switch.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/switchery/js/switchery.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/card/lib/js/jquery.card.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/js/pages/radio_checkbox.js') }}"></script>

@stop