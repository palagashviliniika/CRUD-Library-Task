<?php
require "classes/booksView.php";
require "classes/booksContr.php";
require "classes/validator.php";

//instantiating view class
$results = new BooksView();

//fetching all books
$books = $results->getBooks();
?>

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

<?php include "includes/footer.php";?>

</body>
</html>

</body>
</html>