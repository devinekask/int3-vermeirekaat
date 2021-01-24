const checkAction = e => {
  console.log(e.target.id);
  const buttonActive = e.target;

  if (buttonActive.id === 'next') {
    showNext(buttonActive);
  }
};

let count = - 1;

const showNext = buttonActive => {

  const currentId = checkCurrentId(buttonActive);

  const steps = ['step01', 'step02', 'step03', 'step04', 'step05'];
  count += 1;

  console.log(steps[count]);

  const nextStep = document.getElementById(`${steps[count]}`);
  nextStep.classList.remove(`invisible`);
  const currentStep = document.getElementById(`${currentId}`);
  currentStep.classList.add(`invisible`);

  window.scrollTo({top: 0, behavior: 'smooth'});
};

const checkCurrentId = buttonActive => {

  if (count === - 1) {
    const currentId = buttonActive.parentNode.parentNode.parentNode.parentNode.parentNode.id;
    console.log(currentId);
    return currentId;
  } else {
    const currentId = buttonActive.parentNode.parentNode.parentNode.parentNode.id;
    console.log(currentId);
    return currentId;
  }
};

const init = () => {

  const tutorial = document.querySelector(`.tutorial`);
  const buttons = document.querySelectorAll(`.button`);

  if (tutorial) {
    buttons.forEach(button => {
      button.addEventListener('click', checkAction);
    });
  }

};

init();
