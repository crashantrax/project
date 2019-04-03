<div style="margin-top: 2%;background-color:white; " class="table-responsive">
<div style="width: 100%;background-color: white;text-align: center;padding: 10px;"><h4>Overview</h4></div>
<center>
<table class="table table table-hover table-bordered" id="member" style="background-color: white;margin-top: 0%;width: 80%;">
                    <tr style="background-color: #F3F8FB;">
                        <th>#</th>
                        <th>Check Date</th>
                        <th>Amount</th>
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
                        echo "<td>".$row->LoanDate."</td>";
                        echo "<td>".$row->LoanAmount."</td>";
                        echo "<td>".$row->status."</td>";
                        $count++;
                        
                    ?>
                    <?php } ?>
                    <?php }else{
                        echo "<tr><td>0 Results<td>";
                    }?> 
                    </tr>

                </table>
            </div>
               