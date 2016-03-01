@extends('app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Budgetry Material's Request</b></h3></div>

                    <div class="panel-body">



                        <budgetry>

                            <table id="example" class="table stripe row-border order-column" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>MR Number</th>
                                    <th>MR Date</th>



                                </tr>
                                </thead>
                                @foreach($budgetry as $b)
                                    <tbody>
                                    <tr>
                                        <td><a href="{{ action('BudgetriesController@show', [$b->id])  }}">{{ $b->mr_b_no }}</a></td>
                                        <td>{{$b->mr_b_date}}</td>


                                    </tr>
                                    </tbody>
                                @endforeach

                            </table>
                            <a href="budgetry_s/import">Import Material Request</a>
                        </budgetry>



                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! $budgetry->render() !!}
@endsection

