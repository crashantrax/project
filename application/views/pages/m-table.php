<div style="margin-top: 2%;background-color:white; " class="table-responsive">
<div style="width: 100%;background-color: white;text-align: center;padding: 10px;"><h4>Records</h4></div>
<table class="table table table-hover table-bordered" id="member" style="background-color: white;margin-top: 0%;">
                    <tr>
                        <th>#</th>
                        <!-- <th>Account No.</th> -->
                        <th>Name</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>


                    <?php
                    if($res->num_rows()>0){
                        $count=1;
                    $counter=1;
                    foreach ($res->result() as $row){
                        if($counter==1){
                            $num = "";
                            $counter=0;
                        }
                        else{
                            $num = "none";
                            $counter=1;
                        }
                        echo "<tr id='col' class=".$num."><td>".$count."</td>";
                        // echo "<td>".$row->account_number."</td>";
                        echo "<td><a href=".base_url("manager/profile/?id=$row->MemberAccountID").">".ucfirst($row->LastName).", ".ucfirst($row->MiddleName)." ".ucfirst($row->FirstName)."</a></td>";
                        echo "<td>".$row->date_created."</td>";
                        echo "<td>".$row->Status."</td>";
                        $count++;
                        
                    ?>

                    <?php } ?>
                    <?php }else{
                        echo "<tr><td>0 Results<td>";
                    }?> 
                    </tr>

                </table>
            </div>
               