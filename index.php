<?php require_once (dirname(__FILE__) . "/lib/common.inc");?>
<html>
    <head>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
            
                $('.enter').click(function(){
            
                    $(this).next('.content').slideToggle('fast');
            
                });
            });
        </script>
        <style type="text/css">
              <!--
                  .enter {
                      max-width: 960px;
                      background-color:#99c8ab;
                      padding-left:20px;
                      margin-left:10px;
                      }
                  .content {
                      max-width: 960px;
                      background-color:#E7F6EC;
                      margin-bottom:10px;
                      margin-left:10px;
                      padding:5px;
                      padding-left:40px;
                      }
            nput[type=submit] {
                  text-transform: uppercase;
                  background-color: rgb(16, 165, 74);
                  text-decoration: none;
                  color: white;
                  display: inline-block;
                  width: 50px;
                  font-size: 0.7em;
                  text-align: center;
                  padding: 7px 0px 4px;
                  border-radius: 2px 2px 2px 2px;
            }
              -->
        </style>

    </head>
    <body>
        <p>Environment : <?php echo $leetchiBaseURL;?></p>
        <p>
            <div>
			    params with * can be create if they are missing<br>
                params in <i>italic</i> are optional<br>
                4970100000000170<br>
            </div>
        </p>
        <div class="enter">/user</div>
        <div class="content">
            <!-- Create User -->
            <form name="input" action="create_user.php" method="get">
                <input type="submit" value="POST" /> Create a user
            </form>
            <!-- Update User -->
            <form name="input" action="update_user.php" method="put">
                <input type="submit" value="PUT" />
				user_id: <input type="text" size="12" maxlength="150" name="user_id" />
				Nationality : <input type="text" size="12" maxlength="150" name="Nationality" value="French" />
				PersonType :
                <select name="PersonType">
                    <option value="NATURAL_PERSON">NATURAL_PERSON</option>
                    <option value="LEGAL_PERSONALITY">LEGAL_PERSONALITY</option>
                </select>
            </form>
            <!-- Get User -->
            <form name="input" action="get_user.php" method="get">
                <input type="submit" value="GET" />
				user_id: <input type="text" size="12" maxlength="150" name="user_id" />
            </form>
        </div>
        <div class="enter">/contributions</div>
        <div class="content">
            <!-- Create User & start a payment-->
            <form name="input" action="contribute_personal_account.php" method="get">
                <input type="submit" value="POST" />
				user_id*: <input type="text" size="12" maxlength="150" name="user_id" />
				amount : <input type="text" size="12" maxlength="150" name="amount" value="1000" />
            </form>
            <!-- Contribu on a wallet-->
            <form name="input" action="contribute_wallet.php" method="get">
                <input type="submit" value="POST" />
				user_id* : <input type="text" size="12" maxlength="50" name="user_id">
				wallet_id* : <input type="text" size="12" maxlength="50" name="wallet_id">
				Method :
                <select name="methodType">
                    <option value="cb_visa_mastercard">cb_visa_mastercard</option>
                    <option value="elv">elv</option>
                    <option value="amex">amex</option>
                </select>
            </form>
        </div>
        <div class="enter">/recurrent-contributions</div>
        <div class="content">

            <!-- get a recurrent-contribution-->
            <form name="input" action="get_recurrent_contribution.php" method="get">
                <input type="submit" value="GET" />
				recurrent_contribution_id: <input type="text" size="12" maxlength="150" name="recurrent_contribution_id" />
            </form>

            <!-- create recurrent-contribution-->
            <form name="input" action="contribute_wallet_rec.php" method="get">
                <input type="submit" value="POST" />
				user_id: <input type="text" size="12" maxlength="150" name="user_id" />
                wallet_id: <input type="text" size="12" maxlength="150" name="wallet_id" />
                amount: <input type="text" size="12" maxlength="150" name="amount" />
                clientFeeAmount: <input type="text" size="12" maxlength="150" name="clientFeeAmount" />
                startdate (timestamp): <input type="text" size="12" maxlength="150" name="datets" />
                FrequencyCode:
                <select name="FrequencyCode">
                    <option value="Daily">Daily</option>
                    <option value="Weekly">Weekly</option>
                    <option value="TwiceMonthly">TwiceMonthly</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Bimonthly">Bimonthly</option>
                    <option value="Quarterly">Quarterly</option>
                    <option value="Annual">Annual</option>
                    <option value="Biannual">Biannual</option>
                </select>
                NumberOfExecutions: <input type="text" size="12" maxlength="150" name="NumberOfExecutions" />
            </form>
            <!-- Disable recurrent-contribution-->
            <form name="input" action="disable_recurrent_contribution.php" method="get">
                <input type="submit" value="DISABLE" />
				recurrent_contribution_id: <input type="text" size="12" maxlength="150" name="recurrent_contribution_id" />
            </form>
        </div>

        <div class="enter">/recurrent-contributions/{}/executions</div>
        <div class="content">
            <!-- get a recurrent-contribution-->
            <form name="input" action="get_recurrent_contribution_executions.php" method="get">
                <input type="submit" value="GET" />
				recurrent_contribution_id: <input type="text" size="12" maxlength="150" name="recurrent_contribution_id" />
            </form>
        </div>

        <div class="enter">/contributions-by-withdrawal</div>
        <div class="content">
            <!-- Get contributions-by-withdrawal -->
            <form name="input" action="get_contribute_by_withdrawal.php" method="get">
                <input type="submit" value="GET" />
				contribution_id: <input type="text" size="12" maxlength="150" name="contribution_id" />
            </form>
            <form name="input" action="contribute_by_withdrawal_personal_account.php" method="get">
                <input type="submit" value="POST" />
				user_id*: <input type="text" size="12" maxlength="150" name="user_id" />
                <i>wallet_id</i> : <input type="text" size="12" maxlength="150" name="wallet_id" />
				amount : <input type="text" size="12" maxlength="150" name="amount" value="1000" />
            </form>
        </div>
        <div class="enter">/wallet</div>
        <div class="content">
            <!-- Create wallet -->
            <form name="input" action="create_wallet.php" method="get">
                <input type="submit" value="POST" />
				user_id*: <input type="text" size="12" maxlength="150" name="user_id" />
            </form>
        </div>
        <div class="enter">/card</div>
        <div class="content">
            <!-- Create Card -->
            <form name="input" action="create_payment_card.php" method="get">
                <input type="submit" value="POST" />
				user_id : <input type="text" size="12" maxlength="50" name="user_id">
            </form>
            <!-- Delete Card -->
            <form name="input" action="delete_card.php" method="get">
                <input type="submit" value="DELETE" />
				paymentcard_id : <input type="text" size="12" maxlength="50" name="paymentcard_id">
            </form>
            <!-- get_payment_card -->
            <form name="input" action="get_payment_card.php" method="get">
                <input type="submit" value="GET" />
				user_id : <input type="text" size="12" maxlength="50" name="user_id">
            </form>
        </div>
        <div class="enter">/refund</div>
        <div class="content">
            <!-- create Pending refund -->
            <form name="input" action="create_pending_refund.php" method="get">
                <input type="submit" value="POST" />
			    user_id : <input type="text" size="12" maxlength="50" name="user_id">
			    contribution_id : <input type="text" size="12" maxlength="50" name="contribution_id">
                execution_id : <input type="text" size="12" maxlength="50" name="execution_id">
            </form>
        </div>
        <div class="enter">/beneficiaries</div>
		<div class="content">
            <!-- Post beneficiaries -->
			<form name="input" action="create_beneficiary.php" method="get">
                <input type="submit" value="POST" />
                BIC : <input type="text" size="12" maxlength="50" name="bic" value="CRLYFRPP">
			    IBAN : <input type="text" size="12" maxlength="34" name="iban" value="FR3020041010124530725S03383">
			</form> 
		</div>
		<!-- create withdrawal -->
		<form name="input" action="create_withdrawal.php" method="get">
			user_id* : <input type="text" size="12" maxlength="50" name="user_id">
			wallet_id* : <input type="text" size="12" maxlength="50" name="wallet_id">
			amount : <input type="text" size="12" maxlength="50" name="amount" value="1000">
            <input type="submit" value="Create withdrawal" />
        </form>
        <!-- get request strongAuthentication -->
        <form name="input" action="get_request_strong_auth.php" method="get">
			user_id* : <input type="text" size="12" maxlength="50" name="user_id">
            <input type="submit" value="get strongAuthentication" />
        </form>
        <!-- get operations of user -->
        <form name="input" action="get_operations_user.php" method="get">
			user_id* : <input type="text" size="12" maxlength="50" name="user_id">
            <input type="submit" value="get operations of user" />
        </form>
        <!-- get operations on personal account  -->
        <form name="input" action="get_operations_user_personal.php" method="get">
			user_id* : <input type="text" size="12" maxlength="50" name="user_id">
            <input type="submit" value="get operations on personal account" />
        </form>
        <!-- get operations on wallet  -->
        <form name="input" action="get_operations_wallet.php" method="get">
			wallet_id* : <input type="text" size="12" maxlength="50" name="wallet_id">
            <input type="submit" value="get operations on wallet" />
        </form>

        <!-- create transfer -->
        <form name="input" action="create_transfer.php" method="get">
			payer_id : <input type="text" size="12" maxlength="50" name="payer_id">
			beneficiary_id : <input type="text" size="12" maxlength="50" name="beneficiary_id">
			wallet_beneficiary_id : <input type="text" size="12" maxlength="50" name="wallet_beneficiary_id">
			amount : <input type="text" size="12" maxlength="50" name="amount" value="1000">
            <input type="submit" value="create transfer" />
        </form>

        <!-- create transfer to personal account -->
        <form name="input" action="create_transfer_to_personal_account.php" method="get">
			payer_id : <input type="text" size="12" maxlength="50" name="payer_id">
			beneficiary_id : <input type="text" size="12" maxlength="50" name="beneficiary_id">
			amount : <input type="text" size="12" maxlength="50" name="amount" value="1000">
            <input type="submit" value="create transfer to personal account" />
        </form>

        <!-- get transfer -->
        <form name="input" action="get_transfer.php" method="get">
			transfer_id* : <input type="text" size="12" maxlength="50" name="transfer_id">
            <input type="submit" value="get transfer" />
        </form>

    </body>
	</body>
</html>