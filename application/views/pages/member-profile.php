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
                        
                    </tr>
                        