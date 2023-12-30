<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment and Booking Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .message {
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            display: none;
        }

        #paymentMessage {
            background-color: #4caf50;
            color: #fff;
        }

        #bookingMessage {
            background-color: #2196F3;
            color: #fff;
        }

        h1 {
            margin-top: 0;
        }

        p {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Payment and Booking Confirmation</h1>

        <div id="paymentMessage" class="message">
            <p id="paymentText">Payment Accepted!</p>
        </div>

        <div id="bookingMessage" class="message">
            <p id="bookingText">Booking Accepted!</p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            simulatePayment();
            simulateBooking();
            redirectToHome();
        });

        function simulatePayment() {
            setTimeout(function () {
                document.getElementById('paymentMessage').style.display = 'block';
            }, 2000);
        }

        function simulateBooking() {
            setTimeout(function () {
                document.getElementById('bookingMessage').style.display = 'block';
            }, 4000);
        }

        function redirectToHome() {
            setTimeout(function () {
                document.getElementById('bookingText').innerText = 'Redirecting to home...';
                setTimeout(function () {
                    window.location.href = 'home.php';
                }, 2000);
            }, 8000);
        }
    </script>
</body>

</html>
