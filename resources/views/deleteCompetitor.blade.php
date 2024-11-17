<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competitors List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Competitors List</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Competitor Name</th>
                    <th>Competition</th>
                    <th>Round</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($competitors as $competitor)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $competitor->user->name ?? 'No User' }}</td>
                    <td>{{ $competitor->competition->name ?? 'No Competition' }}</td>
                    <td>{{ $competitor->round ? $competitor->round->round_name : 'No Round' }}</td>
                    <td>{{ $competitor->score }}</td>
                    @if (auth()->user()->role === 'admin')
                        <td>
                            <form action="/deleteCompetitors/{{ $competitor->competitor_id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" 
                                        onclick="return confirm('Are you sure you want to delete this competitor?');">
                                    Delete
                                </button>
                            </form>
                            
                        </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
