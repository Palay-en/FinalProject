<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/evaluation.css') }}">
    <title>Document</title>
</head>
<body>
<header>
    <div class="header-container">
        <div class="user-info">
            <p>Welcome, <strong>{{ auth()->user()->name ?? auth()->user()->stud_id }}</strong>!</p>
        </div>
        <div class="logout">
            <form action="/logout" method="POST">
                @csrf
                <button class="logout-button">Log Out</button>
            </form>
        </div>
    </div>
</header>
@if(auth()->user()->can_evaluate == 1)
    <main>
        <div class="evaluation-access">
            <p>You are authorized to complete the evaluation form.</p>
        </div>
    </main>

    <div class="container">
        <h1>Teacher Evaluation Form</h1>
        <form action="/submit-evaluation" method="POST">
        @csrf

            <div class="container">
                <p>
                    Evaluate the following aspects of the teaching performance in terms of their capacity to provide quality education by marking “✓” in the box of the corresponding column according to the scale given: 
                    <br><strong>5 – Strongly Agree, 4 – Agree, 3 – Neutral, 2 – Disagree, 1 – Strongly Disagree</strong>
                </p>
                
                    <table>
                        <thead>
                            <tr>
                                <th>Aspect</th>
                                <th>5</th>
                                <th>4</th>
                                <th>3</th>
                                <th>2</th>
                                <th>1</th>
                            </tr>
                        </thead>
                        <tbody>
                              <!-- Section A -->
                    <tr>
                        <td><strong>A: Subject Matter Knowledge</strong></td>
                        <td colspan="5"></td>
                    </tr>
                    <tr>
                        <td>1. Have sound and updated knowledge on subject</td>
                        <td><input type="radio" name="subject-1" value="5"></td>
                        <td><input type="radio" name="subject-1" value="4"></td>
                        <td><input type="radio" name="subject-1" value="3"></td>
                        <td><input type="radio" name="subject-1" value="2"></td>
                        <td><input type="radio" name="subject-1" value="1"></td>
                    </tr>
                    <tr>
                        <td>2. Gives adequate information considering students' level</td>
                        <td><input type="radio" name="subject-2" value="5"></td>
                        <td><input type="radio" name="subject-2" value="4"></td>
                        <td><input type="radio" name="subject-2" value="3"></td>
                        <td><input type="radio" name="subject-2" value="2"></td>
                        <td><input type="radio" name="subject-2" value="1"></td>
                    </tr>
                    <tr>
                        <td>3. Makes topics easily understandable</td>
                        <td><input type="radio" name="subject-3" value="5"></td>
                        <td><input type="radio" name="subject-3" value="4"></td>
                        <td><input type="radio" name="subject-3" value="3"></td>
                        <td><input type="radio" name="subject-3" value="2"></td>
                        <td><input type="radio" name="subject-3" value="1"></td>
                    </tr>
                    <tr>
                        <td>4. Gives appropriate and lively examples from real-life situations</td>
                        <td><input type="radio" name="subject-4" value="5"></td>
                        <td><input type="radio" name="subject-4" value="4"></td>
                        <td><input type="radio" name="subject-4" value="3"></td>
                        <td><input type="radio" name="subject-4" value="2"></td>
                        <td><input type="radio" name="subject-4" value="1"></td>
                    </tr>
                    <tr>
                        <td>5. Provides additional material apart from the textbook</td>
                        <td><input type="radio" name="subject-5" value="5"></td>
                        <td><input type="radio" name="subject-5" value="4"></td>
                        <td><input type="radio" name="subject-5" value="3"></td>
                        <td><input type="radio" name="subject-5" value="2"></td>
                        <td><input type="radio" name="subject-5" value="1"></td>
                    </tr>

                    <!-- Section B -->
                    <tr>
                        <td><strong>B: Presentation and Management</strong></td>
                        <td colspan="5"></td>
                    </tr>
                    <tr>
                        <td>1. Has clear and audible voice</td>
                        <td><input type="radio" name="presentation-1" value="5"></td>
                        <td><input type="radio" name="presentation-1" value="4"></td>
                        <td><input type="radio" name="presentation-1" value="3"></td>
                        <td><input type="radio" name="presentation-1" value="2"></td>
                        <td><input type="radio" name="presentation-1" value="1"></td>
                    </tr>
                    <tr>
                        <td>2. Keeps class lively using wit (humor) & body language</td>
                        <td><input type="radio" name="presentation-2" value="5"></td>
                        <td><input type="radio" name="presentation-2" value="4"></td>
                        <td><input type="radio" name="presentation-2" value="3"></td>
                        <td><input type="radio" name="presentation-2" value="2"></td>
                        <td><input type="radio" name="presentation-2" value="1"></td>
                    </tr>
                    <tr>
                        <td>3. Encourages students' participation (question-answer)</td>
                        <td><input type="radio" name="presentation-3" value="5"></td>
                        <td><input type="radio" name="presentation-3" value="4"></td>
                        <td><input type="radio" name="presentation-3" value="3"></td>
                        <td><input type="radio" name="presentation-3" value="2"></td>
                        <td><input type="radio" name="presentation-3" value="1"></td>
                    </tr>
                    <tr>
                        <td>4. Controls and maintain conducive environment for learning</td>
                        <td><input type="radio" name="presentation-4" value="5"></td>
                        <td><input type="radio" name="presentation-4" value="4"></td>
                        <td><input type="radio" name="presentation-4" value="3"></td>
                        <td><input type="radio" name="presentation-4" value="2"></td>
                        <td><input type="radio" name="presentation-4" value="1"></td>
                    </tr>
                    <tr>
                        <td>5. Provide and maintain lesson plan</td>
                        <td><input type="radio" name="presentation-5" value="5"></td>
                        <td><input type="radio" name="presentation-5" value="4"></td>
                        <td><input type="radio" name="presentation-5" value="3"></td>
                        <td><input type="radio" name="presentation-5" value="2"></td>
                        <td><input type="radio" name="presentation-5" value="1"></td>
                    </tr>
                      <!-- Section C -->
                    <tr>
                        <td><strong>C: Assessment</strong></td>
                        <td colspan="5"></td>
                    </tr>
                    <tr>
                        <td>1. Remains keen and use multiple techniques for continuous
                            Assessment</td>
                        <td><input type="radio" name="interaction-1" value="5"></td>
                        <td><input type="radio" name="interaction-1" value="4"></td>
                        <td><input type="radio" name="interaction-1" value="3"></td>
                        <td><input type="radio" name="interaction-1" value="2"></td>
                        <td><input type="radio" name="interaction-1" value="1"></td>
                    </tr>
                    <tr>
                        <td>2. Sets easily understandable questions</td>
                        <td><input type="radio" name="interaction-2" value="5"></td>
                        <td><input type="radio" name="interaction-2" value="4"></td>
                        <td><input type="radio" name="interaction-2" value="3"></td>
                        <td><input type="radio" name="interaction-2" value="2"></td>
                        <td><input type="radio" name="interaction-2" value="1"></td>
                    </tr>
                    <tr>
                        <td>3. Sets questions relevant to intended learning outcomes</td>
                        <td><input type="radio" name="interaction-3" value="5"></td>
                        <td><input type="radio" name="interaction-3" value="4"></td>
                        <td><input type="radio" name="interaction-3" value="3"></td>
                        <td><input type="radio" name="interaction-3" value="2"></td>
                        <td><input type="radio" name="interaction-3" value="1"></td>
                    </tr>
                    <tr>
                        <td>4. Remains fair and unbiased in assessment</td>
                        <td><input type="radio" name="interaction-4" value="5"></td>
                        <td><input type="radio" name="interaction-4" value="4"></td>
                        <td><input type="radio" name="interaction-4" value="3"></td>
                        <td><input type="radio" name="interaction-4" value="2"></td>
                        <td><input type="radio" name="interaction-4" value="1"></td>
                    </tr>
                    <tr>
                        <td>5. Provide prompt feedback after every assessment</td>
                        <td><input type="radio" name="interaction-5" value="5"></td>
                        <td><input type="radio" name="interaction-5" value="4"></td>
                        <td><input type="radio" name="interaction-5" value="3"></td>
                        <td><input type="radio" name="interaction-5" value="2"></td>
                        <td><input type="radio" name="interaction-5" value="1"></td>
                    </tr>
                     <!-- Section D -->
                     <tr>
                        <td><strong>D: Students’ Development</strong></td>
                        <td colspan="5"></td>
                    </tr>
                    <tr>
                        <td>1. Always keen to explore potentials of the students</td>
                        <td><input type="radio" name="management-1" value="5"></td>
                        <td><input type="radio" name="management-1" value="4"></td>
                        <td><input type="radio" name="management-1" value="3"></td>
                        <td><input type="radio" name="management-1" value="2"></td>
                        <td><input type="radio" name="management-1" value="1"></td>
                    </tr>
                    <tr>
                        <td>2. Provide guidance and counseling</td>
                        <td><input type="radio" name="management-2" value="5"></td>
                        <td><input type="radio" name="management-2" value="4"></td>
                        <td><input type="radio" name="management-2" value="3"></td>
                        <td><input type="radio" name="management-2" value="2"></td>
                        <td><input type="radio" name="management-2" value="1"></td>
                    </tr>
                    <tr>
                        <td>3. Plays a role model for values and ethics</td>
                        <td><input type="radio" name="management-3" value="5"></td>
                        <td><input type="radio" name="management-3" value="4"></td>
                        <td><input type="radio" name="management-3" value="3"></td>
                        <td><input type="radio" name="management-3" value="2"></td>
                        <td><input type="radio" name="management-3" value="1"></td>
                    </tr>
                    <!-- Section E -->
                    <tr>
                        <td><strong>E: Professional Behavior</strong></td>
                        <td colspan="5"></td>
                    </tr>
                    <tr>
                        <td>1. Remains honest, polite and gentle in any situation</td>
                        <td><input type="radio" name="performance-1" value="5"></td>
                        <td><input type="radio" name="performance-1" value="4"></td>
                        <td><input type="radio" name="performance-1" value="3"></td>
                        <td><input type="radio" name="performance-1" value="2"></td>
                        <td><input type="radio" name="performance-1" value="1"></td>
                    </tr>
                    <tr>
                        <td>2. Shows respect towards students and encourages class participation</td>
                        <td><input type="radio" name="performance-2" value="5"></td>
                        <td><input type="radio" name="performance-2" value="4"></td>
                        <td><input type="radio" name="performance-2" value="3"></td>
                        <td><input type="radio" name="performance-2" value="2"></td>
                        <td><input type="radio" name="performance-2" value="1"></td>
                    </tr>
                    <tr>
                        <td>3. Arrives and leaves the class on time</td>
                        <td><input type="radio" name="performance-3" value="5"></td>
                        <td><input type="radio" name="performance-3" value="4"></td>
                        <td><input type="radio" name="performance-3" value="3"></td>
                        <td><input type="radio" name="performance-3" value="2"></td>
                        <td><input type="radio" name="performance-3" value="1"></td>
                    </tr>
                    <tr>
                        <td>4. Always completes the whole course</td>
                        <td><input type="radio" name="performance-4" value="5"></td>
                        <td><input type="radio" name="performance-4" value="4"></td>
                        <td><input type="radio" name="performance-4" value="3"></td>
                        <td><input type="radio" name="performance-4" value="2"></td>
                        <td><input type="radio" name="performance-4" value="1"></td>
                    </tr>
                    <tr>
                        <td>5. Available during the specified office hours and for after-class
                            Consultations</td>
                        <td><input type="radio" name="performance-5" value="5"></td>
                        <td><input type="radio" name="performance-5" value="4"></td>
                        <td><input type="radio" name="performance-5" value="3"></td>
                        <td><input type="radio" name="performance-5" value="2"></td>
                        <td><input type="radio" name="performance-5" value="1"></td>
                    </tr>
                        </tbody>
                    </table>
            </div>
            <div class="submit">
                <button class="btn-submit">Submit</button>          </div>
        </form>
    </div>
    @else
    <div class="access-denied">
        <h1>Access Denied</h1>
        <p>You are not authorized to fill out the evaluation form.</p>
        <p class="contact-info">Please contact your administrator for assistance.</p>
    </div>
@endif
</body>
<script>
    
</script>
</html>