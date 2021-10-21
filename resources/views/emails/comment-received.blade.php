<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NBA Teams</title>
</head>
<body>
    <p>Hello, {{ $team->name }}</p>
    <p>The user {{ $user->name }} has left a comment on your page:</p>
    <blockquote>
        {{ $comment->content }}
    </blockquote>
</body>
</html>