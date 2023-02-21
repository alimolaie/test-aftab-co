google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.load('current', {'packages':['line']});
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawBasic);
function drawBasic() {
  if ($("#column-chart1").length > 0) {
      var a = google.visualization.arrayToDataTable([
        ["سال", "حراجی", "هزینه ها", "سود"],
        ["1394", 1e3, 400, 250],
        ["1395", 1170, 460, 300],
        ["1396", 660, 1120, 400],
        ["1397", 1030, 540, 450]
      ]),
      b = {
        chart: {
          title: "عملکرد شرکت",
          subtitle: "فروش ، هزینه ها و سود: 2014-2017"
        },
        bars: "vertical",
        vAxis: {
          format: "decimal"
        },
        height: 400,
        width:'100%',
          colors: ["#7e37d8", "#fe80b2", "#80cf00"]


      },
    c = new google.charts.Bar(document.getElementById("column-chart1"));
    c.draw(a, google.charts.Bar.convertOptions(b))
  }
  if ($("#column-chart2").length > 0) {
      var a = google.visualization.arrayToDataTable([
        ["سال", "حراجی", "هزینه ها", "سود"],
        ["1394", 1e3, 400, 250],
        ["1395", 1170, 460, 300],
        ["1396", 660, 1120, 400],
        ["1397", 1030, 540, 450]
      ]),
      b = {
        chart: {
          title: "عملکرد شرکت",
          subtitle: "فروش ، هزینه ها و سود: 2014-2017"
        },
        bars: "horizontal",
        vAxis: {
          format: "decimal"
        },
        height: 400,
        width:'100%',
        colors: ["#7e37d8", "#fe80b2", "#80cf00"]
      },
      c = new google.charts.Bar(document.getElementById("column-chart2"));
      c.draw(a, google.charts.Bar.convertOptions(b))
  }
  if ($("#pie-chart1").length > 0) {
      var data = google.visualization.arrayToDataTable([
        ['فعالیت', 'ساعت در روز'],
        ['کار',     5],
        ['خوردن',      10],
        ['رفت و آمد',  15],
        ['تماشای تلویزیون', 20],
        ['خواب',    25]
      ]);
      var options = {
        title: 'فعالیتهای روزانه من',
        width:'100%',
        height: 400,
       colors: ["#06b5dd", "#7e37d8", "#fe80b2", "#80cf00" , "#fd517d"]
      };
      var chart = new google.visualization.PieChart(document.getElementById('pie-chart1'));
      chart.draw(data, options);
  }
  if ($("#pie-chart2").length > 0) {
      var data = google.visualization.arrayToDataTable([
        ['فعالیت', 'ساعت در روز'],
        ['کار',     5],
        ['خوردن',      10],
        ['رفت و آمد',  15],
        ['تماشای تلویزیون', 20],
        ['خواب',    25]
      ]);
      var options = {
        title: 'فعالیتهای روزانه من',
        is3D: true,
        width:'100%',
        height: 400,
        colors: ["#06b5dd", "#7e37d8", "#fe80b2", "#80cf00" , "#fd517d"]
      };
      var chart = new google.visualization.PieChart(document.getElementById('pie-chart2'));
      chart.draw(data, options);
  }
  if ($("#pie-chart3").length > 0) {
      var data = google.visualization.arrayToDataTable([
        ['فعالیت', 'ساعت در روز'],
          ['کار',     7],
          ['خوردن',      11],
          ['رفت و آمد',  4],
          ['تماشای تلویزیون', 2],
          ['خواب',    5]
      ]);
      var options = {
        title: 'فعالیتهای روزانه من',
        pieHole: 0.4,
        width:'100%',
        height: 400,
        colors: ["#06b5dd", "#7e37d8", "#fe80b2", "#80cf00" , "#fd517d"]
      };
      var chart = new google.visualization.PieChart(document.getElementById('pie-chart3'));
      chart.draw(data, options);
  }
  if ($("#pie-chart4").length > 0) {
      var data = google.visualization.arrayToDataTable([
        ['Language', 'Speakers (in millions)'],
        ['Assamese', 13],
        ['Bengali', 83], 
        ['Bodo', 1.4],
        ['Dogri', 2.3], 
        ['Gujarati', 46], 
        ['Hindi', 300],
        ['Kannada', 38], 
        ['Kashmiri', 5.5], 
        ['Konkani', 5],
        ['Maithili', 20], 
        ['Malayalam', 33], 
        ['Manipuri', 1.5],
        ['Marathi', 72], 
        ['Nepali', 2.9], 
        ['Oriya', 33],
        ['Punjabi', 29], 
        ['Sanskrit', 0.01], 
        ['Santhali', 6.5],
        ['Sindhi', 2.5], 
        ['Tamil', 61], 
        ['Telugu', 74], 
        ['Urdu', 52]
      ]);
      var options = {
        title: 'استفاده از زبان فارسی',
        legend: 'none',
        width:'100%',
        height: 400,
        pieSliceText: 'label',
        slices: {  4: {offset: 0.2},
          12: {offset: 0.3},
          14: {offset: 0.4},
          15: {offset: 0.5},
        },
          // colors: ["#ab8ce4", "#26c6da"]
          colors: ["#06b5dd", "#7e37d8", "#000000", "#06b5dd", "#fe80b2", "#fd517d","#80cf00", "#158df7", "#06b5dd", "#fe80b2", "#7e37d8", "#fd517d","#fd517d", "#fe80b2", "#80cf00", "#06b5dd", "#000000", "#ffc717", "#000000", "#fe80b2","#7e37d8", "#fd517d"]
        };
        var chart = new google.visualization.PieChart(document.getElementById('pie-chart4'));
        chart.draw(data, options);
  }
  if ($("#line-chart").length > 0) {
      var data = new google.visualization.DataTable();
      data.addColumn('number', 'ماه');
      data.addColumn('number', 'نگهبانان کهکشان');
      data.addColumn('number', 'انتقام جویان');
      data.addColumn('number', 'ترانسفورماتورها: عصر انقراض');
      data.addRows([
        [1,  37.8, 80.8, 41.8],
        [2,  30.9, 10.5, 32.4],
        [3,  40.4,   57, 25.7],
        [4,  11.7, 18.8, 10.5],
        [5,  20, 17.6, 10.4],
        [6,   8.8, 13.6,  7.7],
        [7,   7.6, 12.3,  9.6],
        [8,  12.3, 29.2, 10.6],
        [9,  16.9, 42.9, 14.8],
        [10, 12.8, 30.9, 11.6],
        [11,  5.3,  7.9,  4.7],
        [12,  6.6,  8.4,  5.2],
      ]);
      var options = {
        chart: {
          title: 'درآمد گیشه در دو هفته اول افتتاحیه',
          subtitle: 'به میلیون ها تومان (تومان ایران)'
        },
        colors: ["#7e37d8", "#fd517d", "#80cf00"],
        height: 500,
        width:'100%',
      };
      var chart = new google.charts.Line(document.getElementById('line-chart'));
      chart.draw(data, google.charts.Line.convertOptions(options));
  }
  if ($("#combo-chart").length > 0) {
      var data = google.visualization.arrayToDataTable([
        ['ماه', 'بولیوی', 'اکوادور', 'ماداگاسکار', 'پاپوآ', 'رواندا', 'میانگین'],
        ['2004/05',  165,      938,         522,             998,           450,      614.6],
        ['2005/06',  135,      1120,        599,             1268,          288,      682],
        ['2006/07',  157,      1167,        587,             807,           397,      623],
        ['2007/08',  139,      1110,        615,             968,           215,      609.4],
        ['87/09',  136,      691,         629,             1026,          366,      569.6]
      ]);
      var options = {
        title : 'تولید ماهانه قهوه بر اساس کشور',
        vAxis: {title: 'فنجان ها'},
        hAxis: {title: 'ماه'},
        seriesType: 'bars',
        series: {5: {type: 'line'}},
        height: 500,
        width:'100%',
        colors: ["#06b5dd", "#7e37d8", "#fe80b2", "#80cf00", "#fd517d"]
    };
    var chart = new google.visualization.ComboChart(document.getElementById('combo-chart'));
    chart.draw(data, options);
  }
  if ($("#area-chart1").length > 0) {
      var data = google.visualization.arrayToDataTable([
        ['Year', 'فروشها', 'هزینه ها'],
        ['1393',  1000,      400],
        ['1394',  1170,      460],
        ['1395',  660,       1120],
        ['1396',  1030,      540]
      ]);
      var options = {
        title: 'عملکرد شرکت',
        hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
        vAxis: {minValue: 0},
        width:'100%',
        height: 400,
        colors: ['#fd517d', '#7e37d8']
      };
      var chart = new google.visualization.AreaChart(document.getElementById('area-chart1'));
      chart.draw(data, options);
  }
  if ($("#area-chart2").length > 0) {
    var data = google.visualization.arrayToDataTable([
      ['سال', 'ماشین', 'تراکتور' , 'موتور' , 'دوچرخه'],
      ['1393',  100, 400, 2000, 400],
      ['1394',  500, 700, 530, 800],
      ['1395',  2000, 1000, 620, 120],
      ['1396',  120, 201, 2501, 540]
    ]);
    var options = {
      title: 'عملکرد شرکت',
      hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
      vAxis: {minValue: 0},
      width:'100%',
      height: 400,
      colors: ["#7e37d8", "#fe80b2", "#fd517d", "#158df7"]
    };
    var chart = new google.visualization.AreaChart(document.getElementById('area-chart2'));
    chart.draw(data, options);
  }
  if ($("#area-chart-dashboard-default").length > 0) {
      var data = new google.visualization.DataTable();
      data.addColumn('number', 'روز');
      data.addColumn('number', 'نگهبانان کهکشان');
      data.addColumn('number', 'انتقام جویان');
      data.addColumn('number', 'ترانسفورماتورها: انقراض');
      data.addRows([
        [1,  37.8, 80.8, 41.8],
        [2,  30.9, 10.5, 32.4],
        [3,  40.4,   57, 25.7],
        [4,  11.7, 18.8, 10.5],
        [5,  20, 17.6, 10.4],
        [6,   8.8, 13.6,  7.7],
        [7,   7.6, 12.3,  9.6],
        [8,  12.3, 29.2, 10.6],
        [9,  16.9, 42.9, 14.8],
        [10, 12.8, 30.9, 11.6],
        [11,  5.3,  7.9,  4.7],
        [12,  6.6,  8.4,  5.2],
        [13,  4.8,  6.3,  3.6],
        [14,  4.2,  6.2,  3.4]
      ]);
      var options = {
        chart: {
          title: 'درآمد گیشه در دو هفته اول افتتاحیه',
          subtitle: 'به میلیون ها تومان (تومن ایران)'
        },
        colors: ["#00c292", "#f3d800" , "#fd7b6c"],
        width:'100%',
        legend: {position: 'top'},
      };
      var chart = new google.charts.Line(document.getElementById('area-chart-dashboard-default'));
      chart.draw(data, google.charts.Line.convertOptions(options));
  }
    if ($("#bar-chart2").length > 0) {
        var a = google.visualization.arrayToDataTable([
                ["عنصر", "تراکم", {
                    role: "style"
                }],
                ["کوپر", 10, "#7e37d8"],
                ["سیلور", 12, "#fe80b2"],
                ["گلد", 14, "#80cf00"],
                ["پلاتینیوم", 16, "color: #fd517d"]
            ]),
            d = new google.visualization.DataView(a);
        d.setColumns([0, 1, {
            calc: "stringify",
            sourceColumn: 1,
            type: "string",
            role: "annotation"
        }, 2]);
        var b = {
                title: "تراکم فلزات گرانبها ، در گرم / سانتی متر ^ 3",
                width:'100%',
                height: 400,
                bar: {
                    groupWidth: "95%"
                },
                legend: {
                    position: "none"
                }
            },
            c = new google.visualization.BarChart(document.getElementById("bar-chart2"));
        c.draw(d, b)
    }
}
// Gantt chart
google.charts.load('current', {'packages':['gantt']});
google.charts.setOnLoadCallback(drawChart);

function daysToMilliseconds(days) {
    return days * 24 * 60 * 60 * 1000;
}

function drawChart() {

    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Task ID');
    data.addColumn('string', 'Task Name');
    data.addColumn('string', 'Resource');
    data.addColumn('date', 'Start Date');
    data.addColumn('date', 'End Date');
    data.addColumn('number', 'Duration');
    data.addColumn('number', 'Percent Complete');
    data.addColumn('string', 'Dependencies');

    data.addRows([
        ['Research', 'منابع پیدا شده', null,
            new Date(2015, 0, 1), new Date(2015, 0, 5), null,  100,  null],
        ['Write', 'مقاله نویسی', 'write',
            null, new Date(2015, 0, 9), daysToMilliseconds(3), 25, 'Research,Outline'],
        ['Cite', 'کتابشناسی ایجادشده', 'write',
            null, new Date(2015, 0, 7), daysToMilliseconds(1), 20, 'Research'],
        ['Complete', 'دست روی کاغذ', 'complete',
            null, new Date(2015, 0, 10), daysToMilliseconds(1), 0, 'Cite,Write'],
        ['Outline', 'طرح کلی کاغذ', 'write',
            null, new Date(2015, 0, 6), daysToMilliseconds(1), 100, 'Research']
    ]);

    var options = {
        height: 275,
        gantt: {
            criticalPathEnabled: false, // Critical path arrows will be the same as other arrows.
            arrow: {
                angle: 100,
                width: 5,
                color: '#7e37d8',
                radius: 0
            },

                palette: [
                    {
                        "color": "#fd517d",
                        "dark": "#7e37d8",
                        "light": "#7e37d8"
                    }
                ]

        }
    };
    var chart = new google.visualization.Gantt(document.getElementById('gantt_chart'));

    chart.draw(data, options);
}
// word tree
google.charts.load('current1', {packages:['wordtree']});
google.charts.setOnLoadCallback(drawChart1);

function drawChart1() {
    var data = google.visualization.arrayToDataTable(
        [ ['Phrases'],
            ['گربهها از بهتر سگ هستند'],
            ['گربهایی که کیبل می شوند'],
            ['گربها بهتر از همستر هستند'],
            ['گربها عالی هستند'],
            ['گربها هم مردم هستند'],
            ['گربها موش می خورند'],
            ['گربها میو می کنند '],
            ['گربها در گهواره'],
            ['گربها موش می خورند'],
            ['اشعار گربها در گهواره'],
            ['گربهایی که کیبل می شوند'],
            ['گربه برای فرزندخواندگی'],
            ['گربها خانواده هستند'],
            ['گربها موش می خورند'],
            ['گربها بهتر از بچه گربها هستند'],
            ['گربها شر هستند'],
            ['گربها عجیب هستند'],
            ['گربها موش می خورند']
        ]
    );

    var options = {
        wordtree: {
            format: 'implicit',
            word: 'cats'
        }

    };
    var chart = new google.visualization.WordTree(document.getElementById('wordtree_basic'));
    chart.draw(data, options);
}

