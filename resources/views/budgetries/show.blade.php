@extends('app')

@section('htmlheader_title')
   Budgetry Material Request
@endsection


@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Budgetry Material Request : {{ $budgetry->mr_b_no }}</div>

                    <div class="panel-body">


                       <budgetry>

                            <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
                                <tbody>
                                <tr>
                                    <th>Material Request No.</th>
                                    <td><b>{{ $budgetry->mr_b_no }} </b> </td>
                                </tr>
                                <tr>
                                    <th>MR Date</th>
                                    <td>{{ $budgetry->mr_b_date }}</td>
                                </tr>
                                <tr>
                                    <th>MR Received Date</th>
                                    <td>{{ $budgetry->mr_b_received_date }}</td>
                                </tr>
                                <tr>
                                    <th>MR Officer</th>
                                    <td>{{ $budgetry->mr_b_officer }}</td>
                                </tr>
                                <tr>
                                    <th>MR Received By Officer Date</th>
                                    <td>{{ $budgetry->mr_b_received_by_officer_date }}</td>
                                </tr>

                                <tr>
                                    <th>MR Budgetry RFQ</th>
                                    <td>{{ $budgetry->mr_budgetry_rfq }}</td>
                                </tr>
                                <tr>
                                    <th>MR Budgetry RFQ Closing Date</th>
                                    <td>{{ $budgetry->mr_rfq_budgetry_closing_date }}</td>
                                </tr>
                                <tr>
                                    <th>MR Budgetry RFQ Reminder</th>
                                    <td>{{ $budgetry->mr_rfq_budgetry_reminder }}</td>
                                </tr>
                                <tr>
                                    <th>MR Budgetry Memo</th>
                                    <td>{{ $budgetry->mr_budgetry_memo }}</td>
                                </tr>

                                <tr>
                                    <th>MR Estimated Cost</th>
                                    <td>{{ $budgetry->mr_b_estimated_cost }}</td>
                                </tr>
                                <tr>
                                    <th>MR Currency</th>
                                    <td>{{ $budgetry->mr_b_currency }}</td>
                                </tr>
                                <tr>
                                    <th>Sent for Budget Expansion  </th>
                                    <td>{{ $budgetry->mr_sent_for_budget_expansion }}</td>
                                </tr>
                                <tr>
                                    <th>Sent for Budget Expansion Reminder </th>
                                    <td>{{ $budgetry->mr_sent_for_budget_expansion_reminder }}</td>
                                </tr>

                                </thead>

                                </tbody>
                            </table>

                            @unless ($budgetry->tags->isEmpty())

                                <h5>Tags:</h5>
                                <ul>
                                    @foreach ($budgetry->tags as $tag)
                                        <li>  <a href=" {{ action('TagsController@show', [$tag->slug]) }} " > <span> {{ $tag->name }} </span></a></li>
                                         @endforeach
                                </ul>
                            @endunless

                            <li><a href="{{ action('BudgetriesController@edit', [$budgetry->id])  }}"><i class='fa fa-link'></i> <span>Edit Budgetry MR : {!! $budgetry->mr_b_no !!}</span></a></li>




                        </budgetry>


                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.disqus')
@endsection