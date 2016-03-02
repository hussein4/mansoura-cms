@extends('app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Tender Material's Request</b></h3></div>

                    <div class="panel-body">



                       <tender>

                            <table id="example" class="table stripe row-border order-column" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Tender Number</th>
                                    <th>Tender Subject</th>
                                    <th>MR No.</th>
                                    <th>Estimated Cost</th>
                                    <th>Currency</th>





                                </tr>
                                </thead>
                                @foreach($tender as $t)
                                    <tbody>
                                    <tr>
                                        <td><a href="{{ action('TendersController@show', [$t->id])  }}">{{ $t->mr_t_no }}</a></td>
                                        <td>{{$t->mr_t_subject}}</td>
                                        @foreach($t->mr as $m)
                                            <td><a href ="{{ $m->mr_no }} "><span>{{ $m->mr_no }}</span></a></td>
                                            @endforeach
                                        @foreach($t->mr as $m)
                                            <td>{{ $m->mr_estimated_cost }}</td>
                                        @endforeach
                                        @foreach($t->mr as $m)
                                            <td>{{ $m->mr_currency }}</td>
                                        @endforeach


                                    </tr>
                                    </tbody>
                                @endforeach

                            </table>
                            <a href="tender_s/import">Import Tenders</a>
                        </tender>



                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! $tender->render() !!}
@endsection

