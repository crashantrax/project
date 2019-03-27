<div style="margin-top: 2%;background-color:#4db6ac; ">
<div style="width: 100%;background-color: #4db6ac;text-align: center;padding: 10px;"><h4>History</h4></div>
<table class="table" id="member" style="background-color: #4db6ac;margin-top: 0%;">
                    <tr>
                        <th>#</th>
                        <th>Account No.</th>
                        <th>Name</th>
                        <th>Date Created</th>
                        <th>Status</th>
                    </tr>


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
                        echo "<tr id='col' class=".$num."><td>".$count."</td>";
                        echo "<td>".$row->account_number."</td>";
                        echo "<td><a href=".base_url('cashier/profile').">".ucfirst($row->LastName).", ".ucfirst($row->MiddleName)." ".ucfirst($row->FirstName)."</a></td>";
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
               