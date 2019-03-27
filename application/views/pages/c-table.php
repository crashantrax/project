<table class="table">
                    <tr>
                        <th>#</th>
                        <th>Account No.</th>
                        <th>Name</th>
                        <th>Date Created</th>
                        <th>Actions</th>
                    </tr>


                    <?php
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

                        echo "<tr class=".$num."><td>".$count."</td>";
                        echo "<td>".$row->account_number."</td>";
                        echo "<td><a href=''>".$row->FirstName." ".$row->MiddleName." ".$row->LastName."</a></td>";
                        echo "<td>".$row->date_created."</td>";
                        $count++;
                        
                    ?>
                    <td>
                        <a href="" style="width: 30%" class="btn btn-primary">Withdraw</a>
                        <a href="" style="width: 30%" class="btn btn-success">Deposit</a>
                        <a href="" style="width: 30%" class="btn btn-danger">Delete</a>
                    </td>
                    <?php } ?>
                    </tr>
                </table>
               