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

                <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                    <tbody>

                    <tr>
                        <th>Supplier </th>
                     <td>   <a href="{{ action('VlistsController@show', $latest->title, [$latest->id]) }}"><span>last update  {!! $latest->vname !!}</span> </a>
                        </td>
                    </tr>

                    <tr>
                        <th>MRs </th>
                        <td>   <a href="{{ action('MRsController@show', $latest->title, [$latest->id]) }}"><span>  {!! $latest->mr_no !!}</span> last update</a>
                        </td>
                    </tr>














                    </tbody>
                    </thead>
                    </table>




			</div>
		</div>
	</div>
</div>
@endsection
