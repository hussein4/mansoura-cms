
@extends('app')

@section('htmlheader_title')
    Create New Tender 
@endsection


@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Tender </b></h3></div>

                    <div class="panel-body">



                        {!! Form::model($tender,['method' => 'PATCH' , 'action' => ['TendersController@update',$tender->id]]) !!}


                        @include('tenders.form', ['submitButtonText' =>'Update Tender '])

                        {!! Form::close() !!}


                        @include('errors.list')

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection