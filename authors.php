<?php
require "classes/booksView.php";
require "classes/booksContr.php";
require "classes/validator.php";
require "classes/filter.class.php";

//instantiating view class
$results = new BooksView();

//fetching all authors
$authors = $results->getAuthors();

$authorsClass = new Filter($authors);
$uniqReindexed = $authorsClass->filterAuthors();

?>

<?php include "includes/header.php";?>

<div class="popular3">
    <div class="container_popular3">

        <div class="headline">
            authors
        </div>

        <div class="container second">

            <?php for ($i=0; $i<sizeof($uniqReindexed); $i++){ ?>

                <div class='post'>

                    <div class='img' style='background-image: url("images/avatar.jpg")'></div>

                    <div class='popular_description'>

                        <h3 class='h3_art'>
                            <a href='' class='popular_article'>
                                <?php echo $results->showSingleAuthor($uniqReindexed,$i); ?>
                            </a>
                        </h3>

                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
</div>

<?php include "includes/footer.php";?>

</body>
</html>

</body>
</html>