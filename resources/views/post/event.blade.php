@extends('layout')
@section('content')
<div class="section-third">
  <div class="category">
    <h2 class="text-category" style="margin-bottom: 20px">
      En ce moment - évènements
    </h2>
    <h2 class="text-category" style="margin-bottom: 20px">
      En ce moment - Aucun évènement
    </h2>
    <h2 class="text-category" style="margin-bottom: 20px">
      En ce moment - évènement
    </h2>
  </div>
  <div class="ken">
    <div class="eventPost">
      <div class="event-card">
        <div class="image-event">
          <img src="" class="image-ticket" />
        </div>
        <div class="event-infoCard">
          <div class="eventTitle"></div>
          <div class="dateInfo">
            <div class="event-date"></div>
            <div class="event-hour"></div>
            <h1 id="checkAvailable">Available</h1>
            <h1 id="checkAvailable">Unavailable</h1>
          </div>
          <div class="event-place"></div>
          <div>
            <a href=""
              >Kennel</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
