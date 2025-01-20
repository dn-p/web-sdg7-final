/* FILE: form.php */

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>Join Us</h1>
        <form action="submit_form.php" method="POST">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="domisili">Domisili:</label>
            <input type="text" id="domisili" name="domisili" required>

            <label for="role">Ingin bergabung sebagai:</label>
            <select id="role" name="role" required>
                <option value="volunteer">Volunteer</option>
                <option value="donatur">Donatur</option>
                <option value="partner">Partner</option>
                <option value="mentor">Mentor</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>