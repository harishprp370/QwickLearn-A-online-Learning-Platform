/*Header script*/

const exploreBtn = document.querySelector('.explore-btn');
const dropdownMenu = document.querySelector('.dropdown-menu');
const dropdownOptions = document.querySelectorAll('.dropdown-option');

exploreBtn.addEventListener('click', () => {
  dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
});

dropdownOptions.forEach(option => {
  option.addEventListener('click', () => {
    const url = option.dataset.url;
    window.location.href = url;
  });
});
function redirectToSignIn() {
  window.location.href = 'signin.html';
}
/*Contact Page*/
