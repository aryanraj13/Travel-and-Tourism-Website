<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>GlobeGlider</title>
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="images/favicon.png">
    <style type="text/css">
        .razorpay-payment-button {
            background-color: #ffc312;
            border: none;
            width: 30%;
            border-radius: 5px;
            color: white;
            height: 10%;
            margin-left: 35%;
            top: 50%;
            position: absolute;
            font-size: 24px;
        }
    </style>
</head>

<body>
    <form id="paymentForm" action="paymentaccepted.php" method="POST">
        <script src="https://checkout.razorpay.com/v1/checkout-new.js" data-key="<?php echo $razor_api_key ;?>" data-amount="<?php echo $amt ;?>" data-name="GlobeGlider" data-image="images/favicon.png" data-prefill.name="" data-prefill.email="support@GlobeGlider.com" data-theme.color="#ffc312"></script>
        <input type="hidden" value="Hidden Element" name="hidden">
        <input type="hidden" value="<?php echo $tripID ;?>" name="idKeLiye">
        <input type="hidden" value="<?php echo $userEmail ;?>" name="MailKeLiye">
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var form = document.getElementById('paymentForm');

            function handlePaymentSuccess(response) {
                console.log('Payment successful:', response);

                window.location.href = 'paymentaccepted.php?idKeLiye=<?php echo $tripID; ?>&MailKeLiye=<?php echo $userEmail; ?>';

                fetch('upload.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'idKeLiye=<?php echo $tripID; ?>&MailKeLiye=<?php echo $userEmail; ?>',
                }).then(response => response.text()).then(data => console.log(data));
            }

            function initializeRazorpay() {
                var options = {
                    key: '<?php echo $razor_api_key ;?>',
                    amount: '<?php echo $amt ;?>',
                    name: 'GlobeGlider',
                    image: 'images/favicon.png',
                    prefill: {
                        name: '',
                        email: 'support@GlobeGlider.com'
                    },
                    theme: {
                        color: '#ffc312'
                    },
                    handler: function (response) {
                        handlePaymentSuccess(response);
                    }
                };

                var rzp = new Razorpay(options);
                rzp.open();
            }

            form.addEventListener('submit', function (event) {
                event.preventDefault();
                initializeRazorpay();
            });
        });
    </script>
</body>

</html>
