@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
    상세 사용자 정보
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/vendors/x-editable/css/bootstrap-editable.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/pages/user_profile.css') }}" rel="stylesheet"/>
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <!--section starts-->
        <h1>사용자 정보</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    메인으로
                </a>
            </li>
{{--            <li>
                <a href="#">Users</a>
            </li>
            <li class="active">User Profile</li>--}}
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav  nav-tabs ">
                    <li class="active">
                        <a href="#tab1" data-toggle="tab">
                            <i class="livicon" data-name="user" data-size="16" data-c="#000" data-hc="#000" data-loop="true"></i>
                            사용자 정보</a>
                    </li>
                    <li>
                        <a href="#tab2" data-toggle="tab">
                            <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            비밀번호 변경</a>
                    </li>
{{--                    <li>
                        <a href="{{ URL::to('admin/user_profile') }}" >
                            <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            기본 사용자 정보 </a>
                    </li>--}}

                </ul>
                <div  class="tab-content mar-top">
                    <div id="tab1" class="tab-pane fade active in">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">

                                            사용자 정보
                                        </h3>

                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-4">
                                            <div class="img-file">
                                                @if($user->pic)
                                                    <img src="{!! url('/').'/uploads/users/'.$user->pic !!}" alt="profile pic" class="img-max">
                                                @else
                                                    <img src="{{ asset('assets/img/authors/avatar3.jpg') }}" alt="profile pic">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped" id="users">

                                                        <tr>
                                                            <td>{{--@lang('users/title.first_name')--}}성</td>
                                                            <td>
                                                                <p class="user_name_max">{{ $user->first_name }}</p>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>{{--@lang('users/title.last_name')--}}이름</td>
                                                            <td>
                                                                <p class="user_name_max">{{ $user->last_name }}</p>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>{{--@lang('users/title.email')--}}이메일</td>
                                                            <td>
                                                                {{ $user->email }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                {{--@lang('users/title.gender')--}}성별
                                                            </td>
                                                            <td>
                                                                {{ $user->gender }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{--@lang('users/title.dob')--}}생년월일</td>

                                                            @if($user->dob=='0000-00-00')
                                                                <td>
                                                                </td>
                                                            @else
                                                                <td>
                                                                    {{ $user->dob }}
                                                                </td>
                                                            @endif
                                                        </tr>
                                                        <tr>
                                                            <td>{{--@lang('users/title.country')--}}나라</td>
                                                            <td>
                                                                {{ $user->country }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{--@lang('users/title.state')--}}지역</td>
                                                            <td>
                                                                {{ $user->state }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{--@lang('users/title.city')--}}도시</td>
                                                            <td>
                                                                {{ $user->city }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{--@lang('users/title.address')--}}주소</td>
                                                            <td>
                                                                {{ $user->address }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{--@lang('users/title.postal')--}}국가코드</td>
                                                            <td>
                                                                {{ $user->postal }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{--@lang('users/title.status')--}}상태</td>
                                                            <td>

                                                                @if($user->deleted_at)
                                                                    Deleted
                                                                @elseif($activation = Activation::completed($user))
                                                                    Activated
                                                                @else
                                                                    Pending
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{--@lang('users/title.created_at')--}}생성일</td>
                                                            <td>
                                                                {!! $user->created_at->diffForHumans() !!}
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12 pd-top">
                                <form class="form-horizontal">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label for="inputpassword" class="col-md-3 control-label">
                                                비밀번호
                                                <span class='require'>*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                            </span>
                                                    <input type="password" id="password" placeholder="Password"
                                                           class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnumber" class="col-md-3 control-label">
                                                비밀번호 확인
                                                <span class='require'>*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                            </span>
                                                    <input type="password" id="password-confirm" placeholder="Confirm Password"
                                                           class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn btn-primary" id="change-password">완료
                                            </button>
                                            &nbsp;
                                            <input type="reset" class="btn btn-default hidden-xs" value="Reset"></div>
                                    </div>
                                </form>
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
    <!-- Bootstrap WYSIHTML5 -->
    <script  src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#change-password').click(function (e) {
                e.preventDefault();
                var check = false;
                var sendData = '_token={{ Session::getToken() }}' + '&password=' + $('#password').val() + '&password-confirm=' + $('#password-confirm').val();
                if ($('#password').val() === $('#password-confirm').val()) {
                    check = true;
                }
                if (check) {
                    $.ajax({
                        url: '{{ route('passwordreset', $user->id) }}',
                        type: "post",
                        data: sendData,
                        success: function (data) {
                            alert('password reset successful');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert('error in password reset');
                        }
                    });
                } else {
                    alert('password and password confirm does not match');
                }
            });
        });
    </script>
@stop