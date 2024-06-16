// Fetch course data from JSON file
fetch('../jsonfles/coursedetails.json')
  .then(response => response.json())
  .then(data => {
    const courseId = sessionStorage.getItem('courseId');
    const courseData = data.find(course => course.id === parseInt(courseId));

    if (courseData) {
      // Populate course details
      const courseDetails = document.getElementById('courseDetails');
      courseDetails.innerHTML = `
        <h2>${courseData.title}</h2>
        <p>${courseData.description}</p>
        <p>Duration: ${courseData.duration}</p>
        <p>Level: ${courseData.level}</p>
      `;

      // Populate image
      const imageContainer = document.querySelector('.col-md-4');
      const img = document.createElement('img');
      img.src = courseData.imageUrl;
      img.alt = 'Course Image';
      img.classList.add('img-fluid');
      imageContainer.appendChild(img);




      // Populate tab content
      document.getElementById('overview').innerHTML = `<p>${courseData.overview}</p>`;
      document.getElementById('curriculum').innerHTML = `<ul>${courseData.curriculum.map(item => `<li>${item}</li>`).join('')}</ul>`;
      document.getElementById('instructor').innerHTML = `<p>${courseData.instructor}</p>`;
      document.getElementById('faqs').innerHTML = `<ul>${courseData.faqs.map(faq => `<li>${faq.question}<br>${faq.answer}</li>`).join('')}</ul>`;

      // Fetch reviews from dummyjson.com API
      fetch('https://dummyjson.com/comments')
        .then(response => response.json())
        .then(data => {
          const reviews = data.comments;
          const reviewsTab = document.getElementById('reviews');
          reviewsTab.innerHTML = `<ul>${reviews.map(review => `<li>${review.user.username}<br>${review.body}</li>`).join('')}</ul>`;
        })
        .catch(error => console.error(error));
    }
  })
  .catch(error => console.error(error));

// Event listener for tab clicks
const tabLinks = document.querySelectorAll('.nav-link');
tabLinks.forEach(link => {
  link.addEventListener('click', () => {
    const target = document.querySelector(link.getAttribute('href'));
    if (target.innerHTML === '') {
      target.innerHTML = '<div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div>';
    }
  });
});