<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Competitor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container py-5">
        @auth
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Add Competitor</h4>
                    </div>
                    <div class="card-body">
                        <form action="/addCompetitor" id="addCompetitorForm" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="competition_id" class="form-label">Competition</label>
                                <select name="competition_id" id="competition_id" form="addCompetitorForm" class="form-select" required>
                                    <option value="" disabled selected>Select a competition</option>
                                    @foreach ($competitions as $competition)
                                        <option value="{{ $competition->competition_id }}">{{ $competition->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="round_id" class="form-label">Round</label>
                                <select name="round_id" id="round_id" form="addCompetitorForm" class="form-select" required>
                                    <option value="" disabled selected>Select a round</option>
                                    @foreach ($rounds as $round)
                                        <option value="{{ $round->round_id }}">{{ $round->round_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="user_id" class="form-label">User</label>
                                <select name="user_id" id="user_id" form="addCompetitorForm" class="form-select" required>
                                    <option value="" disabled selected>Select a user</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->user_id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Add Competitor</button>
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
        
        document.getElementById('competition_id').addEventListener('change', function() {
            var competitionId = this.value;

            var rounds = @json($rounds);

            var filteredRounds = rounds.filter(function(round) {
                return round.competition_id == competitionId;
            });

            var roundSelect = document.getElementById('round_id');

            roundSelect.innerHTML = '<option value="" disabled selected>Select a round</option>';

            filteredRounds.forEach(function(round) {
                var option = document.createElement('option');
                option.value = round.round_id;
                option.textContent = round.round_name;
                roundSelect.appendChild(option);
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
