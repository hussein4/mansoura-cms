@extends('app')

@section('htmlheader_title')
    Create Budgetry Request
@endsection


@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Edit Budgetry MR # : {!! $budgetry->mr_b_no !!} </b></h3></div>

                    <!--   <div class="panel-body">   -->


                    {!! Form::model($budgetry,['method' => 'PATCH' , 'action' => ['BudgetriesController@update',$budgetry->id]]) !!}

                    @include('budgetries.form',['submitButtonText'=>'Update Budgetry Request'])

                    {!! Form::close() !!}


                    @include('errors.list')

                    <!--    </div>     -->
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

