<?php
/*
Template Name: Home Page Template
*/
get_header();
?>
<section class="mission-sec">
            <div class="container">
                <div class="section-title">
                    <h2>Our <span class="green-text">Mission</span></h2>
                </div>
                <p class="titl-tagline">
                    The Tree Project’s mission is to create a natural carbon capture system to hold 10% of C02 emissions caused by human activities by 2030. The project proposes to use trees as a natural means to sequester carbon. The use of trees will have the added benefits of creating habitat for wildlife and materials for industry. 
                </p>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="inr-img-wrap">
                            <div class="img-div">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/2030.png" class="img-responsive" alt="2030" />
                            </div>
                            <a href="javascript:;">2030</a>
                            <div class="dvdr"></div>
                            <p class="post-title-para">The 2030 target was chosen based on United Nations reports indicating that climate change needs to be addressed by this time or the effects will become catastrophic. According to the UN Intergovernmental Panel on Climate Change, at the current rate of emissions, human activities will have caused approximately 1.5°C of climate change (UN Intergovernmental Panel on Climate Change, 2018). The report also found that changes of just 0.5°C have led to increases in extreme weather events such as hot extremes and drought (UN Intergovernmental Panel on Climate Change, 2018).</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="inr-img-wrap">
                            <div class="img-div">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/United-states.png" class="img-responsive" alt="United States" />
                            </div>
                            <a href="javascript:;">United States</a>
                            <div class="dvdr"></div>
                            <p class="post-title-para">The United States emits approximately 5,140 million tons of C02 annually. Our target is to sequester approximately 514 million tons of C02 annually across the United States. Sequestering that much C02 will require planting approximately 42,833 million trees or 3,894 million trees per year for the next 11 years.</p>
                            <p class="green-italic-para">"Urban trees currently store 700 million tons of carbon, with an annual sequestration rate of 22.8 million tons."</p>
                            <p class="green-italic-para">- Nowak & Crane, 2002</p>
                        </div>
                    </div>
                </div>
                <div class="section-title mission-sub-section">
                    <h2>To support the project, we are asking for the following:</h2>
                    <div class="dvdr"></div>
                </div>
                <ul class="mission-ul">
                    <li>That each municipality designate land within their respective city or county to meet these targets;</li>
                    <li>That municipalities take responsibility to water the trees each year until a sufficient root system enables the trees to self maintain their water supply;</li>
                    <li>That the United States government allot a tax credit for individuals who purchase trees to plant for the initiative;</li>
                    <li>That all able-bodied citizens participate in the project so that the labor to complete the Tree Project is a 100% voluntary; and,</li>
                    <li>That major corporations provide discounts on products in support of the project or sponsorship to help fund the initiative.</li>
                </ul>
                <div class="btn-div text-center">
                    <button class="btn btn-custom green-bg round-look color-white" attr-href="<?php echo home_url('/'); ?>donate/">Donate</button>
                    <button class="btn btn-custom green-bg round-look color-white" attr-href="<?php echo home_url('/'); ?>volunteer/">Volunteer</button>
                    <button class="btn btn-custom green-bg round-look color-white" attr-href="<?php echo home_url('/'); ?>sponsor/">Sponsor</button>
                    <button class="btn btn-custom green-bg round-look color-white" attr-href="<?php echo home_url('/'); ?>pledge/">Pledge</button>
                </div>
            </div>
        </section>
        <section class="tab-sections">
            <div class="container">
                <div class="tab-wrap">
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-walnut" data-toggle="pill" href="#walnut" role="tab" aria-controls="pills-walnut" aria-selected="true">Walnut Creek</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-trees-benefits" data-toggle="pill" href="#trees-benefits" role="tab" aria-controls="pills-trees-benefits" aria-selected="false">The Benefits of Trees</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-vision" data-toggle="pill" href="#vision" role="tab" aria-controls="pills-vision" aria-selected="false">Vision</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- Walnut Tab Start --> 
                        <div class="tab-pane fade show active" id="walnut">
                            <div class="section-title" style="background-image: url('img/title-bg.png');">
                                <h2>Walnut <span class="green-text">Creek</span></h2>
                            </div>
                            <div class="box-wrap">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="tab-img-right">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/walnut-creek.png" class="img-responsive" alt="walnut-creek" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="tab-img-left">
                                            <h2 class="text-left m-0">3% of CO2 Emissions - 1.8 Million Tree - 10 year</h2>
                                            <div class="dvdr"></div>
                                            <p>Planet Green proposes that the City of Walnut Creek plant 1.8 million trees over the next 10 years to sequester 3% of the city’s carbon emissions. By planting 180,000 trees per year, the city will be sequestering approximately 21,323 MTCO2e annually at the ten-year mark. This initiative would help to offset the city’s greenhouse gas emissions in an effort to mitigate climate change. Increasing the number of urban trees would also provide a wide range of other benefits including removing contaminants from the air and reducing the use of air conditioning.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-wrap">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="tab-img-left">
                                            <h2 class="text-left m-0">Walnut Creek Context</h2>
                                            <div class="dvdr"></div>
                                            <p>The City of Walnut Creek has made extensive efforts to reduce greenhouse gas emissions through it’s Climate Action Plan (City of Walnut Creek, 2012). The city’s goal is to reduce emissions to 15% below 2005 rates by 2020 (Michael Baker International, 2016). Despite the city’s efforts, emissions continue to rise. By 2013 they were 10% above the 2005 levels (Michael Baker International, 2016). Emissions had decline in nearly every sector except transportation and off-road equipment, which increased significantly.  As of 2013, the city’s annual emissions were 710,780 MTCO2e (Michael Baker International, 2016).</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="tab-img-right">
                                            <div id="chartContainer1" style="height: 400px; width: 100%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-wrap">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="tab-img-right">
                                            <div id="chartContainer2" style="height: 400px; width: 100%;"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="tab-img-left">
                                            <p>The city currently has approximately 20,000 trees on public lands (City of Walnut Creek). There is also an unknown number of trees on private land throughout the city. The Climate Action Plan included encourage tree planting as part of the strategy to reduce GHG emissions (City of Walnut Creek, 2012). However, urban forestry did not have a significant role in the plan. The creation of a tree inventory was a major step in the city’s urban forestry initiative. The proposal is meant to build on the city’s efforts by improving urban forestry’s role in the plan to combat climate change.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Walnut Tab End --> 
                        <!-- Benefits of trees Tab Start --> 
                        <div class="tab-pane fade" id="trees-benefits">
                            <div class="section-title" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/title-bg.png');">
                                <h2>The benefits of <span class="green-text">Trees</span></h2>
                            </div>
                            <div class="box-wrap">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="tab-img-right">
                                            <div id="chartContainer3" style="height: 400px; width: 100%;"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="tab-img-left">
                                            <h2 class="text-left m-0">Carbon Sequestration</h2>
                                            <div class="dvdr"></div>
                                            <p>Trees absorb and hold carbon as they grow. This is valuable for offsetting anthropogenic emissions. The average carbon storage density for an urban forest is 25.1 ton of carbon per hectare (tC/ha) and 53.5 tC/ha in forest stands (Nowak & Crane, 2002). The benefits of trees as carbon sinks depends on a range of factors including location and species. A study conducted in Ontario, Canada found that slow growing species, such as walnut trees, are beneficial for long term carbon sequestration, while fast growing species such as poplar are better for short term sequestration (Wotherspoon, Thevathasan, Gordon, & Voroney, 2014).</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="tab-img-left">
                                            <p>One study pointed to limited benefits in tropical regions (Velasco, Roth, Norford, & Molina, 2016), while another found that planting temperate fruit crops, such as walnut trees, could be an effective means to sequester carbon to mitigate climate change (Velasco, Roth, Norford, & Molina, 2016). One study estimated that the national urban tree cover stores approximately 700 million tons of C02 and sequesters 22.8 million tons of carbon per year (Nowak & Crane, 2002). That is the equivalent of 0.35% of the total U.S. emissions from 2016 (United States Environmental Protection Agency, 2018). The table on the next page highlights the carbon sequestration capacity of several tree species.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-wrap">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="tab-img-left">
                                            <h2 class="text-left m-0">Cooling and Heating Island Effect Reduction</h2>
                                            <div class="dvdr"></div>
                                            <p>Trees can also help to cool buildings and reduce the heat island effect in urban areas. One study using computer simulation estimated that tree planting could reduce annual cooling costs by 25% for a typical residential building (McPherson, Economic modeling for large-scale tree plantings, 1991). The cooling effect has the added benefit of reducing the need for air conditioning, which causes green house gas emissions. The average cooling benefit for a tree is 288 Kw (McPherson, Accounting for benefits andcosts of urban greenspace, 1992). A study conducted in Davis, California found that street trees provided canopy cover for an average of 14% of streets and sidewalks, and that 25% coverage was attainable (Maco & McPherson, 2002).</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="tab-img-right">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/Cooling-and-heating.png" class="img-responsive" alt="walnut-creek" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="tab-img-left">
                                            <p>The research indicates that trees provide huge benefits for cooling urban areas and that there is an opportunity to maximize those benefits through additional tree planting. They are also important for mitigating the heat island effect, which is the phenomenon where urban areas are significantly warmer than rural ones due to the amount of hardscaping and other factors. Summer temperatures in urban areas are 2°F to 8°F warmer than their rural surroundings (Lawrence Berkley Laboratory, 1992). This increase in temperature increases the need for air condition, which generates more GHG emissions. Further, it can increase incidents of other environmental issues, such as smog (Lawrence Berkley Laboratory, 1992). Other studies have found that shade from trees in parking areas can help reduce vehicle emissions by reducing start-up emissions and the amount of energy required for cooling (Scott, Simpson, & McPherson, 1999).</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="tab-img-left">
                                            <h2 class="text-left m-0">Ecological Benefits</h2>
                                            <div class="dvdr"></div>
                                            <p>Trees play an important role in filtering contaminants from our environment. This is especially important in urban areas where there is the highest concentration on anthropogenic activities that generate pollutants and where the human population is concentrated. One study estimated that urban trees in the conterminous United States remove some 784,000 tons of air pollution annually (Nowav, Crane, & View of Mount Diablo from Walnut Creek. Source: TJ Gehlin. CC 2.0 6 Stevens, 2006). Another, found that a mature urban tree can capture 50 pounds of particulate per year (Dwyer et al). In addition to cleaning the air, trees help to mitigate stormwater and reduce runoff contamination. A study conducted in Dayton Ohio found that the existing urban trees reduced runoff by 7% (Dwyer et al).  A U.S. Environmental Protection Agency report highlighted the benefits f street trees, noting that the trees absorb water and pollutants and increase the soil’s ability to absorb water (U.S. Environmental Protection Agency, 2013). Trees also provide a range of other ecological benefits. Urban trees can help to conserve soils, create wildlife habitats and increase biodiversity (Dwyer, McPherson, Schroeder, & Rowntree, 1992). They can play an important role in riparian corridor restoration (Dwyer, McPherson, Schroeder, & Rowntree, 1992).</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="tab-img-left">
                                            <h2 class="text-left m-0">Quality of Life</h2>
                                            <div class="dvdr"></div>
                                            <p>Urban trees have been found to improve well-being and to reduce stress. For example, a study found that hospital patients with views of trees recover faster than other patients (Ulrich, 1984). Urban trees can also mitigate nuisances in the urban environment.  Field tests have found that tree belts can reduce noise by 50% (Dwyer et al.). Shade can also improve the pedestrian environment during warm summer periods. Shade from trees also reduces exposure to ultra-violet radiation from the sun, which can have negative health impacts (Heisler, Grant, Grimmond, & Souch, 1995).</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-wrap">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="tab-img-right">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/value-of-tree.png" class="img-responsive" alt="walnut-creek" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="tab-img-left">
                                            <h2 class="text-left m-0">Economic Value of Trees</h2>
                                            <div class="dvdr"></div>
                                            <p>Trees provide a number of economic benefits. Numerous studies have attempted to quantify the economic benefits of trees. A study conducted in Tucson, Arizona estimated the benefit value of trees as $15.48 per tree annually, which is a 2.6 benefit to cost ratio (McPherson, Accounting for benefits and costs of urban greenspace, 1992). Another study estimated the value of air pollutant removal by urban trees in the U.S. at $3.8 billion annually (Nowav, Crane, & Stevens, 2006).  Other research has indicated that urban trees increase property values, which in turn creates more tax revenue (Dwyer, McPherson, Schroeder, & Rowntree, 1992).</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Benefits of trees Tab End -->
                        <!-- Vision Tab Start --> 
                        <div class="tab-pane fade" id="vision">
                            <div class="section-title" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/title-bg.png');">
                                <h2>The <span class="green-text">Vision</span></h2>
                            </div>
                            <div class="box-wrap">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="tab-img-right">
                                            <div id="chartContainer4" style="height: 400px; width: 100%;"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="tab-img-left">
                                            <p>The proposal is to plant 1.8 million trees over the next 10 years to sequester approximately 3% of the city’s GHG emissions. That works out to 180,000 trees per year. The largest benefit will be from increasing the number of urban trees. However, due to the lack of sufficient space to meet the proposed targets within the city, Walnut Creek would need to partner with the surrounding county to achievethese goals. A partnership with Contra Costa County could allow for a range of programs including reforesting low productivity agricultural land and agroforestry initiatives. There are 4,183 harvested acres of fruit and nut crops in Contra Costa County, which brought a value of $25,673,000 in 2016 (Contra Costa County Department of Agriculture, 2018).</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-wrap">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="tab-img-left">
                                            <h2 class="text-left m-0">Methods</h2>
                                            <div class="dvdr"></div>
                                            <p>The numbers were determined based on a study, which estimated the carbon sequestration of trees in Sacramento, California (Nowak & Crane, 2002). There are numerous studies that estimate the sequestration capacity of various tree species. The Sacramento data was chosen because it is the information most likely to reflect the mixture of tree species and environment that would be found in Walnut Creek. Based on the data from the study, we estimated that the annual carbon sequestration capacity of a tree would be 0.012 tons of carbon. The actual carbon sequestration will depend on the variety of trees and planting location, as well as a range of other factors. The target is 3% of the city’s carbon emissions, which is approximately 21,323 MTCO2e annually.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="tab-img-right">
                                            <div id="chartContainer5" style="height: 400px; width: 100%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Vision Tab Ends -->
                    </div>
                </div>
            </div>
        </section>
<?php
get_footer();