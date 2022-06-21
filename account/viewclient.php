<div class="udex-main" id="main">
    <ul class="breadcrumb">
		<li class="breadcrumb-item"><a >Home</a></li>
		<li class="breadcrumb-item active">Tracking Info</li>
	</ul><h1 class="clearfix">Tracking Info<div class="float-right"></div></h1>

	<div class="bg-white mt-3">
        <?php $d = $user->singleClient('tracking',$_GET['view']); ?>  
        <h3 class="p-4 d-flex">Details <a href="home?single=<?php echo $d->id?>" class="ml-auto btn btn-warning">Edit</a></h3>
        <div class="table-responsive">
           <table class="table table-condensed table-bordered table-striped mytable">
                <p class="p-4 d-flex"> SHIPPING HISTORY</p>
                <tr style="color:white" class="bg-dark">
                    <th>SN</th>
                    <th>Location</th>
                    <th>Details</th>
                    <th>Action</th>
                    <th>Date</th>
                </tr>
                <tbody>
                <?php
                    $data = $user->getRecodesWithPagination('shipping_history','where','client_id','=',$d->id);
                    if($data !=="nill"):
                       foreach($data as $key =>$val):
                 ?>
                        <tr style="padding:2px !important;">
                            <td><?php echo ++$key?></td>
                            <td><?php echo $val->location?></td>
                            <td><?php echo $val->details?></td>
                            <td>
                                <a class="edit" href="javascipt:void(0)" edid="<?php echo $val->id?>"  data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a> ||
                                <a id="pat" class="delete" href="javascipt:void(0)" did="<?php echo $val->id?>" style="color:red"><i class="fas fa-trash"></i></a>||
                            </td>
                            <td><?php echo $val->date ?></td>
                        </tr>
                   <?php endforeach;?>
                <?php endif;?>
                </tbody>
            </table>
            <?php echo $user->paginationfOR('shipping_history',$_GET['view']);?>
            <table class="table table-condensed  table-bordered table-striped mytable">
                <tr class="bg-dark text-light">
                    <td colspan="2">SHIPPING STATUS</td>
                </tr>
                <tr>
                    <td>Tracking Number</td>
                    <td><strong><?php echo $d->tracking_number?></strong></td>
                </tr>
                <tr>
                    <td>Photo</td>
                    <td><img class='img-fluid' style='width:90px;max-height:200px; border-radius:20%;'src=<?php echo  'images/'.$d->image?>></td>
                </tr>
                <tr>
                    <td>Full Name</td>
                    <td><strong><?php echo $d->full_name?></strong></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><strong><?php echo $d->email?></strong></td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td><strong><?php echo $d->country?></strong></td>
                </tr>
                <tr>
                    <td>State</td>
                    <td><strong><?php echo $d->state?></strong></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><strong><?php echo $d->city?></strong></td>
                </tr>
                <tr>
                    <td>Home Address</td>
                    <td><strong><?php echo $d->home_address?></strong></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><strong><?php echo $d->phone?></strong></td>
                </tr>
                <tr>
                    <td>Dob</td>
                    <td><strong><?php echo $d->dob?></strong></td>
                </tr>
                <tr>
                    <td>Sex</td>
                    <td><strong><?php echo $d->sex?></strong></td>
                </tr>
                 <tr>
                    <td>ID Type</td>
                    <td><strong><?php echo $d->id_type?></strong></td>
                </tr>
                <tr>
                    <td>Date of Issue</td>
                    <td><strong><?php echo $d->doi?></strong></td>
                </tr>
                <tr>
                    <td>Date of Expiration</td>
                    <td><strong><?php echo $d->doe?></strong></td>
                </tr>
                <tr>
                    <td>Issuer Ath</td>
                    <td><strong><?php echo $d->issue_auth?></strong></td>
                </tr>
                <tr>
                    <td>Position</td>
                    <td><strong><?php echo $d->job?></strong></td>
                </tr>
                <tr>
                    <td>Amount Earn</td>
                    <td><strong><?php echo $d->income?></strong></td>
                </tr>
                <tr>
                    <td>Are u Muslium</td>
                    <td><strong><?php echo $d->muslim?></strong></td>
                </tr>
                <tr>
                    <td>I need your support </td>
                    <td><strong><?php echo $d->support?></strong></td>
                </tr>
                <tr>
                    <td>I want to be a volunteer</td>
                    <td><strong><?php echo $d->volunteer?></strong></td>
                </tr>
                <tr>
                    <td>I have work with an NGO/Charity Organisation Before</td>
                    <td><strong><?php echo $d->work_with_charity?></strong></td>
                </tr>
                <tr>
                    <td>I Have an Charity/NGO Experience</td>
                    <td><strong><?php echo $d->charity_experience?></strong></td>
                </tr>
                <tr>
                    <td>Muslim with Charity i would like you to employ me</td>
                    <td><strong><?php echo $d->muslim_with?></strong></td>
                </tr>
                <tr>
                    <td>NoN-Muslim with Charity i would like you to employ me</td>
                    <td><strong><?php echo $d->non_muslim_with?></strong></td>
                </tr>
                <tr>
                    <td>Muslim without Charity i would like start with MRW</td>
                    <td><strong><?php echo $d->muslim_without?></strong></td>
                </tr>
                <tr>
                    <td>Non-Muslim without Charity i would like start with MRW</td>
                    <td><strong>no</strong></td>
                </tr>
                <tr>
                    <td>I just need support,to support those in need around me</td>
                    <td><strong><?php echo $d->just_need?></strong></td>
                </tr>
                <tr>
                    <td> I will only request for allowance instead of monthy payments </td>
                    <td><strong><?php echo $d->only_allowance?></strong></td>
                </tr>
                <tr>
                    <td>Estimated value of my application in US Dollar</td>
                    <td><strong><?php echo $d->estimated_value_of_apps?></strong></td>
                </tr>
                <tr>
                    <td>Purpose of Applicatiion </td>
                    <td><strong><?php echo $d->purpose?></strong></td>
                </tr>
                <tr>
                    <td>No of Persons i want help this application</td>
                    <td><strong><?php echo $d->persons?></strong></td>
                </tr>
                <tr>
                    <td>Monthy Allowance </td>
                    <td><strong><?php echo $d->month_allw?></strong></td>
                </tr>
                <tr>
                    <td>Expected Yearly Allowance</td>
                    <td><strong><?php echo $d->yearly_allw?></strong></td>
                </tr>
                <tr>
                    <td>I will be open for Audits and to give account </td>
                    <td><strong><?php echo $d->audit?></strong></td>
                </tr>
                <tr>
                    <td>I will also provide warehouse where and AIDS will be stored safely</td>
                    <td><strong><?php echo $d->store?></strong></td>
                </tr>
                <tr>
                    <td>I will not sell the relief materials given to me for personal gain </td>
                    <td><strong><?php echo $d->sell?></strong></td>
                </tr>
                <tr>
                    <td>Am ready to receive any help, aids materials, supports and ready for the converying it to my location</td>
                    <td><strong><?php echo $d->converying?></strong></td>
                </tr>
                <tr>
                    <td>Im ready to provide any further information in this application if need</td>
                    <td><strong><?php echo $d->info?></strong></td>
                </tr>
                <tr>
                    <td>To provide any security guarantee for this application before receving the approved aid or support</td>
                    <td><strong><?php echo $d->guarantee?></strong></td>
                </tr>
                <tr>
                    <td>How dit you hear about us</td>
                    <td><strong><?php echo $d->hear?></strong></td>
                </tr>
                <tr>
                    <td>Method of Application</td>
                    <td><strong><?php echo $d->method?></strong></td>
                </tr>
               
                
            </table>
        </div>
	</div>
    <div class="dash_footer mt-4 small">
	<p>
		Copyright © admin.
		<br />
	</p>
	</div>	
</div>
<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
       <!-- Modal body -->
       <div class="modal-body">
            <form id="editForm">
                <div class="form-group">
                <p id="error"></p>
                    <label for="email">Details:</label>
                    <input type="text" class="form-control" name="details" id="details">
                    <input type="hidden" class="form-control" name="id" id="id">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <a href="#" data-dismiss="modal">Close</a>
      </div>

    </div>
  </div>
</div>
<script>
 $(document).ready(function(){
    $("body").delegate('.delete','click',function(e){
        e.preventDefault();
       
        let id   = $(this).attr('did');

        $.ajax({
            url:"modules/jsphp.php",
            method:"post",
            cache:false,
            async: true,
            data:{
                del:1,
                id:id
            },
            success:function(data){
                if(data){
                    location.reload()
                }
            },
            error:function(err){
                console.log(err);
            }
        })
    })

    $("body").delegate('.edit','click',function(e){ /// get single shipping history
        e.preventDefault();
       
        let id   = $(this).attr('edid');
        var row;

        $.ajax({
            url:"modules/jsphp.php",
            method:"post",
            cache:false,
            async: true,
            data:{
                edit:1,
                id:id
            },
            success:function(data){
                if(data){
                   row = JSON.parse(data);
                   $("#details").val(row.details);
                   $("#id").val(row.id);
                }
            },
            error:function(err){
                console.log(err);
            }
        })
    })
     $("#editForm").on('submit',function(e){ /// edit single shipping history
        e.preventDefault();
       
        let id   = $("#id").val();
        let details = $("#details").val();

        var row;

        $.ajax({
            url:"modules/jsphp.php",
            method:"post",
            cache:false,
            async: true,
            data:{
                editForms:1,
                real:details,
                id:id
            },
            success:function(data){
                if(data){
                   $("#error").html("<p class='alert alert-success'>Edit successfully</p>");
                   $("#details").val("");
                }
            },
            error:function(err){
                console.log(err);
            }
        })
    })
   
 });
 </script>
<script>
if ($(window).width() > 992) {
	boxPosition = $(".udex-sidebar").offset().top;
	$(window).scroll(function(){
	   var isFixed = $(".udex-sidebar").css("position") === "fixed";
	   if($(window).scrollTop() > boxPosition && !isFixed){
				$(".udex-sidebar").css({position:"fixed", top: "0px"});
	   }else if($(window).scrollTop() < boxPosition){
			$(".udex-sidebar").css({position:"absolute", top: "auto"});
	   }
	});
}
</script>

<script>
$("#menu_btn").click( function(){
	$("#mySidebar").toggle();
	$("#main, .udex_footer").toggleClass("cubic-left");
	$("body").toggleClass("udex_overflow");
});
$("#account_menu").click( function(){
	$("#myAccount").toggle();
	$("#main, .udex_footer").toggleClass("cubic-right");
	$("body").toggleClass("udex_overflow");
});
</script>

<style>
  .skiptranslate {
    display: none !important;?>
  }
  body {
    top: 0 !important;
  }
</style>


</body>
</html>