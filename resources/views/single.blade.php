@extends('layout')
@section('name')
    

<div class="card mt-4">
    <div class="card-header text-bg-secondary">
<h1 class="text-center"> WELCOME TO YOUR TASK </h1>
    </div>
    <div class="card-body d-block my-3 mx-auto">
       
        <p  > <span class="mx-4">TASK :</span>{{$data->title}}</p>

       <p><span class="mx-4">TASK COMPLETED :</span> {{ $data->completed?'Yes':'No'}}  </p> 
    </div>
    <div class="card-footer justify-content-center d-flex">
        <a class="btn btn-primary mx-5 "  href="/sms/{{$data->id}}/edit"> UPDATE TASK</a>
<form action="/sms/{{$data->id}}"  method="post">
    @csrf
@method("DELETE")

<input class="btn btn-danger" type="submit" value="DELETE TASK">
        </form>
    </div>
</div>



@endsection