
@extends('app')

@section('htmlheader_title')
    Create a New Purchase Order
@endsection


@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Register a new Purchase Order</b></h3></div>

                    <div class="panel-body">


             {!! Form::model($po =new \App\PO, ['url' => 'pos' ]) !!}

                        @include('pos.form', ['submitButtonText' =>'Add New Purchase Order'])

                        {!! Form::close() !!}


                        @include('errors.list')

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection