<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="user_delete_confirm_title">@lang($model.'/'.$title)</h4>
</div>
<div class="modal-body">
    @if($error)
        <div>{!! $error !!}</div>
    @else
        @lang($model.'/'.$title.' 삭제하시겠습니까?')
    @endif
</div>
<div class="modal-footer">
  <a type="button" class="btn btn-default" data-dismiss="modal">아니오</a>
  @if(!$error)
    <a href="{{ $confirm_route }}" type="button" class="btn btn-danger">예</a>
  @endif
</div>
