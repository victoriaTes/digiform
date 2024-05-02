<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Form | Pembukaan Rekening Online</title>
	<link rel="icon" type="image/png" href="{!! asset('images/bvic-logo.ico') !!}">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Dropzone CSS -->
    <link rel="stylesheet" href="{!! asset('admindesigns/vendor/plugins/dropzone/css/dropzone.css') !!}">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('admindesigns/assets/skin/default_skin/css/theme.css') !!}">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('admindesigns/assets/admin-tools/admin-forms/css/admin-forms.css') !!}">

  </head>
  <body class="form-uploaders-page" data-spy="scroll" data-target="#nav-spy" data-offset="300">
    <!-- Begin: Content -->
    <section id="content" class="table-layout animated fadeIn">
      <!-- begin: .tray-center -->
      <div class="tray tray-center pv40 ph30 va-t posr animated-delay animated-long" data-animate='["800","fadeIn"]'>
        <h2 class="lh30 mtn text-center">Selamat Datang Di Pembukaan Rekening Digital <b>Bank Victoria International</b></h2>
        <p class="lead mb40 text-center">3 Langkah Tepat Untuk Mendapatkan Solusi Finansial Terbaik</p>

        <!-- Form Wizard -->
        <div class="admin-form col-md-10 center-block">
            <form method="post" action="/" id="form-wizard">
                <div class="wizard steps-bg justified">

                    <!-- Wizard step 1 -->
                    <!-- <h4 class="wizard-section-title"><i class="fa fa-user pr5"></i> Verifikasi NIK</h4>
                    <section class="wizard-section">
                      <div class="section col-md-6 center-block">
                          <div class="smart-widget sm-right smr-80">
                              <label class="field prepend-icon">
                                  <input type="text" name="sub2" id="sub2" class="gui-input" placeholder="Mohon Masukkan Nomor NIK Anda">
                                  <label for="s" class="field-icon"><i class="fa fa-search"></i>
                                  </label>
                              </label>
                              <button type="submit" class="button">Cari</button>
                          </div>
                      </div>
                    </section> -->

                    <!-- Wizard step 2 -->
                    <h4 class="wizard-section-title"><i class="fa fa-dollar pr5"></i> Unggah KTP</h4>
                    <section class="wizard-section">

                        <div class="section">
                            <div class="col-xs-12 col-sm-8 pl30  center-block">
                                <div class="tray-bin pl10 mb10" style="min-height: 250px;">
                                    <h5 class="text-muted mt10 fw600 pl10"><i class="fa fa-exclamation-circle text-info fa-lg pr10"></i> Unggah KTP </h5>
                                    <form action="/file-upload" class="dropzone dropzone-sm" id="dropZone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="section" style="display:none;">
                            <div class="col-xs-12 col-sm-8 pl30  center-block">
                                <div class="tray-bin pl10 mb10" style="min-height: 250px;">
                                    <h5 class="text-muted mt10 fw600 pl10"><i class="fa fa-exclamation-circle text-info fa-lg pr10"></i> Unggah Foto Diri </h5>
                                    <form action="/file-upload" class="dropzone dropzone-sm" id="dropZone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end section -->

                    </section>

                    <!-- Wizard step 3 -->
                    <h4 class="wizard-section-title"><i class="fa fa-shopping-cart pr5"></i> Input Data</h4>
                    <section class="wizard-section">

                        <div class="section">
                            <label for="email" class="field prepend-icon">
                                <input type="email" name="email" id="email" class="gui-input" placeholder="Email address">
                                <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                </label>
                            </label>
                        </div>
                        <!-- end section -->

                        <div class="section">
                            <label for="mobile" class="field prepend-icon">
                                <input type="tel" name="mobile" id="mobile" class="gui-input" placeholder="Telephone / moble number">
                                <label for="mobile" class="field-icon"><i class="fa fa-phone-square"></i>
                                </label>
                            </label>
                        </div>
                        <!-- end section -->

                    </section>

                    <!-- Wizard step 4 -->
                    <h4 class="wizard-section-title"><i class="fa fa-shopping-cart pr5"></i> Kirim Data</h4>
                    <section class="wizard-section">

                        <div class="section">
                            <label for="email" class="field prepend-icon">
                                <input type="email" name="email" id="email" class="gui-input" placeholder="Email address" disabled>
                                <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                </label>
                            </label>
                        </div>
                        <!-- end section -->

                        <div class="section">
                            <label for="mobile" class="field prepend-icon">
                                <input type="tel" name="mobile" id="mobile" class="gui-input" placeholder="Telephone / moble number" disabled>
                                <label for="mobile" class="field-icon"><i class="fa fa-phone-square"></i>
                                </label>
                            </label>
                        </div>
                        <!-- end section -->

                    </section>                    
                </div>
                <!-- End: Wizard -->

            </form>
            <!-- End Account2 Form -->

        </div>
        <!-- end: .admin-form -->
      </div>

    </section>

    <style>    
        /*page demo styles*/
        .wizard .steps .fa,
        .wizard .steps .glyphicon,
        .wizard .steps .glyphicon {
            display: none;
        }
    </style>

    <style>
        /*dropzone demo css*/
        .dz-demo .dz-message {
            opacity: 0 !important;
        }
        .dropzone .dz-preview.example-preview .dz-success-mark,
        .dropzone-previews .dz-preview.example-preview .dz-success-mark {
            opacity: 1;
        }
        .dropzone .dz-preview.example-preview .dz-error-mark,
        .dropzone-previews .dz-preview.example-preview .dz-error-mark {
            opacity: 0;
        }
    </style>

    <!-- BEGIN: PAGE SCRIPTS -->
    <!-- jQuery -->
    <script type="text/javascript" src="{!! asset('admindesigns/vendor/jquery/jquery-1.11.1.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('admindesigns/vendor/jquery/jquery_ui/jquery-ui.min.js') !!}"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="{!! asset('admindesigns/assets/js/bootstrap/bootstrap.min.js') !!}"></script>

    <!-- Page Plugins -->
    <script type="text/javascript" src="{!! asset('admindesigns/assets/admin-tools/admin-forms/js/advanced/steps/jquery.steps.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('admindesigns/assets/admin-tools/admin-forms/js/jquery.validate.min.js') !!}"></script>

    <!-- Dropzone JS -->
    <script type="text/javascript" src="{!! asset('admindesigns/vendor/plugins/dropzone/dropzone.min.js') !!}"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="{!! asset('admindesigns/assets/js/utility/utility.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('admindesigns/assets/js/main.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('admindesigns/assets/js/demo.js') !!}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core    
            Core.init();

            // Init Demo JS     
            Demo.init();

            // Dropzone autoattaches to "dropzone" class.
            // Configure Dropzone options
            Dropzone.options.dropZone = {
                paramName: "file", // The name that will be used to transfer the file
                maxFilesize: 0, // MB

                addRemoveLinks: true,
                dictDefaultMessage: '<i class="fa fa-cloud-upload"></i> \
                <span class="main-text"><b>Drop Files</b> to upload</span> <br /> \
                <span class="sub-text">(or click)</span> \
                ',
                dictResponseError: 'Server not Configured'
            };

            // Form Wizard 
            var form = $("#form-wizard");
            form.validate({
                errorPlacement: function errorPlacement(error, element) {
                    element.before(error);
                },
                rules: {
                    confirm: {
                        equalTo: "#password"
                    }
                }
            });
            form.children(".wizard").steps({
                headerTag: ".wizard-section-title",
                bodyTag: ".wizard-section",
                onStepChanging: function(event, currentIndex, newIndex) {
                    form.validate().settings.ignore = ":disabled,:hidden";
                    return form.valid();
                },
                onFinishing: function(event, currentIndex) {
                    form.validate().settings.ignore = ":disabled";
                    return form.valid();
                },
                onFinished: function(event, currentIndex) {
                    alert("Submitted!");
                }
            });

            // Demo Wizard Functionality
            var formWizard = $('.wizard');
            var formSteps = formWizard.find('.steps');

            $('.wizard-options .holder-style').on('click', function(e) {
                e.preventDefault();

                var stepStyle = $(this).data('steps-style');

                var stepRight = $('.holder-style[data-steps-style="steps-right"');
                var stepLeft = $('.holder-style[data-steps-style="steps-left"');
                var stepJustified = $('.holder-style[data-steps-style="steps-justified"');

                if (stepStyle === "steps-left") {
                    stepRight.removeClass('holder-active');
                    stepJustified.removeClass('holder-active');
                    formWizard.removeClass('steps-right steps-justified');
                }
                if (stepStyle === "steps-right") {
                    stepLeft.removeClass('holder-active');
                    stepJustified.removeClass('holder-active');
                    formWizard.removeClass('steps-left steps-justified');
                }
                if (stepStyle === "steps-justified") {
                    stepLeft.removeClass('holder-active');
                    stepRight.removeClass('holder-active');
                    formWizard.removeClass('steps-left steps-right');
                }

                // Assign new style 
                if ($(this).hasClass('holder-active')) {
                    formWizard.removeClass(stepStyle);
                } else {
                    formWizard.addClass(stepStyle);
                }

                // Assign new active holder
                $(this).toggleClass('holder-active');
            });

            // Demo code 
            $('.example-preview').on('click', 'a.dz-remove', function() {
                $(this).parent('.example-preview').remove();
            });            
        });
    </script>
    <!-- END: PAGE SCRIPTS -->    
  </body>
</html>
