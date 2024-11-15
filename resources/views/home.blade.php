<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth

    <form action="/logout" method="POST">
        @csrf
        <button>Log Out</button>
    </form>
    <br><br>
    <a href="addComp">Add a new competition</a>
    <br><br>
    <a href="addRound">Add a new competition</a>

    @else
    <form action="/register" method='POST' id=register>
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" ><br>

        <label for="email">Email address:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>

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