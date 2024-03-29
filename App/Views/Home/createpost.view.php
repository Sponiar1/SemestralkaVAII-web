<?php /** @var Array $data */ ?>
<div class="container">
    <?php if(array_key_exists('error', $data)) {?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <?= $data['error'] ?>
        </div>
    <?php } ?>
    <h1> NEW POST </h1>
        <form name="forum" method="post"  action="?c=home&a=uploadpost" onsubmit="return validatePost()">
            <div class="form-group m-2">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title" required>
            </div>
            <div class="form-group m-2">
                <label for="tags">Tags</label>
                <input type="text" class="form-control" name="tags" placeholder="Tags">
            </div>
            <div class="form-group m-2">
                <label for="text">Text</label>
                <textarea class="form-control" id="text" name="text" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Odoslať</button>
            </div>
        </form>
</div>