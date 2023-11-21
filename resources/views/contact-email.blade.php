<!DOCTYPE html>

<html>

<head>

    <title>Amsis India</title>

</head>

<body>

    <h1>Amsis India Website Contact Form has Submitted.</h1>

    <p>Name: {{ $contactData->name }}</p>
    <p>Email: {{ $contactData->email }}</p>
    <p>Subject: {{ $contactData->subject }}</p>
    <p>Message: {{ $contactData->message }}</p>

</body>

</html>