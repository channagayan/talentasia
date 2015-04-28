<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="talent,asia,talentasia,portrait,visualart,art,drama,music,news,exhibition,theater,schools,organization,foundation,education,visual,audio,media,painting,dance,ballet,hiphop,pop,traditional,teaching,student,colors,colours,drawing,sketch,recording,library,university,collage,shoping,fashion,photographi,telivision,film,streeming,upload,download,country,sri lanka,history,caveart,watercolor,acrylic,global,sell,advertising,gallery,musiem,craft,video,performingart,banner,ad,books,canvers,oilpaint,politics,social,network,circle,art bank,organiz,comunity,modern,old,world,grant,fastival,acdemic,pencil,brush,store,mall,storke,pallet,camera,butiful,household,time,today,nural"  />
	<meta name="description" content="&quot;Talent Asia&quot; is dedicating to transform children’s creativity through the &quot;Arts&quot; by shaping towards the futuristic society." />
	<link rel="shortcut icon" href="images/Talentasia.ico" />
    <link rel="icon" href="images/Talentasia.ico" />
    <title>TalentAsia</title>
	<link href="styles/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="styles/nivo-slider.css" type="text/css" media="screen" />
	<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		   $("#Gallery").click(function(){
		   	$('#iframe').load('Galary.php').fadeIn('slow');
		    //$('#iframe').css("background-color","transparent");
		   }); 
		   
		   $("#Events").click(function(){
		   	$('#iframe').load('Galary.html').fadeIn('slow');
		    $('#iframe').css("background-color","transparent");
		   }); 
		   
		   $("#Register").click(function(){
		   	$('#iframe').load('Form.php').fadeIn('slow');
		    $('#iframe').css("background-color","transparent");
		   });
		   
		   $("#AboutUs").click(function(){
		   	$('#iframe').load('AboutUs.html').fadeIn('slow');
			$('#iframe').css("background-color","#FFF");
		     //alert("Thanks for visiting!");
		   });
		   
		   $("#Upload").click(function(){
		   	$('#iframe').load('Upload.php').fadeIn('slow');
		    $('#iframe').css("background-color","transparent");
		   });
		   
		   $("#Login").click(function(){
		   	$('#iframe').load('Login.php').fadeIn('slow');
		    $('#iframe').css("background-color","transparent");
		   });
		   
		   $("#Stream").click(function(){
		   	$('#iframe').load('StreamingForm.php').fadeIn('slow');
		    $('#iframe').css("background-color","transparent");
		   });
		 });
	</script>
	</head>
	<body>
    <div class="body" id="body" align="center"> 
      <!--<div id="Border" class="Border"></div>-->
      <div class="Header" id="Header" align="right">
        <?php
	  if(isset($_COOKIE['MSGUN'])){
		  echo "<a id=\"Login\">User name is incorrect and retry</a>|";
	  }
	  if(isset($_COOKIE['MSGPW'])){
		  echo "<a id=\"Login\">Password is incorrect and retry</a>|";
	  }
	   if(isset($_SESSION['Uname'])){
			require("dbClass.php");
			$query="SELECT FName,MName,LName FROM members WHERE MemberID='".$_SESSION['id']."';";
			$result=mysql_query($query);
			
			$Data=mysql_fetch_array($result);
			
				if(is_null($Data['MName'])){
					echo "<a>".$Data['FName']." ".$Data['LName']."</a>|";
				}else{
					echo "<a>".$Data['FName']." ".$Data['MName']." ".$Data['LName']."</a>|";
				}
			echo "<a href=\"Login.php\">LOGOUT</a>|";
	  }else{
		 echo "<a id=\"Login\">LOGIN</a>|";
	  }
	  
	  ?>
        <a id="Register">REGISTER</a></div>
      <div class="Navi" id="Navi">
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a id="Gallery">GALLERY</a></li>
          <li><a id="School">SCHOOLS</a></li>
          <li><a id="Events">EVENTS</a> </li>
          <li><a id="AboutUs">ABOUT US</a></li>
          <li><a id="Upload">UPLOAD</a></li>
          <li><a href="index.php" id="NewsNavi">NEWS</a></li>
        </ul>
      </div>
      <div class="Animation" id="Animation">
        <div id="templatemo_slider">
          <div id="slider" class="nivoSlider">
            <?php
				require("dbClass.php");
				
				$query="SELECT * FROM bannerimages";
				$result=mysql_query($query);
			
				while($path=mysql_fetch_array($result)){
					$Owner="";
					$Contact="";
					$Title="";
					if($path['Owner']!=""){
						$Owner=$path['Owner']." -";
					}
					if($path['Contactno']!=""){
						$Contact="<a>".$path['Contactno']."</a>";
					}
					if($path['Title']!=""){
						$Title=$path['Title']." - ";
					}
				echo "<img src=\"".$path['Path']."\"  alt=\"Slider 01\" title=\"".$Title."".$Owner."".$Contact."\" />\n";
				}
    		?>
          </div>
          <div id="htmlcaption" class="nivo-html-caption"> <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. </div>
          <script type="text/javascript" src="scripts/jquery.nivo.slider.pack.js"></script> 
          <script type="text/javascript">
        $(window).load(function() {
			$('#slider').nivoSlider({
				effect:'slideInLeft', // Specify sets like: 'sliceDown,random,sliceDownRight,sliceDownLeft,sliceUpRight,sliceUpLeft,sliceUpDown,sliceUpDownLeft,fold,fade,slideInRight,slideInLeft'
				slices:1, // For slice animations
				boxCols: 1, // For box animations
				boxRows: 1, // For box animations
				animSpeed:400, // Slide transition speed
				pauseTime:4000, // How long each slide will show
				startSlide:0, // Set starting Slide (0 index)
				directionNav:true, // Next and Prev navigation
				directionNavHide:true, // Only show on hover
				controlNav:false, // 1,2,3... navigation
				controlNavThumbs:false, // Use thumbnails for Control Nav
				controlNavThumbsFromRel:false, // Use image rel for thumbs
				controlNavThumbsSearch: '.jpg', // Replace this with...
				controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
				keyboardNav:true, // Use left and right arrows
				pauseOnHover:true, // Stop animation while hovering
				manualAdvance:false, // Force manual transitions
				captionOpacity:0.8, // Universal caption opacity
				prevText: 'Prev', // Prev directionNav text
				nextText: 'Next', // Next directionNav text
				beforeChange: function(){}, // Triggers before a slide transition
				afterChange: function(){}, // Triggers after a slide transition
				slideshowEnd: function(){}, // Triggers after all slides have been shown
				lastSlide: function(){}, // Triggers when last slide is shown
				afterLoad: function(){} // Triggers when slider has loaded
			});
		});
        </script> 
        </div>
      </div>
      <div class="Content" id="Content">
        <div class="News" id="News"> 
          <!-- Feedzilla Widget BEGIN -->
          
          <div class="feedzilla-news-widget feedzilla-26244858158145" style="width:340px; padding: 0; text-align: center; font-size: 11px; border: 0;"> 
            <script type="text/javascript" src="http://widgets.feedzilla.com/news/iframe/js/widget.js"></script> 
            <script type="text/javascript">
new FEEDZILLA.Widget({
	style: 'slide-top-to-bottom',
	culture_code: 'en_us',
	contentLinkColor: '#2a3e61',
	contentTextColor: '#4a84b3',
	title: 'Art',
	caption: 'All',
	order: 'Date',
	count: '20',
	w: '340',
	h: '917',
	timestamp: 'true',
	scrollbar: 'false',
	theme: 'smoothness',
	className: 'feedzilla-26244858158145',
	tabs: [{name: 'Art', c: '13', sc: '-'}]
});
</script><br />
            <a href="http://widgets.feedzilla.com/news/builder/index.html?utm_source=feedzilla&utm_medium=widget&utm_campaign=widget%2Blink" target="_blank">Get Your News Widget</a> </div>
          
          <!-- Feedzilla Widget END --> 
        </div>
        <div class="Panal" id="Panal">
          <div align="left" class="subMenu" id="subMenu">
            <ul>
              <li><a href="#"><img src="img/Sortgrid.png" width="20px" height="20px" /><img src="img/SpryMenuBarDown.gif" /></a><!--<ul>
              <li><a href="#"><img src="img/Sortlist.png" /></a></li>
            </ul>--></li>
            </ul>
            <label id="SORT" class="SORT" >SORT</label>
            <select id="SORT" class="SORT" style="width:80px;">
              <option>DATE</option>
              <option>POPULAR</option>
            </select>
            <label id="SORT" class="SORT">SEARCH</label>
            <input type="text" id="Search" class="Search" name="txtSearch" placeholder="Keyword" />
            <img src="img/Search.png" width="15px" height="15px" id="btnSearch" class="btnSearch" />
            <div class="social" id="social"> <a href="http://www.artnews.com/"><img src="img/ARTnews-logo.png" width="75"/></a> <a href="https://www.facebook.com/#!/photo.php?fbid=525055404206703&set=a.525055400873370.1073741825.525054090873501&type=1&theater"><img src="img/facebook.png" /></a> <a href="http://www.google.com"><img src="img/google2.png" /></a> <a href="https://www.linkedin.com"><img src="img/linked-in.png" /></a> <a href="https://twitter.com/TalentAsia"><img src="img/twitter.png" /></a><a href="http://www.youtube.com/user/TalentAsiaOrg?feature=watch"><img src="img/youtube.png" /></a> </div>
          </div>
          <div id="Scroll">
            <div class="iframe" id="iframe">
              <h3 style="word-spacing:5px; line-height:15px">BROADCAST YOUR EVENT<a id="Stream" style="color:#F00; font-size:30px">Live</a>...!</h3>
              <!--<iframe src="//www.ustream.tv/embed/16908834?wmode=direct" style="border: 0 none transparent;" frameborder="no" width="700" height="425"></iframe>-->
              <iframe src="http://static.viewer.dacast.com/b/41371/c/51549" frameborder="0" scrolling="no" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen width="700" height="425"></iframe>
              <br /><br />
              <h3 style="background-color:#09F; color:#FFF; padding:5px; line-height:20px">Sudan Famine UN food camp [1994]</h3>
              <img src="images/Sudan Famine 1994.jpg" width="350" style="float:right;" />
              <div style="width:50%; text-align:justify; font-family:Arial, Helvetica, sans-serif; font-size:12px; right:5px; line-height:20px">
              <p style="line-height:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;he photo is the “Pulitzer Prize” winning photo taken <strong style="font-size:45px; vertical-align:baseline; line-height:0; color:#FFF; background:#000; padding:0 12px 0 12px;">T</strong> in 1994 during the Sudan Famine.</p>
<p>The picture depicts stricken child crawling towards an United Nations food camp, located a kilometer away.</p>

<p>The vulture is waiting for the child to die so that it can eat him. This picture shocked the whole world. No one knows what happened to the child, including the photographer Kevin Carter who
left the place as soon as the photograph was taken.</p>

<p>Three months later he committed suicide due to depression.</p>
              </div>
              
              </div>
          </div>
        </div>
      </div>
      <div class="Footer" id="Footer">
        <div id="footernavi" class="footernavi" style="color:#CCC;"><a href="index.php">HOME</a> | <a id="Events">EVENTS</a>|<a id="AboutUs">ABOUT US</a> | <a id="Upload">DEVELOP</a> | <a href="index.html" id="NewsNavi">NEWS</a> </div>
        <div class="ContactUs" id="ContactUs" align="center"> <a href="http://www.theartnewspaper.com"><img src="img/mast.gif" width="200"/></a><br />
          <!--          <a href="http://www.dancemagazine.com"><img src="img/dmlogo.jpg" width="200" /></a>--> 
        </div>
        <div id="copyright" class="copyright">
          <p align="center" style="color:#999; font-family:Arial, Helvetica, sans-serif; font-size:11px;">Copyright © TalentAsia, 2013. All Rights Reserved</p>
        </div>
      </div>
    </div>
</body>
</html>
