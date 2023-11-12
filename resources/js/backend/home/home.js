console.log("use home.js");

  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['User', 'Course', 'Training', 'News'],
        datasets: [{
            data: [data.user, data.course, data.training, data.news],
            backgroundColor: ["#fca5a5", "#86efac", "#93c5fd","#fde047"],
            borderWidth: 1
        }],
        labels: ['User', 'Course', 'Training', 'News'],
    },
    options: {
        plugins: {
            legend: {
              display: false
            }
          },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
  });