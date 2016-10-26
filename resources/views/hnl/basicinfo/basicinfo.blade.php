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
        <h1>Welcome to GOOD LABOR</h1>
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
                <div class="panel panel-danger">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 사업장 기본정보
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form method="post" class="form-horizontal">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="first_Name">사업장명:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="first_Name" placeholder="사업장명">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="input_Email">사업자 번호:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="input_Email" placeholder="사업자 번호">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="input_Password">대표자명:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="input_Password" placeholder="대표자명">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="input_Password">주민번호:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="input_Password" placeholder="주민번호">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="Zip_Code">대표자 핸드폰:</label>
                                        <div class="col-md-9">
                                            <input type="tel" class="form-control" id="Zip_Code" placeholder="대표자 핸드폰">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="city">업종:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="city" placeholder="업종">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="city">전화번호:</label>
                                        <div class="col-md-9">
                                            <input type="tel" class="form-control" id="city" placeholder="전화번호">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="last_Name">사업자 구분:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="last_Name" placeholder="사업자 구분">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="phone_Number">비밀번호:</label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" id="phone_Number" placeholder="비밀번호">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="confirm_Password">비밀번호 확인:</label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" id="confirm_Password" placeholder="비밀번호 확인">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="postal_Address">사업장 소재지:</label>
                                        <div class="col-md-9">
                                            <textarea rows="3" class="form-control resize_vertical" id="postal_Address" placeholder="사업장 소재지"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="postal_Address">업태:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="last_Name" placeholder="업태">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="postal_Address">팩스번호:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="last_Name" placeholder="팩스번호">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="last_Name">법인등록번호:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="last_Name" placeholder="법인등록번호">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="phone_Number">주간 근로일:</label>
                                        <div class="col-md-9">
                                            <select class="form-control">
                                                <option>5일근로</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="confirm_Password">종목:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="confirm_Password" placeholder="종목">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="postal_Address">사업개시일:</label>
                                        <div class="col-md-9">
                                            <input type="date" class="form-control" id="confirm_Password" placeholder="종목">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="postal_Address">특이사항:</label>
                                        <div class="col-md-9">
                                            <textarea rows="3" class="form-control resize_vertical" id="postal_Address" placeholder="특이사항"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-danger">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 사업장 추가정보
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form method="post" class="form-horizontal">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="first_Name">담당자명:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="first_Name" placeholder="담당자명">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="input_Email">대표자 주소:</label>
                                        <div class="col-md-9">
                                                <input type="text" class="form-control" id="input_Email" placeholder="우편번호">
                                                <input type="text" class="form-control" id="input_Email" placeholder="주소1">
                                                <input type="text" class="form-control" id="input_Email" placeholder="주소2">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="input_Password">담당자전화:</label>
                                        <div class="col-md-9">
                                            <input type="tel" class="form-control" id="input_Password" placeholder="담당자전화">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="Zip_Code">사업장 규모:</label>
                                        <div class="col-md-9">
                                            <input type="tel" class="form-control" id="Zip_Code" placeholder="대표자 핸드폰">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="city">사업자도장:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="city" placeholder="사업자도장">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="city">정년연령:</label>
                                        <div class="col-md-9">
                                            <input type="tel" class="form-control" id="city" placeholder="정년연령">
                                            ex) 50
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="last_Name">취업규칙신고:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="last_Name" placeholder="취업규칙신고">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="postal_Address">급여지급일:</label>
                                        <div class="col-md-9">
                                            <input type="date" class="form-control" id="confirm_Password" placeholder="급여지급일">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="postal_Address">임금산출기간:</label>
                                        <div class="col-md-9">
                                            <textarea rows="3" class="form-control resize_vertical" id="postal_Address" placeholder="임금산출기간"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <a href="#" class="button button-block button-rounded button-primary button-large">저장</a>
            </div>
        </div>
    </section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')



@stop