<?php

$apikey='rzp_test_ET7amjIFVY9jXX';

?>
<form action='<?= base_url()?>ca/pay' method='post' >
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apikey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="50000" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="<?php echo 'OID'.rand(10,100).'END'; ?>"// Replace with the order_id generated by you in the backend.
    data-buttontext="Pay Now"
    data-name="API Financial Consultancy"
    data-description="thank for connected to the WhoCart.com"
    data-image="https://example.com/your_logo.jpg"
    data-prefill.name="GAURAV SHARMA"
    data-prefill.email="gaurav.20jics018@jietjodhpur.ac.in"
    data-prefill.Contact="7014274820"
    data-theme.color="#F37254">
    </script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>