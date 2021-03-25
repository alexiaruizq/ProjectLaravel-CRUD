@extends('layout')
              
              @section('content')
              <div class="container">
                        
                  <h2>CREAR REGISTROS</h2>
          
                        <form action="{{ url('crear') }}" method="POST">
                          @csrf
                          <div class="mb-3">
                            <label for="" class="form-label">Código</label>
                            <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1" required>    
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">Descripción</label>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" required>
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">Cantidad</label>
                            <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3" required>
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">Precio</label>
                            <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="3" required>
                          </div>
                          <a href="/" class="btn btn-secondary" tabindex="5">Cancelar</a>
                          <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                        </form>
              </div>
              @endsection
@extends('layout')
              
              @section('content')
              <div class="container">
          
                <h2>EDITAR REGISTROS</h2>
          
                    <form action="{{ url("/{$componentes->id}/editar") }}" method="POST">
                      @csrf
                      @method('PUT')
                      <div class="mb-3">
                        <label for="codigo" class="form-label">Código</label>
                        <input id="codigo" name="codigo" type="text" class="form-control" value="{{ $componentes->codigo }}">    
                      </div>
                      <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{ $componentes->descripcion }}">
                      </div>
                      <div class="mb-3">
                        <label for="cantidad" class="form-label">Cantidad</label>
                        <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{ $componentes->cantidad }}">
                      </div>
                      <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input id="precio" name="precio" type="number" step="any" class="form-control" value="{{ $componentes->precio }}">
                      </div>
                      <a href="/" class="btn btn-secondary">Cancelar</a>
                      <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
              </div>
              @endsection