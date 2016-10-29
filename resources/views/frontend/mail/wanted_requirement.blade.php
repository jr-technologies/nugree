
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nugree.com</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
</head>
<style>
    *, *:after, *:before {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    a {
        outline: none;
        border: 0;
        color: #3156b6;
        display: inline-block;
        vertical-align: top;
    }
    body {
        background: #fff;
        min-width: 320px;
        font-family:'Open Sans', 'Arial', sans-serif;
        font-size: 16px;
        line-height: 25px;
    }
    strong {
        display: block;
        color: #524f4f;
        margin: 0 0 10px;
    }
    p { margin: 0 0 15px;}
    #wrapper:after {
        position: absolute;
        right: 0;
        bottom: 0;
        background:  url('C:\xampp\htdocs\nugree\public/web-aaps/frontend/assets/images/bg.png') no-repeat 100% 100%;
        content: '';
        width: 124px;
        height: 150px;
        z-index: -1;
        opacity: 0.14;
    }
</style>
<body>
<div id="wrapper" style="max-width: 600px; margin: 30px auto; overflow: hidden; background: #fff; position: relative; z-index: 99;">
    <div class="logo" style=" width: 209px; margin: 0 auto;"><a href="#" style=" display: block;"><img src="{{url('/').'/web-aaps/frontend/assets/images/logo.png'}}" alt="nugree.com" width="209" height="54" style=" display: block; width: 100%; height: auto;"></a></div>
    <div class="layout" style="padding: 50px 0;">
        <p>Dear <b>{{$user['name'] }},</b></p>
        <p>Thank you for registering in nugree.com,</p>
        <p>your account has been activated and is ready to be used. Please folllw the link to your Account www.nugree.com to login and your login detail is below:</p>
        <p><a target="_blank" href="http://nugree.com/login">http://nugree.com/login</a></p>
        <strong>{{$user['phone']}}</strong>
            <strong>{{$user['email']}}</strong>
                <strong>{{$user['requirements']}}</strong>
        <strong>Password: xsa25hdbd</strong>
        <p style="color: #b22241; margin: 0; font-weight: 600px;">Membership Plan:</p>
        <p style="margin: 0; font-weight: 600px;">Package: Free</p>
        <p style="margin: 0; font-weight: 600px;">Listing Quota: 25</p>
        <p style="margin: 0; font-weight: 600px;">Price: free</p>
        <p style="color: #b22241; margin: 0; font-weight: 600px;">Active till: 21-11-2016</p>
        <strong style="display: block; text-align: center; padding: 50px 0 0;">Administrator <a href="{{URL::to('/')}}">www.nugree.com</a></strong>
    </div>
</div>
</body>
</html>