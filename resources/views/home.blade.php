@extends('layouts.app') 

@section('title') 
    Dashboard 
@stop 

@section('page-css') 
@stop 

@section('header_title') 
    Dashboard 
@stop 

@section('content')
<div class="dash-content-area-sec">
    <!-- <div class="mobile-toogle">
        <div class="menu-icon" id="menu-Toggle">
            <a href="javascript:void(0)"><img src="{{ asset('img/home/menu.png') }}" /></a>
        </div>
        <div class="mobile-logo">
            <img src="{{ asset('img/logo/logo.png') }}" />
        </div>
    </div> -->

    <div class="container-fluid">
        <div class="ad-dashboard-main-section">
            <div class="row">
                <div class="col-lg-9">
                    <div class="welcome-section">
                        <p>Hello Lorem Ipsum, Welcome back 👋🏻</p>
                        <h3>Your Dashboard today</h3>
                    </div>
                    <div class="Oerview-section">
                        <h4>
                            Revenue
                            <span>
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M8.99985 16.5001C13.142 16.5001 16.4998 13.1422 16.4998 9.00006C16.4998 4.85793 13.142 1.50006 8.99985 1.50006C4.85771 1.50006 1.49985 4.85793 1.49985 9.00006C1.49985 13.1422 4.85771 16.5001 8.99985 16.5001Z"
                                        stroke="#8D92BC"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path d="M9 6.00006V9.00006" stroke="#8D92BC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <circle cx="8.99985" cy="12" r="0.75" fill="#8D92BC" />
                                </svg>
                            </span>
                        </h4>
                        <div id="OerviewDiv"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="Revenue-City-section">
                                <h4>
                                    Revenue By City
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M8.99985 16.5001C13.142 16.5001 16.4998 13.1422 16.4998 9.00008C16.4998 4.85794 13.142 1.50008 8.99985 1.50008C4.85771 1.50008 1.49985 4.85794 1.49985 9.00008C1.49985 13.1422 4.85771 16.5001 8.99985 16.5001Z"
                                                stroke="#0F123F"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path d="M9 6.00008V9.00008" stroke="#0F123F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <circle cx="8.99985" cy="12" r="0.75" fill="#0F123F" />
                                        </svg>
                                    </span>
                                </h4>
                                <div id="Revenue-City"></div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="Total-won-section">
                                <h4>Total $ won</h4>
                                <div id="TotalwonDiv"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-bar-sec">
                        <div class="profile-user">
                            <div class="profile-image">
                                <img src="{{ asset('img/home/profile.svg') }}" />
                            </div>
                            <div class="profile-name">
                                <h4>Lorem Ipsum</h4>
                                <p>Admin</p>
                            </div>
                        </div>

                        <div class="event-progress-sec">
                            <div class="event-main-list">
                                <h4>Event Type</h4>
                                <svg class="progress-event blue noselect" data-progress="70" x="0px" y="0px" viewBox="0 0 80 80">
                                    <path class="track" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
                                    <path class="fill" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
                                    <text class="value" x="50%" y="55%">0%</text>
                                </svg>
                                <div class="event-bottom-list">
                                    <h3>Wedding event</h3>
                                    <h2>Party event</h2>
                                    <p>*Average has been counted carefully</p>
                                </div>
                            </div>
                        </div>

                        <div class="Upcoming-events-sec">
                            <div class="Upcoming-header">
                                <div class="upcoming-heading">
                                    <h4>Upcoming Events</h4>
                                    <p>Yesterday, May 2</p>
                                </div>
                                <div class="view-btn">
                                    <a href="#" class="btn">View All</a>
                                </div>
                            </div>

                            <div class="Upcoming-event-list">
                                <div class="event-info">
                                    <h5>Lorem Ipsum</h5>
                                    <p>Lorem ipsum</p>
                                </div>
                                <div class="event-date">
                                    <p>10<span>APR</span></p>
                                </div>
                            </div>

                            <div class="Upcoming-event-list">
                                <div class="event-info">
                                    <h5>Lorem Ipsum</h5>
                                    <p>Lorem ipsum</p>
                                </div>
                                <div class="event-date">
                                    <p>10<span>APR</span></p>
                                </div>
                            </div>

                            <div class="Upcoming-event-list">
                                <div class="event-info">
                                    <h5>Lorem Ipsum</h5>
                                    <p>Lorem ipsum</p>
                                </div>
                                <div class="event-date">
                                    <p>10<span>APR</span></p>
                                </div>
                            </div>

                            <div class="Upcoming-event-list">
                                <div class="event-info">
                                    <h5>Lorem Ipsum</h5>
                                    <p>Lorem ipsum</p>
                                </div>
                                <div class="event-date">
                                    <p>10<span>APR</span></p>
                                </div>
                            </div>

                            <div class="Total-customer">
                                <h5>Total #customer</h5>
                                <span>6</span>
                            </div>

                            <div class="Average-value">
                                <h5>Average value of won deals</h5>
                                <span>A$808</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop 
@section('page-js') 
<script>
    am5.ready(function () {
        // Create root element
        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
        var root = am5.Root.new("OerviewDiv");

        // Set themes
        // https://www.amcharts.com/docs/v5/concepts/themes/
        root.setThemes([am5themes_Animated.new(root)]);

        // Create chart
        // https://www.amcharts.com/docs/v5/charts/xy-chart/
        var chart = root.container.children.push(
            am5xy.XYChart.new(root, {
                panX: true,
                panY: true,
                wheelX: "panX",
                wheelY: "zoomX",
                layout: root.verticalLayout,
                pinchZoomX: true,
            })
        );

        chart.get("colors").set("step", 3);

        // Data
        var data = [
            {
                date: new Date(2020, 0, 1).getTime(),
                observed: 0,
            },
            {
                date: new Date(2020, 1, 1).getTime(),
                observed: 4000,
            },
            {
                date: new Date(2020, 2, 1).getTime(),
                observed: 55000,
            },
            {
                date: new Date(2020, 3, 1).getTime(),
                observed: 220000,
            },
            {
                date: new Date(2020, 4, 1).getTime(),
                observed: 390000,
            },
            {
                date: new Date(2020, 5, 1).getTime(),
                observed: 550000,
            },
            {
                date: new Date(2020, 6, 1).getTime(),
                observed: 720000,
                easing: 720000,
                projection: 720000,
                stricter: 720000,
            },
            {
                date: new Date(2020, 7, 1).getTime(),
                easing: 900000,
                projection: 900000,
                stricter: 900000,
            },
            {
                date: new Date(2020, 8, 1).getTime(),
                easing: 1053000,
                projection: 1053000,
                stricter: 1053000,
            },
            {
                date: new Date(2020, 9, 1).getTime(),
                easing: 1252000,
                projection: 1249000,
                stricter: 1232000,
            },
            {
                date: new Date(2020, 10, 1).getTime(),
                easing: 1674000,
                projection: 1604000,
                stricter: 1415000,
            },
            {
                date: new Date(2020, 11, 1).getTime(),
                easing: 3212000,
                projection: 2342000,
                stricter: 1751000,
            },
        ];

        // Add cursor
        // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
        var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
        cursor.lineY.set("visible", false);

        // Create axes
        // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
        var xAxis = chart.xAxes.push(
            am5xy.DateAxis.new(root, {
                maxDeviation: 0.3,
                baseInterval: {
                    timeUnit: "month",
                    count: 1,
                },
                renderer: am5xy.AxisRendererX.new(root, {}),
                tooltip: am5.Tooltip.new(root, {}),
            })
        );

        var yAxis = chart.yAxes.push(
            am5xy.ValueAxis.new(root, {
                maxDeviation: 0.3,
                renderer: am5xy.AxisRendererY.new(root, {}),
            })
        );

        // Add series
        // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
        function createSeries(field, name, color, dashed) {
            var series = chart.series.push(
                am5xy.SmoothedXLineSeries.new(root, {
                    name: name,
                    xAxis: xAxis,
                    yAxis: yAxis,
                    valueYField: field,
                    valueXField: "date",
                    stroke: color,
                    tooltip: am5.Tooltip.new(root, {
                        pointerOrientation: "horizontal",
                        getFillFromSprite: false,
                        labelText: "[bold]{name}[/]\n{valueX}: [bold]{valueY}[/]",
                    }),
                })
            );

            series.get("tooltip").get("background").setAll({
                fillOpacity: 0.7,
                fill: color,
                pointerBaseWidth: 0,
            });

            series.strokes.template.setAll({
                strokeWidth: 2,
            });

            if (dashed) {
                series.strokes.template.set("strokeDasharray", [5, 3]);
            }

            series.data.setAll(data);
            series.appear(1000);

            return series;
        }

        createSeries("observed", "Lorem Ispum", am5.color(0xb1b106));
        createSeries("easing", "Lorem Ispum", am5.color(0xd68c45), true);
        createSeries("stricter", "Lorem Ispum", am5.color(0x2c6e49), true);
        createSeries("projection", "Lorem Ispum", am5.color(0xb1b106), true);

        // Set date fields
        // https://www.amcharts.com/docs/v5/concepts/data/#Parsing_dates
        root.dateFormatter.setAll({
            dateFormat: "yyyy-MM-dd",
            dateFields: ["valueX"],
        });

        // Add legend
        // https://www.amcharts.com/docs/v5/charts/xy-chart/legend-xy-series/
        var legend = chart.children.push(
            am5.Legend.new(root, {
                centerX: am5.p50,
                x: am5.p50,
            })
        );

        legend.data.setAll(chart.series.values);

        // Make stuff animate on load
        // https://www.amcharts.com/docs/v5/concepts/animations/
        chart.appear(1000, 100);
    }); // end am5.ready()
</script>

<!-- Chart code -->
<script>
    am5.ready(function () {
        // Define data for each year
        var chartData = {
            "1995": [
                { sector: "London", size: 6.6 },
                { sector: "Mumbai", size: 0.6 },
                { sector: "Berlin", size: 23.2 },
                { sector: "Manchester", size: 2.2 },
                { sector: "Tokyo", size: 4.5 },
                { sector: "Dubai", size: 14.6 },
                { sector: "Sydney", size: 9.3 },
                { sector: "Madrid", size: 22.5 },
            ],
            "1996": [
                { sector: "London", size: 6.4 },
                { sector: "Mumbai", size: 0.5 },
                { sector: "Berlin", size: 22.4 },
                { sector: "Manchester", size: 2 },
                { sector: "Tokyo", size: 4.2 },
                { sector: "Dubai", size: 14.8 },
                { sector: "Sydney", size: 9.7 },
                { sector: "Madrid", size: 22 },
            ],
            "1997": [
                { sector: "London", size: 6.1 },
                { sector: "Mumbai", size: 0.2 },
                { sector: "Berlin", size: 20.9 },
                { sector: "Manchester", size: 1.8 },
                { sector: "Tokyo", size: 4.2 },
                { sector: "Dubai", size: 13.7 },
                { sector: "Sydney", size: 9.4 },
                { sector: "Madrid", size: 22.1 },
            ],
            "1998": [
                { sector: "London", size: 6.2 },
                { sector: "Mumbai", size: 0.3 },
                { sector: "Berlin", size: 21.4 },
                { sector: "Manchester", size: 1.9 },
                { sector: "Tokyo", size: 4.2 },
                { sector: "Dubai", size: 14.5 },
                { sector: "Sydney", size: 10.6 },
                { sector: "Madrid", size: 23 },
            ],
            "1999": [
                { sector: "London", size: 5.7 },
                { sector: "Mumbai", size: 0.2 },
                { sector: "Berlin", size: 20 },
                { sector: "Manchester", size: 1.8 },
                { sector: "Tokyo", size: 4.4 },
                { sector: "Dubai", size: 15.2 },
                { sector: "Sydney", size: 10.5 },
                { sector: "Madrid", size: 24.7 },
            ],
            "2000": [
                { sector: "London", size: 5.1 },
                { sector: "Mumbai", size: 0.3 },
                { sector: "Berlin", size: 20.4 },
                { sector: "Manchester", size: 1.7 },
                { sector: "Tokyo", size: 4 },
                { sector: "Dubai", size: 16.3 },
                { sector: "Sydney", size: 10.7 },
                { sector: "Madrid", size: 24.6 },
            ],
            "2001": [
                { sector: "London", size: 5.5 },
                { sector: "Mumbai", size: 0.2 },
                { sector: "Berlin", size: 20.3 },
                { sector: "Manchester", size: 1.6 },
                { sector: "Tokyo", size: 3.1 },
                { sector: "Dubai", size: 16.3 },
                { sector: "Sydney", size: 10.7 },
                { sector: "Madrid", size: 25.8 },
            ],
            "2002": [
                { sector: "London", size: 5.7 },
                { sector: "Mumbai", size: 0.2 },
                { sector: "Berlin", size: 20.5 },
                { sector: "Manchester", size: 1.6 },
                { sector: "Tokyo", size: 3.6 },
                { sector: "Dubai", size: 16.1 },
                { sector: "Sydney", size: 10.7 },
                { sector: "Madrid", size: 26 },
            ],
            "2003": [
                { sector: "London", size: 4.9 },
                { sector: "Mumbai", size: 0.2 },
                { sector: "Berlin", size: 19.4 },
                { sector: "Manchester", size: 1.5 },
                { sector: "Tokyo", size: 3.3 },
                { sector: "Dubai", size: 16.2 },
                { sector: "Sydney", size: 11 },
                { sector: "Madrid", size: 27.5 },
            ],
            "2004": [
                { sector: "London", size: 4.7 },
                { sector: "Mumbai", size: 0.2 },
                { sector: "Berlin", size: 18.4 },
                { sector: "Manchester", size: 1.4 },
                { sector: "Tokyo", size: 3.3 },
                { sector: "Dubai", size: 16.9 },
                { sector: "Sydney", size: 10.6 },
                { sector: "Madrid", size: 28.1 },
            ],
            "2005": [
                { sector: "London", size: 4.3 },
                { sector: "Mumbai", size: 0.2 },
                { sector: "Berlin", size: 18.1 },
                { sector: "Manchester", size: 1.4 },
                { sector: "Tokyo", size: 3.9 },
                { sector: "Dubai", size: 15.7 },
                { sector: "Sydney", size: 10.6 },
                { sector: "Madrid", size: 29.1 },
            ],
            "2006": [
                { sector: "London", size: 4 },
                { sector: "Mumbai", size: 0.2 },
                { sector: "Berlin", size: 16.5 },
                { sector: "Manchester", size: 1.3 },
                { sector: "Tokyo", size: 3.7 },
                { sector: "Dubai", size: 14.2 },
                { sector: "Sydney", size: 12.1 },
                { sector: "Madrid", size: 29.1 },
            ],
            "2007": [
                { sector: "London", size: 4.7 },
                { sector: "Mumbai", size: 0.2 },
                { sector: "Berlin", size: 16.2 },
                { sector: "Manchester", size: 1.2 },
                { sector: "Tokyo", size: 4.1 },
                { sector: "Dubai", size: 15.6 },
                { sector: "Sydney", size: 11.2 },
                { sector: "Madrid", size: 30.4 },
            ],
            "2008": [
                { sector: "London", size: 4.9 },
                { sector: "Mumbai", size: 0.3 },
                { sector: "Berlin", size: 17.2 },
                { sector: "Manchester", size: 1.4 },
                { sector: "Tokyo", size: 5.1 },
                { sector: "Dubai", size: 15.4 },
                { sector: "Sydney", size: 11.1 },
                { sector: "Madrid", size: 28.4 },
            ],
            "2009": [
                { sector: "London", size: 4.7 },
                { sector: "Mumbai", size: 0.3 },
                { sector: "Berlin", size: 16.4 },
                { sector: "Manchester", size: 1.9 },
                { sector: "Tokyo", size: 4.9 },
                { sector: "Dubai", size: 15.5 },
                { sector: "Sydney", size: 10.9 },
                { sector: "Madrid", size: 27.9 },
            ],
            "2010": [
                { sector: "London", size: 4.2 },
                { sector: "Mumbai", size: 0.3 },
                { sector: "Berlin", size: 16.2 },
                { sector: "Manchester", size: 2.2 },
                { sector: "Tokyo", size: 4.3 },
                { sector: "Dubai", size: 15.7 },
                { sector: "Sydney", size: 10.2 },
                { sector: "Madrid", size: 28.8 },
            ],
            "2011": [
                { sector: "London", size: 4.1 },
                { sector: "Mumbai", size: 0.3 },
                { sector: "Berlin", size: 14.9 },
                { sector: "Manchester", size: 2.3 },
                { sector: "Tokyo", size: 5 },
                { sector: "Dubai", size: 17.3 },
                { sector: "Sydney", size: 10.2 },
                { sector: "Madrid", size: 27.2 },
            ],
            "2012": [
                { sector: "London", size: 3.8 },
                { sector: "Mumbai", size: 0.3 },
                { sector: "Berlin", size: 14.9 },
                { sector: "Manchester", size: 2.6 },
                { sector: "Tokyo", size: 5.1 },
                { sector: "Dubai", size: 15.8 },
                { sector: "Sydney", size: 10.7 },
                { sector: "Madrid", size: 28 },
            ],
            "2013": [
                { sector: "London", size: 3.7 },
                { sector: "Mumbai", size: 0.2 },
                { sector: "Berlin", size: 14.9 },
                { sector: "Manchester", size: 2.7 },
                { sector: "Tokyo", size: 5.7 },
                { sector: "Dubai", size: 16.5 },
                { sector: "Sydney", size: 10.5 },
                { sector: "Madrid", size: 26.6 },
            ],
            "2014": [
                { sector: "London", size: 3.9 },
                { sector: "Mumbai", size: 0.2 },
                { sector: "Berlin", size: 14.5 },
                { sector: "Manchester", size: 2.7 },
                { sector: "Tokyo", size: 5.6 },
                { sector: "Dubai", size: 16.6 },
                { sector: "Sydney", size: 10.5 },
                { sector: "Madrid", size: 26.5 },
            ],
        };

        // Create root element
        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
        var root = am5.Root.new("Revenue-City");

        // Set themes
        // https://www.amcharts.com/docs/v5/concepts/themes/
        root.setThemes([am5themes_Animated.new(root)]);

        // Create chart
        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
        var chart = root.container.children.push(
            am5percent.PieChart.new(root, {
                innerRadius: 100,
                layout: root.verticalLayout,
            })
        );

        // Create series
        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
        var series = chart.series.push(
            am5percent.PieSeries.new(root, {
                valueField: "size",
                categoryField: "sector",
            })
        );

        // Set data
        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
        series.data.setAll([
            { sector: "London", size: 6.6 },
            { sector: "Mumbai", size: 0.6 },
            { sector: "Berlin", size: 23.2 },
            { sector: "Manchester", size: 2.2 },
            { sector: "Tokyo", size: 4.5 },
            { sector: "Dubai", size: 14.6 },
            { sector: "Sydney", size: 9.3 },
            { sector: "Madrid", size: 22.5 },
        ]);

        // Play initial series animation
        // https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
        series.appear(1000, 100);

        // Add label
        var label = root.tooltipContainer.children.push(
            am5.Label.new(root, {
                x: am5.p50,
                y: am5.p50,
                centerX: am5.p50,
                centerY: am5.p50,
                fill: am5.color(0x000000),
                fontSize: 50,
            })
        );

        // Animate chart data
        var currentYear = 1995;
        function getCurrentData() {
            var data = chartData[currentYear];
            currentYear++;
            if (currentYear > 2014) currentYear = 1995;
            return data;
        }

        function loop() {
            label.set("text", currentYear);
            var data = getCurrentData();
            for (var i = 0; i < data.length; i++) {
                series.data.setIndex(i, data[i]);
            }
            chart.setTimeout(loop, 4000);
        }

        loop();
    }); // end am5.ready()
</script>

<!-- TotalwonDiv Chart code -->

<script>
    am5.ready(function () {
        // Create root element
        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
        var root = am5.Root.new("TotalwonDiv");

        // Set themes
        // https://www.amcharts.com/docs/v5/concepts/themes/
        root.setThemes([am5themes_Animated.new(root)]);

        // Create chart
        // https://www.amcharts.com/docs/v5/charts/xy-chart/
        var chart = root.container.children.push(
            am5xy.XYChart.new(root, {
                panX: false,
                panY: false,
                wheelX: "panX",
                wheelY: "zoomX",
                layout: root.verticalLayout,
            })
        );

        // Add legend
        // https://www.amcharts.com/docs/v5/charts/xy-chart/legend-xy-series/
        var legend = chart.children.push(
            am5.Legend.new(root, {
                centerX: am5.p50,
                x: am5.p50,
            })
        );

        var data = [
            {
                year: "2021",
                europe: 2.5,
                namerica: 2.5,
                asia: 2.1,
                lamerica: 1,
            },
            {
                year: "2022",
                europe: 2.6,
                namerica: 2.7,
                asia: 2.2,
                lamerica: 0.5,
            },
            {
                year: "2023",
                europe: 2.8,
                namerica: 2.9,
                asia: 2.4,
                lamerica: 0.3,
            },
        ];

        // Create axes
        // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
        var xAxis = chart.xAxes.push(
            am5xy.CategoryAxis.new(root, {
                categoryField: "year",
                renderer: am5xy.AxisRendererX.new(root, {
                    cellStartLocation: 0.1,
                    cellEndLocation: 0.9,
                }),
                tooltip: am5.Tooltip.new(root, {}),
            })
        );

        xAxis.data.setAll(data);

        var yAxis = chart.yAxes.push(
            am5xy.ValueAxis.new(root, {
                renderer: am5xy.AxisRendererY.new(root, {}),
            })
        );

        // Add series
        // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
        function makeSeries(name, fieldName) {
            var series = chart.series.push(
                am5xy.ColumnSeries.new(root, {
                    name: name,
                    xAxis: xAxis,
                    yAxis: yAxis,
                    valueYField: fieldName,
                    categoryXField: "year",
                })
            );

            series.columns.template.setAll({
                tooltipText: "{name}, {categoryX}:{valueY}",
                width: am5.percent(90),
                tooltipY: 0,
            });

            series.data.setAll(data);

            // Make stuff animate on load
            // https://www.amcharts.com/docs/v5/concepts/animations/
            series.appear();

            series.bullets.push(function () {
                return am5.Bullet.new(root, {
                    locationY: 0,
                    sprite: am5.Label.new(root, {
                        text: "{valueY}",
                        fill: root.interfaceColors.get("alternativeText"),
                        centerY: 0,
                        centerX: am5.p50,
                        populateText: true,
                    }),
                });
            });

            legend.data.push(series);
        }

        makeSeries("Lorem Ispum", "europe");
        makeSeries("Lorem Ispum", "namerica");
        makeSeries("Lorem Ispum", "asia");
        makeSeries("Lorem Ispum", "lamerica");

        // Make stuff animate on load
        // https://www.amcharts.com/docs/v5/concepts/animations/
        chart.appear(1000, 100);
    }); // end am5.ready()
</script>
@stop
