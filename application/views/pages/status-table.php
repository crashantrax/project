

<br>
<table class="table" id="member">
                    
                    <hr>
                    <h5 style="margin-left: 50%;padding-bottom: 10px;">Profile</h5>
                    
                    <tr>
                        <th>
                            <img style="width: 200px;border:1px solid black;border-radius: 50%;margin-left: 20%;" src="<?= base_url('public/contents-css/logo/admin.png');?>">
                        </th>
                        <th style="margin-left: -30%;" width="200">Member Account ID <br>
                            <p><?=$res->row('MemberAccountID')?></p>
                            <hr>
                            Member Business ID <br>
                            <p><?=$res->row('MemberBusinessID')?></p>
                        </th>
                        <th width="200">Type Of Business <br>
                            <p><?=$res->row('TypeOfBusiness')?></p>
                            <hr>
                            Address <br>
                            <p><?=$res->row('Address')?></p>
                        </th>
                        <th width="200">Ownership <br>
                            <p><?=$res->row('Ownership')?></p>
                            <hr>
                            Capital <br>
                            <p><?=$res->row('Capital')?></p>
                        </th>
                        <th width="200">Trade Name<br>
                            <p><?=$res->row('TradeName')?></p>
                            <hr>
                            Telephone <br>
                            <p><?=$res->row('TelNo.')?></p>
                        </th>
                        <th>Year Started <br>
                            <p><?=$res->row('YearStarted')?></p>
                        </th>
                        <!-- <th width="" style="padding-top: 3%;">Member Account ID <br>
                            <p><?=$res->row('MemberAccountID')?></p>
                            <hr>
                        </th>
                        <th width="" style="padding-top: 3%;">Type Of Business<br>
                            <p><?=$res->row('TypeOfBusiness')?></p>
                            <hr>
                        </th>
                        <th width="" style="padding-top: 3%;">Address<br>
                            <?=$res->row('Address')?>
                            <hr>
                        </th>
                        <th width="" style="padding-top: 3%;">Ownership<br>
                            <?=$res->row('Ownership')?>
                            <hr>
                        </th>
                        <th width="" style="padding-top: 3%;">Capital<br>
                            <?=$res->row('Capital')?>
                            <hr>
                        </th>
                        <th width="" style="padding-top: 3%;">Trade Name<br>
                            <?=$res->row('TradeName')?>
                            <hr>
                        </th> -->
                    </tr>
                    <tr>
                        
                    </tr>
                    
                </table>
               