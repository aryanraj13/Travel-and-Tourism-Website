<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - GlobeGlider</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background-color: black;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .faq-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .question {
            cursor: pointer;
            padding: 15px;
            border-bottom: 1px solid #ddd;
            transition: background-color 0.3s;
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }

        .question:hover {
            background-color: #f4f4f4;
        }

        .answer {
            display: none;
            padding: 15px;
            font-size: 18px;
            line-height: 1.6;
            color: #555;
        }

        .show-answer {
            display: block;
        }
    </style>
</head>
<body>
    <header>
        Frequently Asked Questions
    </header>

    <div class="faq-container">
        <div class="question" onclick="toggleAnswer('q1')">
            Q1. How do I book a trip on GlobeGlider?
        </div>
        <div class="answer" id="q1">
            A1. Booking a trip is easy! Simply log in to your account, browse the available trips, and click on "Book Now."
        </div>

        <div class="question" onclick="toggleAnswer('q2')">
            Q2. What payment methods are accepted?
        </div>
        <div class="answer" id="q2">
            A2. We accept various payment methods, including credit cards, debit cards, and online payment gateways.
        </div>

        <div class="question" onclick="toggleAnswer('q3')">
            Q3. Can I cancel my booking?
        </div>
        <div class="answer" id="q3">
            A3. Yes, you can cancel your booking. However, cancellation policies may apply. Please check the specific trip details for more information.
        </div>

        <div class="question" onclick="toggleAnswer('q4')">
            Q4. How can I view the details of my booked trip?
        </div>
        <div class="answer" id="q4">
            A4. Once logged in, go to your account dashboard and navigate to the "My Trips" section to view details of your booked trips.
        </div>

        <div class="question" onclick="toggleAnswer('q5')">
            Q5. Are travel insurance and accommodation included in the trip price?
        </div>
        <div class="answer" id="q5">
            A5. No, travel insurance and accommodation are not included. The listed price covers the base cost of the trip only.
        </div>

        <div class="question" onclick="toggleAnswer('q6')">
            Q6. How can I change my account password?
        </div>
        <div class="answer" id="q6">
            A6. Visit the account settings page, and you'll find an option to change your password. Follow the instructions to update it.
        </div>

        <div class="question" onclick="toggleAnswer('q7')">
            Q7. What should I do if I encounter issues during the booking process?
        </div>
        <div class="answer" id="q7">
            A7. If you face any issues, contact our support team at support@globeglider.com for assistance.
        </div>

        <div class="question" onclick="toggleAnswer('q8')">
            Q8. How can I apply a promo code to my booking?
        </div>
        <div class="answer" id="q8">
            A8. During the checkout process, you'll find a field to enter your promo code. Enter it, and the discount will be applied.
        </div>

        <div class="question" onclick="toggleAnswer('q9')">
            Q9. Can I customize my travel itinerary?
        </div>
        <div class="answer" id="q9">
            A9. Unfortunately, we currently do not offer customization of itineraries. However, we provide a diverse range of pre-planned trips.
        </div>


        <div class="question" onclick="toggleAnswer('q10')">
            Q10. How do I contact customer support?
        </div>
        <div class="answer" id="q10">
            A10. For customer support, you can reach us at 24/7 hotline: 1-800-123-4567 or email us at support@globeglider.com.
        </div>
    </div>

    <script>
        function toggleAnswer(id) {
            var answer = document.getElementById(id);
            if (answer.style.display === 'block') {
                answer.style.display = 'none';
            } else {
                answer.style.display = 'block';
            }
        }
    </script>
</body>
</html>
