@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <h5 class="card-header">Dashboard <span class="float-right"><a href="/listings/create" class="btn btn-secondary">Create Listings</a></span></h5>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <h4>Your Listings</h4>

                @if (count($listings))
                    <table class="table table-stripeds">
                        <tr>
                            <th>Company</th>
                        </tr>
                        @foreach ($listings as $listing)
                            <div class="card">
                                <tr>
                                    <td>{{ $listing->name }}</td>
                                    <td>
                                        <form class="float-right" action="/listings/{{ $listing->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" name="button" class="btn btn-danger float-right ml-2">Delete</button>
                                        </</form>
                                        <a href="/listings/{{ $listing->id }}/edit" class="btn btn-info float-right">Edit</a>
                                    </td>
                                </tr>
                            </div>
                        @endforeach
                    </table>
                @else
                    <p>You don't have any listings yet.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
