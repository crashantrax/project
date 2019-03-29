

<br>
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
                    
                </table>
               