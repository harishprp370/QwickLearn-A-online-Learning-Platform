/*Header script*/
document.addEventListener('DOMContentLoaded', () => {
  const textElement = document.querySelector('.heading');
  const text = textElement.innerHTML;
  textElement.innerHTML = '';
  let i = 0;

  function type() {
      if (i < text.length) {
          textElement.innerHTML += text.charAt(i);
          i++;
          setTimeout(type, 100);
      }
  }

  type();
});
function redirectToSignIn() {
  window.location.href = 'signin.html';
}
/*Contact Page*/
