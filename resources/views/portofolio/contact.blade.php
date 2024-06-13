@extends('master')

@section('konten')

<section class="contact section-padding" id="section_5">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-8 col-12">
                <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                    <img src="{{ asset('images/dodon2.png') }}" class="avatar-image img-fluid" alt="">

                    <h2 class="text-white ms-4 mb-0">Say Hi</h2>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-lg-3 col-md-6 col-12 pe-lg-0">
                <div class="contact-info contact-info-border-start d-flex flex-column">
                    <strong class="site-footer-title d-block mb-3">Skills</strong>

                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a target="_blank" href="https://codesaya.com/a/pengenalan-html-dan-css-vxvqxfltiz/" class="footer-menu-link">HTML + CSS</a></li>

                        <li class="footer-menu-item"><a target="_blank" href="https://www.dicoding.com/blog/apa-itu-javascript-fungsi-dan-contohnya/"   class="footer-menu-link">JavaScript</a></li>

                        <li class="footer-menu-item"><a target="_blank" href="https://www.biznetgio.com/news/apa-itu-php" class="footer-menu-link">PHP</a></li>

                        <li class="footer-menu-item"><a target="_blank" href="https://www.biznetgio.com/news/apa-itu-laravel" class="footer-menu-link">Laravel</a></li>
                    </ul>

                    <strong class="site-footer-title d-block mt-4 mb-3">Stay connected</strong>

                    <ul class="social-icon">
                        <li class="social-icon-item"><a target="_blank" href="https://github.com/Fakhri-Dodon" class="social-icon-link bi-github"></a></li>

                        <li class="social-icon-item"><a target="_blank" href="https://www.instagram.com/fakhri_dodon/" class="social-icon-link bi-instagram"></a></li>

                        <li class="social-icon-item"><a href="#" class="social-icon-link bi-pinterest"></a></li>

                        <li class="social-icon-item"><a href="https://www.youtube.com/templatemo" class="social-icon-link bi-youtube"></a></li>
                    </ul>

                    <strong class="site-footer-title d-block mt-4 mb-3">Start a project</strong>

                    <p class="mb-0">I’m available for freelance projects</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 ps-lg-0">
                <div class="contact-info d-flex flex-column">
                    <strong class="site-footer-title d-block mb-3">About</strong>

                    <p class="mb-2">
                        Fakhri is a professional web developer. Feel free to get in touch with me.
                    </p>

                    <strong class="site-footer-title d-block mt-4 mb-3">Email</strong>

                    <p>
                        <a href="mailto:fakhridodon0610@gmail.com">
                            fakhridodon0610@gmail.com
                        </a>
                    </p>

                    <strong class="site-footer-title d-block mt-4 mb-3">Call</strong>

                    <p class="mb-0">
                        <a href="tel: 0838-0454-9773">
                            0838-0454-9773
                        </a>
                    </p>
                </div>
            </div>

            <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                <form action="#" method="get" class="custom-form contact-form" role="form">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-floating">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="">
                                
                                <label for="floatingInput">Name</label>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12"> 
                            <div class="form-floating">
                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                
                                <label for="floatingInput">Email address</label>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="form-check form-check-inline">
                                <input name="website" type="checkbox" class="form-check-input" id="inlineCheckbox1" value="1">

                                <label class="form-check-label" for="inlineCheckbox1">
                                    <i class="bi-globe form-check-icon"></i>
                                    <span class="form-check-label-text">HTML + CSS</span>
                                </label>
                          </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="form-check form-check-inline">
                                <input name="branding" type="checkbox" class="form-check-input" id="inlineCheckbox2" value="1">

                                <label class="form-check-label" for="inlineCheckbox2">
                                    <i class="bi-lightbulb form-check-icon"></i>
                                    <span class="form-check-label-text">JavaScript</span>
                                </label>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="form-check form-check-inline">
                                <input name="ecommerce" type="checkbox" class="form-check-input" id="inlineCheckbox3" value="1">

                                <label class="form-check-label" for="inlineCheckbox3">
                                    <i class="bi-phone form-check-icon"></i>
                                    <span class="form-check-label-text">PHP</span>
                                </label>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="form-check form-check-inline me-0">
                                <input name="seo" type="checkbox" class="form-check-input" id="inlineCheckbox4" value="1">

                                <label class="form-check-label" for="inlineCheckbox4">
                                    <i class="bi-google form-check-icon"></i>
                                    <span class="form-check-label-text">Laravel</span>
                                </label>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12">
                            <div class="form-floating">
                                <textarea class="form-control" id="message" name="message" placeholder="Tell me about the project"></textarea>
                                
                                <label for="floatingTextarea">Tell me about the project</label>
                            </div>
                        </div>

                        <div class="col-lg-3 col-12 ms-auto">
                            <button type="submit" class="form-control">Send</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection