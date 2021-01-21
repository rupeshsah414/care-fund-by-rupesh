<?php
	$Name=$_POST['name'];
	$Email=$_POST['email'];
	$Amount=$_POST['amount'];
	$Phone=$_POST['telnum'];

	include "instamojo/Instamojo.php";
	$api = new instamojo\Instamojo("test_e25e609730f6c99f5425f1ce636","test_941e762b787ae3c13ccb10c46f2","https://test.instamojo.com/api/1.1/");


	try {
    $response = $api->paymentRequestCreate(array(
			"purpose" => "Donation",
			"amount" => $Amount,
			"phone" => $Phone,
			"buyer_name" => $Name,
			"send_email" => true,
			"email" => $Email,
			"send_sms" => true,
			"allow_repeated_payments" => false,
			"redirect_url" => "http://localhost/Rupesh/redirect.php",
		//	"webhook" => "http://localhost/Donationgateway-master/redirect.php",

			));
		 // print_r($response);
		 $pay_url = $response['longurl'];
		 header("location:$pay_url");
	   }
	catch (Exception $e) {
		print("Error: " . $e->getMessage());
}

?>
