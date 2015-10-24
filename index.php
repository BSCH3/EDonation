
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
          	<script type="text/javascript">
		$(document).ready(function() {

			$.featureList(
				$("#tabs li a"),
				$("#output li"), {
					start_item	:	0
				}
			);
		});
	</script>
   	<script language="javascript" type="text/javascript">
	$(document).ready(function() 
	{
		$("#lista1").als({
			visible_items: 6,
			scrolling_items: 3,
			orientation: "horizontal",
			circular: "yes",
			autoscroll: "yes",
			interval: 4000,
			direction: "left",
			start_from: 0
		});
	});
	function checkfriend()
	{
		if(document.searchFriend.title.value=='' || document.searchFriend.title.value=='Find a Fundraiser')
		{
			alert("Please enter search keyword.");
			document.searchFriend.title.focus();
			return false;
		}
		else
		{
		var txt = document.searchFriend.title.value;
		if(txt.length < 3)
			{
				alert("Please enter minimum 3 charecters.");
				document.searchFriend.title.focus();
				return false;
			}
		}
		
	}
	function checkfundraiser()
	{
		if(document.searchfundraiser.title.value=='' || document.searchfundraiser.title.value=='Find a Fundraiser')
		{
			alert("Please enter search keyword.");
			document.searchfundraiser.title.focus();
			return false;
		}
		else
		{
		var txt = document.searchfundraiser.title.value;
		if(txt.length < 3)
			{
				alert("Please enter minimum 3 charecters.");
				document.searchfundraiser.title.focus();
				return false;
			}
		}
	}
	function checkcharity()
	{
		if(document.searchcharity.title.value=='' || document.searchcharity.title.value=='Find a Charity')
		{
			alert("Please enter search keyword.");
			document.searchcharity.title.focus();
			return false;
		}
		else
		{
		var txt = document.searchcharity.title.value;
		if(txt.length < 3)
			{
				alert("Please enter minimum 3 charecters.");
				document.searchcharity.title.focus();
				return false;
			}
		}
	}
    </script>
      <h3 class="left">charities we work with..</h3>
      <br />
      <div class="scroller">
      <span class="als-prev"><img src="images/thin_left_arrow_333.png" alt="prev" title="previous" /></span>
      <div class= "als-viewport">
        <ul class="als-wrapper">
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1073_the-grace-nolan-foundation.html"><img width="100" src="https://www.idonate.ie/logos/gracenolan.jpg" alt="The Grace Nolan Foundation" title="The Grace Nolan Foundation" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1254_lifesaving-initiatives-against-methanol---liam.html"><img width="100" src="https://www.idonate.ie/logos/1394028516_6_image.jpg" alt="Lifesaving Initiatives Against Methanol - LIAM" title="Lifesaving Initiatives Against Methanol - LIAM" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/2038_templebraden-church-renovation-fund.html"><img width="100" src="https://www.idonate.ie/logos/templebraden_church-01.jpg" alt="Templebraden Church Renovation Fund" title="Templebraden Church Renovation Fund" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/870_act-for-meningitis.html"><img width="100" src="https://www.idonate.ie/logos/act_logo.jpg" alt="ACT for Meningitis" title="ACT for Meningitis" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/750_blood-bike-west.html"><img width="100" src="https://www.idonate.ie/logos/blood_bike_west_text_side.jpg" alt="Blood Bike West" title="Blood Bike West" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/226_war-child-ireland.html"><img width="100" src="https://www.idonate.ie/logos/Warchild Logo.jpg" alt="War Child Ireland" title="War Child Ireland" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1931_m-u--barnhall-rfc.html"><img width="100" src="https://www.idonate.ie/logos/18439_100377713329732_5067864_n.jpg" alt="M.U. Barnhall RFC" title="M.U. Barnhall RFC" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1936_robert-flynn-trust.html"><img width="100" src="https://www.idonate.ie/logos/rflogo-web.jpg" alt="Robert Flynn Trust" title="Robert Flynn Trust" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1918_caps---cavan-autism-parents-support-group.html"><img width="100" src="https://www.idonate.ie/logos/1430216017_2_image.jpg" alt="CAPS - Cavan Autism Parents Support Group" title="CAPS - Cavan Autism Parents Support Group" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/182_nurture.html"><img width="100" src="https://www.idonate.ie/logos/Nurture_Charity.jpg" alt="Nurture" title="Nurture" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/328_dundalk-dog-rescue.html"><img width="100" src="https://www.idonate.ie/logos/ddr.jpg" alt="Dundalk Dog Rescue" title="Dundalk Dog Rescue" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1324_leo-giron-scholarship-fund.html"><img width="100" src="https://www.idonate.ie/logos/leo-giron.jpg" alt="Leo Giron Scholarship Fund" title="Leo Giron Scholarship Fund" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/233_croi.html"><img width="100" src="https://www.idonate.ie/logos/Croi.jpg" alt="Croi" title="Croi" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/412_bilberry-goat-heritage-trust.html"><img width="100" src="https://www.idonate.ie/logos/img043.jpg" alt="Bilberry Goat Heritage Trust" title="Bilberry Goat Heritage Trust" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1226_rooskey-church-renovation-fund.html"><img width="100" src="https://www.idonate.ie/logos/rooskey-church.jpg" alt="Rooskey Church Renovation Fund" title="Rooskey Church Renovation Fund" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1545_ballinteer-educate-together-national-school.html"><img width="100" src="https://www.idonate.ie/logos/5796873_orig.jpg" alt="Ballinteer Educate Together National School" title="Ballinteer Educate Together National School" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/360_barnardos.html"><img width="100" src="https://www.idonate.ie/logos/barnardos.jpg" alt="Barnardos" title="Barnardos" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/544_knockadoon-youth-week.html"><img width="100" src="https://www.idonate.ie/logos/KYW_Crest_Complete.jpg" alt="Knockadoon Youth Week" title="Knockadoon Youth Week" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1457_darndale-belcamp-integrated-childcare-service-ltd.html"><img width="100" src="https://www.idonate.ie/logos/jigsaw-centre-1.jpg" alt="Darndale Belcamp Integrated Childcare Service Ltd" title="Darndale Belcamp Integrated Childcare Service Ltd" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/195_teni---transgender-equality-network-ireland.html"><img width="100" src="https://www.idonate.ie/logos/Colour logo with text _ print quality.jpg" alt="TENI - Transgender Equality Network Ireland" title="TENI - Transgender Equality Network Ireland" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1971_cork--s-96fm-giving-for-living-radiothon.html"><img width="100" src="https://www.idonate.ie/logos/radiothon.png" alt="Cork\'s 96fm Giving for Living Radiothon" title="Cork's 96fm Giving for Living Radiothon" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1089_family-life-services.html"><img width="100" src="https://www.idonate.ie/logos/familycastlebar.jpg" alt="Family Life Services" title="Family Life Services" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/559_lupus-group-ireland.html"><img width="100" src="https://www.idonate.ie/logos/lupus-support.jpg" alt="Lupus Group Ireland" title="Lupus Group Ireland" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/910_kerry-mountain-rescue-association.html"><img width="100" src="https://www.idonate.ie/logos/title2.jpg" alt="Kerry Mountain Rescue Association" title="Kerry Mountain Rescue Association" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/301_arthrogryposis-association-of-ireland.html"><img width="100" src="https://www.idonate.ie/logos/AAI Basic Logo.jpg" alt="Arthrogryposis Association of Ireland" title="Arthrogryposis Association of Ireland" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/656_progressio-ireland.html"><img width="100" src="https://www.idonate.ie/logos/fb_progressio_narrow.jpg" alt="Progressio Ireland" title="Progressio Ireland" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1038_the-bridge-cafe.html"><img width="100" src="https://www.idonate.ie/logos/The_Bridge_Full_Square_FB_Logo.jpg" alt="The Bridge Cafe" title="The Bridge Cafe" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1174_nurses-for-jordan.html"><img width="100" src="https://www.idonate.ie/logos/20131203_140953.jpg" alt="Nurses For Jordan" title="Nurses For Jordan" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1885_midleton-educate-together-national-school.html"><img width="100" src="https://www.idonate.ie/logos/School_Logo.png" alt="Midleton Educate Together National School" title="Midleton Educate Together National School" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1118_galway-visually-impaired-activity-club.html"><img width="100" src="https://www.idonate.ie/logos/VIP_logo_2.jpg" alt="Galway Visually Impaired Activity Club" title="Galway Visually Impaired Activity Club" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1280_mary--s-meals.html"><img width="100" src="https://www.idonate.ie/logos/MarysMeals_RGB.jpg" alt="Mary\'s Meals" title="Mary's Meals" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/1380_shandon-appeal.html"><img width="100" src="https://www.idonate.ie/logos/Shandon_Appeal.png" alt="Shandon Appeal" title="Shandon Appeal" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/2086_drogheda-homeless-aid.html"><img width="100" src="https://www.idonate.ie/logos/DHA.jpg" alt="Drogheda Homeless Aid" title="Drogheda Homeless Aid" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/2153_look-good-feel-better-ireland.html"><img width="100" src="https://www.idonate.ie/logos/lookgoodfeelbetter.jpg" alt="Look Good Feel Better Ireland" title="Look Good Feel Better Ireland" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/731_aoibheanns-pink-tie.html"><img width="100" src="https://www.idonate.ie/logos/apt.jpg" alt="Aoibheanns Pink Tie" title="Aoibheanns Pink Tie" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/828_wexford-islamic-cultural-centre.html"><img width="100" src="https://www.idonate.ie/logos/wicc-1.jpg" alt="Wexford Islamic Cultural Centre" title="Wexford Islamic Cultural Centre" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/2021_aoife-beary.html"><img width="100" src="https://www.idonate.ie/logos/11665545_1100428239972066_4354284057686208242_n_2_.jpg" alt="Aoife Beary" title="Aoife Beary" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/2142_mayo-kitty-catcher.html"><img width="100" src="https://www.idonate.ie/logos/mkc-2.jpg" alt="Mayo Kitty-Catcher" title="Mayo Kitty-Catcher" /></a></li>
                    <li class="als-item"><a target="_blank" href="https://www.idonate.ie/345_carlow-bible-church.html"><img width="100" src="https://www.idonate.ie/logos/LOGO.JPG" alt="Carlow Bible Church" title="Carlow Bible Church" /></a></li>
                  </ul>
      </div>
      <span class="als-next"><img src="images/thin_right_arrow_333.png" alt="next" title="next" /></span> 
       </div>
      
       <div class="clear"></div>
    </div>
    </div>
             
    <!-- FOOTER -->
    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>2015 Students-NCI, &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

</div>

</body>
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

