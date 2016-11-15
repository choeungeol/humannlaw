@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
사용자 삭제
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
    <!-- end page css -->
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>사용자 삭제</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                            메인
                        </a>
                    </li>
{{--                    <li><a href="#"> Users</a></li>
                    <li class="active">Deleted users</li>--}}
                </ol>
            </section>
            <!-- Main content -->
         <section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <i class="livicon" data-name="users-remove" data-size="18" data-c="#ffffff" data-hc="#ffffff"></i>
                    삭제 사용자 목록
                </h4>
            </div>
            <div class="panel-body">
                <table class="table table-bordered" id="table">
                    <thead>
                    <tr class="filters">
                        <th>성</th>
                        <th>이름</th>
                        <th>이메일</th>
                        <th>생성일</th>
                        <th>설정</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{!! $user->first_name !!}</td>
                            <td>{!! $user->last_name !!}</td>
                            <td>{!! $user->email !!}</td>
                            <td>{!! $user->created_at->diffForHumans() !!}</td>
                            <td>
                                <a href="{{ route('restore/user', $user->id) }}"><i class="livicon" data-name="user-flag" data-c="#6CC66C" data-hc="#6CC66C" data-size="18"></i></a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

        
    @stop

{{-- page level scripts --}}
@section("footer_scripts")
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}" ></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
@stop