@extends('layout')
@section('name')




<div class="container card mx-auto my-4">

<div class="card-header btn-primary ">
    <p class="text-center "> UPDATED THE TASK </p>
</div>
    <form action="/sms/{{$data->id}}" method="post">
        @csrf
        @method('PUT')
        
        <div class="form-group my-4">
            <input type="text" name="title" value="{{$data->title}}" class="form-control">
        </div>
        
        <div class="form-group">
            <input type="checkbox" name="completed" value="1" {{$data->completed ? 'checked': ''}} class="form-check-input" >
            <label class="form-check-label" for="title">TASK COMPLETED</label>
        </div>
        <div class="form-group my-4">
            <input type="submit" value="UPDATE" class="btn btn-primary ">
        </div>
    </form>
</div>
    
@endsection