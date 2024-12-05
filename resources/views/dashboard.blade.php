<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/depts.css') }}">
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
        <form action="/logout" method="POST">
            @csrf
            <button class="logout-btn">Log Out</button>
        </form>
        <button onclick="openModal()" class="add-instructor-btn">Add Instructor</button>
    </header>

    <div id="modalOverlay" class="modal-overlay">
        <div class="modal">
            <h2>Add Instructor</h2>
            <form method="POST" action="/addInstructor">
                @csrf
                <input type="text" id="inst_name" name="inst_name" placeholder="Instructor Name" class="input-field"><br><br>
                <select name="department" class="select-field">
                    <option value="---">Select Department</option>
                    <option value="CIT">CIT</option>
                    <option value="CBM">CBM</option>
                    <option value="CCJE">CCJE</option>
                    <option value="CTE">CTE</option>
                </select><br><br>
                <button type="submit" class="submit-btn">Submit</button>
                <button type="button" class="close-btn" onclick="closeModal()">Cancel</button>
            </form>
        </div>
    </div>

    <li>Welcome, {{ auth()->user()->name ?? auth()->user()->stud_id }}!</li>

    <section class="depts">
        <div class="cit-dept" onclick="window.location.href='/citdept'">
            CIT
        </div>
        <div class="cit-dept" onclick="window.location.href='/cbmdept'">
            CBM
        </div>
        <div class="cit-dept" onclick="window.location.href='/ctedept'">
            CTE
        </div>
        <div class="cit-dept" onclick="window.location.href='/ccjedept'">
            CCJE
        </div>
    </section>
</body>
<script>
     function openModal() {
            document.getElementById('modalOverlay').style.display = 'block';
        }

        // Function to close the modal
        function closeModal() {
            document.getElementById('modalOverlay').style.display = 'none';
        }
</script>
</html>
