@extends('client.layouts.main')

@section('content')
    
    <div class="container">
            <!--contact area start-->
            <div class="contact_area">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="contact_message form">
                            <h3 class="mt-5">Leave a Message</h3>
                            <form id="contact-form" method="POST" action="assets/mail.php">
                                <p>
                                    <label> Your Name <span class="contact_start_button">*</span></label>
                                    <input name="name" type="text">
                                </p>
                                <p>
                                    <label> Your Email <span class="contact_start_button">*</span></label>
                                    <input name="email"  type="email">
                                </p>
                                <p>
                                    <label> Number Phone</label>
                                    <input name="phone"  type="phone">
                                </p>
                                <div class="contact_textarea">
                                    <label> Comment</label>
                                    <textarea  name="message" class="form-control2"></textarea>
                                </div>
                                <button type="submit"> Submit</button>
                                <p class="form-messege"></p>
                            </form>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="contact_message content">
                            <h3 class="mt-5">Contact Detail</h3>
                           <p class="mt-5"></p>
                            <ul>
                                <li><i class="fa fa-envelope-o"></i> Email  <br> info2024@gmail.com</li>
                                <li><i class="fa fa-envelope-o"></i> Email 2  <br>info2024@gmail.com</li>
                                <li><i class="fa fa-phone"></i> Hotline  <br>+880195557771</li>
                                <li><i class="fa fa-phone"></i> Phone  <br>+880195557771</li>
                                <li><i class="fa fa-map-marker"></i> Corporate Office  <br>Mirpur DOHS,Avenue#6</li>
                                <li><i class="fa fa-map-marker"></i> Factory Location  <br>Mirpur DOHS,Avenue#7</li>
                                
                                
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!--contact area end-->
    </div>
@endsection