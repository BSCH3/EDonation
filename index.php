
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

            <h3 class="left">

                charities we work with..

            </h3>
            <br>
            <div class="scroller">
                <span class="als-prev" data-id="als-prev_0">

                    <img title="previous" alt="prev" src="images/left1.png"></img>

                </span>
                <div id="als-viewport_0" class="als-viewport" style="width: 852px; height: 95px;">

                    <ul id="als-wrapper_0" class="als-wrapper" style="width: 5680px; height: 95px;">

                        <li id="als-item_0_0" class="als-item" style="left: 3408px;">
                            <a href="https://www.idonate.ie/571_alone.html" target="_blank">

                                <img width="100" title="ALONE" alt="ALONE" src="https://www.idonate.ie/logos/New_logo_2013.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_1" class="als-item" style="left: 3408px;">

                            <a href="https://www.idonate.ie/668_mayo-cancer-support-association.html" target="_blank">

                                <img width="100" title="Mayo Cancer Support Association" alt="Mayo Cancer Support Association" src="https://www.idonate.ie/logos/mayo-cancer-support.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_2" class="als-item" style="left: 3408px;">

                            <a href="https://www.idonate.ie/2134_irish-brain-tumour-support-group-cork-branch.html" target="_blank">

                                <img width="100" title="Irish Brain Tumour Support Group Cork Branch" alt="Irish Brain Tumour Support Group Cork Branch" src="https://www.idonate.ie/logos/irish-brain-tumour-1a.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_3" class="als-item" style="left: 3408px;">

                            <a href="https://www.idonate.ie/1467_laois-domestic-abuse-service-.html" target="_blank">

                                <img width="100" title="Laois Domestic Abuse Service " alt="Laois Domestic Abuse Service " src="https://www.idonate.ie/logos/ldas_logo_jpeg.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_4" class="als-item" style="left: 3408px;">

                            <a href="https://www.idonate.ie/766_signforfun.html" target="_blank">

                                <img width="100" title="SignForFun" alt="SignForFun" src="https://www.idonate.ie/logos/SignForFun_Logo.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_5" class="als-item" style="left: 3408px;">

                            <a href="https://www.idonate.ie/1514_firstlight---irish-sudden-infant-death-association.html" target="_blank">

                                <img width="100" title="FirstLight - Irish Sudden Infant Death Association" alt="FirstLight - Irish Sudden Infant Death Association" src="https://www.idonate.ie/logos/First_Light_Initial_Logo_Final.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_6" class="als-item" style="left: 3408px;">

                            <a href="https://www.idonate.ie/908_raising-and-giving-ireland.html" target="_blank">

                                <img width="100" title="Raising and Giving Ireland" alt="Raising and Giving Ireland" src="https://www.idonate.ie/logos/RAG_IRELAND_Logo.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_7" class="als-item" style="left: 3408px;">

                            <a href="https://www.idonate.ie/2003_kenya-orphan-aid-.html" target="_blank">

                                <img width="100" title="Kenya Orphan Aid " alt="Kenya Orphan Aid " src="https://www.idonate.ie/logos/kenya-1.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_8" class="als-item" style="left: 3408px;">

                            <a href="https://www.idonate.ie/917_irish-woodworkers-for-africa-t-a-just-forests.html" target="_blank">

                                <img width="100" title="Irish Woodworkers for Africa T/A Just Forests" alt="Irish Woodworkers for Africa T/A Just Forests" src="https://www.idonate.ie/logos/just-forests-1.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_9" class="als-item" style="left: 3408px;">

                            <a href="https://www.idonate.ie/2077_johan-jacobsen-trust.html" target="_blank">

                                <img width="100" title="Johan Jacobsen Trust" alt="Johan Jacobsen Trust" src="https://www.idonate.ie/logos/TFJ_logo.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_10" class="als-item" style="left: 3408px;">

                            <a href="https://www.idonate.ie/1457_darndale-belcamp-integrated-childcare-service-ltd.html" target="_blank">

                                <img width="100" title="Darndale Belcamp Integrated Childcare Service Ltd" alt="Darndale Belcamp Integrated Childcare Service Ltd" src="https://www.idonate.ie/logos/jigsaw-centre-1.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_11" class="als-item" style="left: 3408px;">

                            <a href="https://www.idonate.ie/1624_aiding-resources-charity.html" target="_blank">

                                <img width="100" title="Aiding Resources Charity" alt="Aiding Resources Charity" src="https://www.idonate.ie/logos/idonate_logo.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_12" class="als-item" style="left: 3408px;">

                            <a href="https://www.idonate.ie/1571_bright-beginnings-ferbane-community-childcare-centre.html" target="_blank">

                                <img width="100" title="Bright Beginnings Ferbane Community Childcare Centre" alt="Bright Beginnings Ferbane Community Childcare Centre" src="https://www.idonate.ie/logos/bright-beginnings-1.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_13" class="als-item" style="left: 3408px;">

                            <a href="https://www.idonate.ie/1570_the-royal-irish-academy.html" target="_blank">

                                <img width="100" title="The Royal Irish Academy" alt="The Royal Irish Academy" src="https://www.idonate.ie/logos/ria_logo.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_14" class="als-item" style="left: 3408px;">

                            <a href="https://www.idonate.ie/1464_cry-cardiac-risk-in-the-young.html" target="_blank">

                                <img width="100" title="CRY Cardiac Risk in the Young" alt="CRY Cardiac Risk in the Young" src="https://www.idonate.ie/logos/cry-1.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_15" class="als-item" style="left: 3408px;">

                            <a href="https://www.idonate.ie/822_vincentian-lay-missionaries.html" target="_blank">

                                <img width="100" title="Vincentian Lay Missionaries" alt="Vincentian Lay Missionaries" src="https://www.idonate.ie/logos/1387453204_18_HIgh_Res_Logo.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_16" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/1026_collon-animal-sanctuary.html" target="_blank">

                                <img width="100" title="Collon Animal Sanctuary" alt="Collon Animal Sanctuary" src="https://www.idonate.ie/logos/20140312_CAS_19.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_17" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/2054_friends-of-letterkenny-general-hospital.html" target="_blank">

                                <img width="100" title="Friends of Letterkenny General Hospital" alt="Friends of Letterkenny General Hospital" src="https://www.idonate.ie/logos/309727_289247967864028_1909001441_n.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_18" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/2155_our-ponytails-for-charity-.html" target="_blank">

                                <img width="100" title="Our Ponytails for Charity " alt="Our Ponytails for Charity " src="https://www.idonate.ie/logos/our-ponytails-1a.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_19" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/553_irish-horse-welfare-trust.html" target="_blank">

                                <img width="100" title="Irish Horse Welfare Trust" alt="Irish Horse Welfare Trust" src="https://www.idonate.ie/logos/IHWT_Logo.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_20" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/1840_water-babies-splashathon.html" target="_blank">

                                <img width="100" title="Water Babies Splashathon" alt="Water Babies Splashathon" src="https://www.idonate.ie/logos/Water_Babies_Splashathon_Logo.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_21" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/773_dunmanway-family-resource-centre.html" target="_blank">

                                <img width="100" title="Dunmanway Family Resource Centre" alt="Dunmanway Family Resource Centre" src="https://www.idonate.ie/logos/Logo_circle.JPG"></img>
                            </a>

                        </li>
                        <li id="als-item_0_22" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/1233_an-cosan.html" target="_blank">

                                <img width="100" title="An Cosan" alt="An Cosan" src="https://www.idonate.ie/logos/1393004156_6_an_cosan_logo.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_23" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/2000_walk-for-life.html" target="_blank">

                                <img width="100" title="Walk for Life" alt="Walk for Life" src="https://www.idonate.ie/logos/walk-for-life.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_24" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/939_swords-needs-playgrounds.html" target="_blank">

                                <img width="100" title="Swords Needs Playgrounds" alt="Swords Needs Playgrounds" src="https://www.idonate.ie/logos/swords-1.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_25" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/2088_loughrea-family---community-resource-centre.html" target="_blank">

                                <img width="100" title="Loughrea Family & Community Resource Centre" alt="Loughrea Family & Community Resource Centre" src="https://www.idonate.ie/logos/1439903633_15_logo.png"></img>
                            </a>

                        </li>
                        <li id="als-item_0_26" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/1265_making-connections.html" target="_blank">

                                <img width="100" title="Making Connections" alt="Making Connections" src="https://www.idonate.ie/logos/Logo_ALL.png"></img>
                            </a>

                        </li>
                        <li id="als-item_0_27" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/961_robbie-forristal-appeal.html" target="_blank">

                                <img width="100" title="Robbie Forristal Appeal" alt="Robbie Forristal Appeal" src="https://www.idonate.ie/logos/robbie-1.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_28" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/502_life-pregnancy-care-ireland.html" target="_blank">

                                <img width="100" title="Life Pregnancy Care Ireland" alt="Life Pregnancy Care Ireland" src="https://www.idonate.ie/logos/life-logo-1.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_29" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/666_clan-beo.html" target="_blank">

                                <img width="100" title="Clan Beo" alt="Clan Beo" src="https://www.idonate.ie/logos/clan-beo-1.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_30" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/1093_saoirse-foundation.html" target="_blank">

                                <img width="100" title="Saoirse Foundation" alt="Saoirse Foundation" src="https://www.idonate.ie/logos/SaoirseFoundationLogo.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_31" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/1946_donegal-alzheimer-society.html" target="_blank">

                                <img width="100" title="Donegal Alzheimer Society" alt="Donegal Alzheimer Society" src="https://www.idonate.ie/logos/1431192435_9_image.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_32" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/218_migrant-rights-centre-ireland.html" target="_blank">

                                <img width="100" title="Migrant Rights Centre Ireland" alt="Migrant Rights Centre Ireland" src="https://www.idonate.ie/logos/MRCI logo medium.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_33" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/2032_louth-community-drug-and-alcohol-team.html" target="_blank">

                                <img width="100" title="Louth Community Drug and Alcohol Team" alt="Louth Community Drug and Alcohol Team" src="https://www.idonate.ie/logos/lcdat_logo.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_34" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/1480_johnny-hayden-trust.html" target="_blank">

                                <img width="100" title="Johnny Hayden Trust" alt="Johnny Hayden Trust" src="https://www.idonate.ie/logos/1408815789_40_image.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_35" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/930_st--teresa-s-primary-school-balbriggan-parents-association.html" target="_blank">

                                <img width="100" title="St. Teresa's Primary School Balbriggan Parents Association" alt="St. Teresa's Primary School Balbriggan Parents Association" src="https://www.idonate.ie/logos/imageID_18986__imageTypeID_2.image.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_36" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/850_chernobyl-children-international--chernobyl-kilkenny-outreach-group.html" target="_blank">

                                <img width="100" title="Chernobyl Children International, Chernobyl Kilkenny Outreach Group" alt="Chernobyl Children International, Chernobyl Kilkenny Outreach Group" src="https://www.idonate.ie/logos/Chernobyl_25_yr_Logo_Figures_Balloon.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_37" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/1115_move.html" target="_blank">

                                <img width="100" title="MOVE" alt="MOVE" src="https://www.idonate.ie/logos/move-1.jpg"></img>
                            </a>

                        </li>
                        <li id="als-item_0_38" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/988_ahar-ireland.html" target="_blank">

                                <img width="100" title="AHAR Ireland" alt="AHAR Ireland" src="https://www.idonate.ie/logos/AHAR_Corporate_Logo_1_600.png"></img>
                            </a>

                        </li>
                        <li id="als-item_0_39" class="als-item" style="left: -2272px;">

                            <a href="https://www.idonate.ie/760_m-decins-sans-fronti-res-doctors-without-borders-ireland--msf-.html" target="_blank">

                                <img width="100" title="Médecins Sans Frontières/Doctors Without Borders Ireland (MSF)" alt="Médecins Sans Frontières/Doctors Without Borders Ireland (MSF)" src="https://www.idonate.ie/logos/MSF_Ireland_logo_low_res_picture_only.JPG"></img>
                            </a>
                        </li>
                    </ul>

                </div>
                <span class="als-next" data-id="als-next_0">

                    <img title="next" alt="next" src="images/right1.png"></img>
                </span>
            </div>
            <div class="clear"></div>

        </div
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
<script type="text/javascript" src="JS/littleslide.js"></script>
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

