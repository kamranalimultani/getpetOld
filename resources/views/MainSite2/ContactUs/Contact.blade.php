@extends('MainSite2.index',['title'=>'GetPet.in | Contact Us','tags'=>'getpet.in, how to sell pets in india,pet shops near me,pet shops in nagina','description'=>'Looking for a pet store that delivers right to your door? Look no further than Pets Home Delivery! We offer a wide variety of products for birds, dogs, and cats, and our home delivery service makes it easy and convenient to get everything you need for your furry friend. Contact us today to learn more!'])
@section('content')

   
<style>
   .custom-form{    justify-content: start !important;
    display: flex !important;
    flex-direction: column !important;
   }
   .custom-form span{font-size: 10px ;color: red}
</style>



@include('MainSite2.Common.BreadCrum',['backPage'=>'Pages','backPageUrl'=>'/','currentPage'=>'Contact Us','currentPageUrl'=>'/contact-us','desc'=>'We are available 24/7 by fax, e-mail or by phone.'])
<div class="container">
   
   <div id="message-notification">
   
   </div>

   <section class="section section-xl bg-default text-md-left">
      <div class="container">
         <div class="title-classic">
            <h3 class="title-classic-title">Get in touch</h3>
            <p class="title-classic-subtitle">We are available 24/7 by fax, e-mail or by phone. You can also use our <br class="d-none d-lg-block">quick contact form to ask a question about our solutions.</p>
         </div>
         
         <form class=""   method="get" action="{{url('email')}}" >
            @csrf
            <div class="row row-20 row-md-30">
              <div class="col-lg-8">
                <div class="row row-20 row-md-30">
                  <div class="col-sm-6">
                    <div class="custom-form custom-form-fname">
                      <input class="form-input " id="contact-first-name-2" type="text" name="name" placeholder="First Name" >
                      <span  style="display: none ;text-align:start" class="fname-err-msg">First name is required.</span>
                      <label class="form-label rd-input-label d-none" for="contact-first-name-2">First Name</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-form ">
                      <input class="form-input " id="contact-last-name-2" type="text" name="lastName" placeholder="last Name" >
                      <label class="form-label rd-input-label d-none" for="contact-last-name-2">Last Name</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-form-email custom-form">
                      <input   class="form-input " id="senderEmail" type="email" name="email" placeholder="E-mail">
                      <span  style="display: none ;text-align:start" class="email-err-msg ">Email is required.</span>
                      <label class="form-label rd-input-label d-none" for="contact-email-2">E-mail</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-form">
                      <input class="form-input " id="contact-phone-2" type="text" name="phone" placeholder="Phone" >
                      <label class="form-label rd-input-label d-none" for="contact-phone-2">Phone</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="custom-form-message custom-form">
                  <label class="form-label rd-input-label d-none" for="contact-message-2" >Message</label>
                  <textarea class="form-input textarea-lg " id="contact-message-2" name="phone" placeholder="Messagee"></textarea>
                </div>
              </div>
            </div>
            <div class="submit-button-contact d-flex align-items-center mt-4">
               <button class="button button-sm button-primary button-zakaria d-flex flex-row" type="button" onclick="sendEmail()" > 
                   <div style="display: none;width 2-px;height 20px;" id="emailSendSpinner" class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                   </div>
                  <div id="emailSendButton" style="margin-left:10px">
                     Send Message</button>
                      
                     
                  </div>

            </div>
          </form>
      </div>
   </section>

</div>
<script>
function sendEmail()
  {
   let from=$('#senderEmail').val();
   let firstName=$('#contact-first-name-2').val();

   let lastName=$('#contact-last-name-2').val();
   let phone=$('#contact-phone-2').val();
   let message=$('#contact-message-2').val();
   let name=firstName+lastName;
  
   if(firstName&&from &&message)
    {
        $('#emailSendSpinner').show()
        $('#emailSendButton').text('Sending....')
   
        $.ajax({
                url:
                BASE_URL +"/email?from=" +
                from +
                "&name=" +
                name+
                "&phone=" +
                phone+
                "&message=" +
                message,
          success: function (data) 
            {
              $('#message-notification').html(data);
              $('#emailSendButton').text('Submit')
              $('#emailSendSpinner').hide()

              let from=$('#senderEmail').val('');
   let firstName=$('#contact-first-name-2').val('');

   let lastName=$('#contact-last-name-2').val('');
   let phone=$('#contact-phone-2').val('');
   let message=$('#contact-message-2').val('');
            }
              });
    
  }}
</script>
@endsection