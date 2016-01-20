@extends('app')

@section('htmlheader_title')
    Create New Supplier
@endsection


@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                     <div class="panel-heading"><h3><b>Register a new Supplier</b></h3></div>

                       <div class="panel-body">


                        {!! Form::model($vlist =new \App\Vlist, ['files'=>'true','url' => 'vlist' , 'enctype' => 'multipart/form-data' ]) !!}

                              @include('vlist.form', ['submitButtonText' =>'Add New Supplier'])

                        {!! Form::close() !!}


                              @include('errors.list')

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection