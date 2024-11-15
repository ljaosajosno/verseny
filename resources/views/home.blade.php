<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
    <p>you are logged in :D</p>
    <form action="/logout" method="POST">
        @csrf
        <button>Log Out</button>
    </form>
    <br><br>
    <form action="/addComp" method='POST' id=addComp>
        @csrf
        <label for="compname">Name:</label><br>
        <input type="text" id="compname" name="compname"><br>

        <label for="compyear">Year:</label><br>
        <input type="month" id="compyear" name="compyear"><br>

        <label for="complang">Langauge:</label><br>
        <input type="text" id="complang" name="complang"><br>

        <label for="compptscor">Points for correct answer:</label><br>
        <input type="number" id="compptscor" name="compptscor" value=1><br>

        <label for="compptsemp">Points for empty answer:</label><br>
        <input type="number" id="compptsemp" name="compptsemp" value=0><br>

        <label for="compptsinc">Points for incorrect answer:</label><br>
        <input type="number" id="compptsinc" name="compptsinc" value=-1><br>

        <label for="desc">Description:</label><br>
        <input type="text" id="desc" name="desc"><br><br>

        <input type="submit" value="Add Competition">
    </form>

    @else
    <form action="/register" method='POST' id=register>
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="email">Email address:</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>

        <label for="phone">Phone number::</label><br>
        <input type="tel" id="phone" name="phone"><br>

        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address"><br><br>

        <input type="submit" value="Register">
    </form>
    <br><br>
    <form action="/login" method='POST' id=login>
        @csrf

        <label for="loginemail">Email address:</label><br>
        <input type="email" id="loginemail" name="loginemail"><br>

        <label for="loginpassword">Password:</label><br>
        <input type="password" id="loginpassword" name="loginpassword"><br>

        <input type="submit" value="Log in">
    </form>

    @endauth

    
</body>
</html>