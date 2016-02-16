@extends('app')

@section('htmlheader_title')
    Create New Supplier
@endsection


@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3><b>Evaluate : {!! $vlist->vname !!} </b></h3></div>



<!-- app/views/vlist-eval.blade.php -->


        <!-- name -->


        {!! Form::model($vlist,['method' => 'PATCH' , 'action' => ['VlistsController@update',$vlist->id]]) !!}
        <div class="form-group ">

            {!! Form::label('quality', 'Quality:', ['class'=> 'form-control' ,'id'=>'iCheck']) !!}
            {!! Form::radio('quality','1','disabled') !!} Bad Quality
            {!! Form::radio('quality','2','disabled') !!} Accepted Quality
            {!! Form::radio('quality','3','disabled') !!} Good Quality
            {!! Form::radio('quality','4',true) !!} Excellent Quality
        </div>
        <div class="form-group ">
            {!! Form::label('delivery', 'Delivery:', ['class'=> 'form-control' ,'id'=>'iCheck']) !!}
            {!! Form::radio('delivery','1','disabled') !!} Bad Delivery
            {!! Form::radio('delivery','2','disabled') !!} Accepted Delivery
            {!! Form::radio('delivery','3','disabled') !!} Good Delivery
            {!! Form::radio('delivery','4',true) !!} Excellent Delivery
        </div>

        <div class="form-group ">

            {!! Form::label('bidbond', 'Bid & Performance Bond:', ['class'=> 'form-control' ,'id'=>'iCheck']) !!}
            {!! Form::radio('bidbond','1','disabled') !!} Does Not provide
            {!! Form::radio('bidbond','2','disabled') !!} Some Time Provides
            {!! Form::radio('bidbond','3','disabled') !!} Frequent Provides
            {!! Form::radio('bidbond','4',true) !!} Always Provide

        </div>

        <div class="form-group ">

            {!! Form::label('desc', 'Descripency:', ['class'=> 'form-control' ,'id'=>'iCheck']) !!}
            {!! Form::radio('desc','1','disabled') !!} Incomplete Documents
            {!! Form::radio('desc','2','disabled') !!} Some Missing Data
            {!! Form::radio('desc','3','disabled') !!} Accepted Documents
            {!! Form::radio('desc','4',true) !!} Complete Documents

        </div>

                    <div class="form-group" >
                        {!! Form::hidden('vname', $vlist->vname , ['class'=> 'form-control']) !!}
                    </div>
                    <div class="form-group" >
                        {!! Form::hidden('vservice', $vlist->vservice , ['class'=> 'form-control']) !!}
                    </div>
                    <div class="form-group" >
                        {!! Form::hidden('vphone', $vlist->vphone , ['class'=> 'form-control']) !!}
                    </div>
                    <div class="form-group" >
                        {!! Form::hidden('vfax', $vlist->vfax , ['class'=> 'form-control']) !!}
                    </div>
                    <div class="form-group" >
                        {!! Form::hidden('vaddress', $vlist->vaddress , ['class'=> 'form-control']) !!}
                    </div>
                    <div class="form-group" >
                        {!! Form::hidden('created_on', $vlist->created_on , ['class'=> 'form-control']) !!}
                    </div>
                    <div class="form-group" >
                        {!! Form::label('tag_list', 'Tags:') !!}
                        {!! Form::select('tag_list[]',$tags,null,[ 'class'=>'form-control','id'=> 'tag_list' ,'multiple']) !!}

                   </div>




        {!! Form::submit('Evaluate Supplier' , ['class' => 'btn btn-primary form-control' ]) !!}

{!! Form::close() !!}

                    @include('errors.list')

                    <!--    </div>     -->
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
