<ul id="menu" class="page-sidebar-menu">
    <li {!! (Request::is('hnl') ? 'class="active"' : '') !!}>
        <a href="/hnl">
            <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA"
               data-loop="true"></i>
            <span class="title">Main</span>
        </a>
    </li>
    <li>
        <a href="/hnl/test">
            <i class="livicon" data-name="asterisk" data-size="18" data-c="#418BCA" data-hc="#418BCA"
               data-loop="true"></i>
            <span class="title">UI Example</span>
        </a>
    </li>
    <li {!! (Request::is('hnl/users') || Request::is('hnl/users/create') || Request::is('hnl/user_profile') || Request::is('hnl/users/*') || Request::is('hnl/deleted_users') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="user" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">회원 관리</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('hnl/users') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('hnl/users') }}">
                    <i class="fa fa-angle-double-right"></i>
                    사용자 목록
                </a>
            </li>
            <li {!! (Request::is('hnl/users/create') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('hnl/users/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    사용자 추가
                </a>
            </li>
            <li {!! ((Request::is('hnl/users/*')) && !(Request::is('hnl/users/create')) ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::route('hnl.users.show',Sentinel::getUser()->id) }}">
                    <i class="fa fa-angle-double-right"></i>
                    사용자 프로필
                </a>
            </li>
            <li {!! (Request::is('hnl/deleted_users') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('hnl/deleted_users') }}">
                    <i class="fa fa-angle-double-right"></i>
                    사용자 삭제
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('hnl/groups') || Request::is('hnl/groups/create') || Request::is('hnl/groups/*') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="users" data-size="18" data-c="#418BCA" data-hc="#418BCA"
               data-loop="true"></i>
            <span class="title">그룹 관리</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('hnl/groups') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('hnl/groups') }}">
                    <i class="fa fa-angle-double-right"></i>
                    그룹 목록
                </a>
            </li>
            <li {!! (Request::is('hnl/groups/create') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('hnl/groups/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    그룹 추가
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('hnl/basicinfo/basicinfo') || Request::is('hnl/basicinfo/jobtitle') || Request::is('hnl/basicinfo/payitem') || Request::is('hnl/basicinfo/paytype') || Request::is('hnl/basicinfo/worktype') || Request::is('hnl/basicinfo/worktype1') || Request::is('hnl/basicinfo/worktype2') || Request::is('hnl/basicinfo/worktype3') ||Request::is('hnl/basicinfo/worktype4')? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="medal" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">기본정보 등록</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('hnl/basicinfo/basicinfo') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('hnl/basicinfo/basicinfo') }}">
                    <i class="fa fa-angle-double-right"></i>
                    사업장 정보
                </a>
            </li>
            <li {!! (Request::is('hnl/basicinfo/jobtitle') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('hnl/basicinfo/jobtitle') }}">
                    <i class="fa fa-angle-double-right"></i>
                    직위 부서
                </a>
            </li>
            <li {!! (Request::is('hnl/basicinfo/payitem') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('hnl/basicinfo/payitem') }}">
                    <i class="fa fa-angle-double-right"></i>
                    급여 항목
                </a>
            </li>
            <li {!! (Request::is('hnl/basicinfo/paytype') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('hnl/basicinfo/paytype') }}">
                    <i class="fa fa-angle-double-right"></i>
                    급여 유형
                </a>
            </li>
            <li  {!! (Request::is('hnl/basicinfo/worktype') || Request::is('hnl/basicinfo/worktype1') || Request::is('hnl/basicinfo/worktype2') || Request::is('hnl/basicinfo/worktype3') ||Request::is('hnl/basicinfo/worktype4') ? 'class="active"' : '') !!}>
                <a href="#">
                    <i class="fa fa-angle-double-right"></i>
                    <span class="title">근무유형</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li {!! (Request::is('hnl/basicinfo/worktype') ? 'class="active"' : '') !!}>
                        <a href="{{ URL::to('hnl/basicinfo/worktype') }}">
                            <i class="fa fa-angle-double-right"></i>
                            일반 근무유형
                        </a>
                    </li>
                    <li {!! (Request::is('hnl/basicinfo/worktype1') ? 'class="active"' : '') !!}>
                        <a href="{{ URL::to('hnl/basicinfo/worktype1') }}">
                            <i class="fa fa-angle-double-right"></i>
                            교대제 근무유형
                        </a>
                    </li>
                    <li {!! (Request::is('hnl/basicinfo/worktype2') ? 'class="active"' : '') !!}>
                        <a href="{{ URL::to('hnl/basicinfo/worktype2') }}">
                            <i class="fa fa-angle-double-right"></i>
                            격일제 근무유형
                        </a>
                    </li>
                    <li {!! (Request::is('hnl/basicinfo/worktype3') ? 'class="active"' : '') !!}>
                        <a href="{{ URL::to('hnl/basicinfo/worktype3') }}">
                            <i class="fa fa-angle-double-right"></i>
                            감시단속 근무유형
                        </a>
                    </li>
                    <li {!! (Request::is('hnl/basicinfo/worktype4') ? 'class="active"' : '') !!}>
                        <a href="{{ URL::to('hnl/basicinfo/worktype4') }}">
                            <i class="fa fa-angle-double-right"></i>
                            일용직 근무유형
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('hnl/pinfo/pinfo') || Request::is('hnl/pinfo/payinfo') || Request::is('hnl/pinfo/pcard')  ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="users-add" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">인사정보 등록</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('hnl/pinfo/pinfo') || Request::is('hnl/pinfo/payinfo') || Request::is('hnl/pinfo/pcard')  ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('hnl/pinfo/pinfo') }}">
                    <i class="fa fa-angle-double-right"></i>
                    사원 정보
                </a>
            </li>
            <li {!! (Request::is('hnl/pinfo/payinfo') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('hnl/pinfo/payinfo') }}">
                    <i class="fa fa-angle-double-right"></i>
                    급여 정보
                </a>
            </li>
            <li {!! (Request::is('hnl/pinfo/pcard') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('hnl/pinfo/pcard') }}">
                    <i class="fa fa-angle-double-right"></i>
                    인사기록카드
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('hnl/work/addwork') || Request::is('hnl/work/workaday') || Request::is('hnl/work/workatime') || Request::is('hnl/work/yearoff') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="inbox" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">근태관리 등록</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('hnl/work/addwork') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('hnl/work/addwork') }}">
                    <i class="fa fa-angle-double-right"></i>
                    연봉/월급제
                </a>
            </li>
            <li {!! (Request::is('hnl/work/workaday') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('hnl/work/workaday') }}">
                    <i class="fa fa-angle-double-right"></i>
                    일용직
                </a>
            </li>
            <li {!! (Request::is('hnl/work/workatime') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('hnl/work/workatime') }}">
                    <i class="fa fa-angle-double-right"></i>
                    시급제
                </a>
            </li>
            <li {!! (Request::is('hnl/work/yearoff') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('hnl/work/yearoff') }}">
                    <i class="fa fa-angle-double-right"></i>
                    연차 사용
                </a>
            </li>
        </ul>
    </li>
    <li>
    <li {!! (Request::is('hnl/pay/pmanage') || Request::is('hnl/pay/pchange') || Request::is('hnl/pay/plist')  || Request::is('hnl/pay/preceipt') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="money" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">급여 관리</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('hnl/pay/pmanage') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('hnl/pay/pmanage') }}">
                    <i class="fa fa-angle-double-right"></i>
                    급여 기준표
                </a>
            </li>
            <li {!! (Request::is('hnl/pay/pchange') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('hnl/pay/pchange') }}">
                    <i class="fa fa-angle-double-right"></i>
                    변동사항 입력
                </a>
            </li>
            <li {!! (Request::is('hnl/pay/plist') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('hnl/pay/plist') }}">
                    <i class="fa fa-angle-double-right"></i>
                    급여 대장
                </a>
            </li>
            <li {!! (Request::is('hnl/pay/preceipt') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('hnl/pay/preceipt') }}">
                    <i class="fa fa-angle-double-right"></i>
                    급여 명세서
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('hnl/retire/rcalc') || Request::is('hnl/retire/rinfo') || Request::is('hnl/retire/rreceipt')  ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="user-remove" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">퇴직 관리</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('hnl/retire/rcalc') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('hnl/retire/rcalc') }}">
                    <i class="fa fa-angle-double-right"></i>
                    퇴직금 계산
                </a>
            </li>
            <li {!! (Request::is('hnl/retire/rinfo') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('hnl/retire/rinfo') }}">
                    <i class="fa fa-angle-double-right"></i>
                    퇴직금 현황
                </a>
            </li>
            <li {!! (Request::is('hnl/retire/rreceipt') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('hnl/retire/rreceipt') }}">
                    <i class="fa fa-angle-double-right"></i>
                    퇴직금 내역서
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#">
            <i class="livicon" data-name="notebook" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">노무 관리</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="#">
                    <i class="fa fa-angle-double-right"></i>
                    근로계약서
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-angle-double-right"></i>
                    취업 규칙
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-angle-double-right"></i>
                    노사 협의회
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-angle-double-right"></i>
                    안전 보건위원회
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-angle-double-right"></i>
                    안전 보건 규정
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-angle-double-right"></i>
                    노무 관리서식
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#">
            <i class="livicon" data-name="user" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">상담 센터</span>
            <span class="fa arrow"></span>
        </a>
    </li>
    {{--<li {!! (Request::is('admin/datatables') || Request::is('admin/editable_datatables') || Request::is('admin/dropzone') || Request::is('admin/multiple_upload')? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="medal" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">Laravel Examples</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/datatables') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/datatables') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Ajax Data Tables
                </a>
            </li>
            <li {!! (Request::is('admin/editable_datatables') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/editable_datatables') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Editable Data Tables
                </a>
            </li>
            <li {!! (Request::is('admin/dropzone') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/dropzone') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Drop Zone
                </a>
            </li>
            <li {!! (Request::is('admin/multiple_upload') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/multiple_upload') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Multiple File Upload
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/generator_builder') ? 'class="active"' : '') !!}>
        <a href="{{  URL::to('admin/generator_builder') }}">
            <i class="livicon" data-name="shield" data-size="18" data-c="#F89A14" data-hc="#F89A14"
               data-loop="true"></i>
            Generator Builder
        </a>
    </li>
    <li {!! (Request::is('admin/form_builder') || Request::is('admin/form_builder2') || Request::is('admin/buttonbuilder') || Request::is('admin/gridmanager') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="wrench" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">Builders</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/form_builder') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/form_builder') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Form Builder
                </a>
            </li>
            <li {!! (Request::is('admin/form_builder2') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/form_builder2') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Form Builder 2
                </a>
            </li>
            <li {!! (Request::is('admin/buttonbuilder') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/buttonbuilder') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Button Builder
                </a>
            </li>
            <li {!! (Request::is('admin/gridmanager') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/gridmanager') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Page Builder
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/form_examples') || Request::is('admin/editor') || Request::is('admin/editor2')
    || Request::is('admin/form_layout') || Request::is('admin/validation') || Request::is('admin/formelements') || Request::is('admin/dropdowns')
    || Request::is('admin/radio_checkbox') || Request::is('admin/ratings') || Request::is('admin/form_layouts') || Request::is('admin/formwizard')
    || Request::is('admin/accordionformwizard') || Request::is('admin/datepicker') | Request::is('admin/advanced_datepickers')? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="doc-portrait" data-c="#67C5DF" data-hc="#67C5DF"
               data-size="18" data-loop="true"></i>
            <span class="title">Forms</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/form_examples') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/form_examples') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Form Examples
                </a>
            </li>
            <li {!! (Request::is('admin/editor') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/editor') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Form Editors
                </a>
            </li>
            <li {!! (Request::is('admin/editor2') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/editor2') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Form Editors2
                </a>
            </li>
            <li {!! (Request::is('admin/validation') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/validation') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Form Validation
                </a>
            </li>
            <li {!! (Request::is('admin/formelements') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/formelements') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Form Elements
                </a>
            </li>
            <li {!! (Request::is('admin/dropdowns') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/dropdowns') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Drop Downs
                </a>
            </li>
            <li {!! (Request::is('admin/radio_checkbox') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/radio_checkbox') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Radio and Checkbox
                </a>
            </li>
            <li {!! (Request::is('admin/ratings') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/ratings') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Ratings
                </a>
            </li>
            <li {!! (Request::is('admin/form_layouts') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/form_layouts') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Form Layouts
                </a>
            </li>
            <li {!! (Request::is('admin/formwizard') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/formwizard') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Form Wizards
                </a>
            </li>
            <li {!! (Request::is('admin/accordionformwizard') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/accordionformwizard') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Accordion Wizards
                </a>
            </li>

            <li {!! (Request::is('admin/datepicker') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/datepicker') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Date Pickers
                </a>
            </li>
            <li {!! (Request::is('admin/advanced_datepickers') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/advanced_datepickers') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Advanced Date Pickers
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/animatedicons') || Request::is('admin/buttons') || Request::is('admin/advanced_buttons') || Request::is('admin/tabs_accordions') || Request::is('admin/panels') || Request::is('admin/icon') || Request::is('admin/color') || Request::is('admin/grid') || Request::is('admin/carousel') || Request::is('admin/advanced_modals') || Request::is('admin/tagsinput') || Request::is('admin/nestable_list') || Request::is('admin/sortable_list') || Request::is('admin/toastr') || Request::is('admin/notifications')|| Request::is('admin/treeview_jstree')|| Request::is('admin/sweetalert') || Request::is('admin/session_timeout') || Request::is('admin/portlet_draggable') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="brush" data-c="#F89A14" data-hc="#F89A14" data-size="18"
               data-loop="true"></i>
            <span class="title">UI Features</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/animatedicons') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/animatedicons') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Animated Icons
                </a>
            </li>
            <li {!! (Request::is('admin/buttons') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/buttons') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Buttons
                </a>
            </li>
            <li {!! (Request::is('admin/advanced_buttons') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/advanced_buttons') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Advanced Buttons
                </a>
            </li>
            <li {!! (Request::is('admin/tabs_accordions') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/tabs_accordions') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Tabs and Accordions
                </a>
            </li>
            <li {!! (Request::is('admin/panels') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/panels') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Panels
                </a>
            </li>
            <li {!! (Request::is('admin/icon') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/icon') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Font Icons
                </a>
            </li>
            <li {!! (Request::is('admin/color') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/color') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Color Picker Slider
                </a>
            </li>
            <li {!! (Request::is('admin/grid') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/grid') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Grid Layout
                </a>
            </li>
            <li {!! (Request::is('admin/carousel') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/carousel') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Carousel
                </a>
            </li>
            <li {!! (Request::is('admin/advanced_modals') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/advanced_modals') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Advanced Modals
                </a>
            </li>
            <li {!! (Request::is('admin/tagsinput') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/tagsinput') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Tags Input
                </a>
            </li>
            <li {!! (Request::is('admin/nestable_list') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/nestable_list') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Nestable List
                </a>
            </li>

            <li {!! (Request::is('admin/sortable_list') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/sortable_list') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Sortable List
                </a>
            </li>

            <li {!! (Request::is('admin/treeview_jstree') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/treeview_jstree') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Treeview and jsTree
                </a>
            </li>

            <li {!! (Request::is('admin/toastr') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/toastr') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Toastr Notifications
                </a>
            </li>

            <li {!! (Request::is('admin/sweetalert') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/sweetalert') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Sweet Alert
                </a>
            </li>

            <li {!! (Request::is('admin/notifications') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/notifications') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Notifications
                </a>
            </li>
            <li {!! (Request::is('admin/session_timeout') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/session_timeout') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Session Timeout
                </a>
            </li>
            <li {!! (Request::is('admin/portlet_draggable') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/portlet_draggable') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Draggable Portlets
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/general') || Request::is('admin/pickers') || Request::is('admin/x-editable') || Request::is('admin/timeline') || Request::is('admin/transitions') || Request::is('admin/sliders') || Request::is('admin/knob') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="lab" data-c="#EF6F6C" data-hc="#EF6F6C" data-size="18"
               data-loop="true"></i>
            <span class="title">UI Components</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/general') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/general') }}">
                    <i class="fa fa-angle-double-right"></i>
                    General Components
                </a>
            </li>
            <li {!! (Request::is('admin/pickers') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/pickers') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Pickers
                </a>
            </li>
            <li {!! (Request::is('admin/x-editable') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/x-editable') }}">
                    <i class="fa fa-angle-double-right"></i>
                    X-editable
                </a>
            </li>
            <li {!! (Request::is('admin/timeline') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/timeline') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Timeline
                </a>
            </li>
            <li {!! (Request::is('admin/transitions') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/transitions') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Transitions
                </a>
            </li>
            <li {!! (Request::is('admin/sliders') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/sliders') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Sliders
                </a>
            </li>
            <li {!! (Request::is('admin/knob') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/knob') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Circles Sliders
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/simple_table') || Request::is('admin/responsive_tables') || Request::is('admin/advanced_tables') || Request::is('admin/advanced_tables2') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="table" data-c="#418BCA" data-hc="#418BCA" data-size="18"
               data-loop="true"></i>
            <span class="title">DataTables</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/simple_table') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/simple_table') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Simple tables
                </a>
            </li>
            <li {!! (Request::is('admin/advanced_tables') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/advanced_tables') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Advanced Data Tables
                </a>
            </li>
            <li {!! (Request::is('admin/advanced_tables2') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/advanced_tables2') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Advanced Data Tables2
                </a>
            </li>

            <li {!! (Request::is('admin/responsive_tables') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/responsive_tables') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Responsive Datatables
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/charts') || Request::is('admin/piecharts') || Request::is('admin/charts_animation') || Request::is('admin/jscharts') || Request::is('admin/sparklinecharts') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="barchart" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">Charts</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/charts') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/charts') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Flot Charts
                </a>
            </li>
            <li {!! (Request::is('admin/piecharts') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/piecharts') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Pie Charts
                </a>
            </li>
            <li {!! (Request::is('admin/charts_animation') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/charts_animation') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Animated Charts
                </a>
            </li>
            <li {!! (Request::is('admin/jscharts') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/jscharts') }}">
                    <i class="fa fa-angle-double-right"></i>
                    JS Charts
                </a>
            </li>
            <li {!! (Request::is('admin/sparklinecharts') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/sparklinecharts') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Sparkline Charts
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/calendar') ? 'class="active"' : '') !!}>
        <a href="{{ URL::to('admin/calendar') }}">
            <i class="livicon" data-c="#F89A14" data-hc="#F89A14" data-name="calendar" data-size="18"
               data-loop="true"></i>
            Calendar
            <span class="badge badge-danger">7</span>
        </a>
    </li>
    <li {!! (Request::is('admin/inbox') || Request::is('admin/compose') || Request::is('admin/view_mail') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="mail" data-size="18" data-c="#67C5DF" data-hc="#67C5DF"
               data-loop="true"></i>
            <span class="title">Email</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/inbox') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/inbox') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Inbox
                </a>
            </li>
            <li {!! (Request::is('admin/compose') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/compose') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Compose
                </a>
            </li>
            <li {!! (Request::is('admin/view_mail') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/view_mail') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Single Mail
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/tasks') ? 'class="active"' : '') !!}>
        <a href="{{ URL::to('admin/tasks') }}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="list-ul" data-size="18"
               data-loop="true"></i>
            Tasks
            <span class="badge badge-danger" id="taskcount"></span>
        </a>
    </li>
    <li {!! (Request::is('admin/gallery') || Request::is('admin/masonry_gallery') || Request::is('admin/imagecropping') || Request::is('admin/imgmagnifier') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="image" data-c="#418BCA" data-hc="#418BCA" data-size="18"
               data-loop="true"></i>
            <span class="title">Gallery</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/gallery') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/gallery') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Gallery
                </a>
            </li>
            <li {!! (Request::is('admin/masonry_gallery') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/masonry_gallery') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Masonry Gallery
                </a>
            </li>
            <li {!! (Request::is('admin/imagecropping') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/imagecropping') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Image Cropping
                </a>
            </li>
            <li {!! (Request::is('admin/imgmagnifier') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/imgmagnifier') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Image Magnifier
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/users') || Request::is('admin/users/create') || Request::is('admin/user_profile') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="user" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">Users</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/users') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/users') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Users
                </a>
            </li>
            <li {!! (Request::is('admin/users/create') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/users/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Add New User
                </a>
            </li>
            <li {!! ((Request::is('admin/users/*')) && !(Request::is('admin/users/create')) ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::route('users.show',Sentinel::getUser()->id) }}">
                    <i class="fa fa-angle-double-right"></i>
                    View Profile
                </a>
            </li>
            <li {!! (Request::is('admin/deleted_users') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/deleted_users') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Deleted Users
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/groups') || Request::is('admin/groups/create') || Request::is('admin/groups/*') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="users" data-size="18" data-c="#418BCA" data-hc="#418BCA"
               data-loop="true"></i>
            <span class="title">Groups</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/groups') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/groups') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Groups
                </a>
            </li>
            <li {!! (Request::is('admin/groups/create') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/groups/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Add New Group
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/googlemaps') || Request::is('admin/vectormaps') || Request::is('admin/advancedmaps') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="map" data-c="#67C5DF" data-hc="#67C5DF" data-size="18"
               data-loop="true"></i>
            <span class="title">Maps</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/googlemaps') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/googlemaps') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Google Maps
                </a>
            </li>
            <li {!! (Request::is('admin/vectormaps') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/vectormaps') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Vector Maps
                </a>
            </li>
            <li {!! (Request::is('admin/advancedmaps') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/advancedmaps') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Advanced Maps
                </a>
            </li>
        </ul>
    </li>
    <li {!! ((Request::is('admin/blogcategory') || Request::is('admin/blogcategory/create') || Request::is('admin/blog') ||  Request::is('admin/blog/create')) || Request::is('admin/blog/*') || Request::is('admin/blogcategory/*') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="comment" data-c="#F89A14" data-hc="#F89A14" data-size="18"
               data-loop="true"></i>
            <span class="title">Blog</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/blogcategory') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/blogcategory') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Blog Category List
                </a>
            </li>
            <li {!! (Request::is('admin/blog') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/blog') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Blog List
                </a>
            </li>
            <li {!! (Request::is('admin/blog/create') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/blog/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Add New Blog
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/news') || Request::is('admin/news_item')  ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="move" data-c="#ef6f6c" data-hc="#ef6f6c" data-size="18"
               data-loop="true"></i>
            <span class="title">News</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/news') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/news') }}">
                    <i class="fa fa-angle-double-right"></i>
                    News
                </a>
            </li>
            <li {!! (Request::is('admin/news_item') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/news_item') }}">
                    <i class="fa fa-angle-double-right"></i>
                    News Details
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/invoice') || Request::is('admin/blank')  ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="flag" data-c="#418bca" data-hc="#418bca" data-size="18"
               data-loop="true"></i>
            <span class="title">Pages</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/lockscreen') ? 'class="active"' : '') !!}>
                <a href="{{ URL::route('lockscreen',Sentinel::getUser()->id) }}">
                    <i class="fa fa-angle-double-right"></i>
                    Lockscreen
                </a>
            </li>
            <li {!! (Request::is('admin/invoice') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/invoice') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Invoice
                </a>
            </li>
            <li {!! (Request::is('admin/login') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/login') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Login
                </a>
            </li>
            <li {!! (Request::is('admin/login2') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/login2') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Login 2
                </a>
            </li>
            <li>
                <a href="{{ URL::to('admin/login#toregister') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Register
                </a>
            </li>
            <li>
                <a href="{{ URL::to('admin/register2') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Register2
                </a>
            </li>
            <li {!! (Request::is('admin/404') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/404') }}">
                    <i class="fa fa-angle-double-right"></i>
                    404 Error
                </a>
            </li>
            <li {!! (Request::is('admin/500') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/500') }}">
                    <i class="fa fa-angle-double-right"></i>
                    500 Error
                </a>
            </li>
            <li {!! (Request::is('admin/blank') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/blank') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Blank Page
                </a>
            </li>
        </ul>
    </li>--}}
    <!-- Menus generated by CRUD generator -->
    @include('hnl/layouts/menu')
</ul>