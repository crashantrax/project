		
			<div class="container1">
				<div class="col-md-12">
					<?php $idn=$this->input->get_post('id');?>
					<form  method="POST" action="<?=base_url("cashier/inserWithdraw/?id="."$idn")?>">
						<div class="panel-primary">
							<table align="center" border="0" class="table">
		                        <tr>
		                            <tr>
		                                <th colspan="3"><div align="center"><?=$prof->row('account_number')."-".ucfirst($prof->row('LastName').", ".ucfirst($prof->row('FirstName'))." ".ucfirst($prof->row('MiddleName')))?></div></th>
		                            </tr>
		                            <tr>
		                                <th colspan="3"><div align="center">Account Balance:<?php
		                                if($res->row('MemTotalBalance')==""){
		                                	echo "<b style='color: red;}'> Insuficient Fund!</b>";
		                                	$bool="disabled";
		                                }else{
		                                	$num = $res->row('MemTotalBalance');
		                                	$bool="enable";
		                                	echo " P".number_format($num,2);
		                                }

		                                 ?></div></th>
		                            </tr>
		                            <tr>
		                                <td>
		                                    <div class="register-header" >Amount Withdraw:</div>
		                                    <div class="register-input"><input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" style="width: 100%;" class="form-control"   type="text" name="amt_with" <?=$bool?> ></div>
		                                </td>     
		            				</tr>
		                            <tr>
		                                <td>
		                                   <div class="register-input" style="position: absolute;transform: translate(-50%,0);left: 50%;"><a class="btn btn-danger" href="<?=base_url()?>">Cancel</a>&nbsp;&nbsp;&nbsp;<button href="" class="btn btn-success">Confirm</button></div>
		                                </td>
		                                
		                            </tr>
		                        </tr>
                    		</table>
						</div>
					</form>
				</div>	
			</div>	
		

	