<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/instructors.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>CCJE Department</h1>
        </header>
        <!-- Back Button -->
        <div class="back-btn-container">
            <a href="/dashboard" class="back-btn">Back to Dashboard</a>
        </div>
        <form action="/logout" method="POST" class="logout-form">
            @csrf
            <button class="logout-btn">Log Out</button>
        </form>

        @if($instructors->isEmpty())
            <p class="no-instructors">No instructors available.</p>
        @else
            <form action="/giveEvaluationAccess" method="POST" class="evaluation-form">
                @csrf

                <fieldset class="fieldset">
                    <legend>Instructors</legend>
                    @foreach($instructors as $instructor)
                        <div class="radio-item">
                            <input id="radio{{ $instructor->inst_id }}" type="radio" name="evt_inst"
                                value="{{ $instructor->inst_id }}">
                            <label for="radio{{ $instructor->inst_id }}">{{ $instructor->inst_name }}</label>
                        </div>
                    @endforeach
                </fieldset>

                <fieldset class="fieldset">
                    <legend>Year Level</legend>
                    <label class="radio-label">
                        <input type="radio" name="yearlevel" id="firstyear" value="1styear"> First Year
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="yearlevel" id="secondyear" value="2ndyear"> Second Year
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="yearlevel" id="thirdyear" value="3rdyear"> Third Year
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="yearlevel" id="fourthyear" value="4thyear"> Fourth Year
                    </label>
                </fieldset>

                <fieldset class="fieldset">
                    <legend>Section</legend>
                    <label class="radio-label">
                        <input type="radio" name="section" id="A" value="A"> A
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="section" id="B" value="B"> B
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="section" id="C" value="C"> C
                    </label>
                </fieldset>

                <button type="submit" class="submit-btn">Give Evaluation Access</button>
            </form>

        @endif
    </div>
</body>

</html>