<div class="main-container">
    <form id="regForm" method="POST" action="<?php echo base_url('cashier/register_members'); ?>">
  <!-- One "tab" for each step in the form: -->
  <div class="tab" style="background: #ececec;">
            <table align="center" border="0" class="table" >
                        <tr>
                            <tr>
                                <th colspan="3"><div align="center">Personal Information (Required)</div></th>
                            </tr>
                            <tr>
                                
                                <td>
                                    <div  class="register-header" >Firstname:</div>
                                    <div class="register-input"><input id="required" class="form-control" type="text" name="first_name" ></div>
                                </td>
                                <td>
                                    <div class="register-header" >Middlename:</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="middle_name"></div>
                                </td>
                                <td>
                                    <div class="register-header" >Lastname:</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="last_name"></div>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    <div class="register-header" >Place of Birth:</div>
                                    <div class="register-input"><input class="form-control"  type="text" name="place_of_birth"></div>
                                </td>
                                <td style="width: 33%;">
                                    <div class="register-header">Date of Birth:</div>
                                    <div class="form-group">
                                        <table>
                                            <tr>
                                                <td><select class="select-menu form-control" name="year" >
                                                    <?php for($year=date('Y');$year>=1940;$year--){
                                                       echo "<option>".$year."</option>";
                                                    }   
                                                    ?>
                                                    </select>Year
                                                </td>
                                                <td><select class="select-menu form-control" name="month">
                                                    <?php for($month=1;$month<=12;$month++){
                                                        if($month == date('m')){
                                                             echo "<option selected='selected'>".$month."</option>";
                                                        }else{
                                                            echo "<option>".$month."</option>";
                                                        }    
                                                    }   
                                                    ?>
                                                    </select>Month
                                                </td>
                                                <td><select class="select-menu form-control" name="day">
                                                    <?php for($day=1;$day<=date("t", strtotime(date("Y-m-t")));$day++){
                                                        if($day == date('d')){
                                                             echo "<option selected='selected'>".$day."</option>";
                                                        }else{
                                                            echo "<option>".$day."</option>";
                                                        }    
                                                    }   
                                                    ?>
                                                    </select>Day
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                                <td>
                                    <div class="register-header" >Nationality:</div>
                                    <div class="register-input"><input class="form-control" type="text" name="nationality"></div>
                                </td>
                            </tr> 
                            <tr>
                                <td style="width: 34%;">
                                    <table style="width: 100%">
                                        <tr>
                                            <td>
                                                <div class="register-header" >Sex:</div>
                                                <select class="select-menu form-control" name="sex" >
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </td>
                                            <td>
                                                <div class="register-header" >Civil Status:</div>
                                                <div>
                                                    <select class="select-menu form-control"" name="civil_status">
                                                        <option>Maried</option>
                                                        <option>Widowed</option>
                                                        <option>Seperated</option>
                                                        <option>Divorced</option>
                                                        <option>Single</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="register-header" >Blood Type:</div>
                                                <div>
                                                    <select class="select-menu form-control"" name="blood_type">
                                                        <option>Unknown</option>
                                                        <option>A+</option>
                                                        <option>A-</option>
                                                        <option>B+</option>
                                                        <option>B-</option>
                                                        <option>AB+</option>
                                                        <option>AB-</option>
                                                        <option>O+</option>
                                                        <option>O-</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                
                                <td>
                                    <div class="register-header" >Phone/Cellphone:</div>
                                    <div class="register-input"><input class="form-control"  type="text" name="phone_no"></div>
                                </td>
                                <td>
                                    <div class="register-header" >Email Address:</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="email_address"></div>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    <div class="register-header" >Status:</div>
                                    <div class="register-input">
                                    <select class="select-menu form-control" name="stats" >
                                        <option>Active</option>
                                        <option>Not-Active</option>
                                    </select>
                                     </div>
                                </td>
                                <td colspan="2">
                                    <div class="register-header" >Home Address:</div>
                                    <div class="register-input"><input class="form-control" type="text" name="home_address"></div>
                                </td>
                                
                                
                         </tr>
                 </tr>
        </table>
  </div>

  <div class="tab" style="background: #ececec;">
     <table align="center" border="0" class="table">
                        <tr>
                            <tr>
                                <th colspan="3"><div align="center">Educational Information (Optional)</div></th>
                            </tr>
                            <tr>
                                
                                <td>
                                    <div  class="register-header" >Elementary School Year:</div>
                                    <div class="register-input"><input id="required" class="form-control" type="text" name="e_year" ></div>
                                </td>
                                <td>
                                    <div class="register-header" >Elemenry Address:</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="e_address"></div>
                                </td>
                                <td>
                                    <div class="register-header" >Elementary Remarks:</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="e_remarks"></div>
                                </td>
                                
                            </tr>
                            <tr>
                                
                                <td>
                                    <div  class="register-header" >Highschool School Year:</div>
                                    <div class="register-input"><input id="required" class="form-control" type="text" name="hs_year" ></div>
                                </td>
                                <td>
                                    <div class="register-header" >Highschool School Address:</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="hs_address"></div>
                                </td>
                                <td>
                                    <div class="register-header" >Highschool Remarks:</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="hs_remarks"></div>
                                </td>
                                
                            </tr>

                             <tr>
                                
                                <td>
                                    <div  class="register-header" >College School Year:</div>
                                    <div class="register-input"><input id="required" class="form-control" type="text" name="c_year" ></div>
                                </td>
                                <td>
                                    <div class="register-header" >College School Address:</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="c_address"></div>
                                </td>
                                <td>
                                    <div class="register-header" >College Remarks:</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="c_remarks"></div>
                                </td>
                                
                            </tr>
                            <tr>
                                
                                <td>
                                    <div  class="register-header" >Post School Year:</div>
                                    <div class="register-input"><input id="required" class="form-control" type="text" name="p_year" ></div>
                                </td>
                                <td>
                                    <div class="register-header" >Post School Address:</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="p_address"></div>
                                </td>
                                <td>
                                    <div class="register-header" >Post Remarks:</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="p_remarks"></div>
                                </td>
                                
                            </tr>
                        </tr>
                            
        </table>
  </div>
  <div class="tab" style="background: #ececec;">
    <table align="center" border="0" class="table">
                        <tr>
                            <tr>
                                <th colspan="3"><div align="center">Family Background (Optional)</div></th>
                            </tr>
                            <tr>
                                
                                <td>
                                    <div  class="register-header" >Spouse First Name:</div>
                                    <div class="register-input"><input id="required" class="form-control" type="text" name="sp_fn" ></div>
                                </td>
                                <td>
                                    <div class="register-header" >Spouse Middle Name:</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="sp_mn"></div>
                                </td>
                                <td>
                                    <div class="register-header" >Spouse Last Name</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="sp_ln"></div>
                                </td>
                                
                            </tr>
                            <tr>
                                
                                <td>
                                    <div  class="register-header" >Occupation:</div>
                                    <div class="register-input"><input id="required" class="form-control" type="text" name="sp_o" ></div>
                                </td>
                                <td style="width: 33%;">
                                    <div class="register-header">Date of Birth:</div>
                                    <div class="form-group">
                                        <table>
                                            <tr>
                                                <td><select class="select-menu form-control" name="sp_year" >
                                                    <?php for($year=date('Y');$year>=1940;$year--){
                                                       echo "<option>".$year."</option>";
                                                    }   
                                                    ?>
                                                    </select>Year
                                                </td>
                                                <td><select class="select-menu form-control" name="sp_month">
                                                    <?php for($month=1;$month<=12;$month++){
                                                        if($month == date('m')){
                                                             echo "<option selected='selected'>".$month."</option>";
                                                        }else{
                                                            echo "<option>".$month."</option>";
                                                        }    
                                                    }   
                                                    ?>
                                                    </select>Month
                                                </td>
                                                <td><select class="select-menu form-control" name="sp_day">
                                                    <?php for($day=1;$day<=date("t", strtotime(date("Y-m-t")));$day++){
                                                        if($day == date('d')){
                                                             echo "<option selected='selected'>".$day."</option>";
                                                        }else{
                                                            echo "<option>".$day."</option>";
                                                        }    
                                                    }   
                                                    ?>
                                                    </select>Day
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                                <td>
                                    <div  class="register-header" >Position:</div>
                                    <div class="register-input"><input id="required" class="form-control" type="text" name="sp_pos" ></div>
                                </td>
                                

                            </tr>

                             <tr>   
                                  <td>
                                    <div class="register-header" >Gross Income:</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="sp_gincome"></div>
                                </td>

                                <td>
                                    <div class="register-header" >No. of Children</div>
                                    <div class="register-input"><input style="width: 33%;" class="form-control"   type="text" name="noOfchildren"></div>
                                </td>

                               
                            </tr>
                        </tr>
                            
        </table>
  </div>




  <div class="tab" style="background: #ececec;">
     <table align="center" border="0" class="table">
                        <tr>
                            <tr>
                                <th colspan="3"><div align="center">Employment Information (Required)</div></th>
                            </tr>
                            <tr>
                                
                                <td>
                                    <div  class="register-header" >Name of Firm</div>
                                    <div class="register-input"><input id="required" class="form-control" type="text" name="nofirm" ></div>
                                </td>
                                <td colspan="2">
                                    <div class="register-header">Address:</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="employ_address" style=" width: 96%;"></div>
                                </td>
                            </tr>
                            <tr>
                                
                                <td style="width: 33%;">
                                    <div class="register-header">Employment Started:</div>
                                    <div class="form-group">
                                        <table>
                                            <tr>
                                                <td><select class="select-menu form-control" name="emp_year" >
                                                    <?php for($year=date('Y');$year>=1940;$year--){
                                                       echo "<option>".$year."</option>";
                                                    }   
                                                    ?>
                                                    </select>Year
                                                </td>
                                                <td><select class="select-menu form-control" name="emp_month">
                                                    <?php for($month=1;$month<=12;$month++){
                                                        if($month == date('m')){
                                                             echo "<option selected='selected'>".$month."</option>";
                                                        }else{
                                                            echo "<option>".$month."</option>";
                                                        }    
                                                    }   
                                                    ?>
                                                        </select>Month
                                                </td>
                                                <td><select class="select-menu form-control" name="emp_day">
                                                    <?php for($day=1;$day<=date("t", strtotime(date("Y-m-t")));$day++){
                                                        if($day == date('d')){
                                                             echo "<option selected='selected'>".$day."</option>";
                                                        }else{
                                                            echo "<option>".$day."</option>";
                                                        }    
                                                    }   
                                                    ?>
                                                    </select>Day
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                                <td>
                                    <div class="register-header" >Gross Income:</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="em_grossIn"></div>
                                </td>
                                <td>
                                    <div class="register-header" >Position:</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="em_pos"></div>
                                </td>
                                
                            </tr>

                             <tr>
                                
                                <td>
                                    <div  class="register-header" >Phone/Cellphone No.:</div>
                                    <div class="register-input"><input id="required" class="form-control" type="text" name="em_phone" ></div>
                                </td>
                                <td>
                                    <div class="register-header" >Take Home Pay:</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="em_tkhome"></div>
                                </td>
                                
                            </tr>
                        </tr>

                            
        </table>
  </div>



  <div class="tab" style="background: #ececec;">
     <table align="center" border="0" class="table">
                        <tr>
                            <tr>
                                <th colspan="3"><div align="center">Business Information (Optional)</div></th>
                            </tr>
                            <tr>
                                
                                <td>
                                    <div  class="register-header" >Business Type</div>
                                    <div class="register-input"><input id="required" class="form-control" type="text" name="b_type" ></div>
                                </td>
                                <td colspan="2">
                                    <div class="register-header">Address:</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="b_address"></div>
                                </td>
                            </tr>
                            <tr>
                                
                                <td style="width: 33%;">
                                    <div class="register-header">Business Started:</div>
                                    <div class="form-group">
                                        <table>
                                            <tr>
                                                <td><select class="select-menu form-control" name="b_year" >
                                                    <?php for($year=date('Y');$year>=1940;$year--){
                                                       echo "<option>".$year."</option>";
                                                    }   
                                                    ?>
                                                    </select>Year
                                                </td>
                                                <td><select class="select-menu form-control" name="b_month">
                                                    <?php for($month=1;$month<=12;$month++){
                                                        if($month == date('m')){
                                                             echo "<option selected='selected'>".$month."</option>";
                                                        }else{
                                                            echo "<option>".$month."</option>";
                                                        }    
                                                    }   
                                                    ?>
                                                        </select>Month
                                                </td>
                                                <td><select class="select-menu form-control" name="b_day">
                                                    <?php for($day=1;$day<=date("t", strtotime(date("Y-m-t")));$day++){
                                                        if($day == date('d')){
                                                             echo "<option selected='selected'>".$day."</option>";
                                                        }else{
                                                            echo "<option>".$day."</option>";
                                                        }    
                                                    }   
                                                    ?>
                                                    </select>Day
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                                <td>
                                    <div class="register-header" >Gross Income:</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="b_grossIn"></div>
                                </td>
                                <td>
                                    <div class="register-header" >Ownership:</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="b_own"></div>
                                </td>
                                
                            </tr>

                             <tr>
                                
                                <td>
                                    <div  class="register-header" >Phone/Cellphone No.:</div>
                                    <div class="register-input"><input id="required" class="form-control" type="text" name="b_phone" ></div>
                                </td>
                                <td>
                                    <div class="register-header" >Capital:</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="b_cap"></div>
                                </td>
                                 <td>
                                    <div class="register-header" >Trade Name:</div>
                                    <div class="register-input"><input class="form-control"   type="text" name="b_trade"></div>
                                </td>
                                
                            </tr>   
                </tr>              
        </table>
  </div>

  <div style="overflow:auto;">
    <div style="float:right;">
      <a class="btn btn-danger"  href="<?=base_url()?>">Cancel</a>
      <button class="btn" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button class="btn btn-success" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
      <button class="btn btn-success" id="submit">Submit</button>
    </div>
  </div>

  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
                
           
    </form>
</div>
<script src="<?=base_url('public/contents-script/next.js')?>"></script>
