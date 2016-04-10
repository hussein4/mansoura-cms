@extends('app')

@section('htmlheader_title')
    Supplier
@endsection


@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Purchase Order :</b> {{ $po->po_no }} </h3></div>

                    <div class="panel-body">


                        <po>

                            <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tbody>
                                <tr>
                                    <th>PO Number</th>
                                    <td>{{ $po->po_no }}</td>
                                </tr>
                                <tr>
                                    <th>Subject</th>
                                    <td>{{ $po->po_subject }}</td>
                                </tr>


                                <tr>
                                    <th>Mr. No.:</th>
                                    <td>
                                        <ul>
                                            @foreach ($po->mr as $mrs)

                                              <a href=" {{ action('MRsController@show', [$mrs->slug]) }} " ><span>{{ $mrs->mr_no }} </span></a>

                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Awarded Supplier</th>
                                    <td>
                                        <ul>
                                            @foreach ($po->suppliers as $supplier)
                                           <a href=" {{ action('VlistsController@show', [$supplier->slug]) }} " ><span>{{ $supplier->vname }} </span></a>

                                            @endforeach
                                        </ul>

                                    </td>
                                </tr>

                                <tr>
                                    <th>PO Date</th>
                                    <td>{{ $po->po_issued }}</td>
                                </tr>

                                <tr>
                                    <th>PO Materials Cost</th>
                                    <td>{{ $po->po_materials_cost }}</td>
                                </tr>
                                <tr>
                                    <th>PO Freight Cost</th>
                                    <td>{{ $po->po_freight_cost }}</td>
                                </tr>

                                <tr>
                                    <th>PO Total Cost</th>
                                    <td>{{ $po->po_total_cost }}</td>
                                </tr>
                                <tr>
                                    <th>PO Currency</th>
                                    <td>{{ $po->po_currency }}</td>
                                </tr>
                                <tr>
                                    <th>PO Payment Method</th>
                                    <td>{{ $po->po_payment_method }}</td>
                                </tr>
                                <tr>
                                    <th>PO Delivery Method</th>
                                    <td>{{ $po->po_delivery_method }}</td>
                                </tr>

                                @unless ($po->material->isEmpty())


                                    <th >Material Description</th>
                                    <th >Part Number</th>
                                    <ul>

                                        @foreach ($po->material as $materials)
                                            <tr>

                                                <td>
                                                <li>  <a href=" {{ action('MaterialsController@show', [$materials->slug]) }} " > <span> {{ $materials->m_description }} </span></a></li>
                                                </td>
                                                <td>
                                                    <li>  <a href=" {{ action('MaterialsController@show', [$materials->slug]) }} " > <span> {{ $materials->m_code }} </span></a></li>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </ul>

                                @endunless

                                @if(isset($po->po_confirmation))
                                    <tr>
                                        <th>Supplier Confirmation</th>
                                        <td>{{ $po->po_confirmation }}</td>
                                    </tr>
                                @endif
                                @if(isset($po->po_loaded_on_ideas))
                                    <tr>
                                        <th>Loaded On Ideas</th>
                                        <td>{{ $po->po_loaded_on_ideas }}</td>
                                    </tr>
                                @endif
                                @if(isset($po->po_approved_on_ideas))
                                    <tr>
                                        <th>Approved On Ideas</th>
                                        <td>{{ $po->po_approved_on_ideas }}</td>
                                    </tr>
                                @endif
                                @if(isset($po->po_memo_to_fin))
                                    <tr>
                                        <th>Memo To Finance </th>
                                        <td>{{ $po->po_memo_to_fin }}</td>
                                    </tr>
                                @endif
                                @if(isset($po->po_delivery_date))
                                    <tr>
                                        <th>Delivery Date </th>
                                        <td>{{ $po->po_delivery_date }}</td>
                                    </tr>
                                @endif
                                @if(isset($po->po_reminder_delivery_date))
                                    <tr>
                                        <th>Reminder For Delivery Date </th>
                                        <td>{{ $po->po_reminder_delivery_date }}</td>
                                    </tr>
                                @endif
                                @if(isset($po->po_mr_received_date))
                                    <tr>
                                        <th>Materials Received Date </th>
                                        <td>{{ $po->po_mr_received_date }}</td>
                                    </tr>
                                @endif

                                @if(isset($po->po_mrr_missing_date))
                                    <tr>
                                        <th>Fax for Missing Materials Date </th>
                                        <td>{{ $po->po_mrr_missing_date }}</td>
                                    </tr>
                                @endif
                                @if(isset($po->po_mrr_received_date))
                                    <tr>
                                        <th>Materials Received Report Date </th>
                                        <td>{{ $po->po_mrr_received_date }}</td>
                                    </tr>
                                @endif
                                @if(isset($po->po_mrr_rejected_date))
                                    <tr>
                                        <th>Fax for Rejected Materials Date </th>
                                        <td>{{ $po->po_mrr_rejected_date }}</td>
                                    </tr>
                                @endif
                                @if(isset($po->po_invoice_received_date))
                                    <tr>
                                        <th>Materials Invoice Date </th>
                                        <td>{{ $po->po_invoice_received_date }}</td>
                                    </tr>
                                @endif
                                @if(isset($po->po_penalty) && !empty($po->po_penalty))
                                    <tr>
                                        <th>Penalty to be Applied </th>
                                        <td>{{ $po->po_penalty }}</td>
                                    </tr>
                                @endif

                                @if(isset($po->po_cover_invoice))
                                    <tr>
                                        <th>Invoice Cover </th>
                                        <td>{{ $po->po_cover_invoice }}</td>
                                    </tr>
                                @endif
                                @if(isset($po->po_completed) && !empty ($po->po_completed))
                                    <tr>
                                        <th>PO Completion </th>
                                        <td>{{ $po->po_completed }}</td>
                                    </tr>
                                @endif

                                </tbody>
                            </thead>


                            </table>

                            @unless ($po->tags->isEmpty())

                                <h5>Tags:</h5>
                                <ul>
                                    @foreach ($po->tags as $tag)
                                        <li> {{ $tag->name }}</li>
                                    @endforeach
                                </ul>
                            @endunless


                            <li><a href=" {{ action('POsController@exportExcel', [$po->id]) }} "><i class='fa fa-link'></i> <span>Export Purchase Order : {!! $po->po_no !!}</span></a></li>

                            <li><a href=" {{ action('POsController@edit', [$po->id]) }} "><i class='fa fa-link'></i> <span>Edit Purchase Order : {!! $po->po_no !!}</span></a></li>
                        </po>


                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.disqus')
@endsection