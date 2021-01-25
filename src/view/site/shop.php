<header class="nav banner background__img">
  <a class="link" href="index.php"><img class="nav__logo" src="./assets/img/logo_maker-faire.png" alt="maker-faire-gent"></a>
      <ul class="nav__buttons">
        <li class="nav__item"><a class="cta cta--primary" href="index.php?page=tutorial">Aan de slag</a></li>
      </ul>
</header>

<section class="shop giga">
  <article class="tut__home content__item">
      <div class="tut__header">
        <h1 class="title tut__title">High Wheeling</h1>
        <p class="subtitle tut__subtitle caps">Make Your Box</p>
      </div>
  </article>

  <article class="content__item">
    <h1 class="content__title">Building Box</h1>
    <p class="content__alinea">Een High Wheel zelf maken lukt niet in één - twee - drie, er komt wel wat meer bij kijken. Je hebt om te beginnen wel het juiste materiaal nodig. <br> Stel hier je eigen Building Box samen met het materiaal dat je thuis nog niet hebt liggen.</p>
  </article>

  <form class="form" method="post" action="index.php?page=shop">
    <fieldset class="form__checkboxes">
      <legend class="form__subtitle horizontal__title">Materiaal</legend>
      <div class="form__field">
        <ul class="form__checkbox-list">
          <li class="checkbox__item">
            <input class="opacity" type="checkbox" name="material" value="groot">
            <label class="checkbox__label">Groot wiel</label>
          </li>
          <li class="checkbox__item">
            <input class="opacity" type="checkbox" name="material" value="klein">
            <label class="checkbox__label">Klein wiel</label>
          </li>
          <li class="checkbox__item">
            <input class="opacity" type="checkbox" name="material" value="stuur">
            <label class="checkbox__label">Stuur</label>
          </li>
          <li class="checkbox__item">
            <input class="opacity" type="checkbox" name="material" value="pedaal">
            <label class="checkbox__label">Pedalen</label>
          </li>
          <li class="checkbox__item">
            <input class="opacity" type="checkbox" name="material" value="zadel">
            <label class="checkbox__label">Zadel</label>
          </li>
          <li class="checkbox__item">
            <input class="opacity" type="checkbox" name="material" value="ijzer">
            <label class="checkbox__label">Ijzeren staaf</label>
          </li>
          <li class="checkbox__item">
            <input class="opacity" type="checkbox" name="material" value="ducktape">
            <label class="checkbox__label">Ducktape (3x)</label>
          </li>
          <li class="checkbox__item">
            <input class="opacity" type="checkbox" name="material" value="hout">
            <label class="checkbox__label">Houten plank (2x)</label>
          </li>
          <li class="checkbox__item">
            <input class="opacity" type="checkbox" name="material" value="dop">
            <label class="checkbox__label">Dopmoer (4x)</label>
          </li>
          <li class="checkbox__item">
            <input class="opacity" type="checkbox" name="material" value="moer">
            <label class="checkbox__label">Moer (2x)</label>
          </li>
        </ul>
      </div>

      <div class="form__buttons btn__mobile">
        <input id="prev" type="button" class="opacity form__btn button btn__prev" value="hidden">
        <input id="next" type="button" class="form__btn button btn__next" value="&#10095;">
      </div>
      
      <div class="form__buttons btn__desktop">
        <input id="prev" type="button" class="opacity form__btn button btn__prev" value="hidden">
        <input id="next" type="button" class="form__btn button btn__next" value="Persoonlijke Gegevens">
      </div>
    </fieldset>

    <fieldset class="form__gegevens">
      <legend class="form__subtitle horizontal__title">Persoonlijke Gegevens</legend>
      <div class="form__field">
          <label>Aanspreking
            <select name="aanspreking">
              <option value="1">Meneer</option>
              <option value="2">Mevrouw</option>
              <option value="3">Beste</option>
            </select>
          </label>
      </div>

      <div class="form__field">
        <label>Voornaam
          <input type="text" required placeholder="Bob">
        </label>
        <label>Naam
          <input type="text" required placeholder="De Bouwer">
        </label>
      </div>

      <div class="form__field">
        <label>E-mail
          <input type="email" required placeholder="bob.debouwer@email.com">
        </label>
      </div>

      <div class="form__field">
        <label>Straat
          <input type="text" required placeholder="Makerlaan">
        </label>
        <label> Nummer
          <input type="number" required placeholder="1">
        </label>
      </div>

      <div class="form__field">
        <label>Postcode
          <input type="number" required placeholder="9000">
        </label>
        <label>Stad / Gemeente
          <input type="text" required placeholder="Gent">
        </label>
      </div>

      <div class="form__buttons btn__mobile">
          <input id="prev" type="button" class="form__btn button btn__prev" value="&#10094;">
          <input id="next" type="button" class="form__btn button btn__next" value="&#10095;">
      </div>
      <div class="form__buttons btn__desktop">
          <input id="prev" type="button" class="form__btn button btn__prev" value="Building Box aanpassen">
          <input id="next" type="button" class="form__btn button btn__next" value="Betalingsmethode">
      </div>
    </fieldset>

    <fieldset class="form__betaling">
      <legend class="form__subtitle horizontal__title">Betaling</legend>
        <div class="payment__wrapper">
          <label>
            <input type="radio" name="payment" value="1" class="opacity">
            <img src="./assets/social/bankcontact.jpg" alt="bankcontact" width="120" height="85">
          </label>
          <label>
            <input type="radio" name="payment" value="2" class="opacity">
            <img src="./assets/social/payconiq.jpg" alt="payconiq" width="120" height="85">
          </label>
          <label>
            <input type="radio" name="payment" value="3" class="opacity">
            <img src="./assets/social/visa.jpg" alt="visa" width="120" height="85">
          </label>
      </div>

  <div class="form__buttons btn__mobile">
    <input id="prev" type="button" class="form__btn button btn__prev" value="&#10094;">
    <input class="form__btn button btn__next form__submit" type="submit" value="&check;">
  </div>
  <div class="form__buttons btn__desktop">
    <input id="prev" type="button" class="form__btn button btn__prev" value="Betalingmethode aanpassen">
    <input class="form__btn button btn__next form__submit" type="submit" value="Bestelling plaatsen">
  </div>
   </fieldset>

  </form>

</section>
