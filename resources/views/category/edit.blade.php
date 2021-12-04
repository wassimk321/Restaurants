@extends('adminlte::page')
@section('content')
<div Style="background-color:white;border-top:solid 3px red;padding:1%;">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
<div Style="background-color:white;border-bottom: 0.9px solid gray;color:gray;">           
		     <div Style="padding-top:1%;" >
         <h2> <i class="fas fa-plus"> Edit Category</i> </h2> 
        </div>
		   </div>
        </div>

    </div>
</div>
@if ($errors->any())
    <div>
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        
            @foreach ($errors->all() as $error)
               {{ $error }}
            @endforeach
       
    </div>
@endif
<form action="{{route('category.update',$category->id)}}" method="POST">
@csrf
{{method_field('PATCH')}}

  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text"  value="{{$category->name}}"  name="name" class="form-control" placeholder="name">
            </div>
        </div>

<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <input type="text"  value="{{$category->description}}"  name="description" class="form-control" placeholder="description">
            </div>
        </div>

<input type="submit" value="save"/>
</form>
</div>
@endsection