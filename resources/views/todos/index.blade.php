

@extends('app') 

@section('content')
<div class="container w-25 border p-4 mt-4">
     
        
        <form action="{{route('todos')}}" method="POST">
          @csrf

          @if (session ('success'))
          <h6 class="alert alert-sucess">{{session('success')}}</h6>
          @endif
          @error('title')
          <h6 class="alert alert-danger">{{$message}}</h6>
          
            
          @enderror
            <div class="mb-3">
                <label for="title" class="form-label">destino</label>
                <input type="text" name=title class="form-control" >
              <div class="mb-3">
                <label for="title" class="form-label">receptor</label>
                <input type="text" name=yoye class="form-control" >
              
              </div>
                <b></b><p>pista de calificacion</p></b>
                
                <select class="form-select" multiple aria-label="multiple select example">
                  <H1> selected>PISTA DE CALIFICACION</H1>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
                
          
            <button type="submit" class="btn btn-primary">crear </button>
         </form>
    

         <div>
          @foreach ($todos as $todo )
            <div classs="row py-1">
              <div class="col-md-9 d-flex aling-items-center">
                <a href="{{ route ('todos-edit', ['id' => $todo->id]) }}">{{$todo->title}}</a>
                  </div>
                    <div class="col-md-3 d-flex justify-content-end">
                      <form action="{{ route('todos-destroy', [$todo->id]) }}" method="POST">
                        @method('DELETE')
                       @csrf
                        <button class="btn btn-danger btn-sm">eliminar</button>
                      </form>
                    </div>
        
                  </div>
            
                       @endforeach
                </div>


</div>

      </div>

@endsection
















