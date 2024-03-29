<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>EvenTicket</title>
  </head>

  <body
    style="
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px;
    "
  >
    {% for data in datas%}
    <div style="border: 2px dotted #b3001b; padding: 15px">
      <div class="event-in" style="margin-top: 15px; font-weight: 500">
        Ticket N°<span style="font-weight: 600"
          ></span
        >
      </div>
      <div
        class="ticket"
        style="
          border: 5px dotted #b3001b;
          min-height: 50vh;
          width: 750px;
          margin: 20px;
          padding: 15px;
        "
      >
        <div
          class="event-info"
          style="display: flex; justify-content: space-between"
        >
          <div class="title">
            <h1></h1>
          </div>
          <div class="event-image">
            <div class="simulator" style="width: 150px; height: 100px">
              <img src="" alt="" />
            </div>
          </div>
        </div>
        <div class="event-in" style="margin-top: 15px; font-weight: 500">
          <div
            class="event-place"
            style="margin-bottom: 10px; font-weight: 500"
          >

          </div>
          <div class="event-date" style="font-weight: 500; color: #b3001b">
          </div>
        </div>
        <div class="event-in" style="margin-top: 15px; font-weight: 500">
          <div class="commande" style="margin: 10px 0; font-weight: 600">
            Commande gratuite
          </div>
        </div>
        <small style="color: grey">Informations de commande</small>
        <div class="event-in" style="margin-top: 15px; font-weight: 500">
          Commande N°<span style="font-weight: 600"
            ></span
          >
          Commandé par
          <span style="font-weight: 600"></span>
        </div>
      </div>
    </div>
  </body>
</html>
