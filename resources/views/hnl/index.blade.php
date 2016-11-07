@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
    Welcome
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('assets/vendors/fullcalendar/css/fullcalendar.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/pages/calendar_custom.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" media="all" href="{{ asset('assets/vendors/bower-jvectormap/css/jquery-jvectormap-1.2.2.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/only_dashboard.css') }}"/>
    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
    <meta name="_token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}">

    <!-- 차트 css-->

    <link href="{{ asset('assets/vendors/animationcharts/jquery.circliful.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/pages/charts.css') }}" rel="stylesheet" type="text/css" />

@stop

{{-- Page content --}}
@section('content')

    <section class="content-header">
        <h1>노무 관리</h1>
        <ol class="breadcrumb">
            <li class="active">
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                    Program
                </a>
            </li>
        </ol>
    </section>
    <section class="content">
        <!--/row-->
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 margin_10">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                                <i class="livicon" data-name="film" data-size="20" data-loop="true" data-c="#fff" data-hc="white"></i> 공지사항
                        </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <div class="table-scrollable">
                            <table class="table table-condensed table-hover">
                                <thead>
                                <tr>
                                    <th style="text-align:left">No</th>
                                    <th style="text-align:left">제목</th>
                                    <th style="text-align:left">등록일자</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>공지사항1</td>
                                    <td>2016-10-21</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>공지사항2</td>
                                    <td>2016-10-21</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>공지사항3</td>
                                    <td>2016-10-21</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>공지사항4</td>
                                    <td>2016-10-21</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>공지사항5</td>
                                    <td>2016-10-21</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 margin_10">
                <div class="panel panel-danger">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="mail" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i>
                            문의 하기
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body no-padding">
                        <div class="compose row">
                            <label class="col-md-3 hidden-xs" style="padding: 0">To:</label>
                            <input type="text" class="col-md-9 col-xs-9" placeholder="name@email.com " tabindex="1"/>

                            <div class="clear"></div>
                            <label class="col-md-3 hidden-xs" style="padding: 0">Subject:</label>
                            <input type="text" class="col-md-9 col-xs-9" tabindex="1" placeholder="Subject"/>

                            <div class="clear"></div>
                            <div class='box-body'>
                                <form>
                                    <textarea class="textarea textarea_home resize_vertical"
                                              placeholder="Write mail content here"></textarea>
                                </form>
                            </div>
                            <br/>

                            <div class="pull-right">
                                <a href="#" class="btn btn-danger">Send</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--<div class="row ">
            <div class="col-md-8 col-sm-6">
                <div class="panel panel-border">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="dashboard" data-size="20" data-loop="true" data-c="#F89A14"
                               data-hc="#F89A14"></i>
                            Realtime Server Load
                            <small>- Load on the Server</small>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div id="realtimechart" style="height:350px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel blue_gradiant_bg">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="white"></i>
                            Server Stats
                            <small class="white-text">- Monthly Report</small>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="sparkline-chart">
                                    <div class="number" id="sparkline_bar"></div>
                                    <h3 class="title">Network</h3>
                                </div>
                            </div>
                            <div class="margin-bottom-10 visible-sm"></div>
                            <div class="margin-bottom-10 visible-sm"></div>
                            <div class="col-sm-6">
                                <div class="sparkline-chart">
                                    <div class="number" id="sparkline_line"></div>
                                    <h3 class="title">Load Rate</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BEGIN Percentage monitor -->
                <div class="panel green_gradiante_bg ">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="spinner-six" data-size="16" data-loop="false" data-c="#fff"
                               data-hc="white"></i>
                            Result vs Target
                        </h3>
                    </div>
                    <div class="panel-body nopadmar">
                        <div class="row">
                            <div class="col-sm-6 text-center">
                                <h4 class="small-heading">Sales</h4>
                            <span class="chart cir chart-widget-pie widget-easy-pie-1" data-percent="45"><span
                                        class="percent">45</span>
                            </span>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-6 text-center">
                                <h4 class="small-heading">Reach</h4>
                            <span class="chart cir chart-widget-pie widget-easy-pie-3" data-percent="25">
                                <span class="percent">25</span>
                            </span>
                            </div>
                            <!-- /.col-sm-4 -->
                        </div>

                        <!-- /.row -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- END BEGIN Percentage monitor-->
            </div>
        </div>--}}
        <div class="clearfix"></div>
        {{--<div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="panel panel-success panel-border">
                    <div class="panel-heading  border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Calendar
                        </h4>
                    </div>
                    <div class="panel-body">
                        <div id='external-events'></div>
                        <div id="calendar"></div>
                        <div class="box-footer pad-5">
                            <a href="#" class="btn btn-success btn-block createevent_btn" data-toggle="modal" data-target="#myModal">Create event
                            </a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">
                                            <i class="fa fa-plus" style="margin-top: 8px;"></i> Create Event
                                        </h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" id="new-event" class="form-control" placeholder="Event">
                                            <div class="input-group-btn">
                                                <button type="button" id="color-chooser-btn" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                    Type
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu pull-right" id="color-chooser">
                                                    <li>
                                                        <a class="palette-primary" href="#">Primary</a>
                                                    </li>
                                                    <li>
                                                        <a class="palette-success" href="#">Success</a>
                                                    </li>
                                                    <li>
                                                        <a class="palette-info" href="#">Info</a>
                                                    </li>
                                                    <li>
                                                        <a class="palette-warning" href="#">warning</a>
                                                    </li>
                                                    <li>
                                                        <a class="palette-danger" href="#">Danger</a>
                                                    </li>
                                                    <li>
                                                        <a class="palette-default" href="#">Default</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">
                                            Close
                                            <i class="fa fa-times" style="margin-top: 4px;"></i>
                                        </button>
                                        <button type="button" class="btn btn-success pull-left" id="add-new-event" data-dismiss="modal">
                                            <i class="fa fa-plus" style="margin-top: 5px;"></i> Add
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- To do list -->
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="panel panel-primary todolist">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="medal" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i>
                            Tasks
                        </h4>
                    </div>
                    <div class="panel-body nopadmar">
                        <div class="panel-body">
                            <div class="row list_of_items ">
                            </div>
                        </div>
                        <div class="todolist_list adds">
                            {!! Form::open(['class'=>'form', 'id'=>'main_input_box']) !!}
                            <div class="form-group">
                                {!! Form::label('task_description', 'Task description: ') !!}
                                {!! Form::text('task_description', null, ['class' => 'form-control','id'=>'task_description', 'required' => 'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('task_deadline', 'Deadline: ') !!}
                                {!! Form::text('task_deadline', null, ['class' => 'form-control datepicker', 'id'=>'task_deadline', 'data-date-format'=> 'YYYY/MM/DD', 'required' => 'required']) !!}
                            </div>
                            <button type="submit" class="btn btn-primary add_button">
                                Add Task
                            </button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
        <div class="clearfix"></div>
        {{--<div class="row ">
            <div class="col-md-4 col-sm-12">
                <div class="panel panel-danger">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="mail" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i>
                            Quick Mail
                        </h4>
                    </div>
                    <div class="panel-body no-padding">
                        <div class="compose row">
                            <label class="col-md-3 hidden-xs" style="padding: 0">To:</label>
                            <input type="text" class="col-md-9 col-xs-9" placeholder="name@email.com " tabindex="1"/>

                            <div class="clear"></div>
                            <label class="col-md-3 hidden-xs" style="padding: 0">Subject:</label>
                            <input type="text" class="col-md-9 col-xs-9" tabindex="1" placeholder="Subject"/>

                            <div class="clear"></div>
                            <div class='box-body'>
                                <form>
                                    <textarea class="textarea textarea_home resize_vertical"
                                              placeholder="Write mail content here"></textarea>
                                </form>
                            </div>
                            <br/>

                            <div class="pull-right">
                                <a href="#" class="btn btn-danger">Send</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="panel panel-border">

                    <div class="panel-heading">
                        <h4 class="panel-title pull-left margin-top-10">
                            <i class="livicon" data-name="map" data-size="16" data-loop="true" data-c="#515763"
                               data-hc="#515763"></i>
                            Visitors Map
                        </h4>

                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <i class="livicon" data-name="settings" data-size="16" data-loop="true" data-c="#515763"
                                   data-hc="#515763"></i>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a class="panel-collapse collapses" href="#">
                                        <i class="fa fa-angle-up"></i>
                                        <span>Collapse</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="panel-refresh" href="#">
                                        <i class="fa fa-refresh"></i>
                                        <span>Refresh</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="panel-config" href="#panel-config" data-toggle="modal">
                                        <i class="fa fa-wrench"></i>
                                        <span>Configurations</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="panel-expand" href="#">
                                        <i class="fa fa-expand"></i>
                                        <span>Fullscreen</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="panel-body nopadmar">
                        <div id="world-map-markers" style="width:100%; height:300px;"></div>
                    </div>
                </div>
            </div>
        </div>--}}
    </section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/moment/js/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>

    <!-- EASY PIE CHART JS -->
    <script src="{{ asset('assets/vendors/bower-jquery-easyPieChart/js/easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bower-jquery-easyPieChart/js/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bower-jquery-easyPieChart/js/jquery.easingpie.js') }}"></script>
    <!--for calendar-->
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/fullcalendar/js/fullcalendar.min.js') }}" type="text/javascript"></script>
    <!--   Realtime Server Load  -->
    <script src="{{ asset('assets/vendors/flotchart/js/jquery.flot.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/flotchart/js/jquery.flot.resize.js') }}" type="text/javascript"></script>
    <!--Sparkline Chart-->
    <script src="{{ asset('assets/vendors/sparklinecharts/jquery.sparkline.js') }}"></script>
    <!-- Back to Top-->
    <script type="text/javascript" src="{{ asset('assets/vendors/countUp.js/js/countUp.js') }}"></script>
    <!--   maps -->
    <script src="{{ asset('assets/vendors/bower-jvectormap/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bower-jvectormap/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!--  todolist-->
    <script src="{{ asset('assets/js/pages/todolist.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}" type="text/javascript"></script>
    <!-- charts-->
    <script src="{{ asset('assets/vendors/flotchart/js/jquery.flot.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/animatechart/jquery.flot.animator.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/animationcharts/jquery.circliful.min.js') }}" ></script>
    <script src="{{ asset('assets/vendors/flotchart/js/jquery.flot.resize.js') }}"  language="javascript" type="text/javascript" ></script>
    <script src="{{ asset('assets/js/pages/animation-chart.js') }}" ></script>


@stop