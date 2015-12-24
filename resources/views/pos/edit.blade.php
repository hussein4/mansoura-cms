@extends('app')

@section('htmlheader_title')
    Create Purchase Order
@endsection


@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Edit : {!! $po->po_no !!} </b></h3></div>

                    <!--   <div class="panel-body">   -->

                    {!! Form::model($po,['method' => 'PATCH' , 'action' => ['POsController@update',$po->id]]) !!}


                    @include('pos.form',['submitButtonText'=>'Update Purchase Order'])

                    {!! Form::close() !!}


                    @include('errors.list')

                    <!--    </div>     -->
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

