
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<title>E-Learning payment page</title>
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template - 2.9.0">
		<meta name="author" content="okler.net">
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
		<!-- Libs CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/font-awesome.css">
	
		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		
		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/blue.css">
		
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="css/theme-responsive.css" />
		<!-- Head Libs -->
		<!--[if IE]>
			<link rel="stylesheet" href="css/ie.css">
		<![endif]-->
		<!--[if lte IE 8]>
			<script src="vendor/respond.js"></script>
		<![endif]-->
		<script type="text/javascript">
function calculate_zakat()
{
// Validate input
allowed = "0123456789.";
obj = eval(document.getElementById("amount"))
for (counter = 0; counter < obj.value.length; counter++)
	{
  		my_char = obj.value.charAt(counter);
  		if (allowed.indexOf(my_char) == -1)
  		{
   			alert("Only Numbers are allowed");
   			obj.select();
   			return 1;
  		}
 	}
// Calculation of zakat
var t_amount = document.getElementById("amount").value;
var nisab = 23908.16; // Here we have to write the worth of nisab, which is price of 85-Grams pure gold
var zakat;
if (t_amount >= nisab)
	{
		zakat= eval(t_amount) * 0.025;
		document.getElementById("amount_zakat").value=zakat;
	}
	else
	{
		document.getElementById("amount_zakat").value="No Zakat for this amount";
	}
}
</script>
	</head>
	<body>
		<div class="body">
			
           <div class="container">
           <div class="row">
           <p align="center"><img src="img/logo-pay.png" /></p>
           </div>
           </div>
            
            <section class="page-top">
					<div class="container">
                    
                    <div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="https://www.afnci.org.eg/">Home</a></li>
									<li class="active">E-Learning payment page - صفحة الدفع أونلاين </li>
								</ul>
							</div>
						</div>
                    
                    <div class="row">
                        <div class="col-md-12"><h2 align="center">E-Learning payment page - صفحة الدفع أونلاين 	</h2></div>
                        </div>
                       
						
                        
					</div>
				</section>
            
			<div role="main" class="main shop">
				<div class="container">
					
					<div class="row">
						<div class="col-md-9" style="margin-bottom:20px">
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div id="collapseOne" class="accordion-body collapse in">
										<div class="panel-body">
											<form id="" method="post" class="" action="vpc_php_serverhost_do.php">
											<input type="hidden" name="Title" value="PHP VPC 3-Party">
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<strong><span>Amount</span><span style="float: right;">المبلغ </span></strong>
                                							<input type="number" class="form-control" name="vpc_Amount" value="25" disabled required/>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<strong>Currency<span style="float: right;">العملة </span></strong>
															<select class="form-control" name="curr" required>
						                                        <option value="">Select a currency &ndash;  أختر العملة</option>
						                                        <option value="EGP">EGP جنيه مصرى</option>
						                                        <option value="USD">USD دولار أمريكى</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-6">
															<strong>First Name<span style="float: right;">الأسم الأول</span></strong>
															<input type="text" class="form-control" name="firstname" value="<?php echo $uuname;?>" required " disabled " />
														</div>
														<div class="col-md-6">
															<strong>Last Name<span style="float: right;">الأسم الأخير</span></strong>
															<input type="text" class="form-control" name="lastname" value="<?php echo $usname;?>"" disabled "/>
														</div>
													</div>
												</div>
																																					
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<strong>Address<span style="float: right;">العنوان</span> </strong>
															<input type="text" class="form-control" name="bAddress"/>
														</div>
													</div>
												</div>												
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<strong>Email address<span style="float: right;">البريد الإلكترونى </span></strong>
															<input type="email" class="form-control" name="email" required value="aah@hh.ff"" disabled "/>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
													<div class="col-md-12">															<strong>Day Of Birth</strong><strong><span style="float: right;">يوم الميلاد</span></strong></div>	
														<div class="col-md-4">
															<select class="form-control" name="countries">
																<option value="">Day&ndash;<span style="float: right;">اليوم</span><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
															</select>
                                                            <br/>
														</div>
														<div class="col-lg-4">
						                                    <select class="form-control" name="month">
						                                        <option value="">Month&ndash;الشهر</option><option value="01">January&ndash;&ndash;يناير</option><option value="02">February&ndash;&ndash;فبراير</option><option value="03">March&ndash;&ndash;مارس</option><option value="04">April&ndash;&ndash;إبريل</option><option value="05">May&ndash;&ndash;مايو</option><option value="06">June&ndash;&ndash;يونية</option><option value="07">July&ndash;&ndash;يوليو</option><option value="08">August&ndash;&ndash;أغسطس</option><option value="09">September&ndash;&ndash;سبتمبر</option><option value="10">October&ndash;&ndash;أكتوبر</option><option value="11">November&ndash;&ndash;نوفمبر</option><option value="12">December&ndash;&ndash;ديسمبر</option>
						                                    </select>
                                                            <br/>
						                                </div>
													    <div class="col-lg-4">
							                                <input type="text" class="form-control" name="year" placeholder="Year&ndash;السنة" /><br/>
							                            </div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<strong>Country<span style="float: right;">البلد</span></strong>
															<select class="form-control" name="countries" required>
																<option value="">Select a Country &ndash; أختر البلد</option>
						                                        </option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Arctic Ocean">Arctic Ocean</option><option value="Aruba">Aruba</option><option value="Ashmore and Cartier Islands">Ashmore and Cartier Islands</option><option value="Atlantic Ocean">Atlantic Ocean</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Baker Island">Baker Island</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Bassas da India">Bassas da India</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Virgin Islands">British Virgin Islands</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Clipperton Island">Clipperton Island</option><option value="Cocos Islands">Cocos Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Cook Islands">Cook Islands</option><option value="Coral Sea Islands">Coral Sea Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote d'Ivoire">Cote d'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Europa Island">Europa Island</option><option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Gaza Strip">Gaza Strip</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Glorioso Islands">Glorioso Islands</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Howland Island">Howland Island</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indian Ocean">Indian Ocean</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Isle of Man">Isle of Man</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Jan Mayen">Jan Mayen</option><option value="Japan">Japan</option><option value="Jarvis Island">Jarvis Island</option><option value="Jersey">Jersey</option><option value="Johnston Atoll">Johnston Atoll</option><option value="Jordan">Jordan</option><option value="Juan de Nova Island">Juan de Nova Island</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kingman Reef">Kingman Reef</option><option value="Kiribati">Kiribati</option><option value="Kerguelen Archipelago">Kerguelen Archipelago</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Midway Islands">Midway Islands</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Navassa Island">Navassa Island</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="North Korea">North Korea</option><option value="North Sea">North Sea</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pacific Ocean">Pacific Ocean</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestine">Palestine</option><option value="Palmyra Atoll">Palmyra Atoll</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paracel Islands">Paracel Islands</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn Islands">Pitcairn Islands</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Republic of the Congo">Republic of the Congo</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option><option value="South Korea">South Korea</option><option value="Spain">Spain</option><option value="Spratly Islands">Spratly Islands</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard">Svalbard</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tromelin Island">Tromelin Island</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="USA">USA</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Viet Nam">Viet Nam</option><option value="Virgin Islands">Virgin Islands</option><option value="Wake Island">Wake Island</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="West Bank">West Bank</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Yugoslavia">Yugoslavia</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<strong>Phone<span style="float: right;">رقم الهاتف</span></strong>
                                							<input type="phone" class="form-control" name="phone" value="223233"" disabled " />
														</div>
													</div>
												</div>
<!-- 												<div class="row">
													<div class="form-group">   
														<div class="col-md-12">
															<strong>Donation Program<span style="float: right;">برنامج التبرع</span></strong>
															<select class="form-control" name="mid" required readonly='readonly'>
						                                      	<option value="" >Select Donation Program &ndash;  إختر برنامج التبرع</option>
						                                      	<option value="Naming" >Naming Opportunity - الصدقة الجارية</option>
						                                      	<option value="Research" >Research - البحث العلمى</option>
						                                      	<option value="Zakat">Zakat Money - زكاة مال</option>
						                                      	<option value="Monthly">Monthly Dontion - التبرع الشهرى</option>
															</select>
														</div>
													</div>
												</div> -->
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<strong><span>Note<span style="float: right;">ملاحظات</span></span></strong>
                                							<textarea class="form-control" name="note" rows="10"></textarea>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<input type="submit" value="Pay&ndash;إدفع" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="featured-box featured-box-secundary">
								<div class="box-content">
						<h5><span style="float: left;">Calculate Zakat&ndash;</span><span style="float: right;">إحسب زكاتك</span></h5>
						<hr />
												<div class="row">
													<div class="form-group">
														<div class="col-md-16">
															<strong><span style="float: left;">Enter Amount</span><span style="float: right;">ضع المبلغ</span></strong>
															<input type="text" value="" class="form-control" id="amount" NAME="amount">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-10">
														<input type="submit" value="Calculate - إحسب " class="btn btn-primary pull-right push-bottom" onClick="calculate_zakat()">
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-16">
															<strong><span style="float: left;">Amount of zakat</span><span style="float: right;">مبلغ الزكاة</span></strong>
															<input type="text" value="" class="form-control" id="amount_zakat" NAME="amount_zakat">
														</div>
													</div>
												</div>
							</div>
							</div>
						</div>
<hr />
						</div>
					</div>
				</div>
			</div>
			<footer>
				<div class="row">
               <p align="center"> <img src="img/footer-hospital1.png" width="80%"/></p>
                </div>
                  
                
                
				<br/><br/><br/>
			</footer>
		</div>
		
		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-12345678-1']);
			_gaq.push(['_trackPageview']);
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		 -->
	</body>
</html>
