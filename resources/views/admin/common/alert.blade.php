@if(Session::has('alert-class'))
    <div class="alert alert-dismissible fade show alert-{{ Session::get('alert-class') }}" role="alert">
    <strong>{{ Session::get('alert-message') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
@endif