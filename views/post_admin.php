<?php
include "./views/inc/head.php";

?>
<link href="<?php echo ROOT . "views/css/posts_admin.css" ?>" rel="stylesheet" type="text/css">
<link href="<?php echo ROOT . "views/css/post_admin.css" ?>" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<div class="admin-post">
    <div class="container pb50">
        <a class="text-muted" href="<?= ROOT . "admin/posts" ?>"><i class="fa fa-long-arrow-alt-left"></i>Go back</a>
        <div class="row">
            <div class="col-md-12 mb40">
                <article>
                    <div class="post-content">
                        <h3><?= $post['title'] ?></h3>
                        <p class="text-capitalize">Category: <span class="text-info"><?= $post['category'] ?></span></p>
                        <ul class="post-meta list-inline">
                            <li class="list-inline-item">
                                <i class="fa fa-user "></i> <a><?= $post['username'] ?></a>
                            </li>
                            <li class="list-inline-item">
                                <i class="fa fa-calendar"></i> <a><?= $post['created_date'] ?></a>
                            </li>
                        </ul>
                        <p><?= $post['body'] ?></p>
                        <div class="images row">
                            <?php foreach ($post['images'] as $image_url) : ?>
                                <div class="col-4 px-0">
                                    <img class="user-image" src="<?= PUBLIC_ROOT . $image_url['url'] ?>" alt="">
                                </div>
                            <?php endforeach ?>
                        </div>
                        <hr class="mb40">
                        <!-- ADMIN -->
                        <?php if ($_SESSION['user_role'] === 1) : ?>

                            <?php if ($post['status'] == 1) : ?>
                                <p class="alert alert-success"><?php echo "This post is already completed, complete again to change the message" ?> </p>
                            <?php else : ?>
                                <p class="alert alert-warning"><?php echo "This post is still pending" ?></p>
                            <?php endif ?>
                            <form action="<?= ROOT . "admin/posts/response" ?>" role="form" method="POST">
                                <div class="form-group ">
                                    <label>Message</label>
                                    <textarea name="message" class="form-control mt-2" rows="5" placeholder="<?php
                                                                                                                if ($post['status'] == 0) {
                                                                                                                    echo "Send message to the customer.";
                                                                                                                } else if ($post['post_message'] == "") {
                                                                                                                    echo "Your message is empty";
                                                                                                                } else {
                                                                                                                    echo "Your current message: " . $post['post_message'];
                                                                                                                }
                                                                                                                ?>"></textarea>
                                </div>
                                <input type="hidden" name="post_id" value="<?= $post['id'] ?>" />
                                <div class="d-flex justify-content-end mt-2">
                                    <!-- <button type="button" class="btn-reject btn btn-danger btn-lg">Reject</button> -->
                                    <?php CSRF::outputToken();?>
                                    <button type="submit" class="btn-approve btn btn-success btn-lg">Complete</button>
                                </div>
                            </form>
                        <?php else : ?>
                            <!-- NORMAL USER -->
                            <?php if ($post['status'] == 1) : ?>
                                <p class="alert alert-success"><?php echo "Your post is seen by us" ?> </p>
                            <?php else : ?>
                                <p class="alert alert-warning"><?php echo "Your post is still pending" ?></p>
                            <?php endif ?>

                            <div class="form-group ">
                                <label class="message">Message from us</label>
                                <p class="form-control ">
                                    <?php
                                    if ($post['post_message'] == "") {
                                        echo "(You don't have any message)";
                                    } else {
                                        echo "Your current message: " . $post['post_message'];
                                    }
                                    ?>
                                </p>
                            </div>


                        <?php endif ?>
                    </div>
                </article>
                <!-- post article-->

            </div>

        </div>
    </div>
</div>

<?php
include "./views/inc/footer.php";
?>