<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">
<?php
// INITIALIZE
$array = array();
$payline = new paylineSDK(MERCHANT_ID, ACCESS_KEY, PROXY_HOST, PROXY_PORT, PROXY_LOGIN, PROXY_PASSWORD, ENVIRONMENT);

//VERSION
$array['version'] = $_POST['version'];

include '../arraySet/payment.php';
include '../arraySet/order.php';

// WALLET ID
$array['walletId'] = $_POST['walletId'];

// CARDIND
$array['cardInd'] =  $_POST['CardIndex'];

// scheduled
$array['scheduledDate'] = $_POST['scheduledDate'];

include '../arraySet/privateDataList.php';

//MEDIA
$array['media'] = $_POST['media'];

// EXECUTE
$response = $payline->doScheduledWalletPayment($array);
if(isset($response['paymentRecordId'])){
	insertPaymentRecordData($array['payment']['contractNumber'],$array['walletId'],$response['paymentRecordId']);
}

echo '<table>';
echo '	<tr>';
echo '		<td><H3>REQUEST</H3></td>';
echo '		<td><H3>RESPONSE</H3></td>';
echo '	</tr>';
echo '	<tr>';
echo "		<td style='vertical-align: top; padding: 5px;'>";
print_a($array);
echo '		</td>';
echo "		<td style='vertical-align: top; padding: 5px;'>";
print_a($response, 0, true);
echo '		</td>';
echo '	</tr>';
echo '</table>';
?>
