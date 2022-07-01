<?php
include "./views/inc/head.php";
?>
<link href="<?php echo ROOT . "views/css/posts_admin.css" ?>" rel="stylesheet" type="text/css">
<link href="<?php echo ROOT . "views/css/post_admin.css" ?>" rel="stylesheet" type="text/css">

<div class="admin-posts">
    <div class="table-posts mt-5 w-100">
        <table class="container table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $post) : ?>

                    <tr>
                        <td>
                            <?= $post['id'] ?>
                        </td>
                        <td>
                            <p class="fw-normal mb-1"><?= $post['username'] ?></p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">
                                <a href="<?php echo ROOT . "admin/posts/get/" . $post['id'] ?>" class="text-dark "><?= $post['title'] ?></a>
                            </p>
                        </td>
                        <td>
                            Service
                        </td>
                        <td class="text-warning">
                            <?php if ($post['status'] == 0) {
                                echo "Pending";
                            } else {
                                echo "Completed";
                            } ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                            <button type="button" class="btn btn-success">
                                <i class="fa fa-check"></i>
                            </button>
                        </td>

                    </tr>
                <?php endforeach ?>
            </tbody>


        </table>
    </div>


</div>

<?php
include "./views/inc/footer.php";
?>