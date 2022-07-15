<?php
require "classes/booksView.php";
require "classes/booksContr.php";
require "classes/validator.php";

//instantiating view class
if (isset($_GET['id'])){
    $id = $_GET['id'];

    $results = new BooksView();
    $book = $results->getBook($id);
}

if (isset($_POST['submit'])){

    $validation = new Validator($_POST);
    $errors = $validation->validateForm();

    if (!$errors){

        $updateBook = new BooksController($_POST);
        $updateBook->updateBook();
        header('location: index.php');
    }
}
?>

<?php include "includes/header.php";?>

<div class="advanced">


    <form class="search register" action="edit.php?id=<?php echo $book['id'];?>" method="post">
        <div class="formname">Edit Book</div>

        <input type="hidden" id="id", name="id", class="input" value="<?php $results->showID($book); ?>">

        <input type="text" id="title" name="title" placeholder="დასახელება*" class="inputs" value="<?php $results->showTitle($book); ?>">
        <div class="error"><?php @$results->showError($errors, 'title');?></div>
        <input type="text" id="author" name="author" placeholder="ავტორი*" class="inputs" value="<?php $results->showAuthor($book); ?>">
        <div class="error"><?php @$results->showError($errors, 'author');?></div>
        <input type="text" id="year" name="year" placeholder="გამოშვების წელი*" class="inputs" value="<?php $results->showRelDate($book); ?>">
        <div class="error"><?php @$results->showError($errors, 'year');?></div>
        <select id="status" name="status" placeholder="სტატუსი*" class="inputs" value="<?php $results->showStatus($book); ?>">
            <option value="<?php $results->showStatus($book); ?>"selected hidden><?php $results->showStatus($book); ?></option>
            <option value="თავისუფალი">თავისუფალი</option>
            <option value="დაკავებული">დაკავებული</option>
        </select>
        <div class="error"><?php @$results->showError($errors, 'status');?></div>

        <input type="submit" id="submit" name="submit" value="Save" class="search_btn second">

    </form>
</div>

<?php include "includes/footer.php";?>
