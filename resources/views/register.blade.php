<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>Sign Up Form</title>
    </head>

    <body>
        <form action="/greet" method="POST">
            @csrf
            <h1>Buat Account Baru!</h1>
            <h3>Sign Up Form</h3>

            <p>First name:</p>
            <input type="text" name="firstname" placeholder="Write your first name">

            <p>Last name:</p>
            <input type="text" name="lastname" placeholder="Write your last name">

            <p>Gender:</p>
            <input type="radio" name="gender" value="male">
            <label>Male</label><br>
            <input type="radio" name="gender" value="female">
            <label>Female</label><br>
            <input type="radio" name="gender" value="other">
            <label>Other</label><br>

            <p>Nationality:</p>
            <select id="nationality" name="nationality">
                <option>Indonesian</option>
                <option>Singapore</option>
                <option>Malaysia</option>
                <option>Timor Leste</option>
            </select>

            <p>Language Spoken:</p>
            <input type="checkbox" name="language1" value="indonesia">
            <label>Bahasa Indonesia</label><br>
            <input type="checkbox" name="language2" value="english">
            <label>English</label><br>
            <input type="checkbox" name="language3" value="other">
            <label>Other</label><br>

            <p>Bio:</p>
            <textarea rows="10" cols="30">
            </textarea><br>

            <input type="submit" value="Sign Up">
        </form>
    </body>
</html>
