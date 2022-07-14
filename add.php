<?php
require "classes/booksView.php";
require "classes/booksContr.php";
require "classes/validator.php";

//instantiating view class
$results = new BooksView();

if (isset($_POST['submit'])){

    $validation = new Validator($_POST);
    $errors = $validation->validateForm();

    if (!$errors){
        $saveBook = new BooksController($_POST);
        $saveBook->saveBook();
    } else {
        echo "there are errors";
    }
}
?>

<?php include "includes/header.php";?>

<div class="advanced">


    <form class="search register" action="add.php" method="post">
        <div class="formname">add book</div>

        <div class="div">
            <input type="text" id="title" name="title" placeholder="დასახელება*" class="input">
        </div>
        <div class="error"><?php @$results->showError($errors, 'title');?></div>
        <div class="div">
            <input type="text" id="author" name="author" placeholder="ავტორი*" class="input" >
        </div>
        <div class="error"><?php @$results->showError($errors, 'author');?></div>
        <div class="div">
            <input type="text" id="year" name="year" placeholder="გამოშვების წელი*" class="input">
        </div>
        <div class="error"><?php @$results->showError($errors, 'year');?></div>
        <div class="div">
            <input type="text" id="status" name="status" placeholder="სტატუსი*" class="input">
        </div>
        <div class="error"><?php @$results->showError($errors, 'status');?></div>

        <input type="submit" id="submit" name="submit" value="დამატება" class="search_btn second">

    </form>
</div>

<?php include "includes/footer.php";?>
