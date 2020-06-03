@extends('parent')

@section('main')
<div align='right'>
<a href="{{route('trips.create')}}" class="btn btn-success btn-sm">Add</a>
</div>
<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Image</th>
  <th width="35%">First Name</th>
  <th width="35%">Last Name</th>
  <th width="30%">Action</th>
 </tr>
 @foreach($data as $row)
  <tr>
   <td><img src="{{ URL::to('/') }}/images/{{ $row->img }}" class="img-thumbnail" width="75" /></td>
   <td>{{ $row->name }}</td>
   <td>{{ $row->price }}</td>
   <td>
    
   </td>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}
@endsection