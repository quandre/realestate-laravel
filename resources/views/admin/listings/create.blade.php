@extends('layouts.admin')

@section('page-title', 'Create a Listing')

@section('content')
<div id="mainContent">
  <div class="col-md-6">
    <div class="bgc-white p-20 bd">
      <h1>Create a Listing</h1>
      <div class="mT-30">
        <form method="POST" action="{{ route('admin.listings.store') }}">
          @csrf
          <div class="mb-3"><label class="form-label" for="prices">Price</label><input type="text"
            class="form-control" name="price" id="price" placeholder="ex: 100000.00" value="{{old('price')}}">
            @error('price')
            <div class="error-sub-text">
                {{ $message }}
            </div>
        @enderror
          </div>
          <div class="mb-3"><label class="form-label" for="property_type">Property Type</label>
            <select name="property_type" id="property_type" class="form-control">
              <option value="home" @if (old('property_type') == "home") selected @endif>Home</option>
              <option value="condo" @if (old('property_type') == "condo") selected @endif >Condo</option>
            </select>
            @error('property_type')
            <div class="error-sub-text">
                {{ $message }}
            </div>
        @enderror
      </div>
          <div class="mb-3"><label class="form-label" for="listing_type">Listing Type</label>
            <select name="listing_type" id="listing_type" class="form-control">
              <option value="for_sale" @if (old('listing_type') == "for_sale") selected @endif>For Sale</option>
              <option value="for_rent" @if (old('listing_type') == "for_rent") selected @endif >For Rent</option>
            </select>
            @error('listing_type')
            <div class="error-sub-text">
                {{ $message }}
            </div>
        @enderror
          </div>
          <div class="mb-3"><label class="form-label" for="address">Address</label><input type="text"
              class="form-control" name="address" id="address" placeholder="ex: 1234 Main St" value="{{old('address')}}">
              @error('address')
              <div class="error-sub-text">
                  {{ $message }}
              </div>
          @enderror
            </div>
          <div class="mb-3"><label class="form-label" for="address2">Address 2</label><input type="text"
              class="form-control" id="address2" name="address2" placeholder="ex: Apartment, studio, or floor" value="{{old('address2')}}">
              @error('address2')
              <div class="error-sub-text">
                  {{ $message }}
              </div>
          @enderror</div>
          <div class="row">
            <div class="mb-3 col-md-6"><label class="form-label" for="city">City</label><input type="text"
                class="form-control" id="city" name="city"  placeholder="ex: new york" value="{{old('city')}}">
                @error('city')
              <div class="error-sub-text">
                  {{ $message }}
              </div>
          @enderror
              </div>
            <div class="mb-3 col-md-4"><label class="form-label" for="state">State</label><select name="state" id="state"
                class="form-control">
                <option value="FL" @selected(old('state') == 'FL')>Florida</option>
                <option value="NY" @selected(old('state') == 'NY')>New York</option>
              </select></div>
            <div class="mb-3 col-md-2"><label class="form-label" for="zipcode">Zip</label><input type="text"
                class="form-control" id="zipcode" name="zipcode"  placeholder="ex: 11234"  value="{{old('zipcode')}}">
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
                id="bedrooms" placeholder="ex: 4" value="{{old('bedrooms')}}">
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
                @error('bathrooms')
              <div class="error-sub-text">
                  {{ $message }}
              </div>
          @enderror
            </div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="squarefootage">SQFT</label> <input type="text" class="form-control" name="squarefootage"
                id="squarefootage" placeholder="ex: 2000" value="{{old('squarefootage')}}">
                @error('squarefootage')
              <div class="error-sub-text">
                  {{ $message }}
              </div>
          @enderror
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-color">Create Listing</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection