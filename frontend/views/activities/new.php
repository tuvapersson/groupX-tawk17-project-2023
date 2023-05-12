<?php
require_once __DIR__ . "/../../Template.php";

Template::header("New Activity");
?>

<h1>New Activity</h1>

<form action="<?= $this->home ?>/activities" method="post">
    <input type="text" name="title" placeholder="Title"> <br>
    <input type="text" name="date" placeholder="Date"> <br>
    <input type="text" name="description" placeholder="Description"> <br>
    <input type="text" name="start_value" placeholder="Start Value"> <br>
    <input type="text" name="current_value" placeholder="Current Value"> <br>
    <input type="hidden" name="user_id" >


    <?php if ($this->user->user_role === "admin") : ?>
        <input type="number" name="user_id" placeholder="User ID"> <br>
    <?php endif; ?>

    <input type="submit" value="Save" class="btn">
</form>

<?php Template::footer(); ?>