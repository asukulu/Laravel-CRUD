@extends('layouts.app')
@section('content')
 
    <h1>List of events</h1>

    <a class="btn btn-success" href="{{ route('events.create') }}">Create</a>

    @empty ($events)
    <div class="alert alert-warning">
    the list of events is empty
    </div>
   @else
<div class="table-responsive">
<table class="table table-striped">
<thead class="thead-light">
<th>Id</th>
<th>Title</th>
<th>Description</th>
<th>Price</th>
<th>Stock</th>
<th>Status</th>
<th>Venue</th>
<th>Actions</th>

</thead>
<tbody>

@foreach ($events as $event)
<tr>
<td> {{ $event->id }}</td>
<td> {{ $event->title }}</td>
<td> {{ $event->description }}</td>
<td> {{ $event->price }}</td>
<td> {{ $event->stock }}</td>
<td> {{ $event->status }}</td>
<td> {{ $event->venue }}</td>
<td>
<a class="btn btn-link" href="{{ route('events.show', ['event' => $event->id]) }}">Show</a>
<a class="btn btn-link" href="{{ route('events.edit', ['event' => $event->id]) }}">Edit</a>
<form method="POST" action="{{ route('events.destroy', ['event' => $event->id]) }}">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-link">Delete</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endif
@endsection 