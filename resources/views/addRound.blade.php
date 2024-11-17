<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Add Round - Competition</title>
    <script src="jquery-3.7.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container py-5">
        @auth
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Add a New Round</h4>
                    </div>
                    <div class="card-body">
                        <form id="addRoundForm" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="competition_id" class="form-label">Competition</label>
                                <select name="competition_id" id="competition_id" form="addRoundForm" class="form-select" required>
                                    <option value="" disabled selected>Select a competition</option>
                                    @foreach ($competitions as $competition)
                                        <option value="{{ $competition->competition_id }}">{{ $competition->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="round_name" class="form-label">Round Name</label>
                                <input type="text" id="round_name" name="round_name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="round_date" class="form-label">Date</label>
                                <input type="date" id="round_date" name="round_date" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" id="description" name="description" class="form-control">
                            </div>

                            <button type="submit"  id="submit" class="btn btn-primary w-100">Add Round</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @else
       
        @endauth

        <div class="text-center mt-4">
            <a href="/" class="btn btn-secondary">Back</a>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('addRoundForm');
    
            form.addEventListener('submit', async function (e) {
                e.preventDefault(); 
    
                const formData = new FormData(form);
    
                try {
                    const response = await fetch('/addRound', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'Accept': 'application/json',
                        },
                        body: formData,
                    });
    
                    if (response.ok) {
                        const result = await response.json();
                        alert(result.message || 'Round added successfully!');
                        form.reset(); 
                    } else {
                        const error = await response.json();
                        alert(
                            error.errors
                                ? Object.values(error.errors)[0][0]
                                : error.message || 'An error occurred. Please try again.'
                        );
                    }
                } catch (err) {
                    console.error('Fetch error:', err);
                    alert('An unexpected error occurred. Please try again.');
                }
            });
        });
    </script>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
