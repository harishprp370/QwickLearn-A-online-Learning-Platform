document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Get form values
    const fname = document.getElementById('fname').value.trim();
    const lname = document.getElementById('lname').value.trim();
    const mnum = document.getElementById('mnum').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();
    const cpassword = document.getElementById('cpassword').value.trim();
        // Validate password confirmation
        if (password !== cpassword) {
            alert('Passwords do not match');
            return;
          }
          if (fname === '' || lname === '' || mnum === '' || email === '' || password === '') {
            alert('Please enter all field');
            return;
          }
    
    // Create user object
    const users = {
      "fname": fname,
      "lname": lname,
      "mnum": mnum,
      "email": email,
      "password": password
    };
  
    // Fetch existing users data
    fetch('../jsonfles/users.json')
      .then(response => response.json())
      .then(data => {
        // Add new user to the existing users
        data.users.push(users);
  
        // Update the JSON file with the new data
        fetch('../jsonfles/users.json', {
          method: 'PUT',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(data),
        })
        .then(() => {
          alert('Sign up successful! Please sign in.');
          // Redirect to sign in page after successful sign up
          window.location.href = 'signin.html';
        })
        .catch(error => console.error('Error:', error));
      })
      .catch(error => console.error('Error:', error));
  });
  