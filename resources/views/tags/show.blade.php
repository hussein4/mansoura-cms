@extends('app')

@section('htmlheader_title')
    Supplier
@endsection


@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Tags :</b> {{ $tag->name }} </h3></div>

                    <div class="panel-body">


                        

                            <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
                                <tbody>
                                <tr>
                                    <th>Tag</th>
                                    <td>{{ $tag->name }}</td>
                                </tr>
                                </tbody>
                                </thead>
                                </table>
                            
                        </div>
                </div>
            </div>
        </div>
    </div>
