var trafficchart = document.getElementById("trafficflow");

// Biểu đồ tròn cho số lượng khách truy cập
var myPieChart1 = new Chart(trafficchart, {
    type: 'pie',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            data: ['1135', '1135', '1140', '1168', '1150', '1145', '1155', '1155', '1150', '1160', '1185', '1190'],
            backgroundColor: [
                "#FF6384", "#36A2EB", "#FFCE56", "#FF6347", "#8E44AD", "#1ABC9C", "#F39C12",
                "#C0392B", "#2980B9", "#27AE60", "#3498DB", "#95A5A6"
            ]
        }]
    },
    options: {
        plugins: {
            legend: {
                display: true,
                position: 'right',
            },
            title: {
                display: true,
                text: 'Number of Visitors per Month',
                position: 'top',
            },
        },
    }
});
