const init = () => {
  const promo = document.querySelector(`.promo`);
  const contentPromo = document.querySelector(`.promo__content`);

  if (promo && contentPromo) {
    if (window.innerWidth >= 600) {
      promo.classList.remove(`background__img`);
      contentPromo.classList.add(`background__img`);
    }
    else {
      promo.classList.add(`background__img`);
      console.log(promo.classList);
      contentPromo.classList.remove(`background__img`);
    }
  }

};

init();
