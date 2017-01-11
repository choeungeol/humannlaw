@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
    기본정보 등록
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <meta name="_token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>직위 부서</h1>
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
            <div class="col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 부서 코드
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
                                    <th>ID</th><th>실부서 코드</th><th>입력 코드</th><th>명칭</th><th>사용여부</th><th>삭제</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($jobtitles as $jt)
                                <tr>
                                    <td>{{ $jt->id }}</td>
                                    <td>{{ $jt->jobcode }}</td>
                                    <td>{{ $jt->code }}</td>
                                    <td>
                                        <a href="{{ route('update/jobtitle', $jt->id) }}" data-toggle="modal" data-target="#edit_modal">{{ $jt->name }}</a>
                                    </td>
                                    <td>
                                        @if($jt->use == 1)
                                        사용
                                        @else
                                        미사용
                                        @endif
                                    </td>
                                    <td><a href="{{ route('confirm-delete/jobtitle', $jt->id) }}" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#delete_confirm">지우기</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div>
                                <a class="btn btn-raised btn-info btn-large" data-toggle="modal" data-href="#jobcreate" href="#jobcreate">등록</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 직위 코드
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
                                    <th>ID</th><th>직위코드</th><th>직위구분코드</th><th>직위명</th><th>사용여부</th><th>삭제</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($postitles as $pt)
                                <tr>
                                    <td>{{ $pt->id }}</td>
                                    <td>{{ $pt->pos_code }}</td>
                                    <td>{{ $pt->pos_div_code }}</td>
                                    <td>
                                        <a href="{{ route('edit/postitle', $pt->id) }}" data-toggle="modal" data-target="#pos_edit_modal">{{ $pt->pos_name }}</a>
                                    </td>
                                    <td>
                                        @if($pt->pos_use == 1)
                                            사용
                                        @else
                                            미사용
                                        @endif</td>
                                    <td><a href="{{ route('confirm-delete/postitle', $pt->id) }}" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#pos_delete_confirm">지우기</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div>
                                <a class="btn btn-raised btn-info btn-large" data-toggle="modal" data-href="#poscreate" href="#poscreate">등록</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jobtitle modal-->
        <div class="modal fade in" id="jobcreate" tabindex="-1" role="dialog" aria-hidden="false">
            <form class="modal-dialog modal-lg" action="./jobtitle/create"  method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">부서등록</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="jobcode">실부서코드</label>
                            <div class="col-md-9">
                                <input id="jobcode" name="jobcode" type="text" class="form-control" required></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="code" required>구분코드</label>
                            <div class="col-md-9">
                                <input id="code" name="code" type="text" class="form-control"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name" required>부서명</label>
                            <div class="col-md-9">
                                <input id="name" name="name" type="text" class="form-control"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="memo" required>비고</label>
                            <div class="col-md-9">
                                <input id="memo" name="memo" type="text" class="form-control"></div>
                        </div>
                        <div class="form-group">
                            <label>사용여부</label>
                            <label class="radio-inline">
                                <input type="radio" class="custom-radio" name="use" value="1" required>예</label>
                            <label class="radio-inline">
                                <input type="radio" class="custom-radio" name="use" value="0" required>아니오</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                        <button class="btn btn-primary">등록</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- END modal-->

        <!-- postitle modal-->
        <div class="modal fade in" id="poscreate" tabindex="-1" role="dialog" aria-hidden="false">
            <form class="modal-dialog modal-lg" action="./jobtitle/pos_create"  method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">직위등록</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="pos_code">직위코드</label>
                            <div class="col-md-9">
                                <input type="text" id="pos_code" name="pos_code" class="form-control" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="pos_div_code">직위구분코드</label>
                            <div class="col-md-9">
                                <input id="pos_div_code" name="pos_div_code" type="text" class="form-control" required /></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="pos_name">직위명</label>
                            <div class="col-md-9">
                                <input id="pos_name" name="pos_name" type="text" class="form-control" required></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="pos_memo">비고</label>
                            <div class="col-md-9">
                                <input id="pos_memo" name="pos_memo" type="text" class="form-control" required></div>
                        </div>
                        <div class="form-group">
                            <label>사용여부</label>
                            <label class="radio-inline">
                                <input type="radio" class="custom-radio" name="pos_use" value="1" required>예</label>
                            <label class="radio-inline">
                                <input type="radio" class="custom-radio" name="pos_use" value="0" required>아니오</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                        <button class="btn btn-primary">등록</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- END modal-->


        <!-- confirm modal -->
        <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                </div>
            </div>
        </div>
    </section>
    <!-- pos confirm modal -->
    <div class="modal fade" id="pos_delete_confirm" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>
    </section>

    <!-- edit modal -->
    <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>

    <!-- pos edit modal -->
    <div class="modal fade" id="pos_edit_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>
    </section>


@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" ></script>
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form_examples.js') }}"></script>
@stop