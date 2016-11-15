<form role="form" method="post" action="{{ $confirm_route }}">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">직위등록</h4>
</div>
<div class="modal-body">
    @if($error)
        <div>{!! $error !!}</div>
    @else
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label class="col-md-3 control-label" for="job_id">부서 선택</label>
            <div class="col-md-9">
                <select id="job_id" name="job_id" class="form-control" required>
                        @foreach($jobtitles as $jt)
                                <option value="{!! $jt->id !!}" {!! ($jt->id == $pos->job_id ? 'selected' : '') !!}>{{ $jt->name }}</option>
                        @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="pos_code">직위코드</label>
            <div class="col-md-9">
                <input type="text" id="pos_code" name="pos_code" class="form-control" required value="{!! $pos->pos_code !!}"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="pos_div_code">직위구분코드</label>
            <div class="col-md-9">
                <input id="pos_div_code" name="pos_div_code" type="text" class="form-control" required value="{!! $pos->pos_div_code !!}" /></div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="pos_name">직위명</label>
            <div class="col-md-9">
                <input id="pos_name" name="pos_name" type="text" class="form-control" required value="{!! $pos->pos_name !!}"></div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="pos_memo" required>비고</label>
            <div class="col-md-9">
                <input id="pos_memo" name="pos_memo" type="text" class="form-control" required value="{!! $pos->pos_memo !!}"></div>
        </div>
        <div class="form-group">
            <label>사용여부</label>
            @if($pos->pos_use == 1)
                <label class="radio-inline">
                    <input type="radio" class="custom-radio" name="pos_use" value="1" checked required>예</label>
                <label class="radio-inline">
                    <input type="radio" class="custom-radio" name="pos_use" value="0" required>아니오</label>
            @elseif($pos->pos_use == 0)
                <label class="radio-inline">
                    <input type="radio" class="custom-radio" name="pos_use" value="1" required>예</label>
                <label class="radio-inline">
                    <input type="radio" class="custom-radio" name="pos_use" value="0" checked required>아니오</label>
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