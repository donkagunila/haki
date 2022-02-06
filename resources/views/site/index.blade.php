@extends('layouts.master')

@section('content')
    <div class="site-wrap">
        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

    @include('layouts.nav')

        <div class="site-blocks-cover overlay" style="background-image: url({{ asset('images/hero_bg_1.jpg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">


                        <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">Clearing and Fowarding
                            <br> Company</h1>
                        <p><a href="#" class="btn btn-primary py-3 px-5 text-white">Get Started!</a></p>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center no-gutters align-items-stretch overlap-section">
                <div class="col-md-4">
                    <div class="feature-1 pricing h-100 text-center">
                        <div class="icon">
                            <span class="icon-dollar"></span>
                        </div>
                        <h2 class="my-4 heading">Best Prices</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsum odio minima tempora animi iure.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="free-quote bg-dark h-100">
                        <h2 class="my-4 heading  text-center">Get Free Quote</h2>
                        <form method="post">
                            <div class="form-group">
                                <label for="fq_name">Name</label>
                                <input type="text" class="form-control btn-block" id="fq_name" name="fq_name" placeholder="Enter Name">
                            </div>
                            <div class="form-group mb-4">
                                <label for="fq_email">Email</label>
                                <input type="text" class="form-control btn-block" id="fq_email" name="fq_email" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary text-white py-2 px-4 btn-block" value="Get Quote">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-3 pricing h-100 text-center">
                        <div class="icon">
                            <span class="icon-phone"></span>
                        </div>
                        <h2 class="my-4 heading">24/7 Support</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsum odio minima tempora animi iure.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center border-primary">
                        <h2 class="mb-0 text-primary">Our Services</h2>
                        <p class="color-black-opacity-5">Clearing and fowarding</p>
                    </div>
                </div>
                <div class="row align-items-stretch">
                    <div class="col-md-6 col-lg-6 mb-4 mb-lg-0">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-travel"></span></div>
                            <div>
                                <h3>Freight Fowarding Services</h3>
                                <p>
                                    We facilitate the entire forwarding process according to your specifcations inalignment with the requirements of the import and export countries.
                                    We applystrictly defined quality criteria in the selection of our sea freight carriers. Ourextensive global network enables us to transport goods in the most efhcient andcost-effective manner transferring the ultimate benefit to the customers
                                    Lii tse
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-4 mb-lg-0">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-sea-ship-with-containers"></span></div>
                            <div>
                                <h3>Sea Freight Services</h3>
                                <p>
                                    We ship a large volume of general cargo, and have ongoing partnerships withmany businesses for their sea freight needs
                                    For private clients who want a reliable service, we can transport goods such aspersonal effects, cars and specialised items. Modern IT systems provide anup-to-date overview of the shipment status at any time
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 mb-4 mt-5 mb-lg-0">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-frontal-truck"></span></div>
                            <div>
                                <h3>Customs Clearing Services</h3>
                                <p>
                                    Our agents specialize in providing skilled Customs Clearing Service with costeffective manner as well; this is achieved by paying attention on every possibleaspect. It is our goal to ensure we save time and money of our clients by followingproper customs procedure. For further inquiry, please contact us, our agent will behappy to answer your questions
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="site-section block-13">
            <!-- <div class="container"></div> -->


            <div class="owl-carousel nonloop-block-13">
                <div>
                    <a href="#" class="unit-1 text-center">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <div class="unit-1-text">
                            <h3 class="unit-1-heading">Storage</h3>
                        </div>
                    </a>
                </div>

                <div>
                    <a href="#" class="unit-1 text-center">
                        <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                        <div class="unit-1-text">
                            <h3 class="unit-1-heading">Air Transports</h3>
                        </div>
                    </a>
                </div>

                <div>
                    <a href="#" class="unit-1 text-center">
                        <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                        <div class="unit-1-text">
                            <h3 class="unit-1-heading">Cargo Transports</h3>
                        </div>
                    </a>
                </div>

                <div>
                    <a href="#" class="unit-1 text-center">
                        <img src="images/img_4.jpg" alt="Image" class="img-fluid">
                        <div class="unit-1-text">
                            <h3 class="unit-1-heading">Cargo Ship</h3>
                        </div>
                    </a>
                </div>

                <div>
                    <a href="#" class="unit-1 text-center">
                        <img src="images/img_5.jpg" alt="Image" class="img-fluid">
                        <div class="unit-1-text">
                            <h3 class="unit-1-heading">Ware Housing</h3>
                        </div>
                    </a>
                </div>


            </div>
        </div>




        <div class="site-section bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center border-primary">
                        <h2 class="font-weight-light text-primary">More Services</h2>
                        <p class="color-black-opacity-5">We Offer The Following Services</p>
                    </div>
                </div>
                <div class="row align-items-stretch">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-travel"></span></div>
                            <div>
                                <h3>Air Air Freight</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-sea-ship-with-containers"></span></div>
                            <div>
                                <h3>Ocean Freight</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-frontal-truck"></span></div>
                            <div>
                                <h3>Ground Shipping</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-barn"></span></div>
                            <div>
                                <h3>Warehousing</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-platform"></span></div>
                            <div>
                                <h3>Storage</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-car"></span></div>
                            <div>
                                <h3>Delivery Van</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                                <p><a href="#">Learn More</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(images/hero_bg_2.jpg); background-attachment: fixed;">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
                        <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-single-big mb-4 d-inline-block popup-vimeo"><span class="icon-play"></span></a>
                        <h2 class="text-white font-weight-light mb-5 h1">View Our Services By Watching This Short Video</h2>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-section border-bottom">
            <div class="container">

                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center border-primary">
                        <h2 class="font-weight-light text-primary">Testimonials</h2>
                    </div>
                </div>

                <div class="slide-one-item home-slider owl-carousel">
                    <div>
                        <div class="testimonial">
                            <figure class="mb-4">
                                <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-3">
                                <p>John Smith</p>
                            </figure>
                            <blockquote>
                                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                            </blockquote>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial">
                            <figure class="mb-4">
                                <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-3">
                                <p>Christine Aguilar</p>
                            </figure>
                            <blockquote>
                                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                            </blockquote>
                        </div>
                    </div>

                    <div>
                        <div class="testimonial">
                            <figure class="mb-4">
                                <img src="images/person_4.jpg" alt="Image" class="img-fluid mb-3">
                                <p>Robert Spears</p>
                            </figure>
                            <blockquote>
                                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                            </blockquote>
                        </div>
                    </div>

                    <div>
                        <div class="testimonial">
                            <figure class="mb-4">
                                <img src="images/person_5.jpg" alt="Image" class="img-fluid mb-3">
                                <p>Bruce Rogers</p>
                            </figure>
                            <blockquote>
                                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                            </blockquote>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <div class="site-section bg-light">
            <div class="container">

                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center border-primary">
                        <h2 class="font-weight-light text-primary">Contact Us</h2>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-7 mb-5">



                        <form action="#" class="p-5 bg-white">


                            <div class="row form-group">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label class="text-black" for="fname">First Name</label>
                                    <input type="text" id="fname" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="text-black" for="lname">Last Name</label>
                                    <input type="text" id="lname" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">

                                <div class="col-md-12">
                                    <label class="text-black" for="email">Email</label>
                                    <input type="email" id="email" class="form-control">
                                </div>
                            </div>



                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
                                </div>
                            </div>


                        </form>
                    </div>
                    <div class="col-md-5">

                        <div class="p-4 mb-3 bg-white">
                            <p class="mb-0 font-weight-bold">Address</p>
                            <p class="mb-4">
                                Arusha Cargo Clearing & Forwarding Ltd
                                P0.Box141115 koine DriveLuther House 4th floor
                                Daar es salaam Tanzania
                                POBox 8C03, Themi Road,
                                Arusha, Tanzania
                            </p>

                            <p class="mb-0 font-weight-bold">Phone</p>
                            <p class="mb-4"><a href="#">255766504860</a></p>

                            <p class="mb-0 font-weight-bold">Email Address</p>
                            <p class="mb-0"><a href="#">kiulam7agmail.com</a></p>

                        </div>


                    </div>
                </div>
            </div>
        </div>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-3">
                                <h2 class="footer-heading mb-4">Quick Links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h2 class="footer-heading mb-4">Products</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h2 class="footer-heading mb-4">Features</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h2 class="footer-heading mb-4">Follow Us</h2>
                                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
                        <form action="#" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank" >Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>



    </div>

@endsection
