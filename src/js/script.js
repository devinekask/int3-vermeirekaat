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

function dragMoveListener (event) {
  const target = event.target;
  // keep the dragged position in the data-x/data-y attributes
  const x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx;
  const y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

  // translate the element
  target.style.webkitTransform =
    target.style.transform =
      `translate(${x}px, ${y}px)`;

  // update the posiion attributes
  target.setAttribute('data-x', x);
  target.setAttribute('data-y', y);
}

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

  window.dragMoveListener = dragMoveListener;
  // eslint-disable-next-line no-undef
  interact(`.dropzone`).dropzone({
    accept: '.drag-drop',
    overlap: .75,
    ondropactivate: function (event) {
      event.target.classList.add('drop-active');
    },
    ondrop: function (event) {
      // event.relatedTarget.textContent = 'Dropped';
      const dragged = event.relatedTarget.id;
      console.log(dragged);
      const $checkboxes = document.querySelectorAll('.check');

      $checkboxes.forEach(checkbox => {
        if (checkbox.classList.contains(dragged)) {
          const $relatedCheckbox = document.querySelector(`.${dragged}`);
          $relatedCheckbox.checked = true;
        }
      });
    },
    ondragenter: function (event) {
      const draggableElement = event.relatedTarget;
      const dropzoneElement = event.target;

      // feedback the possibility of a drop
      dropzoneElement.classList.add('drop-target');
      draggableElement.classList.add('can-drop');
    },
    ondragleave: function (event) {
      // remove the drop feedback style
      event.target.classList.remove('drop-target');
      event.relatedTarget.classList.remove('can-drop');
    },
    ondropdeactivate: function (event) {
      event.target.classList.remove('drop-active');
      event.target.classList.remove('drop-target');
    }
  });

  // eslint-disable-next-line no-undef
  interact('.drag-drop')
    .draggable({
      inertia: true,
      modifiers: [
        // eslint-disable-next-line no-undef
        interact.modifiers.restrictRect({
          restriction: 'parent',
          endOnly: true
        })
      ],
      autoScroll: true,
      // dragMoveListener from the dragging demo above
      listeners: {move: dragMoveListener}
    });

};

init();
