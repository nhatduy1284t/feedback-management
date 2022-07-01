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
                        <h3><?= $post['title']?></h3>
                        <ul class="post-meta list-inline">
                            <li class="list-inline-item">
                                <i class="fa fa-user "></i> <a href="#"><?= $post['username']?></a>
                            </li>
                            <li class="list-inline-item">
                                <i class="fa fa-calendar"></i> <a href="#"><?= $post['created_date']?></a>
                            </li>
                        </ul>
                        <p><?= $post['body']?></p>

                        <hr class="mb40">
                        <h4 class="mb40 text-uppercase font500">Response</h4>
                        <form role="form">


                            <div class="form-group ">
                                <label>Message</label>
                                <textarea class="form-control mt-2" rows="5" placeholder="Send message to the customer."></textarea>
                            </div>
                            <div class="d-flex justify-content-end mt-2">
                                <!-- <button type="button" class="btn-reject btn btn-danger btn-lg">Reject</button> -->
                                <button type="button" class="btn-approve btn btn-success btn-lg">Complete</button>
                            </div>
                        </form>
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