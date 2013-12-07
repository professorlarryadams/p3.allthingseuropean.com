<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<title>Online Form</title>

	<!-- CSS -->

        <link rel="stylesheet" href="../css/validationEngine.jquery.css" type="text/css"/>
		<link rel="stylesheet" href="../css/template.css" type="text/css"/>
		<link href="/js/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
		<link href="/js/SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
		<link href="/js/SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
		<link href="/js/SpryAssets/SpryValidationCheckbox.css" rel="stylesheet" type="text/css">
		
	<!-- JS -->
		
		<script src="/js/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
		<script src="/js/SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
		<script src="/js/SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
		<script src="/js/SpryAssets/SpryValidationCheckbox.js" type="text/javascript"></script>
        <script src="/js/jquery-1.6.min.js" type="text/javascript"></script>
		<script src="/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
		<script src="/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
        
		
		<script>
  $(function() {
    $( document ).tooltip();
  });
  </script>
 
<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script> 
  
<script>
$(document).ready(function () {

    $('#myform').validate({
        rules: {
            original_officer: {
                require_from_group: [1, '.require-one']
            },
			renewal_officer: {
                require_from_group: [1, '.require-one']
            },
            duplicate_officer: {
                require_from_group: [1, '.require-one']
            },
			raise_officer: {
                require_from_group: [1, '.require-one']
            },
			increase_officer: {
                require_from_group: [1, '.require-one']
            },
			continuity_officer: {
                require_from_group: [1, '.require-one']
            },
			original_qr: {
                require_from_group: [1, '.require-one']
            },
			renewal_qr: {
                require_from_group: [1, '.require-one']
            },
			duplicate_qr: {
                require_from_group: [1, '.require-one']
            },
			raise_qr: {
                require_from_group: [1, '.require-one']
            },
			increase_qr: {
                require_from_group: [1, '.require-one']
            },
			continuity_qr: {
                require_from_group: [1, '.require-one']
            },
			
			original_entry: {
                require_from_group: [1, '.require-one']
            },
			
			renewal_entry: {
                require_from_group: [1, '.require-one']
            },
			
			duplicate_entry: {
                require_from_group: [1, '.require-one']
            },
			original_stcw: {
                require_from_group: [1, '.require-one']
            },
			renewal_stcw: {
                require_from_group: [1, '.require-one']
            },
			duplicate_stcw: {
                require_from_group: [1, '.require-one']
            },
			raise_stcw: {
                require_from_group: [1, '.require-one']
            },
			increase_stcw: {
                require_from_group: [1, '.require-one']
            },
			
        },
  		
		groups: {
            checks: "original_officer renewal_officer  duplicate_officer  raise_officer increase_officer  continuity_officer original_qr renewal_qr duplicate_qr raise_qr increase_qr continuity_qr original_entry renewal_entr uplicate_entry original_stcw renewal_stcw duplicate_stcw raise_stcw increase_stcw"
        },
        submitHandler: function (form) { 
            alert('valid form');
            return false;
        }
    });

});
</script>

</head>
<!-- Body -->

<body>

<!-- Outside Container -->

<div class="container_12">

	<div class="standard">
  
  	<form  action="/posts/p_add" method="post" enctype="multipart/form-data" name="719B" id="myform">
   		  
   	<table>
    	<tr>
           	<td colspan="7" style="text-align:center">
            	<div>
              	<strong>DEPARTMENT OF HOMELAND SECURITY</strong>
              	</div>
              	<div>
                <strong>U.S. COAST GUARD</strong>
              	</div>
              	<div>
                <strong>MERCHANT MARINER CREDENTIAL APPLICATION</strong>
              	</div>
           </td>
        </tr>
            
   		<tr>
   		   	<th colspan="7" style="height:25px; vertical-align:central;">Section I - Personal Data</th>
	    </tr>
   		    
        <tr>
   		  	<td colspan="7" >
              	<div><strong>1. Legal Name (Last, First, Middle, Suffix) (Alias(es) 0r Maiden Name(s) if applicable):</strong>
                </div>
              
              	<div class="float_left" style="width:17%; max-width:162px">  
                  <span id="sprytextfield2">
                  <label>First Name:<br/>
                    <input name="first_name" type="text" id="first_name" size="19" title="Enter your First Name">
                  </label>
                  <br/>
                  <span class="textfieldRequiredMsg">Please enter your first name.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded 40 characters.</span></span>
                </div>
                          
                
              <div class="float_left" style="width:17%; max-width:162px">  
                  <span id="sprytextfield3">
   		          	<label>Middle Name:<br/>
                    <input name="middle_name" type="text" id="middle_name" size="19" title="Enter your Middle name">
                  <span class="textfieldMaxCharsMsg">Exceeded 30 characters.</span>
                  </label>
				  </span>
                </div>
                  
                <div class="float_left" style="width:28.5%; max-width:272px;">  
            	<span id="sprytextfield1">
            		<label>Last Name:<br/>
              		<input name="last_name" type="text" id="last_name" size="35" title="Enter your Last Name">
            		</label><br/>
            	<span class="textfieldRequiredMsg">Pleas enter your last name.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded 40 maximum number of characters.</span></span>
                </div>
                  
                <div class="float_left" style="width:11%; max-width:110px">  
              	<span id="sprytextfield10">
                  	<label>Suffix:<br/>
                    <input name="suffix" type="text" id="suffix" size="10" title="Enter your suffix (sr, jr, I, II, III)">
                <span class="textfieldMaxCharsMsg">Exceeded 15 characters.</span></label></span><br/>
              	</div>
                 
                <div class="float_left" style="width:25%; max-width:240px">  
   		         <span id="sprytextfield4">
   		          	<label>Alias(es):<br />
                    <input name="alias" type="text" id="alias" size="30" title="If your name change please list any aliases">
                 <span class="textfieldMaxCharsMsg">Exceeded 50 characters.</span></label></span>
          		</div>
	         </td>
	    </tr>
   		  
        <tr>
   		     <td colspan="7"> 
                <div class="float_left" style="width:23%;">  
              	<strong>2a. Social Security #:</strong><br />
   		        <span id="sprytextfield9">
                	<input name="ssn" type="text" id="ssn" title="Social Security Number  000-00-0000" maxlength="11">
                <br />
                <span class="textfieldRequiredMsg">Please enter your social security number.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span>
               </div>
               
                  <div class="float_left" style="width:23%;">  
              <strong>2b. Reference #</strong>:<br />
              <span id="sprytextfield11">
              <input type="text" name="ref_num" id="ref_num" title="Please enter a reference number (if applicable)">
              <span class="textfieldInvalidFormatMsg">Invalid format.</span><br />
              <span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded 11 characters.</span></span>
               </div>
               
                  <div class="float_left" style="width:29%;">  
               <strong>2c. Alien Registration #</strong>:<br /> <span id="sprytextfield6">
               <input type="text" name="arn" id="arn" title="If you are not a citizen please enter your ARN.">
               <span class="textfieldInvalidFormatMsg">Invalid format.</span><br />
               <span class="textfieldMaxCharsMsg">Exceeded 11 characters.</span></span>
               </div>
               
                  <div class="float_left" style="width:23%;">  
             <strong> 3. Date of Birth </strong><br />
             <span id="sprytextfield7">
             <label for="datepicker"></label>
             <input type="text" name="birthdate" id="datepicker" title="Please enter your birthdate"><br />
             <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span> </div></td>
	    </tr>
   		    
        <tr class="clear">
   		      <td colspan="7">
                  <div class="float_left" style="width:32%">
                  <span id="spryselect2">
   		        <label><strong>4. Citizenship/Nationality:&nbsp;</strong></label> <br/>
   		          <select name="nationality" id="nationality" title="What is your nationality?">
                    <option value="" selected="selected">Select a Country</option>
                    <option value="United States">United States</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Bouvet Island">Bouvet Island</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Congo, Democratic Republic of">Congo, Democratic Republic of</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Territories">French Southern Territories</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea-bissau">Guinea-bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                    <option value="Korea, Republic of">Korea, Republic of</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macao">Macao</option>
                    <option value="Macedonia">Macedonia</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palau</option>
                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Pitcairn">Pitcairn</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russian Federation">Russian Federation</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint Helena">Saint Helena</option>
                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option value="Saint Lucia">Saint Lucia</option>
                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                    <option value="Samoa">Samoa</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="South Georgia and South Sandwich Islands">South Georgia and South Sandwich Islands</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Timor-leste">Timor-leste</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                     <option value="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Viet Nam">Viet Nam</option>
                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                    <option value="Western Sahara">Western Sahara</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                    </select><br/>
                    <span class="selectRequiredMsg">Please select a country.</span></span> 
                </div>
                
        <div class="float_left" style="width:21%">  
                <span id="sprytextfield8">
                <label><strong>5a. Birth City:</strong><br />
                  <input type="text" name="birthplace" id="birthplace" title="Enter a city where you were born." size="24">
                </label>
                <br/>
                <span class="textfieldRequiredMsg">Please enter your birth city.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded 30 characters.</span></span> 
                </div>
                
                  <div class="float_left" style="width:15.5%">  
                  <span id="spryselect6">
   		        <label><strong>5b. Birth State:</strong></label><br/>
   		          <select name="birth_state" id="birth_state" title="Select the state you where born in?">
                    <option value="" selected="selected">Select a State</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">Dist. Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                    </select><br/>
 		          <span class="selectRequiredMsg">Please select the state.</span></span> 
                </div>
                
                  <div class="float_left" style="width:31%">  
                <span id="spryselect7">
   		        <label><strong>5c. Birth Country:</strong></label><br/>
   		          <select name="birth_country" id="birth_country" title="Select the country you where born in?">
                    <option value="" selected="selected">Select a Country</option>
                    <option value="United States">United States</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Bouvet Island">Bouvet Island</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Congo, Democratic Republic of">Congo, Democratic Republic of</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Territories">French Southern Territories</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea-bissau">Guinea-bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                    <option value="Korea, Republic of">Korea, Republic of</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macao">Macao</option>
                    <option value="Macedonia">Macedonia</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palau</option>
                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Pitcairn">Pitcairn</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russian Federation">Russian Federation</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint Helena">Saint Helena</option>
                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option value="Saint Lucia">Saint Lucia</option>
                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                    <option value="Samoa">Samoa</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="South Georgia and South Sandwich Islands">South Georgia and South Sandwich Islands</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Timor-leste">Timor-leste</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                     <option value="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Viet Nam">Viet Nam</option>
                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                    <option value="Western Sahara">Western Sahara</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                    </select><br/>
 		          <span class="selectRequiredMsg">Please select the country.</span></span>
                </div>
                
              </td>
	        </tr>
   		    
        <tr class="clear">
   		      <td colspan="7" >
              
                 <div class="float_left" style="width:35%">
           		   <span id="spryselect8">
   		        		<label for="eye_color"><strong>5d. Color of Eyes</strong>:</label>
   		        		<select name="eye_color" id="eye_color" title="Select your eye color">
   		          		<option>--- Please Select ---</option>
   		          		<option value="amber">Amber</option>
   		          		<option value="blue">Blue</option>
   		          		<option value="brown">Brown</option>
   		          		<option value="gray">Gray</option>
   		          		<option value="green">Green</option>
   		          		<option value="hazel">Hazel</option>
   		          		<option value="red">Red</option>
                        </select><br />
              		<span class="selectRequiredMsg">Please select an item.</span></span></div>
              
              <div class="float_left" style="width:35%">
              	<span id="spryselect9">
	          		<label for="hair_color"><strong>5e. Color of Hair:</strong></label>
              		<select name="hair_color" id="hair_color" title="Select your hair color">
	            	<option>--- Please Select ---</option>
	            	<option value="auburn">Auburn</option>
	            	<option value="bald">Bald</option>
	            	<option value="black">Black</option>
	            	<option value="blond">Blond</option>
	            	<option value="brown">Brown</option>
	            	<option value="grey">Grey</option>
	            	<option value="silver">Silver</option>
                    </select><br />
	          	<span class="selectRequiredMsg">Please select an item.</span></span></div> </td>
	        </tr>
   		    
        <tr>
   		      <th colspan="7" >Mariner Information:  (Click here for further instructions)</th>
	        </tr>
   		    
        <tr>
   		      <td colspan="7" >
              <div><strong>6a. Home Address (PO Box NOT acceptable):</strong></div>
                  
                  <div class="float_left" style="width:43%"> 
                  <span id="sprytextfield14">
                  <label for="address">Street Address:</label>
                  <br/>
                  <input name="address" type="text" id="address" size="60" title="Enter your physical address - no P.O. Box.">
                  <br/>
                  <span class="textfieldRequiredMsg">Please enter your address.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded 40  characters.</span></span>
                 </div>
                 
                  <div class="float_left" style="width:24%"> 
              		<span id="sprytextfield15">
                    <label for="city">City:</label>
                    <br/>
                    <input name="city" type="text" id="city" size="30" title="Enter your city">
                    <br/>
                    <span class="textfieldRequiredMsg">Please enter your city.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded 30 characters.</span></span>
                 </div>
                 
                  <div class="float_left" style="width:15%"> 
              		<span id="spryselect3">
	          		<label for="state">State:</label><br/>
	          		<select name="state" id="state" title="Enter your State">
	            	<option value="" selected="selected">Select a State</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">Dist. Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                  	</select><br />
	            	<span class="selectRequiredMsg">Please select a state.</span></span>
                 </div>
                 
                  <div class="float_left" style="width:15%"> 
              		<span id="sprytextfield16">
              		<label for="zip_code">Zip Code:</label><br/>
              		<input name="zip_code" type="text" id="zip_code" title="Enter your zip code (12345)" size="20">
             		<span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Please enter your zip code.</span></span>
              	</div>
              </td>
	        </tr>
   		    
        <tr class="clear">
   		      <td colspan="7" >
              <div><strong>6b. Delivery Address, if different:</strong> <strong>(PO BOX acceptable):</strong></div>
                 
                <div class="float_left" style="width:43%">
                  <span id="sprytextfield17"> 
   		        	<label for="delivery_address">Street:</label><br/>
                    <input name="delivery_address" type="text" id="delivery_address" size="60" title="Secondary Address or P.O. Box">
                  <span class="textfieldMaxCharsMsg">Exceeded 30 characters.</span></span>
                </div>
                
                  <div class="float_left" style="width:24%">
                  	<span id="sprytextfield18"> 
	          		<label for="delivery_city">City:</label><br/>
                    <input name="delivery_city" type="text" id="delivery_city" size="30" title="Enter your city">
                    <span class="textfieldMaxCharsMsg">Exceeded 30 characters.</span></span>
                </div>
                
                  <div class="float_left" style="width:15%"> 
                    <span id="spryselect1">
                    <label for="delivery_state">State</label>
                    :<br />
                    <select name="delivery_state" id="delivery_state">
                    <option value="" selected="selected">Select a State</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">Dist. Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                  	</select><br />
                    </span> </div>
                 
                  <div class="float_left" style="width:15%"> 
              		<span id="sprytextfield19">
	          		<label for="delivery_zip">Zip Code:</label><br/>
              		<input name="delivery_zip" type="text" id="delivery_zip" size="20" title="Enter your zip code (12345).">
              		<span class="textfieldInvalidFormatMsg">Invalid format.</span></span>
           	    </div>
            </td>
	        </tr>
   		    
        <tr class="clear">
   		      <td colspan="7" >
                  <div class="float_left" style="width:25%"> 
                  	<span id="sprytextfield20">
                  	<label for="phone"><strong>6c. Primary Phone:</strong></label><br />
                  	<input type="text" name="phone" id="phone" title="Primary phone number - (000) 000-0000"><br/>
                  	<span class="textfieldRequiredMsg">Please enter your phone number.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span>
                  </div>
                
                  <div class="float_left" style="width:25%"> 
              		<span id="sprytextfield21">
	          		<label for="phone_secondary"><strong>6d. Secondary Phone:</strong></label><br/>
              		<input type="text" name="phone_secondary" id="phone_secondary" title="Secondary phone or cell number - no spaces">
              		<span class="textfieldInvalidFormatMsg">Please enter a secondary phone number.</span></span>
                  </div>
                  
                  <div class="float_left" style="width:48%"> 
              		<span id="sprytextfield22">
              		<label for="email"><strong>6e. E-mail:</strong></label><br/>
              		<input name="email" type="text" id="email" size="60" title="Enter your email"><br />
              		<span class="textfieldRequiredMsg">Please enter your email.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span>
              	  </div>
              </td>
	        </tr>
   		    
        <tr class="clear">
   		      <th colspan="7" ><strong>Emergency Contact</strong></th>
	        </tr>
   		    
        <tr>
   		      <td colspan="7" >
              <strong>7a. Emergency Contact name and address:</strong>

                <div class="float_left" style="width:100%">
               	  <span id="sprytextfield5">
                    <label for="emergency_contact"> Full Name</label>
                    <br/>
                    <input type="text" name="emergency_contact" id="emergency_contact" title="Emergency contact's full name" size="95">
                    <span class="textfieldRequiredMsg">Please enter your emergency contact.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded 40 characters.</span></span>
                 </div>

                  <div class="float_left" style="width:43%">
                    <span id="sprytextfield12">
                    <label for="street">Street:</label><br />
                    <input name="street" type="text" id="street" size="60"><br />
                <span class="textfieldRequiredMsg">Please enter a street.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded 40 maximum number of characters.</span></span> </div>
                   
                  <div class="float_left" style="width:24%"> 
              		<span id="sprytextfield24">
                    <label for="city_emergency_contact">City:</label>
                    <br />
                    <input name="city_emergency_contact" type="text" id="city_emergency_contact" size="30" title="Emergency contact city">
                    <br />
                    <span class="textfieldRequiredMsg">Please enter a city.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span> 
                  </div>
                  
                  <div class="float_left" style="width:15%"> 
              		<span id="spryselect5">
	          		<label for="state_emergency_contact">State:</label><br />
                    <select name="state_emergency_contact" id="state_emergency_contact" title="Emergency contact state">
                      <option value="" selected="selected">Select a State</option>
                      <option value="AL">Alabama</option>
                      <option value="AK">Alaska</option>
                      <option value="AZ">Arizona</option>
                      <option value="AR">Arkansas</option>
                      <option value="CA">California</option>
                      <option value="CO">Colorado</option>
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="DC">Dist. Of Columbia</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="HI">Hawaii</option>
                      <option value="ID">Idaho</option>
                      <option value="IL">Illinois</option>
                      <option value="IN">Indiana</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NV">Nevada</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NM">New Mexico</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="ND">North Dakota</option>
                      <option value="OH">Ohio</option>
                      <option value="OK">Oklahoma</option>
                      <option value="OR">Oregon</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="SD">South Dakota</option>
                      <option value="TN">Tennessee</option>
                      <option value="TX">Texas</option>
                      <option value="UT">Utah</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WA">Washington</option>
                      <option value="WV">West Virginia</option>
                      <option value="WI">Wisconsin</option>
                      <option value="WY">Wyoming</option>
                    </select>
                    <span class="selectRequiredMsg">Please select an item.</span><br />
	          	</span> 
               </div>
               
                  <div class="float_left" style="width:15%"> 
              		<span id="sprytextfield25">
              		<label for="zip_emergency_contact">Zip Code:</label><br />
              		<input name="zip_emergency_contact" type="text" id="zip_emergency_contact" size="20" title="Emergency contact zip code (12345).">
              		<span class="textfieldRequiredMsg">Please enter a zip code.</span><span class="textfieldInvalidFormatMsg">Please enter a zip code.</span></span>
              	 </div>
              </td>
	        </tr>
   		    
        <tr class="clear">
   		      <td colspan="7" >
                 
                  <div class="float_left" style="width:24%">
              		<span id="sprytextfield26">
                    <label for="relationship"><strong>7b. Relationship:</strong></label>
                    <br/>
                    <input name="relationship" type="text" id="relationship" size="30" title="What is their relationship with you"><br />
                    <span class="textfieldRequiredMsg">Please enter your relationship.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded 30  characters.</span></span>
                  </div>
                  
                  <div class="float_left" style="width:17%">
                  	<span id="sprytextfield27">
                  	<label for="contact_phone"><strong>7c. Phone:</strong></label><br/>
                    <input type="text" name="contact_phone" id="contact_phone" title="Emergency contact primary phone (000) 000-0000"><br />
                 	<span class="textfieldRequiredMsg">Please enter a phone number.</span><span class="textfieldInvalidFormatMsg">Please enter correct format.</span></span>
                  </div>
                  
                  <div class="float_left" style="width:17%">
                  	<span id="sprytextfield28">
	          		<label for="contact_cell"><strong>7d. Cell Phone:</strong></label><br/>
              		<input type="text" name="contact_cell" id="contact_cell" title="Emergency contact's secondary phone"><br />
              		<span class="textfieldInvalidFormatMsg">Please enter a phone number.</span></span>
                 </div>
                 
                  <div class="float_left" style="width:42%">
			  		<span id="sprytextfield29">
                    <label for="contact_email"><strong>7e. E-mail:</strong></label>
                    <br />
                    <input name="contact_email" type="text" id="contact_email" size="57" title="Emergency contact's email"><br />
                    <span class="textfieldRequiredMsg">Please enter a email.</span> <span class="textfieldInvalidFormatMsg">Must enter valid e-mail format.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span>
                  </div>
              </td>
	        </tr>
   		    
        <tr class="clear">
   		      <th colspan="7" style="height:25px; vertical-align:central">
   		        <div>Section II - Coast Guard Credential(s) or Endorsement Type(s) Requested: (Check all that apply)<br>
   		        </div>
	          </th>
	        </tr>
   		    
        <tr>
              <th>Endorsement Categories:</th>
              <th style="text-align:center">Original:</th>
   		      <th style="text-align:center">Renewal</th>
   		      <th style="text-align:center">Duplicate</th>
   		      <th style="text-align:center">Raise in Grade</th>
   		      <th style="text-align:center">Increase in Scope</th>
	      	  <th style="text-align:center">Document of Continuity</th>
	    </tr>
        
       
        <tr>
        
           <th><strong>Officer:</strong></th>       
            <td style="text-align:center"><input type="checkbox" id="check0" name="original_officer" 	value="original_officer" class="require-one" /></td>
            <td style="text-align:center"><input type="checkbox" id="check1" name="renewal_officer" 	value="renewal_officer" class="require-one" /></td>
            <td style="text-align:center"><input type="checkbox" id="check2" name="duplicate_officer" 	value="duplicate_officer" class="require-one" /></td>
            <td style="text-align:center"><input type="checkbox" id="check3" name="raise_officer" 		value="raise_officer" class="require-one" /></td>
            <td style="text-align:center"><input type="checkbox" id="check4" name="increase_officer" 	value="increase_in_scope" class="require-one" /></td>
            <td style="text-align:center"><input type="checkbox" id="check5" name="continuity_officer" 	value="continuity_officer" class="require-one" /></td>
              
        </tr>  
                        
        <tr>
          <th><strong>Qualified Ratings:</strong>   </th> 
          	<td style="text-align:center"><input type="checkbox" id="check6" name="original_qr" 		value="original_qr" 	class="require-one" /></td>
            <td style="text-align:center"><input type="checkbox" id="check7" name="renewal_qr" 			value="renewal_qr" 		class="require-one" /></td>
            <td style="text-align:center"><input type="checkbox" id="check8" name="duplicate_qr" 		value="duplicate_qr" 	class="require-one" /></td>
            <td style="text-align:center"><input type="checkbox" id="check9" name="raise_qr" 			value="raise_qr" 		class="require-one" /></td>
            <td style="text-align:center"><input type="checkbox" id="check10" name="increase_qr" 		value="increase_qr" 	class="require-one" /></td>
            <td style="text-align:center"><input type="checkbox" id="check11" name="continuity_qr" 		value="continuity_qr" 	class="require-one" /></td>
        </tr>
        
        <tr>
           <th><strong>Entry Level:</strong></th>        
           <td style="text-align:center"><input type="checkbox" id="check12" name="original_entry" 		value="original_entry" 	class="require-one" /></td>
           <td style="text-align:center"><input type="checkbox" id="check13" name="renewal_entry" 		value="renewal_entry" 	class="require-one" /></td>
           <td style="text-align:center"><input type="checkbox" id="check14" name="duplicate_entry" 	value="duplicate_entry" class="require-one" /></td> 
           <td style="background-color:#bbb">&nbsp;</td> 
           <td style="background-color:#bbb">&nbsp;</td> 
           <td style="background-color:#bbb">&nbsp;</td> 
        </tr>
        
        <tr>
              <th><strong>STCW:</strong></th>
              <td style="text-align:center"><input type="checkbox" id="check15" name="original_stcw" 	value="original_stcw" 	class="require-one" /></td>
              <td style="text-align:center"><input type="checkbox" id="check16" name="renewal_stcw" 	value="renewal_stcw" 	class="require-one" /></td>
              <td style="text-align:center"><input type="checkbox" id="check17" name="duplicate_stcw" 	value="duplicate_stcw" 	class="require-one" /></td>
              <td style="text-align:center"><input type="checkbox" id="check18" name="raise_stcw" 		value="raise_stcw" 		class="require-one" /></td>
              <td style="text-align:center"><input type="checkbox" id="check19" name="increase_stcw" 	value="increase_stcw" 	class="require-one" /></td> 
              <td style="background-color:#bbb">&nbsp;</td> 
        
        </tr>
	   
        <tr>
   		      <td colspan="7" >
   		        <div><strong>Description of Endorsement(s) Desired:</strong> Include all appropriate information - Officer (i.e. deck - Master/Mate?propulsion/Tonnage//Route OR Engineer Grade - 3rd AE; DDE/Propulsion/Horsepower) Ratings (i.e.: Able Seaman, Tankerman, QMED, Lifeboatman)
               </div>

             	<span id="sprytextarea2">
                <label for="description"></label>
                <textarea name="description" id="description" cols="115" rows="5"></textarea><br />
                <span class="textareaRequiredMsg">A value is required.</span><span class="textareaMinCharsMsg">Minimum number of characters not met.</span><span class="textareaMaxCharsMsg">Exceeded 400 maximum number of characters.</span></span><br />
              <span class="textareaMinCharsMsg">Minimum number of characters not met.</span></td>
        </tr>
   		    
        <tr>
   		      <td colspan="7" ><strong><span id="sprycheckbox1">
              <input type="checkbox" name="renewal_transaction" id="renewal_transaction" title="Renewal transaction only!">
              <label for="renewal_transaction"></label>
              <span class="checkboxMinSelectionsMsg">Minimum number of selections not met.</span><span class="checkboxMaxSelectionsMsg">Maximum number of selections exceeded.</span></span>
              FOR RENEWAL TRANSACTIONS ONLY:</strong> I request to have my merchant mariner credential (MMC) issued immediately and decline having its issuance coincide with my previous credentials expiration date.             
              </td>
	    </tr>
            		    
        <tr>
   		      <td colspan="7" style="background-color:#000;"><div class="centered">
              	<input type="reset" id="reset" value="Reset"> 
	            <input type="submit" value="Submit"></div>
               
              </td>
	    </tr>
      
      </table>
 </form>
 
</div>

</div>	
  
<script type="text/javascript">
var sprytextfield14 = new Spry.Widget.ValidationTextField("sprytextfield14", "none", {hint:"Physical Address", minChars:1, maxChars:40});
var sprytextfield15 = new Spry.Widget.ValidationTextField("sprytextfield15", "none", {minChars:1, maxChars:30, hint:"City"});
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3");
var sprytextfield16 = new Spry.Widget.ValidationTextField("sprytextfield16", "zip_code", {hint:"22655", useCharacterMasking:true});
var sprytextfield17 = new Spry.Widget.ValidationTextField("sprytextfield17", "none", {isRequired:false, hint:"Street or P.O. Box", maxChars:40});
var sprytextfield18 = new Spry.Widget.ValidationTextField("sprytextfield18", "none", {isRequired:false, hint:"City", maxChars:30});
var sprytextfield19 = new Spry.Widget.ValidationTextField("sprytextfield19", "zip_code", {isRequired:false, hint:"22655", useCharacterMasking:true});
var sprytextfield20 = new Spry.Widget.ValidationTextField("sprytextfield20", "phone_number", {hint:"(000) 000-0000", useCharacterMasking:true});
var sprytextfield21 = new Spry.Widget.ValidationTextField("sprytextfield21", "phone_number", {isRequired:false, hint:"(000) 000-0000", useCharacterMasking:true});
var sprytextfield22 = new Spry.Widget.ValidationTextField("sprytextfield22", "email", {hint:"name@email.com", useCharacterMasking:true});
var sprytextfield24 = new Spry.Widget.ValidationTextField("sprytextfield24", "none", {hint:"City", minChars:1, maxChars:40});
var spryselect5 = new Spry.Widget.ValidationSelect("spryselect5");
var sprytextfield25 = new Spry.Widget.ValidationTextField("sprytextfield25", "zip_code", {hint:"22655", useCharacterMasking:true});
var sprytextfield26 = new Spry.Widget.ValidationTextField("sprytextfield26", "none", {minChars:1, maxChars:30, hint:"Family Relationship"});
var sprytextfield27 = new Spry.Widget.ValidationTextField("sprytextfield27", "phone_number", {hint:"(000) 000-0000", useCharacterMasking:true});
var sprytextfield28 = new Spry.Widget.ValidationTextField("sprytextfield28", "phone_number", {isRequired:false, hint:"(000) 000-0000", useCharacterMasking:true});
var sprytextfield29 = new Spry.Widget.ValidationTextField("sprytextfield29", "email", {hint:"name@email.com", minChars:1, maxChars:40, useCharacterMasking:true});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {hint:"Last Name", minChars:1, maxChars:40});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {hint:"First Name", minChars:1, maxChars:40});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {isRequired:false, hint:"Middle Name", maxChars:30});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {isRequired:false, hint:"Former name", maxChars:50});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "integer", {isRequired:false, hint:"numbers only", maxChars:11});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "none", {minChars:1, maxChars:30, hint:"City"});
var spryselect6 = new Spry.Widget.ValidationSelect("spryselect6");
var spryselect7 = new Spry.Widget.ValidationSelect("spryselect7");
var spryselect8 = new Spry.Widget.ValidationSelect("spryselect8");
var spryselect9 = new Spry.Widget.ValidationSelect("spryselect9");
var sprycheckbox1 = new Spry.Widget.ValidationCheckbox("sprycheckbox1", {isRequired:false, minSelections:0, maxSelections:1});
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "social_security_number", {hint:"000-00-0000", useCharacterMasking:true});
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10", "none", {hint:"Suffix", isRequired:false, maxChars:15});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {hint:"Full name", minChars:1, maxChars:40});
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11", "integer", {isRequired:false, minChars:1, maxChars:11});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {isRequired:false});
var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2", {minChars:10, maxChars:400, hint:"You must enter your description in this box!"});
var sprytextfield12 = new Spry.Widget.ValidationTextField("sprytextfield12", "none", {minChars:1, maxChars:40, hint:"Street"});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "date", {hint:"mm/dd/yyyy", useCharacterMasking:true, format:"mm/dd/yyyy"});
</script>
</body>
</html>