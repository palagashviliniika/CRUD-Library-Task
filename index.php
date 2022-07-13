<?php
require "classes/booksView.php";
require "classes/booksContr.php";
require "classes/validator.php";

//instantiating view class
$results = new BooksView();

//fetching all books
$books = $results->getBooks();
$errorsCount = 0;

if (isset($_POST['submit'])){

//    if (empty($_POST['title'])){
//        echo "title is required!".'<br>';
//        $errorsCount++;
//    }
//
//    if (empty($_POST['author'])){
//        echo "author is required!".'<br>';
//        $errorsCount++;
//    }
//
//    if (empty($_POST['year'])){
//        echo "year is required!".'<br>';
//        $errorsCount++;
//    }
//
//    if (empty($_POST['status'])){
//        echo "status is required".'<br>';
//        $errorsCount++;
//    }
//
//    if ($errorsCount==0){
//        $saveBook = new BooksController($_POST);
//        $saveBook->saveBook();
//    }

    $validation = new Validator($_POST);
    $errors = $validation->validateForm();

    if ($errors){
        echo "There are errors!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bookinder</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bookinder</title>
    <link rel="stylesheet" href="Style/header.css">
    <link rel="stylesheet" href="Style/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Style/popular3.css">
    <link rel="stylesheet" href="Style/footer.css">
    <link rel="stylesheet" href="Style/advanced.css">
    <script src="app.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,300;0,400;0,700;1,100;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>

<?php include "includes/header.php";?>

<div class="popular3">
    <div class="container_popular3">
        <div class="headline">popular posts</div>

        <?php foreach ($books as $book){ ?>

        <div class="container second">

            <div class='post'>

<!--                <div class='img' style='background-image: url("images/default.jpg")'></div>-->

                    <div class='popular_description'>
                    <h3 class='h3_art'>
                        <a href='' class='popular_article'>
                            <?php $results->showTitle($book); ?>
                        </a>
                    </h3>
                    <div class='popular_subtitle'>
                        <div class='fa fa-star'></div>
                        <a class='popular_subtext'><?php $results->showAuthor($book); ?> - <?php $results->showRelDate($book); ?> </a>
                    </div>

                    <div class='popular_subtitle second'>
                        <div class='fa fa-heart'id='icon'></div>
                        <a class='like_subtext'><?php $results->showStatus($book); ?></a>
                    </div>
                </div>
            </div>

        </div>

        <?php } ?>

    </div>
</div>

<div class="advanced">


    <form class="search register" action="index.php" method="post">
        <div class="formname">add book</div>

        <div class="div">
            <input type="text" id="title" name="title" placeholder="დასახელება*" class="input">
        </div>
        <div class="error"></div>
        <div class="div">
            <input type="text" id="author" name="author" placeholder="ავტორი*" class="input" >
        </div>
        <div class="error"></div>
        <div class="div">
            <input type="text" id="year" name="year" placeholder="გამოშვების წელი*" class="input">
        </div>
        <div class="error"></div>
        <div class="div">
            <input type="text" id="status" name="status" placeholder="სტატუსი*" class="input">
        </div>
        <div class="error"></div>

        <input type="submit" id="submit" name="submit" value="დამატება" class="search_btn second">

    </form>
</div>

<?php include "includes/footer.php";?>

</body>
</html>

</body>
</html>