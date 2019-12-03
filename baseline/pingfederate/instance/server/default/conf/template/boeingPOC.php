<!DOCTYPE html>

<html lang="en_US">


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Start PHP Session
// ==============================================================

session_start();

//if ($_SESSION['subject'])
//{
//}
//else 
//{
// Retrieve User Reference from HTTP POST
// ==============================================================

$referenceId = $_POST['REF'];

// API Username and Password from PingFederate SP Adapter
// ==============================================================

$restApiUser = 'testapp';
$restApiPass = '2FederateM0re';

// Build Connection to REST API
// ==============================================================

$restUrl = "https://boeingpoc.ping-eng.com:9031/ext/ref/pickup?REF=$referenceId";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $restUrl);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER ,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_USERPWD, "$restApiUser:$restApiPass");

// Fetch JSON info about this user
// ==============================================================

$response = curl_exec($ch);

$responseData = json_decode($response, true);

// Parse returned JSON
// ==============================================================

$subject = $responseData['subject'];
$givenName = $responseData['givenName'];

//if (empty ($subject)) {

  // do not know user - should redirect
  // ==============================================================

  //session_destroy();
  //header("Location: /");

  

//}


// valid user - start session
// ==============================================================

$_SESSION['subject'] = $subject;
$_SESSION['givenName'] = $givenName;

//}

?>

<html lang="en_US">
<head>
	<title>
		Boeing Global Market Site | Aircraft Part Supplies &amp; Training for General Aviation</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="referrer" content="same-origin">

	<meta name="keywords">
<meta name="description">
<meta name="robots" content="index,follow">
<link rel="shortcut icon" type="image/x-icon" media="all" href="https://shop.boeingservices.com/shop/_ui/responsive/theme-alpha/images/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined">
<link rel="stylesheet" type="text/css" media="all" href="https://shop.boeingservices.com/shop/_ui/responsive/common/bootstrap/css/main.css?v=462"/>
		<link rel="stylesheet" type="text/css" media="all" href="https://shop.boeingservices.com/shop/_ui/addons/textfieldconfiguratortemplateaddon/responsive/common/css/textfieldconfiguratortemplateaddon.css"/>
		<link rel="stylesheet" type="text/css" media="all" href="https://shop.boeingservices.com/shop/_ui/addons/assistedservicepromotionaddon/responsive/common/css/assistedservicepromotionaddon.css"/>
		<link rel="stylesheet" type="text/css" media="all" href="https://shop.boeingservices.com/shop/_ui/addons/assistedservicestorefront/responsive/common/css/assistedservicestorefront.css"/>
		<link rel="stylesheet" type="text/css" media="all" href="https://shop.boeingservices.com/shop/_ui/addons/assistedservicestorefront/responsive/common/css/storeFinder.css"/>
		<link rel="stylesheet" type="text/css" media="all" href="https://shop.boeingservices.com/shop/_ui/addons/smarteditaddon/responsive/common/css/smarteditaddon.css"/>
		<link rel="stylesheet" type="text/css" media="all" href="https://shop.boeingservices.com/shop/_ui/addons/customerticketingaddon/responsive/common/css/customerticketingaddon.css"/>
		<link rel="stylesheet" type="text/css" media="all" href="https://shop.boeingservices.com/shop/_ui/addons/orderselfserviceaddon/responsive/common/css/orderselfserviceaddon.css"/>
		<script src="//assets.adobedtm.com/launch-ENe0c77edfae6c4b5a852a1c243834b0b3.min.js" async></script>

<script type="text/javascript">

	var digitalData = window.digitalData || {};
	digitalData.page = {
	  pageInfo: {
	    pageName: pathToName(), 
	    sysEnv: "prod",
			
	  },
	  category: {
	    applicationName: "BGS Marketplace"
	  },
	  attributes: {
	    currency: "USD"
	  }
	};
	
	
	digitalData.user = [{
		
	    profile: [{
	      profileInfo: { 
	    	  profileID: ""
	      }
	    }]
	  }];
	
	
	
	
	digitalData.pageInstanceID = "1567130305536";
	
		function pathToName() {
		a = "/";
		a = a.replace('/BGS','');
		a = a.replace(/-/g,' ');
		a = a.substring(1);
		a = a.split("/");
		a = a.join(":");
		if (a.charAt(a.length - 1) == ':') {
			  a = a.substr(0, a.length - 1);
			}
		if (false) {
			a = a.split(':c:')[0];
			a = a.concat(':Homepage');
		}
		if (false) {
			a = a.split(":");
			a.pop();
			a = a.join(":");
		}
		if (false) {
			a = a.split(":");
			a.pop();
			a = a.join(":");
			a = a.concat(':order details');
		}
		if (false) {
			a = a.split(':p:')[0];
			a = a.split(':');
			a.pop();
			a = a.join(":");
			a = a.concat(':Homepage');
			if (a == "c:Product Details") {
				a = "Product Details";
			}
		}
		if (true) {
			a = "home";
		}
		return a;
	}

</script>





<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/shared/js/analyticsmediator.js?v=462"></script>
<script type="text/javascript">
/* Google Analytics */

var googleAnalyticsTrackingId = 'your_google_analytics_tracking_id';
var _gaq = _gaq || [];
_gaq.push(['_setAccount', googleAnalyticsTrackingId]);


		_gaq.push(['_trackPageview']);
	

(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();


function trackAddToCart_google(productCode, quantityAdded) {
	_gaq.push(['_trackEvent', 'Cart', 'AddToCart', productCode, quantityAdded]);
}

function trackUpdateCart(productCode, initialQuantity, newQuantity) {
	if (initialQuantity != newQuantity) {
		if (initialQuantity > newQuantity) {
			_gaq.push(['_trackEvent', 'Cart', 'RemoveFromCart', productCode, initialQuantity - newQuantity]);
		} else {
			_gaq.push(['_trackEvent', 'Cart', 'AddToCart', productCode, newQuantity - initialQuantity]);
		}
	}
}

function trackRemoveFromCart(productCode, initialQuantity) {
	_gaq.push(['_trackEvent', 'Cart', 'RemoveFromCart', productCode, initialQuantity]);
}

window.mediator.subscribe('trackAddToCart', function(data) {
	if (data.productCode && data.quantity)
	{
		trackAddToCart_google(data.productCode, data.quantity);
	}
});

window.mediator.subscribe('trackUpdateCart', function(data) {
	if (data.productCode && data.initialCartQuantity && data.newCartQuantity)
	{
		trackUpdateCart(data.productCode, data.initialCartQuantity, data.newCartQuantity);
	}
});

window.mediator.subscribe('trackRemoveFromCart', function(data) {
	if (data.productCode && data.initialCartQuantity)
	{
		trackRemoveFromCart(data.productCode, data.initialCartQuantity);
	}
});
</script>
<script charset='UTF-8'>
window['adrum-start-time'] = new Date().getTime();
(function(config){
	config.appKey = 'AD-AAB-AAP-FVJ';
    config.adrumExtUrlHttp = 'http://shop.boeingservices.com/shop/_ui/shared/js/adrum/';
    config.adrumExtUrlHttps = 'https://shop.boeingservices.com/shop/_ui/shared/js/adrum/multicountrysampledataaddon.import.active=false';
    config.beaconUrlHttp = 'http://col.eum-appdynamics.com';
    config.beaconUrlHttps = 'https://col.eum-appdynamics.com';
    config.xd = {enable : false};
})(window['adrum-config'] || (window['adrum-config'] = {}));
</script>
<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/shared/js/adrum/adrum.js?v=462"></script>





  








                    <script>var w=window;if(w.performance||w.mozPerformance||w.msPerformance||w.webkitPerformance){var d=document;AKSB=w.AKSB||{},AKSB.q=AKSB.q||[],AKSB.mark=AKSB.mark||function(e,_){AKSB.q.push(["mark",e,_||(new Date).getTime()])},AKSB.measure=AKSB.measure||function(e,_,t){AKSB.q.push(["measure",e,_,t||(new Date).getTime()])},AKSB.done=AKSB.done||function(e){AKSB.q.push(["done",e])},AKSB.mark("firstbyte",(new Date).getTime()),AKSB.prof={custid:"835537",ustr:"",originlat:"0",clientrtt:"13",ghostip:"184.25.204.159",ipv6:false,pct:"10",clientip:"71.229.177.7",requestid:"12f6c5e2",region:"29427",protocol:"h2",blver:14,akM:"a",akN:"ae",akTT:"O",akTX:"1",akTI:"12f6c5e2",ai:"531978",ra:"false",pmgn:"",pmgi:"",pmp:"",qc:""},function(e){var _=d.createElement("script");_.async="async",_.src=e;var t=d.getElementsByTagName("script"),t=t[t.length-1];t.parentNode.insertBefore(_,t)}(("https:"===d.location.protocol?"https:":"http:")+"//ds-aksb-a.akamaihd.net/aksb.min.js")}</script>
                    </head>

<body class="page-homepage pageType-ContentPage template-pages-layout-landingLayout2Page pageLabel-homepage smartedit-page-uid-homepage smartedit-page-uuid-eyJpdGVtSWQiOiJob21lcGFnZSIsImNhdGFsb2dJZCI6ImJnc0NvbnRlbnRDYXRhbG9nIiwiY2F0YWxvZ1ZlcnNpb24iOiJPbmxpbmUifQ== smartedit-catalog-version-uuid-bgsContentCatalog/Online  language-en_US">

	<main data-currency-iso-code="USD">
				<div class="yCmsContentSlot">
</div><div id="header">
	<div>
		<header>
			<div class="header">
			<a id="main-menu-toggle" href="#main-menu" role="button" aria-expanded="false" aria-controls="main-menu" aria-label="Open main menu" class="menu-toggle hamburger-button"><span class="sr-only">Open main menu</span><i class="material-icons">menu</i></a>
				<div class="yCmsComponent yComponentWrapper">
<div class="sub-category-container">
			<a href="https://shop.boeingservices.com/shop/"><img title="" class="img"
				alt="" src="https://shop.boeingservices.com/shop/medias/boeing.png?context=bWFzdGVyfGltYWdlc3wyMDc2fGltYWdlL3BuZ3xpbWFnZXMvaDdmL2hiNy84Nzk2MTE2NTQ5NjYyLnBuZ3wwMWE2NTU4NTg0ODdhZDhmYjU2ZDlkMzgzYjE2MzM4ZTQ1ZTJlM2MxMjA5YTFjMDNiZTdlYTZkNzI0ZGVkMjFl"></a>
		</div>
		</div><form name="search_form_SearchBox" method="get"
	action="https://shop.boeingservices.com/shop/search/" class="search-form visible-sm visible-md visible-lg">
	<div class="ui-front">
		<div class="input-group">
			<input type="text" id="js-site-search-input"
					class="form-control js-site-search-input" name="text" value=""
                    maxlength="100" placeholder="Search"
					data-options="{
						&#034;autocompleteUrl&#034; : &#034;/shop/search/autocomplete/SearchBox&#034;,
						&#034;minCharactersBeforeRequest&#034; : &#034;3&#034;,
						&#034;waitTimeBeforeRequest&#034; : &#034;500&#034;,
						&#034;displayProductImages&#034; : &#034;true&#034;
					}">
			<span class="input-group-btn"> <button class="btn btn-link js_search_button" type="submit" disabled="true">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
		</div>
	</div>
</form><?php 
if(isset($_SESSION["subject"])) {
    echo '<ul class="site-options drop-options">
                        <li class="visible-sm visible-xs search-icon material-icons">
                            <i class="material-icons">search</i>
                        </li>
                        <li class="nav-options list-items right-app">
                            <a href="/shop/cart">
                                <i class="material-icons">shopping_cart</i>
                            </a>
                        </li>
                        <li class="nav-options list-items right-app">
                            <span data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons apps-icon hidden-xs">
                                    <a href="#">apps</a>
                                </i>
                            </span>
                            <ul class="dropdown-menu">
                                <li class="dropdown-items">
                                    <div>
                                        <ul class="subcategory-container">
                                            <li class="dropdown-header">
                                                <span>
                                                    <div class="content">Our Brands</div>
                                                </span>
                                            </li>
                                            <li class="dropdown-subitems">
                                                <a href="https://www.aviall.com/aviallstorefront" title="Aviall" target="_blank" rel="noopener noreferrer">Aviall</a>
                                                <a href="https://www.aerdata.com" title="AerData" target="_blank" rel="noopener noreferrer">AerData</a>
                                                <a href="https://www.ilsmart.com" title="ILS" target="_blank" rel="noopener noreferrer">ILS</a>
                                                <a href="http://jeppesen.com" title="Jeppesen" target="_blank" rel="noopener noreferrer">Jeppesen</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-options list-items account-circle">
                            <span data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons account-icon hidden-xs">
                                    <a href="#">account_circle</a>
                                </i>
                            </span>
                            <ul class="dropdown-menu" style="max-height=800px">
                                <li class="dropdown-items">
                                    <div>
                                        <ul class="subcategory-container">
                                            <li class="dropdown-header">
                                                <a class="visible-sm visible-md visible-lg" href="#">Welcome ' . $_SESSION["givenName"] . '</a>
                                                <span>' . $_SESSION["subject"] . '</span>
                                            </li>
                                            <li class="dropdown-subitems">
                                                <a href="/shop/my-account/account-details" title="Account Details">Account Details</a>
                                                <a href="https://boeingpoc.ping-eng.com:9031/pf/idprofile.ping?LocalIdentityProfileID=RBSQIwi5KWYN9ZGK" title="Profile Management">Profile Management</a>
                                                <a href="/shop/my-account/aircraft-TailInfo" title="Aircraft Details">Aircraft Details</a>
                                                <a href="/shop/my-account/update-password" title="Change Password">Change Password</a>
                                                <a href="/shop/my-account/update-email" title="Change Email">Change Email</a>
                                                <a href="/shop/my-account/orders" title="Order History">Order History</a>
                                                <a href="/shop/my-account/subscriptions" title="My Subscriptions">My Subscriptions</a>
                                                <a href="#" title="My Invoices">My Invoices</a>
                                                <a href="/shop/my-account/myDevices" title="My Devices">My Devices</a>
                                            </li>
                                            <li class="dropdown-subitems sign-out">
                                                <a href="/shop/logout">Sign Out</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>

			</ul>';    
/*   echo '<ul class="site-options drop-options">
						<li class="nav-options list-items first-drop"><span
							data-toggle="dropdown" role="button" aria-haspopup="true"
							aria-expanded="false">
								<a href="#" class="visible-sm visible-md visible-lg">' . $_SESSION["givenName"] . '</a>
									</span>
							<ul class="dropdown-menu">
								<li class="back-item visible-xs"><i
									class="material-icons visible-xs arrow">keyboard_arrow_left<a>Back</a></i>
								</li>
								<li class="dropdown-items">
									<div>
										<ul class="subcategory-container">
											<li class="dropdown-subitems"><a href="/shop/my-account/account-details" title="My Account">My Account</a></li>
											<li class="dropdown-subitems sign-out"><a href="/shop/logout"> Sign Out</a>
												</li>
										</ul>
				
			</div>
			</li>
			</ul>';*/
} else {
    echo '         <ul class="site-options">
					
					<li class="visible-md visible-lg login-options">
									<a href="https://boeingpoc.ping-eng.com:9031/idp/startSSO.ping?PartnerSpId=testconnect2"> Login</a>
									</li>
								<li class="visible-md visible-lg login-options">
									<a href="/shop/register-flow/"> Register</a>
									</li>
										<li class="visible-xs"><a href="#"><i class="material-icons visible-xs">search</i></a></li>
										<li class="cart-icon"><a href="https://boeingpoc.ping-eng.com:9031/idp/startSSO.ping?PartnerSpId=testconnect2" class="visible-sm visible-md visible-lg visible-xs"></a></li>
									
							</ul>';
}
?>
				</div>
 	<nav id="main-menu" role="navigation" aria-expanded="false"
   aria-label="Main menu" class="main-menu">
   <ul>
      <div class="top-menu-container">
         <a id="main-menu-close" href="#main-menu-toggle" role="button"
            aria-expanded="false" aria-controls="main-menu"
            aria-label="Close main menu" class="menu-close">
            <span
               class="sr-only">Close main menu</span>
            <div>
               <i class="material-icons back-arrow">arrow_back </i>
            </div>
         </a>
         <?php 
if(isset($_SESSION["subject"])) {
    echo '<ul class="menu-top-options">
            <li class="visible-xs">
                  </li>
					<li class="visible-xs open">
                  <span data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                     <a href="#" class="side-menu-acct login-options"> Welcome ' . $_SESSION["givenName"] . '</a>
							<i class="material-icons visible-xs">arrow_drop_down</i>
                  </span>
                  <ul class="dropdown-menu welc-options">
                     <li class="dropdown-items"></li>
                     <div>
                        <ul class="subcategory-container">
                           <li class="dropdown-subitems">
                              <a href="/shop/my-account/account-details" title="My Account">My Account</a></li>
                           <li class="dropdown-subitems sign-out">
                              <a href="/shop/logout">
                                    Sign Out</a>
                              </li>
                        </ul>
                     </div>
                  </ul>
               </li>
            </ul>';
} else {
    echo '         <ul class="menu-top-options">
            <li class="visible-xs">
                  </li>
					<li class="visible-xs">
							 <a class="side-menu-login login-options" href="https://boeingpoc.ping-eng.com:9031/idp/startSSO.ping?PartnerSpId=testconnect2">
									  Login</a>
							 </li>
							<li class="visible-xs">
								<a class="side-menu-acct login-options" href="/shop/register-flow/"> 
									 Register</a>
								</li>
						</ul>';
}
?>
      </div>
      <div class="desktop-nav">

				<!-- <li class="nav-options list-items"> -->

				<li
						class="nav-options list-items first-nav ">
						<span data-toggle="dropdown" role="button" aria-haspopup="true"
						aria-expanded="false" ><a href="https://shop.boeingservices.com/shop/All-Products/c/000" title="Shop Now">Shop Now</a><i class="material-icons visible-xs">keyboard_arrow_right</i></span>
						<ul class="dropdown-menu">
							<li class="back-item visible-xs"><i
								class="material-icons visible-xs arrow">keyboard_arrow_left<a>Back</a></i></li>
							<li class="dropdown-items second-nav">
							<a href="https://shop.boeingservices.com/shop/All-Products/c/000" title="Shop Now">Shop Now</a><div>
												<ul class="subcategory-container">
													<li class="dropdown-header"><a href="https://shop.boeingservices.com/shop/All-Products/c/000" title="All Products">All Products</a><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Aircraft-and-Systems/c/1ACS" title="Aircraft &amp; Systems">Aircraft &amp; Systems</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Engines%2C-Parts-and-Accessories/c/1EPA" title="Engines, Parts &amp; Accessories">Engines, Parts &amp; Accessories</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Chemicals-and-Consumables/c/1CNC" title="Chemicals &amp; Consumables">Chemicals &amp; Consumables</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Electrical-and-Lighting/c/1ENL" title="Electrical and Lighting">Electrical and Lighting</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Hardware-and-Standard-Parts/c/1HSP" title="Hardware &amp; Standard Parts">Hardware &amp; Standard Parts</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Training-and-Courseware/c/110" title="Training &amp; Courseware">Training &amp; Courseware</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Pilot-and-Flight-Supplies/c/1PFS" title="Pilot &amp; Flight Supplies">Pilot &amp; Flight Supplies</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Software-and-Data/c/100" title="Software &amp; Data">Software &amp; Data</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Tools-and-Shop-Supplies/c/1TSS" title="Tools &amp; Shop Supplies">Tools &amp; Shop Supplies</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Safety-and-Emergency/c/1SNE" title="Safety &amp; Emergency">Safety &amp; Emergency</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Ground-Support-and-Facilities/c/1GSF" title="Ground Support &amp; Facilities">Ground Support &amp; Facilities</a></li></li>
												</ul>
											</div>
										</li>

						</ul>
				<li
						class="nav-options list-items first-nav ">
						<span data-toggle="dropdown" role="button" aria-haspopup="true"
						aria-expanded="false" ><a href="https://shop.boeingservices.com/shop/Software-and-Data/c/100" title="Software &amp; Data">Software &amp; Data</a><i class="material-icons visible-xs">keyboard_arrow_right</i></span>
						<ul class="dropdown-menu">
							<li class="back-item visible-xs"><i
								class="material-icons visible-xs arrow">keyboard_arrow_left<a>Back</a></i></li>
							<li class="dropdown-items second-nav">
							<a href="https://shop.boeingservices.com/shop/Software-and-Data/c/100" title="Software &amp; Data">Software &amp; Data</a><div>
												<ul class="subcategory-container">
													<li class="dropdown-header"><a href="https://shop.boeingservices.com/shop/Electronic-Charts/c/100110" title="Electronic Charts">Electronic Charts</a><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Mobile-FliteDeck-IFR/c/100110110" title="Mobile FliteDeck IFR">Mobile FliteDeck IFR</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/JeppView/c/100110130" title="JeppView">JeppView</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Supplements-%26-References/c/100110140" title="Supplements &amp; References">Supplements &amp; References</a></li></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"><a href="https://shop.boeingservices.com/shop/databases-coming-soon" title="Avionics Data &amp; Solutions">Avionics Data &amp; Solutions</a></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										</li>

						</ul>
				<li
						class="nav-options list-items first-nav ">
						<span data-toggle="dropdown" role="button" aria-haspopup="true"
						aria-expanded="false" ><a href="https://shop.boeingservices.com/shop/c/110" title="Training">Training</a><i class="material-icons visible-xs">keyboard_arrow_right</i></span>
						<ul class="dropdown-menu">
							<li class="back-item visible-xs"><i
								class="material-icons visible-xs arrow">keyboard_arrow_left<a>Back</a></i></li>
							<li class="dropdown-items second-nav">
							<a href="https://shop.boeingservices.com/shop/c/110" title="Training">Training</a><div>
												<ul class="subcategory-container">
													<li class="dropdown-header"><a href="https://shop.boeingservices.com/shop/c/110100" title="Private Pilot">Private Pilot</a><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/110100120" title="Courseware &amp; Books">Courseware &amp; Books</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/110100100" title="Kits">Kits</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/private-pilot-online-training-coming-soon" title="Online Training">Online Training</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/110100130" title="E-Books">E-Books</a></li></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"><a href="https://shop.boeingservices.com/shop/c/110110" title="Instrument / Commercial">Instrument / Commercial</a><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/110110100" title="Kits">Kits</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/private-pilot-online-training-coming-soon" title="Online Training">Online Training</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/110110130" title="E-Books">E-Books</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/110110120" title="Courseware &amp; Books">Courseware &amp; Books</a></li></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"><a href="https://shop.boeingservices.com/shop/c/110120" title="Multi-engine">Multi-engine</a><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/110120110" title="E-books">E-books</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/110120100" title="Courseware &amp; Books">Courseware &amp; Books</a></li></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"><a href="https://shop.boeingservices.com/shop/c/110130" title="Flight instructor">Flight instructor</a><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/110130110" title="Courseware &amp; Books">Courseware &amp; Books</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/110130120" title="E-books">E-books</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/110130100" title="Instructor Tools">Instructor Tools</a></li></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"><a href="https://shop.boeingservices.com/shop/c/110140" title="Maintenance">Maintenance</a><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/110140100" title="Kits">Kits</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/110140120" title="Videos">Videos</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/110140130" title="E-books (FAA)">E-books (FAA)</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/110140110" title="Courseware &amp; Books">Courseware &amp; Books</a></li></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"><a href="https://shop.boeingservices.com/shop/c/110180" title="Airline Transport Pilot">Airline Transport Pilot</a><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/110180110" title="ATP Courseware &amp; Books">ATP Courseware &amp; Books</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/110180120" title="E-Books">E-Books</a></li></li>
												</ul>
											</div>
										</li>

						</ul>
				<li
						class="nav-options list-items first-nav ">
						<span data-toggle="dropdown" role="button" aria-haspopup="true"
						aria-expanded="false" ><a href="https://shop.boeingservices.com/shop/Chemicals-and-Consumables/c/1CNC" title="Chemicals &amp; Consumables">Chemicals &amp; Consumables</a><i class="material-icons visible-xs">keyboard_arrow_right</i></span>
						<ul class="dropdown-menu">
							<li class="back-item visible-xs"><i
								class="material-icons visible-xs arrow">keyboard_arrow_left<a>Back</a></i></li>
							<li class="dropdown-items second-nav">
							<a href="https://shop.boeingservices.com/shop/Chemicals-and-Consumables/c/1CNC" title="Chemicals &amp; Consumables">Chemicals &amp; Consumables</a><div>
												<ul class="subcategory-container">
													<li class="dropdown-header"><a href="https://shop.boeingservices.com/shop/Cleaners-and-Degreasers/c/1CNC-2CND" title="Cleaners &amp; Degreasers">Cleaners &amp; Degreasers</a><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Multi-Purpose-Cleaners/c/2CND-3MPC" title="Multi Purpose Cleaners">Multi Purpose Cleaners</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Cleaners-and-Degreasers/c/1CNC-2CND" title="Cleaners &amp; Degreasers">Cleaners &amp; Degreasers</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Contact-Cleaners/c/2CND-3COC" title="Contact Cleaners">Contact Cleaners</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Leather-Cleaners/c/2CND-3LTH" title="Leather Cleaners">Leather Cleaners</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Polishes/c/2CND-3POL" title="Polishes">Polishes</a></li><li class="yCmsComponent dropdown-subitems">
</li></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"><a href="https://shop.boeingservices.com/shop/Oils-and-Lubricants/c/1CNC-2ONL" title="Oils &amp; Lubricants">Oils &amp; Lubricants</a><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Oils/c/2ONL-3OIL" title="Oils">Oils</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Grease/c/2ONL-3GRE" title="Grease">Grease</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Lubricants-and-Penetrants/c/2ONL-3LNP" title="Lubricants &amp; Penetrants">Lubricants &amp; Penetrants</a></li></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"><a href="https://shop.boeingservices.com/shop/Sealants%2C-Adhesives-and-Tapes/c/1CNC-2SAT" title="Sealants, Adhesives &amp; Tapes">Sealants, Adhesives &amp; Tapes</a><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Sealants/c/2SAT-3SEA" title="Sealants">Sealants</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Adhesives/c/2SAT-3ADH" title="Adhesives">Adhesives</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Tapes/c/2SAT-3TAP" title="Tapes">Tapes</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Putties/c/2SAT-3PUT" title="Putties">Putties</a></li></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"><a href="https://shop.boeingservices.com/shop/Paints%2C-Primers%2C-and-Finishes/c/1CNC-2PPF" title="Paints, Primers &amp; Finishes">Paints, Primers &amp; Finishes</a><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Paints/c/2PPF-3PNT" title="Paints">Paints</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Primers/c/2PPF-3PRM" title="Primers">Primers</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Finishes/c/2PPF-3FIN" title="Finishes ">Finishes </a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/Solvent-and-Thinners/c/2PPF-3SNT" title="Solvents and Thinners">Solvents and Thinners</a></li></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										</li>

						</ul>
				<li
						class="nav-options list-items first-nav ">
						<span data-toggle="dropdown" role="button" aria-haspopup="true"
						aria-expanded="false" ><a href="https://shop.boeingservices.com/shop/c/120" title="Pilot Supplies">Pilot Supplies</a><i class="material-icons visible-xs">keyboard_arrow_right</i></span>
						<ul class="dropdown-menu">
							<li class="back-item visible-xs"><i
								class="material-icons visible-xs arrow">keyboard_arrow_left<a>Back</a></i></li>
							<li class="dropdown-items second-nav">
							<a href="https://shop.boeingservices.com/shop/c/120" title="Pilot Supplies">Pilot Supplies</a><div>
												<ul class="subcategory-container">
													<li class="dropdown-header"><a href="https://shop.boeingservices.com/shop/c/120110" title="Navigation Equipment / Hardware">Navigation Equipment / Hardware</a><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/120110100" title="Aviation Computers">Aviation Computers</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/120110120" title="Plotters">Plotters</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/120110110" title="NavData Hardware">NavData Hardware</a></li></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"><a href="https://shop.boeingservices.com/shop/c/120100" title="Binders &amp; Accessories">Binders &amp; Accessories</a><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/120100130" title="iPad Covers">iPad Covers</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/120100110" title="Pilot Bags">Pilot Bags</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/120100150" title="Organizers">Organizers</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/120100160" title="Kneeboards and clipboards">Kneeboards and clipboards</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/120100100" title="Accessories">Accessories</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/120100140" title="Logbooks and navigation logs">Logbooks and navigation logs</a></li></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"><a href="https://shop.boeingservices.com/shop/c/120120" title="Charting Paper &amp; Accessories">Charting Paper &amp; Accessories</a><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/120120110" title="Charting Paper">Charting Paper</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/120130" title="Plotting Charts">Plotting Charts</a></li><li class="yCmsComponent dropdown-subitems">
<a href="https://shop.boeingservices.com/shop/c/120120100" title="Airway Manual binders">Airway Manual binders</a></li></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										<div>
												<ul class="subcategory-container">
													<li class="dropdown-header"></li>
												</ul>
											</div>
										</li>

						</ul>
				</li>
			</div>
</ul>
</nav>
<a href="#main-menu-toggle" tabindex="-1" aria-hidden="true" hidden
   class="backdrop"></a>

<div class="hidden-xs hidden-sm js-secondaryNavAccount collapse"
   id="accNavComponentDesktopOne">
   <ul class="nav__links">
   </ul>
</div>
<div class="hidden-xs hidden-sm js-secondaryNavCompany collapse"
   id="accNavComponentDesktopTwo">
   <ul class="nav__links js-nav__links">
   </ul>
</div>
<a id="skiptonavigation"></a>

</header>
</div>
</div>

<div class="yCmsContentSlot container-fluid">
</div><a id="skip-to-content"></a>
				<div id="body">
		<div id="homepage-container">
			<div class="homepage-banner">
				<ul>
					<div class="sub-category-container">
					<img title="Click-Buy-Fly-Marketplace-Banner" class="img" alt="Click-Buy-Fly-Marketplace-Banner"
					src="https://shop.boeingservices.com/shop/medias/Marketplace-Web-Banners-1920-x-600-V3.jpg?context=bWFzdGVyfHJvb3R8MTc5ODA3fGltYWdlL2pwZWd8aDc1L2hjNi84ODAyMTc2OTU4NDk0LmpwZ3w0NmY0Y2MyYmRlMmM1NGUyNDUxZGNjMjNkYjY2OTMyM2QyY2E1NGJlODg2M2RjMmZiZWJiZmI4NGQzNjY5N2U5">
					</div>
				</ul>

			</div>

				<div class="main-category">
					<div class="category-container">
						<div class="sub-category-container">
                           <a href="https://shop.boeingservices.com/shop/c/1HSP"> 
                                  <img alt="Hardware-category-image" src="https://shop.boeingservices.com/shop/medias/200700-Hardware-109px.png?context=bWFzdGVyfHJvb3R8MTQwODl8aW1hZ2UvcG5nfGg2YS9oY2YvODgwMjcxMzYwMDAzMC5wbmd8MjkxOTk3ZmY5OTVhZmE1Y2UxZGZlOTllNjM4NjU0Yjg0ZTQ2OGNmNjU5NDJjZmQ3ZTRkMjgzYzg3MDNkMjk3NQ"> <span> Hardware</span>
                           </a>
                           </div>
                     <div class="sub-category-container">
                           <a href="https://shop.boeingservices.com/shop/c/120"> 
                                  <img alt="Category 4_PilotSupplies_109x109.jpg" src="https://shop.boeingservices.com/shop/medias/Category-4-PilotSupplies-109x109.jpg?context=bWFzdGVyfHJvb3R8MjMyNDB8aW1hZ2UvanBlZ3xoMGUvaGVjLzg3OTY1NTMxNTA0OTQuanBnfGM1NzBhYTI5ZjI5YTk3YzJmYzczNTJhYWI1ZjA3NTg2OWNlM2RmN2VmNTBkZmY1NTQzYzZjYTg2ODdhMTliOWI"> <span> Pilot Supplies</span>
                           </a>
                           </div>
                     <div class="sub-category-container">
                           <a href="https://shop.boeingservices.com/shop/c/2SAT-3SEA?sort=name-asc&q=%3Aname-desc&show=Page#"> 
                                  <img alt="Sealants-Category-Boeing-Marketplace" src="https://shop.boeingservices.com/shop/medias/ChemicalsConsumables-Sealants-109px.png?context=bWFzdGVyfHJvb3R8MTExMjl8aW1hZ2UvcG5nfGhmNy9oMTMvODgwMjcxNDM4NjQ2Mi5wbmd8YTE5YzllMzRhNjQwOWQ2OGI4ZTAzMjU3MDliNmE3ZjE1MjQ0NTA5YmM2MWNiZTQ3OWI0NDFhMGQ3OTcyNjQ3Ng"> <span> Sealants</span>
                           </a>
                           </div>
                     <div class="sub-category-container">
                           <a href="https://shop.boeingservices.com/shop/c/110100130"> 
                                  <img alt="ebook.jpg" src="https://shop.boeingservices.com/shop/medias/ebook.jpg?context=bWFzdGVyfHJvb3R8MTU3NDJ8aW1hZ2UvanBlZ3xoMzkvaDgyLzg3OTY1NTMyODE1NjYuanBnfGMzOWUyMWY3ODQ2NGM0YWNhMTUyNDZjN2I5NDA1MmQzYjA5ZjkyOGI2OGUwOTY0NzUwZjAyNmE2ZmZjYWQ3MWQ"> <span> E-books</span>
                           </a>
                           </div>
                     <div class="sub-category-container">
                           <a href="https://shop.boeingservices.com/shop/c/2ONL-3OIL"> 
                                  <img alt="Oils-Lubricants-Category-Boeing-Marketplace" src="https://shop.boeingservices.com/shop/medias/ChemicalsConsumables-Lubricants-109px.png?context=bWFzdGVyfHJvb3R8MTM2OTF8aW1hZ2UvcG5nfGgwOC9oOTAvODgwMjcxNDQ1MTk5OC5wbmd8ZjY0MjViOTYyYTA2Mjg0YzQ0NjlkN2I4MDI4ZTk5NTg5MmJiNzk1NDJkY2VlMzI2Y2ZkZWM4YmRiODM3NWFkNA"> <span> Oils and Lubricants</span>
                           </a>
                           </div>
                     </div>
				</div>

				<div class="panel-recommeded">
					<div class="panel-body__homepage">
						<div class="content"><div><h3>Recommended</h3></div></div><div class="carousel__component">
			<div class="carousel__component--headline"></div>

			<div class="carousel__component--carousel js-owl-carousel js-owl-default">
						<div class="carousel__item">
								<a href="https://shop.boeingservices.com/shop/All-Products/Pilot-Supplies/Navigation-Equipment-Hardware/NavData-Hardware/Blank-NavData-Card-for-Garmin-400-500-WAAS-GPS/p/10537238">
									<div class="carousel__item--thumb">
										<img src="https://shop.boeingservices.com/images///products/10537238-443x443.jpg" alt="https://shop.boeingservices.com/images///products/10537238-443x443.jpg" title="https://shop.boeingservices.com/images///products/10537238-443x443.jpg" class="related-img"/>
			</div>
									<div class="carousel__item--name">Blank NavData Card for Garmin 400/500 WAAS GPS</div>
									<div class="carousel__item--price">$210.00</div>
								</a>
							</div>
							
						<div class="carousel__item">
								<a href="https://shop.boeingservices.com/shop/All-Products/Training-and-Courseware/Instrument-Commercial/Instrument-Commercial-E-Books/Instrument-Commercial-E-book/p/10277281">
									<div class="carousel__item--thumb">
										<img src="https://shop.boeingservices.com/images///products/10277281-443x443.jpg" alt="https://shop.boeingservices.com/images///products/10277281-443x443.jpg" title="https://shop.boeingservices.com/images///products/10277281-443x443.jpg" class="related-img"/>
			</div>
									<div class="carousel__item--name">Instrument/Commercial E-book</div>
									<div class="carousel__item--price">$79.98</div>
								</a>
							</div>
							
						<div class="carousel__item">
								<a href="https://shop.boeingservices.com/shop/All-Products/Pilot-Supplies/Navigation-Equipment-Hardware/NavData-Hardware/Skybound-G2-USB-Adapter-%2B-Blank-NavData-Card-for-Garmin-400-500-WAAS-GPS-Bundle/p/10537239">
									<div class="carousel__item--thumb">
										<img src="https://shop.boeingservices.com/images///products/10537239-443x443.jpg" alt="https://shop.boeingservices.com/images///products/10537239-443x443.jpg" title="https://shop.boeingservices.com/images///products/10537239-443x443.jpg" class="related-img"/>
			</div>
									<div class="carousel__item--name">Skybound G2 USB Adapter + Blank NavData Card for Garmin 400/500 WAAS GPS Bundle</div>
									<div class="carousel__item--price">$255.00</div>
								</a>
							</div>
							
						<div class="carousel__item">
								<a href="https://shop.boeingservices.com/shop/c/3M%E2%84%A2-Adhesion-Promoter-AC-160/p/11092616">
									<div class="carousel__item--thumb">
										<img src="https://shop.boeingservices.com/images//products/11092616-443x443.jpg" alt="https://shop.boeingservices.com/images//products/11092616-443x443.jpg" title="https://shop.boeingservices.com/images//products/11092616-443x443.jpg" class="related-img"/>
			</div>
									<div class="carousel__item--name">3M™ Adhesion Promoter AC-160</div>
									<div class="carousel__item--price">$28.91</div>
								</a>
							</div>
							
						<div class="carousel__item">
								<a href="https://shop.boeingservices.com/shop/All-Products/Training-and-Courseware/Private-Pilot/Private-Pilot-Courseware-%26-Books/Private-Pilot-FAA-Practical-Test-Study-Guide/p/10001390">
									<div class="carousel__item--thumb">
										<img src="https://shop.boeingservices.com/images///products/10001390-443x443.jpg" alt="https://shop.boeingservices.com/images///products/10001390-443x443.jpg" title="https://shop.boeingservices.com/images///products/10001390-443x443.jpg" class="related-img"/>
			</div>
									<div class="carousel__item--name">Private Pilot FAA Practical Test Study Guide</div>
									<div class="carousel__item--price">$23.96</div>
								</a>
							</div>
							
						<div class="carousel__item">
								<a href="https://shop.boeingservices.com/shop/All-Products/Pilot-Supplies/Navigation-Equipment-Hardware/Plotters/Student-CSG-Computer-%28E6B%29/p/10001316">
									<div class="carousel__item--thumb">
										<img src="https://shop.boeingservices.com/images///products/10001316-443x443.jpg" alt="https://shop.boeingservices.com/images///products/10001316-443x443.jpg" title="https://shop.boeingservices.com/images///products/10001316-443x443.jpg" class="related-img"/>
			</div>
									<div class="carousel__item--name">Student CSG Computer (E6B)</div>
									<div class="carousel__item--price">$14.48</div>
								</a>
							</div>
							
						</div>
				</div>
		
	</div>
				</div>

				<div class="popular-products">
					<div class="popular-body">
						<div class="content"><div><h3>Popular Products</h3></div></div><div class="carousel__component">
			<div class="carousel__component--headline"></div>

			<div class="carousel__component--carousel js-owl-carousel js-owl-default">
						<div class="carousel__item">
								<a href="https://shop.boeingservices.com/shop/All-Products/Pilot-Supplies/Binders-%26-Accessories/Pilot-Bags/Aviator-Bag/p/10001854">
									<div class="carousel__item--thumb">
										<img src="https://shop.boeingservices.com/images///products/10001854-443x443.jpg" alt="https://shop.boeingservices.com/images///products/10001854-443x443.jpg" title="https://shop.boeingservices.com/images///products/10001854-443x443.jpg" class="related-img"/>
			</div>
									<div class="carousel__item--name">Aviator Bag</div>
									<div class="carousel__item--price">$81.96</div>
								</a>
							</div>
							
						<div class="carousel__item">
								<a href="https://shop.boeingservices.com/shop/All-Products/Pilot-Supplies/Binders-%26-Accessories/Airway-Manual-Binders/Premium-Leather-Binder---2-inch/p/10001084">
									<div class="carousel__item--thumb">
										<img src="https://shop.boeingservices.com/images///products/10001084-443x443.jpg" alt="https://shop.boeingservices.com/images///products/10001084-443x443.jpg" title="https://shop.boeingservices.com/images///products/10001084-443x443.jpg" class="related-img"/>
			</div>
									<div class="carousel__item--name">Premium Leather Binder - 2 inch</div>
									<div class="carousel__item--price">$102.00</div>
								</a>
							</div>
							
						<div class="carousel__item">
								<a href="https://shop.boeingservices.com/shop/All-Products/Pilot-Supplies/Binders-%26-Accessories/Logbooks-and-Navigation-Logs/Pilot-Logbook/p/10001315">
									<div class="carousel__item--thumb">
										<img src="https://shop.boeingservices.com/images///products/10001315-443x443.jpg" alt="https://shop.boeingservices.com/images///products/10001315-443x443.jpg" title="https://shop.boeingservices.com/images///products/10001315-443x443.jpg" class="related-img"/>
			</div>
									<div class="carousel__item--name">Pilot Logbook</div>
									<div class="carousel__item--price">$13.96</div>
								</a>
							</div>
							
						<div class="carousel__item">
								<a href="https://shop.boeingservices.com/shop/All-Products/Pilot-Supplies/Navigation-Equipment-Hardware/Aviation-Computers/CR-3-Circular%0AComputer-6%E2%80%9D-diameter/p/10001294">
									<div class="carousel__item--thumb">
										<img src="https://shop.boeingservices.com/images///products/10001294-443x443.jpg" alt="https://shop.boeingservices.com/images///products/10001294-443x443.jpg" title="https://shop.boeingservices.com/images///products/10001294-443x443.jpg" class="related-img"/>
			</div>
									<div class="carousel__item--name">CR-3 Circular
Computer 6” diameter</div>
									<div class="carousel__item--price">$28.96</div>
								</a>
							</div>
							
						</div>
				</div>
		
	</div>
				</div>

				<div class="menu-subcategory">
					<h3>
						Shop category by</h3>
					<div class="category-container">
						<div class="sub-category-container">
                           <a href="https://shop.boeingservices.com/shop/c/110100"> 
                                  <img alt="private-pilot-training.jpg" src="https://shop.boeingservices.com/shop/medias/private-pilot-training.jpg?context=bWFzdGVyfHJvb3R8NjQ0NnxpbWFnZS9qcGVnfGg0OC9oYTAvODc5NjY4NTk1OTE5OC5qcGd8ZTI0ODcxYmFkNTVkMGY0ZDI0Nzk4NmMyYTk3MzdhNzI0Y2I5Mjg3ODg0OGJkYTg1MDE1ZWU1YzRkMTY4YzRmZQ"> <span> Private Pilot Training</span>
                           </a>
                           </div>
                     <div class="sub-category-container">
                           <a href="https://shop.boeingservices.com/shop/c/120100130"> 
                                  <img alt="ipad-covers.jpg" src="https://shop.boeingservices.com/shop/medias/ipad-covers.jpg?context=bWFzdGVyfHJvb3R8NDc2MXxpbWFnZS9qcGVnfGg0ZS9oNTMvODc5NjY4NjA5MDI3MC5qcGd8ZWMwNDNlNDUwMGUyOWZhMWIzNzE1ZDI3YzIwNDY2OGUwNjM5ODJmZTg0YTU2NGFmZDMxZTZjYmE3YTA1NmJlNw"> <span> iPad Covers</span>
                           </a>
                           </div>
                     <div class="sub-category-container">
                           <a href="https://shop.boeingservices.com/shop/c/120110110"> 
                                  <img alt="navdata-hardware.jpg" src="https://shop.boeingservices.com/shop/medias/navdata-hardware.jpg?context=bWFzdGVyfHJvb3R8NTk2MXxpbWFnZS9qcGVnfGgxOS9oMGMvODc5NjY4NjE1NTgwNi5qcGd8OGJjN2Q4YmYwNThhYWE3ZWE3YjYxNjkxNjNjZGZiN2NkZDg1OTMwMzM3ODdlYmQ4ZTM2YTc4ZGVjYzZlMTVhNQ"> <span> NavData Hardware</span>
                           </a>
                           </div>
                     </div>
				</div>

				<div class="family-brands">
					<h3>
						Boeing Family of Brands</h3>
					<div class="family-brands-body">
						<div class="category-container">
							<div class="sub-category-container">
					<img title="Jeppesen logo" class="img" alt="Jeppesen logo"
					src="https://shop.boeingservices.com/shop/medias/jeppesen-276x103.png?context=bWFzdGVyfHJvb3R8MzIxNnxpbWFnZS9wbmd8aDgxL2g3MC84Nzk3OTU5NTIwMjg2LnBuZ3w0NzdhZTJhYzgxY2MyOGI2YzU1ZGE0YmMxZWI2ZGM2OTYyNjUzODE0ZjQ1ZmMyMjM2YWQ4NmU3YTlhNmZiOTU0">
					</div>
				<div class="sub-category-container">
					<img title="Aviall logo" class="img" alt="Aviall logo"
					src="https://shop.boeingservices.com/shop/medias/aviall-174x103.png?context=bWFzdGVyfHJvb3R8MzQzMHxpbWFnZS9wbmd8aGZlL2hlZC84Nzk3OTU4Nzk5MzkwLnBuZ3xlNWI1MDZkOWQzNzU2NGEyNjJkZTRjNDg1YzhhYmQ0MGRhOTYwYTg2NDYyYzAxN2U3OWNjYTZmNGI3NDVkOThl">
					</div>
				<div class="sub-category-container">
					<img title="AerData" class="img" alt="AerData"
					src="https://shop.boeingservices.com/shop/medias/?context=bWFzdGVyfGltYWdlc3w3MzE1fGltYWdlL3BuZ3xpbWFnZXMvaDZkL2gyNS84Nzk2MTE3NjMxMDA2LnBuZ3wyOWQ4NDBhYjgxZDViNjMxN2Y0NDYxZmMxNTc3NWZhOTQxOTBiNmQzYmVhNTM4N2FlMmJhNzY2MGFiZTVlMWZm">
					</div>
				<div class="sub-category-container">
					<img title="Ils" class="img" alt="Ils"
					src="https://shop.boeingservices.com/shop/medias/?context=bWFzdGVyfGltYWdlc3w3MjAyfGltYWdlL3BuZ3xpbWFnZXMvaGFmL2hhMy84Nzk2MTE3NzI5MzEwLnBuZ3w2ODcxOWY1YjdlZDAzNTk0NDUxN2Y2NWIwNGI0YWVjMjQzZWQ0MGQ1NzU4NDc0ZDBlNDk1YzQ2MjUzYWMyZGI2">
					</div>
				</div>

					</div>
				</div>
		</div>
	</div>
<footer id="page-footer-new">
    <div class="row footer-nav">
		<div class="col-xs-12 col-sm-3">
						<div class="accordion">
								<h4 class="panel-title">Help &amp; Instructions<i class="material-icons visible-sm visible-md visible-lg">arrow_drop_down</i></h4>
								<ul class="list-group">
								<li class="yCmsComponent list-group-item">
<a href="https://shop.boeingservices.com/shop/faq" title="Store FAQ" target="_blank" rel="noopener noreferrer">Store FAQ</a></li><li class="yCmsComponent list-group-item">
<a href="https://shop.boeingservices.com/shop/shippingrates" title="Shipping Rates &amp; Methods" target="_blank" rel="noopener noreferrer">Shipping Rates &amp; Methods</a></li><li class="yCmsComponent list-group-item">
<a href="https://shop.boeingservices.com/shop/contactUs" title="Contact Us" target="_blank" rel="noopener noreferrer">Contact Us</a></li><li class="yCmsComponent list-group-item">
<a href="https://shop.boeingservices.com/shop/returnandcancellation" title="Returns and Cancellations Policy" target="_blank" rel="noopener noreferrer">Returns and Cancellations Policy</a></li></ul>
						</div>
					</div>
				<div class="col-xs-12 col-sm-3">
						<div class="accordion">
								<h4 class="panel-title">Your Order<i class="material-icons visible-sm visible-md visible-lg">arrow_drop_down</i></h4>
								<ul class="list-group">
								<li class="yCmsComponent list-group-item">
<a href="https://shop.boeingservices.com/shop/payinvoice" title="Pay Your Invoice" target="_blank" rel="noopener noreferrer">Pay Your Invoice</a></li><li class="yCmsComponent list-group-item">
<a href="https://ww2.jeppesen.com/wp-content/uploads/2019/03/2019-AMER-Training_Supplies-Catalog-005.pdf" title="Paper Catalog - Americas" target="_blank" rel="noopener noreferrer">Paper Catalog - Americas</a></li><li class="yCmsComponent list-group-item">
<a href="http://ww1.jeppesen.com/documents/aviation/pdfs/jeppesen-catalog-emea.pdf" title="Paper Catalog – EMEA" target="_blank" rel="noopener noreferrer">Paper Catalog – EMEA</a></li></ul>
						</div>
					</div>
				</div>
<script>
	(function() {
		var w = window;
		var d = document;
		if (w.Velaro) {
			return;
		}
		var v = function() {
			return v.c(arguments);
		};
		v.q = [];
		v.c = function(args) {
			v.q.push(args);
		};
		w.Velaro = v;
		v.endpoints = {
			mainApi: 'https://api-main-us-east.velaro.com/',
			cdn: 'https://eastprodcdn.azureedge.net/',
		};
		w.addEventListener('load', function() {
			var s = d.createElement('script');
			s.type = 'text/javascript';
			s.async = true;
			s.src = v.endpoints.cdn + 'widgets/shim';
			var x = d.getElementsByTagName('script')[0];
			x.parentNode.insertBefore(s, x);
		});

		Velaro('boot', {
			siteId: 20894,
			groupId: 0,
			// customVars are optional.
			customVars: {
				exampleKey1: 'exampleValue1',
				exampleKey2: 'exampleValue2',
			},
		});
	})();
</script><div class="content"><div class="row">
<div class="footer-content">
<p>*The Privacy and Cookie Statement for The Boeing Company and its family of brands has changed, effective May 22, 2019, to allow for a more unified customer experience. You can review the updated Statement <a href="http://www.boeing.com/privacy-and-cookie-policy.page">here</a>.</p>
</div>
</div>
</div><div class="footer-brands">
        <div class="row">
          <div class="footer-brands-header">
              <h4>Visit Our Brands</h4>
          </div>
          <div class="footer-brands-container">
            <ul class="footer-brand-list">
            <li class="footer-brand"><a><div class="sub-category-container">
					<img title="Aviall" class="img" alt="Aviall"
					src="https://shop.boeingservices.com/shop/medias/?context=bWFzdGVyfGltYWdlc3w5NTI3fGltYWdlL3BuZ3xpbWFnZXMvaDBlL2hjZC84ODAzMjIwNjE5Mjk0LnBuZ3w3NjY1NzQxOWFlOGQyNmZhZWUxMmRjOWJiN2M1ODI5YzUzNWZiNjhmNmJkOWViZWRkNDA5NTAyNjFmMTI4ZDYw">
					</div>
				</a></li>
			<li class="footer-brand"><a><div class="sub-category-container">
					<img title="Jeppesen" class="img" alt="Jeppesen"
					src="https://shop.boeingservices.com/shop/medias/?context=bWFzdGVyfGltYWdlc3wxMTMxN3xpbWFnZS9wbmd8aW1hZ2VzL2g0YS9oYjcvODgwMzIyMDY1MjA2Mi5wbmd8NTgwZDNiNzdjNTc2ZTE0OTRlYTNkYjcxZjBjNDg1YzI3MmZmZjkzNmMzN2I2NzljNzgzNWI5OWFiNjQxNjkxNg">
					</div>
				</a></li>
			<li class="footer-brand"><a><div class="sub-category-container">
					<img title="Boeing" class="img" alt="Boeing"
					src="https://shop.boeingservices.com/shop/medias/?context=bWFzdGVyfGltYWdlc3w5MTQ1fGltYWdlL3BuZ3xpbWFnZXMvaDNjL2g1YS84ODAzMjIwNjg0ODMwLnBuZ3xjNzBiOGVmMjVkNjg3ZWMwYzY5YzZkMGYxOTc4MGNkMmYxZDE0NmE4NzU3OTYwY2NiODE0ZTYzODk0YTdhZWUx">
					</div>
				</a></li>
			<li class="footer-brand"><a><div class="sub-category-container">
					<img title="ForeFlight" class="img" alt="ForeFlight"
					src="https://shop.boeingservices.com/shop/medias/?context=bWFzdGVyfGltYWdlc3wxNTQyNXxpbWFnZS9wbmd8aW1hZ2VzL2hkNS9oYjkvODgwMzIyMDcxNzU5OC5wbmd8ZGJjN2E2Mzg0ZWMxYWRmY2E0ZDQxNzdkY2NmODI5NjEzNDU4MjZkZTQ2YjExNDQzNDk4MjcwMGQ5YTI5OTJmZg">
					</div>
				</a></li>
			</ul>
          </div>
   </div>
  </div> 
<div class="sub-footer">
		<div class="row">
			<div id="top" class="col-xs-12 col-sm-8 revised">
						<span class="yCmsComponent footer-terms">
<a href="https://shop.boeingservices.com/shop/termsAndConditions" title="Terms And Conditions Of Purchase" target="_blank" rel="noopener noreferrer">Terms And Conditions Of Purchase</a></span><span class="yCmsComponent footer-terms">
<a href="https://shop.boeingservices.com/shop/site-map" title="Site Map">Site Map</a></span><span class="yCmsComponent footer-terms">
<a href="https://shop.boeingservices.com/shop/termsOfUse" title="Terms of Use">Terms of Use</a></span><span class="yCmsComponent footer-terms">
<a href="https://www.boeing.com/privacy-and-cookie-policy.page" title="Privacy Statement" target="_blank" rel="noopener noreferrer">Privacy Statement</a></span><span class="yCmsComponent footer-terms">
<a href="https://shop.boeingservices.com/shop/contactUs" title="Contact Us" target="_blank" rel="noopener noreferrer">Contact Us</a></span><span class="yCmsComponent footer-terms">
<a href="#" title="Copyright&#64;2019 Company Name. All Right Reserved">Copyright&#64;2019 Company Name. All Right Reserved</a></span></div>
			  <div class="content"><div class="col-xs-12 col-sm-4" id="bottom">
<div class="footer-social-icons"><a class="facebook-icon" href="http://www.facebook.com/Boeing" target="_blank"><svg aria-labelledby="fbTitle" role="img" viewbox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
<title id="fbTitle"></title>
<path d="m29.76 50.32h6.75v-16.32h4.49l.59-5.63h-5.08v-2.81c0-1.47.14-2.25 2.24-2.25h2.81v-5.63h-4.5c-5.4 0-7.31 2.73-7.31 7.32v3.37h-3.35v5.63h3.36zm4.24 13.68a30 30 0 1 1 30-30 30 30 0 0 1 -30 30z" fill="#fff" fill-rule="evenodd" transform="translate(-4 -4)"></path> </svg></a><a class="linkedin-icon" href="http://www.linkedin.com/company/boeing" target="_blank"> <svg id="Layer_1" style="enable-background:new 0 0 60 60;" version="1.1" viewbox="0 0 60 60" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">
<style type="text/css">.st0{fill:#FFFFFF;}
</style>
<title id="instagramTitle"></title>
<path class="st0" d="M30,0C13.4,0,0,13.4,0,30s13.4,30,30,30c16.6,0,30-13.4,30-30S46.6,0,30,0z M22.1,44.8h-7.2V23.2h7.2V44.8z  M18.5,20.3L18.5,20.3c-2.5,0-4-1.7-4-3.7c0-2.1,1.6-3.7,4.1-3.7c2.5,0,4,1.6,4,3.7C22.5,18.6,21,20.3,18.5,20.3z M47.9,44.8h-7.2  V33.2c0-2.9-1-4.9-3.6-4.9c-2,0-3.2,1.3-3.7,2.6c-0.2,0.5-0.2,1.1-0.2,1.7v12H26c0,0,0.1-19.5,0-21.6h7.2v3.1c1-1.5,2.7-3.6,6.5-3.6  c4.7,0,8.3,3.1,8.3,9.7V44.8z"></path> </svg></a><a class="youtube-icon" href="http://www.youtube.com/user/Boeing" target="_blank"> <svg aria-labelledby="ytTitle" role="img" viewbox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
<title id="ytTitle"></title>
<path d="m43.53 41.34a.7.7 0 0 0 -.6.24 1.37 1.37 0 0 0 -.18.8v.9h1.54v-.9a1.29 1.29 0 0 0 -.19-.8.65.65 0 0 0 -.57-.24zm-6 0a.64.64 0 0 1 .54.23 1 1 0 0 1 .19.68v4.55a1 1 0 0 1 -.16.62.56.56 0 0 1 -.47.18 1.06 1.06 0 0 1 -.42-.09 1.52 1.52 0 0 1 -.41-.31v-5.54a1.41 1.41 0 0 1 .36-.27.8.8 0 0 1 .35-.08zm5.24 3.35v1.67a2 2 0 0 0 .17 1 .63.63 0 0 0 .59.27.71.71 0 0 0 .61-.23 1.94 1.94 0 0 0 .17-1v-.4h1.8v.45a2.88 2.88 0 0 1 -.66 2.06 2.58 2.58 0 0 1 -2 .69 2.39 2.39 0 0 1 -1.85-.73 2.91 2.91 0 0 1 -.67-2v-4a2.52 2.52 0 0 1 .74-1.88 2.59 2.59 0 0 1 1.91-.73 2.42 2.42 0 0 1 1.84.67 2.71 2.71 0 0 1 .65 1.94v2.26zm-3.13 3.83a1.43 1.43 0 0 1 -1.18.51 2.08 2.08 0 0 1 -.92-.2 2.25 2.25 0 0 1 -.74-.6v.68h-1.8v-12h1.77v3.88a2.66 2.66 0 0 1 .75-.62 1.68 1.68 0 0 1 .8-.21 1.52 1.52 0 0 1 1.27.56 2.71 2.71 0 0 1 .41 1.6v4.93a2.17 2.17 0 0 1 -.38 1.44zm-7.64.36v-1a3.92 3.92 0 0 1 -1 .82 2.12 2.12 0 0 1 -1 .28 1.1 1.1 0 0 1 -.91-.39 2 2 0 0 1 -.3-1.19v-7.4h1.74v6.81a.78.78 0 0 0 .11.46.4.4 0 0 0 .36.14.93.93 0 0 0 .48-.19 2.41 2.41 0 0 0 .55-.47v-6.75h1.67v8.88zm-6-10.28v10.28h-2v-10.28h-2v-1.75h6v1.75zm8-5.6s12.08 0 13.52 1.45 1.48 8.49 1.48 8.55 0 7.12-1.45 8.56-13.55 1.44-13.55 1.44-12.08 0-13.51-1.46-1.49-8.54-1.49-8.54 0-7.12 1.44-8.55 13.56-1.45 13.56-1.45zm9.53-3.73h-2v-1.1a3.78 3.78 0 0 1 -1.13.91 2.41 2.41 0 0 1 -1.14.32 1.23 1.23 0 0 1 -1-.44 2.09 2.09 0 0 1 -.35-1.31v-8.17h2v7.52a.81.81 0 0 0 .13.5.47.47 0 0 0 .4.16 1.12 1.12 0 0 0 .55-.21 2.44 2.44 0 0 0 .6-.52v-7.45h2v9.77zm-10.68-1.68a.82.82 0 0 0 .6.22.89.89 0 0 0 .63-.23.79.79 0 0 0 .24-.61v-5.33a.61.61 0 0 0 -.25-.52 1 1 0 0 0 -.62-.2.88.88 0 0 0 -.59.2.66.66 0 0 0 -.22.52v5.36a.88.88 0 0 0 .21.59zm-1.44-7.69a3.18 3.18 0 0 1 2.13-.67 2.88 2.88 0 0 1 2 .71 2.35 2.35 0 0 1 .78 1.83v5.05a2.6 2.6 0 0 1 -.76 2 3 3 0 0 1 -2.11.71 2.85 2.85 0 0 1 -2.06-.73 2.63 2.63 0 0 1 -.78-2v-5.09a2.25 2.25 0 0 1 .8-1.81zm-6.15-3.9h-2.26l2.64 8v5.26h2.21v-5.5l2.6-7.76h-2.25l-1.36 5.3h-.14zm8.74 48a30 30 0 1 1 30-30 30 30 0 0 1 -30 30z" fill="#fff" fill-rule="evenodd" transform="translate(-4 -4)"></path> </svg></a><a class="twitter-icon" href="http://www.twitter.com/Boeing" target="_blank"> <svg aria-labelledby="twitterTitle" role="img" viewbox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
<title id="twitterTitle"></title>
<path d="m38.17 22.28a6.07 6.07 0 0 0 -4.09 6.1l.06 1-1-.12a17 17 0 0 1 -10-4.92l-1.4-1.34-.36 1a6.13 6.13 0 0 0 1.3 6.27c.84.89.65 1-.79.49-.51-.17-.95-.3-1-.23a7.72 7.72 0 0 0 .76 2.83 6.76 6.76 0 0 0 2.87 2.72l1 .48h-1.21c-1.17 0-1.22 0-1.09.47a6.34 6.34 0 0 0 3.92 3.48l1.3.44-1.14.68a11.88 11.88 0 0 1 -5.61 1.57 6.51 6.51 0 0 0 -1.69.2 15.82 15.82 0 0 0 4 1.87 17.68 17.68 0 0 0 13.79-1.57 18.39 18.39 0 0 0 7-8.22 22 22 0 0 0 1.42-6.35c0-1 .07-1.11 1.24-2.27a14.93 14.93 0 0 0 1.47-1.63c.21-.41.18-.41-.88-.05-1.78.64-2 .56-1.16-.4a6.19 6.19 0 0 0 1.43-2.26c0-.07-.32 0-.67.23a12 12 0 0 1 -1.85.72l-1.13.36-1-.7a8.35 8.35 0 0 0 -1.79-.93 7.08 7.08 0 0 0 -3.7.08zm-4.17 41.72a30 30 0 1 1 30-30 30 30 0 0 1 -30 30z" fill="#fff" fill-rule="evenodd" transform="translate(-4 -4)"></path> </svg></a></div>
</div>
</div></div>
	</div>
</footer>

</main>
	<form name="accessiblityForm">
		<input type="hidden" id="accesibility_refreshScreenReaderBufferField" name="accesibility_refreshScreenReaderBufferField" value=""/>
	</form>
	<div id="ariaStatusMsg" class="skip" role="status" aria-relevant="text" aria-live="polite"></div>

	<script type="text/javascript">
		/*<![CDATA[*/
		
		var ACC = { config: {} };
			ACC.config.contextPath = '\/shop';
			ACC.config.encodedContextPath = '\/shop';
			ACC.config.commonResourcePath = '\/shop\/_ui\/responsive\/common';
			ACC.config.themeResourcePath = '\/shop\/_ui\/responsive\/theme-alpha';
			ACC.config.siteResourcePath = '\/shop\/_ui\/responsive\/site-mybgs';
			ACC.config.rootPath = '\/shop\/_ui\/responsive';
			ACC.config.CSRFToken = '3c07ab80-8a6b-46ac-8632-aa4fa820602f';
			ACC.pwdStrengthVeryWeak = 'Very weak';
			ACC.pwdStrengthWeak = 'Weak';
			ACC.pwdStrengthMedium = 'Medium';
			ACC.pwdStrengthStrong = 'Strong';
			ACC.pwdStrengthVeryStrong = 'Very strong';
			ACC.pwdStrengthUnsafePwd = 'password.strength.unsafepwd';
			ACC.pwdStrengthTooShortPwd = 'Too short';
			ACC.pwdStrengthMinCharText = 'Minimum length is % characters';
			ACC.accessibilityLoading = 'Loading... Please wait...';
			ACC.accessibilityStoresLoaded = 'Stores loaded';
			ACC.config.googleApiKey='';
			ACC.config.googleApiVersion='3.7';

			
			ACC.autocompleteUrl = '\/shop\/search\/autocompleteSecure';

			
			ACC.config.loginUrl = '\/shop\/login';

			
			ACC.config.authenticationStatusUrl = '\/shop\/authentication\/status';

			
		/*]]>*/
	</script>
	<script type="text/javascript">
	/*<![CDATA[*/
	ACC.addons = {};	//JS namespace for addons properties

	
		ACC.addons['assistedservicepromotionaddon'] = [];
		
		ACC.addons['adaptivesearchsamplesaddon'] = [];
		
		ACC.addons['textfieldconfiguratortemplateaddon'] = [];
		
		ACC.addons['smarteditaddon'] = [];
		
		ACC.addons['orderselfserviceaddon'] = [];
		
		ACC.addons['personalizationsearchsamplesaddon'] = [];
		
		ACC.addons['customerticketingaddon'] = [];
		
		ACC.addons['b2bacceleratoraddon'] = [];
		
		ACC.addons['assistedservicestorefront'] = [];
		
				ACC.addons['assistedservicestorefront']['asm.timer.min'] = 'min';
			
		ACC.addons['commerceorgaddon'] = [];
		
	/*]]>*/
</script>
<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/shared/js/generatedVariables.js"></script>
	<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/main.js?v=462"></script>
	    
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/jquery-3.2.1.min.js?v=462"></script>
		
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/enquire.min.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/Imager.min.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/purify.min.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/jquery.blockUI-2.66.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/jquery.colorbox-min.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/jquery.form.min.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/jquery.hoverIntent.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/jquery.pstrength.custom-1.2.0.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/jquery.syncheight.custom.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/jquery.tabs.custom.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/jquery-ui-1.12.1.min.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/jquery.zoom.custom.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/owl.carousel.custom.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/jquery.tmpl-1.0.0pre.min.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/jquery.currencies.min.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/jquery.waitforimages.min.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/jquery.slideviewer.custom.1.2.js?v=462"></script>
		
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.address.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.autocomplete.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.carousel.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.cart.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.cartitem.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.checkout.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.checkoutsteps.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.cms.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.colorbox.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.common.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.forgottenpassword.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.global.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.hopdebug.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.imagegallery.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.langcurrencyselector.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.minicart.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.navigation.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.order.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.paginationsort.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.payment.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.paymentDetails.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.pickupinstore.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.product.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.productDetail.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.quickview.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.ratingstars.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.refinements.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.sanitizer.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.silentorderpost.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.tabs.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.termsandconditions.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.track.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.storefinder.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.futurelink.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.productorderform.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.savedcarts.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.multidgrid.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.quickorder.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.quote.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.consent.js?v=462"></script>
			<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.cookienotification.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.closeaccount.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.register.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.bgsstore.js?v=462"></script>

		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/acc.csv-import.js?v=462"></script>

		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/responsive/common/js/_autoload.js?v=462"></script>
		
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/textfieldconfiguratortemplateaddon/responsive/common/js/textfieldconfiguratortemplateaddon.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/assistedservicepromotionaddon/responsive/common/js/assistedservicepromotionaddon.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/assistedservicestorefront/responsive/common/js/assistedservicestorefront.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/assistedservicestorefront/responsive/common/js/jquery.tablesorter.pager.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/assistedservicestorefront/responsive/common/js/jquery.tablesorter.min.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/assistedservicestorefront/responsive/common/js/Chart.min.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/assistedservicestorefront/responsive/common/js/asm.storefinder.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/smarteditaddon/shared/common/js/webApplicationInjector.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/smarteditaddon/shared/common/js/reprocessPage.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/smarteditaddon/shared/common/js/adjustComponentRenderingToSE.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/smarteditaddon/responsive/common/js/smarteditaddon.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/customerticketingaddon/responsive/common/js/customerticketingaddon.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/orderselfserviceaddon/responsive/common/js/orderselfserviceaddon.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/orderselfserviceaddon/responsive/common/js/cms/cancelorderaction.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/orderselfserviceaddon/responsive/common/js/cms/returnorderaction.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/commerceorgaddon/responsive/common/js/commerceorgnavigation.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/commerceorgaddon/responsive/common/js/commerceorgaddon.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/commerceorgaddon/responsive/common/js/jquery.validate.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/b2bacceleratoraddon/responsive/common/js/acc.checkoutsummary.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/b2bacceleratoraddon/responsive/common/js/acc.paymentType.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/b2bacceleratoraddon/responsive/common/js/acc.replenishment.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/b2bacceleratoraddon/responsive/common/js/acc.orderform.js?v=462"></script>
		<script type="text/javascript" src="https://shop.boeingservices.com/shop/_ui/addons/b2bacceleratoraddon/responsive/common/js/acc.approval.js?v=462"></script>
		</body>

</html>

