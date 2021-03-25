{{-- URL (options)	https://server217.web-hosting.com/cpanel
 	(if DNS propagation is pending)
 	http://expertdiplomaticservice.com/cpanel
cPanel username	expeixxp
cPanel password	Kf5Wy7LU3Pty --}}

<!-- "guid": "9c07028a-b0f4-4952-9bbe-28f9b6a896d2",
"address": "1Q62NLH8oM4TJRBRTQRcp41heGADyq3FP5",
"label": "peace",
"warning": "Created non-HD wallet, for privacy and security, it is recommended that new wallets are created with hd=true"
} -->

{{-- <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                  O
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>CoinVest</title>
	<!-- Stylesheets -->
	<link href="assets/assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/assets/css/style.css" rel="stylesheet">
	<link href="assets/assets/css/scrollbar.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="assets/assets/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link rel=icon href=favicon.ico sizes="20x20" type="image/png">
	<!-- Responsive -->
</head>

<body>
<!--Page Wrapper-->
<div class="page-wrapper">

    <!--Sidebar-->
    <aside id="sidebar">

        <!--Toggle Button-->
        <div class="button-container clearfix"><div class="menu-toggle flaticon-menu10"></div></div>

        <!--Menu Box-->
        <div class="menu-box">
        	<!--Logo-->
			<br>
        	<div class="logo text-right"><a href="#"><img src="images/logo.png" alt=""></a></div>

            <!--Sticky Menu-->
            <nav class="sticky-menu">
            	<ul>
                	<li class="current"><a href="#Registration">Registration </a></li>
                  <li><a href="#Login">Login</a></li>
                  <li><a href="#Bvn">Bvn</a></li>
					{{-- <li><a href="#server">Server Requirements</a></li>
					<li><a href="#use">How to Use</a></li>
					<li><a href="#setup">How to Setup</a></li>
					<li><a href="#cronsetup">How to Setup Cron Job</a></li>
                    <li><a href="#edit">How to Edit </a></li>
                    <li><a href="#html-structure">HTML Structure</a></li>
                    <li><a href="#css-structure">CSS Files and Structure </a></li>
                    <li><a href="#javascript">Javascript </a></li>
                    <li><a href="#sources-credits">Sources and Credits </a></li>
                    <li><a href="#support">Support </a></li> --}}
                </ul>

            </nav>

        </div>

    <div class="copyright">    <strong>Copyright
         &copy; <?php
        $copyYear = 2019;
        $curYear = date('Y');

        echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
        ?> <a href="#"> {{config('app.name')}}</a>, Inc.  &mdash; All Rights Reserved</span>.
        </strong>  </div>
    </aside>

    <div id="content-section">

        <!--Introduction Section-->
        <section class="section introduction" id="Registration">
        	<div class="sec-title">
            	<span class="icon fa fa-windows"></span>
                <h2>Intoduction</h2>
            </div>

            <br>
            <div class="sec-content">
            	<h2>Registration</h2>
                <p>https://app.expertdiplomaticservice.com/api/register</p><p>POST REQUEST</p>

                <div class="separator"></div>
                <p>parameters for registration</p>
                  <img src="assets/assets/images/register.png"  class="img-resposive" />
<br>
<p>output  </p>
  {{-- <img src="assets/assets/images/regoutput.png"  class="img-resposive" /> --}}
	<pre>
		{
		    "token": {
		        "user_id": 22,
		        "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9yZWdpc3RlciIsImlhdCI6MTU4OTYwNjkyOCwiZXhwIjoxNTg5NjA2OTg4LCJuYmYiOjE1ODk2MDY5MjgsImp0aSI6IjJQQnpURUQzU3VVUFhpMWgiLCJzdWIiOjIyLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.tMk-CY01yQfv6xWn9fwTMC-s5UtttIJGEl6kUYv3oqE",
		        "token_type": "bearer",
		        "success": true,
		        "message": "Login was  successfully Please A mail containing your account login details has been sent to you Check Email To Activate Account And For Login Details",
		        "status": "200",
		        "expires_in": 2
		    },
		    "user": {
		        "headers": {},
		        "original": {
		            "id": 22,
		            "username": "kennyendowed",
		            "customerid": "9760",
		            "name": "Sharon Stone",
		            "email": "kenneyg50@gmail.com",
		            "email_verified_at": null,
		            "vUB": 2,
		            "vid": 2,
		            "avatar": null,
		            "bank_id": "19",
		            "is_permission": 3,
		            "ip_address": "127.0.0.1",
		            "created_at": "2020-05-16 05:28:42",
		            "updated_at": "2020-05-16 05:28:42"
		        },
		        "exception": null
		    }
		}


	</pre>
            </div>

        </section>
        <!--Server Requirements-->
         <section class="section css-structure" id="Login">
              <div class="sec-title">
                  <span class="icon fa fa-at"></span>
                    <h2>Login</h2
                        <p>https://app.expertdiplomaticservice.com/api/login</p><p>POST REQUEST</p>
                </div>

                <br>
                <div class="sec-content">


    <p><br/>

      <div class="separator"></div>
      <p>parameters for login</p>
        <img src="assets/assets/images/loginparameter.png"  class="img-resposive" />
<br>
<p>output  </p>
{{-- <img src="assets/assets/images/login1.png"  class="img-resposive" />
<img src="assets/assets/images/login2.png"  class="img-resposive" />
<img src="assets/assets/images/login3.png"  class="img-resposive" /> --}}
<pre class="prettyprint lang-php linenums">
	{
	    "token": {
	        "user_id": 22,
	        "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU4OTcwNzY3MSwiZXhwIjoxNTg5NzA3NzMxLCJuYmYiOjE1ODk3MDc2NzEsImp0aSI6InBQZ3htRlpnYnJ4NEd1Z2UiLCJzdWIiOjIyLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.zP6LveEuJr20uwuCvTD4qFIRZTKYelyvlOPp60ISiqc",
	        "token_type": "bearer",
	        "success": true,
	        "message": "Login was  successfully Please A mail containing your account login details has been sent to you Check Email To Activate Account And For Login Details",
	        "status": "200",
	        "expires_in": 60
	    },
	    "user": {
	        "headers": {},
	        "original": {
	            "id": 22,
	            "username": "kennyendowed",
	            "customerid": "9760",
	            "name": "Sharon Stone",
	            "email": "kenneyg50@gmail.com",
	            "email_verified_at": null,
	            "vUB": 2,
	            "vid": 2,
	            "avatar": null,
	            "bank_id": "19",
	            "is_permission": 3,
	            "ip_address": "127.0.0.1",
	            "created_at": "2020-05-16 05:28:42",
	            "updated_at": "2020-05-16 05:28:42"
	        },
	        "exception": null
	    },
	    "account_details": {
	        "headers": {},
	        "original": {
	            "user_usdaccounts_info": [
	                {
	                    "id": 14,
	                    "accno": "0527527552",
	                    "customerid": "9760",
	                    "accstatus": "InActive",
	                    "accounttype": "USD",
	                    "accountbalance": 0,
	                    "created_at": null,
	                    "updated_at": null
	                }
	            ],
	            "user_account_info": [
	                {
	                    "id": 14,
	                    "accno": "0527527552",
	                    "customerid": "9760",
	                    "accstatus": "InActive",
	                    "accounttype": "savings",
	                    "accountbalance": 0,
	                    "created_at": "2020-05-16 05:28:42",
	                    "updated_at": "2020-05-16 05:28:42"
	                }
	            ],
	            "user_customer_info": [
	                {
	                    "id": 20,
	                    "customerid": 9760,
	                    "accountno": "0527527552",
	                    "acctype": "savings",
	                    "ifsccode": "eyJpdiI6InNSaHU0bEJPK0srZUk0YVJmK1d4Y1E9PSIsInZhbHVlIjoibVlqZHlzbWRaaXhKYmRoZ0VnT01nOGw5bVwvOGVmN252aFd0MStpRHhPXC9FPSIsIm1hYyI6IjM5NzQ1ZTAyMzFjYTA0ZTA5MmI3YjZkNjNkMmEyMDhkZThlYTJiYTgzMjdhZGVhZjFhYTA3OGVlNThiMmY4Y2EifQ==",
	                    "firstname": "Sharon",
	                    "lastname": "Stone",
	                    "email": "kenneyg50@gmail.com",
	                    "phone": "054353535",
	                    "loginid": "kennyendowed",
	                    "is_permission": 3,
	                    "accpassword": "fd9494df9w4ef",
	                    "transpassword": "dgs94fdf449edfw",
	                    "cot": "gwrgdg",
	                    "DOB": "24-08-1919",
	                    "vUB": null,
	                    "vid": null,
	                    "bv": "eyJpdiI6Ik9PaGtlTU1sK1dJd25kQXgreHF3aUE9PSIsInZhbHVlIjoiOVZZeVJ5OFhIVmgyazdibXR0UmtJMnpKbVFXVmIzOE4wMnBHVTRxcFRCND0iLCJtYWMiOiIzYWMyY2YyOTU4ZGIzMmVhYWNmZjc0Mzg5OTA4NmFjZjBiNTJhMTk3NWY2ZWE1NjgxYjBlY2Y5NDczNzc1MTc5In0=",
	                    "imf": "sfwe",
	                    "accstatus": "InActive",
	                    "city": "NULL",
	                    "state": "NULL",
	                    "country": "nigeria",
	                    "created_at": "2020-05-16 05:28:42",
	                    "updated_at": "2020-05-16 05:28:42"
	                }
	            ]
	        },
	        "exception": null
	    }
	}
		</pre>
                </div>

            </section>

            <section class="section css-structure" id="Bvn">
                 <div class="sec-title">
                     <span class="icon fa fa-at"></span>
                       <h2>Bvn</h2
                           <p>https://app.expertdiplomaticservice.com/api/Bvn</p><p>POST REQUEST</p>
                   </div>

                   <br>
                   <div class="sec-content">


       <p><br/>

         <div class="separator"></div>
         <p>parameters for Bvn</p>
           <img src="assets/assets/images/bvn.png"  class="img-resposive" />
   <br>
   <p>output  </p>
   {{-- <img src="assets/assets/images/bvnout.png"  class="img-resposive" /> --}}
	 <pre>
		 {
		     "data": {
		         "bvn": "005151195151",
		         "bvnw": "infwjirnfnodnfvdsnvjjrvbjvkdnskvniwnvwrjdnNWdDTDRaUkdoRm1qemvsdubvudsnuhuehifwhiehfuirnfdsnkddsFhZmQ0MzE3YTk1MzYzZGNkMGQyMdsdfkjjfrewijidsnkdvmojdovirwhskdsdTE2YjkxY2NhNzlhNTA4MmIifQ==",
		         "bvne": "005151195151"
		     },
		     "response": {
		         "first_name": "KENNETH",
		         "last_name": "AKPAN",
		         "formatted_dob": "1991-08-24",
		         "mobile": "08120960876",
		         "bvn": "005151195151",
		         "calls_this_month": 2,
		         "free_calls_left": 8,
		         "email": "kenneyg50@gmail.com"
		     },
		     "content": {
		         "status": true,
		         "message": "BVN resolved",
		         "data": {
		             "first_name": "KENNETH",
		             "last_name": "AKPAN",
		             "dob": "24-Aug-91",
		             "formatted_dob": "1991-08-24",
		             "mobile": "08120960876",
		             "bvn": "005151195151"
		         },
		         "meta": {
		             "calls_this_month": 2,
		             "free_calls_left": 8
		         }
		     }
		 }



	 </prev>
                   </div>

               </section>

		<!--Server Requirements-->
        {{-- <section class="section css-structure" id="server">
        	<div class="sec-title">
            	<span class="icon fa fa-at"></span>
                <h2>Server Requirements</h2>
            </div>

            <br>
            <div class="sec-content">


<p><br/>

<b>Server Type:</b> Linux (Shared / VPS / Dedicated)<br/>
<b>PHP Version:</b> 7<br/>
<b>mySQL Version:</b> 5x<br/><br/>
<b>Related Questions:</b><br/><br/>
Question 1: Do i need VPS OR Dedicated Server?<br/>
ANS: No you can run our product with shared server too.<br/><br/>
Question 2: Which Hosting Provider will be best you think?<br/>
ANS: Any hosting provider who provide Cpanel Based Hosting.<br/><br/>
Question 3: What is Cpanel?<br/>
ANS: Cpanel is a Control panel for server. You can Check More <a href='http://cpanel.net' target='_blank'> Here </a><br/><br/>
Question 4: Don't have Cpanel?<br/>
ANS: No worry, its working with any control panel but cpanel is too easy to manage, for that we recommand cpanel based hosting.<br/><br/>

</p>
            </div>

        </section>

              <!--How to SETUP-->
        <section class="section css-structure" id="use">
        	<div class="sec-title">
            	<span class="icon fa fa-at"></span>
                <h2>How to Use</h2>
            </div>

            <br>
            <div class="sec-content">

<p>
CoinVest Mainly a Hyip Investment platform with Binary MLM System. there are binary joining system, user can join as same as others MLM network, there are MLM Generation Tree, Sponsor & 1:1 Pair Matching Bonus. The additional facility is: here we included Investment system as like as others HYIP or Lending platform has. admin able to create HYIP package from admin panel and user able to invest there. its mainly combination of HYIP & Binary MLM Business.

</p>  <br/>

            </div>

        </section>

              <!--How to SETUP-->
        <section class="section css-structure" id="setup">
        	<div class="sec-title">
            	<span class="icon fa fa-at"></span>
                <h2>How to Setup</h2>
            </div>

            <br>
            <div class="sec-content">

            <center>
 <img src="../Documents/images/db.png" alt="banner" height="600" width="600">
 </center>

<p><br/>


		<b>Step1:</b> Upload Files.zip to your host and unzip.<br/>
		<b>Step2:</b> Create mySQL Database and Database User.<br/>
		<b>Step3:</b> Open your browser and visit http://your-sitename/install.<br/>
		<b>Step4:</b> Fill All Information there and click SETUP.<br/>
		<b>Step5:</b> System is ready, you able to use now.<br/>
		<b>More:</b> If still you failed to install pls contact us, we Offering FREE Install Service.<br/>

</p>  <br/>

<b>Video:</b> <a href="https://www.youtube.com/watch?v=tbXIEmn_Csw">How to upload Files in Cpanel</a><br/>
            </div>

        </section>

		        <section class="section css-structure" id="cronsetup">
        	<div class="sec-title">
            	<span class="icon fa fa-at"></span>
                <h2>How to Setup Cron Job</h2>
            </div>

            <br>
            <div class="sec-content">

            <center>
 <img src="../Documents/images/cron.png" alt="banner" height="600" width="600">
 </center>

<p><br/>


You need to set cron job to generate user profit automatically. <br/>
Cron1 Command: <b>wget http://YourDomain.Name/cron</b><br/>
Cron2 Command: <b>wget http://YourDomain.Name/cron2</b><br/>
Cron Time1: Time Depends on your Plans, but Once per every 5 minute is good enough.<br/>
Cron Time2: Time Depends on your Plans, but Once per every 5 minute is good enough.<br/>

</p>  <br/>

            </div>

        </section>

		      <!--How to Edit-->
        <section class="section css-structure" id="edit">
        	<div class="sec-title">
            	<span class="icon fa fa-at"></span>
                <h2>How To Edit Code?</h2>
            </div>

            <br>
            <div class="sec-content">

              Once You Install The Product on Your Server, You Will have Two Folder and Few Files.
<br>
<br>
On Folder <b>"assets"</b>, We keep all kind of asset like <b>CSS, JS, Images</b>. So if You Want To Edit Or Change Any Asset, Have a Look on This Folder.
<br>
<br>
On Folder <b>"core"</b>, We keep The Core of <b>Laravel</b>.
<br>
<br>
We Maintain Laravel Structure(MVC) on This Project.
<br>
<br>
<b>"core/routes/web.php"</b> All Routes (URL) in This Folder. You can find the ControllerName@FunctionName Here.
<br>
<br>
<b>"core/app"</b> All Models are in This Folder.
<br>
<br>
<b>"core/app/Http"</b> All Controller are in This Folder. You can Change anything you want if you need to change any functionality.
<br>
<br>
<b>"core/resources/views"</b> You Have All HTML Structure Here. You can Change anything you want if you need to change anything on HTML.
<br>
            </div>

        </section>

        <!--HTML Structure-->
        <section class="section html-structure" id="html-structure">
        	<div class="sec-title">
            	<span class="icon fa fa-th-large"></span>
               <h2>Template HTML Structure</h2>
            </div>

            <br>
            <div class="sec-content">

                <h3>The html template uses Latest <strong>Bootstrap v3.3.7</strong> with valid HTML5 tags. This theme is a responisve layout with 12 column Support column. All of the information in content area is nested within a class and comes with predefined classes.</h3>

             <center>
				<img src="images/code.PNG" alt="banner" height="100%" width="100%">
			 </center>

            </div>

        </section>


        <!--CSS Structure-->
        <section class="section css-structure" id="css-structure">
        	<div class="sec-title">
            	<span class="icon fa fa-at"></span>
                <h2>CSS Files and Structure</h2>
            </div>

            <br>
                       <div class="sec-content">

                <h3>Mainly three main CSS files are used in this theme. The first one <strong>bootstrap.css</strong>, second one is <strong>style.css</strong> which for this template and third one is <strong>responsive.css</strong> to control responsive layouts. </h3>
<p><strong> Used Css File For Various Purpose :</strong></p>
                <p><strong><i class="fa fa-check" aria-hidden="true">

                </i>bootstrap.min.css</strong> (in css Folder)</p>
                <p><strong><i class="fa fa-check" aria-hidden="true">

                </i>font-awesome.min.css</strong> (in css Folder)</p>
                <p><strong><i class="fa fa-check" aria-hidden="true"></i>
                jquery.circliful.css</strong> (in sass Folder)</p>

                <strong><i class="fa fa-check" aria-hidden="true">

                </i>font-awesome.min.css</strong> (in css Folder)</p>
                <p><strong><i class="fa fa-check" aria-hidden="true">


                </i>slick.css</strong> (in css Folder)</p>
                <p><strong><i class="fa fa-check" aria-hidden="true">

                </i>swiper.min.css</strong> (in css Folder)</p>

                <p><strong><i class="fa fa-check" aria-hidden="true">

                </i>style.css</strong> (in css Folder)</p>

                 <p><strong><i class="fa fa-check" aria-hidden="true">

                </i>Responsive.css</strong> (in css Folder)</p>



                <br>

				<p>If you would like to edit a specific section of the site, simply find the appropriate label in the CSS file, and then scroll down until you find the appropriate style that needs to be edited. Check <strong>../assest/frontend</strong> Folder for frontend section and <strong>../assest/backend</strong> folder for Backend section</p>

            </div>

        </section>

        <!--Javascript-->
        <section class="section javascript" id="javascript">
        	<div class="sec-title">
            	<span class="icon fa fa-code"></span>
               <h2>Jquery and javascript</h2>
            </div>

            <br>
             <div class="sec-content">

                <ul>
                    <li><strong>jQuery</strong></li>
                        <li><i class="fa fa-check" aria-hidden="true">

                        </i>Bootstrap <strong>(bootstrap.min.js)</strong></li>

                        <li><i class="fa fa-check" aria-hidden="true">
                        </i>gmap <strong>(gmaps.js)</strong></li>

                        <li><i class="fa fa-check" aria-hidden="true">

                        </i>Highlight <strong>(highlight.min.js)</strong></li>
                        <li><i class="fa fa-check" aria-hidden="true">

                        </i>Isotope<strong>(Isotope.pkgd.min.js)</strong></li>
                        <li><i class="fa fa-check" aria-hidden="true">

                        </i>Jquery UI<strong>(jquery-ui-slider.min.js)</strong></li>

                        <li><i class="fa fa-check" aria-hidden="true">

                        </i>Circliful<strong>(jquery.circliful.js)</strong></li>

                        <li><i class="fa fa-check" aria-hidden="true">

                        </i>Counterup <strong>(jquery.counterup.min.js)</strong></li>

                        <li><i class="fa fa-check" aria-hidden="true">

                        </i>Ripple <strong>(jquery.ripples-min.js)</strong></li>

                        <li><i class="fa fa-check" aria-hidden="true">

                        </i>Slicknav<strong>(jquery.slicknav.min.js)</strong></li>

                        <li><i class="fa fa-check" aria-hidden="true">

                        </i>Tubular<strong>(jquery.tubular.1.0.js)</strong></li>
                        <li><i class="fa fa-check" aria-hidden="true">

                        </i>Lightcase <strong>(lightcase.js)</strong></li>

                        <li><i class="fa fa-check" aria-hidden="true">

                        </i>Map Script <strong>(map-script.js)</strong></li>

                        <li><i class="fa fa-check" aria-hidden="true">

                        </i>Particles <strong>(particles.min.js)</strong></li>
                        <li><i class="fa fa-check" aria-hidden="true">

                        </i>Raindrops <strong>(Raindrops.js)</strong></li>
                        <li><i class="fa fa-check" aria-hidden="true">

                        </i>Slick <strong>(slick.min.js)</strong></li>
                        <li><i class="fa fa-check" aria-hidden="true">

                        </i>Swiper <strong>(swiper.min.js)</strong></li>

                        <li><i class="fa fa-check" aria-hidden="true">

                        </i>All Plugin Activation File <strong>(main.js)</strong></li>
                    <br>
                    <li><strong>jQuery</strong> is a Javascript library that greatly reduces the amount of code that you must write.</li>
                    <li>Most of the animation in this site is carried out from the customs scripts. There are a few functions worth looking over.</li>
                </ul>
                <br>
				<p>In addition to the custom scripts, I have implemented few "tried and true" plugins to create the effects. This plugin is packed, so you won't need to manually edit anything in the file. The only necessary thing to know is how to call the method</p>


            </div>

        </section>






        <!--Sources and Credits-->
        <section class="section sources-credits" id="sources-credits">
        	<div class="sec-title">
            	<span class="icon fa fa-credit-card"></span>
                <h2>Sources and Credits</h2>
            </div>

            <br>
            <div class="sec-content">

                <h3>Fonts Used int the template are google fonts, you can find them on Google Fonts API</h3>

                <p><strong> Framework Used are :</strong></p>
                <p><strong><i class="fa fa-check" aria-hidden="true"></i>Laravel 5.5</strong></p>

                <br>

         <h3>Fonts Used int the template are google fonts, you can find them on Google Fonts API</h3>

                <p><strong> Fonts Used are :</strong></p>
                <p><strong><i class="fa fa-check" aria-hidden="true"></i>Montserrat</strong></p>


                <br>


                <br>
                Every Code is properly commented for Editing Ease.
                <br><br>

                <p><strong> Icons Used are :</strong></p>
                <br>
                <p><strong><i class="fa fa-check" aria-hidden="true"></i>Fontawsome Icons</strong><br><a href="https://fortawesome.github.io/Font-Awesome/" target="_blank">https://fortawesome.github.io/Font-Awesome/</a></p>
                <br>

				<br>


            </div>

        </section>

        <!--Support-->
        <section class="section support" id="support">
        	<div class="sec-title">
            	<span class="icon fa fa-support"></span>
                <h2>Support</h2>
            </div>

            <br>
            <div class="sec-content">

                <h3>Once again, thank you so much for purchasing this Script. As I said at the beginning, I'd be glad to help you if you have any questions relating to this Script. No guarantees, but I'll do my best to assist. If you have any queries, please feel free to contact us at Support Center.</h3>

                <p>Email Us at : <a href="mailto:software@thesoftking.com">software@thesoftking.com</a> </p>

            </div>

        </section> --}}


    </div>


</div>
<!--End pagewrapper-->

<script src="assets/assets/js/jquery.js"></script>
<script src="assets/assets/js/bootstrap.min.js"></script>
<script src="assets/assets/js/jquery.nav.js"></script>
<script src="assets/assets/js/jquery.scrollTo.js"></script>
<script src="assets/assets/js/scrollbar.js"></script>
<script src="assets/assets/js/script.js"></script>
</body>
</html>
