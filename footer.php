<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<footer style="background-color: #023748; padding: 20px; ">
    <div class="container">
        <div class="logoname">
            <img src="assets/img/logo.png" alt="logo">
            <h2 style="color: white;">Qwicklearn</h2>
        </div>
        <hr>   
        <div class="footer" style="color: white;">
            <div class="footer-section reach">
                <h1>Reach Us</h1>
                <p><i class="fas fa-phone"></i> +1012 3456 789</p>
                <p><i class="fas fa-envelope"></i> demo@gmail.com</p>
                <p><i class="fas fa-map-marker-alt"></i> Bits Hi Tech College, Chitradurga</p>
            </div>
            <div class="footer-section company">
                <h1>Company</h1>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section Legal">
                <h1>Legal</h1>
                <ul>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Refund Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-section Qlinks">
                <h1>Quick links</h1>
                <ul>
                    <li><a href="#">Techlabz Keybox</a></li>
                    <li><a href="#">Downloads</a></li>
                    <li><a href="#">Forum</a></li>
                </ul>
            </div>
            <div class="footer-section newsletter">
                <h1>Join Our Newsletter</h1>
                <div class="newsletter-form">
                    <input type="email" placeholder="Your email address">
                    <button>Subscribe</button>
                  </div>
                  <p class="newsletter-description">Will send you weekly updates for your better tool management.</p>
            </div>
        </div>
        <center><p style="color: white;">Copyright &copy; 2024 QwickLearn | All rights reserved.</p></center>
    </div>
</footer>
<style>

.container{
  font-family:Georgia, 'Times New Roman', Times, serif;
  padding-left: 50px;
  padding-right: 50px;
}
.logoname {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center; /* To center-align the text */
}

.logoname img {
    margin-right: 10px; /* Adjust as needed to add space between image and text */
}

.footer {
    display: flex;
    justify-content: space-between;
}

.footer-section {
    flex: 1;
    margin-right: 20px; /* Adjust as needed */
}

.footer-section:last-child {
    margin-right: 0;
}

.footer-section h1 {
    font-size: 18px;
    margin-bottom: 10px;
    padding-bottom: 15px;
}

.footer-section ul {
    list-style-type: none;
    padding: 0px;
    margin: 0;

}

.footer-section ul li {
    margin-bottom: 10px;
}

.footer-section ul li a {
    text-decoration: none;
    color: inherit;
}

.footer-section p {
    margin: 5px 0;
    margin-bottom: 15px;
}

/* Container for the email input field and button */
.newsletter-form {
    display: flex; /* Use flexbox */
    align-items: center; /* Align items vertically */
}

/* Style for the email input field */
input[type="email"] {
    background-color: #0E495C;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    width: 250px; /* Adjust width as needed */
    margin-right: 10px; /* Add some space between the input and button */
}

/* Style for the subscribe button */
button {
    background-color: #16656A;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease; /* Add a smooth transition effect */
}

/* Change button color on hover */
button:hover {
    background-color: #145055;
}

</style>