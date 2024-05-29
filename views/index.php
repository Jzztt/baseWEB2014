<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Image</th>
                <th>date</th>
                <th>author</th>
                <th>Publisher</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book) : ?>
            <tr>
                <td><?= $book['id'] ?></td>
                <td><?= $book['title'] ?></td>
                <td><?= $book['cover_image'] ?></td>
                <td><?= $book['date'] ?></td>
                <td><?= $book['author'] ?></td>
                <td><?= $book['publisher'] ?></td>
            </tr>
            <?php endforeach ?>

        </tbody>
    </table>

</body>

</html>