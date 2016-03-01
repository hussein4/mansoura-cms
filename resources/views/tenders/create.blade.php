
@extends('app')

@section('htmlheader_title')
    Create New Tender Request
@endsection


@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Tenders</b></h3></div>

                    <div class="panel-body">


                        {!! Form::model($tender =new \App\Tender, ['url' => 'tenders' ]) !!}

                        @include('tenders.form', ['submitButtonText' =>'Add New Tender '])

                        {!! Form::close() !!}


                        @include('errors.list')

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection