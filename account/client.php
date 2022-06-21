    <div class="udex-main" id="main">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">All Clients</li>
        </ul>
        <hr>
        <h1 class="clearfix" style='font-size:16px'>All Clients
            <div class="float-right"></div>
        </h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-condensed table-hover mytable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Client Name</th>
                        <th>Country</th>
                        <th>Action</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $data = $user->getRecodesWithPagination('tracking');
                    if($data !=="nill"):
                        foreach($data as $key =>$val):
                ?>
                            <tr>
                                <td><?php echo ++$key?></td>
                                <td><?php echo $val->full_name?></td>
                                <td><?php echo $val->country?></td>
                                <td>
                                    <a href="home?view=<?php echo $val->id?>"><i class="far fa-eye"></i></a> ||
                                    <a style="color:red"  href="home?delete=<?php echo $val->id?>"><i class="fas fa-trash"></i></a>||
                                    <a id="ban" class="ban" href="javascipt:void(0)" did="<?php echo $val->id?>" style="color:red"><i class="fas fa-ban"></i></a>
                                </td>
                                <td><?php echo $val->status?></td>
                                <td><?php echo $val->date ?></td>
                            </tr>
                    <?php endforeach;?>
                    <?php endif;?>
                </tbody>
                    <?php echo $user->pagination('tracking');?>

            </table>
        </div>
    </div>
    <script>

        $(document).on('click','#ban',function(){
            let id  = $(this).attr('did')

            $.ajax({
                url:'modules/jsphp.php',
                method:'post',
                cache:false,
                async: true,
                data:{
                    ban:1,
                    id:id
                },
                success:function(data){
                    if(data){
                        location.reload()
                    }
                },
                error:function(err){
                    console.log(err)
                }

            })
        })
    </script>