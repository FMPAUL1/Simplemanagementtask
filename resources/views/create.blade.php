@extends('layout')
@section('name')




<div class="container card mx-auto my-4">

<div class="card-header text-bg-primary ">
    <p class="text-center "> ADD A TASK PAGE </p>
</div>
    <form action="/sms" method="post">
        @csrf
        
        <div class="form-group my-4">
            <label for="title">TASK</label>
            <input type="text" name="title" placeholder="ENTER TASK HERE" class="form-control">
        </div>
        <div class="form-group">
            
            <input type="submit" value="ADD TASK" class="btn btn-primary ">
        </div>
    </form>
</div>
    
@endsection