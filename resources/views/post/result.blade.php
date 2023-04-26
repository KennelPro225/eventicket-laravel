<div class="src">
  <div class="bge">
    <div class="forme">
      <h1 class="Resultat" id="">
        Le ticket N° est Valide
      </h1>
      <h1 class="Resultat" id="">Ticket pas valide</h1>
      <div class="center">
        <a href="{{url_for('checker',event_id=tick.event)}}">
          <button class="submit">Vérifier un autre ticket</button>
        </a>
      </div>
    </div>
  </div>
</div>
