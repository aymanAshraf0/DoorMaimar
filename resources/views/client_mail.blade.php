<!-- resources/views/emails/client_mail.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Contact Request</title>
</head>
<body>
    <h2>تفاصيل العميل</h2>
    <p>الاسم: {{ $request->input('name') }}</p>
    <p>البريد الالكتروني: {{ $request->input('email') }}</p>
    <p>الرساله: {{ $request->input('message') }}</p>
</body>
</html>
