
function getArray(number) {
    var array = new Array();

    for (var i =0; i <= number; i++) {
        array.push(i);
    }

    return array;
}

function fillLine(widthBody, name, data) {
    var width = widthBody,
        height = 200;
        
            
    // svg.append("line")
    //     .style("stroke", "gray")
    //     .style("stroke-width", "2")
    //     .attr("x1", 0)
    //     .attr("y1", 120)
    //     .attr("x2", 200)
    //     .attr("y2", 120);
    // var line = d3.svg.line()
    //     .x(function(d){return d.x;})
    //     .y(function(d){return d.y;});

    var svg = d3.select("section").append("svg");
    
    var line = d3.svg.line()
        .x(function(data){return data.x;})
        .y(function(data){return data.y;})
        .interpolate("basis");

    svg.attr("height", height)
        .attr("width", width); 
            
    // добавляем путь
    svg.append("path").attr("d", line(data));
}


    
$(document).ready(function() {
    var getData = [
        {x: 7, y: 4, e: 11}
    ];
    var lineBody = $('#linebody');
    var numberArr = getArray(20);

    var number1 = $('#number0');
    var number2 = $('#number1');

    number1.html(getData[0].x);
    number2.html(getData[0].y);
    
    var numberSection = $('.number-section');
    
    var drop = lineBody.width()/20;
    for (var i = 0; i <= getData.length; i++){
        var numHtml = $('#number'+i).html();
        drowSegments(i, drop, numHtml);
        var segHtml = $('#segment'+ i).width();
        console.log(segHtml)
        var data = [
            {x: 0, y: 200},
            {x: drop*parseInt(numHtml)/2, y: 200 - drop*parseInt(numHtml)/2},
            {x: drop*parseInt(numHtml), y: 200}
        ];
        fillLine(segHtml, 'segment'+i, data);
    }
    function drowSegments(number, drop, dataNumber) {
        var segmentBody = '<div class="segment" id="segment'+ number +'" style="width:'+parseInt(dataNumber)*drop+'px;"></div>';
        lineBody.append(segmentBody);
    }

    
    // var numberOne = '<div class="drop-style" style="margin-left:' + drop +'px;"> </div>';
    
    // for (var i = 0; i <= numberArr.length; i++)
    //     lineBody.append(numberOne);
    

    var data1 = [
        {x: 0, y: 200},
        {x: drop*7/2, y: 200 - drop*7/2},
        {x: drop*7, y: 200}
    ];

    var data2 = [
        {x: drop*7, y: 200},
        {x: drop*11, y: 200 - drop*11/2},
        {x: drop*11, y: 200}
    ];

    // fillLine(lineBody.width(), data1, data2);
});
