@extends('app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Purchase Orders</b></h3></div>

                    <div class="panel-body">

                        <po>

                            <table id="example" class="table stripe row-border order-column" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>PO Number</th>
                                    <th>Subject</th>
                                    <th>MR No.</th>
                                    <th>Supplier</th>
                                    <th>PO issuance</th>
                                    <th>Estimated Delivery </th>
                                    <th>Total Cost </th>
                                    <th>Currency </th>



                                </tr>
                                </thead>
                            @foreach($po as $p)
                                    <tbody>
                                    <tr>

                                <td><a href=" {{ action('POsController@show', [$p->slug])  }} " > {{ $p->po_no }} </a></td>
                                        <td>{{ $p->po_subject }}</td>


                                        <td>
                                            <ul>
                                                @foreach ($p->mr as $mrs)
                                                    <li> {{ $mrs->mr_no }}</li>
                                                @endforeach
                                            </ul>
                                        </td>

                                        <td>
                                            <ul>
                                                @foreach ($p->suppliers as $supplier)
                                                    <li> {{ $supplier->vname }}</li>
                                                @endforeach
                                            </ul>
                                        </td>

                                        <td>{{ $p->po_issued }}</td>
                                        <td>{{ $p->po_delivery_date }}</td>
                                        <td>{{ $p->po_total_cost }}</td>
                                        <td>{{ $p->po_currency }}</td>


                                    </tr>
                                    </tbody>


                            @endforeach

                            </table>
                            <a href="po_s/import">Import Purchase Orders</a>
                        </po>


                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! $po->render() !!}
@endsection
