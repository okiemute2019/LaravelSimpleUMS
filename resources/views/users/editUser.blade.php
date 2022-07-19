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
        <h1>Edit User</h1>
        <p style="text-align:center"><a href="{{ route('users.index') }}">Back</a></p>
        <form action="{{ url('users/' .$users->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <fieldset>
          <legend>Your Basic info</legend>
          <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" value="{{$users->name}}">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="email" value="{{$users->email}}">
          
          <label for="phone">Phone:</label>
          <input type="tel" id="phone" name="phone" value="{{$users->phone}}">
          
        </fieldset>
    
        <input type="submit" value="Update"></br>
      </form>
      
    </body>
</html>