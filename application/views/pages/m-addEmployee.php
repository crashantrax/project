<div class="main-container">
    <form id="regForm" method="POST" action="<?php echo base_url('manager/register_employee'); ?>">
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
            <table align="center" border="0" class="table">
                        <tr>
                            <tr>
                                <th colspan="3"><div align="center">Personal Informations</div></th>
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
                                <td colspan="2">
                                    <div class="register-header" >Home Address:</div>
                                    <div class="register-input"><input class="form-control" type="text" name="home_address"></div>
                                </td>
                                
                                
                         </tr>
                 </tr>
        </table>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <a class="btn btn-danger"  href="<?=base_url()?>">Cancel</a>
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
