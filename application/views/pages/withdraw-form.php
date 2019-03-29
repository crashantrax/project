		
			<div class="container1">
				<div class="col-md-12">
					<form  method="POST" action="">
						<div class="panel-primary">
							<table align="center" border="0" class="table">
		                        <tr>
		                            <tr>
		                                <th colspan="3"><div align="center"><?=$res->row('account_number')."-".ucfirst($res->row('LastName').", ".ucfirst($res->row('FirstName'))." ".ucfirst($res->row('MiddleName')))?></div></th>
		                            </tr>
		                            <tr>
		                                <th colspan="3"><div align="center">Account Balance:<?php
		                                if($res->row('MemTotalBalance')==""){
		                                	echo "<b style='color: red;
}'> Insuficient Fund!</b>";
		                                }else{
		                                	echo " P".$res->row('MemTotalBalance');
		                                }

		                                 ?></div></th>
		                            </tr>
		                            <tr>
		                                <td>
		                                    <div class="register-header" >Amount Withdraw:</div>
		                                    <div class="register-input"><input style="width: 100%;" class="form-control"   type="text" name="amt_with"></div>
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
		

	