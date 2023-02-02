
AOS.init();
let  numberPercent = document.querySelectorAll('.countbar')
let getPercent = Array.from(numberPercent)
    getPercent.map((items) => {
        let startCount = 0
        let progressBar = () => {
            startCount ++
            items.style.width = `${startCount}%`
            if(startCount == items.dataset.percentnumber) {
                clearInterval(stop)
            }
        }
        let stop = setInterval(() => {
            progressBar()
        },25)
    })
    
  const data1 = {
    labels: [
        'Marketing',
        'Bussiness Development',
        'Product Development',
        'Reserve',
        'Reserve',
        'Token Sale'
    ],
    datasets: [{
        label: 'My First Dataset',
        data: [25, 25, 10 , 10 , 10 , 20],
        backgroundColor: [
        '#3D88FB',
        '#5637C8',
        '#00D199',
        '#C87B07',
        '#A92535',
        '#9116CD'
        ], 
    }]
};

const config1 = {
    type: 'doughnut',
    data: data1,
    width:240,
    options: {
        maintainAspectRatio: false,
        plugins: {
            legend: false // Hide legend
        },
        scales: {
            y: {
                display: false // Hide Y axis labels
            },
            x: {
                display: false // Hide X axis labels
            }
        }   
    }
};

    const myChart1 = new Chart(
    document.getElementById('myChart1'),
    config1
    );
    const myChart2 = new Chart(
    document.getElementById('myChart2'),
    config1
);