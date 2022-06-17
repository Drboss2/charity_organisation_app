<div class="udex-main" id="main">
    <ul class="breadcrumb">
		<li class="breadcrumb-item"><a >Home</a></li>
		<li class="breadcrumb-item active">Edit Info</li>
	</ul>
    <hr>
    <h1 class="clearfix" style='font-size:17px'>Edit Tracking Info<div class="float-right"></div></h1>
    <hr>
	<div class="bg-white mt-3">
        <?php $d = $user->singleClient('tracking',$_GET['single']); ?>
        <div class='col-lg-12 mt-4'>
            <div class="table-responsive mt-3">
                <a data-toggle="collapse" data-target="#demo" class="ml-auto btn btn-warning" style="margin-top:10px;" href="#">Add shipping history</a>
                <h3 class="p-4 d-flex">Details <a href="home?view=<?php echo $d->id?>" class="ml-auto btn btn-warning">Back</a></h3>
                <br>
                <div id="success">
                </div>
                <table id="demo" class="table table-bordered table-hover table-striped bg-white collapse mytable">
                     <tr class="bg-dark text-light">
                        <td colspan="2">SHIPPING HISTORY</td>
                    </tr>
                    <form id="d">
                        <td>Location</td>
                            <td><input class="form-control" name="location" id="location" type="text"></td>
                           
                        </tr>
                        <td>Details</td>
                            <td><strong><textarea rows="5" name="sadd" id="sadd" class="form-control" required></textarea></td>
                            <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $d->id?>">
                            <input type="hidden" class="form-control" name="track" id="track" value="<?php echo $d->tracking_number?>">
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td><strong><input type="date" class="form-control" name="sdate" id="sdate" value="<?php echo $d->sender?>" required></strong></td>
                        </tr>
                        <tr>
                            <td colspan="2"><button id='submit' class="btn btn-primary btn-sm" type="submit">Add</button>
                               <button style='display:none' id='disabled' disabled class="btn btn-danger btn-sm" type="submit">Loading</button>
                            </td>
                        </tr>
                    </form>
                </table>
                <table class="table table-condensed table-bordered table-hover table-striped bg-white mytable">
                    <!-- <form method="post" action="modules/editclient.php">

                        <tr>
                            <td>Name</td>
                            <td><input type="text" class="form-control" name="full_name" value="<?php echo $d->full_name?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><strong><input type="text" class="form-control" name="email" value="<?php echo $d->email?>"></strong></td>
                        </tr>
                        <tr>
                            <td>Country</td>
                            <td><strong><input type="text" class="form-control" name="country" value="<?php echo $d->country?>"></strong></td>
                        </tr>
                        <tr>
                            <td>State</td>
                            <td><strong><input type="text" class="form-control" name="state" value="<?php echo $d->state?>"></strong></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td><strong><input type="text" class="form-control" name="city" value="<?php echo $d->city?>"></strong></td>
                        </tr>
                        <tr>
                            <td>Home Address</td>
                            <td><strong><input type="text" class="form-control" name="home_address" value="<?php echo $d->home_address?>"></strong></td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td><strong><input type="text" class="form-control" name='dob' value="<?php echo $d->dob?>" readonly></strong></td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td><strong><input type="text" class="form-control" name="phone" value="<?php echo $d->phone?>"></strong></td>
                        </tr>
                        <tr>
                            <td>Sex</td>
                            <td><strong><input type="text" class="form-control" name="sex" value="<?php echo $d->sex?>"></strong></td>
                        </tr>
                        <tr>
                            <td>ID Type</td>
                            <td><strong><input type="text" class="form-control" name="id_type" value="<?php echo $d->id_type?>"></strong></td>
                        </tr>
                        <tr>
                            <td>Date of Issue</td>
                            <td><strong><input type="text" class="form-control" name="doi" value="<?php echo $d->doi?>"></strong></td>
                        </tr>
                        <tr>
                            <td>Date of Expiration</td>
                            <td><strong><input type="text" class="form-control" name="doe" value="<?php echo $d->doe?>"></strong></td>
                        </tr>
                        <tr>
                            <td>Issuer Authority</td>
                            <td><strong><input type="text" class="form-control" name='issue_auth' value="<?php echo $d->issue_auth?>" ></strong></td>
                        </tr>
                        <tr>
                            <td>Profession</td>
                            <td><strong><input type="text" class="form-control" name="job" value="<?php echo $d->job?>"></strong></td>
                        </tr>
                        <tr>
                            <td>Income</td>
                            <td><strong><input type="text" class="form-control" name="sender" value="<?php echo $d->income?>"></strong></td>
                        </tr>
                        <tr>
                            <td>Are u Muslim</td>
                            <td><strong><input type="text" class="form-control" name="muslim" value="<?php echo $d->muslim?>"></strong></td>
                        </tr>
                        <tr>
                            <td>But I need your support </td>
                            <td><strong><input type="text" class="form-control" name="support" value="<?php echo $d->support?>"></strong></td>
                        </tr>
                        <tr>
                            <td>I want to be a volunteer</td>
                            <td><strong><input type="text" class="form-control" name="volunteer" value="<?php echo $d->volunteer?>"></strong></td>
                        </tr>
                        <tr>
                            <td>I have work with an NGO Before</td>
                            <td><strong><input type="text" class="form-control" name="work_with_charity" value="<?php echo $d->work_with_charity?>"></strong></td>
                        </tr>
                        <tr>
                            <td>I a Muslim with NGO,i would like you to employ me.</td>
                            <td><strong><input type="text" class="form-control" name='muslim_with' value="<?php echo $d->muslim_with?>"></strong></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><strong><input type="text" class="form-control" name="name" value="<?php echo $d->sender?>"></strong></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><strong><input type="text" class="form-control" name="sender" value="<?php echo $d->sender_address?>"></strong></td>
                        </tr>
                        <tr>
                            <td>Country</td>
                            <td><strong><input type="text" class="form-control" name="country" value="<?php echo $d->sender_country?>"></strong></td>
                        </tr>
                        <tr>
                            <td>Receiver Name</td>
                            <td><strong><input type="text" class="form-control" name="receiver_name" value="<?php echo $d->receiver_name?>"></strong></td>
                        </tr>
                        <tr>
                            <td>Receiver Address</td>
                            <td><strong><input type="text" class="form-control" name="receiver_address" value="<?php echo $d->receiver_address?>"></strong></td>
                        </tr>
                        <tr>
                            <td>Package Content</td>
                            <td><strong><input type="text" class="form-control" name="package_content" value="<?php echo $d->package_content?>"></strong></td>
                        </tr>
                        <tr>
                            <td>Dispatch From</td>
                            <td><strong><input type="text" class="form-control" name="dispatch_form" value="<?php echo $d->dispatch_form?>"></strong></td>
                        </tr>
                        <tr>
                            <td>Delivery Country</td>
                            <td><strong><input type="text" class="form-control" name="delivery_country" value="<?php echo $d->delivery_country?>"></strong></td>
                        </tr>
                        <tr>
                            <td>Delivery Type</td>
                            <td><strong><input type="text" class="form-control" name="delivery_type" value="<?php echo $d->delivery_type?>"></strong></td>
                        </tr>
                        <tr>
                            <td>Dispatch Date</td>
                            <td><strong><input type="text" class="form-control" name="dispatch_date" value="<?php echo $d->dispatch_date?>"></strong></td>
                        </tr>
                        <tr>
                            <td>Arrival Type</td>
                            <td><strong><input type="text" class="form-control" name="arrival_date" value="<?php echo $d->arrival_date?>"></strong></td>
                        </tr>
                          <tr>
                            <td>Progress Bar</td>
                            <td><strong><input type="text" class="form-control" name="progress" value="<?php echo $d->progress?>"></strong></td>
                        </tr>
                        <tr>
                            <td>Date Created</td>
                            <td><strong><?php echo $d->date?></strong></td>
                        </tr>
                        <tr class="d-flex">
                        <td colspan="2"><button name="client" class="btn btn-primary btn-sm" type="submit">Update</button></td>
                        </tr>
                    </form> -->
                    <form method="POST" action="modules/editclient.php" enctype='multipart/form-data'>
                        <p><u>Contact Information</u></p>
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Tracking Number</label>
                                <input type="hidden" name="id" class="form-control" value="<?php echo $d->id?>">
                                <input type="text" class="form-control" value="<?php echo $d->tracking_number?>" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label>Full Name</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" required value='
                                <?php echo $d->full_name?>'>
                                <input type="hidden" name="csfr" value="<?php echo rand(10000000000000,90000000009)?>" >
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email</label>
                                <input type="email" class="form-control" id="email" name="email" value='<?php echo $d->email?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Country</label>
                                <input type="text" class="form-control" id="country" name="country" value='<?php echo $d->country?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>State of Resident</label>
                                <input type="text" class="form-control" id="state" name="state"  value='<?php echo $d->state?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>City/Province</label>
                                <input type="text" class="form-control" id="city" name="city" value='<?php echo $d->city?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Home Address</label>
                                <input type="text" class="form-control" id="home_address" name="home_address" value='<?php echo $d->home_address?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob" value='<?php echo $d->dob?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value='<?php echo $d->phone?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Sex</label>
                                <select class="form-control" name='sex' required>
                                    <option><?php echo $d->sex?></option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <p><u>ID Information</u></p>
                        <div class='row'>
                        <div class="form-group col-lg-4">
                                <label>ID Type</label>
                                <select class="form-control" name='id_type'>
                                    <option><?php echo $d->id_type?></option>
                                    <option>Passport</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Date of Issue</label>
                                <input type="date" class="form-control" id="doi" name="doi" value='<?php echo $d->doi?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Expiration Date</label>
                                <input type="date" class="form-control" id="doe" name="doe" value='<?php echo $d->doe?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Issuer Authority</label>
                                <input type="text" class="form-control" id="issue_auth" name="issue_auth" value='<?php echo $d->issue_auth?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Photo</label>
                                <input type="file" class="form-control" id="file" name="file" required>
                                <img class='img-fluid mt-1' style='width:70px;max-height:200px;'src=<?php echo  'images/'.$d->image?>>
                            </div>
                        </div>
                        <p><u>Profession</u></p>
                        <div class='row'>
                        <div class="form-group col-lg-4">
                                <label>Type of Job</label>
                                <input type="text" class="form-control" id="job" name="job" value='<?php echo $d->job?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Job Position</label>
                                <input type="text" class="form-control" id="job_position" name="job_position" value='ni' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Annual Income</label>
                                <input type="text" class="form-control" id="income" name="income" value='<?php echo $d->income?>' required>
                            </div>
                        </div>
                        <p><u>Religion Affilation</u></p>
                        <div class='row'>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'>I am a Muslim</label>
                                <?php if($d->muslim == 'yes'): ?>
                                    <label>Yes</label>
                                    <input type="radio" checked  id="muslim" name="muslim" value='yes'>
                                    <label>No</label>
                                    <input type="radio" id="muslim" name="muslim" value='no'>
                                <?php else:?>
                                    <label>Yes</label>
                                    <input type="radio" id="muslim" name="muslim" value='yes'>
                                    <label>No</label>
                                    <input type="radio" checked  id="muslim" name="muslim" value='no'>
                                <?php endif;?>
                            </div>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'>But I need your support</label>
                                <?php if($d->support == 'yes'):?>
                                    <label>Yes</label>
                                    <input type="radio" checked  id="suport" name="support" value='yes'>
                                    <label>No</label>
                                    <input type="radio"  id="support" name="support" value='no'>
                                <?php else:?>
                                    <label>Yes</label>
                                    <input type="radio"  id="suport" name="support" value='yes'>
                                    <label>No</label>
                                    <input type="radio" checked  id="support" name="support" value='no'>
                                <?php endif;?>
                            </div>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'>I want to be a volunteer</label>
                                <?php if ($d->volunteer == 'yes'): ?>
                                    <label>Yes</label>
                                    <input type="radio" checked id="volunteer" name="volunteer" value='yes'>
                                    <label>No</label>
                                    <input type="radio" id="volunteer" name="volunteer" value='no'>
                                <?php else:?>
                                    <label>Yes</label>
                                    <input type="radio"  id="volunteer" name="volunteer" value='yes'>
                                    <label>No</label>
                                    <input type="radio" checked id="volunteer" name="volunteer" value='no'>
                                <?php endif;?>
                            </div>
                        </div>
                        <p><u>NGO Experince</u></p>
                        <div class='row'>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'>I have work with an NGO/Charity Organisation Before</label>
                                <?php if($d->work_with_charity == 'yes'):?>
                                    <label>Yes</label>
                                    <input type="radio" checked  id="work_with_charity" name="work_with_charity" value='yes'>
                                    <label>No</label>
                                    <input type="radio"  id="work_with_charity" name="work_with_charity" value='no'>
                                <?php else:?>
                                    <label>Yes</label>
                                    <input type="radio"  id="work_with_charity" name="work_with_charity" value='yes'>
                                    <label>No</label>
                                    <input type="radio" checked id="work_with_charity" name="work_with_charity" value='no'>
                                <?php endif;?>   
                            </div>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'>I Have an Charity/NGO Experience</label>
                                <?php if($d->charity_experience == 'yes'):?>
                                    <label>Yes</label>
                                    <input type="radio" checked id="charity_experience" name="charity_experience" value='yes'>
                                    <label>No</label>
                                    <input type="radio" id="charity_experience" name="charity_experience" value='no'>
                                <?php else:?>
                                    <label>Yes</label>
                                    <input type="radio" id="charity_experience" name="charity_experience" value='yes'>
                                    <label>No</label>
                                    <input type="radio" checked id="charity_experience" name="charity_experience" value='no'>
                                <?php endif;?>
                            </div>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'>I a Muslim with NGO/Charity, Aids and Relief work experience and i would like you to employ me.</label>
                                <?php if($d->muslim_with == 'yes'):?>
                                    <label>Yes</label>
                                    <input type="radio" checked id="charity_experience" name="muslim_with" value='yes'>
                                    <label>No</label>
                                    <input type="radio" id="charity_experience" name="muslim_with" value='no'>
                                <?php else:?>
                                    <label>Yes</label>
                                    <input type="radio" id="charity_experience" name="muslim_with" value='yes'>
                                    <label>No</label>
                                    <input type="radio" checked id="charity_experience" name="muslim_with" value='no'>
                                <?php endif;?>
                            </div>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'>I a Non-Muslim with NGO/Charity, Aids and Relief work experience and i would like you to employ me.</label>
                                <?php if($d->non_muslim_with == 'yes'):?>
                                    <label>Yes</label>
                                    <input type="radio" checked id="charity_experience" name="non_muslim_with" value='yes'>
                                    <label>No</label>
                                    <input type="radio" id="charity_experience" name="non_muslim_with" value='no'>
                                <?php else:?>
                                    <label>Yes</label>
                                    <input type="radio"  id="charity_experience" name="non_muslim_with" value='yes'>
                                    <label>No</label>
                                    <input type="radio" checked id="charity_experience" name="non_muslim_with" value='no'>
                                <?php endif?>
                            </div>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'>I a Muslim without NGO/Charity, Aids and Relief work experience and i would like start with MRW</label>
                                <?php if($d->muslim_without =='yes'):?>
                                    <label>Yes</label>
                                    <input type="radio" checked id="charity_experience" name="muslim_without" value='yes'>
                                    <label>No</label>
                                    <input type="radio" id="charity_experience" name="muslim_without" value='no'>
                                <?php else:?>
                                    <label>Yes</label>
                                    <input type="radio" id="charity_experience" name="muslim_without" value='yes'>
                                    <label>No</label>
                                    <input type="radio" checked id="charity_experience" name="muslim_without" value='no'>
                                <?php endif;?>
                            </div>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'>I a Non-Muslim without NGO/Charity, Aids and Relief work experience and i would like start with MRW</label>
                                <label>Yes</label>
                                <input type="radio" id="non_muslim_without" name="non_muslim_without" value='yes'>
                                <label>No</label>
                                <input type="radio" checked id="non_muslim_without" name="non_muslim_without" value='no'>
                            </div>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'>I just need this support, Aids and Relief to support those in  need around me</label>
                                <?php if($d->just_need == 'yes'):?>
                                    <label>Yes</label>
                                    <input type="radio" checked id="just_need" name="just_need" value='yes'>
                                    <label>No</label>
                                    <input type="radio" id="just_need" name="just_need" value='no'>
                                <?php else:?>
                                    <label>Yes</label>
                                    <input type="radio" id="just_need" name="just_need" value='yes'>
                                    <label>No</label>
                                    <input type="radio" checked id="just_need" name="just_need" value='no'>
                                <?php endif;?>
                            </div>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'>I just need this support/ financial assistants for religion purpose and  Am capable of distrubuting it</label>
                                <?php if($d->religion_purpose== 'yes'):?>
                                    <label>Yes</label>
                                    <input type="radio" checked id="just_need" name="religion_purpose" value='yes'>
                                    <label>No</label>
                                    <input type="radio" id="just_need" name="religion_purpose" value='no'>
                                <?php else:?>
                                    <label>Yes</label>
                                    <input type="radio" id="just_need" name="religion_purpose" value='yes'>
                                    <label>No</label>
                                    <input type="radio" checked id="just_need" name="religion_purpose" value='no'>
                                <?php endif;?>
                            </div>
                        </div>
                        <p><u>Allowance Stats</u></p>
                        <div class='row'>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'>I applying for the Country/ State i want to work in as volunteer, I will only request for allowance instead of monthy payments.</label>
                                <?php if($d->only_allowance == ''):?>
                                    <label>Yes</label>
                                    <input type="radio" checked  id="only_allowance" name="only_allowance" value='yes'>
                                    <label>No</label>
                                    <input type="radio"  id="only_allowance" name="only_allowance" value='no'>
                                <?php else:?>
                                    <label>Yes</label>
                                    <input type="radio"  id="only_allowance" name="only_allowance" value='yes'>
                                    <label>No</label>
                                    <input type="radio" checked  id="only_allowance" name="only_allowance" value='no'>
                                <?php endif?>
                            </div>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'>Estimated value of my application in  US Dollar</label>
                                <select class="form-control" name='estimated_value_of_apps'  require>
                                    <option><?php echo $d->estimated_value_of_apps ?></option>
                                    <option>100000 and above</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'>Purpose of Applicatiion</label>
                                <input type="text" class='form-control'  id="purpose" name="purpose"  value='<?php echo $d->purpose?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'>No of Persons i want help this application</label>
                                <input type="text" class='form-control'  id="persons" name="persons" value='<?php echo $d->persons?>' required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'>Monthy Allowance</label>
                                <input type="text" class='form-control'  id="month_allw" name="month_allw"  value=<?php echo $d->month_allw?> required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'>Expected Yearly Allowance</label>
                                <input type="text" class='form-control'  id="yearly_allw" name="yearly_allw" value=<?php echo $d->yearly_allw?> required>
                            </div>
                        </div>
                        <p><u>Audits</u></p>
                        <div class='row'>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'>I will be open for Audits and to give account on how i discharge my duty with MRW</label>
                                <?php if($d->audit== 'yes'):?>
                                    <label>Yes</label>
                                    <input type="radio" checked id="audit" name="audit" value='yes'>
                                    <label>No</label>
                                    <input type="radio" id="audit" name="audit" value='no'>
                                <?php else:?>
                                    <label>Yes</label>
                                    <input type="radio" id="audit" name="audit" value='yes'>
                                    <label>No</label>
                                    <input type="radio" checked id="audit" name="audit" value='no'>
                                <?php endif;?>
                            </div>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'> I will also provide warehouse where and AIDS OR Relief materials will be stored safely</label>
                                <?php if($d->store == 'yes'):?>
                                    <label>Yes</label>
                                    <input type="radio" checked id="store" name="store" value='yes'>
                                    <label>No</label>
                                    <input type="radio" id="store" name="store" value='no'>    
                                <?php else:?>  
                                    <label>Yes</label>
                                    <input type="radio" id="store" name="store" value='yes'>
                                    <label>No</label>
                                    <input type="radio" checked id="store" name="store" value='no'>  
                                <?php endif;?>    
                            </div>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'>I will not sell the relief materials given to me for personal gain</label>
                                <?php if($d->sell =='yes'):?>
                                    <label>Yes</label>
                                    <input type="radio" checked id="sell" name="sell" value='yes'>
                                    <label>No</label>
                                    <input type="radio" id="sell" name="sell" value='no'> 
                                <?php else:?>
                                    <label>Yes</label>
                                    <input type="radio" id="sell" name="sell" value='yes'>
                                    <label>No</label>
                                    <input type="radio" checked id="sell" name="sell" value='no'> 
                                <?php endif?>
                            </div>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'>Am ready to receive any help, aids materials, supports and ready for the converying it to my location</label>
                                <?php if($d->converying == 'yes'):?>
                                    <label>Yes</label>
                                    <input type="radio" checked id="converying" name="converying" value='yes'>
                                    <label>No</label>
                                    <input type="radio" id="converying" name="converying" value='no'>
                                <?php else: ?>
                                    <label>Yes</label>
                                    <input type="radio" id="converying" name="converying" value='yes'>
                                    <label>No</label>
                                    <input type="radio" checked id="converying" name="converying" value='no'>   
                                <?php endif;?>            
                            </div>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'>Im ready to provide any further information in this application if need</label>
                                <?php if($d->info == 'yes'):?>
                                    <label>Yes</label>
                                    <input type="radio" checked id="info" name="info" value='yes'>
                                    <label>No</label>
                                    <input type="radio" id="info" name="info" value='no'> 
                                <?php else:?>
                                    <label>Yes</label>
                                    <input type="radio" id="info" name="info" value='yes'>
                                    <label>No</label>
                                    <input type="radio" checked id="info" name="info" value='no'>
                                <?php endif;?> 
                            </div>
                            <div class="form-group col-lg-4">
                                <label style='font-size:16px;font-weight:500'>Im ready to  provide any security guarantee for this application if need before receving the approved aid or support</label>
                                <?php if($d->guarantee == 'yes'):?>
                                    <label>Yes</label>
                                    <input type="radio" checked id="guarantee" name="guarantee" value='yes'>
                                    <label>No</label>
                                    <input type="radio" id="guarantee" name="guarantee" value='no'>
                                <?php else:?>
                                    <label>Yes</label>
                                    <input type="radio" id="guarantee" name="guarantee" value='yes'>
                                    <label>No</label>
                                    <input type="radio" checked id="guarantee" name="guarantee" value='no'>
                                <?php endif?>
                            </div>
                        </div>
                        <p><u>Application Processing</u></p>
                        <div class='row'>
                            <div class="form-group col-lg-4">
                                <label>How did you hear about us</label>
                                <input type="text" class="form-control" id="hear" value='<?php echo $d->hear?>' name="hear" required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Application Approval in %</label>
                                <input type="text" class="form-control" id="progress" value='<?php echo $d->progress?>' name="progress" required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Method of Application </label>
                                <input type="text" class="form-control" id="method" value='<?php echo $d->method?>' name="method" required>
                            </div>
                        </div>
                        <button id="check" name="client" class="btn btn-primary btn-sm">update</button>
                    </form>
                </table>
            </div>
        </div>
    </div>
     <div class="dash_footer mt-4 small">
	<p>
		Copyright © admin.
		<br />
	</p>
	</div>
</div>

<script>
 $(document).ready(function(){
    $("#d").on("submit",function(e){

        e.preventDefault();

        let sadd = $("#sadd").val();
        let date = $("#sdate").val();
        let id   = $("#id").val();
        let track  = $("#track").val();
        let location  = $("#location").val();



        $.ajax({
            url:"modules/jsphp.php",
            method:"post",
            cache:false,
            async: true,
            data:{
                set:1,
                sadd: sadd,
                date: date,
                track:track,
                location:location,
                id:id
            },
            beforeSend:function(){
                $('#submit').hide();
                $('#disabled').show();
            },
            success:function(data){
                $('#submit').show();
                $('#disabled').hide();
                console.log(data);
                if(data == 'inserted'){
                    $("#success").html('<p class="alert alert-success">Shipping details added</p>');
                      $("#sadd").val("");
                     $("#sdate").val("");
                }
            },
            error:function(err){
                console.log(err);
            }
        })
    })
 });

</script>