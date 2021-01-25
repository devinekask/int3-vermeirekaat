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
    console.logg(returned.error);
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

const init = () => {

  const $ordersForm = document.querySelector(`.form`);
  if ($ordersForm) {
    $ordersForm.addEventListener(`submit`, handleOrderPlacement);
  }

};

init();
