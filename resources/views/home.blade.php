<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container py-5">
        
        @auth
        <div class="d-flex justify-content-end mb-5">
            <form action="/logout" method="POST" class="d-inline">
                @csrf
                <button class="btn btn-danger">Log Out</button>
            </form>
        </div>
        

        <div class="card">
            <div class="card-header text-center bg-primary text-white">
                <h3>Competition Management</h3>
            </div>
            <div class="card-body">
                <div class="list-group">
                    @if (auth()->user()->role === 'admin')
                        <a href="addComp" class="list-group-item list-group-item-action">Add a New Competition</a>
                        <a href="addRound" class="list-group-item list-group-item-action">Add a New Round</a>
                    @endif
                    
                    <a href="addCompetitor" class="list-group-item list-group-item-action">{{ auth()->user()->role === 'admin' ? 'Add a New Competitor' : 'Enter a Competition' }}</a>
                    <a href="competitors" class="list-group-item list-group-item-action">{{ auth()->user()->role === 'admin' ? 'List and Delete Competitors' : 'List Competitors' }}</a>
                </div>
            </div>
        </div>
        @else
       
        <div class="row mb-5">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h3>Register</h3>
                    </div>
                    <div class="card-body">
                        <form action="/register" method="POST" id="register">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" id="address" name="address" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header text-center bg-success text-white">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="/login" method="POST" id="login">
                            @csrf
                            <div class="mb-3">
                                <label for="loginemail" class="form-label">Email Address</label>
                                <input type="email" id="loginemail" name="loginemail" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="loginpassword" class="form-label">Password</label>
                                <input type="password" id="loginpassword" name="loginpassword" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success w-100">Log In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endauth
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
