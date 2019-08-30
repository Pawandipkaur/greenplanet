<?php
/*
Template Name: Graph Page Template
*/
get_header();
?>
 <section class="team-section">
            <div class="container">
                <div class="section-title" style="background-image: url('img/title-bg.png');">
                    <h2><span class="green-text">Graphs</span></h2>
                </div>
                <p class="titl-tagline g-title">
                   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.
                </p>
                </div>
        </section>
       
       <!--  <div id="chartContainer" style="height: 650px; width: 100%; margin-bottom: 40px;border:1px solid"></div> -->
        <div class="container">
        <div id="co2-widget-container" class="chartcon"></div><script type="text/javascript" src="https://www.climatelevels.org/graphs/js/co2.php?theme=grid-light&pid=2degreesinstitute"></script><br><br>


         <div id="ch4-widget-container" class="chartcon"></div><script type="text/javascript" src="https://www.climatelevels.org/graphs/js/ch4.php?theme=grid-light&pid=2degreesinstitute"></script>


         </div><br><br>
<?php
get_footer();