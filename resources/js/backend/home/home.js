console.log("use home.js");

  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['User', 'Course', 'Training', 'News'],
        datasets: [{
            label: '# All Data',
            data: [data.user, data.course, data.training, data.news],
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