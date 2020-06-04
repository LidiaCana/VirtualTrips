@extends('admin.parent')

@section('main')

<div class="jumbotron text-center">
 <div align="right">
  <a href="{{ route('trips.index') }}" class="btn btn-default">Regresar</a>
 </div>
 <br />
 <img src="{{ URL::to('/') }}/images/{{ $data->img }}" class="img-thumbnail" />
 <h3>Nombre - {{ $data->name }} </h3>
</div>
@endsection