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
                                    <th>Fax</th>
                                    <td>{{ $vlist->vfax   }}</td>
                                </tr>


                                @if(isset($vlist->vmobile) && !empty($vlist->vmobile))
                                <tr>
                                    <th>Mobile</th>
                                    <td>{{  $vlist->vmobile }}</td>

                                </tr>
                                @endif

                                @if(isset($vlist->vemail) && !empty($vlist->vemail))
                                <tr>
                                    <th>E-mail</th>
                                    <td>{{  $vlist->vemail  }}</td>
                                </tr>
                                @endif

                                @if(isset($vlist->vcontactperson) && !empty($vlist->vcontactperson))
                                <tr>
                                    <th>Contact Person</th>
                                    <td>{{  $vlist->vcontactperson }}</td>
                                </tr>
                                @endif


                                <tr>
                                    <th>Address</th>
                                    <td>{{   $vlist->vaddress }}</td>
                                </tr>

                                @if(isset($vlist->vegpcno) && !empty($vlist->vegpcno))
                                <tr>
                                    <th>EGPC No.</th>
                                    <td>{{ $vlist->vegpcno }}</td>
                                </tr>
                                @endif

                                @if(isset($vlist->vcapitallimit) && !empty($vlist->vegpcno))
                                <tr>
                                    <th>Capital Limit</th>
                                    <td>{{  $vlist->vcapitallimit  }}</td>
                                </tr>
                                @endif

                                <th>Grade</th>
                                    <td>{{ $vlist->vgrade }}</td>
                                </tr>

                                @if(isset($vlist->vremarks) && !empty($vlist->vremarks)) )
                                <tr>
                                    <th>Remarks</th>
                                    <td>{{ $vlist->vremarks }}</td>
                                </tr>
                                @endif





                                </tbody>
                                </thead>
                            </table>

                             @unless ($vlist->tags->isEmpty())
                            <h5>Tags:</h5>
                            <ul>
                                @foreach ($vlist->tags as $tag)
                                    <li> {{ $tag->name }}</li>
                                    @endforeach
                            </ul>
                            @endunless



           <li><a href="{{ action('VlistsController@edit', [$vlist->id])  }}"><i class='fa fa-link'></i> <span>Edit Supplier : {!! $vlist->vname !!}</span></a></li>
           <li><a href="{{ action('VlistsController@export', [$vlist->id])  }}"><i class='fa fa-link'></i> <span>Export Supplier : {!! $vlist->vname !!}</span></a></li>

                            <div class = "form-control">
                                {!! Form::open(['method'=>'DELETE' , 'action'=> ['VlistsController@destroy',$vlist->id ]]) !!}
                                {!! Form::submit('Delete Supplier',['class'=> 'btn btn-danger ']) !!}

                                {!! Form::close() !!}
                            </div>
                        </vlist>


                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.disqus')
@endsection