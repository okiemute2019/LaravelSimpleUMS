<!DOCTYPE html>
<html>
<head>
<title>Simple User Management System</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/tablestyles.css') }}" media="all" />
   
</head>
<body>
<div class="container">

<div style="padding-left:305px;">
<h1>Simple User Management System</h1>
<a href="{{ url('users/create') }}" title="Add New User">Add New</a><br/>     
<table>
  <tr>
    <th class="c1">ID</th>
    <th class="c2">Name</th>
    <th class="c3">Email</th>
    <th class="c4">Phone</th>
    <th class="c1">Actions</th>
  </tr>
  @foreach ($users as $item)
  <tr>
    <td class="c1">{{ $loop->iteration }}</td>
    <td class="c2">{{ $item->name }}</td>
    <td class="c3">{{ $item->email }}</td>
    <td class="c4">{{ $item->phone }}</td>
    <td class="c1">
    <a href="{{ url('/users/' . $item->id . '/edit') }}" title="Edit User"><button>Edit</button></a>
    <form method="POST" action="{{ url('/users' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit" title="Delete User" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button>
    </form>    
    </td>
  </tr>
  @endforeach
</table> 
</div>  
</div>

</body>
</html>