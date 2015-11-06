<?php
/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

require_once 'header.php';
?>
<h2>Fifth Computer Generation (1990 - onwards) - Artificial Intelligence</h2>
<br/>
<!-- START THE FEATURETTES -->
<div class="container marketing">
    <div class="row featurette">

<div id="searchform">
  <!-- <div class="inputBox">
         <input type="hidden" name="submit" value="submit" id="submit" />
        <input type="text"  onblur="if(this.value=='')this.value='Start Date';" onFocus="if(this.value=='Start Date')this.value='';" name="sdate" id="sdate" value="Start Date" /></div>    
 
   <div class="inputBox">
     <input type="text"  onblur="if(this.value=='')this.value='End Date';" onFocus="if(this.value=='End Date')this.value='';"  name="ldate" id="ldate" value="End Date" />
    </div>-->
	
    <select name="chname" id="chname" style=";display:none;">
        <option value="select">select</option>
                        <option value="164" >Pieta House</option>
                <option value="196" >Outreach Moldova (ORM)</option>
                <option value="177" >Galway Rape Crisis Centre</option>
                <option value="168" >Angelman Syndrome Ireland</option>
                <option value="192" >Order of Malta Castleknock</option>
                <option value="197" >Concern Worldwide</option>
                <option value="214" >The Volunteer Projects</option>
                <option value="218" >Migrant Rights Centre Ireland</option>
                <option value="223" >Autism Assistance Dogs Ireland</option>
                <option value="204" >Breast Cancer Ireland </option>
                <option value="244" >Marie Keating Foundation</option>
                <option value="221" >Dip in the Nip Foundation</option>
                <option value="228" >Focus Ireland</option>
                <option value="248" >Last Hope Animal Charity</option>
                <option value="278" >Tuam Cancer Care</option>
                <option value="274" >The Birches, Alzheimer Day Care, Dundalk</option>
                <option value="280" >Galway Autism Partnership GAP</option>
                <option value="285" >A Dogs Life</option>
                <option value="172" >Western Alzheimers</option>
                <option value="226" >War Child Ireland</option>
                <option value="284" >Alternating Hemiplegia Of Childhood Ireland</option>
                <option value="229" >The Hope Foundation</option>
                <option value="230" >East Galway Animal Rescue</option>
                <option value="232" >Myaware (formerly Myasthenia Gravis Association)</option>
                <option value="271" >Foundation Nepal</option>
                <option value="186" >Galway Parkinsons Assocation</option>
                <option value="233" >Croi</option>
                <option value="267" >DFBA Community Enterprises Ltd</option>
                <option value="297" >Clare Youth Service</option>
                <option value="330" >Scouting Ireland</option>
                <option value="310" >Raynaud's & Scleroderma Ireland</option>
                <option value="328" >Dundalk Dog Rescue</option>
                <option value="360" >Barnardos</option>
                <option value="361" >Dublin AIDS Alliance</option>
                <option value="359" >Down Syndrome Ireland</option>
                <option value="386" >Friends of Tim</option>
                <option value="372" >Sunni Mae Trust</option>
                <option value="392" >IEC</option>
                <option value="357" >SCOOP</option>
                <option value="358" >Dublin Zombie Walk</option>
                <option value="371" >Threshold </option>
                <option value="355" >Down Syndrome Dublin </option>
                <option value="621" >Sharpeshill - Wicklow SPCA</option>
                <option value="245" >Turn2me.org</option>
                <option value="315" >My Canine Companion</option>
                <option value="436" >Global NGO Centres</option>
                <option value="401" >The Greater Chernobyl Cause</option>
                <option value="458" >Nasc, the Irish Immigrant Support Centre</option>
                <option value="273" >Zest4Kidz</option>
                <option value="272" >Sound Advice (formerly IDK)</option>
                <option value="534" >Iveragh Mental Health Services</option>
                <option value="559" >Lupus Group Ireland</option>
                <option value="562" >Ruhama</option>
                <option value="173" >Cancer Care West</option>
                <option value="573" >Limerick Animal Welfare</option>
                <option value="585" >O\'Regan Park Development c/o Obair Newmarket-On-Fergus Limited</option>
                <option value="327" >Child Focus Therapy</option>
                <option value="583" >Clane RFC</option>
                <option value="687" >Dogs In Distress</option>
                <option value="596" >Coolmine Therapeutic Community</option>
                <option value="686" >Cork Association For Autism</option>
                <option value="690" >Youth Release</option>
                <option value="678" >Midlands Simon Community</option>
                <option value="508" >Kilkerrin United</option>
                <option value="704" >Attracta Doherty Pink n\' Gold Fund</option>
                <option value="275" >Western Care Association</option>
                <option value="367" >South East Animal Rescue</option>
                <option value="241" >Arthritis Ireland </option>
                <option value="713" >The Deirdre Lyons Trust Fund</option>
                <option value="681" >Tiglin TCI</option>
                <option value="731" >Aoibheanns Pink Tie</option>
                <option value="240" >Muscular Dystrophy Ireland</option>
                <option value="629" >Wildcatz.ie </option>
                <option value="181" >Irish Wheelchair Association</option>
                <option value="719" >Easi-Cab Travel Club </option>
                <option value="727" >HOMELink Bray </option>
                <option value="749" >Aware</option>
                <option value="763" >Tjs Epilepsy Journey</option>
                <option value="761" >Endometriosis Association of Ireland</option>
                <option value="766" >SignForFun</option>
                <option value="317" >Special Needs Parents Association</option>
                <option value="425" >Temple Street Foundation</option>
                <option value="739" >Dogs Aid</option>
                <option value="750" >Blood Bike West</option>
                <option value="777" >K.D.Y.S(Kerry Diocesan Youth Service)</option>
                <option value="778" >Get Grainne Home</option>
                <option value="660" >LARCC National Cancer Retreat & Support Centre</option>
                <option value="788" >Irish Heart Foundation</option>
                <option value="644" >LauraLynn Ireland\'s Children\'s Hospice</option>
                <option value="765" >Ballycotton National School Parents\' Council</option>
                <option value="461" >ISPCA - Irish Society for the Prevention of Cruelty to Animals </option>
                <option value="810" >Peter McVerry Trust</option>
                <option value="656" >Progressio Ireland</option>
                <option value="794" >Jigsaw Galway </option>
                <option value="807" >Ectopic Pregnancy Ireland</option>
                <option value="789" >Colaiste Eanna CBS</option>
                <option value="394" >K.I.D.S. Projects</option>
                <option value="819" >Treatment for Dylan to walk</option>
                <option value="243" >Mercy University Hospital Foundation</option>
                <option value="1572" >L.H.P.R - Leinster Horse & Pony Rescue </option>
                <option value="822" >Vincentian Lay Missionaries</option>
                <option value="818" >Help Sebastian Hear Trust Fund</option>
                <option value="817" >WALK</option>
                <option value="677" >Holly's Horse Haven </option>
                <option value="825" >National Exotic Animal Sanctuary (NEAS)</option>
                <option value="853" >Fundraising for Ciara</option>
                <option value="753" >The Pole Sea Memorial Fund, Skerries</option>
                <option value="844" >Cork ARC Cancer Support House</option>
                <option value="820" >Cure Kiki </option>
                <option value="747" >DeafHear</option>
                <option value="755" >University of Limerick Foundation</option>
                <option value="799" >Cork Mental Health Foundation</option>
                <option value="835" >Word of Life Church Clonmel</option>
                <option value="293" >Donegal Mountain RescueTeam</option>
                <option value="845" >Martin\'s Grand Plan - Tour De Frank</option>
                <option value="870" >ACT for Meningitis</option>
                <option value="500" >Cottage Autism Network Wexford</option>
                <option value="861" >Coeliac Society of Ireland</option>
                <option value="850" >Chernobyl Children International, Chernobyl Kilkenny Outreach Group</option>
                <option value="409" >Sligo Centre for Independent Living Ltd.</option>
                <option value="877" >Ballinderreen Juvenile Hurling Club</option>
                <option value="848" >The Ethiopia Deaf Project</option>
                <option value="519" >Hand in Hand</option>
                <option value="800" >Friends of Ollie</option>
                <option value="577" >Laois Spca</option>
                <option value="886" >The Friends of St Luke\'s Cancer Care</option>
                <option value="895" >The Lynsey Cribbin Trust</option>
                <option value="641" >Burren Animal Rescue</option>
                <option value="912" >Kids in Need Ireland</option>
                <option value="914" >Rathcline GAA</option>
                <option value="910" >Kerry Mountain Rescue Association</option>
                <option value="684" >St John Ambulance Brigade of Ireland, Cabinteely Cadet Division</option>
                <option value="891" >Cobh Pirates RFC</option>
                <option value="916" >Down Syndrome Carlow</option>
                <option value="913" >Katie\'s Dream To Walk</option>
                <option value="887" >Ashirbad Society N.U.I.G</option>
                <option value="171" >Sample Charity\'s</option>
                <option value="701" >Acquired Brain Injury Ireland</option>
                <option value="918" >North Kildare Educate Together School</option>
                <option value="938" >Lacken National School</option>
                <option value="926" >Cork Samaritans</option>
                <option value="553" >Irish Horse Welfare Trust</option>
                <option value="922" >Little Way Cancer Support Centre</option>
                <option value="974" >Glencastle Special Class</option>
                <option value="905" >Glencarraig Sighthound Rescue</option>
                <option value="1594" >My Lovely Horse Rescue</option>
                <option value="966" >New Life - Support Group for Vulnerable Children in Zimbabwe</option>
                <option value="990" >Carrigtwohill Mens Shed</option>
                <option value="1787" >Ballyboden St Endas GAA Camogie and Ladies Football Club</option>
                <option value="988" >AHAR Ireland</option>
                <option value="1005" >Drogheda River Rescue and Recovery Service</option>
                <option value="1010" >Mayo Rape Crisis Centre Ltd</option>
                <option value="899" >Loophead Loop Cycle 2014</option>
                <option value="347" >Human Appeal Ireland</option>
                <option value="700" >Mayo Roscommon Hospice Foundation</option>
                <option value="808" >William Winder Rainbow Foundation</option>
                <option value="941" >Jigsaw Roscommon </option>
                <option value="950" >Ndiini School Food Programme</option>
                <option value="1043" >The Gavin Glynn Foundation</option>
                <option value="993" >COPE Galway</option>
                <option value="721" >The David Cahill Rehabilitation Fund</option>
                <option value="1040" >Ryan\'s Fund</option>
                <option value="945" >Yahoo! Employee Foundation Dublin</option>
                <option value="1021" >National Women\'s Council of Ireland</option>
                <option value="471" >Gorta Self Help Africa</option>
                <option value="348" >Mid West Simon Community</option>
                <option value="1062" >Mid-West Spina Bifida and Hydrocephalus Association</option>
                <option value="947" >St John Ambulance Drogheda Division</option>
                <option value="880" >Soar</option>
                <option value="209" >Moate and Midland\'s Dog Rescue</option>
                <option value="1088" >9th Louth Ferdia Scouts</option>
                <option value="1115" >MOVE</option>
                <option value="1119" >The Good and New Cancer Charity</option>
                <option value="1118" >Galway Visually Impaired Activity Club</option>
                <option value="1107" >Realt na Mara</option>
                <option value="996" >Parents, Family And Friends Association, St John of God Carmona Services</option>
                <option value="1117" >Netball Ireland</option>
                <option value="1133" >St John Ambulance Brigade Glenageary Division</option>
                <option value="1077" >Parkinsons Association of Ireland</option>
                <option value="642" >Prader Willi Syndrome Association of Ireland</option>
                <option value="1145" >Typhoon Haiyan (M Bottarlini) Fund Appeal</option>
                <option value="1135" >Clogheen Hospice Suite Construction Fund</option>
                <option value="651" >Building of Hope</option>
                <option value="1155" >Cycle for Causes</option>
                <option value="717" >Galway Simon Community</option>
                <option value="1093" >Saoirse Foundation</option>
                <option value="1170" >Spiorad Shaidhbh</option>
                <option value="1157" >Jigsaw Meath</option>
                <option value="1178" >Childhood Cancer Foundation</option>
                <option value="1048" >On The Road Again</option>
                <option value="1194" >Dublin Chernobyl Children International</option>
                <option value="1197" >Children of Lir Pre-school </option>
                <option value="1151" >GROW in Ireland</option>
                <option value="867" >The Alzheimer Society of Ireland</option>
                <option value="1190" >NUI Galway Students\' Union Charities</option>
                <option value="1191" >Merryn</option>
                <option value="1207" >Clarecastle GAA</option>
                <option value="1206" >Ballinrobe GAA Club</option>
                <option value="1188" >iCAN Irish Children\'s Arthritis Network</option>
                <option value="1218" >CLG Tuar Mhic Eadaigh</option>
                <option value="1179" >Thailand Childcare Volunteering</option>
                <option value="1266" >Le Cheile Youth Club & The Carbally Community Centre </option>
                <option value="1141" >St.Michael\'s Rowing Club, Dun Laoghaire</option>
                <option value="1233" >An Cosan</option>
                <option value="1242" >Portlaoise Educate Together N.S</option>
                <option value="1213" >St. Paul\'s Special Olympic Club</option>
                <option value="908" >Raising and Giving Ireland</option>
                <option value="1226" >Rooskey Church Renovation Fund</option>
                <option value="889" >Anne Sullivan Foundation for the Deaf/Blind</option>
                <option value="1228" >Sligo Cancer Support Centre</option>
                <option value="1198" >Support Africa</option>
                <option value="1317" >Galway One World Centre</option>
                <option value="1255" >The Thomas Hayes Trust</option>
                <option value="276" >Community Law & Mediation </option>
                <option value="182" >Nurture</option>
                <option value="1254" >Lifesaving Initiatives Against Methanol - LIAM</option>
                <option value="1222" >Protect The Children of the World</option>
                <option value="1212" >Ryan Croker Benefit Fund</option>
                <option value="1247" >Irish Road Victims\' Association</option>
                <option value="1232" >Tadhg O\'Fainin Foundation</option>
                <option value="1199" >Caring for Padraig</option>
                <option value="1267" >SVP Buncrana </option>
                <option value="1272" >The Molly McNally Miracle Trust</option>
                <option value="1238" >St John Ambulance Dublin 15</option>
                <option value="1279" >Holy Family Special School</option>
                <option value="187" >MADRA</option>
                <option value="1286" >Blood Bike South</option>
                <option value="1275" >Rossbeigh Playground and Muti-Sport Area Project</option>
                <option value="1283" >St. Michael\'s Parish Youth Project</option>
                <option value="440" >Spirit Radio</option>
                <option value="1265" >Making Connections</option>
                <option value="1312" >Glenealy GAA Development Fund</option>
                <option value="768" >Free Legal Advice Centres Ltd (FLAC)</option>
                <option value="795" >Creggs National School - Sunshine Class</option>
                <option value="855" >The Rett Syndrome Association of Ireland</option>
                <option value="1111" >Irish Society for Colitis and Crohn\'s Disease</option>
                <option value="1067" >For Pete\'s Sake</option>
                <option value="1336" >AIRC Supporting Children With Disabilities in Mayo</option>
                <option value="772" >Helium Arts</option>
                <option value="1547" >Holy Angels Day Care Centre</option>
                <option value="1478" >Sophie\'s Journey Foundation </option>
                <option value="1910" >CGI Eastern Region Raise the Roof</option>
                <option value="1146" >Matt Talbot Community Trust</option>
                <option value="1253" >Noor Community Centre for Kids (NCCK)</option>
                <option value="1350" >Inner City Helping Homeless</option>
                <option value="1756" >Ben and Jake Connolly Trust</option>
                <option value="238" >Friends of South Tipp General Hospital</option>
                <option value="1291" >Galway Mental Health Association</option>
                <option value="1327" >Inishbofin Development Company Ltd</option>
                <option value="1276" >Tallaght Parents Autism Support Group</option>
                <option value="1361" >Irish Therapy Dogs</option>
                <option value="1368" >Step up for Sophie</option>
                <option value="1353" >Longford Women\'s Link</option>
                <option value="1305" >Chronic Pain Ireland</option>
                <option value="975" >The Donkey Sanctuary (Ireland ) Ltd</option>
                <option value="1382" >The Laura Hickey Fund</option>
                <option value="1369" >KieranMacMahon Memorial Classic</option>
                <option value="1315" >Michael \'Birdie\' McLaughlin</option>
                <option value="1372" >Leo Casey Fundraising </option>
                <option value="1389" >The Geraldine Lavelle Trust</option>
                <option value="266" >Sticks and Stones</option>
                <option value="1379" >Saving Grace</option>
                <option value="875" >Voices For Down Syndrome Galway</option>
                <option value="1269" >Blue Skies Trust</option>
                <option value="1386" >Care After Prison</option>
                <option value="1110" >Cystic Fibrosis Galway Hospital Project</option>
                <option value="1402" >Voluntary Service International (VSI) - Teenage Programme</option>
                <option value="978" >Sligo Leitrim Mountain Rescue Team</option>
                <option value="1322" >TALK</option>
                <option value="1423" >Richard Keith Memorial Fund</option>
                <option value="1428" >The Tommy O Donnell Trust</option>
                <option value="1433" >The North-East MS Therapy Centre</option>
                <option value="1429" >Abbeyknockmoy Community Playground</option>
                <option value="1419" >Kilcavan GAA</option>
                <option value="1362" >Cork Animal Care Society</option>
                <option value="1479" >Navan RFC U15s</option>
                <option value="1491" >Daire Coyle Trust</option>
                <option value="1014" >Cycle for SID</option>
                <option value="1466" >Shannon Estuary Mud Search and Rescue</option>
                <option value="1092" >BUMBLEance Children\'s Ambulance Service</option>
                <option value="1502" >Patient Comfort Fund</option>
                <option value="592" >Children\'s Rights Alliance</option>
                <option value="1516" >Mental Health Awareness</option>
                <option value="2171" >Eamonn O Hara Sligos Greatest Supporter</option>
                <option value="1523" >Dunboyne AC </option>
                <option value="1544" >Nursery Thymes Community Playschool </option>
                <option value="1559" >Kildare Town Educate Together N.S.</option>
                <option value="1530" >Irish Emergency Logistics Team</option>
                <option value="370" >Men\'s Cancer Alliance</option>
                <option value="1278" >Poppy\'s Wheels</option>
                <option value="1562" >Ian\'s Trust</option>
                <option value="1545" >Ballinteer Educate Together National School</option>
                <option value="1571" >Bright Beginnings Ferbane Community Childcare Centre</option>
                <option value="1583" >Sams Steps</option>
                <option value="827" >Community Cats Network</option>
                <option value="1586" >Roscommon Lions Club</option>
                <option value="1614" >Abbeyknockmoy Under Age Development Fund</option>
                <option value="1599" >The Lochlann Doyle Fund</option>
                <option value="1610" >Friends Of Frank </option>
                <option value="1613" >DCU Raising and Giving </option>
                <option value="1676" >CASA Loughrea</option>
                <option value="1605" >Bluestack Special Needs Foundation</option>
                <option value="1711" >City of Hope, Lusaka, Zambia</option>
                <option value="1694" >The Banner GAA Club, Ennis</option>
                <option value="1225" >Special Olympics Ireland</option>
                <option value="1750" >Ballinderreen Gaa Club</option>
                <option value="1782" >SWAN Youth Service - Boston Programme</option>
                <option value="1739" >St John Ambulance Glanmire Division</option>
                <option value="1319" >Islamic Relief</option>
                <option value="1792" >Calcutta Run</option>
                <option value="1771" >Limerick City CDP</option>
                <option value="1489" >Simon Community</option>
                <option value="1783" >Climb4Cancer</option>
                <option value="1302" >Little Wishes edenderry</option>
                <option value="1808" >Faolchu Karate Squad Fund</option>
                <option value="1799" >St Mary\'s College RFC</option>
                <option value="1813" >Helen Hughes Gilligan Memorial in support of Home Share Galway</option>
                <option value="1805" >Waterford & South Kilkenny Branch of Down Syndrome Ireland</option>
                <option value="1803" >Strictly Fermoy - Fermoy GAA Community Development Fund</option>
                <option value="1821" >The Super Cooper 5k</option>
                <option value="1754" >Blood Bike East</option>
                <option value="1606" >Roscommon SPCA</option>
                <option value="1831" >PestalozziWorld</option>
                <option value="878" >Irish Girl Guides</option>
                <option value="1835" >Walk With Me Daddy</option>
                <option value="1830" >Phelim Hannon Trust</option>
                <option value="1367" >Bradog bike project - a programme of Bradog Regional Youth Service</option>
                <option value="1828" >Edmund Rice Summer Camp Waterford</option>
                <option value="1385" >Saint Ultans Childcare Project</option>
                <option value="1840" >Water Babies Splashathon</option>
                <option value="1847" >David Griffin Fund</option>
                <option value="1859" >Autism Support Louth & Meath</option>
                <option value="1868" >Run4Ru</option>
                <option value="851" >Shine a Light Suicide and Mental Health Awareness Group</option>
                <option value="1867" >Blackwater carriage driving club for friends of leukemia patients Cork</option>
                <option value="1624" >Aiding Resources Charity</option>
                <option value="1905" >Viatores Christi</option>
                <option value="1904" >Titans Basketball Club Galway</option>
                <option value="1907" >Cats\' Aid</option>
                <option value="1448" >Triple A Alliance (Wicklow)</option>
                <option value="1894" >Craobh Chiarain GAA Club</option>
                <option value="1767" >Mayo Association of Shotokan Karate</option>
                <option value="1918" >CAPS - Cavan Autism Parents Support Group</option>
                <option value="1873" >Strictly St. Joseph\'s NS Kilcock</option>
                <option value="1896" >The Irish Heritage Trust</option>
                <option value="1852" >Youth Work Ireland</option>
                <option value="1928" >Strictly Ballyroan</option>
                <option value="1917" >EARTH QUAKE RELIEF FUND - NEPAL IRELAND SOCIETY </option>
                <option value="1932" >Little People of Ireland</option>
                <option value="1935" >Boomerang Youth Centre & Cafe</option>
                <option value="1934" >Village Counselling Services</option>
                <option value="1953" >The Laura Maguire Foundation</option>
                <option value="797" >Lisheens House West Cork Suicide Prevention Service</option>
                <option value="1841" >142nd Esker/180th Lucan South Scout Group</option>
                <option value="1971" >Cork\'s 96fm Giving for Living Radiothon</option>
                <option value="1958" >Tallaght Hospital</option>
                <option value="1597" >Daniels Voyage</option>
                <option value="1925" >Open Door Day Centre</option>
                <option value="1965" >YMCA Dublin</option>
                <option value="1982" >Irish Deaf Youth Association</option>
                <option value="1138" >Corbet Suicide Prevention Patrol</option>
                <option value="1930" >Meningitis Research Foundation</option>
                <option value="2001" >Pat Divilly Keep moving Forward for Console</option>
                <option value="2002" >Attymass Community Centre</option>
                <option value="1946" >Donegal Alzheimer Society</option>
                <option value="2016" >Delvin Camogie Club</option>
                <option value="1849" >Ardfinnan GAA</option>
                <option value="2019" >Musgrave Triathlon for Crumlin and Breakthrough Cancer Research</option>
                <option value="169" >Feileacain - Stillbirth and Neonatal Death Association of Ireland</option>
                <option value="2021" >Aoife Beary</option>
                <option value="1282" >Teen-Line Ireland</option>
                <option value="1945" >Run for Moya</option>
                <option value="2032" >Louth Community Drug and Alcohol Team</option>
                <option value="1068" >Care For Shane</option>
                <option value="1331" >Mid West School for the Deaf</option>
                <option value="2012" >CDKL5 Ireland</option>
                <option value="2051" >Zoe Cryan Trust</option>
                <option value="1978" >STEM MS for Niamh</option>
                <option value="1471" >Kevin Bell Repatriation Trust</option>
                <option value="2031" >The Margaret McGeown Mobility Fund</option>
                <option value="2069" >Rathdangan Vintage Run</option>
                <option value="2059" >CUH (Cork University Hospital) Charity</option>
                <option value="1920" >Innovista Ireland</option>
                <option value="2074" >Ronald McDonald House</option>
                <option value="2101" >Irish Squash and Education Association</option>
                <option value="2091" >The Lisa Bracken Foundation</option>
                <option value="2085" >Mark\'s Wish To Walk </option>
                <option value="1938" >The Irish Blue Cross</option>
                <option value="2067" >GOOD COUNSEL GAA & CAMOGIE CLUB</option>
                <option value="2095" >Shamrock Rovers</option>
                <option value="2109" >Tour De Force Charity Cycle 2015 Bodybyrne Team</option>
                <option value="2111" >Talk To Tom Limited</option>
                <option value="2124" >Compassionate Friends</option>
                <option value="1906" >CASA - Caring and Sharing Association</option>
                <option value="2123" >St Michaels GAA Club</option>
                <option value="2126" >Padraig Lehane Fundraising</option>
                <option value="2135" >Croagh Patrick Santa Climb</option>
                <option value="1316" >Spiritan Asylum Services Initiative Limited (SPIRASI)</option>
                <option value="2130" >Piltown Does Strictly</option>
                <option value="2160" >The Apostolic Church</option>
                <option value="2152" >East Midlands Parkinson\'s</option>
                <option value="963" >Suas Educational Development</option>
                <option value="2186" >Dinit </option>
                <option value="2200" >Burren United and Cois Ceim Childcare Centre </option>
                <option value="1915" >Domestic Violence Advocacy Service</option>
                </select>
   <!-- <div class="selectBox">
   			<span id="" class="select"></span>
            <select name="etype" id="etype">
           <option value="select">Event Type</option>
                                    <option value="1"   >Adrenalin rush</option>
                        <option value="2"   >Corporate challenge</option>
                        <option value="3"   >Cycling</option>
                        <option value="4"   >Running or marathons</option>
                        <option value="5"   >Swimming</option>
                        <option value="6"   >Trekking</option>
                        <option value="7"   >Triathlon</option>
                        <option value="8"   >Walking</option>
                        <option value="9"   >Other </option>
                        <option value="10"   >Mixed Sports</option>
                        <option value="11"   >Hill Walk</option>
                        <option value="12"   >Mountain Climb</option>
                        <option value="13"   >Challenge</option>
                        <option value="14"   >Adventure Race</option>
                        </select>       
       </div>
	<div class="goBtn"><input type="submit" value="" onclick="return formcheck();" /> </div>-->
    
    
</div>
</div>

<div class="clear"></div>
    <div class="pageContant">
     <div class="wrapper">
		<div class="content">

  	<div class="clear"></div>

    <div class="ui-tabs-panel">
     	<table>
        <tr class="row_format fieldheader first" align="center">
            <th width="15%">Date</th>
 	    	<th width="26%" >Event Name </th>
                <th width="31%" >Created by Charity </th>          
            <th width="10%" >More Details</th>
        </tr>
                    		<tr class="monthbg">
                        <td colspan="5" height="20">&nbsp;<strong>November, 2015</strong></td>
                	</tr>
                            <tr class="even">
                 	<td class="eventDate" align="center">6th Nov, 2015</td>
                    <td>The Kube</td>

                <td class="createdBycharity"> <a target="_blank" href="https://www.idonate.ie/1906_casa---caring-and-sharing-association.html">CASA - Caring and Sharing Association</a></td>
                 
                    <td align="center" class="viewlinkevent"> <a href="https://www.the-kube.html " target="_blank">View</a> </td>
                </tr>
			                <tr class="odd">
                 	<td class="eventDate" align="center">14th Nov, 2015</td>
                    <td>Eamonn O Hara presents a night with the stars</td>

                <td class="createdBycharity"> <a target="_blank" href="https://www.eamonn-o-hara-sligos-greatest-supporter.html">Eamonn O Hara Sligos Greatest Supporter</a></td>
                   
                    <td align="center" class="viewlinkevent"> <a href="https://www.eamonn-o-hara-presents-a-night-with-the-stars.html " target="_blank">View</a> </td>
                </tr>
			                <tr class="even">
                 	<td class="eventDate" align="center">14th Nov, 2015</td>
                    <td>Piltown Does Strictly </td>

                <td class="createdBycharity"> <a target="_blank" href="https://www.piltown-does-strictly.html">Piltown Does Strictly</a></td>
                   
                    <td align="center" class="viewlinkevent"> <a href="https://www.piltown-does-strictly-.html " target="_blank">View</a> </td>
                </tr>
			                <tr class="odd">
                 	<td class="eventDate" align="center">18th Nov, 2015</td>
                    <td>NUIG SU Christmas Eve Santa Relay</td>

                <td class="createdBycharity"> <a target="_blank" href="https://www.nui-galway-students---union-charities.html">NUI Galway Students' Union Charities</a></td>
                    
                    <td align="center" class="viewlinkevent"> <a href="https://www.nuig-su-christmas-eve-santa-relay.html " target="_blank">View</a> </td>
                </tr>
			                <tr class="even">
                 	<td class="eventDate" align="center">20th Nov, 2015</td>
                    <td>Read-a-thon</td>
                <td class="createdBycharity"> <a target="_blank" href="https://www.idonate.ie/827_community-cats-network.html">Community Cats Network</a></td>                    
                    <td align="center" class="viewlinkevent"> <a href="https://www.idonate.ie/event/1238_read-a-thon.html " target="_blank">View</a> </td>
                </tr>
			                <tr class="odd">
                 	<td class="eventDate" align="center">21st Nov, 2015</td>
                    <td>100 Ho Ho's for CF & Bubblegum</td>

                <td class="createdBycharity"> <a target="_blank" href="https://www.croagh-patrick-santa-climb.html">Croagh Patrick Santa Climb</a></td>                  
                    <td align="center" class="viewlinkevent"> <a href="https://www.idonate.ie/event/1246_100-ho-ho-s-for-cf---bubblegum.html " target="_blank">View</a> </td>
                </tr>
			                <tr class="even">
                 	<td class="eventDate" align="center">27th Nov, 2015</td>
                    <td>Warriors Within - In aid of Soar</td>

                <td class="createdBycharity"> <a target="_blank" href="https://www.idonate.ie/880_soar.html">Soar</a></td>               
                    <td align="center" class="viewlinkevent"> <a href="https://www.idonate.ie/event/1232_warriors-within---in-aid-of-soar.html " target="_blank">View</a> </td>
                </tr>
			                <tr class="odd">
                 	<td class="eventDate" align="center">27th Nov, 2015</td>
                    <td>Soak Up The Music!</td>

                <td class="createdBycharity"> <a target="_blank" href="https://www.idonate.ie/1915_domestic-violence-advocacy-service.html">Domestic Violence Advocacy Service</a></td>
                    <td align="center" class="viewlinkevent"> <a href="https://www.idonate.ie/event/1266_soak-up-the-music-.html " target="_blank">View</a> </td>
                </tr>
			                <tr class="even">
                 	<td class="eventDate" align="center">28th Nov, 2015</td>
                    <td>Stars for the night</td>

                <td class="createdBycharity"> <a target="_blank" href="https://www.idonate.ie/2200_burren-united-and-cois-ceim-childcare-centre-.html">Burren United and Cois Ceim Childcare Centre </a></td>
                    <td align="center" class="viewlinkevent"> <a href="https://www.idonate.ie/event/1265_stars-for-the-night.html " target="_blank">View</a> </td>
                </tr>
			            		<tr class="monthbg">
                        <td colspan="5" height="20">&nbsp;<strong>December, 2015</strong></td>
                	</tr>
                            <tr class="odd">
                 	<td class="eventDate" align="center">1st Dec, 2015</td>
                    <td>Decembeard</td>

                <td class="createdBycharity"> <a target="_blank" href="https://www.idonate.ie/370_men--s-cancer-alliance.html">Men's Cancer Alliance</a></td>              
                    <td align="center" class="viewlinkevent"> <a href="https://www.idonate.ie/event/917_decembeard.html " target="_blank">View</a> </td>
                </tr>
			                <tr class="even">
                 	<td class="eventDate" align="center">4th Dec, 2015</td>
                    <td>COPE Galway Sleep Out 2015</td>

                <td class="createdBycharity"> <a target="_blank" href="https://www.idonate.ie/993_cope-galway.html">COPE Galway</a></td>
                    <td align="center" class="viewlinkevent"> <a href="https://www.idonate.ie/event/1260_cope-galway-sleep-out-2015.html " target="_blank">View</a> </td>
                </tr>
			            		<tr class="monthbg">
                        <td colspan="5" height="20">&nbsp;<strong>February, 2016</strong></td>
                	</tr>
                            <tr class="odd">
                 	<td class="eventDate" align="center">23rd Feb, 2016</td>
                    <td>NUIG SU Charity Aquathon 2016 </td>

                <td class="createdBycharity"> <a target="_blank" href="https://www.idonate.ie/1190_nui-galway-students---union-charities.html">NUI Galway Students' Union Charities</a></td>
                    <td align="center" class="viewlinkevent"> <a href="https://www.idonate.ie/event/1251_nuig-su-charity-aquathon-2016-.html " target="_blank">View</a> </td>
                </tr>
			                <tr class="even">
                 	<td class="eventDate" align="center">27th Feb, 2016</td>
                    <td>NUIG SU Charity Croagh Patrick Climb 2016</td>

                <td class="createdBycharity"> <a target="_blank" href="https://www.idonate.ie/1190_nui-galway-students---union-charities.html">NUI Galway Students' Union Charities</a></td>
                    <td align="center" class="viewlinkevent"> <a href="https://www.idonate.ie/event/1252_nuig-su-charity-croagh-patrick-climb-2016.html " target="_blank">View</a> </td>
                </tr>
			                <tr class="odd">
                 	<td class="eventDate" align="center">27th Feb, 2016</td>
                    <td>The Kube</td>

                <td class="createdBycharity"> <a target="_blank" href="https://www.idonate.ie/232_myaware--formerly-myasthenia-gravis-association-.html">Myaware (formerly Myasthenia Gravis Association)</a></td>
 
                    <td align="center" class="viewlinkevent"> <a href="https://www.idonate.ie/event/1254_the-kube.html " target="_blank">View</a> </td>
                </tr>
			            		<tr class="monthbg">
                        <td colspan="5" height="20">&nbsp;<strong>March, 2017</strong></td>
                	</tr>
                            <tr class="even">
                 	<td class="eventDate" align="center">1st Mar, 2017</td>
                    <td>Missy's MCC Training</td>

                    <td class="createdBycharity"> <a target="_blank" href="https://www.idonate.ie/1835_walk-with-me-daddy.html">Walk With Me Daddy</a></td>
                    <td align="center" class="viewlinkevent"> <a href="https://www.idonate.ie/event/1081_missy-s-mcc-training.html " target="_blank">View</a> </td>
                </tr>
			            <tr class="last brdN">
              <td colspan="5" align="right" height="35" class="">
              <div class="pagination">
              <ul>
                                  </ul>
                    </div>
                    </td>
            </tr>
     </table> 
     </div>

	<input id="asearchcondition" type="hidden" name="asearchcondition" value="" />
<input id="searchflag" type="hidden" name="searchflag" value="" />&nbsp;
<input id="sortflag" type="hidden" name="sortflag" value="" />&nbsp;
<input id="PID" type="hidden" name="PID" value="" />&nbsp;
<input id="page" type="hidden" name="page" value="" />&nbsp;
<input id="sortby" type="hidden" name="sortby" value="" />&nbsp;
<input id="sorttype" type="hidden" name="sorttype" value="" />&nbsp;
<input id="mode" type="hidden" name="mode" value="" />

    </div>  
		<div class="clear"></div>
    </div>  
    </div>
</form>
     </div>
        <hr class="featurette-divider">
        <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->

            <!-- FOOTER -->
            <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>2015 Students-NCI, &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </div>
</div>


</body>
</html>