@extends('layout')
@section('content')
<div class="post">
  <form method="post" enctype="multipart/form-data">
    <div class="info-form">
      <div class="form-items">
        <div id="form-items">
            <div class="title">Informations sur l'évènement</div>
          <div class="eventInfo">
            <div class="title-info">
              <div class="invalid-feedback">
              </div>
            </div>
            <div class="infoEvent">
              <div class="type-info">
                <div class="invalid-feedback">
                </div>
              </div>
              <div class="category-info">
                <div class="invalid-feedback">
                </div>
              </div>
            </div>
            <div class="infoEvent">
              <div class="seat-info">
                <div class="invalid-feedback">
                </div>
              </div>
              <div class="image-info">
                <div class="invalid-feedback">
                </div>
              </div>
            </div>
          </div>
          <div class="title">Localisation</div>
          <div class="location">
            <div class="place-info">
              <div class="invalid-feedback">
              </div>
            </div>
          </div>
          <div class="title">Date et Heure</div>
          <div class="date">
            <div class="infoEvent">
              <div class="date-info">
                <div class="invalid-feedback">
                </div>
              </div>
              <div class="hour-info">
                <div class="invalid-feedback">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection
