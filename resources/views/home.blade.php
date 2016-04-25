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

                    <table id="users-table" class="table stripe row-border order-column" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Supplier</th>
                            <th>Mrs</th>
                            <th>Tender</th>
                            <th>Pos</th>

                        </tr>
                        </thead>



                            <tbody>
                <tr>

                   <td>
                         {!! $latest->vname !!}
                   </td>
                                <td>
                    {!! $latest->mr_no !!}
                                </td>
                       <td>
                     {!! $latest->mr_no_t !!}
                       </td>
                       <td>
                   <a href="{{ action('POsController@show', $latest->title, [$latest->id]) }}">  {!! $latest->po_no !!}
                       </td>
                </tr>
                            </tbody>
                        </table>
                </div>
			</div>
		</div>
	</div>
</div>
@endsection
