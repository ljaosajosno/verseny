<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/addRound" id="addRoundForm" method="POST">
        @csrf
        <label for="competition_id">Competition:</label><br>
            <select name="competition_id" id="competition_id" form="addRoundForm" required>
                <option value="" disabled selected>Select a competition</option>
                @foreach ($competitions as $competition)
                <option value="{{ $competition->competition_id }}">{{ $competition->name }}</option>
                @endforeach
            </select><br>

        <label for="round_name">Round name:</label><br>
        <input type="name" id="round_name" name="round_name" required><br>

        <label for="round_date">Date:</label><br>
        <input type="date" id="round_date" name="round_date" required><br>

        <label for="description">Description:</label><br>
        <input type="text" id="description" name="description"><br><br>

        <input type="submit" value="Add Round">
    </form>
</body>
</html>