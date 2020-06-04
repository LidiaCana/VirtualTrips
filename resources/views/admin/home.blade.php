@extends('admin.parent')
@section('main')
    <div align='right'>
        <a href="{{route('trips.create')}}" class="btn btn-success btn-sm">Agregar</a>
        <br>
        <br>
    </div>
    <table class="table table-bordered table-striped">
        <tr>
            <th width="10%"></th>
            <th width="35%">Nombre</th>
            <th width="35%">Precio</th>
            <th width="30%">Accion</th>
        </tr>
    @foreach($data as $row)
        <tr>
            <td><img src="{{ URL::to('/') }}/images/{{ $row->img }}" class="img-thumbnail" width="75" /></td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->price }}</td>
            <td>
                <form method="POST" action="{{route('trips.destroy', $row->id)}}">
                        @csrf
                    <a href="{{route('trips.show', $row->id)}}" class="btn btn-success btn-sm">Ver</a>
                    <a href="{{route('trips.edit', $row->id)}}" class="btn btn-warning btn-sm">Editar</a>
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" >Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
    {!! $data->links() !!}
@endsection