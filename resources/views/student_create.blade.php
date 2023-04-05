<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studentInfo</title>
    <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
    <h1 class="title">Student Information</h1>

    <div>
<form action="/store" method="post">
   @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <label>First name</label>
    <input type="text" name="first_name" placeholder="Your name.."><br>
    <label>Last name</label>
    <input type="text" name="last_name" placeholder="Your Last name.."><br>
    <label>Email</label>
    <input type="text" name="email"><br>
    <label>Birthdate</label>
    <input type="text" name="birthdate"><br>
    <label>Collage</label>
    <input type="text" name="collage"><br>
    <input type="submit" value="create">
</form>
</div>
</body>
</html>

