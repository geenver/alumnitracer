<!DOCTYPE html>
<html>

<head>
    <title>Sign In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" async defer></script>
    <scipt src="./script.js"></scipt>
    <style>
        .g-sigin2 {
            margin-left: 500px;
            margin-top: 200px;
        }

        .data {
            display: none;

        }
    </style>
</head>

<body>

    <div class="g-sigin2" data-onsuccess="onSignIn"></div>
    <div class="data">
        <p>Propile Details</p>
        <img id="pic" class="img-circle" width="100" height="100" />
        <p>Email Address</p>
        <p id="email" class="alert alert-danger"></p>
        <button onclick="signOut()" class="btn btn-danger">SignOut</button>
    </div>
</body>

</html>