<!DOCTYPE html>
<html lang="en">
<head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>My Blog</title>
</head>
<body>
      <header>
         <h1>
         <center> MY BLOG</center>
         </h1>
      </header>
   @foreach($posts as $post)

      <article>
         <h2><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
         <p>{{ $post->excerpt }}</p>
      </article>

   @endforeach
    
              
</body>
</html>