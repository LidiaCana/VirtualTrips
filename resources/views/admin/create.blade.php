@extends('admin.parent')

@section('main')
@if($errors->any())
    <div class="alert alert-danger">
      <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div>
    @endif
    <div align="right">
        <a href="{{ route('trips.index') }}" class="btn btn-default">Regresar</a>
    </div>
    <form method="post" action="{{ route('trips.store') }}" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
          <label class="col-md-4 text-left">Nombre</label>
          <div class="col-md-8">
            <input type="text" name="name" class="form-control input-lg" />
          </div>
      </div>
    <br />
    <br />
    <div class="form-group">
          <label class="col-md-4 text-left">Descripcion</label>
          <div class="col-md-8">
            <input type="text" name="description" class="form-control input-lg" />
          </div>
      </div>
    <br />
    <div class="form-group">
        <label class="col-md-4 text-left">Precio</label>
        <div class="col-md-8">
          <input type="number" name="price" class="form-control input-lg" />
        </div>
    </div>
    <br />
    <br />
    <br />
    <div class="form-group">
        <label class="col-md-4 text-left">Seleccionar imagen</label>
        <div class="col-md-8">
          <input type="file" name="image" />
        </div>
      </div>
    <br /><br /><br />
    <div class="form-group text-center">
        <input type="submit" name="add" class="btn btn-primary btn-lg" value="Agregar" />
    </div>
    </form>
@endsection