@extends('layouts.app')

@section('content')

<center>   <h3> Add Product</h3></center>

  <div class="row">
    <div class="col-xs-8 col-xs-offset-2">
      {!! Form::open(['route' => 'product.store', 'method' => 'post', 'files' => true]) !!}
        <div class="form-group">
          {{ Form:: label('name', 'Name')}}
          {{ Form:: text('name', null, array('class' => 'form-control')) }}

        </div>

        <div class="form-group">
          {{ Form:: label('description', 'Description')}}
          {{ Form:: text('description', null, array('class' => 'form-control')) }}

        </div>

        <div class="form-group">
         {{ Form:: label('price', 'Price')}}
         {{ Form:: text('price', null, array('class' => 'form-control')) }}

       </div>

       <div class="form-group">
                {{ Form::label('category_id', 'Categories') }}
                {{ Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
        </div>


        <div class="form-group">
          {{ Form:: label('image', 'Image')}}
          {{ Form:: file('image', array('class' => 'form-control')) }}

        </div>

        {{Form::submit('Create', array('class' => 'btn btn->default'))}}
      {!! Form::close() !!}

    </div>

  </div>



@endsection
