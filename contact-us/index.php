
<?php
   include '../include/header.php';
   ?>

    
 <!-- ======= Contact Section ======= -->
 <section class="contact mt-5">
      <div class="container mt-5" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contact Us</span></h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>KARACHI | LAHORE | RAWALPINDI</p>
              <p>Head Office: A11, 1st Floor Jumani Arcade Office Block, Gulshan e Iqbal Block-14, Near Civic Center, Karachi.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p> info@ipservicespk.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+92-312-3313001</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6 p-3 bg-primary text-white footer-links">
            <h4>Our Timings</h4>
            <ul class="">
              <li><i class="bx bx-chevron-right p-3 "></i> <a href="#" class="text-white">Mon 09:00 am – 05:00 pm</a></li>
              <li><i class="bx bx-chevron-right p-3 "></i> <a href="#" class="text-white">Tue 09:00 am – 05:00 pm</a></li>
              <li><i class="bx bx-chevron-right p-3 "></i> <a href="#" class="text-white">Wed 09:00 am – 05:00 pm</a></li>
              <li><i class="bx bx-chevron-right p-3 "></i> <a href="#" class="text-white">Thu 09:00 am – 05:00 pm</a></li>
              <li><i class="bx bx-chevron-right p-3 "></i> <a href="#" class="text-white">Fri By Appointment</a></li>
              <li><i class="bx bx-chevron-right p-3 "></i> <a href="#" class="text-white">Sat By Appointment</a></li>
              <li><i class="bx bx-chevron-right p-3 "></i> <a href="#" class="text-white">Sun Closed</a></li>
            </ul>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->






    
<?php
   include '../include/footer.php';
   ?>