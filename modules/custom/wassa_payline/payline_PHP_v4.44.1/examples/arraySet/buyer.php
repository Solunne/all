<?php
//BUYER
$array['buyer']['legalStatus'] = $_POST['buyerLegalStatus'];
$array['buyer']['title'] = $_POST['buyerTitle'];
$array['buyer']['lastName'] = $_POST['buyerLastName'];
$array['buyer']['firstName'] = $_POST['buyerFirstName'];
$array['buyer']['email'] =  $_POST['buyerEmail'];
$array['buyer']['mobilePhone'] =  $_POST['mobilePhone'];
$array['buyer']['customerId'] =  $_POST['customerId'];
$array['buyer']['accountCreateDate'] =  $_POST['buyerAccountCreateDate'];
$array['buyer']['accountAverageAmount'] =  $_POST['buyerAverageAmount'];
$array['buyer']['accountOrderCount'] =  $_POST['buyerOrderCount'];
$array['buyer']['walletId'] = $_POST['buyerWalletId'];
$array['buyer']['walletDisplayed'] = $_POST['buyerWalletDisplayed'];
$array['buyer']['walletSecured'] = $_POST['buyerWalletSecured'];
$array['buyer']['walletCardInd'] = $_POST['buyerWalletCardInd'];
$array['buyer']['ip'] = $_POST['buyerIp'];
$array['buyer']['legalDocument'] = $_POST['legalDocument'];
$array['buyer']['birthDate'] = $_POST['birthDate'];
$array['buyer']['fingerprintID'] = $_POST['fingerprintID'];

//BILLING ADDRESS
$array['billingAddress']['title'] =  $_POST['billingAddressTitle'];
$array['billingAddress']['firstName'] =  $_POST['billingAddressFirstName'];
$array['billingAddress']['lastName'] =  $_POST['billingAddressLastName'];
$array['billingAddress']['name'] =  $_POST['billingAddressName'];
$array['billingAddress']['street1'] =  $_POST['billingAddressStreet1'];
$array['billingAddress']['street2'] =  $_POST['billingAddressStreet2'];
$array['billingAddress']['county'] =  $_POST['billingAddressCounty'];
$array['billingAddress']['cityName'] =  $_POST['billingAddressCity'];
$array['billingAddress']['zipCode'] =  $_POST['billingAddressZipCode'];
$array['billingAddress']['country'] =  $_POST['billingAddressCountry'];
$array['billingAddress']['state'] =  $_POST['billingAddressState'];
$array['billingAddress']['phoneType'] =  $_POST['billingAddressPhoneType'];
$array['billingAddress']['phone'] =  $_POST['billingAddressPhone'];

//SHIPPING ADDRESS
$array['shippingAddress']['title'] =  $_POST['shippingAddressTitle'];
$array['shippingAddress']['firstName'] =  $_POST['shippingAddressFirstName'];
$array['shippingAddress']['lastName'] =  $_POST['shippingAddressLastName'];
$array['shippingAddress']['name'] =  $_POST['shippingAddressName'];
$array['shippingAddress']['street1'] =  $_POST['shippingAddressStreet1'];
$array['shippingAddress']['street2'] =  $_POST['shippingAddressStreet2'];
$array['shippingAddress']['county'] =  $_POST['shippingAddressCounty'];
$array['shippingAddress']['cityName'] =  $_POST['shippingAddressCity'];
$array['shippingAddress']['zipCode'] =  $_POST['shippingAddressZipCode'];
$array['shippingAddress']['country'] =  $_POST['shippingAddressCountry'];
$array['shippingAddress']['state'] =  $_POST['shippingAddressState'];
$array['shippingAddress']['phoneType'] =  $_POST['shippingAddressPhoneType'];
$array['shippingAddress']['phone'] =  $_POST['shippingAddressPhone'];
?>