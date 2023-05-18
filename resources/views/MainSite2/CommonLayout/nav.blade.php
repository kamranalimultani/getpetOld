<!-- Page Header-->

<style>
.rd-navbar-fixed .rd-navbar-search-toggle {
    display: inline-flex;
    top: 18px !important;
    right: 47px !important;
    font-size: 20px;
}
.top-notice{background: #eeb800}
.top-notice h6{color: white}
@media (min-width:990px)
{
  .loginLinksForMobile{display: none !important}
}
</style>
<div class="top-notice">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <h6 >Welcome to GetPet.in</h6>
      </div>
      <div class="carousel-item">
        <h6>You can order pets directly by contacting us.</h6>
      </div>
      <div class="carousel-item ">
        <h6>Note:Prices may change.</h6>
      </div>
      <div class="carousel-item">
        <h6>Note: We only deliver pets whose price are above than 20k or according to places.</h6>
      </div>
    </div>
  </div>
</div>
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap" style="height: 207.797px;">
          <nav class="rd-navbar rd-navbar-modern rd-navbar-original rd-navbar-static rd-navbar--is-stuck" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="100px" data-xl-stick-up-offset="120px" data-xxl-stick-up-offset="140px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1 toggle-original" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer">
              <div class="rd-navbar-aside">
                <div class="rd-navbar-collapse toggle-original-elements">
                  <div class="contacts-ruth">
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"></div>
                      <div class="loginLinksForMobile d-flex flex-column">
                        
                        @if(session()->has('useName'))
                        <a title="Profile" class="rd-dropdown-link" href="{{url('/user/profile')}}"><i style="color:#eeb800 "  class="fa fa-user me-2"></i>{{session('userName')}}</a>
                        <a title="Profile" class="rd-dropdown-link" href="{{url('/user/logout')}}"><i style="color:#eeb800 "  class="fa fa-user me-2"></i>LogOut</a>
                        
                        @else
                        <a class="rd-dropdown-link" href="{{url('/user/login')}}">Sign In </a>
                        <a class="rd-dropdown-link " href="{{url('/user/register')}}">Sign Up</a>
                        @endif
                      </div>
                    </div>
                  </div><a class="button button-primary-outline button-sm button-icon button-icon-left" href="{{url('contact-us')}}">Need Help?</a>
                </div>
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle toggle-original" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="{{url('about')}}">
                    <img class="brand-logo-dark" src="{{asset("images/Logo.png")}}" alt="getpet.in logo" width="168" height="60" style="object-fit: cover;">
                </a>
                  </div>
                </div>
                <div class="rd-navbar-button"><a class="button button-primary-outline button-sm button-icon button-icon-left" href="{{url('contact-us')}}"><i class="fa fa-phone m-2"></i>Need Help?</a></div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap toggle-original-elements">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item {{ Request::is('/') ? 'active' : ''  }}"><a class="rd-nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="rd-nav-item rd-navbar--has-megamenu rd-navbar-submenu"><a class="rd-nav-link" href="#">Categories</a><span class="rd-navbar-submenu-toggle"></span>
                      <!-- RD Navbar Megamenu-->
                      <ul class="rd-menu rd-navbar-megamenu rd-navbar-open-right">
                        <li class="rd-megamenu-item">
                          <div class="rd-megamenu-title"><span class="rd-megamenu-icon linear-icon mdi mdi-apps fa fa-chevron-down"></span><span class="rd-megamenu-text"><a href="{{url('/category/all')}}">Pets</a></span></div>
                          <ul class="rd-megamenu-list rd-megamenu-list-2">
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('category/Birds/1')}}">Birds</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('category/Dogs/2')}}">Dogs</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('category/Cats/3')}}">Cats</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('category/Parrots/4')}}">Parrots</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('category/Sugar-Glider/5')}}">Sugar Glider</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('category/Legal-Reptiles/6')}}">Legal Reptiles</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('category/Rabits/7')}}">Rabits</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('/category/all')}}">More..</a></li>
                          </ul>
                        </li>
                        <li class="rd-megamenu-item ">
                          <div class="rd-megamenu-title"><i class="fa-solid fa-paw"></i><span class="rd-megamenu-text"><a href=""> Pets Foods</a></span></div>
                          <ul class="rd-megamenu-list rd-megamenu-list-2">
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('/coming-soon')}}">Whiskas</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('/coming-soon')}}">Sheba</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('/coming-soon')}}">Pedigree</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('/coming-soon')}}">Kons</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('/coming-soon')}}">Trixie</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('/coming-soon')}}l">Farmina</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('/coming-soon')}}">Royal Canin</a></li>
                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="{{url('/coming-soon')}}">More...</a></li>
                          
                          </ul>
                        </li>
                        <li class="rd-megamenu-item ">
                          <div class=""><i class="fa fa-hundred-points"></i><span class="rd-megamenu-text">Original Product @</span></div><a class="banner-classic" href="{{url('/about')}}">
                            <img src="{{asset('images/Logo.png')}}" alt="getpet.in logo" style="height: 100px !important">
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu"><a class="rd-nav-link" href="{{url('/coming-soon')}}">Products</a><span class="rd-navbar-submenu-toggle"></span>
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{url('/coming-soon')}}">Pet Cremation Urns</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{url('/coming-soon')}}">Serving Bowls</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{url('/coming-soon')}}">Clothes</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{url('/coming-soon')}}">More..</a></li>
                      </ul>
                    </li>
                    <li class="rd-nav-item "><a class="rd-nav-link " href="{{url('blog-posts/')}}">Posts</a><span class="rd-navbar-submenu-toggle"></span>
                      <!-- RD Navbar Dropdown-->
                      {{-- <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Tips</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#l">Posts</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">News</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{url('blog-posts/')}}">All</a></li>
                        
                      </ul> --}}
                    </li>
                    <li class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu {{Request::is('about') ||Request::is('contact-us')||Request::is('privasy-policies')||Request::is('faqs')? 'active':''}} "><a class="rd-nav-link" href="#">Pages</a><span class="rd-navbar-submenu-toggle"></span>
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{url('/about')}}">About Us</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{url('/contact-us')}}">Contact Us</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{url('/privacy-policies')}}">Privacy Policies</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{url('/faqs')}}">FAQ's</a></li>
                      </ul>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('/adoption')}}">Adoption</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('/coming-soon')}}">Local Vets</a>
                    </li>
                    
                    
                  </ul>
                </div>
                <div class="rd-navbar-main-element d-flex align-items-center">
                  <!-- RD Navbar Search-->
                  <div class="rd-navbar-search rd-navbar-search-2 toggle-original-elements">
                    <a class="rd-navbar-search-toggle rd-navbar-fixed-element-3 toggle-original fa fa-search me-2" data-rd-navbar-toggle=".rd-navbar-search"></a>
                    <form class="rd-search" action="" data-search-live="rd-search-results-live" method="GET">
                      <div class="form-wrap">
                        <label class="form-label rd-input-label" for="rd-navbar-search-form-input">Search...</label>
                        <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                        <div class="rd-search-results-live cleared" id="rd-search-results-live"></div>
                        <button class="rd-search-form-submit " type="button"><i class="fa fa-search me-2"></i></button>
                      </div>
                    </form>
                  </div>
                  <!-- RD Navbar Basket-->
                  <div class="rd-navbar-basket-wrap">
                    
                    <a href="#" class="" ><i class="fa fa-shopping-cart me-2"></i></a>
                    
                  </div>
                  <div class="rd-navbar-basket-wrap">
                    
                    <li class="rd-nav-item  rd-navbar--has-dropdown rd-navbar-submenu">
                      <a class="rd-nav-link "  href="#"><i style="color:#eeb800 "  class="fa fa-user me-2"></i></a>
                      <span class="rd-navbar-submenu-toggle"></span>
                    
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-menu rd-navbar-dropdown">
                        @if(session()->has('userEmail'))
                        <li class="rd-dropdown-item"><a title="Profile" class="rd-dropdown-link" href="{{url('/user/profile')}}"><i style="color:#eeb800 "  class="fa fa-user me-2"></i>{{session('userName')}}</a></li>
                        <li class="rd-dropdown-item"><a title="Profile" class="rd-dropdown-link" href="{{url('/user/logout')}}"><i style="color:#eeb800 "  class="fa fa-user me-2"></i>LogOut</a></li>
                        
                        @else
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{url('/user/login')}}">Sign In </a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link " href="{{url('/user/register')}}">  Sign Up</a></li>
                        @endif
                        {{-- <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Blog Post</a></li> --}}
                      </ul>
                    </li>
                    
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>