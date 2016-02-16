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

				<div class="panel-body">


                      latest Update on Supplier's List :

                    <li>  {!! link_to_action('VlistsController@show', $latest->title, [$latest->id]) !!}  </li>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
