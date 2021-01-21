let amount = 1;
const partOne = document.querySelector(`.part-one`);
const partTwo = document.querySelector(`.part-two`);
const partThree = document.querySelector(`.part-three`);

const pressingKey = e => {

  if (partOne && partTwo && partThree) {
    // console.log(e.keyCode);

    if (e.keyCode === 39) {
      // console.log(`Next`);
      amount += 1;
      if (amount >= 4) {
        amount = 1;
      }
    }
    if (e.keyCode === 37) {
      // console.log(`Previous`);
      amount -= 1;
      if (amount <= 0) {
        amount = 3;
      }
    }
    checkAmount(amount);
  }
};

const checkAmount = amount => {
  // console.log(amount);

  const positions = getPosition();

  const bike = document.querySelector(`.route__img`);
  // console.log(positions);

  if (amount === 1) {
    partOne.classList.remove(`opacity`);
    partTwo.classList.add(`opacity`);
    partThree.classList.add(`opacity`);
    const posX = positions[0];
    console.log(posX);
    bike.style.left = posX;
  }
  if (amount === 2) {
    partOne.classList.add(`opacity`);
    partTwo.classList.remove(`opacity`);
    partThree.classList.add(`opacity`);
    const posX = positions[1];
    console.log(posX);
    bike.style.left = posX;
  }
  if (amount === 3) {
    partOne.classList.add(`opacity`);
    partTwo.classList.add(`opacity`);
    partThree.classList.remove(`opacity`);
    const posX = positions[2];
    console.log(posX);
    bike.style.left = posX;
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

  // console.log(elements);
  return elements;
};

const getPosition = () => {
  const positions = [];

  const elementsArray = getElements();

  elementsArray.forEach(element => {
    const pos = element.getBoundingClientRect();
    // console.log(pos);

    const posX = pos['x'];
    positions.push(posX);

    // console.log(positions);
  });
  return positions;
};

const init = () => {

  const horizontal = document.querySelector(`.horizontal__wrapper`);
  // horizontal.addEventListener(`keydown`, pressingKey);

  if (horizontal) {
    window.addEventListener(`keydown`, pressingKey);

    getPosition();
  }
};

init();
