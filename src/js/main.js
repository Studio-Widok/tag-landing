import 'lazysizes';

import 'widok';

document.addEventListener('click', event => {
  const content = event.target.closest('#dineout-content');
  const widget = event.target.closest('#dineout-content .dineout-widget');
  if (content === null || widget !== null) return;
  document.querySelector('#dineout-wrapper').classList.remove('active');
});

document.querySelector('#dineout-button').addEventListener('click', () => {
  document.querySelector('#dineout-wrapper').classList.add('active');
});
