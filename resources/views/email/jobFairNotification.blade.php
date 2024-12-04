<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            border: 1px solid #ddd;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .header {
            text-align: center;
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
        }
        .content {
            padding: 20px;
            font-size: 14px;
            line-height: 1.6;
            color: #333;
        }
        .content table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .event-details {
            margin: 20px 0;
            padding: 10px;
            background-color: #e0f7fa;
            border-left: 4px solid #00acc1;
        }
        .event-details p {
            margin: 5px 0;
        }
        .content table td {
            padding: 8px;
            border: 1px solid #ddd;
            vertical-align: top;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #555;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>Mega Job Fair Registration</h1>
        </div>
        <div class="content">
            <p>Dear {{$data['name']}},</p>
            <p>Thank you for registering for the <b>“Mega Job Fair”</b> on <b>December 12, 2024</b>, presented by the Department of Commerce, University of Mumbai, in collaboration with ICA Edu Skills! We are thrilled to connect you with potential employers and provide meaningful career opportunities.</p>
            <p><b>Entry is free of cost for all registered participants.</b></p>

            <div class="event-details">
                <h2>Event Details:</h2>
                <p>📅 <strong>Next Steps:</strong>To secure your entry coupon and receive a free employability assessment, please visit the below select venue with your updated resume, ID proof, and 2 photos. Last date of registration and coupon collection is <b>December 7, 2024</b>.</p>
                <p>📍 <strong>Location:</strong> {{$data['center_name']}} , {{$data['center_address']}}</p>
                <p>⏰ <strong>Time to collect coupon:</strong> 10:00 AM to 5:30 PM</p>
                <p>📞 <strong>Contact:</strong><a href="tel:{{$data['center_mobile']}}" > {{$data['center_mobile']}}</a></p>
            </div>

            <p><b>What to Expect at the Job Fair:</b></p>
            <ul>
                <li>Meet recruiters from top companies.</li>
                <li>Explore job openings tailored to your qualifications.</li>
                <li>Gain insights into in-demand skills for today's job market.</li>
            </ul>

            <p><b>Tips for Success:</b></p>
            <ul>
                <li>Bring multiple copies of your updated resume.</li>
                <li>Dress professionally to create a strong impression.</li>
                <li>Be prepared to confidently showcase your skills and experience.</li>
            </ul>

            <p>If you have any questions or need further assistance, feel free to reply to this email or call on the above-mentioned number. We look forward to welcoming you at the event and supporting you on your career journey!</p>

            <p>Best Regards,<br><b>ICA Edu Skills Team</b></p>
        </div>
        <div class="footer">
            &copy; 2024 ICA Edu Skills. All rights reserved.
        </div>
    </div>
</body>
</html>
