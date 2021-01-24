let amount = 1;
const partOne = document.querySelector(`.part-one`);
const partTwo = document.querySelector(`.part-two`);
const partThree = document.querySelector(`.part-three`);

const pressingKey = e => {

  if (partOne && partTwo && partThree) {

    if (e.keyCode === 39) {
      amount += 1;
      if (amount >= 4) {
        amount = 1;
      }
    }
    if (e.keyCode === 37) {
      amount -= 1;
      if (amount <= 0) {
        amount = 3;
      }
    }
    checkAmount(amount);
  }
};

const checkAmount = amount => {

  const positions = getPosition();

  if (amount === 1) {
    partOne.classList.remove(`opacity`);
    partTwo.classList.add(`opacity`);
    partThree.classList.add(`opacity`);
    const posX = positions[0];
    // eslint-disable-next-line no-undef
    anime ({
      targets: `.route__img`,
      translateX: posX,
      rotate: - 7,
      duration: 1000,
      easing: 'easeInOutExpo'
    });
  }
  if (amount === 2) {
    partOne.classList.add(`opacity`);
    partTwo.classList.remove(`opacity`);
    partThree.classList.add(`opacity`);
    const posX = positions[1];
    const posMin = posX - 200;
    // eslint-disable-next-line no-undef
    anime ({
      targets: `.route__img`,
      translateX: posMin,
      rotate: - 7,
      duration: 1000,
      easing: 'easeInOutExpo'
    });
  }
  if (amount === 3) {
    partOne.classList.add(`opacity`);
    partTwo.classList.add(`opacity`);
    partThree.classList.remove(`opacity`);
    const posX = positions[2];
    const posMin = posX - 200;
    // eslint-disable-next-line no-undef
    anime ({
      targets: `.route__img`,
      translateX: posMin,
      rotate: - 7,
      duration: 1000,
      easing: 'easeInOutExpo'
    });
  }
};

const getElements = () => {
  const elements = [];
  const ellipseStart = document.querySelector(`.ellipse-one`);
  elements.push(ellipseStart);
  const ellipseMiddle = document.querySelector(`.ellipse-two`);
  elements.push(ellipseMiddle);
  const ellipseEnd = document.querySelector(`.ellipse-three`);
  elements.push(ellipseEnd);

  return elements;
};

const getPosition = () => {
  const positions = [];

  const elementsArray = getElements();

  elementsArray.forEach(element => {
    const pos = element.getBoundingClientRect();

    const posX = pos['x'];
    positions.push(posX);
  });
  return positions;
};

const randomFloating = () => {
  // eslint-disable-next-line no-undef
  anime({
    targets: '.promo--circ',
    translateX: function() {
      // eslint-disable-next-line no-undef
      return anime.random(- 5, 10);
    },
    translateY: function() {
      // eslint-disable-next-line no-undef
      return anime.random(- 10, 5);
    },
    easing: 'easeInOutQuad',
    duration: 1000,
    complete: randomFloating
  });
};

// SLIDER
const topImg = document.querySelectorAll(`.slider__img`)[1];

const resizeImg = e => {
  topImg.style.width = `${e.target.value}px`;
};

// ZOOM
/* const zoomOnHover = () => {
  const Drift = require('drift-zoom');
  /* const imgs = document.querySelectorAll(`.zoom__img`);
  imgs.map(img => {
    new Drift(img, {
      paneContainer: true,
      inlinePane: true
    });
  });
  new Drift(document.querySelector(`.img__zoom`));
};*/

const init = () => {

  // HORIZONTAL
  const horizontal = document.querySelector(`.horizontal__wrapper`);

  if (horizontal) {
    window.addEventListener(`keydown`, pressingKey);

    getPosition();
  }

  const promo = document.querySelector(`.promo--circ`);
  if (promo) {
    randomFloating();
  }

  // SLIDER
  const sliderContainer = document.querySelector(`.slider__container`);
  if (sliderContainer) {
    sliderContainer.addEventListener('mousemove', resizeImg);
    // sliderContainer.addEventListener('touchmove', resizeImg);
  }

  /* const images = document.querySelectorAll(`.image__zoom`);
  if (images) {
    zoomOnHover();
  } */

};

init();
