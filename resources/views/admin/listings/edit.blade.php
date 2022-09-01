@extends('layouts.admin')

@section('page-title', 'Edit a Listing')

@section('content')

<div id="mainContent">
  <div class="col-md-6">
    <div class="bgc-white p-20 bd">
      <h1>Edit Listing</h1>
      <div class="mT-30">
        <form method="POST" action="{{ route('admin.listings.update', ['slug' => $listing->slug, 'id' => $listing->id]) }}">
          @csrf
          @method('PUT')
          <div class="mb-3"><label class="form-label" for="address">Address</label> <input type="text"
              class="form-control" name="address" id="address" placeholder="ex: 1234 Main St" value="{{old('address', $listing->address)}}">
              @error('address')
              <div class="error-sub-text">
                  {{ $message }}
              </div>
          @enderror
            </div>
          <div class="mb-3"><label class="form-label" for="address2">Address 2</label> <input type="text"
              class="form-control" id="address2" name="address2" placeholder="ex: Apartment, studio, or floor" value="{{old('address2', $listing->address2)}}">
              @error('address2')
              <div class="error-sub-text">
                  {{ $message }}
              </div>
          @enderror</div>
          <div class="row">
            <div class="mb-3 col-md-6"><label class="form-label" for="city">City</label> <input type="text"
                class="form-control" id="city" name="city"  placeholder="ex: new york" value="{{old('city', $listing->city)}}">
                @error('city')
              <div class="error-sub-text">
                  {{ $message }}
              </div>
          @enderror
              </div>
            <div class="mb-3 col-md-4"><label class="form-label" for="state">State</label> <select name="state" id="state"
                class="form-control">
                <option value="FL" @selected(old('state', $listing->state) == 'FL')>Florida</option>
                <option value="NY" @selected(old('state', $listing->state) == 'NY')>New York</option>
              </select></div>
            <div class="mb-3 col-md-2"><label class="form-label" for="zipcode">Zip</label> <input type="text"
                class="form-control" id="zipcode" name="zipcode"  placeholder="ex: 11234"  value="{{old('zipcode', $listing->zipcode)}}">
                @error('zipcode')
              <div class="error-sub-text">
                  {{ $message }}
              </div>
          @enderror
              </div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="bedrooms" >Bedrooms</label> <input type="text" class="form-control" name="bedrooms"
                id="bedrooms" placeholder="ex: 4" value="{{old('bedrooms', $listing->bedrooms)}}">
                @error('bedrooms')
              <div class="error-sub-text">
                  {{ $message }}
              </div>
          @enderror
            </div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="bathrooms" >Bathrooms</label> <input type="text" class="form-control" name="bathrooms"
                id="bedrooms" placeholder="ex: 2" value="{{old('bathrooms')}}">
                @error('bathrooms', $listing->bathrooms)
              <div class="error-sub-text">
                  {{ $message }}
              </div>
          @enderror
            </div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="squarefootage">SQFT</label> <input type="text" class="form-control" name="squarefootage"
                id="squarefootage" placeholder="ex: 2000" value="{{old('squarefootage', $listing->squarefootage)}}">
                @error('squarefootage')
              <div class="error-sub-text">
                  {{ $message }}
              </div>
          @enderror
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-color">Save Listing</button>
          <a href="{{route('admin.listings.delete', ['slug' => $listing->slug, 'id' => $listing->id])}}" onclick="return confirm('are you sure you want to delete this listing')" class="btn btn-danger btn-color" class="btn cur-p btn-danger btn-color">Delete</a>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection