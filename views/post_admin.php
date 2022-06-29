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
                        <h3>A smart template that works 24/7 for your company</h3>
                        <ul class="post-meta list-inline">
                            <li class="list-inline-item">
                                <i class="fa fa-user-circle-o"></i> <a href="#">John Doe</a>
                            </li>
                            <li class="list-inline-item">
                                <i class="fa fa-calendar-o"></i> <a href="#">29 June 2017</a>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, </p>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, </p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, </p>


                        <hr class="mb40">
                        <h4 class="mb40 text-uppercase font500">Post a comment</h4>
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