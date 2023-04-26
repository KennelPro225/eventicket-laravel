@extends('layout')
@section('content')
<div class="ticket">
  <div class="ticket-card">
    <div class="image-event">
      <img src="" class="image-ticket" />
    </div>
    <div class="event-infoCard">
      <div class="eventTitle"><span>Titre:</span></div>
      <div class="dateInfo">
        <div class="event-date"><span>Date et Heure:</span> </div>
        <div class="event-hour"></div>
           <h1 id="checkAvailable">Available</h1>
          <h1 id="checkAvailable">Unavailable</h1>
      </div>
      <div class="event-place">Lieu: </span> </div>
      <div class="event-author"> Auteur:
        <a href=""
          ></a
        >
      </div>
      <div class="buttonEventview">
          <a

            href=""
            ><button id="successButton">Je prends mon ticket</button></a
          >
      </div>
    </div>
  </div>
</div>
<script>
 let variable = document.querySelector('#checkAvailable')
 var button = document.querySelector('#successButton')
 if (variable.textContent==='Unavailable'){
    button.disabled =button
 }
</script>
@endsection
