<?php
require_once('restApi.php');

$rest = new RestService();
$area = $rest->get('http://ec2-52-14-250-16.us-east-2.compute.amazonaws.com:3000/area/');
$area = $area->data;

if($_POST)
{
	
	$name = $_POST['name'];
	$areaId = $_POST['areaId'];
	if($name == "" || $areaId == ""){
		echo "<script>alert('please fill all fields')</script>";
	}
	else{
		$data['name'] = $name;
		$data['areaId'] = $areaId;
		
		$count = count($_POST['cat_area']);
		// echo $count;
		// exit;
		
		$district = $rest->post('http://ec2-52-14-250-16.us-east-2.compute.amazonaws.com:3000/district/','',$data);
		
		if($district->success == true)
		{
			// print_r($district->data);
			$distId = $district->data->_id;
			$count = count($_POST['cat_area']);
		
		for($a=0; $a < $count; $a++)
		{
			if($_POST['cat_area'][$a] == "")
			{
				continue;
			}
			else{
				$data1['id'] = $distId;
				$data1['categoryId'] = $_POST['cat_area'][$a];
				$data1['priceEffective'] = $_POST['priceEffective'][$a];
				$data1['priceGeneral'] = $_POST['priceGeneral'][$a];
				$data1['priceCategory'] = $_POST['priceCategory'][$a];
				$data1['priceAvg'] = $_POST['priceAvg'][$a];
				
				$districtCat = $rest->post("http://ec2-52-14-250-16.us-east-2.compute.amazonaws.com:3000/district/insert_category/$distId",'',$data1);
			}
		}
		
			$distData = $rest->get('http://ec2-52-14-250-16.us-east-2.compute.amazonaws.com:3000/district/');
			$distData = $distData->data;
			// print_r($distData);
			// exit;
			echo "<script>alert('done')</script>";
		}
		else{
			echo "<script>alert('some error occured. please try again')</script>";
		}
		
		
		echo "<pre>";
		print_r($data);
		echo "<br>";
		echo json_encode($data);
		exit;
		// $cat = $rest->post('http://ec2-52-14-250-16.us-east-2.compute.amazonaws.com:3000/category/','',$data);
		
		// if($cat->success == true)
		// {
			// echo "<script>alert('done')</script>";
		// }
		// else{
			// echo "<script>alert('some error occured. please try again')</script>";
		// }
		
		// exit;
		
	}
	
}

?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="utf-8">
<title></title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- #CSS Links -->
<!-- Basic Styles -->
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">

<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production-plugins.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-skins.min.css">

<!-- SmartAdmin RTL Support -->
<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css">

<!-- Custom Styles -->
<link rel="stylesheet" type="text/css" media="screen" href="css/custom.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/custom-responsive.css">

<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

<!-- #FAVICONS -->
<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

<!-- #GOOGLE FONT -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

<!-- #APP SCREEN / ICONS -->
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
	|  12. #MAIN PANEL               |  main panel                    |
	|  13. #MAIN CONTENT             |  content holder                |
	|  14. #PAGE FOOTER              |  page footer                   |
	|  15. #SHORTCUT AREA            |  dropdown shortcuts area       |
	|  16. #PLUGINS                  |  all scripts and plugins       |
	
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
          <li><a href="view_category.php"><i class=""></i> <span class="menu-item-parent"> Category</span></a></li>
          <li><a href="view_district.php"><i class=""></i> <span class="menu-item-parent">District</span></a></li>
          
    </ul>
  </nav>
  <span class="minifyme" data-action="minifyMenu"> <i class="fa fa-arrow-circle-left hit"></i> </span> </aside>
<!-- END NAVIGATION --> 

<!-- MAIN PANEL -->
<div id="main" role="main"> 
  
  <!-- MAIN CONTENT -->
  <div id="content"> 
    
    <!-- row -->
    <div class="row"> 
      
      <!-- col -->
      <div class="col-xs-12 col-sm-7">
        <h1 class="page-title txt-color-blueDark"> 
          
          <!-- PAGE HEADER --> 
          <i class="fa-fw fa fa-clipboard"></i> District <!--<strong>Add Client</strong>--> </h1>
      </div>
      <!-- end col --> 
      
      <!-- col -->
      <div class="col-xs-12 col-sm-5"> 
        
        <!-- end breadcrumb --> 
        
      </div>
      <!-- end col --> 
      
    </div>
    <!-- end row --> 
    
    <!--
					The ID "widget-grid" will start to initialize all widgets below 
					You do not need to use widgets if you dont want to. Simply remove 
					the <section></section> and you can use wells or panels instead 
					--> 
    
    <!-- widget grid -->
    <section id="widget-grid" class=""> 
      
      <!-- row -->
      <div class="row"> 
        
        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
          
          <!-- Widget ID (each widget will need unique ID)-->
          <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-1" data-widget-sortable="false" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false"> 
            <!-- widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

								data-widget-colorbutton="false"
								data-widget-editbutton="false"
								data-widget-togglebutton="false"
								data-widget-deletebutton="false"
								data-widget-fullscreenbutton="false"
								data-widget-custombutton="false"
								data-widget-collapsed="true"
								data-widget-sortable="false"

								-->
            <header class="customheaderbar">
              <h2>Add New District</h2>
            </header>
            
            <!-- widget div-->
            <div> 
              
              <!-- widget edit box -->
              <div class="jarviswidget-editbox"> 
                <!-- This area used as dropdown edit box --> 
                
              </div>
              <!-- end widget edit box --> 
              
              <!-- widget content -->
              <div class="widget-body">
                <div class="row">
                  <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <form id="form" name="form" method="POST" >
                      <fieldset>
                        <div class="row">
                          <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                              <label>District Name</label>
                              <input class="form-control" placeholder="" type="text" name="name" id="name">
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6">
                            <label>Area</label>
                            <div class="form-group">
                              <select class="form-control" id="areaId" name="areaId" onchange="UserAction(this.value)">
                                <option value="">Select Area</option>
                                <?php for($i=0; $i < count($area); $i++ ){
								?>
								<option value="<?php echo $area[$i]->_id ?>"> <?php echo $area[$i]->name ?> </option>
								<?php } ?>
                              </select>
                            </div>
                          </div>
                        </div>
						
						<div class="row">
					  <h2> &nbsp;&nbsp;&nbsp;<strong>Map Categories</strong></h2>
                  <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php 
					
					for($i=0; $i < 10; $i++) {
					?>
					<hr>
                      <fieldset>
                        <div class="row">
                          <div class="col-md-2 col-sm-6">
                              <label>Category</label>
                            <div class="form-group">
                              <select class="form-control" id="cat_area_<?php echo $i?>" name="cat_area[]">
                                <option value="">Select Category</option>
                              </select>
                            </div>
                            </div>
                          <div class="col-md-2 col-sm-6">
                            <div class="form-group">
                              <label>Price Effective</label>
                              <input class="form-control" placeholder="" type="text" name="priceEffective[]" id="priceEffective">
                            </div>
                          </div>
						  <div class="col-md-2 col-sm-6">
                            <div class="form-group">
                              <label>Price General</label>
                              <input class="form-control" placeholder="" type="text" name="priceGeneral[]" id="priceGeneral">
                            </div>
                          </div>
						  <div class="col-md-2 col-sm-6">
                            <div class="form-group">
                              <label>Price Category</label>
                              <input class="form-control" placeholder="" type="text" id="priceCategory" name="priceCategory[]">
                            </div>
                          </div>
						  <div class="col-md-2 col-sm-6">
                            <div class="form-group">
                              <label>Price Average</label>
                              <input class="form-control" placeholder="" type="text" id="priceAvg" name="priceAvg[]">
                            </div>
                          </div>
						  
                        </div>
						
						</fieldset>
						
						<?php }?>
                    </form>
                  </div>
                </div>
				
                        <button class="btn btn-primary" type="submit">Save</button>
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
              <!-- end widget content --> 
              
            </div>
            <!-- end widget div --> 
            
          </div>
          <!-- end widget --> 
          
        </article>
        <!-- WIDGET END --> 
        
      </div>
      
      <!-- end row --> 
      
      <!-- row -->
      
      <div class="row"> 
        
        <!-- a blank row to get started -->
        <div class="col-sm-12"> 
          <!-- your contents here --> 
        </div>
      </div>
      
      <!-- end row --> 
      
    </section>
    <!-- end widget grid --> 
    
  </div>
  <!-- END MAIN CONTENT --> 
  
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

<!-- PAGE RELATED PLUGIN(S) 
		<script src="..."></script>--> 
<script src="js/plugin/datatables/jquery.dataTables.min.js"></script> 
<script src="js/plugin/datatables/dataTables.colVis.min.js"></script> 
<script src="js/plugin/datatables/dataTables.tableTools.min.js"></script> 
<script src="js/plugin/datatables/dataTables.bootstrap.min.js"></script> 
<script src="js/plugin/datatable-responsive/datatables.responsive.min.js"></script> 
<script type="text/javascript">

function UserAction(id) {
	var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "http://ec2-52-14-250-16.us-east-2.compute.amazonaws.com:3000/category/area_id/"+id, false);
    xhttp.setRequestHeader("Content-type", "application/json");
    xhttp.send();
    var response = JSON.parse(xhttp.responseText);
	console.log(response); 
	
	<?
	for($z=0; $z < 10; $z++)
	{
	?>
	var select = $('#cat_area_<?php echo $z ?>');

	select.empty();
	select.append('<option value="">Select Category</option>');

	if (response.success == true) {
		$.each(response.data, function (i, fb) {
			select.append('<option value="' + fb._id + '">' + fb.name + '</option>');
		});
	}
	
	<?php } ?>
}

			$(document).ready(function() {
			 	
				/* DO NOT REMOVE : GLOBAL FUNCTIONS!
				 *
				 * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
				 *
				 * // activate tooltips
				 * $("[rel=tooltip]").tooltip();
				 *
				 * // activate popovers
				 * $("[rel=popover]").popover();
				 *
				 * // activate popovers with hover states
				 * $("[rel=popover-hover]").popover({ trigger: "hover" });
				 *
				 * // activate inline charts
				 * runAllCharts();
				 *
				 * // setup widgets
				 * setup_widgets_desktop();
				 *
				 * // run form elements
				 * runAllForms();
				 *
				 ********************************
				 *
				 * pageSetUp() is needed whenever you load a page.
				 * It initializes and checks for all basic elements of the page
				 * and makes rendering easier.
				 *
				 */
				
				 pageSetUp();
				 
				/*
				 * ALL PAGE RELATED SCRIPTS CAN GO BELOW HERE
				 * eg alert("my home function");
				 * 
				 * var pagefunction = function() {
				 *   ...
				 * }
				 * loadScript("js/plugin/_PLUGIN_NAME_.js", pagefunction);
				 * 
				 * TO LOAD A SCRIPT:
				 * var pagefunction = function (){ 
				 *  loadScript(".../plugin.js", run_after_loaded);	
				 * }
				 * 
				 * OR
				 * 
				 * loadScript(".../plugin.js", run_after_loaded);
				 */

				/* // DOM Position key index //
				
					l - Length changing (dropdown)
					f - Filtering input (search)
					t - The Table! (datatable)
					i - Information (records)
					p - Pagination (paging)
					r - pRocessing 
					< and > - div elements
					<"#id" and > - div with an id
					<"class" and > - div with a class
					<"#id.class" and > - div with an id and class
					
					Also see: http://legacy.datatables.net/usage/features
				*/	

				/* BASIC ;*/
					var responsiveHelper_dt_basic = undefined;
					var responsiveHelper_datatable_fixed_column = undefined;
					var responsiveHelper_datatable_col_reorder = undefined;
					var responsiveHelper_datatable_tabletools = undefined;
					
					var breakpointDefinition = {
						tablet : 1024,
						phone : 480
					};

				/* END BASIC */
				
				/* COLUMN FILTER  */
			    var otable = $('#datatable_fixed_column').DataTable({
			    	//"bFilter": false,
			    	//"bInfo": false,
			    	//"bLengthChange": false
			    	//"bAutoWidth": false,
			    	//"bPaginate": false,
			    	//"bStateSave": true // saves sort state using localStorage
					"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6 hidden-xs'f><'col-sm-6 col-xs-12 hidden-xs'<'toolbar'>>r>"+
							"t"+
							"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
					"autoWidth" : true,
					"oLanguage": {
						"sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
					},
					"preDrawCallback" : function() {
						// Initialize the responsive datatables helper once.
						if (!responsiveHelper_datatable_fixed_column) {
							responsiveHelper_datatable_fixed_column = new ResponsiveDatatablesHelper($('#datatable_fixed_column'), breakpointDefinition);
						}
					},
					"rowCallback" : function(nRow) {
						responsiveHelper_datatable_fixed_column.createExpandIcon(nRow);
					},
					"drawCallback" : function(oSettings) {
						responsiveHelper_datatable_fixed_column.respond();
					}		
				
			    });
			    
			    // custom toolbar
			    $("div.toolbar").html('<div class="text-right"><img src="img/logo.png" alt="SmartAdmin" style="width: 111px; margin-top: 3px; margin-right: 10px;"></div>');
			    	   
			    // Apply the filter
			    $("#datatable_fixed_column thead th input[type=text]").on( 'keyup change', function () {
			    	
			        otable
			            .column( $(this).parent().index()+':visible' )
			            .search( this.value )
			            .draw();
			            
			    } );
			    /* END COLUMN FILTER */   

				
			})
		
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
