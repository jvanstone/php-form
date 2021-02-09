 <!-- General Information  -->
 <fieldset>
  <legend>General Information</legend>

  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="First_Name">First Name*</label>
      <input class="form-control" type="text" class="form-control"  id="First_Name" name="First_Name"/> 
    </div>
    <div class="form-group col-md-3">
      <label for="Last_Name">Last Name*</label>
      <input class="form-control" type="text" class="form-control"  id="Last_Name" name="Last_Name" />
    </div>
  </div> <!--  End Fname & Lname -->

  <div class="form-group">
    <label class="col-md-6"  for="Email">Email*</label>
    <input class="col-md-6" type="Email" id="Email" pattern=".{6,}" maxLength="100" name="Email" required />
  </div>

  <div class="form-group">
    <label class="col-md-6" for="Telephone">Telephone Number*</label>
    <input class="col-md-6" type="tel" id="Telephone" name="Telephone" required />
  </div>

  <div class="form-group">
    <label class="col-md-6" for="Birth_Country">Country of Birth*</label>
    <input class="col-md-6" type="text" id="Birth_Country" name="Birth_Country" />
  </div>

  <div class="form-group">
    <label class="col-md-3" for="Birth_Date">Date of Birth*</label>
    <div class="col-6">
     <input class="form-control" type="date" id="Birth_Date">
    </div>
  </div>

 
  <div class="card" style="width: 30rem;">
  <div class="card-header">Why do you want to come to Canada?</div>
    <div class="form-group col-lg">
    <div class="form-check">
    <label><input class="form-check-input"  class="form-check-input" type="radio" name="Why_Do_You_to_come_to_Canada" value="Business_Entrepreneur"/>Business / Entrepreneur</label>
    </div>

    <div class="form-check">  
      <label><input class="form-check-input"  class="form-check-input" type="radio" name="Why_Do_You_to_come_to_Canada" value="Skilled_Worker"/>
      Class Investor</label>
    </div>

    <div class="form-check"> 
      <label><input class="form-check-input"  class="form-check-input" type="radio" name="Why_Do_You_to_come_to_Canada" value="Entrepreneur"/>
      Entrepreneur </label>
    </div>

    <div class="form-check"> 
      <label><input class="form-check-input"  class="form-check-input" type="radio" name="Why_Do_You_to_come_to_Canada" value="Family_sponsorship"/> 
      Family sponsorship</label>  
    </div>

    <div class="form-check"> 
      <label><input class="form-check-input"  class="form-check-input" type="radio" name="Why_Do_You_to_come_to_Canada" value="Self_Employed"/>
      Self-Employed</label>
    </div>

    <div class="form-check"> 
      <label><input class="form-check-input"  class="form-check-input" type="radio" name="Why_Do_You_to_come_to_Canada" value="Skilled_Worker"/>
      Skilled Worker</label>
    </div>

    <div class="form-check"> 
      <label><input class="form-check-input"  class="form-check-input" type="radio" name="Why_Do_You_to_come_to_Canada" value="Provincial_Nominee_Programs" />
      Provincial Nominee Programs (PNP) Family Class </label>
    </div>

    <div class="form-check"> 
      <label><input class="form-check-input"  class="form-check-input" type="radio" name="Why_Do_You_to_come_to_Canada" value="Study_Permit" />
      Student / Study Permit</label>
    </div>

    <div class="form-check"> 
      <label><input class="form-check-input"  class="form-check-input" type="radio" name="Why_Do_You_to_come_to_Canada" value="Vistor_Visa" />
      Visitor Visa / Super Visa / Start-up Visa</label>
    </div>
  </div>
  </div> <!-- End the Why Come to Canada Group -->
 </fieldset>
  
  <!-- Current address -->
 <fieldset>
 <legend>Current Address</legend>

  <div class="form-group">
    <label for="Street_Address">Street*</label>
    <input class="form-control" type="text" class="form-control id="Street_Address" name="Street_Address" required />
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="City_Address">City*</label>
      <input class="form-control" type="text" class="form-control   id="City_Address" name="City_Address" required />
    </div>

    <div class="form-group col-md-2">
      <label for="Province">State/Province*</label>
      <input class="form-control" type="text" class="form-control"   id="Province" name="Province" required />
    </div>

    <div class="form-group col-md-4">
      <label for="Country_Address">Country*</label>
      <input class="form-control" type="text" class="form-control"   id="Country_Address" name="Country_Address" required />
    </div>

    <div class="form-group col-md-2">
      <label for="Postal_Code">Postal Code*</label>
      <input class="form-control" type="text" class="form-control"   id="Postal_Code"name="Postal_Code" required />
    </div>
 </fieldset>


 <!-- Marital Status  -->
 <fieldset>
  <legend>Marital Status</legend>

  <div class="form-group">
    <label> What is your current Marital Status?</label>
   
     <div class="form-check">
      <label>
         <input class="form-check-input"  class="form-check-input" type="radio" name="Marital_Status" value="Married" checked="checked"/>Married
       </label>
      </div>

     <div class="form-check">
       <label>
         <input class="form-check-input"  class="form-check-input" type="radio" name="Marital_Status" value="Widow/Widower" />Widow/Widower
       </label>
     </div>

     <div class="form-check">
       <label>
         <input class="form-check-input"  class="form-check-input" type="radio" name="Marital_Status" value="Single" />Single
       </label>
     </div>

     <div class="form-check">
       <label>
         <input class="form-check-input"  class="form-check-input" type="radio" name="Marital_Status" value="Engaged" />Engaged
       </label>
     </div>

     <div class="form-check">
       <label>
         <input class="form-check-input"  class="form-check-input" type="radio" name="Marital_Status" value="Common-Law" />Common-Law
       </label>
    </div>

    <div class="form-check">
      <label>
        <input class="form-check-input"  class="form-check-input" type="radio" name="Marital_Status" value="Divorce/Separated" />Divorce/Separated
      </label>
    </div>
  </div>

  <div class="form-group">
    <label for="Marriage_Date">If you are married, date married</label>
    <input class="form-control" type="date" id="Marriage_Date" name="Marriage_Date"/>
  </div>

  <div class="form-group">
    <label for="Common_Law">If you live with your spouse, but are not married, what is the day you started living together</label>
    <input class="form-control" type="date"  id="Common_Law" name ="Common_Law" />
  </div>

  <div class="form-group">
  <label class="item radioLabel">If you are married or common-law, will your spouse immigrate to Canada with you?</label>
   
    <div class="form-check">
      <label>
        <input class="form-check-input" class="form-check-input" type="radio" name="Partner_Imigrate_too" value="Yes" checked />Yes
      </label>
    </div>

    <div class="form-check">
      <label>
        <input class="form-check-input" class="form-check-input" type="radio"name="Partner_Imigrate_too" value="No" />No
      </label>
    </div>
  </div>

  <div class="form-group">
    <label for="Have_Children">Do you have children?</label>
     
    <div class="form-check">
      <label>
        <input class="form-check-input"  class="form-check-input" type="radio" name="Have_Children" value="Yes" checked />Yes
      </label>
     </div>

    <div class="form-check">
      <label>
       <input class="form-check-input"  class="form-check-input" type="radio" name="Have_Children" value="No" />No
      </label>
    </div>
  </div>

  <div class="form-group">
    <label for="label_How_many_Children">How many children do you have? What are their ages?</label>
    <input class="form-control" type="text" name="How_many_Children">
  </div>
  </fieldset>

  <!-- TRAVEL TO CANADA  -->
  <fieldset>
    <legend>TRAVEL TO CANADA</legend>
      
    <div class="form-group">
      <label for="Work_Study_Travel">Have you worked in, studied in, or visited Canada?</label>
  
      <div class="form-check">
        <label>
          <input class="form-check-input" class="form-check-input" type="radio" name="Work_Study_Travel" value="Yes" checked />Yes
        </label>
      </div>

      <div class="form-check">
        <label>
          <input class="form-check-input" class="form-check-input" type="radio" name="Work_Study_Travel" value="No" />No
        </label>
      </div>
    </div>

    <div class="form-group">
      <label for="Study_Permit">Have you ever had a work or study permit to Canada?</label>
    
      <div class="form-check">
        <label>
          <input class="form-check-input" class="form-check-input" type="radio" name="Study_Permit" value="Yes" />Yes
        </label>
      </div>

      <div class="form-check">
        <label>
          <input class="form-check-input" class="form-check-input" type="radio" name="Study_Permit" value="No" />No
        </label>
      </div>
    </div>

  <div class="form-group">
    <label for="permit_dates">If you lived in Canada before what were the dates?</label>
    <div class="form-group">
      <label cfor="permit_dates">From:</label>
      <input class="form-control" type="date" id="Permit_Dates_From" name="Permit_Dates_From" />
    </div>
    <div class="form-group">
      <label for="permit_dates">To:</label>
      <input class="form-control" type="date" id="Permit_Dates_To" name="Permit_Dates_To"  />
    </div>
  </div>

  <div class="form-group">
  <label for="Friends_Canada">Do you or your partner have close family members who are Permanent Residents or Citizens of Canada?</label>
   
    <div class="form-check">
      <label>
        <input class="form-check-input" class="form-check-input" type="radio" name="Friends_Canada" value="Yes" checked />Yes
      </label>
      </div>

    <div class="form-check">
      <label>
        <input class="form-check-input" class="form-check-input" type="radio" name="Friends_Canada" value="No" />No
      </label>
    </div>
  </div>
 </fieldset>


<!-- ENGLISH LANGUAGE TEST -->
<fieldset>
 <legend>English Language Test</legend>

  <div class="form-group">
	  <label for="Taken_Test">Have you taken an IELTS or CELPIP English language test? </label>
   
    <div class="form-check">
      <label>
       <input class="form-check-input" class="form-check-input" type="radio" name="Taken_Test" value="Yes" checked/>Yes
      </label>
    </div>

    <div class="form-check">
      <label>
        <input class="form-check-input" class="form-check-input" type="radio" name="Taken_Test" value="No" />No
      </label>
    </div>
  </div>

  <div class="form-group">
    <label for="Test_Date">If yes what was the test date?</label>
    <input class="form-control" type="date"  id="Test_Date" name="Test_Date"  />
  </div>

  <div class="form-group">
    <label>What type of test was it?</label>
  	<div class="form-check">
 	   <label>
      <input class="form-check-input" class="form-check-input" type="radio" name="Taken_Test_Type" value="General" />General
      </label>
 	  </div>

    <div class="form-check">
      <label>
        <input class="form-check-input" class="form-check-input" type="radio" name="Taken_Test_Type" value="Academic" />Academic
      </label>
    </div>
  </div>
  
  <div class="form-group">
    <label>What were your test scores?</label>
    <div class="form-row">
      <div class="form-group col-sm-2">
        <label id="Reading_Score" for="Reading_Score">Reading</label>
        <input class="form-control" type="text" name="Reading_Score"  />
      </div>
      <div class="form-group col-sm-2">
        <label id="label_Wrting_Score" for="Wrting_Score">Writing</label>
        <input class="form-control" type="text" name="Wrting_Score" />
      </div>
      <div class="form-group col-sm-2">
        <label id="label_Speaking_Score" for="Speaking_Score">Speaking</label>
        <input class="form-control" type="text" name="Speaking_Score" />
      </div>
      <div class="form-group col-sm-2">
        <label id="label_Listening_Score" for="Listening_Score">Listening</label>
        <input class="form-control" type="text" id="Listening_Score" name="Listening_Score" />
      </div>
    </div>
  </div>
 </fieldset>

  <!-- EDUCATION -->

 <fieldset>
  <legend>EDUCATION</legend>

  <input class="form-control" type="text" placeholder="Most Recent Education" readonly>

  <div class="form-group">
    <label for="Edu_Start_Date1">From (YYYY-MM)*</label>
    <input class="form-control" type="date"  id="Edu_Start_Date1" name="edu_rom" required />
  </div>

  <div class="form-group">
    <label class="" id="label_Edu_Finish_Date1" for="Edu_Finish_Date1">To (YYYY-MM)*</label>
    <input class="form-control" type="date"  id="Edu_Finish_Date1" name="Edu_Finish_Date1" required />
  </div>
  
  <div class="form-group">
    <label class="" id="label_School1" for="School1">Name of School*</label>
    <input class="form-control" type="text" id="School1" name="School1" required />
  </div>
  
  <div class="form-group">
    <label class="" id="label_School_Origin1" for="School_Origin1">City and Country*</label>
    <input class="form-control" type="text" id="School_Origin1" name="School_Origin1" required />
    </div>
  
  <div class="form-group">
    <label class="" id="label_Degree_Awarded1" for="Degree_Awarded1">Type of Degree*</label>
    <input class="form-control" type="text" id="Degree_Awarded1" name="Degree_Awarded1" required />
   </div>
  
  <div class="form-group">
    <label class="" id="label_Studied1" for="Studied1">Area of Study*</label>
    <input class="form-control" type="text" id="Studied1" name="Studied1" required />
  </div>
  
  <input class="form-control" type="text" placeholder="Other Previous Education" readonly>
  
  <div class="form-group">
    <label id="label_Edu_Start_Date2" for="Edu_Start_Date2">From (YYYY-MM)</label>
    <input class="form-control" type="date"  id="Edu_Start_Date2" name="edu_rom" />
  </div>
  
  <div class="form-group">
    <label label id="label_Edu_Finish_Date2" for="Edu_Finish_Date2">To (YYYY-MM)</label>
    <input class="form-control" type="date"  id="Edu_Finish_Date2" name="Edu_Finish_Date2"  />
  </div>
  
  <div class="form-group">
    <label id="label_School2" for="School2">Name of School</label>
    <input class="form-control" type="text" id="School2" name="School2"  />
  </div>
  
  <div class="form-group">
    <label id="label_School_Origin2" for="School_Origin2">City and Country</label>
    <input class="form-control" type="text" id="School_Origin2" name="School_Origin2" />
  </div>
  
  <div class="form-group">
    <label id="label_Degree_Awarded2" for="Degree_Awarded2">Type of Degree</label>
    <input class="form-control" type="text" id="Degree_Awarded2" name="Degree_Awarded2"  />
  </div>
  
  <div class="form-group">
    <label id="label_Studied2" for="Studied2">Area of Study</label>
    <input class="form-control" type="text" id="Studied2" name="Studied2"  />
  </div>

 </fieldset>

  <!-- EMPLOYMENT HISTORY MOST RECENT  -->
 <fieldset>

  <legend>Employment</legend>

  <input class="form-control" type="text" placeholder="Most Recent Employment" readonly>
  
  <div class="form-group">
  	<label class="" id="label_Job_From1" for="Job_From1">From (YYYY-MM)*</label>
    <input class="form-control" type="date" id="Job_From1" name="Job_From1" required />
  </div>
  
  <div class="form-group">
  	<label id="label_emp_to" for="Job_To1">To (YYYY-MM)</label>
    <input class="form-control" type="date" id="Job_To1" name="Job_To1" />
  </div>
  
  <div class="form-group">
    <label class="" id="label_Job_Title1" for="Job_Title1">Job Title*</label>
    <input class="form-control" type="text" id="Job_Title1" required />
  </div>
  
  <div class="form-group">
  	<label class="" id="label_job-place" for="Job_Place1">City/Town and Country*</label>
    <input class="form-control" type="text" id="Job_Place1" name="Job_Place1" required />
  </div>
  
  <div class="form-group">
  	<label class="" id="label_Employer_Name1" for="Employer_Name1">Name of Employer*</label>
     <input class="form-control" type="text" id="Employer_Name1" required />
  </div>
  
  <div class="form-group">
  	<label class="item radioLabel" id="label_canadian_work" for="Canadian_Work1">Was it work in Canada</label>
    
    <div class="form-check">
      <label>
        <input class="form-check-input" type="radio" name="Canadian_Work1" value="Yes" />Yes
      </label>
  	</div>

    <div class="form-check">
      <label>
      <input class="form-check-input" type="radio"  name="Canadian_Work1" value="No" />No
      </label>
    </div>
 	</div>

  <input class="form-control" type="text" placeholder="Other Previous Employment" readonly>

  
  <div class="form-group">
    <label id="label_Job_From2" for="Job_From2">From (YYYY-MM)</label>
    <input class="form-control" type="date" id="Job_From2" name="Job_From2"  />
  </div>
  
  <div class="form-group">
  	<label id="label_emp_to" for="Job_To2">To (YYYY-MM)</label>
    <input class="form-control" type="date" id="Job_To2" name="Job_To2" />
  </div>
  
  <div class="form-group">
  	<label id="label_Job_Title2" for="Job_Title2">Job Title</label>
    <input class="form-control" type="text" id="Job_Title2" />
  </div>
  
  <div class="form-group">
  	<label id="label_job-place" for="Job_Place2">City and Country</label>
    <input class="form-control" type="text" id="Job_Place2" name="Job_Place2" />
  </div>
  
  <div class="form-group">
  	<label id="label_Employer_Name2" for="Employer_Name2">Name of Employer</label>
     <input class="form-control" type="text" id="Employer_Name2" />
  </div>
  
  <div class="form-group">
  	<label class="item radioLabel" id="label_canadian_work" for="Canadian_Work2">Was it work in Canada</label>
    
    <div class="form-check">
      <label>
        <input class="form-check-input" type="radio" name="Canadian_Work2" value="Yes" />Yes
      </label>
        </div>

      <div class="form-check">
        <label>
        <input class="form-check-input" type="radio" name="Canadian_Work2" value="No" />No
      </label>
 	  </div>
  </div>
 </fieldset>


 <!-- TRAVEL FOR THE LAST 10 YEARS (DO NOT INCLUDE TRIPS IN OR TO YOUR COUNTRY OF ORIGIN) -->


 <fieldset>
	<legend>TRAVEL FOR THE LAST 10 YEARS</legend>
  <i>*DO NOT INCLUDE TRIPS IN OR TO YOUR COUNTRY OF ORIGIN</i>
  <input class="form-control" type="text" placeholder="Most Recent Trip Taken" readonly>
  
  
  <div class="form-group">
    <label id="label_Travel_From1" for="Travel_From1">From (YYYY-MM)</label>
    <input class="form-control" type="date" id="Travel_From1" name="Travel_From1"  />
  </div>
  
  <div class="form-group">
  	<label id="label_Travel_To1" for="Travel_To1">To(YYYY-MM)</label>
    <input class="form-control" type="date" id="Travel_To1" name="Travel_To1"  />
  </div>
  
  <div class="form-group">
  	<label id="label_Travel_Place1" for="Travel_Place1">City and Country</label>
    <input class="form-control" type="text" id="Travel_Place1" name="Travel_Place1"  />
  </div>
  
  <div class="form-group">
  	<label id="label_Travel_Purpose1" for="Travel_Purpose1">Purpose of Trip</label>
     <input class="form-control" type="text" id="Travel_Purpose1" name="Travel_Purpose1" />
  </div>
  
  <div class="form-group">
  	<label class="item radioLabel" id="label_Visa_Issued1" for="Visa_Issued1">Visa Issued</label>
    
    <div class="form-check">
      <label>
        <input class="form-check-input" type="radio" name="Visa_Issued1" value="Yes" />Yes
      </label>
  	</div>

    <div class="form-check">
     <label>
      <input class="form-check-input" type="radio" name="Visa_Issued1" value="No" />No
     </label>
    </div>
 	</div>

   <input class="form-control" type="text" placeholder="Other Previous Trip Taken" readonly>

  
  <div class="form-group">
  	<label id="label_Travel_From2" for="Travel_From2">From (YYYY-MM)</label>
   	<input class="form-control" type="date" id="Travel_From2" name="Travel_From2"  />
  </div>
  
  <div class="form-group">
  	<label id="label_Travel_To2" for="Travel_To2">To(YYYY-MM)</label>
    <input class="form-control" type="date" id="Travel_To2" name="Travel_To2"  />
  </div>
  
  <div class="form-group">
  	<label id="label_Travel_Place2" for="Travel_Place2">City and Country</label>
    <input class="form-control" type="text" id="Travel_Place2" name="Travel_Place2"  />
  </div>
  
  <div class="form-group">
  	<label id="label_Travel_Purpose2" for="Travel_Purpose2">Purpose of Trip</label>
    <input class="form-control" type="text" id="Travel_Purpose2" name="Travel_Purpose2" />
  </div>
  
  <div class="form-group">
    <label class="item radioLabel" id="label_Visa_Issued2" for="Visa_Issued2">Visa Issued</label>
    
    <div class="form-check">
 	    <label>
      	<input class="form-check-input" type="radio" name="Visa_Issued2" value="Yes" />Yes
      </label>
  	</div>

    <div class="form-check">
    <label>
      <input class="form-check-input" type="radio" name="Visa_Issued2" value="No" />No
    </label>
    </div>
  </div>
</fieldset>

  <!-- ADDITIONAL QUESTIONS  -->

<fieldset>

  <legend>ADDITIONAL QUESTIONS</legend>

  
  <div class="form-group">
    <label for="Convicted_Crime">Have you or your spouse ever been convicted of or currently subject to any criminal proceeding in any country?</label>

    <div class="form-check">
      <label>
      <input class="form-check-input" type="radio" name="Convicted_Crime" value="Yes" />Yes
      </label>
    </div>

    <div class="form-check">
      <label>
        <input class="form-check-input" type="radio" name="Convicted_Crime" value="No" required />No
      </label>
    </div>
  </div>
  
  <div class="form-group">

   <label for="Claimed_Refugee">Previously sought refugee status in Canada or elsewhere?</label>

 	  <div class="form-check">
	   <label>
    	<input class="form-check-input" type="radio" name="Claimed_Refugee" value="Yes" />Yes
     </label>
  	</div>

    <div class="form-check">
      <label>
        <input class="form-check-input" type="radio" name="Claimed_Refugee" value="No" required />No
      </label>
    </div>
  </div>
  
  <div class="form-group">

    <label for="Refused_Admission">Been refused admission to Canada OR any other country?</label>

 		<div class="form-check">
 	  	<label>
       <input class="form-check-input" type="radio" name="Refused_Admission" value="Yes" />Yes
      </label>
		</div>

    <div class="form-check">
      <label>
        <input class="form-check-input" type="radio" name="Refused_Admission" value="No"  required />No
      </label>
    </div>
  </div>
  
  <div class="form-group">
  
    <label for="Mental_Condition"> Had a serious disease or mental disorder?</label>

    <div class="form-check">
 	    <label>
      	<input class="form-check-input" type="radio" name="Mental_Condition" value="Yes" />Yes
      </label>
  	</div>

    <div class="form-check">
      <label>
        <input class="form-check-input" type="radio" name="Mental_Condition" value="No" />No
      </label>
 	  </div>
  </div>

  <div class="form-group">
    <label class="item radioLabel" id="Hear_About_Us" for="Hear_About_Us"> How did you hear about us? </label>

    <select id="Hear_About_Us" name="Hear_About_Us">
          <option value="family/friend">A family member or friend</option>
          <option value="search">Search Engine (ie Google/Bing)</option>
          <option value="facebook">Facebook</option>
          <option value="Twitter">Twitter</option>
          <option value="LinkedIn">LinkedIn</option>
          <option value="other">Other</option>

      </select>
  </div>
  
  <div class="form-group">

    <label class="item radioLabel" id="Other_About_Us" for="Other_About_Us"> If other please specify: </label>
    <input class="form-control" type="text" id="Other_About_Us" />
  </div>
  
  
  <div class="form-group">
  <input type="hidden" name="MAX_FILE_SIZE" value="10000000" >Attach your Resume* <br>(Word or PDF format only)*:</label>
  <div class="custom-file mb-3">
    <input type="file" class="custom-file-input" id="validatedCustomFile"name="userfile" required>
    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
  </div>
  </div>

  
  <div class="form-check">
  	<label>
  	<input class="form-check-input" type="checkbox"  name="Newsletter" value="Yes" />Yes, please send me a newsletter from JobCanada.org!
  	</label>
  </div>

  <div class="g-recaptcha" data-sitekey="6LflOuIZAAAAAJ428uQ2LbwR8yr_ZP00ynbdxbl5" data-callback="verifyCaptcha"></div>
  <div id="g-recaptcha-error"></div>

  </fieldset>

  <button class="btn btn-primary" type="submit">submit</button>
  <button class="btn btn-primary" type="reset">reset</button>
 



<!-- 
  <div class="switch">
  	
  	<input type="checkbox" id="Newsletter" name="Newsletter" value="Yes" /> 
  	<label for="Newsletter" class="switch-label">Yes, please send me a newsletter from JobCanada.org!</label>
  </div> -->