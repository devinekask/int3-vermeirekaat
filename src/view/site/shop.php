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

  <article class="content__item shop__info">
    <h1 class="content__title">Building Box</h1>
    <p class="content__alinea">Een High Wheel zelf maken lukt niet in één - twee - drie, er komt wel wat meer bij kijken. Je hebt om te beginnen wel het juiste materiaal nodig. <br> Stel hier je eigen Building Box samen met het materiaal dat je thuis nog niet hebt liggen.</p>
  </article>

  <form class="form" method="post" action="index.php?page=shop">
    <input type="hidden" name="action" value="placeOrder">

    <div class="form__step">
      <fieldset class="form__checkboxes">
        <legend class="form__subtitle horizontal__title align"> 1/3 | Materiaal</legend>
        <label class="align form__help">Sleep het materiaal dat je nodig hebt in de Building Box.</label>
        <div class="box__wrapper">
        <div class="content__item building__box">
          <img src="./assets/img/high-course.png" alt="test" width="200">
        </div>
        <div class="form__field">
          <ul class="form__checkbox-list">
            <li class="checkbox__item">
              <input class="unseen" type="checkbox" name="materials" value="groot">
              <label class="checkbox__label">Groot wiel</label>
            </li>
            <li class="checkbox__item">
              <input class="unseen" type="checkbox" name="materials" value="klein">
              <label class="checkbox__label">Klein wiel</label>
            </li>
            <li class="checkbox__item">
              <input class="unseen" type="checkbox" name="materials" value="stuur">
              <label class="checkbox__label">Stuur</label>
            </li>
            <li class="checkbox__item">
              <input class="unseen" type="checkbox" name="materials" value="pedaal">
              <label class="checkbox__label">Pedalen</label>
            </li>
            <li class="checkbox__item">
              <input class="unseen" type="checkbox" name="materials" value="zadel">
              <label class="checkbox__label">Zadel</label>
            </li>
            <li class="checkbox__item">
              <input class="unseen" type="checkbox" name="materials" value="ijzer">
              <label class="checkbox__label">Ijzeren staaf</label>
            </li>
            <li class="checkbox__item">
              <input class="unseen" type="checkbox" name="materials" value="ducktape">
              <label class="checkbox__label">Ducktape (3x)</label>
            </li>
            <li class="checkbox__item">
              <input class="unseen" type="checkbox" name="materials" value="hout">
              <label class="checkbox__label">Houten plank (2x)</label>
            </li>
            <li class="checkbox__item">
              <input class="unseen" type="checkbox" name="materials" value="dop">
              <label class="checkbox__label">Dopmoer (4x)</label>
            </li>
            <li class="checkbox__item">
              <input class="unseen" type="checkbox" name="materials" value="moer">
              <label class="checkbox__label">Moer (2x)</label>
            </li>
          </ul>
        </div>
      </fieldset>
        <div class="form__buttons btn__mobile">
          <input id="00" type="button" class="unseen form__btn button btn__prev" value="hidden">
          <input id="02" type="button" class="form__btn button btn__next" value="&#10095;">
        </div>
        <div class="form__buttons btn__desktop">
          <input id="00" type="button" class="unseen form__btn button btn__prev" value="">
          <input id="02" type="button" class="form__btn button btn__next" value="Persoonlijke Gegevens">
        </div>
      </div>
    </div>

    <div class="form__step">
      <fieldset class="form__gegevens">
        <legend class="form__subtitle horizontal__title align"> 2/3 | Persoonlijke Gegevens</legend>
        <label class="align form__help">Gelieve jouw gegevens in te vullen zodat de Building Box op het juiste adres geleverd wordt.</label>
        <div class="gegevens__input">

        <div class="field__dubbel">
          <div class="form__field">
            <label>Voornaam</label>
              <input class="margin" type="text" placeholder="Bob" name="first_name">
          </div>
          <div class="form__field">
            <label>Naam</label>
              <input type="text" placeholder="De Bouwer" name="name">
          </div>
        </div>

        <div class="form__field">
          <label>E-mail</label>
            <input type="email" placeholder="bob.debouwer@email.com" size="30"  name="email">
        </div>

        <div class="field__dubbel">
          <div class="form__field">
            <label>Straat</label>
              <input class="margin" type="text" placeholder="Makerlaan" size="30" name="street">
          </div>
          <div class="form__field">
            <label>Nummer</label>
            <input type="number" placeholder="1" name="number">
          </div>
        </div>

        <div class="field__dubbel">
          <div class="form__field">
            <label>Postcode</label>
              <input class="margin" type="number" required placeholder="9000" name="zip">
          </div>
          <div class="form__field">
            <label>Gemeente</label>
              <input type="text" required placeholder="Gent" name="city">
          </div>
        </div>
        </div>

        <div class="form__buttons btn__mobile">
            <input id="01" type="button" class="form__btn button btn__prev" value="&#10094;">
            <input id="03" type="button" class="form__btn button btn__next" value="&#10095;">
        </div>
        <div class="form__buttons btn__desktop">
            <input id="01" type="button" class="form__btn button btn__prev" value="Building Box aanpassen">
            <input id="03" type="button" class="form__btn button btn__next" value="Betalingsmethode">
        </div>
      </fieldset>
    </div>

    <div class="form__step">
      <fieldset class="form__betaling">
          <legend class="form__subtitle horizontal__title align"> 3/3 | Betaling</legend>
            <label class="align form__help">Kies een betalingsmethode om de bestelling af te ronden.</label>
              <div class="form__field payment__wrapper align">
              <label>
                <input type="radio" name="payment" value="bankcontact" class="unseen">
                <img src="./assets/social/bankcontact.jpg" alt="bankcontact" width="120" height="85">
              </label>
              <label>
                <input type="radio" name="payment" value="payconiq" class="unseen">
                <img src="./assets/social/payconiq.jpg" alt="payconiq" width="120" height="85">
              </label>
              <label>
                <input type="radio" name="payment" value="visa" class="unseen">
                <img src="./assets/social/visa.jpg" alt="visa" width="120" height="85">
              </label>
          </div>

          <div class="form__buttons btn__mobile">
          <input id="prev" type="button" class="form__btn button btn__prev" value="&#10094;">
          <input class="form__btn button btn__next form__submit" type="submit" value="&check;">
          </div>
          <div class="form__buttons btn__desktop">
          <input id="02" type="button" class="form__btn button btn__prev" value="Betalingmethode aanpassen">
          <input id="final" class="form__btn button btn__next form__submit" name="button" type="submit" value="Bestelling plaatsen">
          </div>

          <!-- <input class="form__btn button btn__next form__submit" type="submit" value="&check;">-->
        </fieldset>
    </div>

    <!-- <div class="form__buttons">
      <input type="button" class="form__btn button btn__prev" value="&#10094;">
      <input type="button" class="form__btn button btn__next" value="&#10095;">
    </div>
    <div class="form__buttons btn__desktop">
        <input id="" type="button" class="form__btn button btn__prev" value="Betalingmethode aanpassen">
        <input id="final" class="form__btn button btn__next form__submit" name="button" type="submit" value="Bestelling plaatsen">
    </div>-->
  </form>

  <article class="content__item final hidden">
    <h1 class="content__title">Jouw Building Box is onderweg!</h1>
    <div class="bevestiging">
    </div>
  </article>

</section>
