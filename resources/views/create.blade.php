@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">Create Listing <span class="float-right"><a href="/home" class="btn btn-secondary">Go Back</a></span></div>

      <div class="card-body">
        @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
        @endif

        <form method="post" action="/listings">
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Your name" value="{{ old('name') }}">
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" name="address" id="address" placeholder="Company address" value="{{ old('address') }}">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Company email address" value="{{ old('email') }}">
          </div>
          <div class="form-group">
            <label for="phone">Phone number</label>
            <input type="number" class="form-control" name="phone" id="phone" placeholder="Company phone number" value="{{ old('phone') }}">
          </div>
          <div class="form-group">
            <label for="website">Website</label>
            <input type="text" class="form-control" name="website" id="website" placeholder="Company website" value="{{ old('website') }}">
          </div>
          <div class="form-group">
            <label for="bio">Company bio</label>
            <input type="text" class="form-control" name="bio" id="bio" placeholder="Company bio" value="{{ old('bio') }}">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection