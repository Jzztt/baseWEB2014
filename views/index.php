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
                <th>action</th>
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
                    <td>
                        <a href="views/update.php?id=<?= $book['id'] ?>">update</a>
                        <a href="views/delete.php?id=<?= $book['id'] ?>">delete</a>
                    </td>
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>
    <a href="views/add.php">Add</a>

</body>

</html>