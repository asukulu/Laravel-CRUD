<!DOCTYPE HTML>
<html lang="en">
	<head>
	<meta charset="UTF-8">
    <title> Aston Events</title>
    </head>
	</body>
    

    @if (isset($errors) && $errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error) 
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<!-- displaying error and success message-->
 @if (session()->has('error'))
<div class="alert alert-danger">
{{ session()->get('error') }} </div>
@endif 

@if (session()->has('success'))
<div class="alert alert-success">
{{ session()->get('succes') }} </div>
@endif 

@yield('content')


    </body>
</html>