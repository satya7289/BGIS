<html>
<head>
<title> BGIS SCHOOL</title>
</head>
<body>
<center>

<?php 
include('Crypto.php');

?>
<?php 

	error_reporting(0);
	 
        $merchant_id=$_POST['merchant_id'];  
	$order_id=$_POST['order_id'];        
	$amount=$_POST['amount'];            
	$currency=$_POST['currency'];
	$redirect_url=$_POST['redirect_url'];         
	$cancel_url=$_POST['cancel_url'];
	$language=$_POST['language'];
	$billing_name=$_POST['billing_name'];
	$billing_address=$_POST['billing_address'];
	$billing_city=$_POST['billing_city'];
	$billing_state=$_POST['billing_state'];
	$billing_zip=$_POST['billing_zip'];
	$billing_country=$_POST['billing_country'];
	$billing_tel=$_POST['billing_tel'];
	$billing_email=$_POST['billing_email'];
	$delivery_name=$_POST['delivery_name'];
	$delivery_address=$_POST['delivery_address'];
	$delivery_city=$_POST['delivery_city'];
	$delivery_state=$_POST['delivery_state'];
	$delivery_zip=$_POST['delivery_zip'];
	$delivery_country=$_POST['delivery_country'];
	$delivery_tel=$_POST['delivery_tel'];
	$merchant_param1=$_POST['merchant_param1'];
	$merchant_param2=$_POST['merchant_param2'];
	$merchant_param3=$_POST['merchant_param3'];
	$merchant_param4=$_POST['merchant_param4'];
	$merchant_param5=$_POST['merchant_param5'];
	$promo_code=$_POST['promo_code'];
	$customer_Id=$_POST['customer_identifier'];
	$integration_type=$_POST['integration_type'];
	$working_key='58CDDBD303BAF80202339DEF2B4989F7';//Shared by CCAVENUES
	$access_code='AVME03BK07AO69EMOA';//Shared by CCAVENUES

	
/*	
$merchant_id = '31047';
$working_key='8ADCDC3F4856A579C5EA01FED925CC58';//Shared by CCAVENUES
$access_code="AVPH01BC28CC42HPCC";*/


	$merchant_data=	'merchant_id='.$merchant_id.'&order_id='.$order_id.'&amount='.$amount.'&currency='.$currency.'&redirect_url='.$redirect_url.
					'&cancel_url='.$cancel_url.'&language='.$language.'&billing_name='.$billing_name.'&billing_address='.$billing_address.
					'&billing_city='.$billing_city.'&billing_state='.$billing_state.'&billing_zip='.$billing_zip.'&billing_country='.$billing_country.
					'&billing_tel='.$billing_tel.'&billing_email='.$billing_email.'&delivery_name='.$delivery_name.'&delivery_address='.$delivery_address.
					'&delivery_city='.$delivery_city.'&delivery_state='.$delivery_state.'&delivery_zip='.$delivery_zip.'&delivery_country='.$delivery_country.
					'&delivery_tel='.$delivery_tel.'&merchant_param1='.$merchant_param1.'&merchant_param2='.$merchant_param2.
					'&merchant_param3='.$merchant_param3.'&merchant_param4='.$merchant_param4.'&merchant_param5='.$merchant_param5.'&promo_code='.$promo_code.
					'&customer_identifier='.$customer_identifier.'&integration_type='.$integration_type;
	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.
	/// $production_url='https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction&encRequest='.$encrypted_data.'&access_code='.$access_code;

	$production_url='https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction&encRequest='.$encrypted_data.'&access_code='.$access_code;
?>

<iframe src="<?php echo $production_url?>" id="paymentFrame" width="500" height="600" frameborder="0" scrolling="No" ></iframe>

<script type="text/javascript" src="jquery-1.7.2.js"></script>
<script type="text/javascript">
    	$(document).ready(function(){
    		 window.addEventListener('message', function(e) {
		    	 $("#paymentFrame").css("height",e.data['newHeight']+'px'); 	 
		 	 }, false);
	 	 	
		});
</script>
</center>
</body>
</html>