@extends('app')

@section('htmlheader_title')
    Create New Material
@endsection


@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Edit : {!! $material->m_description !!} </b></h3></div>


                    {!! Form::model($material,['method' => 'PATCH' , 'action' => ['MaterialsController@update',$material->id]]) !!}


                    @include('materials.form',['submitButtonText'=>'Update Materials'])

                    {!! Form::close() !!}


                    @include('errors.list')

                    <!--    </div>     -->
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

