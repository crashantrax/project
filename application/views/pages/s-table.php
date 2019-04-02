
<!-- <center>
<h2><span class="border border-primary">Request Access to the Management System</span></h2>
</center>
<table class="table" id="member">
                    <?php
                    if($res->num_rows()>0){
                        $count=1;
                    $counter=1;
                    foreach ($res->result() as $row){
                        if($counter==1){
                            $num = "color";
                            $counter=0;
                        }
                        else{
                            $num = "none";
                            $counter=1;
                        }
                    ?>
                    
                    <hr>
                    <h5 style="margin-left: 50%;padding-bottom: 10px;">Profile</h5>
                    
                    <tr>
                        <th>
                            <img style="width: 200px;border:1px solid black;border-radius: 50%;padding: 10px;" src="<?= base_url('public/contents-css/logo/admin.png');?>">
                        </th>
                        <th style="margin-left: -30%;">Name <br>
                            <?php echo "<a href=".base_url("manager/profile/?id=$row->StaffProfileID").">".ucfirst($row->LastName).", ".ucfirst($row->MiddleName)." ".ucfirst($row->FirstName)."</a>"; ?>
                            <hr>
                            Date Of Birth <br>
                            <?php echo "<p>".$row->DOB."</p>"; ?>
                        </th>
                        <th width="200">Sex <br>
                            <?php echo "<p>".$row->Sex."</p>"; ?>
                            <hr>
                            Nationality <br>
                            <?php echo "<p>".$row->Nationality."</p>"; ?>
                        </th>
                        <th width="200">Telephone <br>
                            <?php echo "<p>".$row->TelNo."</p>"; ?>
                            <hr>
                            Blood Type <br>
                            <?php echo "<p>".$row->BloodType."</p>"; ?>
                        </th>
                        <th width="200">Place Of Birth <br>
                            <?php echo "<p>".$row->PlaceofBirth."</p>"; ?>
                            <hr>
                            Address <br>
                            <?php echo "<p>".$row->Address."</p>"; ?>
                        </th>
                        <th>Civil Status <br>
                            <?php echo "<p>".$row->CivilStatus."</p>"; ?>
                        </th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th><a href="javascript:confirmDelete('<?=base_url("cashier/delete/".$row->StaffProfileID); ?>')" style="width: 100%;" class="btn btn-primary">Edit</a></th>
                        <th><a href="javascript:confirmDelete('<?=base_url("cashier/delete/".$row->StaffProfileID); ?>')" style="width: 100%;" class="btn btn-danger">Delete</a></th>
                    </tr>
                    <?php }?>
                    <?php
                        }
                        else
                        {
                        echo "<tr><td>0 Results<td>";
                        }
                        ?>
                    
                </table> -->

<br>
<br>
<!-- <center>
<h2><span class="border border-primary" style="padding: 10px;">Request Access to the Management System</span></h2>
</center> -->
                <table class="table" id="member" style="width: 630px; margin-left: 350px;" border="0">
                    <?php
                    if($res->num_rows()>0){
                        $count=1;
                    $counter=1;
                    foreach ($res->result() as $row){
                        if($counter==1){
                            $num = "color";
                            $counter=0;
                        }
                        else{
                            $num = "none";
                            $counter=1;
                        }
                    ?>
                    
                    <hr>

                        <td>
                            <h5><center>You have been sent the following request for Approval</center></h5>
                            <br>
                            <img style="width: 200px;border:1px solid black;border-radius: 50%;padding: 10px; margin-left: 200px;" src="<?= base_url('public/contents-css/logo/admin.png');?>">
                            <h1 style="text-align: center;">Personal Information</h1><br>

                            Name <br>
                            <?php echo "<p".base_url("manager/profile/?id=$row->MemberAccountID").">".ucfirst($row->LastName).", ".ucfirst($row->MiddleName)." ".ucfirst($row->FirstName)."</p>"; ?>
                            <hr>
                            Date Of Birth <br>
                            <?php echo "<p>".$row->DOB."</p>"; ?>
                            <hr>Sex <br>
                            <?php echo "<p>".$row->Sex."</p>"; ?>
                            <hr>
                            Nationality <br>
                            <?php echo "<p>".$row->Nationality."</p>"; ?>
                            <hr>Telephone <br>
                            <?php echo "<p>".$row->TelNo."</p>"; ?>
                            <hr>
                            Blood Type <br>
                            <?php echo "<p>".$row->BloodType."</p>"; ?>
                            <hr>Place Of Birth <br>
                            <?php echo "<p>".$row->PlaceofBirth."</p>"; ?>
                            <hr>Address <br>
                            <?php echo "<p>".$row->Address."</p>"; ?>
                            <hr>
                            <h1 style="text-align: center;">Business Information</h1><br>
                            <hr>Type of Business <br>
                            <?php echo "<p>".$row->TypeOfBusiness."</p>"; ?> 
                            <hr>Address <br>
                            <?php echo "<p>".$row->Address."</p>"; ?>
                            <hr>Business Started <br>
                            <?php echo "<p>".$row->date_created."</p>"; ?>
                            <hr>Gross Income<br>
                            <?php echo "<p>".$row->GrossIncome."</p>"; ?>
                            <hr>Ownership<br>
                            <?php echo "<p>".$row->Ownership."</p>"; ?>  
                            <hr>Capital<br>
                            <?php echo "<p>".$row->Capital."</p>"; ?>
                            <hr>Trade Name<br>
                            <?php echo "<p>".$row->TradeName."</p>"; ?>
                            <hr> 
                            <h1 style="text-align: center;">Employment Information</h1><br>
                            <hr>Name of Firm<br>
                            <?php echo "<p>".$row->NameofFirm."</p>"; ?> 
                            <hr>Address <br>
                            <?php echo "<p>".$row->Address."</p>"; ?>
                            <hr>Employment Started<br>
                            <?php echo "<p>".$row->YearStarted."</p>"; ?> 
                            <hr>Gross Income<br>
                            <?php echo "<p>".$row->GrossIncome."</p>"; ?>
                            <hr>Position <br>
                            <?php echo "<p>".$row->Position."</p>"; ?> 
                             <hr>Take Home Pay <br>
                            <?php echo "<p>".$row->NetTakeHomePay."</p>"; ?>
                          




                            <br>
                            <br>
                            <h6>Please Approve or Reject this request using the buttons below</h6>
                            <br>
                            <h6>When Rejecting the request, please include the reason for rejection in the response mail.</h6>
                            <br>
                            <br>
                            <hr>
                                <a href="javascript:confirmDelete('<?=base_url("cashier/delete/".$row->MemberAccountID); ?>')" style="width: 100%;" class="btn btn-primary">Approve</a>
                            <hr><a href="javascript:confirmDelete('<?=base_url("cashier/delete/".$row->MemberAccountID); ?>')" style="width:100%;" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Reject</a>
                                  <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                      
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                          <h4 class="modal-title">Hi <?php echo "<a href=".base_url("manager/profile/?id=$row->MemberAccountID").">".ucfirst($row->LastName).", ".ucfirst($row->MiddleName)." ".ucfirst($row->FirstName)."</a>"; ?> </h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="form-group">
                                              <label for="exampleFormControlTextarea2">State your Reason</label>
                                              <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
                                            </div>

                                        </div>
                                        
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-primary">Send</button>
                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                        
                                      </div>
                                    </div>
                                  </div>

                        </td>

        

                    <?php }?>
                    <?php
                        }
                        else
                        {
                        echo "<tr><td>0 Results<td>";
                        }
                        ?>
                    
                </table>
               
               