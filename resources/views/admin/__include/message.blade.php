@if (!$errors->isEmpty())
    <div class="alert alert-danger alert-dismissible ">
		<button type="button" class="close" data-dismiss="alert"></button>
        @foreach ($errors->all(':message') as $mess)
			<p> {{ $mess}} </p>
		@endforeach
    </div>
@endif
@if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible ">
		<button type="button" class="close" data-dismiss="alert"></button>
        {{ Session::get('error') }}
    </div>
@endif
@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible ">
		<button type="button" class="close" data-dismiss="alert"></button>
        {{ Session::get('success') }}
    </div>
@endif

@if (Session::has('info'))
    <div class="alert alert-info alert-dismissible ">
		<button type="button" class="close" data-dismiss="alert"></button>
        {{ Session::get('info') }}
    </div>
@endif

@if (Session::has('warning'))
    <div class="alert alert-warning alert-dismissible ">
		<button type="button" class="close" data-dismiss="alert"></button>
        {{ Session::get('warning') }}
    </div>
@endif
