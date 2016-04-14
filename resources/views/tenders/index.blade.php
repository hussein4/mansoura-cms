@extends('app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Tenders</b></h3></div>

                    <div class="panel-body">



                       <tender>

                            <table id="example" class="table stripe row-border order-column" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Tender Number</th>
                                    <th>Tender Subject</th>
                                    <th>MR No.</th>
                                    <th>Estimated Cost</th>

                                    <th>Officer</th>



                                </tr>
                                </thead>
                                @foreach($tender as $t)
                                    <tbody>
                                    <tr>
                                        <td><a href="{{ action('TendersController@show', [$t->slug])  }}">{{ $t->mr_t_no }}</a></td>

                                        <td>{{$t->mr_t_subject}}</td>

                                        <td>
                                        @foreach($t->mr as $m)
                                        <a href=" {{ action('MRsController@show', [$m->slug]) }} " ><span>{{ $m->mr_no }} </span></a>
                                            @endforeach
                                        </td>

                                            <td>
                                                @foreach($t->mr as $m)

                                                {{ $m->mr_estimated_cost }} {{ $m->mr_currency }}
                                                @endforeach

                                            </td>


                                        <td>{{ $t->mr_t_officer  }}</td>


                                    </tr>

                                    </tbody>
                                @endforeach

                            </table>
                            <li><a href="tender_s/import">Import Tenders</a></li>

                           <li><a href="tender_s/exportTender">Export Tenders</a></li>


                        </tender>



                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! $tender->render() !!}
@endsection

