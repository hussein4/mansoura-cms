@extends('app')

@section('htmlheader_title')
    Create Material Request
@endsection


@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Edit MR # : {!! $mr->mr_no !!} </b></h3></div>

                    <!--   <div class="panel-body">   -->


                    {!! Form::model($mr,['method' => 'PATCH' , 'action' => ['MRsController@update',$mr->id]]) !!}

                    @include('mrs.form',['submitButtonText'=>'Update Material Request'])

                    {!! Form::close() !!}


                    @include('errors.list')

                    <!--    </div>     -->
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

