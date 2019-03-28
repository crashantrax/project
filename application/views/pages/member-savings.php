
        
            <div class="container1" style="height: 110px;">
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
                                </tr>
                            </table>
                        </div>
                </div>  
            </div>  
        

    



<table class="table" style="margin-top: 30px;background: #ececec;">
                <tr>
                    <th colspan="3"><i>Banking History</i></th>
                </tr>
                <tr>
                    <th>Deposit Logs</th>
                </tr>
                 <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Amount</th>
                </tr>
                <tr>
                    <th>Withdrawal Logs</th>
                </tr>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Amount</th>
                </tr
</table>