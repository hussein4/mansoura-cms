@extends('app')

{!! Form::model($vlist =new \App\Vlist, ['url' => 'evals' ]) !!}

@include('evals.form', ['submitButtonText' =>'Evaluate Supplier'])

{!! Form::close() !!}