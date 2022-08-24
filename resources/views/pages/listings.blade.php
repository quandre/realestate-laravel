@extends('layouts.main')

@section('content')
<div class="listings-page">
  <div class="listings-city">
    <img class="listings-city__img"
      src="https://images.dwell.com/photos-6311371353569939456/6739650785763569664-large/modern-architectural-style-with-warm-finishes-to-compliment-mountain-setting.jpg"
      alt="">
    <h1 class="listings-city__title">South Beach</h1>
  </div>
  <div class="listings-filter">
    <div class="listings-filter__wrapper">
      <div class="listings-filter__option">
        Any Price <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="listings-filter__option">
        All Beds <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="listings-filter__option">
        Hometype <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="listings-filter__option">
        More <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="listings-filter__button">
        Search
      </div>
    </div>
  </div>
  <div class="listings-properties">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="listings-properties__item">
            <img
              src="https://images.dwell.com/photos-6311371353569939456/6739650785763569664-large/modern-architectural-style-with-warm-finishes-to-compliment-mountain-setting.jpg"
              alt="">
            <span class="listings-properties__item-price">$250,000</span>
            <span class="listings-properties__item-details"><i class="fa-solid fa-bed"></i> 4 <i
                class="fa-solid fa-bath"></i> 3 <i class="fa-solid fa-ruler-triangle"></i> 2440 SQFT</span>
            <span class="listings-properties__item-address">2135 Grand St,<br>
              Miami Beach, FL 23456
            </span>
            <div class="listings-properties__item-line"></div>
            <span class="listings-properties__item-owner">
              Bryant Realty
            </span>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="listings-properties__item">
            <img
              src="https://images.dwell.com/photos-6311371353569939456/6739650785763569664-large/modern-architectural-style-with-warm-finishes-to-compliment-mountain-setting.jpg"
              alt="">
            <span class="listings-properties__item-price">$250,000</span>
            <span class="listings-properties__item-details"><i class="fa-solid fa-bed"></i> 4 <i
                class="fa-solid fa-bath"></i> 3 <i class="fa-solid fa-ruler-triangle"></i> 2440 SQFT</span>
            <span class="listings-properties__item-address">2135 Grand St,<br>
              Miami Beach, FL 23456
            </span>
            <div class="listings-properties__item-line"></div>
            <span class="listings-properties__item-owner">
              Bryant Realty
            </span>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="listings-properties__item">
            <img
              src="https://images.dwell.com/photos-6311371353569939456/6739650785763569664-large/modern-architectural-style-with-warm-finishes-to-compliment-mountain-setting.jpg"
              alt="">
            <span class="listings-properties__item-price">$250,000</span>
            <span class="listings-properties__item-details"><i class="fa-solid fa-bed"></i> 4 <i
                class="fa-solid fa-bath"></i> 3 <i class="fa-solid fa-ruler-triangle"></i> 2440 SQFT</span>
            <span class="listings-properties__item-address">2135 Grand St,<br>
              Miami Beach, FL 23456
            </span>
            <div class="listings-properties__item-line"></div>
            <span class="listings-properties__item-owner">
              Bryant Realty
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection