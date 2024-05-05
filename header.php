<link rel="website icon" href="assets/img/logo.png">
<header>
  <nav>
    <div class="logo">
      <img src="assets/img/logo.png" alt="Logo">
    </div> 
    <div class="search-bar">
      <input type="text" placeholder="Want to learn?">
      <div class="dropdown">
            <button class="dropbtn">Explore &#9662;</button>
            <div class="dropdown-content">
                <a href="cybersecurity.php">Cyber Security</a>
                <a href="#">Web Development</a>
                <a href="#">Data Science</a>
            </div>
       </div> 
    </div>
    <ul class="nav-menu">
      <li><a href="home.php">Home</a></li>
      <li><a href="about.php">About us</a></li>
      <li><a href="contactus.php">Contact us</a></li>
      <li><a href="faq.php">FAQ's</a></li>
      <li><a href="courses.php">Courses</a></li>
    </ul>
    <div class="auth-button">
      <button onclick="redirectToSignIn()">Sign up or Sign in</button>
    </div>
  </nav>
</header>

<style>

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

/*Search bar*/

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

/*Explore button*/

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  color: #008a60;
  cursor: pointer;
  background-color: #baffea;
  border: none;
  border-radius: 10px;
  padding: 10px 20px;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #fff;
  border: 3px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #baffae;
}

.dropdown:hover .dropdown-content {
  display: block;
}

/**Menu Items */

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

/**Signin button */

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
  window.location.href = 'signin.php';
}
</script>