
// Function to get the topic from the URL
function getTopicFromURL() {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get('topic');
  }
  
  // Fetch data from the JSON file
  fetch('../../jsonfles/discussion.json')
    .then(response => response.json())
    .then(data => {
      // Render questions and comments
      const forumContainer = document.getElementById('forum-container');
      data.forEach(question => {
        const questionElement = createQuestionElement(question, data);
        forumContainer.appendChild(questionElement);
      });
    })
    .catch(error => console.error('Error fetching data:', error));
  
  // Function to create an HTML element for a question
  function createQuestionElement(question, data) {
    const questionElement = document.createElement('div');
    questionElement.classList.add('card', 'mb-3');
  
    const cardBody = document.createElement('div');
    cardBody.classList.add('card-body');
  
    const title = document.createElement('h5');
    title.classList.add('card-title');
    title.textContent = question.title;
  
    const body = document.createElement('p');
    body.classList.add('card-text');
    body.textContent = question.body;
  
    const author = document.createElement('p');
    author.classList.add('card-text');
    author.textContent = `Asked by: ${question.author}`;
  
    const likesDislikesContainer = document.createElement('div');
    likesDislikesContainer.classList.add('like-dislike');
  
    const likeButton = document.createElement('button');
    likeButton.classList.add('btn', 'btn-primary');
    likeButton.textContent = `Likes: ${question.likes}`;
  
    const dislikeButton = document.createElement('button');
    dislikeButton.classList.add('btn', 'btn-danger');
    dislikeButton.textContent = `Dislikes: ${question.dislikes}`;
  
    likesDislikesContainer.appendChild(likeButton);
    likesDislikesContainer.appendChild(dislikeButton);
  
    const commentsContainer = document.createElement('div');
  
    question.comments.forEach(comment => {
      const commentElement = createCommentElement(comment);
      commentsContainer.appendChild(commentElement);
    });
  
    const newCommentForm = document.createElement('div');
    newCommentForm.classList.add('mt-3');
  
    const commentLabel = document.createElement('h6');
    commentLabel.textContent = 'Add a Comment:';
  
    const commentInput = document.createElement('textarea');
    commentInput.classList.add('form-control', 'mb-2');
    commentInput.rows = 2;
  
    const submitCommentButton = document.createElement('button');
    submitCommentButton.classList.add('btn', 'btn-primary');
    submitCommentButton.textContent = 'Submit Comment';
  
    submitCommentButton.addEventListener('click', () => {
      const newComment = {
        id: Date.now(), // Use the current timestamp as a unique ID
        body: commentInput.value,
        author: 'You', // Replace with the actual user's name or username
        likes: 0,
        dislikes: 0
      };
  
      question.comments.push(newComment);
      const commentElement = createCommentElement(newComment);
      commentsContainer.appendChild(commentElement);
      commentInput.value = '';
    });
  
    newCommentForm.appendChild(commentLabel);
    newCommentForm.appendChild(commentInput);
    newCommentForm.appendChild(submitCommentButton);
  
    cardBody.appendChild(title);
    cardBody.appendChild(body);
    cardBody.appendChild(author);
    cardBody.appendChild(likesDislikesContainer);
    cardBody.appendChild(commentsContainer);
    cardBody.appendChild(newCommentForm);
  
    questionElement.appendChild(cardBody);
  
    return questionElement;
  }
  
  // Function to create an HTML element for a comment
  function createCommentElement(comment) {
    const commentElement = document.createElement('div');
    commentElement.classList.add('comment');
  
    const body = document.createElement('p');
    body.textContent = comment.body;
  
    const author = document.createElement('p');
    author.classList.add('text-muted');
    author.textContent = `Commented by: ${comment.author}`;
  
    const likesDislikesContainer = document.createElement('div');
    likesDislikesContainer.classList.add('like-dislike');
  
    const likeButton = document.createElement('button');
    likeButton.classList.add('btn', 'btn-primary');
    likeButton.textContent = `Likes: ${comment.likes}`;
  
    const dislikeButton = document.createElement('button');
    dislikeButton.classList.add('btn', 'btn-danger');
    dislikeButton.textContent = `Dislikes: ${comment.dislikes}`;
  
    likesDislikesContainer.appendChild(likeButton);
    likesDislikesContainer.appendChild(dislikeButton);
  
    commentElement.appendChild(body);
    commentElement.appendChild(author);
    commentElement.appendChild(likesDislikesContainer);
  
    return commentElement;
  }
  
  // Add event listener for the "Ask Question" button
  const askQuestionBtn = document.getElementById('ask-question-btn');
  const askQuestionForm = document.getElementById('ask-question-form');
  
  askQuestionBtn.addEventListener('click', () => {
    askQuestionForm.style.display = askQuestionForm.style.display === 'none' ? 'block' : 'none';
  });
  
  // Add event listener for the new question form
  const newQuestionForm = document.getElementById('new-question-form');
  
  newQuestionForm.addEventListener('submit', (event) => {
    event.preventDefault();
  
    const questionTitle = document.getElementById('question-title').value;
    const questionBody = document.getElementById('question-body').value;
  
    // Create a new question object
    const newQuestion = {
      id: Date.now(), // Use the current timestamp as a unique ID
      title: questionTitle,
      body: questionBody,
      author: 'You', // Replace with the actual user's name or username
      likes: 0,
      dislikes: 0,
      comments: []
    };
  
    // Append the new question to the data array
    data.push(newQuestion);
  
    // Clear the form inputs
    document.getElementById('question-title').value = '';
    document.getElementById('question-body').value = '';
  
    // Render the new question
    const forumContainer = document.getElementById('forum-container');
    const questionElement = createQuestionElement(newQuestion, data);
    forumContainer.appendChild(questionElement);
  
    // Hide the "Ask Question" form
    askQuestionForm.style.display = 'none';
  });