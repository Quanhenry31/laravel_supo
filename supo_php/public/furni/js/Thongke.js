window.onload = function () {
    /// bieu do 1
    var dataPoints = JSON.parse(
        document
            .getElementById("chartContainer")
            .getAttribute("data-data-points")
    );

    var chart = new CanvasJS.Chart("chartContainer", {
        theme: "light2",
        exportEnabled: true,
        animationEnabled: true,
        title: {
            text: "Product Prices",
        },
        data: [
            {
                type: "column",
                dataPoints: dataPoints,
            },
        ],
    });

    /// bieu do 2
    var chart2 = new CanvasJS.Chart("chartContainer2", {
        animationEnabled: true,
        exportEnabled: true,
        theme: "light1", // "light1", "light2", "dark1", "dark2"
        title: {
            text: "Simple Column Chart with Index Labels",
        },
        axisY: {
            includeZero: true,
        },
        data: [
            {
                type: "column", //change type to bar, line, area, pie, etc
                //indexLabel: "{y}", //Shows y value on all Data Points
                indexLabelFontColor: "#5A5757",
                indexLabelFontSize: 16,
                indexLabelPlacement: "outside",
                dataPoints: [
                    { x: 10, y: 71 },
                    { x: 20, y: 55 },
                    { x: 30, y: 50 },
                    { x: 40, y: 65 },
                    { x: 50, y: 92, indexLabel: "\u2605 Highest" },
                    { x: 60, y: 68 },
                    { x: 70, y: 38 },
                    { x: 80, y: 71 },
                    { x: 90, y: 54 },
                    { x: 100, y: 60 },
                    { x: 110, y: 36 },
                    { x: 120, y: 49 },
                    { x: 130, y: 21, indexLabel: "\u2691 Lowest" },
                ],
            },
        ],
    });
    chart.render();
    chart2.render();
};
function explodePie(e) {
    if (
        typeof e.dataSeries.dataPoints[e.dataPointIndex].exploded ===
            "undefined" ||
        !e.dataSeries.dataPoints[e.dataPointIndex].exploded
    ) {
        e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
    } else {
        e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
    }
    e.chart.render();
    e.chart2.render();
}
