<?php
/*
Template Name: Sponsor Page Template
*/
get_header();
?>
<section class="team-section">
            <div class="container">
                <div class="section-title" style="background-image: url('img/title-bg.png');">
                    <h2>Become a <span class="green-text">Corporate Sponsor</span></h2>
                </div>
                <div class="form-div">
                    <form>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label>Company Name:</label>
                                    <input type="text" class="form-control control-form" required="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label>Contact Name:</label>
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
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Contact Email:</label>
                                    <input type="email" class="form-control control-form" required="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Your Pledge:</label>
                                    <input type="text" class="form-control control-form" required="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group position-relative">
                                    <label>Your Company Logo:</label>
                                    <input id="title" class="form-control control-form" readonly="" />
                                    <input id="file_input" type="file" class="form-control control-form file-upload" />
                                    <button class="btn btn-custom upload-logo-btn">Browse...</button>
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
        <script type="text/javascript">
        $('#file_input').change(function() {
          //$('#title').val(this.value ? this.value.match(/([\w-_]+)(?=\.)/)[0] : '');
          $('#title').val(this.files && this.files.length ? this.files[0].name.split('.')[0] : '');

        })
    </script>
<?php
get_footer();