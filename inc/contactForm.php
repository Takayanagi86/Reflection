<div class="home-container box-shadow">
    <ul class="home">
        <li class="home-li">Home</li>
        <li class="fwd-slash">How Can We Help You?</li>
    </ul>
</div>
<div class="contact-title-container">
    <div class="contact-title">How Can We Help You?</div>
</div>
<div class="contact-form-container">
    <div class="contact-details-container">
        <div class="detail-container">
            <div class="label">Call us on: </div>
            <a href="#" class="main-number telephone">01603 70 40 20</a>
        </div><!-- detail container -->
        <div class="detail-container">
            <div class="label">Email us on: </div>
            <a href="#" class="email-us">sales@netmatters.com</a>
        </div><!-- detail container -->
        <div class="detail-container">
            <div class="label">Call us at our Gorleston branch on: </div>
            <a href="#" class="gorleston-number telephone">01493 603204</a>
        </div><!-- detail container -->
        <div class="label info-label">Business hours:<br></div>
        <div class="label info-label">Monday - Friday 07:00 - 18:00</div>
        <div class="more-info-container">
            <div class="label more-info-btn">Out of Hours IT Support  <i class="fas fa-chevron-up"></i></div>
            <div class="more-info">Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.
                <div class="label">Monday - Friday 18:00 - 22:00 Saturday 08:00 - 16:00 Sunday 10:00 - 18:00</div>
                To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call.
            </div><!-- more info -->
        </div><!-- more info container -->
    </div><!-- contact details container -->


    <div class="form-container">
        <div class="form">
            <form method="POST"  id="contact-form"> 
                <div class="row">
                    <div class="input-container">
                        <label class="label" for="name">Your Name </label>
                        <input class="input <?php echo $nameStatus; ?>" name="name" autocomplete="on" type="text" id="name" value="<?php if (isset($_POST["name"])) echo $_POST["name"]; ?>">
                    </div><!-- name container -->
                    <div class="input-container">
                        <label class="label" for="email">Your Email </label>
                        <input class="input <?php echo $emailStatus; ?>" name="email" autocomplete="on" type="text" id="email" value="<?php if (isset($_POST["email"])) echo $_POST["email"]; ?>">
                    </div><!-- email container -->
                </div><!-- row -->
                <div class="row">
                    <div class="input-container">
                        <label class="label" for="number">Your Telephone Number </label>
                        <input class="input <?php echo $numberStatus; ?>" name="number" autocomplete="on" type="text" id="number" value="<?php if (isset($_POST["number"])) echo $_POST["number"]; ?>">
                    </div><!-- number container -->
                    <div class="input-container">
                        <label class="label" for="subject">Subject </label>
                        <input class="input <?php echo $subjectStatus; ?>" name="subject" autocomplete="on" type="text" id="subject" value="<?php if (isset($_POST["subject"])) echo $_POST["subject"]; ?>">
                    </div><!-- subject container -->
                </div><!-- row container -->
                <div class="message-container">
                    <label class="label" for="message">Message </label>
                    <textarea class="input <?php echo $messageStatus; ?>" name="message" id="message" class="message" cols="50" rows="10"><?php if (isset($_POST["message"])) echo $_POST["message"]; ?></textarea>
                </div><!-- message container -->
                <div class="checkbox-container">
                    <div class="checkbox">
                        <div class="check-btn">
                            <i class="fas fa-check"></i>   
                            <input type="checkbox" class="check" value="1" name="agreement">
                        </div>
                    </div><!-- checkbox -->
                    <div class="checkbox-info">
                        <p>Please tick this box if you wish to receive marketing information from us.
                            Please see our <a href="">Privacy Policy</a>
                            for more information on how we use your data</p>
                    </div><!-- checkbox info -->
                </div><!-- checkbox container -->
                <div class="submit-btn-container">   
                    <button type="submit" id="submit" class="btn submit-btn" name="submit">SEND ENQUIRY</button>
                    <div class="status <?php echo $statusSuccess; ?>"><?php echo $status; ?></div>
                </div><!--submit btn container -->
            </form>
        </div><!-- form -->
    </div><!-- form container -->
</div> <!-- contact form container -->

<div class="location-container">
    <div class="place-container">
        <div class="place-info-container">
            <div class="place-info">
                <span class="icon"><i class="fas fa-home"></i></span>
                <div class="h2">Netmatters Office: Wymondham</div>
                <span class="line"></span>
                <p>Netmatters<br>11 Penfold Drive<br>Wymondham<br>Norfolk<br>NR18 OWZ</p>
            </div><!-- wymondham info -->
        </div><!-- wymondham info container -->
        <div class="wymondham-map map">    
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2424.650833026772!2d1.1340782156411313!3d52.57592537982482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9ddac8dba0b4b%3A0x9c77ffbfe7911dab!2sNetmatters!5e0!3m2!1sen!2suk!4v1584707013706!5m2!1sen!2suk"  height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div><!-- wymondham map -->
    </div><!-- wymondham container -->
    <div class="place-container">
        <div class="place-info-container">
            <div class="place-info">
                <span class="icon"><i class="fas fa-road"></i></span>
                <div class="h2">Netmatters Office: Gorleston, Great Yarmouth</div>
                <span class="line"></span>
                <p>Netmatters - Great Yarmouth<br>Suite F23 Beacon Innovation Centre, Beacon Park<br>Gorleston, Great Yarmouth<br>Norfolk<br>NR31 7RA</p>     
            </div><!-- gorleston info -->
        </div><!-- gorleston info container -->
        <div class="gorleston-map map">      
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2425.7234908590995!2d1.7104906156403177!3d52.55652637982112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47da0593b311cec3%3A0x1cb3c1d4c0b340f6!2sNetmatters%20Gorleston!5e0!3m2!1sen!2suk!4v1584707519744!5m2!1sen!2suk" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div><!-- gorleston map -->
    </div><!-- gorleston container -->
</div><!-- location container -->
