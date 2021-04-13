<!-- Footer Area Start Here -->
<footer>
    <div class="footer-area-top accent-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-logo">
                        <img src="{{ asset('assets/site/logo.png') }}" alt="logo">
                        <p>Neque porro quisquam est, qui is dolor emr ipsum quia dolor sit amet consec tetur is adipisci
                            velit, sed the quia non num quam. Neque porro quisquam est, qui dolor emr ipsum quia dolor
                            sit amet, consec tetur.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box">
                        <h3 class="title-bar-footer">Contact Us</h3>
                        <ul class="corporate-address">
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <p>Phone: +6789-875-2235</p>
                                <p>Fax: +2390-875-2235</p>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <p>support@tectas.com</p>
                                <p>boosted@domain.com</p>
                            </li>
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <p>202 New Hampshire Avenue</p>
                                <p>North #100, New York-2573</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box">
                        <h3 class="title-bar-footer">Quick Link</h3>
                        <ul class="useful-links">
                            <li>
                                <ul>
                                    <li><a href="{{ route('site.index') }}">About Us</a></li>
                                    <li><a href="{{ route('site.index') }}">Calsses Timetable</a></li>
                                    <li><a href="{{ route('site.index') }}">Popular Classes</a></li>
                                    <li><a href="{{ route('site.index') }}">Shop Product</a></li>
                                    <li><a href="{{ route('site.index') }}">Recent News</a></li>
                                    <li><a href="{{ route('site.index') }}">Contact Us</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-newslatter">
                        <h3 class="title-bar-footer">Newslatter</h3>
                        <p>Subscribe to get the latest news, update and offer information.</p>
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter email">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="icofont icofont-paper-plane"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                        <ul class="contact-social">
                            <li>
                                <a href="{{ route('site.index') }}" title="facebook">
                                    <i class="icofont icofont-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('site.index') }}" title="twitter">
                                    <i class="icofont icofont-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('site.index') }}" title="fa-google-plus">
                                    <i class="icofont icofont-social-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('site.index') }}" title="linkedin-square">
                                    <i class="icofont icofont-social-linkedin"></i>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-area-bottom accent-bg-light">
        <div class="container">
            <p>© {{date('Y')}}
                <span>
                    <a href="{{ route('site.index') }}">
                        Minas Mourão
                    </a>
                </span>. Todos os direitos reservados.

            </p>
        </div>
    </div>
</footer>
<!-- Footer Area End Here -->