@extends('app')

@section('htmlheader_title')
    Create New Supplier
@endsection


@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Edit : {!! $vlist->vname !!} </b></h3></div>

                 <!--   <div class="panel-body">   -->


       {!! Form::model($vlist,['method' => 'PATCH' , 'action' => ['VlistsController@update',$vlist->id , 'files'=>'true','enctype' => 'multipart/form-data']]) !!}

                         @include('vlist.form',['submitButtonText'=>'Update Supplier'])

                        {!! Form::close() !!}



                    {!! Form::open(['method'=>'DELETE' , 'action'=> ['VlistsController@destroy',$vlist->id ]]) !!}
                    {!! Form::submit('Delete Supplier',['class'=> 'btn btn-danger ']) !!}
                    {!! Form::close() !!}



                      @include('errors.list')
     </div>
                <!--    </div>     -->
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

