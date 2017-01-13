@extends('hnl/layouts/default')

{{-- Page title --}}
@section('title')
    인사정보 등록
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/colReorder.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/rowReorder.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/scroller.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/tables.css') }}" />

    <style>
        .tables th {
            text-align:center;
            background-color:whitesmoke;
            width:150px;
            vertical-align: middle;
        }
        .tables td{
            width:150px;
        }
        .tit{
            font-size:30px;
            font-weight:bold;
        }

    </style>

@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>인사기록 카드</h1>
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
                               data-l="true"></i> 인사기록카드
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    인사기록카드
                                </h4>
                            </div>
                            <div class="panel-body">
                                @if(!$searchp)
                                <table class="table table-bordered tables text-center">
                                    <caption>
                                        <a class="btn btn-raised btn-info btn-large" data-toggle="modal" data-href="#searchmember" href="#searchmember">검색</a>
                                    </caption>
                                   <tr>
                                       <th>사번</th><td></td><td class="tit" colspan="4"> 인사기록카드 </td><td colspan="2" rowspan="12">사진</td>
                                   </tr>
                                    <tr>
                                        <th>성명</th>
                                        <td></td>
                                        <th>영문</th>
                                        <td></td>
                                        <th>한문</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>주민번호</th>
                                        <td></td>
                                        <th>생년월일</th>
                                        <td></td>
                                        <th>현재나이</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>부서명</th>
                                        <td></td>
                                        <th>입사일자</th>
                                        <td></td>
                                        <th>퇴직, 계약기간만료일</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>직책</th>
                                        <td></td>
                                        <th>직급</th>
                                        <td></td>
                                        <th>혼인유무</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>입사경로</th>
                                        <td colspan="3"></td>
                                        <th>추천인/관계</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>현주소</th>
                                        <td colspan="5"></td>
                                    </tr>
                                    <tr>
                                        <th>본적</th>
                                        <td colspan="5"></td>
                                    </tr>
                                    <tr>
                                        <th>자택전화</th>
                                        <td></td>
                                        <th>휴대폰</th>
                                        <td></td>
                                        <th>이메일</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>취미</th>
                                        <td></td>
                                        <th>특기</th>
                                        <td></td>
                                        <th>종교</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>군필유무</th>
                                        <td></td>
                                        <th>군별</th>
                                        <td></td>
                                        <th>계급</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>장애유형</th>
                                        <td></td>
                                        <th>장애등급</th>
                                        <td></td>
                                        <th>장애인정일</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>보훈구분</th>
                                        <td></td>
                                        <th>보훈번호</th>
                                        <td></td>
                                        <th>보훈자관계</th>
                                        <td></td>
                                        <th>키(Cm)</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>특례구분</th>
                                        <td></td>
                                        <th>특례기간</th>
                                        <td></td>
                                        <th>시력(좌/우)</th>
                                        <td></td>
                                        <th>몸무게(Kg)</th>
                                        <td></td>
                                    </tr>
                                </table>
                                <table class="table table-bordered tables text-center">
                                    <tr>
                                        <th colspan="8" class="text-center">現 근로조건사항</th>
                                    </tr>
                                    <tr>
                                        <th>시간구분</th>
                                        <th>출근시간</th>
                                        <th>퇴근시간</th>
                                        <th>실근로시간</th>
                                        <th>구분</th>
                                        <th>시작일</th>
                                        <th>퇴직,계약기간 만료일</th>
                                        <th>기간(년)</th>
                                    </tr>
                                    <tr>
                                        <td>근무시간</td>
                                        <td>9:00</td>
                                        <td>17:00</td>
                                        <td>8.0</td>
                                        <td>근무기간</td>
                                        <td>2011-03-28</td>
                                        <td>2015-04-12</td>
                                        <td>4.0</td>
                                    </tr>
                                    <tr>
                                        <th>휴게구분</th>
                                        <th>휴게시작시간</th>
                                        <th>휴게종료시간</th>
                                        <th>실휴게시간</th>
                                        <th>구분</th>
                                        <th colspan="3">기타</th>
                                    </tr>
                                    <tr>
                                        <th>휴게시간1</th>
                                        <td>12:30</td>
                                        <td>13:30</td>
                                        <td>1.0</td>
                                        <th>담당업무</th>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <th>휴게시간2</th>
                                        <td></td>
                                        <td></td>
                                        <td>0.0</td>
                                        <th>취업장소</th>
                                        <td>본사</td>
                                    </tr>
                                    <tr>
                                        <th>일수구분</th>
                                        <th>1주 동안 근무일수</th>
                                        <th colspan="2">근무요일</th>
                                        <th>수습기간</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>근무일수</th>
                                        <td>5</td>
                                        <td colspan="2">월~금(주5일 근무시), 월~토(주6일 근무시)  </td>
                                        <th>구분</th>
                                        <th colspan="3">기타사항</th>
                                    </tr>
                                    <tr>
                                        <th>급여구분</th>
                                        <th colspan="2">급여액</th>
                                        <th>구분정의</th>
                                        <th>월급계좌</th>
                                        <td>농협은행</td>
                                        <td colspan="2"> 001-002003-04-005</td>
                                    </tr>
                                    <tr>
                                        <th>시급제</th>
                                        <td> - </td>
                                        <td><< 시급기제</td>
                                        <td>알바,일용직,단기,임시직</td>
                                        <th>기타사항</th>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <th>월급제</th>
                                        <td> - </td>
                                        <td><< 월급기제</td>
                                        <td></td>
                                        <th>기타사항</th>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <th>연봉제</th>
                                        <td> 65,000,000 </td>
                                        <td><< 연봉기제</td>
                                        <td></td>
                                        <th>기타사항</th>
                                        <td colspan="3"></td>
                                    </tr>
                                </table>
                                <table class="table table-bordered tables text-center">
                                    <tr>
                                        <th colspan="8" class="text-center">최종학력사항</th>
                                    </tr>
                                    <tr>
                                        <th>구분</th>
                                        <th>학교명</th>
                                        <th>소재지</th>
                                        <th>입학일자</th>
                                        <th>졸업일자</th>
                                        <th>전공/부전공</th>
                                        <th>학점</th>
                                        <th>졸업구분</th>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>졸업</td>
                                        <td>2012-01-01</td>
                                        <td>2012-01-01</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <table class="table table-bordered tables text-center">
                                    <tr>
                                        <th colspan="8" class="text-center">주요경력사항</th>
                                    </tr>
                                    <tr>
                                        <th>입사일자</th>
                                        <th>퇴사일자</th>
                                        <th>소재지</th>
                                        <th>회사명</th>
                                        <th>부서명</th>
                                        <th>주요직무</th>
                                        <th>직급/직책</th>
                                        <th>경력년수</th>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>-</td>
                                    </tr>
                                </table>
                                <table class="table table-bordered tables text-center">
                                    <tr>
                                        <th colspan="4" class="text-center">자격 및 면허 사항</th>
                                        <th colspan="4" class="text-center">외국어 능력</th>
                                    </tr>
                                    <tr>
                                        <th>취득일자</th>
                                        <th>자격명/등급</th>
                                        <th>자격증번호</th>
                                        <th>발급기관</th>
                                        <th>취득일자</th>
                                        <th>시험명</th>
                                        <th>점수/등급</th>
                                        <th>인증기관</th>
                                    </tr>
                                    <tr>
                                        <td>2012-01-01</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>2012-01-01</td>
                                        <td></td>
                                        <td></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>-</td>
                                    </tr>
                                </table>
                                <table class="table table-bordered tables text-center">
                                    <tr>
                                        <th colspan="8" class="text-center">교육 및 해외연수</th>
                                    </tr>
                                    <tr>
                                        <th>시작일</th>
                                        <th>종료일</th>
                                        <th>개월</th>
                                        <th colspan="3">교육명/연수내용</th>
                                        <th>교육기관</th>
                                        <th>국가명</th>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td colspan="3"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td colspan="3"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td colspan="3"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <table class="table table-bordered tables text-center">
                                    <tr>
                                        <th colspan="8" class="text-center">주요 가족 사항</th>
                                    </tr>
                                    <tr>
                                        <th>이름</th>
                                        <th>주민등록번호</th>
                                        <th>가족관계</th>
                                        <th>학력</th>
                                        <th>직업</th>
                                        <th>혼인여부</th>
                                        <th>동거여부</th>
                                        <th>장애여부</th>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>-</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>-</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <p class="text-center"><span>위 기재 내용은 사실과 다름없으며 사실과 다를 경우 발생하는 어떠한 불이익도 감수하겠습니다.</span></p>
                                <p><pre class="text-center">20    년      월      일     작성자:                                (인)</pre></p>
                                @else
                                    <table class="table table-bordered tables text-center">
                                        <caption>
                                            <a class="btn btn-raised btn-info btn-large" data-toggle="modal" data-href="#searchmember" href="#searchmember">검색</a>
                                        </caption>
                                        <tr>
                                            <th>사번</th><td>{{ $searchp->employee_num }}</td><td class="tit" colspan="4"> 인사기록카드 </td><td colspan="2" rowspan="12">사진</td>
                                        </tr>
                                        <tr>
                                            <th>성명</th>
                                            <td>{{ $searchp->name }}</td>
                                            <th>영문</th>
                                            <td>{{ $searchp->name }}</td>
                                            <th>한문</th>
                                            <td>{{ $searchp->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>주민번호</th>
                                            <td>{{ $searchp->regi_no }}</td>
                                            <th>생년월일</th>
                                            <td></td>
                                            <th>현재나이</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>부서명</th>
                                            <td>
                                                @foreach($jobtitle as $job)
                                                    @if($job->id == $searchp->job)
                                                       {{ $job->name }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <th>입사일자</th>
                                            <td></td>
                                            <th>퇴직, 계약기간만료일</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>직책</th>
                                            <td>
                                                @foreach($position as $pos)
                                                    @if($pos->id == $searchp->position)
                                                      {{ $pos->pos_name }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <th>직급</th>
                                            <td></td>
                                            <th>혼인유무</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>입사경로</th>
                                            <td colspan="3"></td>
                                            <th>추천인/관계</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>현주소</th>
                                            <td colspan="5"></td>
                                        </tr>
                                        <tr>
                                            <th>본적</th>
                                            <td colspan="5"></td>
                                        </tr>
                                        <tr>
                                            <th>자택전화</th>
                                            <td></td>
                                            <th>휴대폰</th>
                                            <td></td>
                                            <th>이메일</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>취미</th>
                                            <td></td>
                                            <th>특기</th>
                                            <td></td>
                                            <th>종교</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>군필유무</th>
                                            <td></td>
                                            <th>군별</th>
                                            <td></td>
                                            <th>계급</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>장애유형</th>
                                            <td></td>
                                            <th>장애등급</th>
                                            <td></td>
                                            <th>장애인정일</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>보훈구분</th>
                                            <td></td>
                                            <th>보훈번호</th>
                                            <td></td>
                                            <th>보훈자관계</th>
                                            <td></td>
                                            <th>키(Cm)</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>특례구분</th>
                                            <td></td>
                                            <th>특례기간</th>
                                            <td></td>
                                            <th>시력(좌/우)</th>
                                            <td></td>
                                            <th>몸무게(Kg)</th>
                                            <td></td>
                                        </tr>
                                    </table>
                                    <table class="table table-bordered tables text-center">
                                        <tr>
                                            <th colspan="8" class="text-center">現 근로조건사항</th>
                                        </tr>
                                        <tr>
                                            <th>시간구분</th>
                                            <th>출근시간</th>
                                            <th>퇴근시간</th>
                                            <th>실근로시간</th>
                                            <th>구분</th>
                                            <th>시작일</th>
                                            <th>퇴직,계약기간 만료일</th>
                                            <th>기간(년)</th>
                                        </tr>
                                        <tr>
                                            <td>근무시간</td>
                                            <td>9:00</td>
                                            <td>17:00</td>
                                            <td>8.0</td>
                                            <td>근무기간</td>
                                            <td>2011-03-28</td>
                                            <td>2015-04-12</td>
                                            <td>4.0</td>
                                        </tr>
                                        <tr>
                                            <th>휴게구분</th>
                                            <th>휴게시작시간</th>
                                            <th>휴게종료시간</th>
                                            <th>실휴게시간</th>
                                            <th>구분</th>
                                            <th colspan="3">기타</th>
                                        </tr>
                                        <tr>
                                            <th>휴게시간1</th>
                                            <td>12:30</td>
                                            <td>13:30</td>
                                            <td>1.0</td>
                                            <th>담당업무</th>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <th>휴게시간2</th>
                                            <td></td>
                                            <td></td>
                                            <td>0.0</td>
                                            <th>취업장소</th>
                                            <td>본사</td>
                                        </tr>
                                        <tr>
                                            <th>일수구분</th>
                                            <th>1주 동안 근무일수</th>
                                            <th colspan="2">근무요일</th>
                                            <th>수습기간</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>근무일수</th>
                                            <td>5</td>
                                            <td colspan="2">월~금(주5일 근무시), 월~토(주6일 근무시)  </td>
                                            <th>구분</th>
                                            <th colspan="3">기타사항</th>
                                        </tr>
                                        <tr>
                                            <th>급여구분</th>
                                            <th colspan="2">급여액</th>
                                            <th>구분정의</th>
                                            <th>월급계좌</th>
                                            <td>농협은행</td>
                                            <td colspan="2"> 001-002003-04-005</td>
                                        </tr>
                                        <tr>
                                            <th>시급제</th>
                                            <td> - </td>
                                            <td><< 시급기제</td>
                                            <td>알바,일용직,단기,임시직</td>
                                            <th>기타사항</th>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <th>월급제</th>
                                            <td> - </td>
                                            <td><< 월급기제</td>
                                            <td></td>
                                            <th>기타사항</th>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <th>연봉제</th>
                                            <td> 65,000,000 </td>
                                            <td><< 연봉기제</td>
                                            <td></td>
                                            <th>기타사항</th>
                                            <td colspan="3"></td>
                                        </tr>
                                    </table>
                                    <table class="table table-bordered tables text-center">
                                        <tr>
                                            <th colspan="8" class="text-center">최종학력사항</th>
                                        </tr>
                                        <tr>
                                            <th>구분</th>
                                            <th>학교명</th>
                                            <th>소재지</th>
                                            <th>입학일자</th>
                                            <th>졸업일자</th>
                                            <th>전공/부전공</th>
                                            <th>학점</th>
                                            <th>졸업구분</th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>졸업</td>
                                            <td>2012-01-01</td>
                                            <td>2012-01-01</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                    <table class="table table-bordered tables text-center">
                                        <tr>
                                            <th colspan="8" class="text-center">주요경력사항</th>
                                        </tr>
                                        <tr>
                                            <th>입사일자</th>
                                            <th>퇴사일자</th>
                                            <th>소재지</th>
                                            <th>회사명</th>
                                            <th>부서명</th>
                                            <th>주요직무</th>
                                            <th>직급/직책</th>
                                            <th>경력년수</th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>-</td>
                                        </tr>
                                    </table>
                                    <table class="table table-bordered tables text-center">
                                        <tr>
                                            <th colspan="4" class="text-center">자격 및 면허 사항</th>
                                            <th colspan="4" class="text-center">외국어 능력</th>
                                        </tr>
                                        <tr>
                                            <th>취득일자</th>
                                            <th>자격명/등급</th>
                                            <th>자격증번호</th>
                                            <th>발급기관</th>
                                            <th>취득일자</th>
                                            <th>시험명</th>
                                            <th>점수/등급</th>
                                            <th>인증기관</th>
                                        </tr>
                                        <tr>
                                            <td>2012-01-01</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>2012-01-01</td>
                                            <td></td>
                                            <td></td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>-</td>
                                        </tr>
                                    </table>
                                    <table class="table table-bordered tables text-center">
                                        <tr>
                                            <th colspan="8" class="text-center">교육 및 해외연수</th>
                                        </tr>
                                        <tr>
                                            <th>시작일</th>
                                            <th>종료일</th>
                                            <th>개월</th>
                                            <th colspan="3">교육명/연수내용</th>
                                            <th>교육기관</th>
                                            <th>국가명</th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td colspan="3"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td colspan="3"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td colspan="3"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                    <table class="table table-bordered tables text-center">
                                        <tr>
                                            <th colspan="8" class="text-center">주요 가족 사항</th>
                                        </tr>
                                        <tr>
                                            <th>이름</th>
                                            <th>주민등록번호</th>
                                            <th>가족관계</th>
                                            <th>학력</th>
                                            <th>직업</th>
                                            <th>혼인여부</th>
                                            <th>동거여부</th>
                                            <th>장애여부</th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                    <p class="text-center"><span>위 기재 내용은 사실과 다름없으며 사실과 다를 경우 발생하는 어떠한 불이익도 감수하겠습니다.</span></p>
                                    <p><pre class="text-center">20    년      월      일     작성자:                                (인)</pre></p>
                                    @endif
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
                                    <td><a href="{{ route('pcard_view',$p->id) }}">{{ $p->name }}</a></td>
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