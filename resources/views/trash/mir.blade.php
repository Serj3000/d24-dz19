<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>/mir</title>
</head>
<body>
    <pre>
        <br>
        <?php
        //var_dump($tag_post);
        ?>
        <br>$posts_po_tag<br>
        <?php
        //var_dump($posts_po_tag);
        ?>
        <br>$posts_po_tag as $post<br>
            @foreach($posts_po_tag as $post)
                {{-- {{$post->id}} {{$post->title}} --}}
            @endforeach
        <?php
        //var_dump($tyga);
        ?>
    <br>
        <?php
        var_dump($usera);
        ?>
        <br>
        <hr>

    </pre>
</body>
</html>