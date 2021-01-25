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
        <label class="checkbox__label"><input type="checkbox" name="groot" value="1">Groot wiel</label>
        <label class="checkbox__label"><input type="checkbox" name="klein" value="2">Klein wiel</label>
        <label class="checkbox__label"><input type="checkbox" name="stuur" value="3">Stuur</label>
        <label class="checkbox__label"><input type="checkbox" name="pedals" value="4">Pedalen</label>
        <label class="checkbox__label"><input type="checkbox" name="zadel" value="5">Zadel</label>
      </div>
      <div class="form__field">
        <label class="checkbox__label"><input type="checkbox" name="staaf" value="1">Ijzeren staaf</label>
        <label class="checkbox__label"><input type="checkbox" name="ducktape" value="2">Ducktape (3x)</label>
        <label class="checkbox__label"><input type="checkbox" name="hout" value="3">Houten plank (2x)</label>
        <div class="form__field">
        <label class="checkbox__label"><input type="checkbox" name="dop" value="4">Dopmoer (4x)</label>
        <label class="checkbox__label"><input type="checkbox" name="moer" value="3">Moer (2x)</label>
      </div>

      <div class="form__buttons">
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
          <input type="text" required placeholder="Bob" size="50">
        </label>
        <label>Naam
          <input type="text" required placeholder="De Bouwer" size="50">
        </label>
      </div>

      <div class="form__field">
        <label>E-mail
          <input type="email" required placeholder="bob.debouwer@email.com" size="50">
        </label>
      </div>

      <div class="form__field">
        <label>Straat
          <input type="text" required placeholder="Makerlaan" size="50">
        </label>
        <label> Nummer
          <input type="number" required placeholder="1" size="10">
        </label>
      </div>

      <div class="form__field">
        <label>Postcode
          <input type="number" required placeholder="9000" size="4">
        </label>
        <label>Stad / Gemeente
          <input type="text" required placeholder="Gent" size="50">
        </label>
      </div>

      <div class="form__buttons">
          <input id="prev" type="button" class="form__btn button btn__prev" value="Building Box aanpassen">
          <input id="next" type="button" class="form__btn button btn__next" value="Betaling">
        </div>
    </fieldset>

    <fieldset class="form__betaling">
      <legend class="form__subtitle horizontal__title">Betaling</legend>
        <div class="payment__wrapper">
          <label>
            <input type="radio" name="payment" value="1" class="hidden">
            <img src="./assets/social/bankcontact.jpg" alt="bankcontact" width="120" height="85">
          </label>
          <label>
            <input type="radio" name="payment" value="2" class="hidden">
            <img src="./assets/social/payconiq.jpg" alt="payconiq" width="120" height="85">
          </label>
          <label>
            <input type="radio" name="payment" value="3" class="hidden">
            <img src="./assets/social/visa.jpg" alt="visa" width="120" height="85">
          </label>
      </div>

      <div class="form__buttons">
    <input id="prev" type="button" class="form__btn button btn__prev" value="Betalingmethode aanpassen">
    <input class="form__btn button btn__next form__submit" type="submit" value="Bestelling plaatsen">
  </div>
   </fieldset>

  </form>

</section>
