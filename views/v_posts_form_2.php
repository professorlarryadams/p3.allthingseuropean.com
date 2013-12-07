<!doctype html>
<html>
<head>
<meta charset="UTF-8">


<title>Online Form page 2</title>

<!-- CSS -->
<link href="/js/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="/js/SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
<link href="/js/SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
<link href="/js/SpryAssets/SpryValidationCheckbox.css" rel="stylesheet" type="text/css">

 

<!-- JS -->

<script src="/js/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="/js/SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="/js/SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="/js/SpryAssets/SpryValidationCheckbox.js" type="text/javascript"></script>


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

</head>

<body>

<div class="container_12">

<div class="standard">

	<div class="content">
  
  <form name="719B" method="post" action="/posts/p_add2">
   		  
   <table>
            <tr>
            <td colspan="2" style="text-align:center">
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
   		      <th colspan="2">Section III - Mariner's Consent/Certification--Check all that apply.</th>
	        </tr>
   		    <tr>
   		      <td colspan="2" >
              <div><strong>1. Transportation Worker's Identification Credential (TWIC)</strong></div>
                
                  <div class="float_left"><label>
                    <input type="checkbox" name="twic_receipt" value="twic_receipt" id="twic_0" title="Provide a receipt of your TWIC">
                    I have a valid TWIC or have applied for a TWIC with the TSA</label>
                 </div>
                  
                  <div class="float_left"><label>
                    <input type="checkbox" name="twic_exempt" value="twic_exempt" id="twic_1">
                    I am exempt from holding a valid TWIC</label>
				  </div>
	         
             <div class="float_left"></div>
	         
              </td>
	        </tr>
   	
   		    <tr class="clear">
   		      <td colspan="2" >
              <strong>2. Mariner Outreach System (MOS)</strong> (Optional): I consent to voluntary participation in the Mariner Outreach System to be used by the Maritime Administration (MARAD) in the event of a national emergency or sealift crisis. In such an emergency, MARAD would disseminate my contact information to an appropriate maritime employment office to determine my availability for possible employment on a sealift vessel. Once consent is given, it remains effective until revoked either by subsequent application or by sending a signed notice of revocation to the U.S. Coast Guard National Maritime Center, 100
Forbes Dr., Martinsburg, WV 25404. For more information on MOS, please visit https://mos.marad.dot.gov/

              
                <div class="float_left"><label>
                  <input type="checkbox" name="mos_yes" value="yes_mos" id="mos_0">
                  Yes, I would like to participate</label>
                </div>
               
                <div class="float_left"> <label>
                  <input type="checkbox" name="mos_no" value="no" id="mos_1">
                  No thanks, I do not wish to participate at this time</label>
               
              </div>
	         
              </td>
	        </tr>
	      <tr class="clear">
   		      <td colspan="2" >
              <div><strong>3. I have been a user of/or addicted to a dangerous drug, including marijuana, within the last 10 years.</strong></div>
                
                 <div class="float_left">
                   <span id="spryselect2">
                   <select name="drugs" id="drugs">
                     <option>Please Select</option>
                     <option value="no">No</option>
                     <option value="yes">Yes</option>
                   </select>
                <span class="selectRequiredMsg">Please select an item.</span></span> </div>
	         
              </td>
	        </tr>
   		    
            <tr class="clear">
   		      <td colspan="2" ><strong>4. I have attached a signed statement of explanation for all convictions not previously disclosed</strong> to the Coast Guard on a prior  Merchant Mariner Credential Application. Per 46 CFR Part 10,  conviction means  found guilty by judgment or  by plea  and  includes cases of deferred adjudication  (no  contest, adjudication withheld, etc.) or  where the court required you to attend classes, make contribution of  time or money, receive treatment, submit to any manner  or probation or supervision, or  forgo appeal of a trial court finding.  Expunged  convictions must be reported unless the expungement was based upon a showing  that  the court's earlier conviction was in error.<br />
                
                <div class="float_left"><input name="convictions_statement" id="convictions_statement" type="checkbox" value="yes" title="You can upload your conviction statement"> 
                Yes</div>
	         
              </td>
	        </tr>
   		    
            <tr class="clear">
   		      <td colspan="2" ><strong>5. National Driver Registry (NDR) (Mandatory for Original, Renewal, or new Officer Endorsement):</strong>
              <div><input name="ndr_authorize" id="ndr_authorize" type="checkbox" value="yes"> 
              I authorize the National Driver Registry to furnish the U.S. Coast Guard (USCG) information pertaining to my driving record. This consent constitutes authorization for a single access to the information contained in the NDR to verify information provided in this application <strong>NOTE: Not required for Document of Continuity applicants.</strong></div>
              <p>* I understand the USCG will make the information received from the NDR available to me for review and written comment prior to disapproving my
application or taking any action against my Merchant Mariner’s Credential. Authority: 46 U.S.C. 7101(g), 46 U.S.C. 7302(c), and 46 U.S.C 7505.

            </td>
	        </tr>
   		    
            <tr class="clear">
   		      <td colspan="2" >
                 <div><strong>6. Document of Continuity</strong></div>
                <div class="float_left"><input name="continuity" type="checkbox" value="yes" title="You may not work under a Document of Continuity"> I understand that a Document of Continuity is not valid for use in accordance with 46 CFR 10.227(e)(2)(ii) and aware of the requirements to obtain an MMC.
                </div> 
              </td>
	        </tr>
   		    
            <tr class="clear">
   		     
              <td colspan="2" >
                 <strong>7.  I am under 18 years of age and a notarized statement of parental/guardian consent is attached.</strong>
                 <div class="float-left"><input name="parental_consent" type="checkbox" value="under_18" title="You must provided a Notarized Statement from your parents"></div>

              </td>
	        </tr>
   		    
            <tr class="clear">
   		      
              <tD colspan="2"><strong>8. Third Party Authorization (optional)</strong><br />
              <strong>*</strong> By checking  the following boxes, I am authorizing release of  information to the third  party  as  indicated below.   If a selection is made, please provide  the Name of  the Organization or  Third  Party, Address, and Phone Number. Additional Third Party release information can be attached separately.</tD>
	        </tr>
   		   
   		    <tr>
            <td style="width:49%">8a. <input name="sse_authorize" type="checkbox" value="yes" title="3rd Party will only have access to Safety & Suitability records"> 
            Safety and Suitability
            </td>
            
            <td style="width:49%"><span id="sprytextfield1">
              <label for="3rdPartyName">Name of Organization or Third Party</label><br />
              <input type="text" name="3rdPartyName" id="3rdPartyName" size="70" title="3rd Party can be a person or company."><br />
</span>
              </td>
            </tr>
   		   
   		    <tr>
            <td>8b. <input name="medical_authorize" type="checkbox" value="yes" title="3rd party may only view medical records"> Medical
            </td>
            <td>
              <span id="sprytextfield2">
              <label for="3rdPartyPOC">Organization Point of Contact (if applicable)</label><br />
              <input type="text" name="3rdPartyPOC" id="3rdPartyPOC" size="70" title="Name of contact must be provided"><br />
</span></td>
            </tr>
   		   
   		    <tr>
            <td>8c. <input name="pq_authorize" type="checkbox" value="yes" title="3rd Party may only view professional records"> Professional qualifications, certification records, or Sea Service
            </td>
            <td>
              <span id="sprytextfield3">
              <label for="3rdPartyStreet">Address</label><br />
              <input type="text" name="3rdPartyStreet" id="3rdPartyStreet" size="70" title="Physical address must be provided"><br />
              </span></td>
            </tr>
   		   
   		    <tr>
            <td>8d. <input name="delivery_authorize" type="checkbox" value="yes" title="Credential will be provide to your 3rd Party"> Merchant Marine Credential Delivery
            </td>
            <td>
            <div class="float_left" style="width:50%">
            <span id="sprytextfield4">
              <label for="3rdPartyCity">City</label><br />
              <input type="text" name="3rdPartyCity" id="3rdPartyCity" size="31" title="Please enter 3rd Party City">
</span>
            </div>
            
            <div class="float_left" style="width:15%">
              <span id="spryselect1">
              <label for="3rdPartyState">State</label><br />
              <select name="3rdPartyState" id="3rdPartyState" title="Please enter 3rd Party State">
              <option value="" selected="selected">State</option>
                    <option value="AL">AL</option>
                    <option value="AK">AK</option>
                    <option value="AZ">AZ</option>
                    <option value="AR">AR</option>
                    <option value="CA">CA</option>
                    <option value="CO">CO</option>
                    <option value="CT">CT</option>
                    <option value="DE">DE</option>
                    <option value="DC">DC</option>
                    <option value="FL">FL</option>
                    <option value="GA">GA</option>
                    <option value="HI">HI</option>
                    <option value="ID">ID</option>
                    <option value="IL">IL</option>
                    <option value="IN">IN</option>
                    <option value="IA">IA</option>
                    <option value="KS">KS</option>
                    <option value="KY">KY</option>
                    <option value="LA">LA</option>
                    <option value="ME">ME</option>
                    <option value="MD">MD</option>
                    <option value="MA">MA</option>
                    <option value="MI">MI</option>
                    <option value="MN">MN</option>
                    <option value="MS">MS</option>
                    <option value="MO">MO</option>
                    <option value="MT">MT</option>
                    <option value="NE">NE</option>
                    <option value="NV">NV</option>
                    <option value="NH">NH</option>
                    <option value="NJ">NJ</option>
                    <option value="NM">NM</option>
                    <option value="NY">NY</option>
                    <option value="NC">NC</option>
                    <option value="ND">ND</option>
                    <option value="OH">OH</option>
                    <option value="OK">OK</option>
                    <option value="OR">OR</option>
                    <option value="PA">PA</option>
                    <option value="RI">RI</option>
                    <option value="SC">SC</option>
                    <option value="SD">SD</option>
                    <option value="TN">TN</option>
                    <option value="TX">TX</option>
                    <option value="UT">UT</option>
                    <option value="VT">VT</option>
                    <option value="VA">VA</option>
                    <option value="WA">WA</option>
                    <option value="WV">WV</option>
                    <option value="WI">WI</option>
                    <option value="WY">WY</option>
              </select>
              </span>
              </div>
			
            <div class="float_left" style="width:33%">
              <span id="sprytextfield6">
              <label for="3rdPartyZip">Zip Code</label><br />
              <input type="text" name="3rdPartyZip" id="3rdPartyZip" title="Please enter 3rd Party zip code">
              </span>
            </div>
            </td>
            </tr>
   		   
   		    <tr>
            <td>8e. <input name="processing_authorize" type="checkbox" value="y" title="3rd Party will act on your behalf"> Act on my behalf in all matters pertaining to the processing of my current USCG credential application.
            </td>
            <td>
              <span id="sprytextfield7">
              <label for="3rdPartyPhone">Phone</label>
              <br />
              <input type="text" name="3rdPartyPhone" id="3rdPartyPhone" size="70" title="Please enter 3rd Party primary phone number.">
              <br />
              <span class="textfieldRequiredMsg">Please enter your phone number.</span><span class="textfieldInvalidFormatMsg">Must be all numbers and no spaces.</span></span>
              </td>
            </tr>
   		   
   		    <tr>
            <td colspan="2">
            <div><strong>9. Certification</strong></div>
            <p style="margin-left:10px">
            Whoever, in any manner within the jurisdiction of any department or agency of the United States, knowingly and willfully falsifies, conceals or covers up by any trick, scheme, or device a material fact, or makes any false, fictitious or fraudulent statements or representations, or makes or uses any false writing or document knowing the same to contain any false, fictitious or fraudulent statement or entry, violates the U.S. Criminal Code at Title 18 U.S.C. 1001 which subjects the violator to Federal prosecution and possible incarceration, fine or both.</p>
            <ul>
            <li>I understand an application determined to be fraudulent may result in the denial of my application for one year from the date of submission, even if the fraudulent information was not by itself cause for denial or prosecution.</li>
            <li>I certify that the information on this application is true and correct.</li>
            <li>I certify that, if this application is being filed before the minimum assessment period has elapsed, I've included evidence of suitability for service in the merchant marine. <strong>(If this is not included, then the application will not be processed by the Coast Guard.)</strong></li>
            </ul>
            </td>
            </tr>
  <tr>
   		      <td colspan="2" ><div>10.  Oath <strong>(Mandatory for Original Only):</strong></div>
   		        <div class="float-left"><input name="oath" type="checkbox" value="yes"></div>

</td>
        </tr>    
               		    <tr class="clear">
   		      <td colspan="2" >
              	<div><strong>11.  Applicant’s Signature</strong></div>
                
                <div class="float_left" style="width:70%">
					<span id="sprytextfield5">
					<label for="e_signature"><strong>X</strong> Electronic Signature of Applicant</label><br />
					<input name="e_signature" type="file"  id="e_signature" title="Upload your electronic Signature!"><br />
					<span class="textfieldRequiredMsg">Please enter your electronic signature.</span></span></div>
				
                	<div class="float_left" style="width:17%">
                      <span id="sprytextfield8">
                      <label for="datepicker">Date:</label>
                      <input type="text" name="signature_date" id="datepicker">
                    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span> </div>
	         
              </td>
	        </tr> 
   		    
        <tr>	
   		      <td  colspan="2" style="background-color: #000;"><div class="centered">
               <input type="hidden" name="record_id" value="<?=$record_id?>">
              	<input type="reset" id="reset" value="Reset">
              	<input type="submit" id="submit" value="Submit"></div></td>
          </tr>
            <tr class="clear">
              	<td colspan="2">
     			</td>
            </tr>
      </table>
  </form>
    
<!-- end .content --></div>
  
  <!-- end .standard --></div>
  
  	<!-- container_12 --></div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {isRequired:false});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {isRequired:false});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {isRequired:false});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {isRequired:false});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "zip_code", {hint:"12345", isRequired:false, useCharacterMasking:true});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "phone_number", {hint:"(000) 000-0000", isRequired:false, useCharacterMasking:true});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {isRequired:false});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "date", {format:"mm/dd/yyyy", hint:"mm/dd/yyyy", useCharacterMasking:true});
</script>

</body>
</html>