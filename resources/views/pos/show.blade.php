@extends('app')

@section('htmlheader_title')
    Supplier
@endsection


@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Purchase Order : {{ $po->po_no }}</div>

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
                                            <li> {{ $mrs->mr_no }}</li>
                                        @endforeach
                                    </ul>
                                        </td>
                                    </tr>
                                <tr>
                                    <th>Supplier</th>
                                    <td>
                                        <ul>
                                            @foreach ($po->suppliers as $supplier)
                                                <li> {{ $supplier->vname }}</li>
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


                                <tr>
                                    <th>Supplier Confirmation</th>
                                    <td>{{ $po->po_confirmation }}</td>
                                </tr>
                                <tr>
                                    <th>Loaded On Ideas</th>
                                    <td>{{ $po->po_loaded_on_ideas }}</td>
                                </tr>
                                <tr>
                                    <th>Approved On Ideas</th>
                                    <td>{{ $po->po_approved_on_ideas }}</td>
                                </tr>
                                <tr>
                                    <th>Memo To Finance </th>
                                    <td>{{ $po->po_memo_to_fin }}</td>
                                </tr>
                                <tr>
                                    <th>Delivery Date </th>
                                    <td>{{ $po->po_delivery_date }}</td>
                                </tr>
                                <tr>
                                    <th>Reminder For Delivery Date </th>
                                    <td>{{ $po->po_reminder_delivery_date }}</td>
                                </tr>
                                <tr>
                                    <th>Materials Received Date </th>
                                    <td>{{ $po->po_mr_received_date }}</td>
                                </tr>

                                <tr>
                                    <th>Fax for Missing Materials Date </th>
                                    <td>{{ $po->po_mrr_missing_date }}</td>
                                </tr>
                                <tr>
                                    <th>Materials Received Report Date </th>
                                    <td>{{ $po->po_mrr_received_date }}</td>
                                </tr>
                                <tr>
                                    <th>Fax for Rejected Materials Date </th>
                                    <td>{{ $po->po_mrr_rejected_date }}</td>
                                </tr>
                                <tr>
                                    <th>Materials Invoice Date </th>
                                    <td>{{ $po->po_invoice_received_date }}</td>
                                </tr>
                                <tr>
                                    <th>Penalty to be Applied </th>
                                    <td>{{ $po->po_penalty }}</td>
                                </tr>
                                <tr>
                                    <th>Invoice Cover </th>
                                    <td>{{ $po->po_cover_invoice }}</td>
                                </tr>
                                <tr>
                                    <th>PO Completion </th>
                                    <td>{{ $po->po_completed }}</td>
                                </tr>

                                </thead>

                                </tbody>
                            </table>

                            @unless ($po->tags->isEmpty())

                                <h5>Tags:</h5>
                                <ul>
                                    @foreach ($po->tags as $tag)
                                        <li> {{ $tag->name }}</li>
                                    @endforeach
                                </ul>
                            @endunless




                            <li><a href=" {{ action('POsController@edit', [$po->id]) }} "><i class='fa fa-link'></i> <span>Edit Purchase Order : {!! $po->po_no !!}</span></a></li>
                        </po>


                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.disqus')
@endsection