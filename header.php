<header>
  <nav>
    <div class="logo">
      <img src="../res/img/logo.png" alt="Logo">
    </div> 
    <div class="search-bar">
      <input type="text" placeholder="Want to learn?">
      <button class="explore-btn">Explore &#9662;</button>
    </div>
    <ul class="nav-menu">
      <li><a href="home.php">Home</a></li>
      <li><a href="aboutus.php">About us</a></li>
      <li><a href="contact.php">Contact us</a></li>
      <li><a href="faq.php">FAQ's</a></li>
      <li><a href="courses.php">Courses</a></li>
    </ul>
    <div class="auth-button">
      <button onclick="redirectToSignIn()">Sign up or Sign in</button>
    </div>
  </nav>
</header>
<style>
/* Reset default styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

header {
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1200px;
  margin: 0 auto;
  padding: 10px 20px;
}

.logo img {
  height: 40px;
}

.search-bar {
  display: flex;
  align-items: center;
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 4px;
}

.search-bar input {
  padding: 8px;
  border: none;
  font-size: 14px;
  flex-grow: 1;
}

.explore-btn {
  background-color: #4caf50;
  color: white;
  padding: 8px 12px;
  font-size: 14px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left: 8px;
  position: relative;
}

.explore-btn.selected {
  background-color: #1A906B;
}

.nav-menu {
  display: flex;
  list-style: none;
}

.nav-menu li {
  margin-left: 20px;
}

.nav-menu li a {
  text-decoration: none;
  color: #333;
  font-weight: 500;
}

.auth-button button {
  background-color: #4caf50;
  color: #fff;
  border: none;
  padding: 8px 16px;
  border-radius: 4px;
  font-size: 14px;
  cursor: pointer;
}
</style>
<script>
const exploreBtn = document.querySelector('.explore-btn');
const dropdownOptions = document.querySelectorAll('.dropdown-option');

dropdownOptions.forEach(option => {
  option.addEventListener('click', () => {
    exploreBtn.classList.add('selected');
    exploreBtn.textContent = option.textContent;
  });
});
function redirectToSignIn() {
  window.location.href = 'signin.php';
}
</script>