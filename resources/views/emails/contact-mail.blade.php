<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact-Mail</title>
</head>

<body>
    <p>Sender Name: {{$mailDetails['name']}} </p>
    <p>Sender Email: {{$mailDetails['email']}}</p>
    <p>Title: {{$mailDetails['subject']}} </p>
    <h3>Message</h3>
    <p>{{$mailDetails['message']}}</p>

</body>

</html>