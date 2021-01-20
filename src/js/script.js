let amount = 1;
const partOne = document.querySelector(`.part-one`);
const partTwo = document.querySelector(`part-two`);
const partThree = document.querySelector(`.part-three`);

const pressingKey = e => {
  if (partOne && partTwo && partThree) {
    console.log(e.keyCode);

    if (e.keyCode === 39) {
      console.log(`Next`);
      amount += 1;
    }
    if (e.keyCode === 37) {
      console.log(`Previous`);
      amount -= 1;
    }
    if (amount >= 4) {
      amount = 1;
    }
    if (amount <= 0) {
      amount = 3;
    }
    checkAmount(amount);
  }
};

const checkAmount = amount => {
  if (amount === 1) {
    partOne.classList.remove(`opacity`);
    partTwo.classList.add(`opacity`);
    partThree.classList.add(`opacity`);
  }
  if (amount === 2) {
    partOne.classList.remove(`opacity`);
    partTwo.classList.add(`opacity`);
    partThree.classList.remove(`opacity`);
  }
  if (amount === 3) {
    partOne.classList.remove(`opacity`);
    partTwo.classList.remove(`opacity`);
    partThree.classList.add(`opacity`);
  }
};

const init = () => {

  const horizontal = document.querySelector(`.horizontal__grid`);
  horizontal.addEventListener(`keydown`, pressingKey);

  console.log(`javascript check`);
};

init();
