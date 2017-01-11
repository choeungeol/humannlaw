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
        <h1>사업장 기본정보</h1>
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
                            <form method="post"  class="form-horizontal" action="{{ route('insert/cbinfo') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                @foreach($company as $c)
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="company_name">사업장명칭:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="company_name" name="company_name" placeholder="사업장명칭" value="{{ $c->co_name }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="company_no">사업자 번호:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="company_no" name="company_no" placeholder="사업자 번호" value="{{ $c->co_no }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="corporation_regino">법인 등록번호:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="corporation_regino" name="corporation_regino" placeholder="법인 등록번호" value="{{ $c->corp_regino }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="representative_name">대표자명:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="representative_name" name="representative_name" placeholder="대표자명" value="{{ $c->repre_name }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="representative_phone">대표자 핸드폰:</label>
                                        <div class="col-md-9">
                                            <input type="tel" class="form-control" id="representative_phone" name="representative_phone" placeholder="대표자 핸드폰" value="{{ $c->repre_phone }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="representative_regino">대표자 주민번호:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="representative_regino" name="representative_regino" placeholder="대표자 주민번호:" value="{{ $c->repre_regino }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="representative_addr">대표자 주소:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="representative_addr" name="representative_post" placeholder="우편번호" value="{{ $c->repre_post }}">
                                            <input type="text" class="form-control" id="representative_addr" name="representative_addr1" placeholder="주소1" value="{{ $c->repre_addr1 }}">
                                            <input type="text" class="form-control" id="representative_addr" name="representative_addr2" placeholder="주소2" value="{{ $c->repre_addr2 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="company_addr">사업장 소재지:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="company_post" name="company_post" placeholder="우편번호" value="{{ $c->co_post }}">
                                            <input type="text" class="form-control" id="company_addr1" name="company_addr1" placeholder="주소1" value="{{ $c->co_addr1 }}">
                                            <input type="text" class="form-control" id="company_addr2" name="company_addr2" placeholder="주소2" value="{{ $c->co_addr2 }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="tel_no">전화 번호:</label>
                                        <div class="col-md-9">
                                            <input type="tel" class="form-control" id="tel_no" name="tel_no" placeholder="전화번호" value="{{ $c->tel_no }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="fax_no">팩스 번호:</label>
                                        <div class="col-md-9">
                                            <input type="tel" class="form-control" id="fax_no" name="fax_no" placeholder="팩스번호" value="{{ $c->fax_no }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="company_email">사업장 Email:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="company_email"  name="company_email" placeholder="사업장 Email" value="{{ $c->co_email }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="PIC_name">담당자 명칭:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="PIC_name" name="PIC_name" placeholder="담당자 명칭" value="{{ $c->pic_name }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="PIC_tel_no">담당자 연락처:</label>
                                        <div class="col-md-9">
                                            <input type="tel" class="form-control" id="PIC_tel_no" name="PIC_tel_no" placeholder="전화번호" value="{{ $c->pic_telno }}">
                                        </div>
                                    </div>
                                    <div class="form-group striped-col ">
                                        <label class="col-md-3 control-label" for="form-file-input">사업자 도장</label>
                                        <div class="col-md-9 pad-top20 ">
                                            <input type="file" id="company_stamp">
                                        </div>
                                    </div>
                                    <div class="form-group striped-col ">
                                        <label class="col-md-3 control-label" for="form-file-input">회사 로고</label>
                                        <div class="col-md-9 pad-top20 ">
                                            <input type="file" id="company_logo">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="business_type">업종:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="business_type" name="business_type" placeholder="업종" value="{{ $c->b_type }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="business_condition">업태:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="business_condition" name="business_condition" placeholder="업태" value="{{ $c->b_condition }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="pay_basic_date">급여 기준일:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="pay_basic_date" name="pay_basic_date" placeholder="급여 기준일" value="{{ $c->pay_basicdate }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="pay_day">급여 지급일:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="pay_day" name="pay_day" placeholder="급여 지급일" value="{{ $c->pay_day }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="business_calc_manner">일할계산 방법:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="business_calc_manner" name="business_calc_manner" placeholder="일할계산 방법" value="{{ $c->b_cal_manner }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="btn btn-block btn-rounded btn-primary btn-large" style="font-size:20px;padding:10px;">저장</button>
                                </div>
                                @endforeach
                            </form>
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