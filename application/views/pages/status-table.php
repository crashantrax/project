<center>
<div style="margin-top: 2%;background-color:white; " class="table-responsive">
<div style="width: 100%;background-color: white;text-align: center;padding: 10px;"><h4>Business Background</h4></div>
<center>
<table class="table table table-hover table-bordered" id="member" style="background-color: white;margin-top: 0%;width: 90%;">
    <tr style="background-color: #F3F8FB;">
        <th>Member Account ID</th>
        <th>Member Business ID </th>
        <th>Type Of Business </th>
        <th>Address</th>
        <th>Ownership</th>
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
        // echo "<td>".$row->account_number."</td>";
        echo "<td>".$row->MemberAccountID."</td>";
        echo "<td>".$row->MemberBusinessID."</td>";
        echo "<td>".$row->TypeOfBusiness."</td>";
        echo "<td>".$row->Address."</td>";
        echo "<td>".$row->Ownership."</td>";
        $count++;
                        
    ?>
    <?php } ?>
     <?php }else{
         echo "<tr><td>0 Results<td>";
     }?> 
     <tr style="background-color: #F3F8FB;">
        <th>Capital</th>
        <th>Trade Name</th>
        <th>Telephone</th>
        <th>Year Started</th>
        <th></th>
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
        // echo "<td>".$row->account_number."</td>";
        echo "<td>".$row->Capital."</td>";
        echo "<td>".$row->TradeName."</td>";
        echo "<td>".$row->TelNo."</td>";
        echo "<td>".$row->YearStarted."</td>";
        $count++;
                        
    ?>
    <?php } ?>
     <?php }else{
         echo "<tr><td>0 Results<td>";
     }?> 

 </table> </div>
               
               