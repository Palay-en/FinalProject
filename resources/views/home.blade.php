<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/kcplogo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <title>Evaluation System</title>
</head>

<body>
    @if(session('success'))
        <script type="text/javascript">
            alert("{{ session('success') }}");
        </script>
    @endif
    @auth
        <form action="/logout" method="POST">
            @csrf
            <button>Log Out</button>
        </form>

    @else
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="/register" method="post">
                    @csrf
                    <h1>Create Account</h1>
                    <input type="text" placeholder="Student ID" name="stud_id" />
                    <input type="password" placeholder="Password" name="password" />
                    <select name="department" id="">
                        <option value="---">Select Course</option>
                        <option value="CIT">CIT</option>
                        <option value="CBM">CBM</option>
                        <option value="CCJE">CCJE</option>
                        <option value="CTE">CTE</option>
                    </select>
                    <select name="year_level" id="">
                        <option value="---"> Select Year Level</option>
                        <option value="1styear">1st Year</option>
                        <option value="2ndyear">2nd Year</option>
                        <option value="3rdyear">3rd Year</option>
                        <option value="4thyear">4th Year</option>
                    </select>
                    <select name="section" id="">
                        <option value="---"> Select Section</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                    <button>Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="/login" method="POST">
                    @csrf
                    <h1>Sign in</h1>
                    <input type="text" placeholder="Student ID" name="idlogin" />
                    <input type="password" placeholder="Password" name="loginpassword" />
                    <button>Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>
                            To keep connected with us please login with your personal info
                        </p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start Evaluating your Instructors</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>


        {{-- <form action="/register" method="POST">
            @csrf
            <fieldset>
                <legend>Register</legend>
                <input type="text" name="stud_id" placeholder="Student ID" required>
                <input type="text" name="email" placeholder="email" required>
                <input type="password" name="password" placeholder="password" required><br><br>
                <button>Register</button>
            </fieldset>
        </form>

        <br>

        <form action="/login" method="POST">
            @csrf
            <fieldset>
                <legend>Log In</legend>
                <input type="email" name="loginemail" placeholder="Email" required>
                <input type="password" name="loginpassword" placeholder="password" required><br><br>
                <button>Log In</button>
            </fieldset>

        </form> --}}


    @endauth
</body>
<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add('right-panel-active');
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove('right-panel-active');
    });

    const wrapper = document.querySelector('.wrapper')
    const registerLink = document.querySelector('.register-link')
    const loginLink = document.querySelector('.login-link')

    registerLink.onclick = () => {
        wrapper.classList.add('active')
    }

    loginLink.onclick = () => {
        wrapper.classList.remove('active')
    }

</script>

</html>