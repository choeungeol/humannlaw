@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
UI Example
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <meta name="_token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/vendors/fullcalendar/css/fullcalendar.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/fullcalendar/css/fullcalendar.print.css') }}" rel="stylesheet"  media='print' type="text/css">
    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/pages/calendar_custom.css') }}" rel="stylesheet" type="text/css" />
    {{-- 차트--}}
    <link href="{{ asset('assets/vendors/animationcharts/jquery.circliful.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/pages/charts.css') }}" rel="stylesheet" type="text/css" />
    {{-- 파이차트--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/c3/c3.min.css') }}" rel="stylesheet" type="text/css" />
    <link  rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/morrisjs/morris.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/pages/piecharts.css') }}" rel="stylesheet" type="text/css" />


@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>UI example</h1>
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
                <div class="panel panel-success panel-border">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff" id="livicon-56" style="width: 16px; height: 16px;"></i> Calendar
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div id='external-events'></div>
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-success panel-border">
                    <div class="panel-heading border-light">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="vector-circle" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i>
                            Chart Example 1
                        </h3>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div id="chart1" class="animation-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-6">
                <!-- Basic charts strats here-->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="vector-circle" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i>
                            Chart Example 2
                        </h3>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div id="chart2" class="animation-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="vector-circle" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i>
                            Chart Example 3
                        </h3>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div id="chart3" class="animation-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> D3 Basic Pie chart
                        </h3>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <div id="pie1"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> D3 Pie chart with tooltips
                        </h3>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <div id="pie2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/fullcalendar/js/fullcalendar.min.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('assets/js/pages/calendar.js') }}"  type="text/javascript"></script>

    <script src="{{ asset('assets/vendors/flotchart/js/jquery.flot.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/animatechart/jquery.flot.animator.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/animationcharts/jquery.circliful.min.js') }}" ></script>
    <script src="{{ asset('assets/vendors/flotchart/js/jquery.flot.resize.js') }}"  language="javascript" type="text/javascript" ></script>
    <script src="{{ asset('assets/js/pages/animation-chart.js') }}" ></script>

    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/flotchart/js/jquery.flot.pie.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/d3/d3.min.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/d3pie/d3pie.min.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/c3/c3.min.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/morrisjs/morris.min.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/js/pages/custompiecharts.js') }}" ></script>

@stop