const checkAction = e => {
  console.log(e.target.id);
  const buttonActive = e.target;

  if (buttonActive.id === 'next') {
    showNext(buttonActive);
  }
};

let count = - 1;

const showNext = buttonActive => {
  const steps = ['step01', 'step02', 'step03', 'step04', 'step05'];
  count += 1;

  console.log(steps[count]);

  const nextStep = document.getElementById(`${steps[count]}`);
  nextStep.classList.remove(`invisible`);
  const currentStep = buttonActive.parentNode.parentNode.parentNode.parentNode.id;
  console.log(currentStep);
  /* for (let i = 0;i < steps.length;i ++) {
    count += 1;
    const nextStep = document.getElementById(`${steps[i]}`);
    console.log(nextStep);
    console.log(count);
  } */
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
