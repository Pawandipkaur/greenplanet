<?php
/*
Template Name: Donate Page Template
*/
get_header();
?>
<section class="team-section">
            <div class="container">
                <div class="section-title" style="background-image: url('img/title-bg.png');">
                    <h2>Become an <span class="green-text">Individual Donor</span></h2>
                </div>
                <div class="form-div">
                    <form>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Company Name:</label>
                                    <input type="text" class="form-control control-form" required="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Contact Number:</label>
                                    <input type="text" class="form-control control-form" required="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Contact Email:</label>
                                    <input type="email" class="form-control control-form" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Your Pledge: <br>&nbsp;</label>

                                    <input type="text" class="form-control control-form" required="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group position-relative">
                                    <label>Remain annoymous or include your name so we can publish it:</label>
                                    <input type="text" class="form-control control-form" required="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Use your credit card or PayPal to make a donation:</label>
                                    <div class="cstm-radio-flx d-flex align-items-center min-height-42">
                                        <label class="cstm-rdio">Credit Card
                                            <input type="radio" name="Card" checked="checked" value="credit_card">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="cstm-rdio">Paypal
                                            <input type="radio" name="Card" value="paypal">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="main-div"></div>
                        
                        
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group text-center">
                                    <input type="submit" value="Donate Now" class="btn btn-custom green-bg round-look color-white" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <script type="text/javascript">
        $(".payment-form").hide();
          $('.main-div').html('<div class="credit-card payment-form"><div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="section-title"><h2>Credit Card</h2><div class="dvdr"></div></div></div></div><div class="row"><div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"><div class="form-group"><label>Card Number:</label><input type="text" class="form-control control-form" required=""></div></div><div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"><div class="form-group"><label>Name on Card:</label><input type="text" class="form-control control-form" required=""></div></div><div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"><div class="form-group"><label>Expiry Date:</label><input type="date" class="form-control control-form" required=""></div></div><div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"><div class="form-group"><label>CVV:</label><input type="text" class="form-control control-form" required=""></div></div></div></div>');
        $('input[type="radio"]').click(function(){
            var demovalue = $(this).val();
            if(demovalue == 'credit_card'){
                $('.main-div').html('<div class="credit-card payment-form"><div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="section-title"><h2>Credit Card</h2><div class="dvdr"></div></div></div></div><div class="row"><div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"><div class="form-group"><label>Card Number:</label><input type="text" class="form-control control-form" required=""></div></div><div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"><div class="form-group"><label>Name on Card:</label><input type="text" class="form-control control-form" required=""></div></div><div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"><div class="form-group"><label>Expiry Date:</label><input type="date" class="form-control control-form" required=""></div></div><div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"><div class="form-group"><label>CVV:</label><input type="text" class="form-control control-form" required=""></div></div></div></div>');
            } else {
                $('.main-div').html('<div class="paypal-section payment-form"><div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="section-title"><h2>Paypal</h2><div class="dvdr"></div></div><div class="form-group"><label>Email Address:</label><input type="email" class="form-control control-form" required=""></div></div></div></div>');
            }
        });
    </script>
<?php
get_footer();