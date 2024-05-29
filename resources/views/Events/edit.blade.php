@extends('layouts.app')
@section('content')
 
    <h1>Edit an Event</h1>
    <form method="POST" action="{{ route('events.update', ['event' => $event->id]) }}">
    @csrf
    @method('PUT')
<div class="form-row">
<label>Title</label>
<input class="form-control" type="text" name="title" value="{{ old('title') ?? $event->title }}" required></div>

<div class="form-row">
<label>Description</label>
<input class="form-control" type="text" name="description" value="{{ old('description') ?? $event->description }}" required></div>

<div class="form-row">
<label>Price</label>
<input class="form-control" type="number" min="1.00" step="0.01" name="price"value="{{ old('price') ?? $event->price }}" required></div>
<div class="form-row">

<label>Stock</label>
<input class="form-control" type="number" min="0" name="stock" value="{{ old('stock') ?? $event->stock }}" required></div> 


<div class="form-row">
<label>Venue</label>
<input class="form-control" type="text" name="venue" value="{{ old('venue') ?? $event->venue }}" required></div>

<div class="form-row">
<label>Status</label>
<select class="custom-select" name="status" required>
<option value="available" {{ old('status') == 'available' ? 'selected' : ($event->status == 'available' ? 'selected' : '') }}> 
Available </option>

<option value="Unavailable" {{ old('status') == 'unavailable' ? 'selected' : ($event->status == 'unavailable' ? 'selected' : '') }}> 
Unavailable </option>

</select>
</div>
<div class="form-row">
<button class="btn btn-primary btn-lg mt-4" type="submit"> Update Event</button>
</div>
    </form>

@endsection


