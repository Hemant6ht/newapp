<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="images/d.png">
    <link rel="stylesheet" href="./css/thanks.css">
    <title>Dukan-Thankyou</title>
</head>
<body>
    <div class="main_container">
        <div class="thankyou_img">
            <img src="./images/thank.jpg" alt="thankyou"/>
        </div>
        <div class="user_name">
            <h2>Your OrderId : <span style="color: red">{{ $orderid }}</span></h2>
        </div>
        <div class="navigate">
            <a class="btn btnshoping" href="/">Continue Shoping</a>
            <a class="btn btnorder"href="/orders">My Orders</a>
        <div>
    </div>
</body>
</html>