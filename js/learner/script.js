//Student Dashboard Data

document.addEventListener('DOMContentLoaded', function() {
    // Sample data for charts
    const hoursSpentCtx = document.getElementById('hoursSpentChart').getContext('2d');
    const performanceCtx = document.getElementById('performanceChart').getContext('2d');
  
    const hoursSpentChart = new Chart(hoursSpentCtx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            datasets: [{
                label: 'Study Hours',
                data: [40, 50, 60, 70, 80],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }, {
                label: 'Exam Hours',
                data: [20, 30, 40, 50, 60],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
  
    const performanceChart = new Chart(performanceCtx, {
        type: 'doughnut',
        data: {
            labels: ['Points'],
            datasets: [{
                data: [80, 20],
                backgroundColor: ['rgba(75, 192, 192, 1)', 'rgba(211, 211, 211, 1)'],
                borderWidth: 1
            }]
        },
        options: {
            cutoutPercentage: 80
        }
    });
  });
  
  

let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");

closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
  menuBtnChange();//calling the function(optional)
});

searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
  sidebar.classList.toggle("open");
  menuBtnChange(); //calling the function(optional)
});

// following are the code to change sidebar button(optional)
function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
 }else {
   closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
 }
}

/*My Learning Buttons*/
function goToCourse(courseId) {
    window.location.href = `lessons.html?course=${courseId}`;
}