<form role="form" method="post" action="{{ $confirm_route }}">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">부서등록</h4>
</div>
<div class="modal-body">
    @if($error)
        <div>{!! $error !!}</div>
    @else
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label class="col-md-3 control-label" for="jobcode">실부서코드</label>
            <div class="col-md-9">
                <input id="jobcode" name="jobcode" type="text" class="form-control" value="{!! $job->jobcode !!}" required></div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="code" required>구분코드</label>
            <div class="col-md-9">
                <input id="code" name="code" type="text" class="form-control" value="{!! $job->code !!}" ></div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="name" required>명칭</label>
            <div class="col-md-9">
                <input id="name" name="name" type="text" class="form-control" value="{!! $job->name !!}" ></div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="memo" required>비고</label>
            <div class="col-md-9">
                <input id="memo" name="memo" type="text" class="form-control" value="{!! $job->memo !!}" ></div>
        </div>
        <div class="form-group">
            <label>사용여부</label>
            @if($job->use === 1)
            <label class="radio-inline">
                <input type="radio" class="custom-radio" name="use" value="true" checked required>예</label>
            <label class="radio-inline">
                <input type="radio" class="custom-radio" name="use" value="false" required>아니오</label>
            @elseif($job->use === 0)
                <label class="radio-inline">
                    <input type="radio" class="custom-radio" name="use" value="true" required>예</label>
                <label class="radio-inline">
                    <input type="radio" class="custom-radio" name="use" value="false" checked required>아니오</label>
            @endif
        </div>
    @endif
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">아니오</button>
  @if(!$error)
        <button class="btn btn-primary">수정</button>
  @endif
</div>
</form>