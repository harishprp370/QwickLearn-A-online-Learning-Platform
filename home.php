
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qwick Learn - A online Learning Platform</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
    
</head>
<body>
    <!-- Header -->
    <?php require 'header.php'?>

    <!-- Hero Section -->
    <section class="hero text-center">
    <div class="hero">
        <img src="assets/img/Herobg.png" alt="herobg">
        <div class="container hero-content">
            <div class="row">
                <div class="col-md-12">
                  <h1>Up Your <span>Skills</span> <br>to <span class="highlight">Advance</span> Your <br><span class="highlight">Career</span> Path
                        </h1>
                    <p>Join the world’s largest community of learners and educators.</p>
                    <a href="signin.php" class="btn btn-primary btn-get-started">Get Started</a><br>
                    <div class="icon-row">
                        <div class="icon-container">
                              <i class="fas fa-microphone"></i>
                              <span style="color:#000000;">Public Speaking</span>
                        </div>
                        <div class="icon-container">
                              <i class="fas fa-briefcase"></i>
                              <span style="color:#000000;">Career-Oriented</span>
                        </div>
                        <div class="icon-container">
                              <i class="fas fa-lightbulb"></i>
                              <span style="color:#000000;">Creative Thinking</span>
                        </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    </section>


    <!--About Us-->
  <section class="about-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="about-content">
            <h2>About Us</h2>
            <h3>QwickLearn Providing The Best Opportunities To The Students Around The Glob.</h3>
            <p>QuickLearn, is a UI/UX Design Academy in Delhi involved in User Experience and User Interface Training and Consulting. It was started in 2023 and passionate towards User Interface Design/ User Experience Design, Human Computer Interaction Design. Humanoid is gushing towards competence to acquire knowledge and have a wide understanding towards the sphere through the foremost courses in the area of UI/UX Design, by strengthening up your skills, for your golden future</p>
            <a href="about.php" class="btn btn-primary btn-learn-more">Learn More</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="about-image">
            <img src="assets/img/course2.png" alt="About Us" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>

  
<!--Course sections-->

<div class="course-cont">
<h2 class="text-start mb-4">Our Most Popular Classes</h2>
  <p class="text-start mb-5">Let's join our famous class, the knowledge provided will definitely be useful for you.</p>
    <button class="left" onclick="leftScroll()">
    <i class="fas fa-angle-double-left"></i>
    </button>
    <div class="scroll-images">
    <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="assets/img/course.png" class="card-img-top" alt="Figma UI UX Design">
              <div class="card-body">
                <h5 class="card-title">Figma UI UX Design..</h5>
                <p class="card-text">Use Figma to get a job in UI Design, User Interface, User Experience design.</p>
                <p class="mb-1">4.3 <span class="rating">&#9733;&#9733;&#9733;&#9733;&#9734;</span></p>
                <div class="d-flex align-items-center mb-2">
                  <img src="assets/img/harish.png" class="rounded-circle me-2" width="30" height="30" alt="Instructor Photo">
                  <span>Harish N</span>
                  <a href="courses.php">
                  <button class="btn-enroll ">Enroll Now</button></a>
                </div>
              </div>
            </div>          
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="assets/img/course1.png" class="card-img-top" alt="Figma UI UX Design">
              <div class="card-body">
                <h5 class="card-title">Figma UI UX Design..</h5>
                <p class="card-text">Use Figma to get a job in UI Design, User Interface, User Experience design.</p>
                <p class="mb-1">4.3 <span class="rating">&#9733;&#9733;&#9733;&#9733;&#9734;</span></p>
                <div class="d-flex align-items-center mb-2">
                  <img src="assets/img/harish.png" class="rounded-circle me-2" width="30" height="30" alt="Instructor Photo">
                  <span>Harish N</span>
                  <a href="courses.php">
                  <button class="btn-enroll ">Enroll Now</button></a>
                </div>
              </div>
            </div>          
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="assets/img/course2.png" class="card-img-top" alt="Figma UI UX Design">
              <div class="card-body">
                <h5 class="card-title">Figma UI UX Design..</h5>
                <p class="card-text">Use Figma to get a job in UI Design, User Interface, User Experience design.</p>
                <p class="mb-1">4.3 <span class="rating">&#9733;&#9733;&#9733;&#9733;&#9734;</span></p>
                <div class="d-flex align-items-center mb-2">
                  <img src="assets/img/harish.png" class="rounded-circle me-2" width="30" height="30" alt="Instructor Photo">
                  <span>Harish N</span>
                  <a href="courses.php">
                  <button class="btn-enroll ">Enroll Now</button></a>
                </div>
              </div>
            </div>          
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="assets/img/course1.png" class="card-img-top" alt="Figma UI UX Design">
              <div class="card-body">
                <h5 class="card-title">Figma UI UX Design..</h5>
                <p class="card-text">Use Figma to get a job in UI Design, User Interface, User Experience design.</p>
                <p class="mb-1">4.3 <span class="rating">&#9733;&#9733;&#9733;&#9733;&#9734;</span></p>
                <div class="d-flex align-items-center mb-2">
                  <img src="assets/img/harish.png" class="rounded-circle me-2" width="30" height="30" alt="Instructor Photo">
                  <span>Harish N</span>
                  <a href="courses.php">
                  <button class="btn-enroll ">Enroll Now</button></a>
                </div>
              </div>
            </div>          
          </div>
          <div class="col-md-4 mb-4 h-100">
            <div class="card h-100">
              <img src="assets/img/course2.png" class="card-img-top" alt="Figma UI UX Design">
              <div class="card-body">
                <h5 class="card-title">Figma UI UX Design..</h5>
                <p class="card-text">Use Figma to get a job in UI Design, User Interface, User Experience design.</p>
                <p class="mb-1">4.3 <span class="rating">&#9733;&#9733;&#9733;&#9733;&#9734;</span></p>
                <div class="d-flex align-items-center mb-2">
                  <img src="assets/img/harish.png" class="rounded-circle me-2" width="30" height="30" alt="Instructor Photo">
                  <span>Harish N</span>
                  <a href="courses.php">
                  <button class="btn-enroll ">Enroll Now</button></a>
                </div>
              </div>
            </div>          
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="assets/img/course.png" class="card-img-top" alt="Figma UI UX Design">
              <div class="card-body">
                <h5 class="card-title">Figma UI UX Design..</h5>
                <p class="card-text">Use Figma to get a job in UI Design, User Interface, User Experience design.</p>
                <p class="mb-1">4.3 <span class="rating">&#9733;&#9733;&#9733;&#9733;&#9734;</span></p>
                <div class="d-flex align-items-center mb-2">
                  <img src="assets/img/harish.png" class="rounded-circle me-2" width="30" height="30" alt="Instructor Photo">
                  <span>Harish N</span>
                  <a href="courses.php">
                  <button class="btn-enroll ">Enroll Now</button></a>
                </div>
              </div>
            </div>          
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="assets/img/course1.png" class="card-img-top" alt="Figma UI UX Design">
              <div class="card-body">
                <h5 class="card-title">Figma UI UX Design..</h5>
                <p class="card-text">Use Figma to get a job in UI Design, User Interface, User Experience design.</p>
                <p class="mb-1">4.3 <span class="rating">&#9733;&#9733;&#9733;&#9733;&#9734;</span></p>
                <div class="d-flex align-items-center mb-2">
                  <img src="assets/img/harish.png" class="rounded-circle me-2" width="30" height="30" alt="Instructor Photo">
                  <span>Harish N</span>
                  <a href="courses.php">
                  <button class="btn-enroll ">Enroll Now</button></a>
                </div>
              </div>
            </div>          
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="assets/img/course.png" class="card-img-top" alt="Figma UI UX Design">
              <div class="card-body">
                <h5 class="card-title">Figma UI UX Design..</h5>
                <p class="card-text">Use Figma to get a job in UI Design, User Interface, User Experience design.</p>
                <p class="mb-1">4.3 <span class="rating">&#9733;&#9733;&#9733;&#9733;&#9734;</span></p>
                <div class="d-flex align-items-center mb-2">
                  <img src="assets/img/harish.png" class="rounded-circle me-2" width="30" height="30" alt="Instructor Photo">
                  <span>Harish N</span>
                  <a href="courses.php">
                  <button class="btn-enroll ">Enroll Now</button></a>
                </div>
              </div>
            </div>          
          </div>
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="assets/img/course.png" class="card-img-top" alt="Figma UI UX Design">
              <div class="card-body">
                <h5 class="card-title">Figma UI UX Design..</h5>
                <p class="card-text">Use Figma to get a job in UI Design, User Interface, User Experience design.</p>
                <p class="mb-1">4.3 <span class="rating">&#9733;&#9733;&#9733;&#9733;&#9734;</span></p>
                <div class="d-flex align-items-center mb-2">
                  <img src="assets/img/harish.png" class="rounded-circle me-2" width="30" height="30" alt="Instructor Photo">
                  <span>Harish N</span>
                  <a href="courses.php">
                  <button class="btn-enroll ">Enroll Now</button></a>
                </div>
              </div>
            </div>          
          </div>
    </div>
    <button class="right" onclick="rightScroll()">
      <i class="fas fa-angle-double-right"></i>
    </button>
  </div>

<div class="ourteam">
  <h2>Meet Our Team</h2>
  <p>On QwickLearn, instructors from all over the world instruct millions of students. We offer the knowledge and abilities.</p>
<div class="main">
        <div class="profile-card">
            <div class="img">
                <img src="assets/img//harish.png" alt="HarishN">
            </div>
            <div class="caption">
                <h3>HARISH N</h3>
                <p>Senior App Developer</p>
                <div class="social-links">
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
                <img src="assets/img/DeepikaBaiN.png">
            </div>
            <div class="caption">
                <h3>Deepika Bai N</h3>
                <p>Front End Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
                <img src="assets/img/akhileshk.jpg" alt="AkhileshK">
            </div>
            <div class="caption">
                <h3>Akhilesh K</h3>
                <p>Full Stact Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            
        </div>
        <div class="profile-card">
            <div class="img">
                <img src="assets/img/YogeshT.png">
            </div>
            <div class="caption">
                <h3>Yogesh T</h3>
                <p>Full Stact Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            
        </div>
        <div class="profile-card">
            <div class="img">
                <img src="assets/img/ChandanBR.jpg" alt="ChandanBR">
            </div>
            <div class="caption">
                <h3>Chandan B R</h3>
                <p>Full Stact Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="getintouch">
<div class="col-md-12">
        <h2 class="text-center">Get In Touch</h2>
</div>
<div class="container-contact">
<h2>Get In Touch</h2>
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>

          <div class="info">
          <div class="information">
              <i class="fas fa-phone"></i>&nbsp&nbsp
              <p>080-123456789</p>
            </div>
            
            <div class="information">
              <i class="fas fa-envelope"></i> &nbsp &nbsp
              <p>supoort.qwicklearn.com</p>
            </div>
            <div class="information">
              <i class="fas fa-map-marker-alt"></i> &nbsp &nbsp

              <p>BITS HI TECH College.Chitradurga</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="index.html" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Full Name</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="gmail" name="Gmail" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="radio-btn">
                <input type="radio" name="query1" value="General">
                <label for="query1">General</label>
                
                <input type="radio" name="query2" value="Course">
                <label for="query2">Course</label>
                
                <input type="radio" name="query3" value="Payments">
                <label for="query3">Payments</label>
                
                <input type="radio" name="query4" value="Certificate">
                <label for="query4">Certificate</label>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="cbtn" />
          </form>
        </div>
      </div>
    </div>
</div>



<script>
  document.addEventListener("DOMContentLoaded", function () {
  const scrollImages = document.querySelector(".scroll-images");
  const scrollLength = scrollImages.scrollWidth - scrollImages.clientWidth;
  const leftButton = document.querySelector(".left");
  const rightButton = document.querySelector(".right");

  function checkScroll() {
    const currentScroll = scrollImages.scrollLeft;
    if (currentScroll === 0) {
      leftButton.setAttribute("disabled", "true");
      rightButton.removeAttribute("disabled");
    } else if (currentScroll === scrollLength) {
      rightButton.setAttribute("disabled", "true");
      leftButton.removeAttribute("disabled");
    } else {
      leftButton.removeAttribute("disabled");
      rightButton.removeAttribute("disabled");
    }
  }

  scrollImages.addEventListener("scroll", checkScroll);
  window.addEventListener("resize", checkScroll);
  checkScroll();

  function leftScroll() {
    scrollImages.scrollBy({
      left: -500,
      behavior: "smooth"
    });
  }

  function rightScroll() {
    scrollImages.scrollBy({
      left: 500,
      behavior: "smooth"
    });
  }

  leftButton.addEventListener("click", leftScroll);
  rightButton.addEventListener("click", rightScroll);
});
/*contact us*/
const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});


</script>

























<!-- Footer -->
    <?php require 'footer.php'?>

    <!-- Bootstrap JS -->
 
</html>