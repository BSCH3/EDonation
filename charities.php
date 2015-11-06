<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'header.php';
?>
<br/>
<!-- START THE FEATURETTES -->
<div class="container marketing">
    <div class="row featurette">
        <h2>Search Charity</h2>


        <form name="form1" method="post" action="search-charity.html" id="form1">    
            <div class="searchBox right" id="div0">             
                <input type="text" name="title" id="title"  onblur="if (this.value == '')
                            this.value = 'Search...';" onFocus="if (this.value == 'Search...')
                                        this.value = '';" value="Search...">
                <input name="" type="submit" value="" onClick="return search_validate();" />
                <button type="submit" span class="button"></button>
            </div>


            <div class="clear"></div>
            <div class="pageContant">
                <div class="wrapper">
                    <div class="content" id="pnlData">

                        <div  id="DGGalleryList">
                            <div class="charityListing">
                                <div class="charityList even first">
                                    <div class="charityImg">
                                        <samp>
                                            <img src="https://www.idonate.ie/logos/unnamed.jpg" title="142nd Esker/180th Lucan South Scout Group" alt="142nd Esker/180th Lucan South Scout Group" />
                                        </samp>
                                    </div>
                                    <div class="charityName">
                                        <a href="https://www.icrowdfund.ie/campaigns/142nd-esker-180th-lucan-south-scout-den/" title="142nd Esker/180th Lucan South Scout Group" alt="_blank">142nd Esker/180th Lucan South Scout Group
                                        </a>
                                    </div>     
                                    <div class="charityVaname">Youth</div>                   
                                    <div class="charityDetail">142nd Esker /180th Lucan South Scouts provide scouting for approx 170 young people from the Lucan ar...... 
                                        <a href="https://www.icrowdfund.ie/campaigns/142nd-esker-180th-lucan-south-scout-den/" title="Read More &raquo;" alt="_blank">Read More &raquo;</a>
                                    </div>
                                </div>

                                <div class="charityList odd">
                                    <div class="charityImg"><samp><img src="https://www.idonate.ie/logos/Screen_Shot_2014-05-10_at_18.35.56.png" title="22nd Meath Donore - Scouting Ireland" alt="22nd Meath Donore - Scouting Ireland" /></samp>
                                    </div>
                                    <div class="charityName"><a href="http://www.irishtourist.com/meath/towns/donore/" title="22nd Meath Donore - Scouting Ireland" alt="_blank">22nd Meath Donore - Scouting Ireland</a></div>

                                    <div class="charityVaname">Youth</div>

                                    <div class="charityDetail">The 22nd Meath is a registered member of Scouting Ireland. Scouting Ireland has over 40,000 members ...... 
                                        <a href="http://www.irishtourist.com/meath/towns/donore/" title="Read More &raquo;" alt="_blank">Read More &raquo;</a>
                                    </div>
                                </div>

                                <div class="charityList even">
                                    <div class="charityImg"><samp><img src="https://www.idonate.ie/logos/_cid_A57D2603-0869-4FE5-A278-C8D4AE46874C.png" title="81st Dublin Scouting Ireland" alt="81st Dublin Scouting Ireland" /></samp></div>

                                    <div class="charityName"><a href="http://www.terenurecollege.ie/index.php/senior-school/extra-curricular/scouting" alt="_blank">81st Dublin Scouting Ireland</a></div>

                                    <div class="charityVaname">Youth</div>

                                    <div class="charityDetail">The 81st Dublin was founded by Fr. Jim McCouaig in 1957. Scouting in Terenure enjoys a proud and lon...... 
                                        <a href="http://www.terenurecollege.ie/index.php/senior-school/extra-curricular/scouting" title="Read More &raquo;" alt="_blank">Read More &raquo;</a>
                                    </div>
                                </div>

                                <div class="charityList odd">
                                    <div class="charityImg"><samp><img src="https://www.idonate.ie/logos/1389183883_47_logo2.jpg" title="87th Dublin Polish Group" alt="87th Dublin Polish Group" /></samp></div>
                                    <div class="charityName"><a href="http://87dpg.plscout.com/" title="87th Dublin Polish Group" alt="_blank">87th Dublin Polish Group</a></div>
                                    <div class="charityVaname">Youth</div>
                                    <div class="charityDetail">We are the first Polish Scouts Group in Scouting Ireland.
                                        We have 4 sections: Beavers, Cubs, Scouts...... 
                                        <a href="http://87dpg.plscout.com/" title="Read More &raquo;" alt="_blank">Read More &raquo;</a>
                                    </div>
                                </div>

                                <div class="charityList even">
                                    <div class="charityImg"><samp><img src="https://www.idonate.ie/logos/92.5_Phoenix_FM_Logo_Standard.jpg" title="92.5 Phoenix FM" alt="92.5 Phoenix FM" /></samp></div>

                                    <div class="charityName"><a href="http://phoenixfm.ie/" title="92.5 Phoenix FM" alt="_blank">92.5 Phoenix FM</a></div>

                                    <div class="charityVaname">Education</div>

                                    <div class="charityDetail">92.5 Phoenix FM is the officially licensed Community Radio station for Dublin 15. The Station curren...... 
                                        <a href="http://phoenixfm.ie/" title="Read More &raquo;" alt="_blank">Read More &raquo;</a>
                                    </div>
                                </div>

                                <div class="charityList odd">
                                    <div class="charityImg"><samp><img src="https://www.idonate.ie/logos/2013-09-29_19.57.57-1.jpg" title="9th Louth Ferdia Scouts" alt="9th Louth Ferdia Scouts" /></samp></div>

                                    <div class="charityName"><a href="https://www.idonate.ie/1088_9th-louth-ferdia-scouts.html" title="9th Louth Ferdia Scouts">9th Louth Ferdia Scouts</a></div>

                                    <div class="charityVaname">Youth</div>

                                    <div class="charityDetail">The 9th Louth Scout group re-opened in Ardee in 2009 and caters for young people from 6 years old to...... <a href="https://www.idonate.ie/1088_9th-louth-ferdia-scouts.html" title="Read More &raquo;">Read More &raquo;</a>
                                    </div>

                                </div>

                                <div class="charityList even">
                                    <div class="charityImg"><samp><img src="https://www.idonate.ie/logos/1334740702_14_ADL_FB_Profiler.jpg" title="A Dogs Life" alt="A Dogs Life" /></samp></div>

                                    <div class="charityName"><a href="https://www.idonate.ie/285_a-dogs-life.html" title="A Dogs Life">A Dogs Life</a></div>

                                    <div class="charityVaname">Animals</div>

                                    <div class="charityDetail">A Dog's Life Charity #18640 started rescuing dogs in 2006. This non-profit organisation is staffed e...... <a href="https://www.idonate.ie/285_a-dogs-life.html" title="Read More &raquo;">Read More &raquo;</a>
                                    </div>

                                </div>

                                <div class="charityList odd">
                                    <div class="charityImg"><samp><img src="https://www.idonate.ie/logos/Logo_SQUARE.jpg" title="A Little Lifetime Foundation" alt="A Little Lifetime Foundation" /></samp></div>

                                    <div class="charityName"><a href="https://www.idonate.ie/2087_a-little-lifetime-foundation.html" title="A Little Lifetime Foundation">A Little Lifetime Foundation</a></div>

                                    <div class="charityVaname">Parental Support</div>

                                    <div class="charityDetail">Providing information and support services to parents and families whose baby is expected to die and...... <a href="https://www.idonate.ie/2087_a-little-lifetime-foundation.html" title="Read More &raquo;">Read More &raquo;</a>
                                    </div>

                                </div>

                                <div class="charityList even">
                                    <div class="charityImg"><samp><img src="https://www.idonate.ie/logos/IMG_248265613223631.jpeg" title="A Little Magic for Maggie" alt="A Little Magic for Maggie" /></samp></div>

                                    <div class="charityName"><a href="https://www.idonate.ie/1143_a-little-magic-for-maggie.html" title="A Little Magic for Maggie">A Little Magic for Maggie</a></div>

                                    <div class="charityVaname">Cancer</div>

                                    <div class="charityDetail">WE are currently trying to raise money to help the family of 6 month old Maggie Flaherty. Maggie has...... <a href="https://www.idonate.ie/1143_a-little-magic-for-maggie.html" title="Read More &raquo;">Read More &raquo;</a>
                                    </div>

                                </div>

                                <div class="charityList odd last">
                                    <div class="charityImg"><samp><img src="https://www.idonate.ie/logos/abacas.jpg" title="ABACAS Kilbarrack Special School" alt="ABACAS Kilbarrack Special School" /></samp></div>

                                    <div class="charityName"><a href="https://www.idonate.ie/1631_abacas-kilbarrack-special-school.html" title="ABACAS Kilbarrack Special School">ABACAS Kilbarrack Special School</a></div>

                                    <div class="charityVaname">Education</div>

                                    <div class="charityDetail">ABACAS Kilbarrack is a special school for children with autism and complex needs.  We are a state fu...... <a href="https://www.idonate.ie/1631_abacas-kilbarrack-special-school.html" title="Read More &raquo;">Read More &raquo;</a>
                                    </div>

                                </div>

                            </div>

                            <!--<div class="pagination"> 
                                <ul><li>
                                        <span><a class='current'>1</a></span></li>
                                    <li><a href='javascript:void(0)' onclick=submit_frm('pagging',document.form1,'','2','','');>2</a></li><li><a href='javascript:void(0)' onclick=submit_frm('pagging',document.form1,'','3','','');>3</a></li><li><a href='javascript:void(0)' onclick=submit_frm('pagging',document.form1,'','4','','');>4</a></li><li><a href='javascript:void(0)' onclick=submit_frm('pagging',document.form1,'','5','','');>5</a></li><li><a href='javascript:void(0)' onclick=submit_frm('pagging',document.form1,'','6','','');>6</a></li><li><a href='javascript:void(0)' onclick=submit_frm('pagging',document.form1,'','7','','');>7</a></li><li><a href='javascript:void(0)' onclick=submit_frm('pagging',document.form1,'','8','','');>8</a></li><li><a href='javascript:void(0)' onclick=submit_frm('pagging',document.form1,'','9','','');>9</a></li><li><a href='javascript:void(0)' onclick=submit_frm('pagging',document.form1,'','10','','');>10</a></li><li><a href='javascript:void(0)' onclick=submit_frm('pagging',document.form1,'','11','','');>11</a></li><li><a href='javascript:void(0)' onclick=submit_frm('pagging',document.form1,'','12','','');>12</a></li><li><a href='javascript:void(0)' onclick=submit_frm('pagging',document.form1,'','13','','');>13</a></li><li><a href='javascript:void(0)' onclick=submit_frm('pagging',document.form1,'','14','','');>14</a></li><li><a href='javascript:void(0)' onclick=submit_frm('pagging',document.form1,'','15','','');>15</a></li><li><a href='javascript:void(0)' onclick=submit_frm('pagging',document.form1,'','16','','');>16</a></li><li><a href='javascript:void(0)' onclick=submit_frm('pagging',document.form1,'','17','','');>17</a></li><li><a href='javascript:void(0)' onclick=submit_frm('pagging',document.form1,'','18','','');>18</a></li><li><a href='javascript:void(0)' onclick=submit_frm('pagging',document.form1,'','19','','');>19</a></li><li><a href='javascript:void(0)' onclick=submit_frm('pagging',document.form1,'','20','',''); >20</a></li> <li> <a href='javascript:void(0)' onclick=submit_frm('pagging',document.form1,'','2','',''); > &raquo; </a></li> <li> <a href='javascript:void(0)' onclick=submit_frm('pagging',document.form1,'','77','',''); > <span> last </span> </a>
                                    </li></ul>
                            </div>-->
                            <div class="clear"></div>
                        </div>
                        <input id="asearchcondition" type="hidden" name="asearchcondition" value="" />
                        <input id="searchflag" type="hidden" name="searchflag" value="" />
                        <input id="sortflag" type="hidden" name="sortflag" value="" />
                        <input id="PID" type="hidden" name="PID" value="" />
                        <input id="page" type="hidden" name="page" value="1" />
                        <input id="sortby" type="hidden" name="sortby" value="" />
                        <input id="sorttype" type="hidden" name="sorttype" value="0" />
                        <input id="mode" type="hidden" name="mode" value="" />
                    </div>
                </div>    
            </div>
        </form>

    </div>
    <hr class="featurette-divider">

    <!-- FOOTER -->
    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>2015 Students-NCI, &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

</div>
</body>
</html>