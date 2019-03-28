
        
            <div class="container1" style="height: 180px;">
                <div class="col-md-12">
                        <div class="panel-primary">
                            <table align="center" border="0" class="table">
                                <tr>
                                    <tr>
                                        <th><div align="center"><?=$res->row('account_number')."-".ucfirst($res->row('LastName').", ".ucfirst($res->row('FirstName'))." ".ucfirst($res->row('MiddleName')))?></div></th>
                                    </tr>
                                    <tr>
                                        <th><div align="center">Account Balance: P<?=$res->row('MemTotalBalance')?></div></th>
                                    </tr>
                                    <tr>
                                        <th><div align="center">Account Share: P<?=$res->row('MemberTotalSharesCapital')?></div></th>
                                    </tr>
                                    <tr>
                                        <td><div style="text-align: center;"><a  class="btn btn-success" href="">View More</a>&nbsp;<a style="width: 105px;"  class="btn btn-primary" href="">Print</a></div></td>
                                       
                                    </tr>
                                </tr>
                            </table>
                        </div>
                </div>  
            </div>  

        

<table class="table table-bordered" style="margin-top: 30px;background: #ececec;">
                <tr>
                    <th colspan="3">Withdrawal Logs</th>
                </tr>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Amount</th>
                </tr>
                <?php 
                    if($res->row('WithdrawalAmount')!=null){
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
                            echo "<td>".$row->Date."</td>";
                            echo "<td>".$row->WithdrawalAmount."</td></tr>";
                            $count++;
                        }
                    }
                ?>
</table>



<table class="table table-bordered" style="margin-top: 30px;background: #ececec;">
                <tr>
                    <th colspan="3">Deposit Logs</th>
                </tr>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Amount</th>
                </tr>
                <?php 
                var_dump($res);exit;
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
                        echo "<td>".$row->Date."</td>";
                        echo "<td>".$row->WithdrawalAmount."</td></tr>";
                        $count++;
                    }
                ?>
</table>