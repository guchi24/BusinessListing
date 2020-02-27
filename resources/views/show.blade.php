@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"><h3 class="mt-2">{{ $listing->name}}<span class="float-right"><a href="/" class="btn btn-secondary">Go Back</a></span></h3></div>

            <div class="card-body">
                <div class="list-group-item md-2">
                    Address: {{ $listing->address}}
                </div>
                <div class="list-group-item float-right">
                    {{ $listing->address}}
                </div>
                <div class="list-group-item md-2">
                    Email address: <a href="mailto:{{ $listing->email }}?Subject=Hello" target="_top">{{ $listing->email}}</a>
                </div>
                <div class="list-group-item md-2">
                    Phone number: {{ $listing->phone}}
                </div>
                <div class="list-group-item md-2">
                    Website: <a href="{{ $listing->website }}">{{ $listing->website}}</a>
                </div>
                <div class="list-group-item md-2">
                    Bio: {{ $listing->bio}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
