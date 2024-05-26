<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>welcome</h1>
    <h1>Buat Account Baru !</h1>
    <h2>Sign Up Form</h2>
   <form action="/welcome"method="post">
    @csrf
    <label>First Name:</label><br>
    <input type="text"><br><br>
    <label>Last Name:</label><br>
    <input type="text"><br><br>
    <label>Gender:</label><br><br>
    <input type="radio"name="Gender">Peria <br>
    <input type="radio"name="Gender">Wanita <br>
    <input type="radio"name="Gender">Bencong <br><br>
    <label>Nationality:</label><br>
    <select name="Nationality" >
    <option value=""></option>
    <option value="">Jepang</option>
    <option value="">Korea</option>
    <option value="">Indonesia</option>
    </select><br><br>
    <label>Language Spoken:</label><br><br>
    <input type="checkbox" name="Language Spoken">Bahasa Indonesia<br>
    <input type="checkbox" name="Language Spoken">English<br>
    <input type="checkbox" name="Language Spoken">Other<br>
    <label>Bio:</label><br>
    <textarea   cols="30" rows="10"></textarea><br><br>
    
    <button type="submit"></button><br><br>

   </form>
<a href="/">kembali</a>
</body>
</html>