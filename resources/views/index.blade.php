@extends('layout')
          
          @section('content')
          <div class="container">
              <a href="/agregar" class="btn btn-primary">CREAR</a>
      
            <table class="table table-dark table-striped mt-4">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Código</th>
                  <th scope="col">Descripción</th>
                  <th scope="col">Cantidad</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              @forelse ($componentes as $componente)
              <tbody>    
                
                <tr>
                    <td>{{ $componente->id }}</td>
                    <td>{!! $componente->codigo !!}</td>
                    <td>{{ $componente->descripcion }}</td>
                    <td>{{ $componente->cantidad }}</td>
                    <td>{{ $componente->precio }}</td>
                    <td>
                    <form action="{{ url("/{$componente->id}") }}" method="POST">
                      <a href="{{ route('componentes.edit', ['id' =>$componente->id]) }}" class="btn btn-info">Editar</a>         
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>          
                    </td>        
                </tr>
                @empty
                
              </tbody>
              @endforelse
            </table>
            
          </div>
          @endsection 