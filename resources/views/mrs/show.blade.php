@extends('app')

@section('htmlheader_title')
    Material Request
@endsection


@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Material Request : {{ $mr->mr_no }}</div>

                    <div class="panel-body">


                        <mr>

                            <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
                                <tbody>
                                <tr>
                                    <th>Material Request No.</th>
                                    <td>{{ $mr->mr_no }}</td>
                                </tr>
                                <tr>
                                    <th>MR Date</th>
                                    <td>{{ $mr->mr_date }}</td>
                                </tr>

                                </thead>

                                </tbody>
                            </table>

                            @unless ($mr->tags->isEmpty())

                                <h5>Tags:</h5>
                                <ul>
                                    @foreach ($mr->tags as $tag)
                                        <li><a href=" {{ $tag->name }} "><span> {{ $tag->name }} </span></a></li>
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