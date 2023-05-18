<section class="">
    <div class="parallax-container" ><div class="material-parallax parallax"><img src="https://ecosafepest.com/wp-content/uploads/2019/06/safe-for-pets-banner-1.jpg" style="display: block; transform: translate3d(-50%, 57px, 0px);"></div>
      <div class="breadcrumbs-custom-body parallax-content context-dark">
        <div class="container">
          <h2 class="">{{$currentPage}}</h2>
          <h5 class="breadcrumbs-custom-text">{!!$desc!!}</h5>
        </div>
      </div>
    </div>
    <div class="breadcrumbs-custom-footer">
      <div class="container">
        <ul class="breadcrumbs-custom-path">
          <li><a  href="{{url('/')}}"> Home</a></li>
          <li><i class="fa fa-arrow-right"></i><a   href="{{url($backPageUrl)}}">{{$backPage}}</a></li>
          <li  class="active"><i class="fa fa-arrow-right"></i>{{$currentPage}}</li>
        </ul>
      </div>
    </div>
  </section>
