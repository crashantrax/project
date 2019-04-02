
        
            <div class="container1" style="height: 180px;">
                <div class="col-md-12">
                        <div class="panel-primary">
                            <table align="center" border="0" class="table table-bordered">
                                <tr>
                                    <tr>
                                        <th><div align="center"><?=$profi->row('account_number')."-".ucfirst($profi->row('LastName').", ".ucfirst($profi->row('FirstName'))." ".ucfirst($profi->row('MiddleName')))?></div></th>
                                    </tr>
                                    <tr>
                                        <?php $num1 = $contri->row('MemTotalBalance');?>
                                        <th><div align="center">Account Balance: P<?=number_format($num1,2)?></div></th>
                                    </tr>
                                    <tr>
                                        <?php $num2 = $contri->row('MemberTotalSharesCapital')?>
                                        <th><div align="center">Account Total Share: P<?=number_format($num2,2)?></div></th>
                                    </tr>
                                    <tr>
                                        <?php $idn=$this->input->get_post('id');?>
                                        <td><div style="text-align: center;"><a  class="btn btn-success" href="<?=base_url("cashier/view/?id="."$idn")?>">View More</a>&nbsp;<a href="javascript:window.print()" style="width: 105px;"  class="btn btn-primary" href="">Print</a></div></td>
                                       
                                    </tr>
                                </tr>
                            </table>
                        </div>
                </div>  
            </div>  

        

<table class="table table-bordered" style="margin-top: 30px;background: #fff;">
                <tr>
                    <th colspan="3">Withdrawal Logs</th>
                </tr>
                <tr>
                    <th style="width: 16%;">#</th>
                    <th style="width: 46.5%;">Date</th>
                    <th>Amount</th>
                </tr>
                <?php 
                   if($with->num_rows()!=0){
                            $count=1;
                            $counter=1;
                            foreach ($with->result() as $row){
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
                                $wda = $row->WithdrawalAmount;
                                echo "<td>"."P".number_format($wda,2)."</td></tr>";
                                $count++;
                            }
                        }else{
                            echo "<tr><td colspan='3'>Results 0</td></tr>";
                        }
                    
                ?>
</table>



<table class="table table-bordered" style="margin-top: 30px;background: #fff;">
                <tr>
                    <th colspan="3">Deposit Logs</th>
                </tr>
                <tr>
                    <th style="width: 16%;">#</th>
                    <th style="width: 46.5%;">Date</th>
                    <th>Amount</th>
                </tr>
                <?php 
                if($depo->num_rows()!=0){
                    $count=1;
                    $counter=1;
                    foreach ($depo->result() as $row){
                        if($counter==1){
                            $num = "color";
                            $counter=0;
                        }
                        else{
                            $num = "none";
                            $counter=1;
                        }
                        echo "<tr class=".$num."><td>".$count."</td>";
                        echo "<td>".$row->PaymentDate."</td>";
                        $dpa = $row->MemberDepositAmount;
                        echo "<td>"."P".number_format($dpa,2)."</td></tr>";
                        $count++;
                    }
                }else{
                     echo "<tr><td colspan='3'>Results 0</td></tr>";
                    }

                ?>
</table>

<table class="table table-bordered" style="margin-top: 30px;background: #fff;">
                <tr>
                    <th colspan="3">Share Logs</th>
                </tr>
                <tr>
                    <th style="width: 16%;">#</th>
                    <th style="width: 46.5%;">Date</th>
                    <th>Amount</th>
                </tr>
                <?php 
                if($depo->num_rows()!=0){
                    $count=1;
                    $counter=1;
                    foreach ($shares->result() as $row){
                        if($counter==1){
                            $num = "color";
                            $counter=0;
                        }
                        else{
                            $num = "none";
                            $counter=1;
                        }
                        echo "<tr class=".$num."><td>".$count."</td>";
                        echo "<td>".$row->PaymentDate."</td>";
                        $dpa1 = $row->MemberSharesAmount;
                        echo "<td>"."P".number_format($dpa1,2)."</td></tr>";
                        $count++;
                    }
                }else{
                     echo "<tr><td colspan='3'>Results 0</td></tr>";
                    }

                ?>
</table>