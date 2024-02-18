<div class="clear-both"></div>

@if(!empty(session('success')))
    <div class="alert alert-success alert-dimissivle face in" role="alert">
        {{ session('success') }}
    </div>
    @endif

@if(!empty(session('error')))
    <div class="alert alert-danger alert-dimissible face in" role="alert">
        {{ session('error') }}
    </div>
    @endif
