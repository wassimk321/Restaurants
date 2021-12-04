@extends("adminlte::page")
@section('content')
@if ($errors->any())
    <div>
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        
            @foreach ($errors->all() as $error)
               {{ $error }}
            @endforeach
       
    </div>
@endif
<div Style="background-color:white;border-top:solid 3px red;padding:1%;">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
<div Style="background-color:white;border-bottom: 0.9px solid gray;color:gray;">           
		     <div Style="padding-top:1%;" >
         <h2> <i class="fas fa-plus"> Add Meal</i> </h2> 
        </div>
		   </div>
        </div>

    </div>
</div>
<form action="{{route('meal.store')}}" method="POST" enctype="multipart/form-data">

@csrf

   <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <input type="text" name="description"  class="form-control" placeholder="description">
            </div>
        </div>
		   <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="price"  class="form-control" placeholder="Price">
            </div>
        </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>MealType:</strong>
                <select name="mealTypeID">

@foreach ($mealType as $c)
<option value="{{$c->id}}">{{$c->name}}</option>
@endforeach
</select>  </div>
        </div>

   <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input name="image" type="file" >      </div>
        </div>

<input type="submit" value="save"/>
</form>
</div>
@endsection