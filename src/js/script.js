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
  } else {
    showOrder(returned);
  }
};

const formdataToJson = $from => {
  const data = new FormData($from);
  const obj = {};
  data.forEach((value, key) => {
    // console.log(`${key} : ${value}`);
    obj[key] = value;
  });
  return obj;
};

const showOrder = order => {
  const $form = document.querySelector(`.form`);
  $form.classList.add(`hidden`);
  const $shop = document.querySelector(`.shop__info`);
  $shop.classList.add(`hidden`);
  const $final = document.querySelector(`.final`);
  $final.classList.remove(`hidden`);
  const $parent = document.querySelector(`.bevestiging`);
  $parent.innerHTML = ``;
  const $div = document.createElement('div');
  $div.innerHTML = `<p class="content__alinea">Je bestelling is correct geplaatst en wordt momenteel verwerkt. Je krijgt binnenkort een bevestigingsmail op: ${order.email} </p>
  <p>Jouw persoonlijke Building Box zal binnen twee dagen toekomen onder volgende gegevens:</p>
  <ul class="order__list">
    <li>${order.name} ${order.first_name}</li>
    <li>${order.street} ${order.number}</li>
    <li>${order.zip} ${order.city}</li>
  </ul>`;
  $parent.appendChild($div);
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
    console.log(`event active`);
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
