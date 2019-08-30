<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<footer>
            <div class="footer-top clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h6>Navigation</h6>
                            <?php 
                                wp_nav_menu( array(
                                    'menu' => 'Footer Menu' ,
                                    'container' => 'ul',
                                    'menu_class'=> 'menu-bottom list-unstyled'
                                 ) );
                            ?>
                            <!-- <ul class="menu-bottom list-unstyled">
                                <li>
                                    <a href="javascript:;">Home</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Our Mission</a>
                                </li>
                                <li>
                                    <a href="javascript:;">The Plan</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Donate</a>
                                </li>
                                <li>
                                    <a href="volunteer.html">Volunteer</a>
                                </li>
                                <li>
                                    <a href="sponsor.html">Sponsor</a>
                                </li>
                            </ul> -->
                        </div>
                        <div class="col-md-4">
                            <h6>Contacts</h6>
                            <ul class="menu-bottom col-count-1 list-unstyled">
                                <li>
                                    <a href="javascript:;">
                                    <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;3545 28th St. Astoria, NY 11106 United States
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:info@planetgreen.com" class="mail-t">
                                    <i class="fas fa-envelope"></i>&nbsp;&nbsp;E-mail: info@planetgreen.com
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:212 401 4835">
                                    <i class="fas fa-phone-alt"></i>&nbsp;&nbsp;(212) 401 4835
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h6>Social</h6>
                            <ul class="social-link list-unstyled">
                                <li>
                                    <a href="javascript:;">
                                    <i class="fab fa-facebook-f"></i>Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                    <i class="fab fa-twitter"></i>Twitter
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                    <i class="fab fa-youtube"></i>Youtube
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                    <i class="fab fa-instagram"></i>Instagram
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                    <i class="fab fa-linkedin-in"></i>Linkedin
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom clearfix">
                <div class="container">
                    <div class="copy-strip">Copyright 2019 by Planet Green. All rights reserved. </div>
                </div>
            </div>
        </footer>
    </body>
    <script type="text/javascript">
        jQuery(document).ready(function()
        {
            var current = "<?php echo get_the_permalink(get_the_ID()); ?>";
            $('.navbar-nav .nav-item a').each(function(){
                var $this = $(this);
                // if the current path is like this link, make it active
                //alert(this.href);
                //alert(current);
                //alert(this.href+"="+current);
                if (this.href == current) {
                    //alert(this.href);
                    $('.navbar-nav .nav-item').removeClass('active');
                    $this.closest("li").addClass('active');
                }
            })

            $(".btn-div button").click(function()
            {
                window.location.href = $(this).attr("attr-href");
            })
        })
        // window.onload = function() {
            /*** Line Chart Script Starts ***/
            var chart1 = new CanvasJS.Chart("chartContainer1", {
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                animationEnabled: true,
                backgroundColor: "#f7f7f7",
                title: {
                    text: "City of walnut creek annual GHG Emissions (MTC02E)"
                },
                axisX: {
                    interval: 1,
                    intervalType: "year",
                    valueFormatString: "YYYY"
                },
                axisY: {
                    //title: "",
                    //valueFormatString: "$#0"
                },
                data: [{
                    type: "line",
                    markerSize: 12,
                    xValueFormatString: "YYYY",
                    dataPoints: [{
                            x: new Date(2005, 1, 1),
                            y: 5,
                            markerType: "none",
                            markerColor: "#6B8E23"
                        },
                        {
                            x: new Date(2006, 1, 1),
                            y: 15,
                            markerType: "none",
                            markerColor: "#6B8E23"
                        },
                        {
                            x: new Date(2007, 1, 1),
                            y: 25,
                            markerType: "none",
                            markerColor: "tomato"
                        },
                        {
                            x: new Date(2008, 1, 1),
                            y: 35,
                            markerType: "none",
                            markerColor: "tomato"
                        },
                        {
                            x: new Date(2009, 1, 1),
                            y: 45,
                            markerType: "none",
                            markerColor: "tomato"
                        },
                        {
                            x: new Date(2010, 1, 1),
                            y: 55,
                            markerType: "none",
                            markerColor: "tomato"
                        },
                        {
                            x: new Date(2011, 1, 1),
                            y: 65,
                            markerType: "none",
                            markerColor: "tomato"
                        },
                        {
                            x: new Date(2012, 1, 1),
                            y: 75,
                            markerType: "none",
                            markerColor: "tomato"
                        },
                        {
                            x: new Date(2013, 1, 1),
                            y: 85,
                            markerType: "none",
                            markerColor: "tomato"
                        }
                    ]
                }]
            });
            chart1.render();
            /*** Line Chart Script Ends ***/


            /*** Pie Chart Script Starts ***/
            CanvasJS.addColorSet("customshades",
                [
                    "#4473c5",
                    "#ed7d31",
                    "#a5a5a5",
                    "#f7c000",
                    "#5a9bd5",
                    "#6fad46",
                    "#254278"                
                ]
            );
            var chart2 = new CanvasJS.Chart("chartContainer2", {
                exportEnabled: false,
                animationEnabled: true,
                colorSet: "customshades",
                backgroundColor: "#f7f7f7",
                title:{
                    text: "Walnut Creek proportion of emissions by source"
                },
                legend:{
                    verticalAlign: "top",
                    cursor: "pointer",
                },
                data: [{
                    type: "pie",
                    showInLegend: true,
                    toolTipContent: "{name}: <strong>{y}%</strong>",
                    indexLabel: "{name} - {y}%",
                    dataPoints: [
                        { y: 26, name: "Transportation"},
                        { y: 15, name: "Residential built environment" },
                        { y: 1, name: "off-road equipment" },
                        { y: 0, name: "Water" },
                        { y: 7, name: "Waste water" },
                        { y: 2, name: "Solid waste" },
                        { y: 14, name: "Non residential built environment"}
                    ]
                }]
            });
            chart2.render();
            /*** Pie Chart Script Ends ***/

            
            /*** Bar Charts Script Start ***/
            CanvasJS.addColorSet("custombluebarshades",
                [
                    "#5e85c9"                
                ]
            );
            var chart3 = new CanvasJS.Chart("chartContainer3", {
                animationEnabled: true,
                colorSet: "custombluebarshades",
                backgroundColor: "#f7f7f7",
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title:{
                    text: "Tons of CO2 Sequestered per Year By Tree Species"
                },
                axisY: {
                    //title: "Reserves(MMbbl)"
                },
                data: [{        
                    type: "column",  
                    //showInLegend: true, 
                    //legendMarkerColor: "grey",
                    //legendText: "MMbbl = one million barrels",
                    dataPoints: [      
                        { y: 100, label: "Black Walnut" },
                        { y: 150, label: "Hybrid Poplar" },
                        { y: 200, label: "White Cedar" },
                        { y: 250, label: "Red Oak" },
                        { y: 300, label: "Norway Spruce" }
                    ]
                }]
            });
            chart3.render();
            /*** Bar Charts Scripts Ends ***/



            /*** Bar Charts Script Start ***/
            CanvasJS.addColorSet("custombarshades",
                [
                    "#ec914f"                
                ]
            );
            var chart4 = new CanvasJS.Chart("chartContainer4", {
                animationEnabled: true,
                colorSet: "custombarshades",
                backgroundColor: "#f7f7f7",
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title:{
                    text: "Percentage of city Emissions sequestered"
                },
                axisY: {
                    //title: "Reserves(MMbbl)"
                },
                data: [{        
                    type: "column",  
                    //showInLegend: true, 
                    //legendMarkerColor: "grey",
                    //legendText: "MMbbl = one million barrels",
                    dataPoints: [      
                        { y: 100, label: "2021" },
                        { y: 150, label: "2022" },
                        { y: 200, label: "2023" },
                        { y: 250, label: "2024" },
                        { y: 300, label: "2025" },
                        { y: 350, label: "2026" },
                        { y: 400, label: "2027" },
                        { y: 450, label: "2028" },
                        { y: 500, label: "2029" }
                    ]
                }]
            });
            chart4.render();
            /*** Bar Charts Scripts Ends ***/


            /*** Line Chart Script Starts ***/
            CanvasJS.addColorSet("customlineshades",
                [
                    "#ec914f"                
                ]
            );
            var chart5 = new CanvasJS.Chart("chartContainer5", {
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                animationEnabled: true,
                colorSet: "customlineshades",
                backgroundColor: "#f7f7f7",
                title: {
                    text: "GHG SEQUESTERED (MTCO2E) PER YEAR"
                },
                axisX: {
                    interval: 1,
                    intervalType: "year",
                    valueFormatString: "YYYY"
                },
                axisY: {
                    //title: "",
                    //valueFormatString: "$#0"
                },
                data: [{
                    type: "line",
                    markerSize: 12,
                    xValueFormatString: "YYYY",
                    dataPoints: [{
                            x: new Date(2020, 1, 1),
                            y: 5,
                            markerType: "none",
                            markerColor: "#6B8E23"
                        },
                        {
                            x: new Date(2021, 1, 1),
                            y: 15,
                            markerType: "none",
                            markerColor: "#6B8E23"
                        },
                        {
                            x: new Date(2022, 1, 1),
                            y: 25,
                            markerType: "none",
                            markerColor: "tomato"
                        },
                        {
                            x: new Date(2023, 1, 1),
                            y: 35,
                            markerType: "none",
                            markerColor: "tomato"
                        },
                        {
                            x: new Date(2024, 1, 1),
                            y: 45,
                            markerType: "none",
                            markerColor: "tomato"
                        },
                        {
                            x: new Date(2025, 1, 1),
                            y: 55,
                            markerType: "none",
                            markerColor: "tomato"
                        },
                        {
                            x: new Date(2026, 1, 1),
                            y: 65,
                            markerType: "none",
                            markerColor: "tomato"
                        },
                        {
                            x: new Date(2027, 1, 1),
                            y: 75,
                            markerType: "none",
                            markerColor: "tomato"
                        },
                        {
                            x: new Date(2028, 1, 1),
                            y: 85,
                            markerType: "none",
                            markerColor: "tomato"
                        },
                        {
                            x: new Date(2029, 1, 1),
                            y: 95,
                            markerType: "none",
                            markerColor: "tomato"
                        }
                    ]
                }]
            });
            chart5.render();
            /*** Line Chart Script Ends ***/
        // } 

    </script>

<?php wp_footer(); ?>

</body>
</html>
