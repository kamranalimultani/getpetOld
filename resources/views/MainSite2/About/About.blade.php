@extends('MainSite2.index', ['title' => 'GetPet.in | About', 'tags' => 'getpet.in, how to sell pets in india,pet shops near me,pet shops in nagina', 'description' => 'Welcome to our pet store! We are a pet shop that specializes in all things related to pets. Our mission is to provide the best possible products and services for pets and their owners. We offer a wide range of products and services for all kinds of pets, including dogs, cats, fish, reptiles, and more. We also offer a variety of services, including pet sitting, pet grooming, and more. We are dedicated to providing the best possible experience for our customers and their pets. Thank you for choosing our pet store! Getpet.in is a global pet store that offers a wide variety of pets ,pet supplies and accessories.'])
@section('content')
    @include('MainSite2.Common.BreadCrum', [
        'backPage' => 'Pages',
        'backPageUrl' => '/',
        'currentPage' => 'About Us',
        'currentPageUrl' => '/contact-us',
        'desc' => 'Welcome to our pet store! We are a pet shop that specializes in all things related to pets.',
    ])

    <style>
        #about-counter {
            background-color: #ffd33b !important;
        }

        #about-counter h2 {
            color: #ffff;
        }

        #about-team a {
            background-color: #ffd33b !important;
            border: none
        }

        #about-team p :hover {
            background-color: #000 !important;
            border: none;
            color: white
        }
    </style>
    <section class="section section-xl bg-default text-md-left">
        <div class="container">
            <div class="row row-40 row-md-60 justify-content-center align-items-xl-center">
                <div class="col-md-11 col-lg-6 col-xl-5">
                    <!-- Quote Classic Big-->
                    <article class="quote-classic-big text-uppercase inset-xl-right-30">
                        <div class="heading-3 quote-classic-big-text">
                            <div class="q">A Few words About Us</div>
                        </div>
                    </article>
                    <!-- Bootstrap tabs-->
                    <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                        <!-- Nav tabs-->
                        <div class="nav-tabs-wrap">
                            <ul class="nav nav-tabs">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1"
                                        data-bs-toggle="tab">About</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2"
                                        data-bs-toggle="tab">Our mission</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3"
                                        data-bs-toggle="tab">Our goals</a></li>
                            </ul>
                        </div>
                        <!-- Tab panes-->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-1-1">
                                <p>Welcome to our getpet.in! We are a pet shop that specializes in all things related to
                                    pets. Our mission is to provide the best possible products and services for pets and
                                    their owners. We offer a wide range of products and services for all kinds of pets,
                                    including dogs, cats, fish, reptiles, and more. We also offer a variety of services,
                                    including pet sitting, pet grooming, and more. We are dedicated to providing the best
                                    possible experience for our customers and their pets. Thank you for choosing our pet
                                    store! Getpet.in is a global pet store that offers a wide variety of pets ,pet supplies
                                    and accessories. </p>
                                <p style="display:none" class="continue">At our store, you will find a wide variety of
                                    products for all types of pets. From food
                                    and treats to toys and accessories, we have everything you need to keep your pet happy
                                    and healthy. Our store features items from a variety of sellers, each with their own
                                    areas of expertise. This allows us to offer a diverse selection of products and cater to
                                    the specific needs of different types of pets.</p>
                                <p style="display:none" class="continue">We understand that pets are more than just animals
                                    – they are beloved members of the
                                    family. That's why we strive to provide excellent customer service and support to our
                                    customers. If you have any questions or concerns about a product, or if you need help
                                    finding something specific, don't hesitate to reach out to us. We are always here to
                                    help! </p>
                                <p style="display:none" class="continue">
                                    In addition to our wide selection of products, we also offer various resources and
                                    services to help pet owners make informed decisions about the care and well-being of
                                    their animals. This includes educational articles on topics such as nutrition, training,
                                    and behavior, as well as recommendations and reviews of products from our sellers.
                                </p>
                                <p style="display:none" class="continue">
                                    Thank you for choosing us as your go-to source for all things pet-related. We value the
                                    trust that our customers place in us and are committed to maintaining the highest
                                    standards of integrity and transparency. We carefully vet all of our sellers to ensure
                                    that they meet our strict quality and safety guidelines. We also have a hassle-free
                                    return policy in place to provide our customers with peace of mind when shopping with
                                    us.
                                </p>
                                <p style="display:none" class="continue">
                                    We hope to have the opportunity to serve you and your furry friends soon!
                                </p>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-2">
                                <p>Our mission is to provide the best possible pet shopping experience to our customers.</p>
                                <p> We aim to provide a wide range of products and services that meet the needs of pet
                                    owners, and to provide a safe and secure environment for pets and pet owners alike. We
                                    are committed to providing the highest level of customer service, and to providing a
                                    pet-friendly environment that is both fun and safe.</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-3">
                                <p>Looking for a pet store that offers the best products and services for your beloved pet?
                                    Look no further than getpet.in. We are a pet shop that is committed to providing our
                                    customers with the highest quality products and services for their pets. We offer a wide
                                    range of products and services for all kinds of pets, including dogs, cats, rabbits, and
                                    more. </p>
                                <p>We also have a team of experts who can provide you with the best advice on how to care
                                    for your pet. So, if you're looking for a pet store that offers the best products and
                                    services for your beloved pet, then getpet.in is the place for you!</p>
                            </div>
                        </div>
                    </div>
                    <a class="button button-lg button-primary button-zakaria" type="button" id="readMore"
                        onclick="ContinueReading()">Read more</a>
                    <a class="button button-lg button-primary button-zakaria" style="display: none" id="readLess"
                        type="button" onclick="readLess()">Read less</a>
                </div>
                <div class="col-md-11 col-lg-6 col-xl-7">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100"
                                    src="https://post.healthline.com/wp-content/uploads/2020/08/3180-Pug_green_grass-1200x628-FACEBOOK-1200x628.jpg"
                                    alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="https://vcahospitals.com/-/media/vca/images/lifelearn-images-foldered/9649/obese_dog.png"
                                    alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="https://post.healthline.com/wp-content/uploads/2020/08/3180-Pug_green_grass-1200x628-FACEBOOK-1200x628.jpg"
                                    alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- count --}}
    {{-- <section id="about-counter" style="" class="section section-xxl ">
        <div class="container">
            <div class="row row-30 justify-content-center">
                <div class="col-6 col-sm-3">
                    <div class="counter-modern">
                        <h2 class="counter-modern-number"><span class="counter animated-first">
                                <p class="counter-count-cu">879</p>
                            </span>
                        </h2>
                        <div class="counter-modern-decor"></div>
                        <h5 class="counter-modern-title">Products <br class="d-none d-sm-block"> sold</h5>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="counter-modern">
                        <h2 class="counter-modern-number"><span class="counter animated-first">
                                <p class="counter-count">879</p>
                            </span>
                        </h2>
                        <div class="counter-modern-decor"></div>
                        <h5 class="counter-modern-title">Reliable <br class="d-none d-sm-block"> partners</h5>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="counter-modern">
                        <h2 class="counter-modern-number"><span class="counter animated-first">
                                <p class="counter-count">879</p>
                            </span>
                        </h2>
                        <div class="counter-modern-decor"></div>
                        <h5 class="counter-modern-title">Satisfied<br class="d-none d-sm-block"> customers</h5>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="counter-modern">
                        <h2 class="counter-modern-number"><span class="counter animated-first">
                                <p class="counter-count">879</p>
                            </span>
                        </h2>
                        <div class="counter-modern-decor"></div>
                        <h5 class="counter-modern-title">Team <br class="d-none d-sm-block"> Members</h5>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <hr>    

    {{-- team --}}
    <div id="about-team" class="container" style="margin-top:5% ">
        <div class="row">
            <div class="col-lg-4 mt-2 ">
                <img class="rounded-circle"
                    src="https://img.freepik.com/free-vector/adopt-pet-concept_23-2148525717.jpg?w=740&t=st=1673718603~exp=1673719203~hmac=553b676607aa3e60c434ae26a3d50bcbf491c8cdf7530a81f3adb9c7bb6f06a7"
                    alt="Generic placeholder image" width="140" height="140">
                <h3>Adopt a Furry Friend</h3>
                <p>Adopting a pet is a big decision, but with our help, it can be a joyful and rewarding experience. Browse
                    our selection today and find your furry friend.</p>
                <p><a class="btn btn-secondary" href="{{url('/adoption')}}" role="button">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mt-2">
                <img class="rounded-circle"
                    src="https://img.freepik.com/free-vector/cute-parrot-bird-dancing-with-sombrero-hat-cartoon-vector-icon-illustration-animal-holiday-isolated_138676-6842.jpg?w=740&t=st=1673718556~exp=1673719156~hmac=1466bcf64175ef33d897119baf9678f9c19002490a60e85452170ab5eb9281c7"
                    alt="Generic placeholder image" width="140" height="140">
                <h3>Buy exotic pets.</h3>
                <p>All of our exotic pets are sourced from reputable breeders and have been examined by a veterinarian to
                    ensure that they are healthy and ready for their new home.</p>
                <p><a class="btn btn-secondary" href="{{url('/')}}" role="button">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mt-2">
                <img class="rounded-circle"
                    src="https://img.freepik.com/free-vector/everyday-scenes-with-pets-concept_23-2148523712.jpg?w=740&t=st=1673718425~exp=1673719025~hmac=b354c67bac49fad48c3441e132054bc3b5b24abeeb4ddb3334e7b1997585f9a4"
                    alt="Generic placeholder image" width="140" height="140">
                <h3>All about pets</h3>
                <p>Our blogs are written by experienced pet experts, veterinarians, and trainers. The articles
                    are informative, and provide advice to improve
                    the well-being of your pet.</p>
                <p><a class="btn btn-secondary" href="{{url('/blog-posts')}}" role="button">View details »</a></p>
            </div><!-- /.col-lg-4 -->
        </div>
    </div>
   
    {{-- testimonial carusel --}}
    <hr class="mt-4">
    <div class="container " style="margin-top:10% ">
        <div class="row  featurette">
            <div class="col-md-5">
                <iframe width="420" allowfullscreen allow="autoplay; encrypted-media" height="315"
                    src="https://www.youtube.com/embed/ZZGJguxM-4Q">
                </iframe>
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading ">Some of our videos <span class="text-muted">on youtube</span></h2>
                <p class="lead" style="font-size: 14px;line-height: 28px">At our pet marketplace, we want to give you
                    the most comprehensive view of the pets we have available for adoption. That's why we've created a
                    selection of videos featuring our furry friends, so you can see them in action and get a better sense of
                    their personalities.

                    Our videos showcase the pets playing, interacting with other animals and people, and displaying their
                    unique characteristics. You can see how they behave in different environments and get a sense of their
                    energy levels and temperaments.

                    By watching our videos, you'll get a better idea of which pet might be the best fit for your family and
                    lifestyle. We believe that transparency and honesty are important when it comes to adopting a new pet,
                    and our videos are just one more way we strive to provide that.

                    Check out our YouTube channel and see our pets in action, it will give you a better idea of which pet
                    might be the best fit for your family and lifestyle.</p>
            </div>
        </div>
        <div class="row  featurette ">
            <div class="col-md-6  ">
                <h3 class=" mt-4 featurette-heading ">Experience the difference with our high-quality pets and


                    <span class="text-muted">dedicated support
                        write content on this</span>
                </h3>
                <p class="lead" style="font-size: 14px;line-height: 28px">
                    At our pet marketplace, we understand that adopting a new pet is a big decision and we strive to make
                    the process as smooth and stress-free as possible. We carefully vet all of our sellers to ensure that
                    they are responsible and committed to providing the best care for their animals.
                    All of our pets are up-to-date on vaccinations and have been examined by a veterinarian, giving you
                    peace of mind that your new companion is healthy and ready to join your family. We also offer a
                    satisfaction guarantee, so if for any reason you are not happy with your new pet within a certain
                    period, you can return them for a full refund.

                    In addition to offering a wide selection of breeds and types, we also offer a variety of pet-related
                    products, such as food, toys, and grooming supplies, to ensure that your new addition has everything
                    they need to thrive. Our team of pet enthusiasts is available to assist you in finding the perfect pet
                    for your family and answering any questions you may have.

                    We believe that every pet deserves a loving home and we are dedicated to making that happen by
                    connecting pet lovers with the perfect companion. Choose us, and you'll be sure to find a furry friend
                    that will bring joy and love to your life.
                </p>
            </div>
            <div class="col-md-6">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500"
                    style="width: 500px; height: 500px;object-fit: cover"
                    src="/images/dog-on-hand.jpeg"
                    data-holder-rendered="true">
            </div>
        </div>
    </div>
    <script>
        function ContinueReading() {
            $('.continue').show()
            $('#readMore').hide();
            $('#readLess').show();
        }

        function readLess() {
            $('.continue').hide()
            $('#readMore').show();
            $('#readLess').hide();
        }
    </script>
@endsection
