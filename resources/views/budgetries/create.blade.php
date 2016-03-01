
@extends('app')

@section('htmlheader_title')
    Create New Budgetry Request
@endsection


@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Budgetry Request</b></h3></div>

                    <div class="panel-body">


                        {!! Form::model($budgetry =new \App\Budgetry, ['url' => 'budgetries' ]) !!}

                        @include('budgetries.form', ['submitButtonText' =>'Add New Budgetry Request'])

                        {!! Form::close() !!}


                        @include('errors.list')

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection