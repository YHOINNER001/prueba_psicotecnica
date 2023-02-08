@extends('app')



@section('content')
<div class="container w-25 border p-4 my-4">
    <div class="row mx-auto">
        
        <form action="{{route('categories.store')}}" method="POST">
            @csrf
  
            @if (session ('success'))
            <h6 class="alert alert-sucess">{{session('success')}}</h6>
            @endif
            @error('name')
            <h6 class="alert alert-danger">{{$message}}</h6>
            
              
            @enderror
              <div class="mb-3">
                  <label for="title" class="form-label">destino</label>
                  <input type="text" name=name class="form-control" >
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="title" class="form-label">donde</label>
                        <input type="text" name=name1 class="form-control" >
                      <div class="mb-3">
                        <div class="mb-3">
                            <label for="title" class="form-label">destino</label>
                            <input type="text" name=name2 class="form-control" >
                          <div class="mb-3">
                            <div class="mb-3">
                                <label for="title" class="form-label">destino</label>
                                <input type="text" name=name3 class="form-control" >
                              <div class="mb-3">

                 
                
              
                  
            
              <button type="submit" class="btn btn-primary">crear </button>
           </form>




    </div>




</div>


@endsection