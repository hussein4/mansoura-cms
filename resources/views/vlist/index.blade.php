@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Supplier's List</b></h3></div>

                    <div class="panel-body">

                <vlist>

                                <table id="example" class="table stripe row-border order-column" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Supplier</th>
                                        <th>Service</th>
                                        <th>Grade</th>
                                        <th>Remarks</th>
                                    </tr>
                                    </thead>
                @foreach($vlist as $list)
                                <tbody>
                                <tr>
                                <td><a href="{{ action('VlistController@show', [$list->id])  }}">{{ $list->vname }}</a></td>
                                 <td>{{$list->vservice}}</td>
                                 <td>{{$list->vgrade}}</td>
                                 <td>{{$list->vremarks}}</td>
                                 </tr>
                                 </tbody>
                 @endforeach

                              </table>

                </vlist>


</div>
</div>
</div>
</div>
</div>
@endsection