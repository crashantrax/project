<table >
                  
                    <tr>
                        
                        <td>
                            <div class="frm_container">
                                <div class="frm_heading"><span>Personal Info</span></div>
                                <div class="frm_inputs">
                                    <table class="info_view">
                                        <tbody><tr>
                                            <td>First Name:</td>
                                            <td>
                                                <?php 
                                                    if($profileinfo->num_rows()>0){
                                                        echo $profileinfo->row()->FirstName;
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>  
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Middle Name:</td>
                                            <td>
                                                <?php 
                                                    if($profileinfo->num_rows()>0){
                                                        echo $profileinfo->row()->MiddleName; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>  
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Last Name:</td>
                                            <td><?php 
                                                    if($profileinfo->num_rows()>0){
                                                        echo $profileinfo->row()->LastName; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Place of Birth:</td>
                                            <td><?php 
                                                    if($profileinfo->num_rows()>0){
                                                        echo $profileinfo->row()->PlaceofBirth; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Date of Birth:</td>
                                            <td><?php 
                                                    if($profileinfo->num_rows()>0){
                                                        echo $profileinfo->row()->DOB; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Age</td>
                                            <td><?php 
                                                    if($profileinfo->num_rows()>0){
                                                        echo $age->row()->age; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nationality:</td>
                                            <td><?php 
                                                    if($profileinfo->num_rows()>0){
                                                        echo $profileinfo->row()->Nationality; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sex:</td>
                                            <td><?php 
                                                    if($profileinfo->num_rows()>0){
                                                        echo $profileinfo->row()->Sex; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Civil Status:</td>
                                            <td><?php 
                                                    if($profileinfo->num_rows()>0){
                                                        echo $profileinfo->row()->CivilStatus; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Blood Type:</td>
                                            <td><?php 
                                                    if($profileinfo->num_rows()>0){
                                                        echo $profileinfo->row()->BloodType; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Home Address</td>
                                            <td><?php 
                                                    if($profileinfo->num_rows()>0){
                                                        echo $profileinfo->row()->Address; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Phone/Cellphone:</td>
                                            <td><?php 
                                                    if($profileinfo->num_rows()>0){
                                                        echo $profileinfo->row()->TelNo; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email Address:</td>
                                            <td><?php 
                                                    if($profileinfo->num_rows()>0){
                                                        echo $profileinfo->row()->email; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                         
                                    </tbody></table>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="frm_container">
                                <div class="frm_heading"><span>Educational Info</span></div>
                                <div class="frm_inputs">
                                    <table class="info_view">
                                        <tbody><tr>
                                            <td>Elementary Year:</td>
                                            <td>
                                                <?php 
                                                    if($elem->num_rows()>0 && $elem->row()->ElementaryDate!=""){
                                                        echo $elem->row()->ElementaryDate; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>School Name/Address:</td>
                                            <td>
                                                <?php 
                                                    if($elem->num_rows()>0 && $elem->row()->CollegeAddressElementary!=""){
                                                        echo $elem->row()->CollegeAddressElementary; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Remarks:</td>
                                            <td>
                                                <?php 
                                                    if($elem->num_rows()>0 && $elem->row()->ElementaryRemarks!=""){
                                                        echo $elem->row()->ElementaryRemarks; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Highschool Year:</td>
                                            <td>
                                                <?php 
                                                    if($hs->num_rows()>0 && $hs->row()->HighschoolDate!=""){
                                                        echo $hs->row()->HighschoolDate; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>School Name/Address:</td>
                                            <td>
                                                <?php 
                                                    if($hs->num_rows()>0 && $hs->row()->HighschoolAddress!=""){
                                                        echo $hs->row()->HighschoolAddress; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Remarks:</td>
                                            <td>
                                                <?php 
                                                    if($hs->num_rows()>0 && $hs->row()->HighschoolRemarks!=""){
                                                        echo $hs->row()->HighschoolRemarks; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>College Year:</td>
                                            <td>
                                                <?php 
                                                    if($c->num_rows()>0 && $c->row()->CollegeDate!=""){
                                                        echo $c->row()->CollegeDate; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>School Name/Address:</td>
                                            <td>
                                                <?php 
                                                    if($c->num_rows()>0 && $c->row()->CollegeAddress!=""){
                                                        echo $c->row()->CollegeAddress; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Remarks:</td>
                                            <td>
                                                <?php 
                                                    if($c->num_rows()>0 && $c->row()->CollegeRemarks!=""){
                                                        echo $c->row()->CollegeRemarks; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Post Graduate Year:</td>
                                            <td>
                                                <?php 
                                                    if($p->num_rows()>0 && $p->row()->PostGradDate!=""){
                                                        echo $p->row()->PostGradDate; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>School Name/Address:</td>
                                            <td>
                                                <?php 
                                                    if($p->num_rows()>0 && $p->row()->PostGradAddress!=""){
                                                        echo $p->row()->PostGradAddress; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Remarks:</td>
                                            <td>
                                                <?php 
                                                    if($p->num_rows()>0 && $p->row()->PostGradRemarks!=""){
                                                        echo $p->row()->PostGradRemarks; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                         
                                    </tbody></table>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="frm_container">
                                <div class="frm_heading"><span>Family Background</span></div>
                                <div class="frm_inputs">
                                    <table class="info_view">
                                        <tbody><tr>
                                            <td>Spouse First Name:</td>
                                            <td>
                                                <?php 
                                                    if($fbg->num_rows()>0){
                                                        echo $fbg->row()->spouse_fn; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Spouse Middle Name:</td>
                                            <td>
                                                <?php 
                                                    if($fbg->num_rows()>0){
                                                        echo $fbg->row()->spouse_mn; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Spouse Last Name:</td>
                                            <td>
                                                <?php 
                                                    if($fbg->num_rows()>0){
                                                        echo $fbg->row()->spouse_ln; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>No. of Children</td>
                                            <td>
                                                <?php 
                                                    if($fbg->num_rows()>0){
                                                        echo $fbg->row()->NoofChildren; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Occupation</td>
                                            <td>
                                                <?php 
                                                    if($fbg->num_rows()>0){
                                                        echo $fbg->row()->Occupation; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gross Income</td>
                                            <td>
                                                <?php 
                                                    if($fbg->num_rows()>0){
                                                        echo $fbg->row()->CapitalGrossIncome; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Date of Birth:</td>
                                            <td>
                                                <?php 
                                                    if($fbg->num_rows()>0){
                                                        echo $fbg->row()->DateofBirth; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Postion:</td>
                                            <td>
                                                <?php 
                                                    if($fbg->num_rows()>0){
                                                        echo $fbg->row()->Position; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
    
                         
                         
                                    </tbody></table>
                                </div>
                            </div>
                            
                        </td>
                        <tr>
                            <td>
                            <div class="frm_container">
                                <div class="frm_heading"><span>Employment Info</span></div>
                                <div class="frm_inputs">
                                    <table class="info_view">
                                        <tbody><tr>
                                            <td>Name of Firm:</td>
                                            <td>
                                                <?php 
                                                    if($e->num_rows()>0){
                                                        echo $e->row()->NameofFirm; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Address:</td>
                                            <td>
                                                <?php 
                                                    if($e->num_rows()>0){
                                                        echo $e->row()->Address; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Employment Started:</td>
                                            <td>
                                                <?php 
                                                    if($e->num_rows()>0){
                                                        echo $e->row()->DateofEmploymentStarted; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gross Income:</td>
                                            <td>
                                                <?php 
                                                    if($e->num_rows()>0){
                                                        echo $e->row()->GrossIncome; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Posistion:</td>
                                            <td>
                                                <?php 
                                                    if($e->num_rows()>0){
                                                        echo $e->row()->Position; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Telephone No.:</td>
                                            <td>
                                                <?php 
                                                    if($e->num_rows()>0){
                                                        echo $e->row()->TelNo; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Take-Home Pay:</td>
                                            <td>
                                                <?php 
                                                    if($e->num_rows()>0){
                                                        echo $e->row()->NetTakeHomePay; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>

                         
                         
                                    </tbody></table>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="frm_container">
                                <div class="frm_heading"><span>Business Info</span></div>
                                <div class="frm_inputs">
                                    <table class="info_view">
                                        <tbody><tr>
                                            <td>Business Type:</td>
                                            <td>
                                                <?php 
                                                    if($b->num_rows()>0){
                                                        echo $b->row()->TypeOfBusiness; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Address:</td>
                                            <td>
                                                <?php 
                                                    if($b->num_rows()>0){
                                                        echo $b->row()->Address; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ownership:</td>
                                            <td>
                                                <?php 
                                                    if($b->num_rows()>0){
                                                        echo $b->row()->Ownership; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Capital:</td>
                                            <td>
                                                <?php 
                                                    if($b->num_rows()>0){
                                                        echo $b->row()->Capital; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Trade Name:</td>
                                            <td>
                                                <?php 
                                                    if($b->num_rows()>0){
                                                        echo $b->row()->TradeName; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Telephone No.:</td>
                                            <td>
                                                <?php 
                                                    if($b->num_rows()>0){
                                                        echo $b->row()->TelNo; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Year Started:</td>
                                            <td>
                                                <?php 
                                                    if($b->num_rows()>0){
                                                        echo $b->row()->YearStarted; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gross Income:</td>
                                            <td>
                                                <?php 
                                                    if($b->num_rows()>0){
                                                        echo $b->row()->GrossIncome; 
                                                    }else{
                                                        echo "None";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                         
                         
                                    </tbody></table>
                                </div>
                            </div>
                        </td>
                        <?php $idn=$this->input->get_post('id');?>
                        <td><a style="width: 30%" href="<?=base_url("cashier/edit/?id="."$idn")?>" class="btn btn-success">Edit</a>&nbsp;<a style="width: 30%" href="<?=base_url();?>" class="btn btn-danger">Cancel</a></td>
                    </tr>
                </table> 
            </div>
        </td>
</table>
            
              
                        