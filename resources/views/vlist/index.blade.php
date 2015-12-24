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
                @foreach($vlist as $vlist)
                                <tbody>
                                <tr>
                                <td><a href="{{ action('VlistController@show', [$vlist->id])  }}">{{ $vlist->vname }}</a></td>
                                 <td>{{$vlist->vservice}}</td>
                                 <td>{{$vlist->vgrade}}</td>
                                 <td>{{$vlist->vremarks}}</td>
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