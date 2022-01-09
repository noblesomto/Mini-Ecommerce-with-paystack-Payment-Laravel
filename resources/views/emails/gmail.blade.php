<!DOCTYPE html>
<html>
<head>
    <title>kings</title>
</head>
<body>
    <h1>Please Verify your email</h1>
    <p>Click on the link to verify email address <a class="btn" href="{{  url('/verifyaccount/'. $details['user_id'].'/'.$details['token']) }}">Verify</a></p>

    <p>Thank you</p>
</body>
</html>