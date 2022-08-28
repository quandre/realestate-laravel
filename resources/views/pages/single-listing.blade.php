@extends('layouts.main')
@section('page-title', '23 Grand ave - Smith Realty')
@section('content')
<div class="single-listing-page">
  <div class="listing-top">
    <img src="https://images.dwell.com/photos/6405098978284392448/6466705949096243200/large.jpg"
      class="listing-top__img">
    <div class="listing-top__form-wrapper">
      <div class="container">
        <form action="" class="listing-top__form">
          <label class="listing-top__form-label">Schedule A Tour</label>
          <div class="listing-top__form-group listing-top__form-group--horz">
            <div class="listing-top__form-option">In-Person</div>
            <div class="listing-top__form-option">Video</div>
          </div>
          <label class="listing-top__form-label">Date</label>
          <div class="listing-top__form-group">
            <div class="listing-top__form-option">February 22</div>
          </div>
          <label class="listing-top__form-label">Time</label>
          <div class="listing-top__form-group">
            <div class="listing-top__form-option">11 AM</div>
          </div>
          <label class="listing-top__form-label">Personal Info</label>
          <div class="listing-top__form-group">
            <div class="listing-top__form-option">Phone Number</div>
          </div>
          <div class="listing-top__form-group">
            <div class="listing-top__form-option">Email</div>
          </div>
          <div class="listing-top__form-group">
            <button type="submit" class="listing-top__form-button">Schedule A Tour</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <section class="listing-info">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1>23 Grand Ave,
            <br>
            Miami, FL 33456
          </h1>
          <div class="listing-info__details">
            <span class="listing-info__details-text"><i class="fa-solid fa-bed"></i>4</span>
            <span class="listing-info__details-text"><i class="fa-solid fa-bed"></i>3</span>
            <span class="listing-info__details-text"><i class="fa-solid fa-bed"></i>2440 SQFT</span>
          </div>
        </div>
        <div class="col-md-5">
          <span class="listing-info__agent-title">
            Agent
          </span>
          <span class="listing-info__agent-name">
            John Smith
          </span>
          <p class="listing-info__agent-profile">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sunt commodi impedit sed quia esse fuga, cum
            sequi laborum quis ipsum dolorum neque ipsam est labore asperiores consequuntur sit. Explicabo.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="listing-extras">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="listing-extras__details">
            <h2>More Info</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum voluptatum, maxime laudantium consequatur suscipit blanditiis optio deserunt. Suscipit officia, perspiciatis ratione deleniti id voluptatibus reprehenderit atque cumque. Consequatur, dolorum quidem!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum voluptatum, maxime voluptatibus reprehenderit atque cumque. Consequatur, dolorum quidem!</p>
            <h3>Details</h3>
            <ul>
              <li>test</li>
              <li>test</li>
              <li>test</li>
              <li>test</li>
              <li>test</li>
              <li>test</li>
              <li>test</li>
              <li>test</li>
              <li>test</li>
              <li>test</li>
            </ul>
          </div>
        </div>
        <div class="col-md-5">
          <h2>Images</h2>
          <div class="listing-extras__gallery">
            <img src="https://images.dwell.com/photos/6405098978284392448/6466705949096243200/large.jpg" alt="">
            <img src="https://images.dwell.com/photos/6405098978284392448/6466705949096243200/large.jpg" alt="">
            <img src="https://images.dwell.com/photos/6405098978284392448/6466705949096243200/large.jpg" alt="">
            <img src="https://images.dwell.com/photos/6405098978284392448/6466705949096243200/large.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection