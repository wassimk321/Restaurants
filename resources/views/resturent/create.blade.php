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
         <h2> <i class="fas fa-plus"> Add Resturent</i> </h2> 
        </div>
		   </div>
        </div>

    </div>
</div>
<form action="{{route('resturnt.store')}}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>City:</strong>
                <input type="text" name="city" class="form-control" placeholder="city">
            </div>
        </div>
  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" name="address" class="form-control" placeholder="address">
            </div>
        </div>
<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <input type="text" name="description" class="form-control" placeholder="description">
            </div>
        </div>

<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone:</strong>
                <input type="text" name="phone" class="form-control" placeholder="phone">
            </div>
        </div>

<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Duration:</strong>
                <input type="number" name="duration" class="form-control" placeholder="duration">
            </div>
        </div>


<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
              <select name="category_id">
@foreach ($category as $c)
<option value="{{$c->id}}">{{$c->name}}</option>
@endforeach
</select>    </div>
        </div>

<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>choose Image:</strong>

<input name="image" type="file" >    </div>
        </div>

<input type="submit" value="save"/>
</form>
</div>
@endsection