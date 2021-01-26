const handleOrderPlacement = e => {
  const $form = e.currentTarget;
  e.preventDefault();
  placeOrder($form.getAttribute('action'), formdataToJson($form));
};

const placeOrder = async (url, data) => {
  const response = await fetch(url, {
    method: 'POST',
    headers: new Headers({
      'Content-Type': 'application/json'
    }),
    body: JSON.stringify(data)
  });
  const returned = await response.json();
  console.log(returned);
  if (returned.error) {
    console.log(returned.error);
  }
};

const formdataToJson = $from => {
  const data = new FormData($from);
  const obj = {};
  data.forEach((value, key) => {
    console.log(`${key} : ${value}`);
    obj[key] = value;
  });
  return obj;
};

/* let stepIndex = 1;

const plusStep = n => {
  showSteps(stepIndex += n);
};

const showSteps = i => {
  const steps = document.querySelectorAll('.form__step');
  if (i > steps.length) { stepIndex = 1; }
  if (i < 1) { stepIndex = steps.length; }
  let j;
  for (j = 0;j < steps.length;j ++) {
    steps[j].style.display = 'none';
  }
  steps[stepIndex - 1].style.display = 'block';
}; */


const init = () => {

  const $ordersForm = document.querySelector(`.form`);
  // const $prev = document.querySelector('.btn__prev');
  // const $next = document.querySelector('.btn__next');
  if ($ordersForm) {
    $ordersForm.addEventListener(`submit`, handleOrderPlacement);
    /* if ($prev) {
      $prev.addEventListener('click', () => { plusStep(- 1); });
    }
    if ($next) {
      $next.addEventListener('click', () => { plusStep(1); });
    }
    if ($next && $prev) {
      showSteps(1);
    }*/
  }

};

init();
