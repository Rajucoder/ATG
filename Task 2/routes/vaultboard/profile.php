<!DOCTYPE html>
	<html>
	<head>
		<title>View Profile</title>
		
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/Animate.css" rel="stylesheet" type="text/css">
 		<link rel="stylesheet" type="text/css" href="../../assets/bootstrap-tagsinput.css">
    	<link rel="stylesheet" type="text/css" href="../../assets/bootstrap-multiselect.css">
	  	<link rel="stylesheet" type="text/css" href="../../assets/bootstrap-tagsinput.css">
	  	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	   	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  
      	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
      	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
      	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>    	
    	<script type="text/javascript" src="../../assets/bootstrap-multiselect.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.js"></script>
 		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
 		<script type="text/javascript" src="../../assets/bootstrap-tagsinput.js"></script>
 		<style type="text/css">
 			 .active {
              background-color: #FF69B4;
            }

 		</style>
	</head><script type="text/javascript"></script>
	<body>
		
		<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-dark" style="font-size: 0.75em;">
		  <a class="navbar-brand" href="#" ><button class="btn text-light" style=" "><h5> VAULT BOARD</h5></button></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #FF69B4;">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		       <li class="nav-item ">
		       <a class="nav-link" href="../home.php"><button class="btn  text-light">Home</button><span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="#"><button class="btn  text-light">Profile</button><span class="sr-only">(current)</span></a>
		      </li>
		      
		      
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
		        <a class="nav-link" href="#"><button class="btn text-light ">Build Profile</button></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#"><button class="btn text-light ">Edit Profile</button></a>
		      </li>
		      <li class="nav-item">
		        <form method="get" action="../../logout.php"> <button name="logout" type="submit" class="btn btn-danger text-light ">Logout</button></form>
		      </li>
    		</ul>

		  </div>
		</nav>
<br>
		<div class="container" style="margin-top: 75px;">
				<div class="row">				
					<div class="col col-lg-3 col-md-3 col-sm-3 " style="font-size: 0.75em;">
						<div class="position-fixed">

																					<p><h5> </h5></p>
							<p>Profile Completed : 0% </p>							
							<ul class="list-group">
						 	 <a href="profile.php" class="list-group-item list-group-item-action">Profile</a>
						 	 <a href="social.php" class="list-group-item list-group-item-action">Social Account</a>
						 	 <a href="password.php" class="list-group-item list-group-item-action">Change Password</a>
						 
						 </ul>
						  
					</div>
				</div>
				</div>
				</div>
				<div class=" col col-lg-9 col-md-9 col-sm-9 ml-auto" style="padding-left:50px;font-size: 0.85em">
					  <div id="recruiterview" class="card">
					  	<div class="card-header">
					  	<div class="card-title" style="padding-left: 10px">
						<form method='post' action='#'>
							<div class="settings-section profile">
				<div class="settings-section-header profile">
					<h3>Profile</h3>
				</div>
				<div class="settings-section-content">
					<div class="profile-image-editor">
						<div class="profile-image-preview left">
							<img id="profileImg" src="https://placehold.it/100x100/fff?text=+">
						</div>
						<div class="profile-image-info right">
							<form id="profile-image-form">
								<input class='form-control' name="profile-image" type="file" class="hidden" id="trigger-file-upload" accept=".png,.jpg,.jpeg,.gif" >
								<div class="file-uploader">
									<span class="choose-file">Choose file</span>
									<span class="file-name" id="fileName">No file chosen</span>
								</div>
								<span class="upload-rules">JPG, GIF or PNG. Max size of 800K</span>
								<div class="submit">
									<div class="upload-container">
										<button type="button"  class="button green"  id="uploadPic">Upload Now</button>
									</div>
								</div>
							</form>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="section-form">
						<div class="formgroup">
							<label class = "text-center card-header" for="profile-name">Name*</label>
							<input class='form-control' name="Name" type="text" id="profile-name" placeholder="Name">
                            <div  id="" class="error hidden"></div>
						</div>
						<div class="formgroup">
							<label class = "text-center card-header" for="profile-number">Phone*</label>
							<input class='form-control' name="Phone" type="text" id="profile-number" placeholder="Phone Number" maxlength="15">
							<div id="" class=" error hidden"></div>
						</div>
						<div class="formgroup">
							<label class = "text-center card-header" for="profile-email">Email*</label>
							<input class='form-control' name="Email" type="text" id="profile-email" placeholder="Email">
							<div id="" class=" error hidden"></div>
						</div>
						<div class="formgroup">
							<label class = "text-center card-header" for="profile-destination">Designation*</label>
							<input class='form-control' name="Designation" type="text" id="profile-designation" placeholder="Designation">
                            <div  id="" class="error hidden"></div>
						</div>
						<div class="formgroup">
							<label class = "text-center card-header" for="profile-organization">Organization*</label>
							<input class='form-control' name="Organization" type="text" id="profile-organization" placeholder="Organization">
                            <div  id="" class="error hidden"></div>
						</div>
						<div class="formgroup">
							<label class = "text-center card-header" for="profile-website">Website</label>
							<input class='form-control' name="Website" type="text" id="profile-website" placeholder="Website">
							<div  id="" class="error hidden"></div>
						</div>
						<div class="formgroup">
							<label class = "text-center card-header" for="profile-recuriter-type">Recruitment*</label>
							<select class='form-control' name="recruiterType"  id="recruiterType">
								<option value="0">Select</option>
								<option value="1">Direct Employer</option>
								<option value="2">Recruitment Firm</option>
							</select>
                            <div  id="" class="error hidden"></div>
						</div>
						<div class="formgroup">
							<label class = "text-center card-header" for="profile-location">Location</label>
							<select class='form-control' id="location">
								<option value="-1" selected="">Select</option>
								   <option value="1">
								      Ahmedabad
								   </option>
								   <option value="2">
								      Bengaluru / Bangalore
								   </option>
								   <option value="41">
								      Chandigarh
								   </option>
								   <option value="3">
								      Chennai
								   </option>
								   <option value="4" selected="">
								      Delhi/NCR
								   </option>
								   <option value="221">
								      Delhi
								   </option>
								   <option value="5">
								      Gurgaon
								   </option>
								   <option value="6">
								      Hyderabad
								   </option>
								   <option value="7">
								      Kolkata
								   </option>
								   <option value="8">
								      Mumbai
								   </option>
								   <option value="9">
								      Noida
								   </option>
								   <option value="10">
								      Pune
								   </option>
								   <option value="62">
								      Guntur
								   </option>
								   <option value="82">
								      Kakinada
								   </option>
								   <option value="98">
								      Kurnool
								   </option>
								   <option value="113">
								      Nellore
								   </option>
								   <option value="114">
								      Nizamabad
								   </option>
								   <option value="129">
								      Rajamundry
								   </option>
								   <option value="150">
								      Tirupati
								   </option>
								   <option value="160">
								      Vijayawada
								   </option>
								   <option value="161">
								      Visakhapatnam
								   </option>
								   <option value="162">
								      Warangal
								   </option>
								   <option value="222">
								      Anantapur
								   </option>
								   <option value="223">
								      Guntakal
								   </option>
								   <option value="225">
								      Rajahmundry
								   </option>
								   <option value="226">
								      Secunderabad
								   </option>
								   <option value="227">
								      Andhra Pradesh - Other
								   </option>
								   <option value="72">
								      Itanagar
								   </option>
								   <option value="228">
								      Arunachal Pradesh - Other
								   </option>
								   <option value="51">
								      Dispur
								   </option>
								   <option value="63">
								      Guwahati
								   </option>
								   <option value="140">
								      Silchar
								   </option>
								   <option value="229">
								      Assam - Other
								   </option>
								   <option value="34">
								      Bhilaigarh
								   </option>
								   <option value="122">
								      Patna
								   </option>
								   <option value="230">
								      Bihar - Other
								   </option>
								   <option value="26">
								      Bhagalpur
								   </option>
								   <option value="39">
								      Bilaspur
								   </option>
								   <option value="128">
								      Raipur
								   </option>
								   <option value="231">
								      Bhillai
								   </option>
								   <option value="232">
								      Chhattisgarh - Other
								   </option>
								   <option value="59">
								      Goa
								   </option>
								   <option value="233">
								      Panaji
								   </option>
								   <option value="234">
								      Panjim
								   </option>
								   <option value="235">
								      Vasco Da Gama
								   </option>
								   <option value="236">
								      Goa - Other
								   </option>
								   <option value="21">
								      Anand
								   </option>
								   <option value="22">
								      Ankleshwar
								   </option>
								   <option value="28">
								      Baroda
								   </option>
								   <option value="31">
								      Bharuch
								   </option>
								   <option value="33">
								      Bhavnagar
								   </option>
								   <option value="37">
								      Bhuj
								   </option>
								   <option value="56">
								      Gandhinagar
								   </option>
								   <option value="79">
								      Jamnagar
								   </option>
								   <option value="83">
								      Kandla
								   </option>
								   <option value="124">
								      Porbandar
								   </option>
								   <option value="130">
								      Rajkot
								   </option>
								   <option value="145">
								      Surat
								   </option>
								   <option value="155">
								      Vadodara
								   </option>
								   <option value="156">
								      Valsad
								   </option>
								   <option value="157">
								      Vapi
								   </option>
								   <option value="238">
								      Gir
								   </option>
								   <option value="239">
								      Gujarat - Other
								   </option>
								   <option value="19">
								      Ambala
								   </option>
								   <option value="55">
								      Faridabad
								   </option>
								   <option value="66">
								      Hisar
								   </option>
								   <option value="86">
								      Karnal
								   </option>
								   <option value="99">
								      Kurukshetra
								   </option>
								   <option value="117">
								      Panipat
								   </option>
								   <option value="132">
								      Rohtak
								   </option>
								   <option value="143">
								      Sonipat / Sonepat
								   </option>
								   <option value="164">
								      Yamunanagar
								   </option>
								   <option value="242">
								      Haryana - Other
								   </option>
								   <option value="25">
								      Baddi
								   </option>
								   <option value="45">
								      Dalhousie
								   </option>
								   <option value="49">
								      Dharamsala
								   </option>
								   <option value="97">
								      Kulu/Manali
								   </option>
								   <option value="137">
								      Shimla
								   </option>
								   <option value="244">
								      Himachal Pradesh - Other
								   </option>
								   <option value="78">
								      Jammu
								   </option>
								   <option value="144">
								      Srinagar
								   </option>
								   <option value="245">
								      Jammu &amp; Kashmir - Other
								   </option>
								   <option value="40">
								      Bokaro
								   </option>
								   <option value="48">
								      Dhanbad
								   </option>
								   <option value="80">
								      Jamshedpur
								   </option>
								   <option value="131">
								      Ranchi
								   </option>
								   <option value="246">
								      Jharkhand - Other
								   </option>
								   <option value="29">
								      Belgaum
								   </option>
								   <option value="30">
								      Bellary
								   </option>
								   <option value="38">
								      Bidar
								   </option>
								   <option value="50">
								      Dharwad
								   </option>
								   <option value="61">
								      Gulbarga
								   </option>
								   <option value="68">
								      Hubli
								   </option>
								   <option value="91">
								      Kolar
								   </option>
								   <option value="104">
								      Mangalore
								   </option>
								   <option value="109">
								      Mysore
								   </option>
								   <option value="138">
								      Shimoga
								   </option>
								   <option value="248">
								      Karnataka - Other
								   </option>
								   <option value="16">
								      Alappuzha / Alleppey
								   </option>
								   <option value="42">
								      Cochin / Kochi / Ernakulam
								   </option>
								   <option value="69">
								      Idukki
								   </option>
								   <option value="84">
								      Kannur
								   </option>
								   <option value="87">
								      Kasargod
								   </option>
								   <option value="93">
								      Kollam
								   </option>
								   <option value="95">
								      Kottayam
								   </option>
								   <option value="96">
								      Kozhikode / Calicut
								   </option>
								   <option value="103">
								      Malappuram
								   </option>
								   <option value="116">
								      Pallakad
								   </option>
								   <option value="119">
								      Pathanamthitta
								   </option>
								   <option value="147">
								      Thrissur / Trissur
								   </option>
								   <option value="148">
								      Thiruvananthapuram / Trivandrum
								   </option>
								   <option value="163">
								      Wayanad
								   </option>
								   <option value="249">
								      Palakkad
								   </option>
								   <option value="250">
								      Palghat
								   </option>
								   <option value="251">
								      Kerala - Other
								   </option>
								   <option value="35">
								      Bhopal
								   </option>
								   <option value="64">
								      Gwalior
								   </option>
								   <option value="71">
								      Indore
								   </option>
								   <option value="73">
								      Jabalpur
								   </option>
								   <option value="154">
								      Ujjain
								   </option>
								   <option value="252">
								      Madhya Pradesh - Other
								   </option>
								   <option value="13">
								      Ahmednagar
								   </option>
								   <option value="24">
								      Aurangabad
								   </option>
								   <option value="77">
								      Jalgaon
								   </option>
								   <option value="92">
								      Kolhapur
								   </option>
								   <option value="111">
								      Nagpur
								   </option>
								   <option value="112">
								      Nasik
								   </option>
								   <option value="139">
								      Sholapur
								   </option>
								   <option value="254">
								      Mumbai Suburbs
								   </option>
								   <option value="255">
								      Navi Mumbai
								   </option>
								   <option value="257">
								      Solapur
								   </option>
								   <option value="258">
								      Maharashtra - Other
								   </option>
								   <option value="70">
								      Imphal
								   </option>
								   <option value="259">
								      Manipur - Other
								   </option>
								   <option value="136">
								      Shillong
								   </option>
								   <option value="260">
								      Meghalaya - Other
								   </option>
								   <option value="14">
								      Aizawal
								   </option>
								   <option value="261">
								      Mizoram - Other
								   </option>
								   <option value="90">
								      Kohima
								   </option>
								   <option value="262">
								      Dimapur
								   </option>
								   <option value="263">
								      Nagaland - Other
								   </option>
								   <option value="36">
								      Bhubaneshwar
								   </option>
								   <option value="44">
								      Cuttack
								   </option>
								   <option value="118">
								      Paradeep
								   </option>
								   <option value="126">
								      Puri
								   </option>
								   <option value="134">
								      Rourkela
								   </option>
								   <option value="264">
								      Orissa - Other
								   </option>
								   <option value="20">
								      Amritsar
								   </option>
								   <option value="32">
								      Bhatinda
								   </option>
								   <option value="76">
								      Jalandhar
								   </option>
								   <option value="101">
								      Ludhiana
								   </option>
								   <option value="107">
								      Mohali
								   </option>
								   <option value="120">
								      Pathankot
								   </option>
								   <option value="121">
								      Patiala
								   </option>
								   <option value="265">
								      Bathinda
								   </option>
								   <option value="267">
								      Punjab - Other
								   </option>
								   <option value="15">
								      Ajmer
								   </option>
								   <option value="74">
								      Jaipur
								   </option>
								   <option value="75">
								      Jaisalmer
								   </option>
								   <option value="81">
								      Jodhpur
								   </option>
								   <option value="94">
								      Kota
								   </option>
								   <option value="153">
								      Udaipur
								   </option>
								   <option value="268">
								      Rajasthan - Other
								   </option>
								   <option value="57">
								      Gangtok
								   </option>
								   <option value="269">
								      Sikkim - Other
								   </option>
								   <option value="43">
								      Coimbatore
								   </option>
								   <option value="53">
								      Erode
								   </option>
								   <option value="67">
								      Hosur
								   </option>
								   <option value="102">
								      Madurai
								   </option>
								   <option value="110">
								      Nagercoil
								   </option>
								   <option value="115">
								      Ooty
								   </option>
								   <option value="135">
								      Salem
								   </option>
								   <option value="146">
								      Thanjavur
								   </option>
								   <option value="149">
								      Tirunalveli
								   </option>
								   <option value="151">
								      Trichy
								   </option>
								   <option value="152">
								      Tuticorin
								   </option>
								   <option value="159">
								      Vellore
								   </option>
								   <option value="271">
								      Cuddalore
								   </option>
								   <option value="272">
								      Tamil Nadu - Other
								   </option>
								   <option value="11">
								      Agartala
								   </option>
								   <option value="273">
								      Tripura - Other
								   </option>
								   <option value="46">
								      Daman
								   </option>
								   <option value="88">
								      Kavaratti
								   </option>
								   <option value="123">
								      Pondicherry
								   </option>
								   <option value="125">
								      Port Blair
								   </option>
								   <option value="142">
								      Silvassa
								   </option>
								   <option value="275">
								      Dadra &amp; Nagar Haveli
								   </option>
								   <option value="12">
								      Agra
								   </option>
								   <option value="17">
								      Aligarh
								   </option>
								   <option value="18">
								      Allahabad
								   </option>
								   <option value="27">
								      Bareilly
								   </option>
								   <option value="54">
								      Faizabad
								   </option>
								   <option value="58">
								      Ghaziabad
								   </option>
								   <option value="60">
								      Gorakhpur
								   </option>
								   <option value="85">
								      Kanpur
								   </option>
								   <option value="100">
								      Lucknow
								   </option>
								   <option value="105">
								      Mathura
								   </option>
								   <option value="106">
								      Meerut
								   </option>
								   <option value="108">
								      Moradabad
								   </option>
								   <option value="158">
								      Varanasi
								   </option>
								   <option value="278">
								      Uttar Pradesh - Other
								   </option>
								   <option value="47">
								      Dehradun
								   </option>
								   <option value="133">
								      Roorkee
								   </option>
								   <option value="279">
								      Uttaranchal - Other
								   </option>
								   <option value="23">
								      Asansol
								   </option>
								   <option value="52">
								      Durgapur
								   </option>
								   <option value="65">
								      Haldia
								   </option>
								   <option value="89">
								      Kharagpur
								   </option>
								   <option value="141">
								      Siliguri
								   </option>
								   <option value="281">
								      West Bengal - Other
								   </option>
								   <option value="165">
								      Other India
								   </option>
								   <option value="127">
								      Quilon
								   </option>
								   <option value="166">
								      Australia
								   </option>
								   <option value="167">
								      Bahrain
								   </option>
								   <option value="168">
								      Bangladesh
								   </option>
								   <option value="169">
								      Belgium
								   </option>
								   <option value="170">
								      Canada
								   </option>
								   <option value="171">
								      China
								   </option>
								   <option value="214">
								      Doha
								   </option>
								   <option value="215">
								      Dubai
								   </option>
								   <option value="172">
								      Egypt
								   </option>
								   <option value="173">
								      France
								   </option>
								   <option value="174">
								      Germany
								   </option>
								   <option value="175">
								      Gulf
								   </option>
								   <option value="176">
								      Hongkong
								   </option>
								   <option value="177">
								      Indonesia
								   </option>
								   <option value="216">
								      INDIA
								   </option>
								   <option value="178">
								      Ireland
								   </option>
								   <option value="217">
								      Italy
								   </option>
								   <option value="179">
								      Japan
								   </option>
								   <option value="180">
								      Jordan
								   </option>
								   <option value="218">
								      Kenya
								   </option>
								   <option value="181">
								      Kuwait
								   </option>
								   <option value="182">
								      Lebanon
								   </option>
								   <option value="219">
								      Libya
								   </option>
								   <option value="183">
								      Macau
								   </option>
								   <option value="184">
								      Malaysia
								   </option>
								   <option value="185">
								      Maldives
								   </option>
								   <option value="186">
								      Mauritius
								   </option>
								   <option value="187">
								      Mexico
								   </option>
								   <option value="188">
								      Nepal
								   </option>
								   <option value="189">
								      Netherlands
								   </option>
								   <option value="190">
								      New Zealand
								   </option>
								   <option value="220">
								      Norway
								   </option>
								   <option value="191">
								      Oman
								   </option>
								   <option value="192">
								      Pakistan
								   </option>
								   <option value="193">
								      Philippines
								   </option>
								   <option value="194">
								      Qatar
								   </option>
								   <option value="195">
								      Russia
								   </option>
								   <option value="196">
								      Saudi Arabia
								   </option>
								   <option value="197">
								      Singapore
								   </option>
								   <option value="198">
								      South Africa
								   </option>
								   <option value="199">
								      South Korea
								   </option>
								   <option value="200">
								      Spain
								   </option>
								   <option value="201">
								      SriLanka
								   </option>
								   <option value="202">
								      Sweden
								   </option>
								   <option value="203">
								      Switzerland
								   </option>
								   <option value="204">
								      Taiwan
								   </option>
								   <option value="205">
								      Thailand
								   </option>
								   <option value="206">
								      United Kingdom
								   </option>
								   <option value="207">
								      United Arab Emirates
								   </option>
								   <option value="208">
								      United States
								   </option>
								   <option value="209">
								      Vietnam
								   </option>
								   <option value="210">
								      Yemen
								   </option>
								   <option value="211">
								      Zimbabwe
								   </option>
								   <option value="282">
								      Luxembourg
								   </option>
								   <option value="212">
								      Other International
								   </option>
								   <option value="213">
								      Anywhere
								   </option>
							</select>
						</div>
						<div class="formgroup">
							<label class = "text-center card-header" for="profile-about">About</label>
							<textarea class='form-control' id="profile-about"   placeholder="About"></textarea>
						</div><br>
						<div class="formgroup">
							
										<button class='btn btn-primary'><span class="button green submit ">Save</span></button>
							</div>
						</div>
							</div>
						</div>
					</div>
				</div>
			</div>
						</form>
						</div>
						</div>
						</div>
						</div>
</body>
</html>