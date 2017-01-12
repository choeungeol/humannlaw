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

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/colReorder.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/rowReorder.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/scroller.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/tables.css') }}" />

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
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white" data-l="true"></i> 급여 정보
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                    일반정보
                            </h4>
                        </div>
                        <div class="panel-body">
                            <table class="table table-condensed table-bordered">
                                <caption>
                                    <a class="btn btn-raised btn-info btn-large" data-toggle="modal" data-href="#searchmember" href="#searchmember">검색</a>
                                </caption>
                                @if(!$searchp)
                                    <tr>
                                        <th>사원번호</th>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                        <th>성 명</th>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                        <th>주민번호</th>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                    </tr>
                                    <tr>
                                        <th>부 서</th>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                        <th>직 위</th>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                        <th>사업장</th>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                    </tr>
                                    <tr>
                                        <th>근무상태</th>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                        <th>채용형태</th>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                        <th>수습기간</th>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                    </tr>
                                    <tr>
                                        <th>수습비율</th>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                        <th>입사일</th>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                        <th>퇴사일</th>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                    </tr>
                                @else
                                    <tr>
                                        <th>사원번호</th>
                                        <td><input type="text" class="form-control input-sm" disabled value="{{ $searchp->employee_num }}"></td>
                                        <th>성 명</th>
                                        <td><input type="text" class="form-control input-sm" disabled value="{{ $searchp->name }}"></td>
                                        <th>주민번호</th>
                                        <td><input type="text" class="form-control input-sm" disabled value="{{ $searchp->regi_no }}"></td>
                                    </tr>
                                    <tr>
                                        <th>부 서</th>
                                        <td>
                                            @foreach($jobtitle as $job)
                                                @if($job->id == $searchp->job)
                                                    <input type="text" class="form-control input-sm" disabled value="{{ $searchp->job }}">
                                                @endif
                                            @endforeach
                                        </td>
                                        <th>직 위</th>
                                        <td>
                                            @foreach($position as $pos)
                                                @if($pos->id == $searchp->position)
                                                    <input type="text" class="form-control input-sm" disabled value="{{ $searchp->position }}">
                                                @endif
                                            @endforeach
                                        </td>
                                        <th>사업장</th>
                                        <td><input type="text" class="form-control input-sm" disabled value=""></td>
                                    </tr>
                                    <tr>
                                        <th>근무상태</th>
                                        <td><input type="text" class="form-control input-sm" disabled value="{{ $searchp->work_condition }}"></td>
                                        <th>채용형태</th>
                                        <td><input type="text" class="form-control input-sm" disabled value="{{ $searchp->employee_type }}"></td>
                                        <th>수습기간</th>
                                        <td><input type="text" class="form-control input-sm" disabled value=""></td>
                                    </tr>
                                    <tr>
                                        <th>수습비율</th>
                                        <td><input type="text" class="form-control input-sm" disabled value="{{ $searchp->first_pay }}"></td>
                                        <th>입사일</th>
                                        <td><input type="text" class="form-control input-sm" disabled value="{{ $searchp->join_day }}"></td>
                                        <th>퇴사일</th>
                                        <td><input type="text" class="form-control input-sm" disabled value="{{ $searchp->exit_day }}"></td>
                                    </tr>
                                @endif
                            </table>
                        </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    급여정보
                                </h4>
                            </div>
                            <div class="panel-body">
                                <table class="table table-condensed table-bordered">
                                    <tr>
                                        <th>급여유형</th>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                        <th>근무유형</th>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                        <th>주민번호</th>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                    </tr>
                                    <tr>
                                        <th>월급여액</th>
                                        <td><input type="text" class="form-control input-sm" name="mpay"></td>
                                        <th>생산직비과세 여부( Y , N )</th>
                                        <td><input type="text" class="form-control input-sm" disabled value="Y"></td>
                                        <th></th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>일용직 세액공제 여부( Y , N )</th>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                        <th>국외 근로 비과세 여부</th>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                        <th></th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>통상시급</th>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                        <th>입사일</th>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                        <th>퇴사일</th>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    급여항목
                                </h4>
                            </div>
                            <div class="panel-body">
                                <table class="table table-condensed table-bordered">
                                    <tr>
                                        <th rowspan="2">통상임금</th><th>기본급</th><th>주휴수당</th><th>직책수당</th><th>근속수당</th><th>직무수당</th><th> - </th>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                        <td><input type="text" class="form-control input-sm"></td>
                                        <td><input type="text" class="form-control input-sm"></td>
                                        <td><input type="text" class="form-control input-sm"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th rowspan="2">법정수당</th><th>연장수당</th><th>야간수당</th><th>휴일수당</th><th>휴일연장</th><th>휴일야간</th><th>연차수당</th>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                        <td><input type="text" class="form-control input-sm" disabled></td>
                                    </tr>
                                    <tr>
                                        <th rowspan="2">복리후생</th><th>식대</th><th>차량유지비</th><th>육아수당</th><th>연구활동비</th><th>명절떡값</th><th> - </th>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control input-sm"></td>
                                        <td><input type="text" class="form-control input-sm"></td>
                                        <td><input type="text" class="form-control input-sm"></td>
                                        <td><input type="text" class="form-control input-sm"></td>
                                        <td><input type="text" class="form-control input-sm"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th rowspan="2">약정수당</th><th>상여금</th><th>특별성과금</th><th>특근수당</th><th>특별수당</th><th> - </th><th> - </th>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control input-sm"></td>
                                        <td><input type="text" class="form-control input-sm"></td>
                                        <td><input type="text" class="form-control input-sm"></td>
                                        <td><input type="text" class="form-control input-sm"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- search member modal-->
        <div class="modal fade in" id="searchmember" tabindex="-1" role="dialog" aria-hidden="false">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">사원 검색</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table table-condensed table-bordered" id="table2">
                            <thead>
                            <tr>
                                <th>순번</th>
                                <th>사번</th>
                                <th>이름</th>
                                <th>부서</th>
                                <th>직위</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pinfo as $key=>$p)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $p->employee_num }}</td>
                                <td><a href="{{ route('payinfo_view',$p->id) }}">{{ $p->name }}</a></td>
                                <td>
                                    @foreach($jobtitle as $job)
                                        @if($job->id == $p->job)
                                            {{ $job->name }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($position as $pos)
                                        @if($pos->id == $p->position)
                                            {{ $pos->pos_name }}
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                        <button class="btn btn-primary">등록</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END modal-->
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

    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/jeditable/js/jquery.jeditable.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.buttons.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.colReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.responsive.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.rowReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.colVis.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.html5.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/pdfmake.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/vfs_fonts.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.scroller.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/table-advanced.js') }}" ></script>

@stop