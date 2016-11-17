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
        <h1>급여항목</h1>
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
                <div class="panel panel-success">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 급여 항목 (지급 항목)
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Hide Panel content"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="bs-example">
                            <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                                <li class="active">
                                    <a href="#basicpay" data-toggle="tab">통상임금</a>
                                </li>
                                <li>
                                    <a href="#lawpay" data-toggle="tab">법정수당</a>
                                </li>
                                <li>
                                    <a href="#welfare" data-toggle="tab">복리후생</a>
                                </li>
                                <li>
                                    <a href="#contractpay" data-toggle="tab">약정수당</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade active in" id="basicpay">


                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>#</th><th>지급 명칭</th><th>지급코드</th><th>출력명칭</th><th>비과세 구분</th><th>비과세 한도</th>
                                                <th>급여 지급율 적용</th><th>상여 지급율 적용</th><th>퇴직금 대상</th><th>수습적용율</th><th>급여 계산기준</th>
                                                <th>4대보험 보수총액 포함여부</th><th>근태이용 지급연결</th><th>사용 여부</th><th>출력 여부</th><th>출력 순번</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>기본급</td>
                                                <td>01</td>
                                                <td>기본급</td>
                                                <td></td>
                                                <td>0</td>
                                                <td><input class="custom-checkbox" type="checkbox"></td>
                                                <td><input class="custom-checkbox" type="checkbox"></td>
                                                <td>03개월</td>
                                                <td>80.00</td>
                                                <td>일수계산</td>
                                                <td><input class="custom-checkbox" type="checkbox"><input class="custom-checkbox" type="checkbox"><input class="custom-checkbox" type="checkbox"><input class="custom-checkbox" type="checkbox"></td>
                                                <td></td>
                                                <td><input class="custom-checkbox" type="checkbox"></td>
                                                <td><input class="custom-checkbox" type="checkbox"></td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>직책수당</td>
                                                <td>02</td>
                                                <td>직책수당</td>
                                                <td></td>
                                                <td>0</td>
                                                <td><input class="custom-checkbox" type="checkbox"></td>
                                                <td><input class="custom-checkbox" type="checkbox"></td>
                                                <td>03개월</td>
                                                <td>80.00</td>
                                                <td>일수계산</td>
                                                <td><input class="custom-checkbox" type="checkbox"><input class="custom-checkbox" type="checkbox"><input class="custom-checkbox" type="checkbox"><input class="custom-checkbox" type="checkbox"></td>
                                                <td></td>
                                                <td><input class="custom-checkbox" type="checkbox"></td>
                                                <td><input class="custom-checkbox" type="checkbox"></td>
                                                <td>2</td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="lawpay">
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="welfare">
                                    <p>
                                        Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="contractpay">
                                    <p>
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-success">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i> 급여 항목 (공제 항목)
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
                                        <th>#</th>
                                        <th>공제명칭</th>
                                        <th>공제코드</th>
                                        <th>출력명칭</th>
                                        <th>사용여부</th>
                                        <th>출력순번</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>소득세</td>
                                        <td>01</td>
                                        <td>소득세</td>
                                        <td><input class="custom-checkbox" type="checkbox"></td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>주민세</td>
                                        <td>02</td>
                                        <td>주민세</td>
                                        <td><input class="custom-checkbox" type="checkbox"></td>
                                        <td>2</td>
                                    </tr>
                                </tbody>
                            </table>
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