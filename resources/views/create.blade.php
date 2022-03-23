<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog </title>
</head>
<body>
    <h1>create blog post</h1>
    <form action="/blogs/store" method="POST">
        @csrf
        
        <div>
            <label for="slug">Slug:</label>
            <input type="text" name="slug" id="slug">
        </div>

        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title">
        </div>

        <div>
            <label for="excerpt">Excerpt:</label>
            <input type="text" name="excerpt" id="ecerpt">
        </div>

        <div>
            <label for="body">Body:</label>
            <textarea name="body"  id="body" rolls="10" columns="100"></textarea>
        </div>

        <button type="submit">create</button>
    </form>
</body>
</html>