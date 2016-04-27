@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Welcome<h3><b> {{ Auth::user()->name }}</b> </h3> </div>







                <a href="{{ action('VlistsController@show', $latest->title, [$latest->id]) }}"><span>last update:  {!! $latest->vname !!}</span> </a>









			</div>
		</div>
	</div>
</div>
@endsection
