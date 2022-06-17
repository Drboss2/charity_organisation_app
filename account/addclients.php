<div class="udex-main" id="main">
    <ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Home</a></li>
		<li class="breadcrumb-item active">Client</li>
	</ul>
    <hr>
    <h1 class="clearfix" style='font-size:17px'>Add Client
        <div class="float-right"></div>
    </h1>
    <hr>
    <form method="POST" action="modules/addclient.php" enctype='multipart/form-data'>
    <p><u>Contact Information</u></p>
        <div class="row">
            <div class="col-lg-4">
                <label>Full Name</label>
                <input type="text" class="form-control" id="full_name" name="full_name" required>
                <input type="hidden" name="csfr" value="<?php echo rand(10000000000000,90000000009)?>" >
            </div>
            <div class="form-group col-lg-4">
                <label>Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
             <div class="form-group col-lg-4">
                <label>Country</label>
                <input type="text" class="form-control" id="country" name="country" required>
            </div>
            <div class="form-group col-lg-4">
                <label>State of Resident</label>
                <input type="text" class="form-control" id="state" name="state" required>
            </div>
            <div class="form-group col-lg-4">
                <label>City/Province</label>
                <input type="text" class="form-control" id="city" name="city" required>
            </div>
            <div class="form-group col-lg-4">
                <label>Home Address</label>
                <input type="text" class="form-control" id="home_address" name="home_address" required>
            </div>
            <div class="form-group col-lg-4">
                <label>Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
            <div class="form-group col-lg-4">
                <label>Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group col-lg-4">
                <label>Sex</label>
                <select class="form-control" name='sex' required>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>
           
        </div>
        <p><u>ID Information</u></p>
        <div class='row'>
           <div class="form-group col-lg-4">
                <label>ID Type</label>
                <select class="form-control" name='id_type'>
                    <option>Driver License</option>
                    <option>National ID</option>
                    <option>Passport</option>
                </select>
            </div>
            <div class="form-group col-lg-4">
                <label>Date of Issue</label>
                <input type="date" class="form-control" id="doi" name="doi" required>
            </div>
            <div class="form-group col-lg-4">
                <label>Expiration Date</label>
                <input type="date" class="form-control" id="doe" name="doe" required>
            </div>
            <div class="form-group col-lg-4">
                <label>Issuer Authority</label>
                <input type="text" class="form-control" id="issue_auth" name="issue_auth" required>
            </div>
            <div class="form-group col-lg-4">
                <label>Photo</label>
                <input type="file" class="form-control" id="file" name="file" required>
            </div>
        </div>
        <p><u>Profession</u></p>
        <div class='row'>
           <div class="form-group col-lg-4">
                <label>Type of Job</label>
                <input type="text" class="form-control" id="job" name="job" required>
            </div>
            <div class="form-group col-lg-4">
                <label>Job Position</label>
                <input type="text" class="form-control" id="job_position" name="job_position" required>
            </div>
            <div class="form-group col-lg-4">
                <label>Annual Income</label>
                <input type="text" class="form-control" id="income" name="income" required>
            </div>
        </div>
        <p><u>Religion Affilation</u></p>
        <div class='row'>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'>I am a Muslim</label>
                <label>Yes</label>
                <input type="radio"  id="muslim" name="muslim" value='yes'>
                <label>No</label>
                <input type="radio"  id="muslim" name="muslim" value='no'>
            </div>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'>But I need your support</label>
                <label>Yes</label>
                <input type="radio"  id="suport" name="support" value='yes'>
                <label>No</label>
                <input type="radio"  id="support" name="support" value='no'>
            </div>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'>I want to be a volunteer</label>
                <label>Yes</label>
                <input type="radio" id="volunteer" name="volunteer" value='yes'>
                <label>No</label>
                <input type="radio" id="volunteer" name="volunteer" value='no'>
            </div>
        </div>
        <p><u>NGO Experince</u></p>
        <div class='row'>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'>I have work with an NGO/Charity Organisation Before</label>
                <label>Yes</label>
                <input type="radio"  id="work_with_charity" name="work_with_charity" value='yes'>
                <label>No</label>
                <input type="radio"  id="work_with_charity" name="work_with_charity" value='no'>
            </div>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'>I Have an Charity/NGO Experience</label>
                <label>Yes</label>
                <input type="radio" id="charity_experience" name="charity_experience" value='yes'>
                <label>No</label>
                <input type="radio" id="charity_experience" name="charity_experience" value='no'>
            </div>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'>I a Muslim with NGO/Charity, Aids and Relief work experience and i would like you to employ me.</label>
                <label>Yes</label>
                <input type="radio" id="charity_experience" name="muslim_with" value='yes'>
                <label>No</label>
                <input type="radio" id="charity_experience" name="muslim_with" value='no'>
            </div>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'>I a Non-Muslim with NGO/Charity, Aids and Relief work experience and i would like you to employ me.</label>
                <label>Yes</label>
                <input type="radio" id="charity_experience" name="non_muslim_with" value='yes'>
                <label>No</label>
                <input type="radio" id="charity_experience" name="non_muslim_with" value='no'>
            </div>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'>I a Muslim without NGO/Charity, Aids and Relief work experience and i would like start with MRW</label>
                <label>Yes</label>
                <input type="radio" id="charity_experience" name="muslim_without" value='yes'>
                <label>No</label>
                <input type="radio" id="charity_experience" name="muslim_without" value='no'>
            </div>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'>I a Non-Muslim without NGO/Charity, Aids and Relief work experience and i would like start with MRW</label>
                <label>Yes</label>
                <input type="radio" id="non_muslim_without" name="non_muslim_without" value='yes'>
                <label>No</label>
                <input type="radio" id="non_muslim_without" name="non_muslim_without" value='no'>
            </div>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'>I just need this support, Aids and Relief to support those in  need around me</label>
                <label>Yes</label>
                <input type="radio" id="just_need" name="just_need" value='yes'>
                <label>No</label>
                <input type="radio" id="just_need" name="just_need" value='no'>
            </div>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'>I just need this support/ financial assistants for religion purpose and  Am capable of distrubuting it</label>
                <label>Yes</label>
                <input type="radio" id="just_need" name="religion_purpose" value='yes'>
                <label>No</label>
                <input type="radio" id="just_need" name="religion_purpose" value='no'>
            </div>
        </div>
        <p><u>Allowance Stats</u></p>
        <div class='row'>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'>I applying for the Country/ State i want to work in as volunteer, I will only request for allowance instead of monthy payments.</label>
                <label>Yes</label>
                <input type="radio"  id="only_allowance" name="only_allowance" value='yes'>
                <label>No</label>
                <input type="radio"  id="only_allowance" name="only_allowance" value='no'>
            </div>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'>Estimated value of my application in  US Dollar</label>
                <select class="form-control" name='estimated_value_of_apps' require>
                    <option>100 to 1000</option>
                    <option>1010 to 9999</option>
                    <option>10000 to 100000</option>
                    <option>100000 and above</option>
                </select>
            </div>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'>Purpose of Applicatiion</label>
                <input type="text" class='form-control'  id="purpose" name="purpose"  required>
            </div>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'>No of Persons i want help this application</label>
                <input type="text" class='form-control'  id="persons" name="persons"  required>
            </div>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'>Monthy Allowance</label>
                <input type="text" class='form-control'  id="month_allw" name="month_allw"  required>
            </div>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'>Expected Yearly Allowance</label>
                <input type="text" class='form-control'  id="yearly_allw" name="yearly_allw"  required>
            </div>
        </div>
        <p><u>Audits</u></p>
        <div class='row'>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'>I will be open for Audits and to give account on how i discharge my duty with MRW</label>
                <label>Yes</label>
                <input type="radio" id="audit" name="audit" value='yes'>
                <label>No</label>
                <input type="radio" id="audit" name="audit" value='no'>
            </div>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'> I will also provide warehouse where and AIDS OR Relief materials will be stored safely</label>
                <label>Yes</label>
                <input type="radio" id="store" name="store" value='yes'>
                <label>No</label>
                <input type="radio" id="store" name="store" value='no'>           
             </div>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'>I will not sell the relief materials given to me for personal gain</label>
                <label>Yes</label>
                <input type="radio" id="sell" name="sell" value='yes'>
                <label>No</label>
                <input type="radio" id="sell" name="sell" value='no'>               
            </div>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'>Am ready to receive any help, aids materials, supports and ready for the converying it to my location</label>
                <label>Yes</label>
                <input type="radio" id="converying" name="converying" value='yes'>
                <label>No</label>
                <input type="radio" id="converying" name="converying" value='no'>               
            </div>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'>Im ready to provide any further information in this application if need</label>
                <label>Yes</label>
                <input type="radio" id="info" name="info" value='yes'>
                <label>No</label>
                <input type="radio" id="info" name="info" value='no'> 
            </div>
            <div class="form-group col-lg-4">
                <label style='font-size:14px;font-weight:500'>Im ready to  provide any security guarantee for this application if need before receving the approved aid or support</label>
                <label>Yes</label>
                <input type="radio" id="guarantee" name="guarantee" value='yes'>
                <label>No</label>
                <input type="radio" id="guarantee" name="guarantee" value='no'> 
            </div>
           
        </div>
        <p><u>Application Processing</u></p>
        <div class='row'>
           <div class="form-group col-lg-4">
                <label>How dit you hear about us</label>
                <input type="text" class="form-control" id="hear" name="hear" required>
            </div>
           <div class="form-group col-lg-4">
                <label>Application Approval in %</label>
                <select class="form-control" name='progress'>
                    <option value='1'>1%</option>
                    <option value='5'>5%</option>
                    <option value='10'>10%</option>
                </select>
            </div>
            <div class="form-group col-lg-4">
                <label>Method of Application </label>
                <input type="text" class="form-control" id="method" name="method" required>
            </div>
            <div class="form-group col-lg-4">
                <label>Tracking Number</label>
            <input type="text" class="form-control" id="track" name="track" readonly>
        </div>
        </div>
        
        <button id="check" name="client" class="btn btn-primary btn-sm">CONTINUE</button>
    </form>
   
    <div class="dash_footer mt-4 small">
        <p>
            Copyright © Admin.
            <br/>
        </p>
	</div>	
</div>
<script>
	cons = document.querySelector('#check');
    let div = document.getElementById('track')

    window.onload = function(){
        let r = Math.floor(Math.random() * (000, 990 + 100))

        let ran = Math.floor(Math.random() * (10000000000, 999999999999 + 100));
        div.value = r+"-"+ran
    }
</script>
<style>
    label{
        font-size:14px;
        color:grey;
    }
</style>



