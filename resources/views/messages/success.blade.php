@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    <div class="img-responsive col-md-5">
        <img src="/images/{{ Session::get('path') }}" style="width:70%; height:70%;">
    </div>

@endif