@extends('admin.parent')

@section('main')
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div align="right">
                <a href="{{ route('trips.index') }}" class="btn btn-default">Regresar</a>
            </div>
            <br />
     <form method="post" action="{{ route('trips.update', $data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
      <div class="form-group">
       <label class="col-md-4 text-right">Nombre</label>
       <div class="col-md-8">
        <input type="text" name="name" value="{{ $data->name }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Precio</label>
       <div class="col-md-8">
        <input type="text" name="price" value="{{ $data->price }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <div class="form-group">
        <label class="col-md-4 text-right">Descripcion</label>
        <div class="col-md-8">
            <input type="text" name="description" value="{{ $data->description }}" class="form-control input-lg" />
        </div>
    </div>
    <br>
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Seleccionar imagen</label>
       <div class="col-md-8">
        <input type="file" name="image" />
              <img src="{{ URL::to('/') }}/images/{{ $data->img }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image" value="{{ $data->img }}" />
       </div>
      </div>
      <br /><br /><br />
      <div class="form-group text-center">
       <input type="submit" name="edit" class="btn btn-primary input-lg" value="Editar" />
      </div>
     </form>

@endsection