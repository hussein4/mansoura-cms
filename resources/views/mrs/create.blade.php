
@extends('app')

@section('htmlheader_title')
    Create New Material Request
@endsection


@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Register a new Material Request</b></h3></div>

                    <div class="panel-body">


                        {!! Form::model($mr =new \App\MR, ['url' => 'mrs' ]) !!}

                        @include('mrs.form', ['submitButtonText' =>'Add New Material Request'])

                        {!! Form::close() !!}


                        @include('errors.list')

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection