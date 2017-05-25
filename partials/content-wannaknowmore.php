<section class="parallax parallax-2 padding-top-150" style="">
    <div class="container text-left">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="font-jaapokki-reg margin-bottom-10 text-uppercase title">
                    Want to know more about me?
                </h2>

                <h3 class="size-25 desc">
                    Ask anything you like. It would be my pleasure.
                </h3>
            </div>
        </div>
        <div class="row">
            <!-- FORM -->
            <div class="col-md-9 col-sm-9">

                <!--
                MESSAGES

                How it works?
                The form data is posted to php/contact.php where the fields are verified!
                php.contact.php will redirect back here and will add a hash to the end of the URL:
                #alert_success 		= email sent
                #alert_failed		= email not sent - internal server error (404 error or SMTP problem)
                #alert_mandatory	= email not sent - required fields empty
                Hashes are handled by assets/js/contact.js

                Form data: required to be an array. Example:
                contact[email][required]  WHERE: [email] = field name, [required] = only if this field is required (PHP will check this)
                Also, add `required` to input fields if is a mandatory field.
                Example: <input required type="email" value="" class="form-control" name="contact[email][required]">

                PLEASE NOTE: IF YOU WANT TO ADD OR REMOVE FIELDS (EXCEPT CAPTCHA), JUST EDIT THE HTML CODE, NO NEED TO EDIT php/contact.php or javascript
                ALL FIELDS ARE DETECTED DINAMICALY BY THE PHP

                WARNING! Do not change the `email` and `name`!
                contact[name][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
                contact[email][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
            -->

            <!-- Alert Success -->
            <div id="alert_success" class="alert alert-success margin-bottom-30">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Thank You!</strong> Your message successfully sent!
            </div><!-- /Alert Success -->


            <!-- Alert Failed -->
            <div id="alert_failed" class="alert alert-danger margin-bottom-30">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>[SMTP] Error!</strong> Internal server error!
            </div><!-- /Alert Failed -->


            <!-- Alert Mandatory -->
            <div id="alert_mandatory" class="alert alert-danger margin-bottom-30">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Sorry!</strong> You need to complete all mandatory (*) fields!
            </div><!-- /Alert Mandatory -->


            <form action="<?=get_template_directory_uri();?>/php/contact.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <input type="hidden" name="action" value="contact_send" />

                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="contact:name">Full Name *</label>
                                <input required type="text" value="" class="form-control" name="contact[name][required]" id="contact:name">
                            </div>
                            <div class="col-md-6">
                                <label for="contact:email">E-mail Address *</label>
                                <input required type="email" value="" class="form-control" name="contact[email][required]" id="contact:email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="contact:message">Message *</label>
                                <textarea required maxlength="10000" rows="8" class="form-control" name="contact[message]" id="contact:message"></textarea>
                            </div>
                        </div>
                    </div>

                </fieldset>

                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-default noradius"> SEND MESSAGE</button>
                    </div>
                </div>
            </form>

        </div>
        <div class="col-sm-3 col-md-3 hidden-xs">
            <img src="<?=get_stylesheet_directory_uri()?>/assets/img/wizards/wizard-00006.gif" class="img-responsive"/>
        </div>
    </div>
</div>
</section>
