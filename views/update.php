<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="?action=edit&id=<?= $book['id'] ?>" enctype="multipart/form-data">
        <div class="fom-control">
            <label for="Title">Title</label>
            <input type="text" name="title" value="<?= $book['title'] ?>">
        </div>

        <div class="form-control">
            <label for="Image">Image</label>
            <input type="file" name="image">
            <img src="public/img/<?= $book['cover_image'] ?>" alt="">
        </div>
        <div class="form-control">

            <label for="date">date</label>
            <input type="date" name="date" value="<?= $book['date'] ?>">
        </div>
        <div class="form-control">

            <label for="author">author</label>
            <input type="text" name="author" value="<?= $book['author'] ?>">
        </div>
        <div class="form-control">
            <label for="publisher">Publisher</label>
            <input type="text" name="publisher" value="<?= $book['publisher'] ?>">
        </div>

        <button type="submit" name="add">ADD</button>
    </form>
</body>

</html>