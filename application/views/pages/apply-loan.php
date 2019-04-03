

<br>
<?php $idn=$this->input->get_post('id');?>
<form method="post" action="<?=base_url("loanclerk/inserLoan/?id="."$idn")?>">
<table class="table table-bordered" id="member" style="margin: 2% 0% 10% 0%;">
	
                    
        <hr>
        <h4 style="margin-left: 40%;">Review Loan Application</h4>
                    
        <tr>
            <th>Account Number <hr>
                <p style="padding:5%;"><?=$res->row('account_number')?><input type="hidden"  name="acc_num" value="<?=$res->row('account_number')?>"></p>
                <hr>
            </th>
            <th >Name <hr>
                <p style="padding:4%;"><?=$res->row('LastName')?> <?=$res->row('FirstName')?> <?=$res->row('MiddleName')?><input type="hidden" name="name" value="<?=$res->row('LastName')?> <?=$res->row('FirstName')?> <?=$res->row('MiddleName')?>"></p>
                <hr>
            </th>
            <th width="200">Max Loan <hr>
                <?php $num = $res3->row('MemTotalBalance')+$res3->row('MemberTotalSharesCapital')*3.5;?>
            	<p>P<?=number_format($num,2)?></p>
            	<hr>
            </th>
            <th width="200">Loan <hr>
            	<input type="text" name="loan" value="">
            	<hr>
            </th>
            <th>Type <hr>
            	<select class="select-menu form-control" name="type" >
                <?php foreach ($res1->result() as $row) {
                	echo "<option>".$row->LoanName."</option>";
                } 
                ?>
            	</select>
            	<hr>
            </th>
            <th>Action <hr>
            	<button class="btn btn-success" id="submit">Submit</button>
        		<a class="btn btn-danger"  href="<?=base_url()?>">Cancel</a>
            	<hr>
            </th>
        </tr>       
	</table>
</form>     
               