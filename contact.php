<?php require('parts/header.php'); ?>
<body>
    <?php require('parts/preloader.php'); ?>
    <div id="page" class="page">
        <?php require('parts/navbar.php'); ?>
        <section class="gr--cloud pb-60 contacts-1 inner-page-hero contacts-section division">
            <div class="container-xxl">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contacts-info">
                            <span class="module-subtitle color--purple">Contact Us</span>
                            <h2 class="fs-60">Get in touch <br>with our team </h2>
                            <p class="fs-18">Want to learn more about MediaSane, report an issue, or suggest improvements? Let us know what you are looking for and we will get back to you right away.</p>
                            <p class="fs-18">Your feedback drives our platform forward, so don't hesitate to reach out with any questions, bugs, or bright ideas. We're here to listen, respond quickly, and make your experience better every single day.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-wrapper">
                            <div id="contactstatus"></div>
                            <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $recaptcha['public']; ?>"></script>
                            <script type="text/javascript">grecaptcha.ready(() => {grecaptcha.execute('<?php echo $recaptcha['public']; ?>', {action: 'contact'}).then(token => {document.querySelector('#recaptcha').value = token})});</script>
                            <form id="contactform" name="contactform" class="row contact-form needs-validation" method="POST" novalidate>
                                <input id="msg-type" type="hidden" name="formtype" value="contact">
                                <input id="recaptcha" type="hidden" name="recaptcha">
                                <div class="col-md-12 input-subject">
                                    <select id="msg-subject" class="form-select subject" name="msg-subject" aria-label="Default select example">
                                        <option selected>This question is about...</option>
                                        <option>MediaSane Project</option>
                                        <option>Using Application</option>
                                        <option>Troubleshooting</option>
                                        <option>Backup/Restore</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <input id="msg-from" type="text" class="form-control name" name="msg-from" placeholder="Your Name*">
                                </div>
                                <div class="col-md-12">
                                    <input id="msg-mail" type="email" name="email" class="form-control email" name="msg-mail" placeholder="Email Address*">
                                </div>
                                <div class="col-md-12">
                                    <textarea id="msg-body" class="form-control message" name="msg-body" rows="6" placeholder="I have a problem with..."></textarea>
                                </div>
                                <div class="col-md-12">
                                    <div id="progress-contactform" class="progress" style="display:none;height:4px;">
                                        <div class="progress-bar bg-success h-100" role="progressbar" style="width:0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 form-btn">
                                    <button type="submit" class="btn btn-md r-08 btn--purple submit">
                                        <span class="btn-text">
                                            <span class="anim-txt">Submit Request</span>
                                            <span class="anim-txt">Submit Request</span>
                                        </span>
                                    </button>
                                </div>
                                <div class="col-lg-12 contact-form-msg">
                                    <span class="loading"></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="divider">
        <section class="py-120 contact-boxes division">
            <div class="container-xxl">
                <div class="row row-cols-1 row-cols-md-3">
                    <div id="cb-1-1" class="col">
                        <div class="contact-box">
                            <span class="main-font fs-24">Contribute & Collaborate</span>
                            <p>Enhance MediaSane's capabilities for the global Linux community. Join developers, testers, and documentation experts in building the ultimate media rename tool.</p>
                            <a rel="noreferrer nofollow noopener" target="_blank" href="https://github.com/mediasane/app/blob/main/CONTRIBUTING.md" class="btn btn-sm r-08 btn--tra-black">
                                <span class="btn-text">
                                    <span class="anim-txt">Fork & Contribute</span>
                                    <span class="anim-txt">Fork & Contribute</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div id="cb-1-2" class="col">
                        <div class="contact-box">
                            <span class="main-font fs-24">Explore the Source</span>
                            <p>Dive into the clean, documented Python and PyQt6 codebase. Perfect for developers looking to learn or integrate features into their own projects.</p>
                            <a rel="noreferrer nofollow noopener" target="_blank" href="https://github.com/mediasane/app/tree/main" class="btn btn-sm r-08 btn--tra-black">
                                <span class="btn-text">
                                    <span class="anim-txt">View Source Code</span>
                                    <span class="anim-txt">View Source Code</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div id="cb-1-3" class="col">
                        <div class="contact-box">
                            <span class="main-font fs-24">FAQs & Support</span>
                            <p>Find quick answers to common questions about installation, usage, safety features, and troubleshooting. Get the most out of MediaSane safely and efficiently.</p>
                            <a href="/faq/" class="btn btn-sm r-08 btn--tra-black">
                                <span class="btn-text">
                                    <span class="anim-txt">Browse FAQs</span>
                                    <span class="anim-txt">Browse FAQs</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php require('parts/cta.php'); ?>
        <?php require('parts/footer.php'); ?>
        <?php require('parts/scripts.php'); ?>
    </div>
</body>
</html>