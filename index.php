<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="utf-8">
<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

<title></title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Basic Styles -->
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">

<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production-plugins.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-skins.min.css">

<!-- SmartAdmin RTL Support  -->
<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css">

<!-- Custom Styles -->
<link rel="stylesheet" type="text/css" media="screen" href="css/custom.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/custom-responsive.css">

<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

<!-- FAVICONS -->
<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

<!-- GOOGLE FONT -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

<!-- Specifying a Webpage Icon for Web Clip 
			 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
<link rel="apple-touch-icon" href="img/splash/sptouch-icon-iphone.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/splash/touch-icon-ipad.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/splash/touch-icon-iphone-retina.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/splash/touch-icon-ipad-retina.png">

<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<!-- Startup image for web apps -->
<link rel="apple-touch-startup-image" href="img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
<link rel="apple-touch-startup-image" href="img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
<link rel="apple-touch-startup-image" href="img/splash/iphone.png" media="screen and (max-device-width: 320px)">
</head>

<!--

	TABLE OF CONTENTS.
	
	Use search to find needed section.
	
	===================================================================
	
	|  01. #CSS Links                |  all CSS links and file paths  |
	|  02. #FAVICONS                 |  Favicon links and file paths  |
	|  03. #GOOGLE FONT              |  Google font link              |
	|  04. #APP SCREEN / ICONS       |  app icons, screen backdrops   |
	|  05. #BODY                     |  body tag                      |
	|  06. #HEADER                   |  header tag                    |
	|  07. #PROJECTS                 |  project lists                 |
	|  08. #TOGGLE LAYOUT BUTTONS    |  layout buttons and actions    |
	|  09. #MOBILE                   |  mobile view dropdown          |
	|  10. #SEARCH                   |  search field                  |
	|  11. #NAVIGATION               |  left panel & navigation       |
	|  12. #RIGHT PANEL              |  right panel userlist          |
	|  13. #MAIN PANEL               |  main panel                    |
	|  14. #MAIN CONTENT             |  content holder                |
	|  15. #PAGE FOOTER              |  page footer                   |
	|  16. #SHORTCUT AREA            |  dropdown shortcuts area       |
	|  17. #PLUGINS                  |  all scripts and plugins       |
	
	===================================================================
	
	-->

<!-- #BODY -->
<!-- Possible Classes

		* 'smart-style-{SKIN#}'
		* 'smart-rtl'         - Switch theme mode to RTL
		* 'menu-on-top'       - Switch to top navigation (no DOM change required)
		* 'no-menu'			  - Hides the menu completely
		* 'hidden-menu'       - Hides the main menu but still accessable by hovering over left edge
		* 'fixed-header'      - Fixes the header
		* 'fixed-navigation'  - Fixes the main menu
		* 'fixed-ribbon'      - Fixes breadcrumb
		* 'fixed-page-footer' - Fixes footer
		* 'container'         - boxed layout mode (non-responsive: will not work with fixed-navigation & fixed-ribbon)
	-->
<body class="">

<!-- HEADER -->
<header id="header">
  <div id="logo-group" class="header-logo"> 
    
    <!-- PLACE YOUR LOGO HERE --> 
    <!-- END LOGO PLACEHOLDER --> 
  </div>
  
  <!-- pulled left: nav area -->
  <div class="pull-left"> 
    
    <!-- collapse menu button -->
    <div id="hide-menu" class="btn-header pull-left"> <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span> </div>
    <!-- end collapse menu --> 
    
    <!-- #MOBILE --> 
    
  </div>
  <!-- end pulled left: nav area --> 
  
  <!-- pulled right: nav area -->
  <div class="pull-right">
    <div id="logo-group" class="notification-area pull-left"> 
      
      <!-- Note: The activity badge color changes when clicked and resets the number to 0
                    Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications --> 
      <span id="activity" class="activity-dropdown"> <i class="fa fa-bell"></i> <b class="badge"> 2 </b> </span> 
      
  
      
    </div>
    
    <!-- Top menu profile link -->
    <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-10">
      <li class=""> <a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown"> <img src="img/avatars/sunny.png" alt="John Doe" class="online" /> <span>Mark <strong>Willy</strong> <i class="fa fa-angle-down"></i></span> </a>
        <ul class="dropdown-menu pull-right">
         </ul>
      </li>
    </ul>
  </div>
  <!-- end pulled right: nav area --> 
  
</header>
<!-- END HEADER --> 

<!-- Left panel : Navigation area --> 
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel"> 
  
  <!-- NAVIGATION : This navigation is also responsive-->
  <nav> 
    <!-- 
				NOTE: Notice the gaps after each icon usage <i></i>..
				Please note that these links work a bit different than
				traditional href="" links. See documentation for details.
				-->
    
    <ul>
      <li class="active"> <a href="index.php" title="Dashboard"><i class="fa fa-tachometer"></i> <span class="menu-item-parent">Dashboard</span></a> </li>
        
          <li><a href="view_area.php"><i class=""></i> <span class="menu-item-parent">Area</span></a></li>
          <li><a href="view_category.php"><i class=""></i> <span class="menu-item-parent">Category</span></a></li>
          <li><a href="view_district.php"><i class=""></i> <span class="menu-item-parent">Disrict</span></a></li>
         
    </ul>
  </nav>
  <span class="minifyme" data-action="minifyMenu"> <i class="fa fa-arrow-circle-left hit"></i> </span> </aside>
<!-- END NAVIGATION --> 

<!-- MAIN PANEL -->
<div id="main" role="main"> 
 
  
</div>
<!-- END MAIN PANEL --> 

<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
		Note: These tiles are completely responsive,
		you can add as many as you like
		-->
<div id="shortcut">
  <ul>
    <li> <a href="inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a> </li>
    <li> <a href="calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a> </li>
    <li> <a href="gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a> </li>
    <li> <a href="invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a> </li>
    <li> <a href="gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a> </li>
    <li> <a href="profile.html" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a> </li>
  </ul>
</div>
<!-- END SHORTCUT AREA --> 

<!--================================================== --> 

<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)--> 
<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script> 

<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
<script>
			if (!window.jQuery) {
				document.write('<script src="js/libs/jquery-2.1.1.min.js"><\/script>');
			}
		</script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script> 
<script>
			if (!window.jQuery.ui) {
				document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');
			}
		</script> 

<!-- IMPORTANT: APP CONFIG --> 
<script src="js/app.config.js"></script> 

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events--> 
<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> 

<!-- BOOTSTRAP JS --> 
<script src="js/bootstrap/bootstrap.min.js"></script> 

<!-- CUSTOM NOTIFICATION --> 
<script src="js/notification/SmartNotification.min.js"></script> 

<!-- JARVIS WIDGETS --> 
<script src="js/smartwidgets/jarvis.widget.min.js"></script> 

<!-- EASY PIE CHARTS --> 
<script src="js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script> 

<!-- SPARKLINES --> 
<script src="js/plugin/sparkline/jquery.sparkline.min.js"></script> 

<!-- JQUERY VALIDATE --> 
<script src="js/plugin/jquery-validate/jquery.validate.min.js"></script> 

<!-- JQUERY MASKED INPUT --> 
<script src="js/plugin/masked-input/jquery.maskedinput.min.js"></script> 

<!-- JQUERY SELECT2 INPUT --> 
<script src="js/plugin/select2/select2.min.js"></script> 

<!-- JQUERY UI + Bootstrap Slider --> 
<script src="js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script> 

<!-- browser msie issue fix --> 
<script src="js/plugin/msie-fix/jquery.mb.browser.min.js"></script> 

<!-- FastClick: For mobile devices --> 
<script src="js/plugin/fastclick/fastclick.min.js"></script> 

<!--[if IE 8]>

		<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

		<![endif]--> 

<!-- MAIN APP JS FILE --> 
<script src="js/app.min.js"></script> 

<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT --> 
<!-- Voice command : plugin --> 
<script src="js/speech/voicecommand.min.js"></script> 

<!-- SmartChat UI : plugin --> 
<script src="js/smart-chat-ui/smart.chat.ui.min.js"></script> 
<script src="js/smart-chat-ui/smart.chat.manager.min.js"></script> 

<!-- PAGE RELATED PLUGIN(S) --> 

<!-- Flot Chart Plugin: Flot Engine, Flot Resizer, Flot Tooltip --> 
<script src="js/plugin/flot/jquery.flot.cust.min.js"></script> 
<script src="js/plugin/flot/jquery.flot.resize.min.js"></script> 
<script src="js/plugin/flot/jquery.flot.time.min.js"></script> 
<script src="js/plugin/flot/jquery.flot.tooltip.min.js"></script> 

<!-- Vector Maps Plugin: Vectormap engine, Vectormap language --> 
<script src="js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js"></script> 
<script src="js/plugin/vectormap/jquery-jvectormap-world-mill-en.js"></script> 

<!-- Full Calendar --> 
<script src="js/plugin/moment/moment.min.js"></script> 
<script src="js/plugin/fullcalendar/jquery.fullcalendar.min.js"></script> 

<!-- Morris Chart Dependencies -->
<script src="js/plugin/morris/raphael.min.js"></script>
<script src="js/plugin/morris/morris.min.js"></script>

<script>
		// non date data
				if ($('#non-date-graph').length) {
					var day_data = [{
						"elapsed" : "January",
						"value" : 34
					}, {
						"elapsed" : "February",
						"value" : 24
					}, {
						"elapsed" : "March",
						"value" : 3
					}, {
						"elapsed" : "April",
						"value" : 12
					}, {
						"elapsed" : "May",
						"value" : 13
					}, {
						"elapsed" : "June",
						"value" : 22
					}, {
						"elapsed" : "July",
						"value" : 5
					}, {
						"elapsed" : "August",
						"value" : 26
					}, {
						"elapsed" : "September",
						"value" : 12
					}, {
						"elapsed" : "October",
						"value" : 19
					}, {
						"elapsed" : "November",
						"value" : 17
					}, {
						"elapsed" : "December",
						"value" : 13
					}];
					Morris.Line({
						element : 'non-date-graph',
						data : day_data,
						xkey : 'elapsed',
						ykeys : ['value'],
						labels : ['value'],
						parseTime : false
					});
				}

		

		$(document).ready(function() {

				// DO NOT REMOVE : GLOBAL FUNCTIONS!
				pageSetUp();

				/*
				 * PAGE RELATED SCRIPTS
				 */

				$(".js-status-update a").click(function() {
					var selText = $(this).text();
					var $this = $(this);
					$this.parents('.btn-group').find('.dropdown-toggle').html(selText + ' <span class="caret"></span>');
					$this.parents('.dropdown-menu').find('li').removeClass('active');
					$this.parent().addClass('active');
				});

				/*
				* RUN PAGE GRAPHS
				*/

				/* TAB 1: UPDATING CHART */
				// For the demo we use generated data, but normally it would be coming from the server

				var data = [], totalPoints = 200, $UpdatingChartColors = $("#updating-chart").css('color');

				function getRandomData() {
					if (data.length > 0)
						data = data.slice(1);

					// do a random walk
					while (data.length < totalPoints) {
						var prev = data.length > 0 ? data[data.length - 1] : 50;
						var y = prev + Math.random() * 10 - 5;
						if (y < 0)
							y = 0;
						if (y > 100)
							y = 100;
						data.push(y);
					}

					// zip the generated y values with the x values
					var res = [];
					for (var i = 0; i < data.length; ++i)
						res.push([i, data[i]])
					return res;
				}

				// setup control widget
				var updateInterval = 1500;
				$("#updating-chart").val(updateInterval).change(function() {

					var v = $(this).val();
					if (v && !isNaN(+v)) {
						updateInterval = +v;
						$(this).val("" + updateInterval);
					}

				});

				// setup plot
				var options = {
					yaxis : {
						min : 0,
						max : 100
					},
					xaxis : {
						min : 0,
						max : 100
					},
					colors : [$UpdatingChartColors],
					series : {
						lines : {
							lineWidth : 1,
							fill : true,
							fillColor : {
								colors : [{
									opacity : 0.4
								}, {
									opacity : 0
								}]
							},
							steps : false

						}
					}
				};

				var plot = $.plot($("#updating-chart"), [getRandomData()], options);

				/* live switch */
				$('input[type="checkbox"]#start_interval').click(function() {
					if ($(this).prop('checked')) {
						$on = true;
						updateInterval = 1500;
						update();
					} else {
						clearInterval(updateInterval);
						$on = false;
					}
				});

				function update() {
					if ($on == true) {
						plot.setData([getRandomData()]);
						plot.draw();
						setTimeout(update, updateInterval);

					} else {
						clearInterval(updateInterval)
					}

				}

				var $on = false;

				/*end updating chart*/

				/* TAB 2: Social Network  */

				$(function() {
					// jQuery Flot Chart
					var twitter = [[1, 27], [2, 34], [3, 51], [4, 48], [5, 55], [6, 65], [7, 61], [8, 70], [9, 65], [10, 75], [11, 57], [12, 59], [13, 62]], facebook = [[1, 25], [2, 31], [3, 45], [4, 37], [5, 38], [6, 40], [7, 47], [8, 55], [9, 43], [10, 50], [11, 47], [12, 39], [13, 47]], data = [{
						label : "Twitter",
						data : twitter,
						lines : {
							show : true,
							lineWidth : 1,
							fill : true,
							fillColor : {
								colors : [{
									opacity : 0.1
								}, {
									opacity : 0.13
								}]
							}
						},
						points : {
							show : true
						}
					}, {
						label : "Facebook",
						data : facebook,
						lines : {
							show : true,
							lineWidth : 1,
							fill : true,
							fillColor : {
								colors : [{
									opacity : 0.1
								}, {
									opacity : 0.13
								}]
							}
						},
						points : {
							show : true
						}
					}];

					var options = {
						grid : {
							hoverable : true
						},
						colors : ["#568A89", "#3276B1"],
						tooltip : true,
						tooltipOpts : {
							//content : "Value <b>$x</b> Value <span>$y</span>",
							defaultTheme : false
						},
						xaxis : {
							ticks : [[1, "JAN"], [2, "FEB"], [3, "MAR"], [4, "APR"], [5, "MAY"], [6, "JUN"], [7, "JUL"], [8, "AUG"], [9, "SEP"], [10, "OCT"], [11, "NOV"], [12, "DEC"], [13, "JAN+1"]]
						},
						yaxes : {

						}
					};

					var plot3 = $.plot($("#statsChart"), data, options);
				});

				// END TAB 2

				// TAB THREE GRAPH //
				/* TAB 3: Revenew  */

				$(function() {

					var trgt = [[1354586000000, 153], [1364587000000, 658], [1374588000000, 198], [1384589000000, 663], [1394590000000, 801], [1404591000000, 1080], [1414592000000, 353], [1424593000000, 749], [1434594000000, 523], [1444595000000, 258], [1454596000000, 688], [1464597000000, 364]], prft = [[1354586000000, 53], [1364587000000, 65], [1374588000000, 98], [1384589000000, 83], [1394590000000, 980], [1404591000000, 808], [1414592000000, 720], [1424593000000, 674], [1434594000000, 23], [1444595000000, 79], [1454596000000, 88], [1464597000000, 36]], sgnups = [[1354586000000, 647], [1364587000000, 435], [1374588000000, 784], [1384589000000, 346], [1394590000000, 487], [1404591000000, 463], [1414592000000, 479], [1424593000000, 236], [1434594000000, 843], [1444595000000, 657], [1454596000000, 241], [1464597000000, 341]], toggles = $("#rev-toggles"), target = $("#flotcontainer");

					var data = [{
						label : "Target Profit",
						data : trgt,
						bars : {
							show : true,
							align : "center",
							barWidth : 30 * 30 * 60 * 1000 * 80
						}
					}, {
						label : "Actual Profit",
						data : prft,
						color : '#3276B1',
						lines : {
							show : true,
							lineWidth : 3
						},
						points : {
							show : true
						}
					}, {
						label : "Actual Signups",
						data : sgnups,
						color : '#71843F',
						lines : {
							show : true,
							lineWidth : 1
						},
						points : {
							show : true
						}
					}]

					var options = {
						grid : {
							hoverable : true
						},
						tooltip : true,
						tooltipOpts : {
							//content: '%x - %y',
							//dateFormat: '%b %y',
							defaultTheme : false
						},
						xaxis : {
							mode : "time"
						},
						yaxes : {
							tickFormatter : function(val, axis) {
								return "$" + val;
							},
							max : 1200
						}

					};

					plot2 = null;

					function plotNow() {
						var d = [];
						toggles.find(':checkbox').each(function() {
							if ($(this).is(':checked')) {
								d.push(data[$(this).attr("name").substr(4, 1)]);
							}
						});
						if (d.length > 0) {
							if (plot2) {
								plot2.setData(d);
								plot2.draw();
							} else {
								plot2 = $.plot(target, d, options);
							}
						}

					};

					toggles.find(':checkbox').on('change', function() {
						plotNow();
					});
					plotNow()

				});

				/* TAB 1: UPDATING CHART */
				// For the demo we use generated data, but normally it would be coming from the server

				var data = [], totalPoints = 200, $UpdatingChartColors = $("#updating-chart2").css('color');

				function getRandomData() {
					if (data.length > 0)
						data = data.slice(1);

					// do a random walk
					while (data.length < totalPoints) {
						var prev = data.length > 0 ? data[data.length - 1] : 50;
						var y = prev + Math.random() * 10 - 5;
						if (y < 0)
							y = 0;
						if (y > 100)
							y = 100;
						data.push(y);
					}

					// zip the generated y values with the x values
					var res = [];
					for (var i = 0; i < data.length; ++i)
						res.push([i, data[i]])
					return res;
				}

				// setup control widget
				var updateInterval = 1500;
				$("#updating-chart2").val(updateInterval).change(function() {

					var v = $(this).val();
					if (v && !isNaN(+v)) {
						updateInterval = +v;
						$(this).val("" + updateInterval);
					}

				});

				// setup plot
				var options = {
					yaxis : {
						min : 0,
						max : 100
					},
					xaxis : {
						min : 0,
						max : 100
					},
					colors : [$UpdatingChartColors],
					series : {
						lines : {
							lineWidth : 1,
							fill : true,
							fillColor : {
								colors : [{
									opacity : 0.4
								}, {
									opacity : 0
								}]
							},
							steps : false

						}
					}
				};

				var plot = $.plot($("#updating-chart2"), [getRandomData()], options);

				/* live switch */
				$('input[type="checkbox"]#start_interval').click(function() {
					if ($(this).prop('checked')) {
						$on = true;
						updateInterval = 1500;
						update();
					} else {
						clearInterval(updateInterval);
						$on = false;
					}
				});

				function update() {
					if ($on == true) {
						plot.setData([getRandomData()]);
						plot.draw();
						setTimeout(update, updateInterval);

					} else {
						clearInterval(updateInterval)
					}

				}

				var $on = false;

				/*end updating chart*/

				/* TAB 2: Social Network  */

				$(function() {
					// jQuery Flot Chart
					var twitter = [[1, 27], [2, 34], [3, 51], [4, 48], [5, 55], [6, 65], [7, 61], [8, 70], [9, 65], [10, 75], [11, 57], [12, 59], [13, 62]], facebook = [[1, 25], [2, 31], [3, 45], [4, 37], [5, 38], [6, 40], [7, 47], [8, 55], [9, 43], [10, 50], [11, 47], [12, 39], [13, 47]], data = [{
						label : "Twitter",
						data : twitter,
						lines : {
							show : true,
							lineWidth : 1,
							fill : true,
							fillColor : {
								colors : [{
									opacity : 0.1
								}, {
									opacity : 0.13
								}]
							}
						},
						points : {
							show : true
						}
					}, {
						label : "Facebook",
						data : facebook,
						lines : {
							show : true,
							lineWidth : 1,
							fill : true,
							fillColor : {
								colors : [{
									opacity : 0.1
								}, {
									opacity : 0.13
								}]
							}
						},
						points : {
							show : true
						}
					}];

					var options = {
						grid : {
							hoverable : true
						},
						colors : ["#568A89", "#3276B1"],
						tooltip : true,
						tooltipOpts : {
							//content : "Value <b>$x</b> Value <span>$y</span>",
							defaultTheme : false
						},
						xaxis : {
							ticks : [[1, "JAN"], [2, "FEB"], [3, "MAR"], [4, "APR"], [5, "MAY"], [6, "JUN"], [7, "JUL"], [8, "AUG"], [9, "SEP"], [10, "OCT"], [11, "NOV"], [12, "DEC"], [13, "JAN+1"]]
						},
						yaxes : {

						}
					};

					var plot3 = $.plot($("#statsChart2"), data, options);
				});

				// END TAB 2

				// TAB THREE GRAPH //
				/* TAB 3: Revenew  */

				$(function() {

					var trgt = [[1354586000000, 153], [1364587000000, 658], [1374588000000, 198], [1384589000000, 663], [1394590000000, 801], [1404591000000, 1080], [1414592000000, 353], [1424593000000, 749], [1434594000000, 523], [1444595000000, 258], [1454596000000, 688], [1464597000000, 364]], prft = [[1354586000000, 53], [1364587000000, 65], [1374588000000, 98], [1384589000000, 83], [1394590000000, 980], [1404591000000, 808], [1414592000000, 720], [1424593000000, 674], [1434594000000, 23], [1444595000000, 79], [1454596000000, 88], [1464597000000, 36]], sgnups = [[1354586000000, 647], [1364587000000, 435], [1374588000000, 784], [1384589000000, 346], [1394590000000, 487], [1404591000000, 463], [1414592000000, 479], [1424593000000, 236], [1434594000000, 843], [1444595000000, 657], [1454596000000, 241], [1464597000000, 341]], toggles = $("#rev-toggles"), target = $("#flotcontainer2");

					var data = [{
						label : "Target Profit",
						data : trgt,
						bars : {
							show : true,
							align : "center",
							barWidth : 30 * 30 * 60 * 1000 * 80
						}
					}, {
						label : "Actual Profit",
						data : prft,
						color : '#3276B1',
						lines : {
							show : true,
							lineWidth : 3
						},
						points : {
							show : true
						}
					}, {
						label : "Actual Signups",
						data : sgnups,
						color : '#71843F',
						lines : {
							show : true,
							lineWidth : 1
						},
						points : {
							show : true
						}
					}]

					var options = {
						grid : {
							hoverable : true
						},
						tooltip : true,
						tooltipOpts : {
							//content: '%x - %y',
							//dateFormat: '%b %y',
							defaultTheme : false
						},
						xaxis : {
							mode : "time"
						},
						yaxes : {
							tickFormatter : function(val, axis) {
								return "$" + val;
							},
							max : 1200
						}

					};

					plot2 = null;

					function plotNow() {
						var d = [];
						toggles.find(':checkbox').each(function() {
							if ($(this).is(':checked')) {
								d.push(data[$(this).attr("name").substr(4, 1)]);
							}
						});
						if (d.length > 0) {
							if (plot2) {
								plot2.setData(d);
								plot2.draw();
							} else {
								plot2 = $.plot(target, d, options);
							}
						}

					};

					toggles.find(':checkbox').on('change', function() {
						plotNow();
					});
					plotNow()

				});

				/* TAB 1: UPDATING CHART */
				// For the demo we use generated data, but normally it would be coming from the server

				var data = [], totalPoints = 200, $UpdatingChartColors = $("#updating-chart3").css('color');

				function getRandomData() {
					if (data.length > 0)
						data = data.slice(1);

					// do a random walk
					while (data.length < totalPoints) {
						var prev = data.length > 0 ? data[data.length - 1] : 50;
						var y = prev + Math.random() * 10 - 5;
						if (y < 0)
							y = 0;
						if (y > 100)
							y = 100;
						data.push(y);
					}

					// zip the generated y values with the x values
					var res = [];
					for (var i = 0; i < data.length; ++i)
						res.push([i, data[i]])
					return res;
				}

				// setup control widget
				var updateInterval = 1500;
				$("#updating-chart3").val(updateInterval).change(function() {

					var v = $(this).val();
					if (v && !isNaN(+v)) {
						updateInterval = +v;
						$(this).val("" + updateInterval);
					}

				});

				// setup plot
				var options = {
					yaxis : {
						min : 0,
						max : 100
					},
					xaxis : {
						min : 0,
						max : 100
					},
					colors : [$UpdatingChartColors],
					series : {
						lines : {
							lineWidth : 1,
							fill : true,
							fillColor : {
								colors : [{
									opacity : 0.4
								}, {
									opacity : 0
								}]
							},
							steps : false

						}
					}
				};

				var plot = $.plot($("#updating-chart3"), [getRandomData()], options);

				/* live switch */
				$('input[type="checkbox"]#start_interval').click(function() {
					if ($(this).prop('checked')) {
						$on = true;
						updateInterval = 1500;
						update();
					} else {
						clearInterval(updateInterval);
						$on = false;
					}
				});

				function update() {
					if ($on == true) {
						plot.setData([getRandomData()]);
						plot.draw();
						setTimeout(update, updateInterval);

					} else {
						clearInterval(updateInterval)
					}

				}

				var $on = false;

				/*end updating chart*/

				/* TAB 2: Social Network  */

				$(function() {
					// jQuery Flot Chart
					var twitter = [[1, 27], [2, 34], [3, 51], [4, 48], [5, 55], [6, 65], [7, 61], [8, 70], [9, 65], [10, 75], [11, 57], [12, 59], [13, 62]], facebook = [[1, 25], [2, 31], [3, 45], [4, 37], [5, 38], [6, 40], [7, 47], [8, 55], [9, 43], [10, 50], [11, 47], [12, 39], [13, 47]], data = [{
						label : "Twitter",
						data : twitter,
						lines : {
							show : true,
							lineWidth : 1,
							fill : true,
							fillColor : {
								colors : [{
									opacity : 0.1
								}, {
									opacity : 0.13
								}]
							}
						},
						points : {
							show : true
						}
					}, {
						label : "Facebook",
						data : facebook,
						lines : {
							show : true,
							lineWidth : 1,
							fill : true,
							fillColor : {
								colors : [{
									opacity : 0.1
								}, {
									opacity : 0.13
								}]
							}
						},
						points : {
							show : true
						}
					}];

					var options = {
						grid : {
							hoverable : true
						},
						colors : ["#568A89", "#3276B1"],
						tooltip : true,
						tooltipOpts : {
							//content : "Value <b>$x</b> Value <span>$y</span>",
							defaultTheme : false
						},
						xaxis : {
							ticks : [[1, "JAN"], [2, "FEB"], [3, "MAR"], [4, "APR"], [5, "MAY"], [6, "JUN"], [7, "JUL"], [8, "AUG"], [9, "SEP"], [10, "OCT"], [11, "NOV"], [12, "DEC"], [13, "JAN+1"]]
						},
						yaxes : {

						}
					};

					var plot3 = $.plot($("#statsChart3"), data, options);
				});

				// END TAB 2

				/* TAB 1: UPDATING CHART */
				// For the demo we use generated data, but normally it would be coming from the server

				var data = [], totalPoints = 200, $UpdatingChartColors = $("#updating-chart4").css('color');

				function getRandomData() {
					if (data.length > 0)
						data = data.slice(1);

					// do a random walk
					while (data.length < totalPoints) {
						var prev = data.length > 0 ? data[data.length - 1] : 50;
						var y = prev + Math.random() * 10 - 5;
						if (y < 0)
							y = 0;
						if (y > 100)
							y = 100;
						data.push(y);
					}

					// zip the generated y values with the x values
					var res = [];
					for (var i = 0; i < data.length; ++i)
						res.push([i, data[i]])
					return res;
				}

				// setup control widget
				var updateInterval = 1500;
				$("#updating-chart4").val(updateInterval).change(function() {

					var v = $(this).val();
					if (v && !isNaN(+v)) {
						updateInterval = +v;
						$(this).val("" + updateInterval);
					}

				});

				// setup plot
				var options = {
					yaxis : {
						min : 0,
						max : 100
					},
					xaxis : {
						min : 0,
						max : 100
					},
					colors : [$UpdatingChartColors],
					series : {
						lines : {
							lineWidth : 1,
							fill : true,
							fillColor : {
								colors : [{
									opacity : 0.4
								}, {
									opacity : 0
								}]
							},
							steps : false

						}
					}
				};

				var plot = $.plot($("#updating-chart4"), [getRandomData()], options);

				/* live switch */
				$('input[type="checkbox"]#start_interval').click(function() {
					if ($(this).prop('checked')) {
						$on = true;
						updateInterval = 1500;
						update();
					} else {
						clearInterval(updateInterval);
						$on = false;
					}
				});

				function update() {
					if ($on == true) {
						plot.setData([getRandomData()]);
						plot.draw();
						setTimeout(update, updateInterval);

					} else {
						clearInterval(updateInterval)
					}

				}

				var $on = false;

				/*end updating chart*/

				/* TAB 2: Social Network  */

				$(function() {
					// jQuery Flot Chart
					var twitter = [[1, 27], [2, 34], [3, 51], [4, 48], [5, 55], [6, 65], [7, 61], [8, 70], [9, 65], [10, 75], [11, 57], [12, 59], [13, 62]], facebook = [[1, 25], [2, 31], [3, 45], [4, 37], [5, 38], [6, 40], [7, 47], [8, 55], [9, 43], [10, 50], [11, 47], [12, 39], [13, 47]], data = [{
						label : "Twitter",
						data : twitter,
						lines : {
							show : true,
							lineWidth : 1,
							fill : true,
							fillColor : {
								colors : [{
									opacity : 0.1
								}, {
									opacity : 0.13
								}]
							}
						},
						points : {
							show : true
						}
					}, {
						label : "Facebook",
						data : facebook,
						lines : {
							show : true,
							lineWidth : 1,
							fill : true,
							fillColor : {
								colors : [{
									opacity : 0.1
								}, {
									opacity : 0.13
								}]
							}
						},
						points : {
							show : true
						}
					}];

					var options = {
						grid : {
							hoverable : true
						},
						colors : ["#568A89", "#3276B1"],
						tooltip : true,
						tooltipOpts : {
							//content : "Value <b>$x</b> Value <span>$y</span>",
							defaultTheme : false
						},
						xaxis : {
							ticks : [[1, "JAN"], [2, "FEB"], [3, "MAR"], [4, "APR"], [5, "MAY"], [6, "JUN"], [7, "JUL"], [8, "AUG"], [9, "SEP"], [10, "OCT"], [11, "NOV"], [12, "DEC"], [13, "JAN+1"]]
						},
						yaxes : {

						}
					};

					var plot3 = $.plot($("#statsChart4"), data, options);
				});

				// END TAB 2

				/* TAB 1: UPDATING CHART */
				// For the demo we use generated data, but normally it would be coming from the server

				var data = [], totalPoints = 200, $UpdatingChartColors = $("#updating-chart5").css('color');

				function getRandomData() {
					if (data.length > 0)
						data = data.slice(1);

					// do a random walk
					while (data.length < totalPoints) {
						var prev = data.length > 0 ? data[data.length - 1] : 50;
						var y = prev + Math.random() * 10 - 5;
						if (y < 0)
							y = 0;
						if (y > 100)
							y = 100;
						data.push(y);
					}

					// zip the generated y values with the x values
					var res = [];
					for (var i = 0; i < data.length; ++i)
						res.push([i, data[i]])
					return res;
				}

				// setup control widget
				var updateInterval = 1500;
				$("#updating-chart5").val(updateInterval).change(function() {

					var v = $(this).val();
					if (v && !isNaN(+v)) {
						updateInterval = +v;
						$(this).val("" + updateInterval);
					}

				});

				// setup plot
				var options = {
					yaxis : {
						min : 0,
						max : 100
					},
					xaxis : {
						min : 0,
						max : 100
					},
					colors : [$UpdatingChartColors],
					series : {
						lines : {
							lineWidth : 1,
							fill : true,
							fillColor : {
								colors : [{
									opacity : 0.4
								}, {
									opacity : 0
								}]
							},
							steps : false

						}
					}
				};

				var plot = $.plot($("#updating-chart5"), [getRandomData()], options);

				/* live switch */
				$('input[type="checkbox"]#start_interval').click(function() {
					if ($(this).prop('checked')) {
						$on = true;
						updateInterval = 1500;
						update();
					} else {
						clearInterval(updateInterval);
						$on = false;
					}
				});

				function update() {
					if ($on == true) {
						plot.setData([getRandomData()]);
						plot.draw();
						setTimeout(update, updateInterval);

					} else {
						clearInterval(updateInterval)
					}

				}

				var $on = false;

				/*end updating chart*/

				/* TAB 2: Social Network  */

				$(function() {
					// jQuery Flot Chart
					var twitter = [[1, 27], [2, 34], [3, 51], [4, 48], [5, 55], [6, 65], [7, 61], [8, 70], [9, 65], [10, 75], [11, 57], [12, 59], [13, 62]], facebook = [[1, 25], [2, 31], [3, 45], [4, 37], [5, 38], [6, 40], [7, 47], [8, 55], [9, 43], [10, 50], [11, 47], [12, 39], [13, 47]], data = [{
						label : "Twitter",
						data : twitter,
						lines : {
							show : true,
							lineWidth : 1,
							fill : true,
							fillColor : {
								colors : [{
									opacity : 0.1
								}, {
									opacity : 0.13
								}]
							}
						},
						points : {
							show : true
						}
					}, {
						label : "Facebook",
						data : facebook,
						lines : {
							show : true,
							lineWidth : 1,
							fill : true,
							fillColor : {
								colors : [{
									opacity : 0.1
								}, {
									opacity : 0.13
								}]
							}
						},
						points : {
							show : true
						}
					}];

					var options = {
						grid : {
							hoverable : true
						},
						colors : ["#568A89", "#3276B1"],
						tooltip : true,
						tooltipOpts : {
							//content : "Value <b>$x</b> Value <span>$y</span>",
							defaultTheme : false
						},
						xaxis : {
							ticks : [[1, "JAN"], [2, "FEB"], [3, "MAR"], [4, "APR"], [5, "MAY"], [6, "JUN"], [7, "JUL"], [8, "AUG"], [9, "SEP"], [10, "OCT"], [11, "NOV"], [12, "DEC"], [13, "JAN+1"]]
						},
						yaxes : {

						}
					};

					var plot3 = $.plot($("#statsChart5"), data, options);
				});

				// END TAB 2

			});

		</script> 

<!-- Your GOOGLE ANALYTICS CODE Below --> 
<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();

		</script>
</body>
</html>