@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Material's List</b></h3></div>

                    <div class="panel-body">

                        <mr>

                            <table id="example" class="table stripe row-border order-column" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>MR Number</th>
                                    <th>MR Date</th>

                                </tr>
                                </thead>
                                @foreach($mr as $mr)
                                    <tbody>
                                    <tr>
                                        <td><a href="{{ action('MRsController@show', [$mr->id])  }}">{{ $mr->mr_no }}</a></td>
                                        <td>{{$mr->mr_date}}</td>

                                    </tr>
                                    </tbody>
                                @endforeach

                            </table>

                        </mr>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection