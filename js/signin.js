document.getElementById('signinForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();
  
    // Check if any field is empty
    if (email === '' || password === '') {
      alert('Please enter both email and password');
      return;
    }
  
    // Fetching user data from JSON
    fetch('../jsonfles/users.json')
      .then(response => response.json())
      .then(data => {
        const users = data.users;
        const foundUser = users.find(user => user.email === email && user.password === password);
        if (foundUser) {
          alert('Sign in successful!');
          window.location.href = 'learner/dashboard.html';
        } else {
          alert('Invalid email or Password');
        }
      })
      .catch(error => console.error('Error:', error));
  });
  