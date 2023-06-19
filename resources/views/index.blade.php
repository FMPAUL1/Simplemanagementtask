@extends('layout')
@section('name')
    
<div class="container">

    <div class="card my-4">
        <a class="btn btn-primary" href="/sms/create"> ADD A TASK</a>
    </div>
    @if (session('msg'))
        <div class="alert alert-success">
            {{ session('msg')}}
        </div>

    @endif
    <table class="table container table-borderd ">
        
       <thead>
        
           <tr>
                   <th> # TASK ID</th>
                   <th> TITLE </th>
                   <th> STATUS</th>
               </tr>
    </thead>  
       
    <tbody>

        @foreach ($data as $item)
        
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->completed?"COMPLETED":"NOT COMPLETED "}}</td>
            <td> <a class="btn btn-primary" href="/sms/{{$item->id}}"> VIEW </a> </td>            
           
            
        </tr>
        @endforeach
    </tbody>
      
    </table>
</div>
@endsection