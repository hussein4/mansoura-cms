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
                                    <th>PO Date</th>
                                    <td>{{ $po->po_issued }}</td>
                                </tr>

                                <tr>
                                    <th>Created at</th>
                                    <td>{{ $po->created_at }}</td>
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
@endsection