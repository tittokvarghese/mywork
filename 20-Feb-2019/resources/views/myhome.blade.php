<!--@extends('layouts.app1')
-->
@extends('layouts.app1')

	@section('title')
    
      Welcome to 




<div style="font-size:14px;text-align:left;">
<form method="post" action="../created/">
@csrf

Name:<br /><input type="text" name="name" /><br />
Roll No:<br /><input type="text" name="rollno" /><br />
Phone No:<br /><input type="text" name="phno" /><br />
Dept:<br /><input type="text" name="dept" /><br />
Address:<br /><input type="text" name="address" /><br />

<input type="submit" value="Save" />
</form>



<br /><br />


<div class="container">
<p>Data of the Registered Users.</p> 
<table class="table table-bordered">
<thead>
<tr>
<th>Id</th>
<th>Name</th>
<th>Roll no</th>
<th>Update</th>
<th>Delete</th>




</tr>
</thead>
<tbody>
@foreach($users as $value)
<tr>
<td>{{ $value->uid }}</td>
<td>{{ $value->name }}</td>
<td>{{ $value->rollno }}</td>
<td><a href="{{url('../update', [$value->uid])}}">Update</a></td>
<td><a href="{{url('../destroy', [$value->uid])}}" onclick="return confirm('Are you sure?')">Delete</a></td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>

@endsection