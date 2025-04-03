<?php include 'includes/header.php';
?>


<section class="contact-page-sec">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-info">
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="fas fa-map-marked"></i>
              </div>
              <div class="contact-info-text">
                <h2>address</h2>
                <h2>Municipal SK Federation Office</h2>
                <span>Don Hilario Avenue, Club Manila East Compound, Barangay San Juan   </span> 
                <span>Taytay, Rizal 1920 Philippines</span> 
                <h2>SK Office San Juan</h2>
                <span>Tanchoco Ave., El Monteverde Subd. Barangay San Juan   </span> 
                <span>Taytay, Rizal Rizal 1920 Philippines</span> 
              </div>
            </div>            
          </div>          
        </div>          
        <div class="col-md-4">
          <div class="contact-info">
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="contact-info-text">
                <h2>E-mail Address</h2>
                <span>info@LoremIpsum.com</span> 
                <span>yourmail@gmail.com</span>
              </div>
            </div>            
          </div>                
        </div>         
        <div class="col-md-4">
          <div class="contact-info">
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="fas fa-phone"></i>
              </div>
              <div class="contact-info-text">
                <h2>Contact Number</h2>
                <span>Barangay Contact Nos: 0998 220 5844 / 8-557-1425</span> 
                <span>Rescue Team: 0928 958 7556 / 8-350-5261</span>
              </div>
            </div>            
          </div>                
        </div>        
        <div class="col-md-4">
          <div class="contact-info">
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="fas fa-clock"></i>
              </div>
              <div class="contact-info-text">
                <h2>office time</h2>
                <span>Monday - Friday, 8:00 a.m. - 5:00 p.m.</span>
              </div>
            </div>            
          </div>          
        </div>          
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="contact-page-form" method="post">
            <h2>Get in Touch</h2> 
            <form action="contact-mail.php" method="post">
              <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                  <input type="text" placeholder="Your Name" name="name"/>
                </div>
              </div>  
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                  <input type="email" placeholder="E-mail" name="email" required/>
                </div>
              </div>                              
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                  <input type="text" placeholder="Phone Number" name="phone"/>
                </div>
              </div>  
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                  <input type="text" placeholder="Subject" name="subject"/>
                </div>
              </div>                
              <div class="col-md-12 message-input">
                <div class="single-input-field">
                  <textarea  placeholder="Write Your Message" name="message"></textarea>
                </div>
              </div>                                                
              <div class="single-input-fieldsbtn">
                <input type="submit" value="Send Now"/>
              </div>                          
            </div>
            </form>   
          </div>      
        </div>
        <div class="col-md-4">        
          <div class="contact-page-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61788.86445781415!2d121.09603119245673!3d14.55319653225677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c71b30c82813%3A0xf5e02302ae65c580!2sTaytay%2C%201920%20Rizal!5e0!3m2!1sen!2sph!4v1742536184891!5m2!1sen!2sph" width="100%" height="450" style="border:0;" allowfullscreen></iframe>
            
          </div>          
        </div>        
    
     
  </section>

  <br>
  <br>

  <?php require_once 'includes/footer.php';
?>

<script src="assets/js/script.js"></script>    
