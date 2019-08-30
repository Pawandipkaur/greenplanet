<?php
/*
Template Name: Volunteer Page Template
*/
get_header();
?>
<section class="team-section">
            <div class="container">
                <div class="section-title" style="background-image: url('img/title-bg.png');">
                    <h2>Become a <span class="green-text">City Team Captain</span></h2>
                </div>
                <p class="titl-tagline">
                    Each city will need 1 direct contact. This will be a person who can articulate the message to the city planning commission and pitch the project. This person will also need to stay connected to the project throughout the 10yr life cycle of this plan.
                </p>
                <div class="form-div">
                    <form>
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Name of City your would like to represent:</label>
                                    <input type="text" class="form-control control-form" required="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Individual Name:</label>
                                    <input type="text" class="form-control control-form" required="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Contact Number:</label>
                                    <input type="text" class="form-control control-form" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Email Address:</label>
                                    <input type="email" class="form-control control-form" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Number of hours per week you can devote to this project:</label>
                                    <input type="text" class="form-control control-form" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-note">
                                    <p>
                                        <span class="note-ttl">Please note:</span> Compensation for this volunteer role may be very little to nothing at all but your contribution to the planet will be forever appreciated.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group text-center">
                                    <input type="submit" value="Submit" class="btn btn-custom green-bg round-look color-white" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
<?php
get_footer();