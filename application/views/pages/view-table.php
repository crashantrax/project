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
                    $row = $res->result();
                    for ($x=0;$x<12;$x++){
                        if($counter==1){
                            $num = "";
                            $counter=0;
                        }
                        else{
                            $num = "none";
                            $counter=1;

                        }
                        $date = strtotime('1997-05-05');
                        $new_date = strtotime('+ 1 year', $date);
                        echo "<tr id='col' class=".$num."><td>".$count."</td>";
                        echo "<td>".date('d/m/Y', $new_date)."</td>";
                        echo "<td>".$row->LoanPayPerMonth."</td>";
                        echo "<td>".$row->status."</td></tr>";
                        
                        
                    ?>
                    <?php } ?>
                    <?php }else{
                        echo "<tr><td>0 Results<td>";
                    }?> 
                    </tr>

                </table>
            </div>
               