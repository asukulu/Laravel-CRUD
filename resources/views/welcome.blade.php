
@extends('layouts.app')

@section('content')
@empty ($events)
<div class="alert alert-warning">
the list of events is empty
</div>

@else
    <div class="row">
        @foreach ($events as $event)
            <div class="col-3">
            @include('components.event-card')
              
                </div>
                @endforeach
        </div>
    @endif
@endsection