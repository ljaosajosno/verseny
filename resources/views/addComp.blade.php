<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Competition</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container py-5">
        @auth
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Add New Competition</h4>
                    </div>
                    <div class="card-body">
                        <form action="/addComp" method="POST" id="addComp">
                            @csrf

                            <div class="mb-3">
                                <label for="compname" class="form-label">Name</label>
                                <input type="text" id="compname" name="compname" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="compyear" class="form-label">Year</label>
                                <input type="month" id="compyear" name="compyear" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="complang" class="form-label">Language</label>
                                <input type="text" id="complang" name="complang" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="compptscor" class="form-label">Points for Correct Answer</label>
                                <input type="number" id="compptscor" name="compptscor" class="form-control" value="1" required>
                            </div>

                            <div class="mb-3">
                                <label for="compptsemp" class="form-label">Points for Empty Answer</label>
                                <input type="number" id="compptsemp" name="compptsemp" class="form-control" value="0" required>
                            </div>

                            <div class="mb-3">
                                <label for="compptsinc" class="form-label">Points for Incorrect Answer</label>
                                <input type="number" id="compptsinc" name="compptsinc" class="form-control" value="-1" required>
                            </div>

                            <div class="mb-3">
                                <label for="desc" class="form-label">Description</label>
                                <input type="text" id="desc" name="desc" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Add Competition</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @else
        <!-- Handle unauthenticated users -->
        @endauth

        <div class="text-center mt-4">
            <a href="/" class="btn btn-secondary">Back</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
