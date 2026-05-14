<!DOCTYPE html>
<html>
<head>
    <title>New Consultation Inquiry</title>
</head>
<body style="font-family: sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #eee; border-radius: 10px;">
        <h2 style="color: #0d47a1; border-bottom: 2px solid #0d47a1; padding-bottom: 10px;">New Consultation Inquiry</h2>
        
        <p><strong>Name:</strong> {{ $inquiry->name }}</p>
        <p><strong>Email:</strong> {{ $inquiry->email }}</p>
        <p><strong>Phone:</strong> {{ $inquiry->phone ?? 'N/A' }}</p>
        <p><strong>Interest/Subject:</strong> {{ $inquiry->subject ?? 'N/A' }}</p>
        
        <div style="background-color: #f9f9f9; padding: 15px; border-radius: 5px; margin-top: 20px;">
            <p><strong>Message:</strong></p>
            <p>{{ $inquiry->message }}</p>
        </div>
        
        <p style="margin-top: 30px; font-size: 0.8em; color: #777;">
            This email was sent from the consultation form on {{ config('app.name') }}.
        </p>
    </div>
</body>
</html>
