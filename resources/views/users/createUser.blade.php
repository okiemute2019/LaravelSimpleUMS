<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Registration</title>
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ asset('/css/formstyles.css') }}">
    </head>
    <body>
        <h1>New User</h1>
        <div>
        <p style="text-align:center"><a href="{{ route('users.index') }}">Back</a></p>
        </div>
        <form action="{{ url('users/') }}" method="post">
        {!! csrf_field() !!}
        <fieldset>
          <legend>Your Basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="email">
          
          <label for="phone">Phone:</label>
          <input type="tel" id="phone" name="phone">
          
        </fieldset>
    
        <button type="submit">Submit</button>
      </form>
      
    </body>
</html>