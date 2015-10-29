
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * code reference: 
 * wireframe: Bootstrap 
 * http://getbootstrap.com/getting-started/#download
 * 
 * 
 */

require_once 'header.php';
?>
<!-- START THE FEATURETTES -->

<div class="container marketing">
    <h2>Computer Generations</h2>
    <div class="row">
        <!-- Three columns of text below the carousel -->
        <hr class="featurette-divider">
        <div class="col-lg-3">
            <a href="signup.php">
                <img class="img-circle" src="Images/registernow.jpg" style="width: 300px; height: 240px;"></a>          
            <p>Register as a individual if you want to become an IDonate member!</p>
        </div>

        <div class="col-lg-3">
            <a href="pastevents.php">
                <img class="img-circle" src="Images/stamp-right-past-events.jpg" style="width: 300px; height: 240px;"></a>
            <p>Click here if you want to see past events!</p>
        </div>

        <div class="col-lg-3">
            <a href="pastevents.php">
                <img class="img-circle" src="Images/Upcoming Events.jpg" style="width: 300px; height: 240px;"></a>
            <p>Click here for upcoming events!</p>
        </div>

        <div class="col-lg-3">
            <span class="search">   
                <div class="box4">
                    <div class="inputBox first">
                        <form name="searchfundraiser" action="search-fundraiser.html" method="post" onSubmit="return checkfundraiser()"> 
                            <input value="Find a Fundraiser"  class="input" name="title" onFocus="if (this.value == 'Find a Fundraiser')
                                        this.value = '';" onBlur="if (this.value == '')
                                                    this.value = 'Find a Fundraiser';" type="text">
                            <button type="submit" span class="button">Submit</button>
                        </form>
                    </div>
                    <br><br><br><br>
                    <div class="inputBox sec">                   
                        <form name="searchcharity" action="search-charity.html" method="post" onSubmit="return checkcharity()">                       
                            <div id="find-friend">
                                <input value="Find a Charity" class="input" name="title" onFocus="if (this.value == 'Find a Charity')
                                            this.value = '';" onBlur="if (this.value == '')
                                                        this.value = 'Find a Charity';" type="text" class="input">
                                <button type="submit" span class="button">Submit</button>

                            </div>
                        </form>
                                <!--<p>Find one of the many Charities & Fundraisers using iDonate.ie</p>-->
                    </div> 
                </div> 
                <img class="img-circle" src="Images/searchcharity.png" style="width: 300px; height: 240px;">          
                <p>Search for a charity</p>
            </span>
        </div>
    </div>
    <!-- /END THE FEATURETTES -->
    

    <div class="row featurette">

        <div class="clear"></div>          
        <div id="lista1" class="als-container content">
            <h3 class="left">registered charities...</h3>
            
            
            <div class="scroller">
      <span data-id="als-prev_0" class="als-prev"><img src="images/thin_left_arrow_333.png" alt="prev" title="previous"></span>
      <div id="als-viewport_0" class="als-viewport">
        <ul style="width: 5538px; height: 95px;" id="als-wrapper_0" class="als-wrapper">
                    <li style="left: 5112px;" id="als-item_0_0" class="als-item"><a target="_blank" href="https://www.idonate.ie/172_western-alzheimers.html"><img src="https://www.idonate.ie/logos/western-alz.jpg" alt="Western Alzheimers" title="Western Alzheimers" width="100"></a></li>
                    <li style="left: 5112px;" id="als-item_0_1" class="als-item"><a target="_blank" href="https://www.idonate.ie/2153_look-good-feel-better-ireland.html"><img src="https://www.idonate.ie/logos/lookgoodfeelbetter.jpg" alt="Look Good Feel Better Ireland" title="Look Good Feel Better Ireland" width="100"></a></li>
                    <li style="left: 5112px;" id="als-item_0_2" class="als-item"><a target="_blank" href="https://www.idonate.ie/932_borrisokane-community-college-autism-centre.html"><img src="https://www.idonate.ie/logos/crest_white__background_high_resolution.jpeg" alt="Borrisokane Community College Autism Centre" title="Borrisokane Community College Autism Centre" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_3" class="als-item"><a target="_blank" href="https://www.idonate.ie/877_ballinderreen-juvenile-hurling-club.html"><img src="https://www.idonate.ie/logos/club_logo.jpg" alt="Ballinderreen Juvenile Hurling Club" title="Ballinderreen Juvenile Hurling Club" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_4" class="als-item"><a target="_blank" href="https://www.idonate.ie/1220_cope-foundation.html"><img src="https://www.idonate.ie/logos/COPE_LOGO.jpg" alt="COPE Foundation" title="COPE Foundation" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_5" class="als-item"><a target="_blank" href="https://www.idonate.ie/2128_jump-autism-support.html"><img src="https://www.idonate.ie/logos/JUMP_logo_b.jpg" alt="Jump Autism Support" title="Jump Autism Support" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_6" class="als-item"><a target="_blank" href="https://www.idonate.ie/333_the-carers-association.html"><img src="https://www.idonate.ie/logos/carers Stationery.jpg" alt="The Carers Association" title="The Carers Association" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_7" class="als-item"><a target="_blank" href="https://www.idonate.ie/1165_dublin-lesbian-line.html"><img src="https://www.idonate.ie/logos/1387571107_39_Vertical_Curved.jpg" alt="Dublin Lesbian Line" title="Dublin Lesbian Line" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_8" class="als-item"><a target="_blank" href="https://www.idonate.ie/1593_hope-for-zoe-.html"><img src="https://www.idonate.ie/logos/1417622238_13_image.jpg" alt="Hope for Zoe " title="Hope for Zoe " width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_9" class="als-item"><a target="_blank" href="https://www.idonate.ie/225_mymind.html"><img src="https://www.idonate.ie/logos/FB.jpg" alt="MyMind" title="MyMind" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_10" class="als-item"><a target="_blank" href="https://www.idonate.ie/1594_my-lovely-horse-rescue.html"><img src="https://www.idonate.ie/logos/1416417875_8_430MM_x_430MM.jpg" alt="My Lovely Horse Rescue" title="My Lovely Horse Rescue" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_11" class="als-item"><a target="_blank" href="https://www.idonate.ie/1848_fingal-spca.html"><img src="https://www.idonate.ie/logos/fingal-spca.jpg" alt="Fingal SPCA" title="Fingal SPCA" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_12" class="als-item"><a target="_blank" href="https://www.idonate.ie/1602_down-syndrome-limerick.html"><img src="https://www.idonate.ie/logos/DSLS_Logo2.jpg" alt="Down Syndrome Limerick" title="Down Syndrome Limerick" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_13" class="als-item"><a target="_blank" href="https://www.idonate.ie/293_donegal-mountain-rescueteam.html"><img src="https://www.idonate.ie/logos/DMRTMember9cm.jpg" alt="Donegal Mountain RescueTeam" title="Donegal Mountain RescueTeam" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_14" class="als-item"><a target="_blank" href="https://www.idonate.ie/941_jigsaw-roscommon-.html"><img src="https://www.idonate.ie/logos/Jigsaw_Roscommon_high.jpg" alt="Jigsaw Roscommon " title="Jigsaw Roscommon " width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_15" class="als-item"><a target="_blank" href="https://www.idonate.ie/2161_newcastle-west-christmas-lights-fund.html"><img src="https://www.idonate.ie/logos/Banner-for-online-fundraising.jpg" alt="Newcastle West Christmas Lights Fund" title="Newcastle West Christmas Lights Fund" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_16" class="als-item"><a target="_blank" href="https://www.idonate.ie/1584_north-tipperary-hospice-movement.html"><img src="https://www.idonate.ie/logos/hospice_Logo.jpg" alt="North Tipperary Hospice Movement" title="North Tipperary Hospice Movement" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_17" class="als-item"><a target="_blank" href="https://www.idonate.ie/612_jacks-wish-2-walk.html"><img src="https://www.idonate.ie/logos/jacks-wish-2-walk.jpg" alt="Jacks Wish 2 Walk" title="Jacks Wish 2 Walk" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_18" class="als-item"><a target="_blank" href="https://www.idonate.ie/1553_andrew-lydon-trust.html"><img src="https://www.idonate.ie/logos/1425566102_23_logo.png" alt="Andrew Lydon Trust" title="Andrew Lydon Trust" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_19" class="als-item"><a target="_blank" href="https://www.idonate.ie/755_university-of-limerick-foundation.html"><img src="https://www.idonate.ie/logos/FoundationMay_standard_w_b_logo.jpg" alt="University of Limerick Foundation" title="University of Limerick Foundation" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_20" class="als-item"><a target="_blank" href="https://www.idonate.ie/1562_ian--s-trust.html"><img src="https://www.idonate.ie/logos/1412198515_6_image.jpg" alt="Ian\'s Trust" title="Ian's Trust" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_21" class="als-item"><a target="_blank" href="https://www.idonate.ie/1583_sams-steps.html"><img src="https://www.idonate.ie/logos/001__7_.JPG" alt="Sams Steps" title="Sams Steps" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_22" class="als-item"><a target="_blank" href="https://www.idonate.ie/2148_our-lady-of-the-apostles-.html"><img src="https://www.idonate.ie/logos/1443628186_8_image.jpg" alt="Our Lady Of The Apostles " title="Our Lady Of The Apostles " width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_23" class="als-item"><a target="_blank" href="https://www.idonate.ie/1419_kilcavan-gaa.html"><img src="https://www.idonate.ie/logos/Kilcavan_Logo.jpg" alt="Kilcavan GAA" title="Kilcavan GAA" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_24" class="als-item"><a target="_blank" href="https://www.idonate.ie/1599_the-lochlann-doyle-fund.html"><img src="https://www.idonate.ie/logos/068.JPG" alt="The Lochlann Doyle Fund" title="The Lochlann Doyle Fund" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_25" class="als-item"><a target="_blank" href="https://www.idonate.ie/1275_rossbeigh-playground-and-muti-sport-area-project.html"><img src="https://www.idonate.ie/logos/Rossbeigh-1.jpg" alt="Rossbeigh Playground and Muti-Sport Area Project" title="Rossbeigh Playground and Muti-Sport Area Project" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_26" class="als-item"><a target="_blank" href="https://www.idonate.ie/357_scoop.html"><img src="https://www.idonate.ie/logos/SCOOP_Logo_jpeg_183kb.jpg" alt="SCOOP" title="SCOOP" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_27" class="als-item"><a target="_blank" href="https://www.idonate.ie/848_the-ethiopia-deaf-project.html"><img src="https://www.idonate.ie/logos/230513.jpg" alt="The Ethiopia Deaf Project" title="The Ethiopia Deaf Project" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_28" class="als-item"><a target="_blank" href="https://www.idonate.ie/944_ethan--s-trust.html"><img src="https://www.idonate.ie/logos/ethan-1.jpg" alt="Ethan\'s Trust" title="Ethan's Trust" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_29" class="als-item"><a target="_blank" href="https://www.idonate.ie/1323_aim-family-services.html"><img src="https://www.idonate.ie/logos/aim.jpg" alt="AIM Family Services" title="AIM Family Services" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_30" class="als-item"><a target="_blank" href="https://www.idonate.ie/861_coeliac-society-of-ireland.html"><img src="https://www.idonate.ie/logos/csi_logo_RGB.jpg" alt="Coeliac Society of Ireland" title="Coeliac Society of Ireland" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_31" class="als-item"><a target="_blank" href="https://www.idonate.ie/1093_saoirse-foundation.html"><img src="https://www.idonate.ie/logos/SaoirseFoundationLogo.jpg" alt="Saoirse Foundation" title="Saoirse Foundation" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_32" class="als-item"><a target="_blank" href="https://www.idonate.ie/1523_dunboyne-ac-.html"><img src="https://www.idonate.ie/logos/dunboyne-ac-logo.jpg" alt="Dunboyne AC " title="Dunboyne AC " width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_33" class="als-item"><a target="_blank" href="https://www.idonate.ie/963_suas-educational-development.html"><img src="https://www.idonate.ie/logos/Suas_Logo-_good_quality.jpg" alt="Suas Educational Development" title="Suas Educational Development" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_34" class="als-item"><a target="_blank" href="https://www.idonate.ie/1414_irish-guide-dogs.html"><img src="https://www.idonate.ie/logos/IGDB_logo.jpg" alt="Irish Guide Dogs" title="Irish Guide Dogs" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_35" class="als-item"><a target="_blank" href="https://www.idonate.ie/231_the-integration-centre.html"><img src="https://www.idonate.ie/logos/TIC_rgb.JPG" alt="The Integration Centre" title="The Integration Centre" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_36" class="als-item"><a target="_blank" href="https://www.idonate.ie/1910_cgi-eastern-region-raise-the-roof.html"><img src="https://www.idonate.ie/logos/CGI_Logo_hi_res.jpg" alt="CGI Eastern Region Raise the Roof" title="CGI Eastern Region Raise the Roof" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_37" class="als-item"><a target="_blank" href="https://www.idonate.ie/232_myaware--formerly-myasthenia-gravis-association-.html"><img src="https://www.idonate.ie/logos/email-signature-logo.png" alt="Myaware (formerly Myasthenia Gravis Association)" title="Myaware (formerly Myasthenia Gravis Association)" width="100"></a></li>
                    <li style="left: -426px;" id="als-item_0_38" class="als-item"><a target="_blank" href="https://www.idonate.ie/371_threshold-.html"><img src="https://www.idonate.ie/logos/Threshold logo - charity.jpg" alt="Threshold " title="Threshold " width="100"></a></li>
                  </ul>
      </div>
      <span data-id="als-next_0" class="als-next"><img src="images/thin_right_arrow_333.png" alt="next" title="next"></span> 
       </div>
            
        
        </div>
        <div class="clear"></div>



    </div>

    <!-- FOOTER -->
    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>2015 Students-NCI, &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

</div>

<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
//-->
</script>
</body>

<script type="text/javascript" src="JS/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="JS/jquery.als-1.1.min.js"></script>
<script type='text/javascript' src='JS/litlleslide.js'></script>

<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</html>
<!--references:
http://www.csi.ucd.ie/staff/jcarthy/home/CourseNotes/History%20%20+%20chips.pdf
http://www.tutorialspoint.com/computer_fundamentals/pdf/computer_generations.pdf
http://www.byte-notes.com/five-generations-computers
http://www.webopedia.com/DidYouKnow/Hardware_Software/FiveGenerations.asp
http://pholeytech.blogspot.ie/2011/05/history-of-computer-second-generation.html
http://itcoursenotes.webs.com/IT%20Lec%201%20History%20of%20Computers.pdf
http://journal.info.unlp.edu.ar/journal/journal11/papers/JCST-Aug04-1.pdf
http://www.niecdelhi.ac.in/uploads/Notes/btech/1sem/Computer%20Generations.pdf
http://www.lsp4you.com/electronics/Generation%20of%20Computers.pdf
http://www.theregister.co.uk/2014/07/09/ibm_3billion_megabuck_r_and_d/
http://www.independent.co.uk/life-style/gadgets-and-tech/news/next-generation-computers-will-be-highly-interactive-devices-controlled-by-gestures-1901967.html
http://www.webopedia.com/DidYouKnow/Hardware_Software/FiveGenerations.asp
http://www.slideshare.net/Suaj/basics-of-computer-system-ppt?next_slideshow=7
http://www.javascriptkit.com/javatutors/external.shtml
http://www.tutorialspoint.com/computer_fundamentals/index.htm
http://www.webopedia.com/DidYouKnow/Hardware_Software/FiveGenerations.asp
http://histryofcomputr.blogspot.ie/2010/12/1st-gen.html
https://fahmirahman.wordpress.com/2011/01/04/five-generations-of-computer/
-->

