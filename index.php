
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
    <hr class="featurette-divider">

    <div class="row featurette">

        <div class="clear"></div>          
        <div id="lista1" class="als-container content">
            <h3 class="left">registered charities...</h3>
            
            
            <div class="scroller">
                <span class="als-prev_0" data-id="als-prev_0"><img src="images/left1.png" alt="prev" title="previous" /></span>
                <div id="als-viewport_0" class="als-viewport" style="width:852px; height: 95px;">
                    <ul id="als-wrapper_0" class="als-wrapper" style="width:5538px; height: 95px;">
                        <li class="als-item" id="als-item_0_0"><a target="_blank" href="https://www.idonate.ie/1119_the-good-and-new-cancer-charity.html"><img width="100" src="https://www.idonate.ie/logos/donegal-cancer-bus.jpg" alt="The Good and New Cancer Charity" title="The Good and New Cancer Charity" /></a></li>
                        <li class="als-item" id="als-item_0_1"><a target="_blank" href="https://www.idonate.ie/1621_ben-wadding-trust.html"><img width="100" src="https://www.idonate.ie/logos/ben5k_copy.jpg" alt="Ben Wadding Trust" title="Ben Wadding Trust" /></a></li>
                        <li class="als-item" id="als-item_0_2"><a target="_blank" href="https://www.idonate.ie/502_life-pregnancy-care-ireland.html"><img width="100" src="https://www.idonate.ie/logos/life-logo-1.jpg" alt="Life Pregnancy Care Ireland" title="Life Pregnancy Care Ireland" /></a></li>
                        <li class="als-item" id="als-item_0_3"><a target="_blank" href="https://www.idonate.ie/1583_sams-steps.html"><img width="100" src="https://www.idonate.ie/logos/001__7_.JPG" alt="Sams Steps" title="Sams Steps" /></a></li>
                        <li class="als-item" id="als-item_0_4"><a target="_blank" href="https://www.idonate.ie/2086_drogheda-homeless-aid.html"><img width="100" src="https://www.idonate.ie/logos/DHA.jpg" alt="Drogheda Homeless Aid" title="Drogheda Homeless Aid" /></a></li>
                        <li class="als-item" id="als-item_0_5"><a target="_blank" href="https://www.idonate.ie/1238_st-john-ambulance-dublin-15.html"><img width="100" src="https://www.idonate.ie/logos/stjohn.jpg" alt="St John Ambulance Dublin 15" title="St John Ambulance Dublin 15" /></a></li>
                        <li class="als-item" id="als-item_0_6"><a target="_blank" href="https://www.idonate.ie/1796_fight-for-life.html"><img width="100" src="https://www.idonate.ie/logos/fight-for-life.jpg" alt="Fight For Life" title="Fight For Life" /></a></li>
                        <li class="als-item" id="als-item_0_7"><a target="_blank" href="https://www.idonate.ie/544_knockadoon-youth-week.html"><img width="100" src="https://www.idonate.ie/logos/KYW_Crest_Complete.jpg" alt="Knockadoon Youth Week" title="Knockadoon Youth Week" /></a></li>
                        <li class="als-item" id="als-item_0_8"><a target="_blank" href="https://www.idonate.ie/1509_daniels-dreams.html"><img width="100" src="https://www.idonate.ie/logos/daniels-dreams.jpg" alt="Daniels Dreams" title="Daniels Dreams" /></a></li>
                        <li class="als-item" id="als-item_0_9"><a target="_blank" href="https://www.idonate.ie/2059_cuh--cork-university-hospital--charity.html"><img width="100" src="https://www.idonate.ie/logos/11025679_962668350418866_7092386597489826504_o.jpg" alt="CUH (Cork University Hospital) Charity" title="CUH (Cork University Hospital) Charity" /></a></li>
                        <li class="als-item" id="als-item_0_10"><a target="_blank" href="https://www.idonate.ie/1404_aiseiri-cahir-limited.html"><img width="100" src="https://www.idonate.ie/logos/New_Logo.jpg" alt="Aiseiri Cahir Limited" title="Aiseiri Cahir Limited" /></a></li>
                        <li class="als-item" id="als-item_0_11"><a target="_blank" href="https://www.idonate.ie/1497_msamaria-centre-for-street-children.html"><img width="100" src="https://www.idonate.ie/logos/Msamaria-21.jpg" alt="Msamaria Centre for Street Children" title="Msamaria Centre for Street Children" /></a></li>
                        <li class="als-item" id="als-item_0_12"><a target="_blank" href="https://www.idonate.ie/1220_cope-foundation.html"><img width="100" src="https://www.idonate.ie/logos/COPE_LOGO.jpg" alt="COPE Foundation" title="COPE Foundation" /></a></li>
                        <li class="als-item" id="als-item_0_13"><a target="_blank" href="https://www.idonate.ie/1372_leo-casey-fundraising-.html"><img width="100" src="https://www.idonate.ie/logos/1400870846_25_image.jpg" alt="Leo Casey Fundraising " title="Leo Casey Fundraising " /></a></li>
                        <li class="als-item" id="als-item_0_14"><a target="_blank" href="https://www.idonate.ie/1114_clones-friends-of-hospice.html"><img width="100" src="https://www.idonate.ie/logos/clones-hospice-1.jpg" alt="Clones Friends Of Hospice" title="Clones Friends Of Hospice" /></a></li>
                        <li class="als-item" id="als-item_0_15"><a target="_blank" href="https://www.idonate.ie/687_dogs-in-distress.html"><img width="100" src="https://www.idonate.ie/logos/DID_logo.JPG" alt="Dogs In Distress" title="Dogs In Distress" /></a></li>
                        <!--<li class="als-item"><a target="_blank" href="https://www.idonate.ie/2166_sonas-apc.html"><img width="100" src="https://www.idonate.ie/logos/sonas-apc.jpg" alt="Sonas apc" title="Sonas apc" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1091_slainte-an-chlair---clare-cancer-support.html"><img width="100" src="https://www.idonate.ie/logos/centre_logo.JPG" alt="Slainte an Chlair - Clare Cancer Support" title="Slainte an Chlair - Clare Cancer Support" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1424_the-bubblegum-club.html"><img width="100" src="https://www.idonate.ie/logos/bubblegum-1.jpg" alt="The Bubblegum Club" title="The Bubblegum Club" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/765_ballycotton-national-school-parents---council.html"><img width="100" src="https://www.idonate.ie/logos/Badge_logo.jpg" alt="Ballycotton National School Parents\' Council" title="Ballycotton National School Parents' Council" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1907_cats---aid.html"><img width="100" src="https://www.idonate.ie/logos/1429714233_39_logo.jpg" alt="Cats\' Aid" title="Cats' Aid" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/209_moate-and-midland--s-dog-rescue.html"><img width="100" src="https://www.idonate.ie/logos/moate-dog-rescue.jpg" alt="Moate and Midland\'s Dog Rescue" title="Moate and Midland's Dog Rescue" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1624_aiding-resources-charity.html"><img width="100" src="https://www.idonate.ie/logos/idonate_logo.jpg" alt="Aiding Resources Charity" title="Aiding Resources Charity" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/929_the-get-ahead-club.html"><img width="100" src="https://www.idonate.ie/logos/getahead.jpg" alt="The Get Ahead Club" title="The Get Ahead Club" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/325_irish-deaf-com.html"><img width="100" src="https://www.idonate.ie/logos/idcnewlogo2013.jpg" alt="Irish Deaf.com" title="Irish Deaf.com" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1871_kym-doyle-european-championships-fundraiser.html"><img width="100" src="https://www.idonate.ie/logos/kym-doyle.jpg" alt="Kym Doyle European Championships Fundraiser" title="Kym Doyle European Championships Fundraiser" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1791_maintain-hope-children--s-home.html"><img width="100" src="https://www.idonate.ie/logos/FB_IMG_1422423777291.jpg" alt="Maintain Hope Children\'s Home" title="Maintain Hope Children's Home" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1269_blue-skies-trust.html"><img width="100" src="https://www.idonate.ie/logos/blueskies.JPG" alt="Blue Skies Trust" title="Blue Skies Trust" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/2138_oldcastle-gfc.html"><img width="100" src="https://www.idonate.ie/logos/oldcastle-gfc.jpg" alt="Oldcastle GFC" title="Oldcastle GFC" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1553_andrew-lydon-trust.html"><img width="100" src="https://www.idonate.ie/logos/1425566102_23_logo.png" alt="Andrew Lydon Trust" title="Andrew Lydon Trust" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/214_the-volunteer-projects.html"><img width="100" src="https://www.idonate.ie/logos/logo 2011.jpg" alt="The Volunteer Projects" title="The Volunteer Projects" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1808_faolchu-karate-squad-fund.html"><img width="100" src="https://www.idonate.ie/logos/faolchu-logo.jpg" alt="Faolchu Karate Squad Fund" title="Faolchu Karate Squad Fund" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/261_debra-ireland.html"><img width="100" src="https://www.idonate.ie/logos/Debra_FINAL_WEB.gif" alt="DEBRA Ireland" title="DEBRA Ireland" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1530_irish-emergency-logistics-team.html"><img width="100" src="https://www.idonate.ie/logos/EmergLogsTeam_Logo_Sml.jpg" alt="Irish Emergency Logistics Team" title="Irish Emergency Logistics Team" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1097_artist-william-orpen-statue-fund.html"><img width="100" src="https://www.idonate.ie/logos/Facebook_Orpen.jpg" alt="Artist William Orpen Statue Fund" title="Artist William Orpen Statue Fund" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/836_the-miscarriage-association-of-ireland.html"><img width="100" src="https://www.idonate.ie/logos/Miscarriage_Association_Logo.jpg" alt="The Miscarriage Association of Ireland" title="The Miscarriage Association of Ireland" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/272_sound-advice--formerly-idk-.html"><img width="100" src="https://www.idonate.ie/logos/1410296614_14_pinteres-logos-01.jpg" alt="Sound Advice (formerly IDK)" title="Sound Advice (formerly IDK)" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1931_m-u--barnhall-rfc.html"><img width="100" src="https://www.idonate.ie/logos/18439_100377713329732_5067864_n.jpg" alt="M.U. Barnhall RFC" title="M.U. Barnhall RFC" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/2115_the-all-industry-table-quiz.html"><img width="100" src="https://www.idonate.ie/logos/table-quiz-1a.jpg" alt="The All Industry Table Quiz" title="The All Industry Table Quiz" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1204_haematology-education-and-research-trust--hero-.html"><img width="100" src="https://www.idonate.ie/logos/1392690908_22_logo2.jpg" alt="Haematology Education and Research Trust (HERO)" title="Haematology Education and Research Trust (HERO)" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1576_holywell-educate-together-national-school.html"><img width="100" src="https://www.idonate.ie/logos/holywell.JPG" alt="Holywell Educate Together National School" title="Holywell Educate Together National School" /></a></li>
                        <li class="als-item"><a target="_blank" href="https://www.idonate.ie/368_the-bellarose-foundation.html"><img width="100" src="https://www.idonate.ie/logos/bellarose.jpg" alt="The Bellarose Foundation" title="The Bellarose Foundation" /></a></li>-->
                    </ul>
                </div>
                 <span class="als-next"><img src="images/right1.png" alt="next" title="next" /></span>
            </div>
            
            <div class="clear"></div>
        </div>
        <div class="clear"></div>



    </div>

    <!-- FOOTER -->
    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>2015 Students-NCI, &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

</div>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/997298856/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
//-->
</script>
</body>
</html>
<script type="text/javascript" src="JS/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="JS/jquery.als-1.1.min.js"></script>
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

