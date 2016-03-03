
@extends('app')

@section('htmlheader_title')
    Create a New Material
@endsection


@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Register a new Material</b></h3></div>

                    <div class="panel-body">


                        {!! Form::model($material = new \App\Material, ['url' => 'materials' ]) !!}

                        @include('materials.form', ['submitButtonText' =>'Add New Material'])

                        {!! Form::close() !!}


                        @include('errors.list')

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection