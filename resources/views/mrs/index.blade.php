@extends('app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Material's Request</b></h3></div>

                    <div class="panel-body">



                        <mr>

                            <table id="example" class="table stripe row-border order-column" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>MR Number</th>
                                    <th>MR Date</th>
                                    <th>Estimated Cost</th>
                                    <th>Officer</th>
                                    


                                </tr>
                                </thead>
                                @foreach($mr as $m)
                                    <tbody>
                                    <tr>
                                        <td><a href=" {{ action('MRsController@show', [$m->slug])  }} " >{{ $m->mr_no }}</a></td>
                                        <td>{{$m->mr_date}}</td>
                                        <td>{{$m->mr_estimated_cost}} {{$m->mr_currency}}</td>
                                        <td>{{$m->mr_officer}}</td>

                                    </tr>
                                    </tbody>
                                @endforeach
                                @include('partials.search',['url'=>'mrs','link'=>'mrs'])

                            </table>
                            <ul>
                            <li><a href="mr_s/import">Import Material Request</a></li>
                            <li><a href="mr_all/importall">Import All Materials Requests</a></li>
                            </ul>
                        </mr>



                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! $mr->render() !!}
@endsection

