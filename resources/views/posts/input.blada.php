<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>mail send</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="mail">
                <h2>Mail</h2>
                <input type="text" name="mail" />
            </div>
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="title" />
            <input type="submit" value="post"/>
        </form>
        <div class="footer">
            <a href="/posts/{{ $post->id }}">戻る</a>
        </div>
    </body>
</html>