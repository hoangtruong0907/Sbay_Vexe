var saleschart = document.getElementById("sales");
var trafficchart = document.getElementById("trafficflow");

// Biểu đồ tròn cho số lượng khách truy cập
var myPieChart1 = new Chart(trafficchart, {
    type: 'pie',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            data: ['1135', '1135', '1140', '1168', '1150', '1145', '1155', '1155', '1150', '1160', '1185', '1190'],
            backgroundColor: [
                "#87CEEB", "#00BFFF", "#1E90FF", "#4682B4", "#5F9EA0", "#6495ED",
                "#4169E1", "#4682B4", "#87CEFA", "#ADD8E6", "#B0C4DE", "#E0FFFF"
            ],
            borderColor: "#ffffff", // Viền trắng giữa các phần của biểu đồ
            borderWidth: 2,
        }]
    },
    options: {
        plugins: {
            legend: {
                display: true,
                position: 'right',
                labels: {
                    font: {
                        size: 14, // Tăng kích thước font
                        weight: 'bold' // Font chữ đậm
                    },
                    color: '#333' // Màu sắc chữ của nhãn
                }
            },
            title: {
                display: true,
                text: 'Number of Visitors per Month',
                position: 'top',
                font: {
                    size: 18, // Tăng kích thước font cho tiêu đề
                    weight: 'bold' // Font chữ đậm
                },
                color: '#4682B4' // Màu tiêu đề
            },
            tooltip: {
                callbacks: {
                    label: function(tooltipItem) {
                        return tooltipItem.label + ': ' + tooltipItem.raw + ' visitors';
                    }
                }
            }
        }
    }
});


// new
var myChart2 = new Chart(saleschart, {
type: 'bar',
data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    datasets: [{
            label: 'Income',
            data: ["280", "300", "400", "600", "450", "400", "500", "550", "450", "650", "950", "1000"],
            backgroundColor: "rgba(76, 175, 80, 0.5)",
            borderColor: "#6da252",
            borderWidth: 1,
    }]
},
options: {
    animation: {
        duration: 2000,
        easing: 'easeOutQuart',
    },
    plugins: {
        legend: {
            display: false,
            position: 'top',
        },
        title: {
            display: true,
            text: 'Number of Sales',
            position: 'left',
        },
    },
}
});
