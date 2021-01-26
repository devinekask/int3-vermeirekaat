<header class="back banner">
  <a class="back__button link" href="index.php"> <span>&#10094;</span> Terug naar Home</a>
</header>

<section class="tutorial giga">

  <article class="tut__home content__item">
    <div class="tut__header">
      <h1 class="title tut__title">High Wheeling</h1>
      <p class="subtitle tut__subtitle caps">Build Your Own</p>
    </div>
  </article>

  <div id="start">
  <article class="tut__info content__item">
    <div class="info__build">
      <h2 class="content__title">Let's Build</h2>
        <p class="content__alinea">Je enthousiasme is er al, nu nog het materiaal. Voor dit project heb je bepaalde materialen nodig.</p>
       <p class="content__alinea">Heb je deze niet in huis liggen? <br>Geen nood, bestel jouw eigen <span>Building Box</span> samen en deze staat over twee dagen voor je deur.</p>
      <ul class="build__cta">
        <li class="list__item"><a class="cta cta--build cta--secondary" href="index.php?page=shop">Bestel het materiaal</a></li>
        <li class="list__item item__top"><input id="next" class="button btn__next cta cta--build cta--primary" type="button" value="Start met bouwen"></li>
      </ul>
    </div>
    <div class="slider__container slider--big">
      <div class="slider__img top__img">
        <img width="700" src="./assets/img/penny-bike.png" alt="penny-bike">
      </div>
      <div class="slider__img overlay__img">
        <img width="700" src="./assets/img/modern-bike.png" alt="modern-bike">
      </div>
      <input class="slider__range" type="range" id="slider" min="0" max="700" value="50%">
    </div>
  </article>
  </div>

  <div id="step01" class="scroll__container invisible">
    <article class="steps content__item scroll__wrapper">

      <div class="steps__name scroll__child">
        <h3 class="steps__title title caps">Het stuur</h3>
        <p class="number title--extra">01</p>
      </div>

      <div class="steps__icons scroll__child">
        <img class="tut__icon" width="100" height="100" src="./assets/svg/wiel.png" alt="icon-wiel">
        <img class="tut__icon" width="100" height="146" src="./assets/svg/stuur.png" alt="icon-stuur">
        <img class="tut__icon" width="100" height="108" src="./assets/svg/moer.png" alt="icon-moer">
      </div>

      <div class="steps__img scroll__child">
        <picture class="step__img picture__step-one">
          <source sizes="(max-width: 450px) 45vw,
          (max-width: 600px) 60vw"
          srcset="./assets/tutorial/stap-1_159.webp 159w,
          ./assets/tutorial/stap-1_318.webp 318w"
          type="image/webp"/>

          <source sizes="(max-width: 450px) 45vw,
          (max-width: 600px) 60vw"
          srcset="./assets/tutorial/stap-1_159.png 159w,
          ./assets/tutorial/stap-1_318.png 318w,"
          type="image/png"/>

        <img class="img__step-one img__width img__zoom" width="636" height="980" alt="tutorial-step-one" src="./assets/tutorial/stap-1.png">
        </picture>
      </div>

      <div class="steps__instructions content__item scroll__child">
        <p class="instruction purple"> Bevestig het stuur aan het middenstuk van het wiel. Je kan dit vast draaien door een <span>moer</span> te gebruiken</p>
        <p class="instruction purple">Bovenstaande stap doe je aan beide kanten van het wiel zodat het stuur stevig vast zit.</p>
        <p class="instruction purple">Het stuur monteer je zo laag mogelijk.</p>
      </div>

      <div class="steps__question scroll__child">
        <p class="question">Kan je het stuur draaien zodat het wiel mee beweegt?</p>
        <div class="question__answers">
          <input id="prev" type="button" class="answer button btn__prev" value="Neen">
          <input id="next" type="button" class="answer button btn__next" value="Ja">
        </div>
      </div>
    </article>
  </div>


  <div id="step02" class="scroll__container invisible">
    <article class="steps content__item scroll__wrapper">

      <div class="steps__name scroll__child">
        <h3 class="steps__title title caps">De pedalen</h3>
        <p class="number title--extra">02</p>
      </div>

      <div class="steps__icons scroll__child">
        <img class="tut__icon" width="100" height="80" src="./assets/svg/pedals.png" alt="icon-pedaal">
        <img class="tut__icon" width="100" height="66" src="./assets/svg/stang.png" alt="icon-stang">
        <img class="tut__icon" width="100" height="82" src="./assets/svg/dopmoer.png" alt="icon-dopmoer">
      </div>

      <div class="steps__img scroll__child">
        <picture class="step__img picture__step-two">
          <source sizes="(max-width: 450px) 45vw,
          (max-width: 600px) 60vw"
          srcset="./assets/tutorial/stap-2_96.webp 96w,
          ./assets/tutorial/stap-2_193.webp 193w"
          type="image/webp"/>

          <source sizes="(max-width: 450px) 45vw,
          (max-width: 600px) 60vw"
          srcset="./assets/tutorial/stap-2_96.png 96w,
          ./assets/tutorial/stap-2_193.png 193w,"
          type="image/png"/>

        <img class="img__step-two img__zoom" width="385" height="919" alt="tutorial-step-one" src="./assets/tutorial/stap-2.png">
        </picture>
      </div>

    <div class="steps__instructions content__item scroll__child">
      <p class="instruction purple"> Verbind de achterkant van de pedaal aan het middenstuk van het wiel.</p>
      <p class="instruction purple">Draai de trapper in de pedaal en bevestig deze aan de achterkant van de pedaal met een moerdop.</p>
      <p class="instruction purple">Je doet dit voor beide trappers, elk aan een kant van het wiel.</p>
    </div>

    <div class="steps__question scroll__child">
      <p class="question">Draait het wiel mee als je de trappers beweegt?</p>
      <div class="question__answers">
        <input id="prev" type="button" class="answer button btn__prev" value="Neen">
          <input id="next" type="button" class="answer button btn__next" value="Ja">
      </div>
    </div>
    </article>
  </div>

  <div id="step03" class="scroll__container invisible">
    <article class="steps content__item scroll__wrapper">

      <div class="steps__name scroll__child">
        <h3 class="steps__title title caps">Het kader</h3>
        <p class="number title--extra">03</p>
      </div>

      <div class="steps__icons scroll__child">
        <img class="tut__icon" width="100" height="160" src="./assets/svg/staaf.png" alt="icon-staaf">
        <img class="tut__icon" width="100" height="116" src="./assets/svg/ducktape.png" alt="icon-ducktape">
      </div>

      <div class="steps__img scroll__child">
        <picture class="step__img picture__step-three">
          <source sizes="(max-width: 450px) 45vw,
          (max-width: 600px) 60vw"
          srcset="./assets/tutorial/stap-3_117.webp 117w,
          ./assets/tutorial/stap-3_234.webp 234w"
          type="image/webp"/>

          <source sizes="(max-width: 450px) 45vw,
          (max-width: 600px) 60vw"
          srcset="./assets/tutorial/stap-3_117.png 117w,
          ./assets/tutorial/stap-3_234.png 234w,"
          type="image/png"/>

        <img class="img__step-three img__width img__zoom img__zoom-top" width="467" height="753" alt="tutorial-step-one" src="./assets/tutorial/stap-3.png">
        </picture>
      </div>

      <div class="steps__instructions content__item scroll__child">
        <p class="instruction yellow">De ijzeren staaf buig je om zodat deze de vorm van het wiel aanneemt.</p>
        <p class="instruction yellow">Het kader (nl. de ijzeren staaf) hang je vast aan het onderstel van het stuur (nl. de stuurvork) door enkele lagen ducktape te gebruiken.</p>
        <p class="instruction yellow">Voor extra stevigheid kan je de ducktape in een kruis leggen.</p>
      </div>

      <div class="steps__question scroll__child">
        <p class="question">Zie je het nog zitten om verder te bouwen?</p>
        <div class="question__answers">
          <input id="prev" type="button" class="answer button btn__prev" value="Neen">
          <input id="next" type="button" class="answer button btn__next" value="Ja">
        </div>
      </div>
    </article>
  </div>

  <div id="step04" class="scroll__container invisible">
      <article class="steps__between steps content__item scroll__wrapper">

    <div class="steps__name scroll__child">
      <h3 class="title__between title caps">Het kleine wiel</h3>
      <p class="number__between title--extra">04</p>
    </div>

    <div class="steps__icons scroll__child">
      <img class="tut__icon tut__between" width="100" height="100" src="./assets/svg/wiel.png" alt="icon-wiel">
      <img class="tut__icon tut__between" width="100" height="54" src="./assets/svg/plank.png" alt="icon-plank">
      <img class="tut__icon tut__between" width="100" height="82" src="./assets/svg/boor.png" alt="icon-boor">
      <img class="tut__icon tut__between" width="100" height="82" src="./assets/svg/dopmoer.png" alt="icon-dopmoer">
    </div>

    <div class="steps__img img__fase-a scroll__child">
      <img class="img__between img__zoom" width="699" height="334" alt="tutorial-step-one" src="./assets/tutorial/fase-a.png">
    </div>

      <div class="steps__instructions content__item instructions-a scroll__child between__position">
        <p class="instruction purple">Neem de twee houten planken en boor een klein gaatje aan de rand van elke plank. Dit hebben we later nog nodig.</p>
      </div>

      <div class="steps__img img__fase-b scroll__child between__position">
        <picture class="picture__fase-b">
          <source sizes="(max-width: 450px) 45vw,
          (max-width: 600px) 60vw"
          srcset="./assets/tutorial/fase-b_155.webp 155w,
          ./assets/tutorial/fase-b_311.webp 311w"
          type="image/webp"/>

          <source sizes="(max-width: 450px) 45vw,
          (max-width: 600px) 60vw"
          srcset="./assets/tutorial/fase-b_155.png 155w,
          ./assets/tutorial/fase-b_311.png 311w,"
          type="image/png"/>

          <img class="img__fase img__width img__zoom img" width="621" height="745" alt="tutorial-step-four" src="./assets/tutorial/fase-b.png">
        </picture>

      </div>

      <div class="steps__instructions content__item instructions-b scroll__child between__position">
        <p class="instruction yellow">Aan het uiteinde van het kader plaats je een houten plank met het gaatje aan de achterkant. Elke plank zet je aan een zijde van het kader.</p>
        <p class="instruction yellow">Hang beide planken vast met ducktape. Leg de ducktape in een kruis voor extra stevigheid.</p>
      </div>

      <div class="steps__img img__fase-c scroll__child between__position">
        <picture class="picture__fase-c">
          <source sizes="(max-width: 450px) 45vw,
          (max-width: 600px) 60vw"
          srcset="./assets/tutorial/fase-c_196.webp 196w,
          ./assets/tutorial/fase-c_392.webp 392w"
          type="image/webp"/>

          <source sizes="(max-width: 450px) 45vw,
          (max-width: 600px) 60vw"
          srcset="./assets/tutorial/stap-c_196.png 196w,
          ./assets/tutorial/fase-c_392.png 392w,"
          type="image/png"/>

          <img class="img__fase img__width img__zoom" width="784" height="769" alt="tutorial-step-four" src="./assets/tutorial/fase-c.png">
        </picture>

      </div>

      <div class="steps__instructions content__item instructions-c scroll__child between__position">
        <p class="instruction purple">Plaats het kleine wiel tussen de twee planken.</p>
        <p class="instruction purple">Je kan het wiel vastmaken met twee dopmoeren door deze op het middenstuk van het wiel te draaien.</p>
      </div>

    <div class="steps__question questions__step scroll__child between__position">
      <p class="question">Kan je de High Wheel verzetten, zonder problemen?</p>
      <div class="question__answers">
        <input id="prev" type="button" class="answer button btn__prev" value="Neen">
        <input id="next" type="button" class="answer button btn__next" value="Ja">
      </div>
    </div>
    </article>

  </div>


<div id="step05" class="scroll__container invisible">
  <article class="steps content__item scroll__wrapper">

  <div class="steps__name scroll__child">
    <h3 class="steps__title title caps">Het zadel</h3>
    <p class="number title--extra">05</p>
  </div>

  <div class="steps__icons scroll__child">
    <img class="tut__icon" width="100" height="116" src="./assets/svg/ducktape.png" alt="icon-ducktape">
    <img class="tut__icon" width="100" height="68" src="./assets/svg/zadel.png" alt="icon-zadel">
  </div>

  <div class="steps__img scroll__child">
    <picture class="step__img picture__step-five">
      <source sizes="(max-width: 450px) 45vw,
      (max-width: 600px) 60vw"
      srcset="./assets/tutorial/stap-5_153.webp 153w,
      ./assets/tutorial/stap-5_317.webp 317w"
      type="image/webp"/>

      <source sizes="(max-width: 450px) 45vw,
      (max-width: 600px) 60vw"
      srcset="./assets/tutorial/stap-5_153.png 153w,
      ./assets/tutorial/stap-5_317.png 317w,"
      type="image/png"/>

      <img class="img__step-five img__width img__zoom img__zoom-top" width="633" height="752" alt="tutorial-step-five" src="./assets/tutorial/stap-5.png">
    </picture>
  </div>

  <div class="steps__instructions content__item scroll__child">
    <p class="instruction yellow">Plaats het zadel op het kader op de geschikte hoogt, dit hangt af van persoon tot persoon.</p>
    <p class="instruction yellow">Hang het zadel vast aan het kader door verschillende lagen ducktape te gebruiken.</p>
    <p class="instruction yellow caps">En je bent klaar!</p>
  </div>
  </article>


<article id="final" class="tut__final invisible content__item">
    <div class="info__build">
      <h2 class="final__title">Proficiat!</h2>
      <p class="content__alinea final__text">Je heb je ontpopt tot een echte maker!</p>
      <p class="content__alinea final__text">De High Wheel heb je al in elkaar kunnen steken, nu er nog op leren rijden...</p>

      <div class="what__picture">
        <picture class="picture-what">
          <source sizes="(max-width: 450px) 15vw,
          (max-width: 600px) 40vw"
          srcset="./assets/tutoria/wheel-falling_255.webp 255w,
          ./assets/tutorial/wheel-falling.webp 509w"
          type="image/webp"/>

          <source sizes="(max-width: 450px) 15vw,
          (max-width: 600px) 45w"
          srcset="./assets/tutorial/wheel-falling_255.png 255w,
          ./assets/tutorial/wheel-falling.png 509w"
          type="image/png"/>

          <img class="what__img" width="509" height="470" alt="collage-what" src="./assets/tutorial/wheel-falling.png">
        </picture>
      </div>

  <article class="promo--circ">
      <div class="promo__wrapper">
      <p class="promo__content content--circ background__img">ntdek tal van andere creatieve projecten op de Maker Faire in de <span>Chinastraat</span> in <span>Gent</span> op <span>30 april, 1 mei en 2 mei!</span></p>
      </div>
  </article>

  <article class="promo--rect promo--first background__img">
    <h4 class="hidden">Promo Maker Faire</h4>
    <div class="promo__wrapper">
      <p class="promo__content content--rect">Ontdek tal van andere creatieve projecten op de Maker Faire in de <span>Chinastraat</span> in <span>Gent</span> op <span>30 april, 1 mei en 2 mei!</p>
    </div>
  </article>
</article>

</section>
