@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <h5 class="card-header">Business Listing <span class="float-right"><a href="/listings/create" class="btn btn-secondary">Create Listings</a></span></h5>

            <div class="card-body">
                @if (count($listings))
                    <div class="list-group">
                        @foreach ($listings as $listing)
                            <a href="/listings/{{ $listing->id }}" class="list-group-item">
                                    {{ $listing->name }}
                            </a>    
                        @endforeach
                    </div> 
                @else
                    <p>No listings yet.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
