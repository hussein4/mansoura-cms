@extends('app')

@section('htmlheader_title')
    Material Request
@endsection


@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Material Request No.:</b> {{ $mr->mr_no }} </h3></div>

                    <div class="panel-body">


                        <mr>

                            <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
                                <tbody>

                                <tr>
                                    <th>MR Date</th>
                                    <td>{{ $mr->mr_date }}</td>
                                </tr>
                                <tr>
                                    <th>MR Received Date</th>
                                    <td>{{ $mr->mr_received_date }}</td>
                                </tr>
                                <tr>
                                    <th>Officer</th>
                                    <td><b>{{ $mr->mr_officer }} </b> </td>
                                </tr>

                                <tr>
                                    <th>MR Received By Officer Date</th>
                                    <td>{{ $mr->mr_received_by_officer_date }}</td>
                                </tr>
                                <tr>
                                    <th>MR Estimated Cost</th>
                                    <td>{{ $mr->mr_estimated_cost }}</td>
                                </tr>
                                @unless ($mr->materials->isEmpty())


                                    <th >Material Description</th>
                                    <th >Part Number</th>
                                    <ul>

                                        @foreach ($mr->materials as $material)
                                            <tr>

                                                <td>
                                                    <li>  <a href=" {{ action('MaterialsController@show', [$material->slug]) }} " > <span> {{ $material->m_description }} </span></a></li>
                                                </td>
                                                <td>
                                                    <li>  <a href=" {{ action('MaterialsController@show', [$material->slug]) }} " > <span> {{ $material->m_code }} </span></a></li>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </ul>

                                @endunless


                                @if(isset($mr->mr_rfq))
                                <tr>
                                    <th>MR RFQ </th>
                                    <td>{{ $mr->mr_rfq }}</td>
                                </tr>
                                @endif

                               @if(isset($mr->mr_rfq_closing_date))
                                <tr>
                                    <th>MR RFQ Closing Date</th>
                                    <td>{{ $mr->mr_rfq_closing_date }}</td>
                                </tr>
                               @endif

                                @if(isset($mr->mr_rfq_reminder))
                                <tr>
                                    <th>MR RFQ Reminder</th>
                                    <td>{{ $mr->mr_rfq_reminder }}</td>
                                </tr>
                                @endif

                                @if(isset($mr->mr_offers_open))
                                <tr>
                                    <th>Offers Opening</th>
                                    <td>{{ $mr->mr_offers_open }}</td>
                                </tr>
                                @endif

                                @if(isset($mr->mr_offers_sent_to_tech_dept))
                                <tr>
                                    <th>Offers Sent to Tech. Dept.</th>
                                    <td>{{ $mr->mr_offers_sent_to_tech_dept }}</td>
                                </tr>
                                @endif


                                @if(isset($mr->mr_offers_received_from_tech_dept_closing_date))
                                <tr>
                                    <th>Offers Received from Tech. Dept. Closing Date</th>
                                    <td>{{ $mr->mr_offers_received_from_tech_dept_closing_date }}</td>
                                </tr>
                                @endif

                                @if(isset($mr->mr_offers_received_from_tech_dept_reminder))
                                <tr>
                                    <th>Reminder sent to Tech Dept. </th>
                                    <td>{{ $mr->mr_offers_received_from_tech_dept_reminder }}</td>
                                </tr>
                                @endif

                                @if(isset($mr->mr_offers_clarifications_sent_to_suppliers))
                                <tr>
                                    <th>Clarifications Sent to Suppliers </th>
                                    <td>{{ $mr->mr_offers_clarifications_sent_to_suppliers }}</td>
                                </tr>
                                @endif

                                @if(isset($mr->mr_offers_clarifications_closing_date))
                                <tr>
                                    <th>Clarifications Sent to Suppliers Closing Date </th>
                                    <td>{{ $mr->mr_offers_clarifications_closing_date }}</td>
                                </tr>
                                @endif

                                @if(isset($mr->mr_offers_clarifications_received_from_supplier_reminder))
                                <tr>
                                    <th>Clarifications to be Received From Suppliers Reminder </th>
                                    <td>{{ $mr->mr_offers_clarifications_received_from_supplier_reminder }}</td>
                                </tr>
                                @endif


                                @if(isset($mr->mr_offers_clarifications_received_from_supplier))
                                <tr>
                                    <th>Clarifications Received From Suppliers  </th>
                                    <td>{{ $mr->mr_offers_clarifications_received_from_supplier }}</td>
                                </tr>
                                @endif


                                @if(isset($mr->mr_offers_clarifications_sent_to_tech))
                                <tr>
                                    <th>Clarifications Sent to Tech. Dept.  </th>
                                    <td>{{ $mr->mr_offers_clarifications_sent_to_tech }}</td>
                                </tr>
                                @endif


                                @if(isset($mr->mr_offers_evaluation))
                                <tr>
                                    <th>Offers Evaluation  </th>
                                    <td>{{ $mr->mr_offers_evaluation }}</td>
                                </tr>
                                @endif

                                @if(isset($mr->mr_sent_for_budget_expansion))
                                <tr>
                                    <th>Sent for Budget Expansion  </th>
                                    <td>{{ $mr->mr_sent_for_budget_expansion }}</td>
                                </tr>
                                @endif

                                @if(isset($mr->mr_sent_for_budget_expansion))
                                <tr>
                                    <th>Sent for Budget Expansion Reminder </th>
                                    <td>{{ $mr->mr_sent_for_budget_expansion_reminder }}</td>
                                </tr>
                                @endif

                                </tbody>
                                </thead>


                            </table>

                            @unless ($mr->tags->isEmpty())

                                <h5>Tags:</h5>
                                <ul>
                                    @foreach ($mr->tags as $tag)
                                        <li>  <a href=" {{ action('TagsController@show', [$tag->slug]) }} " > <span> {{ $tag->name }} </span></a></li>

                                    @endforeach
                                </ul>
                            @endunless



<li><a href="{{ action('MRsController@edit', [$mr->id])  }}"><i class='fa fa-link'></i> <span>Edit MR : {!! $mr->mr_no !!}</span></a></li>

                        </mr>


                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.disqus')
@endsection