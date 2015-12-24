@extends('app')

@section('htmlheader_title')
    Supplier
@endsection


@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Supplier : {{ $vlist->vname }}</div>

                    <div class="panel-body">


                        <vlist>

                            <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
                                <tbody>
                                <tr>
                                    <th>Supplier</th>
                                    <td>{{ $vlist->vname }}</td>
                                    </tr>
                                <tr>
                                    <th>Service</th>
                                    <td>{{ $vlist->vservice }}</td>
                                    </tr>


                                <tr>
                                    <th>Phone</th>
                                    <td>{{ $vlist->vphone   }}</td>

                                </tr>
                                <tr>
                                    <th>Mobile</th>
                                    <td>{{  $vlist->vmobile }}</td>

                                </tr>
                                <tr>
                                    <th>E-mail</th>
                                    <td>{{  $vlist->vemail  }}</td>
                                </tr>
                                <tr>
                                    <th>Contact Person</th>
                                    <td>{{  $vlist->vcontactperson }}</td>

                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{   $vlist->vaddress }}</td>
                                </tr>
                                <tr>
                                    <th>EGPC No.</th>
                                    <td>{{  $vlist->vegpcno  }}</td>
                                </tr>

                                <tr>
                                    <th>Capital Limit</th>
                                    <td>{{  $vlist->vcapitallimit  }}</td>
                                </tr>
                                    <th>Grade</th>
                                    <td>{{ $vlist->vgrade }}</td>
                                </tr>
                                <tr>
                                    <th>Remarks</th>
                                    <td>{{ $vlist->vremarks }}</td>
                                </tr>
                                <tr>
                                    <th>Updated At</th>
                                    <td>{{  $vlist->updated_at }}</td>
                                 </tr>


                                </thead>

                                </tbody>
                            </table>

                             @unless ($vlist->tags->isEmpty())

                            <h5>Tags:</h5>
                            <ul>
                                @foreach ($vlist->tags as $tag)
                                    <li> {{ $tag->name }}</li>
                                    @endforeach
                            </ul>
                            @endunless




                            <li><a href="{{ action('VlistController@edit', [$vlist->id])  }}"><i class='fa fa-link'></i> <span>Edit Supplier : {!! $vlist->vname !!}</span></a></li>
                        </vlist>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection