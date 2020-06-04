<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="{{'/admin/animals/'.$edit->id}}" method="POST" enctype="multipart/form-data">
		@csrf
		@method("PATCH")
		<input type="" name="title" value="{{$edit->title}}">
        <input type="" name="description" value="{{$edit->description}}">
        <input type="" name="price" value="{{$edit->price}}">
		<input type="file" name="image">
		<button type="submit">Update</button>
	</form>

</body>
</html>