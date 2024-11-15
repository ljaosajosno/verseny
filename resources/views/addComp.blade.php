<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @auth
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
    @endauth
    
    
</body>
</html>