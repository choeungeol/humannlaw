@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
    근태관리 등록
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
                <div class="panel panel-primary">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 연차 사용
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <table class="table table-condensed table-bordered">
                            <caption>
                                <i class="livicon" data-name="adjust" data-size="12" data-c="#000" data-hc="#fff" data-loop="true"></i> 적용년도 2013년
                            </caption>
                            <thead>
                            <tr>
                                <th rowspan="2">번</th>
                                <th rowspan="2">성명</th>
                                <th colspan="3">입사일자</th>
                                <th colspan="2">휴가 발생일수</th>
                                <th colspan="2"></th>
                            </tr>
                            <tr>
                                <th>년</th>
                                <th>월</th>
                                <th>일</th>
                                <th>직접기재</th>
                                <th>직접기재</th>
                                <th>1st</th>
                                <th>2nd</th>
                            </tr>
                            </thead>
                            <tbody>
                            @for ($i = 1; $i < 8; $i++)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>홍길동</td>
                                <td>2012</td>
                                <td>9</td>
                                <td>5</td>
                                <td>직접기재</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @stop

    {{-- page level scripts --}}
    @section('footer_scripts')

            <!--for calendar-->
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/fullcalendar/js/fullcalendar.min.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('assets/js/pages/calendar.js') }}"  type="text/javascript"></script>

@stop