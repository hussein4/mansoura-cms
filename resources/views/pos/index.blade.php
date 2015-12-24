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
                                    <th>PO issuance</th>
                                    <th>Created at</th>

                                </tr>
                                </thead>
                            @foreach($po as $po)
                                    <tbody>
                                    <tr>

                                <td><a href=" {{ action('POsController@show', [$po->id])  }} " > {{ $po->po_no }} </a></td>
                                        <td>{{ $po->po_subject }}</td>
                                        <td>{{ $po->po_issued }}</td>
                                        <td>{{ $po->created_at }}</td>
                                    </tr>
                                    </tbody>
                            @endforeach

                            </table>

                        </po>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection