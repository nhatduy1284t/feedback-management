<?php
include "./views/inc/head.php";

?>
<link href="<?php echo ROOT . "views/css/posts_admin.css" ?>" rel="stylesheet" type="text/css">
<link href="<?php echo ROOT . "views/css/post_admin.css" ?>" rel="stylesheet" type="text/css">

<!-- For admin -->
<div class="admin-posts">
    <div class="container table-posts mt-1 w-100 ">
        <?php if ($_SESSION['user_role'] === 1) : ?>
            <!-- ADMIN USER -->
            <form action=<?= ROOT . "admin/posts" ?> method="GET">
                <div class="d-flex justify-content-end mb-2">
                    <select name="filter_status" class="form-select w-25" aria-label="Default select example">
                        <?php
                        if ($status !== "all") :
                        ?>
                            <?php var_dump("cc"); ?>
                            <option disabled>Status</option>
                            <option value="all">All</option>
                            <option <?php echo (!($status === 0) ?:  "selected") ?> value="0" class="text-warning">Pending</option>
                            <option <?php echo (!($status === 1) ?:  "selected") ?> value="1" class="text-success">Completed</option>
                        <?php else : ?>
                            <option disabled>Status</option>
                            <option value="all">All</option>
                            <option value="0">Pending</option>
                            <option value="1">Completed</option>
                        <?php endif ?>
                    </select>
                    <select name="filter_category" class="form-select w-25" aria-label="Default select example">
                        <option disabled value="all">Category</option>
                        <option value="all" selected>All</option>
                        <option <?php echo (!($category === "drink") ?:  "selected") ?> value="drink">Drink</option>
                        <option <?php echo (!($category === "service") ?:  "selected") ?> value="service">Service</option>
                        <option <?php echo (!($category === "attitude") ?:  "selected") ?> value="attitude">Attitude</option>
                        <option <?php echo (!($category === "others") ?:  "selected") ?> value="others">Others</option>
                    </select>
                    <button class="btn btn-secondary">Filter</button>

                </div>
            </form>

            <table class="container table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Status</th>
                        <!-- <th>Actions</th> -->
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

                            <td class="text-capitalize">
                                <?= $post['category'] ?>
                            </td>
                            <td class="text-warning">
                                <?php if ($post['status'] == 0) {
                                    echo "<span>Pending</span>";
                                } else {
                                    echo "<span class='text-success'>Completed</span>";
                                } ?>
                            </td>
                            <!-- <td>
                            <button type="button" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                            <button type="button" class="btn btn-success">
                                <i class="fa fa-check"></i>
                            </button>
                        </td> -->
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <nav aria-label="..." class="d-flex justify-content-end">
                <ul class="pagination mt-3">
                    <?php for ($i = 0; $i < $num_pages; $i++) {
                        $page = $i + 1;
                        $start_index_post = $i * 10;
                        $classActive = "";
                        if ($start_index_post == $post_start_index) {
                            $classActive = "active";
                        }
                        echo "<li class='page-item $classActive'>
                    <a class='page-link' href='posts?start=$start_index_post&filter_category=$category&filter_status=$status'>$page</a> </li>";
                    } ?>
                </ul>
            </nav>

        <?php else : ?>
            <!-- NORMAL USER -->
            <table class="container table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($posts as $post) : ?>

                        <tr>
                            <td>
                                <?= $post['id'] ?>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">
                                    <a href="<?php echo ROOT . "admin/posts/get/" . $post['id'] ?>" class="text-dark "><?= $post['title'] ?></a>
                                </p>
                            </td>

                            <td class="text-warning">
                                <?php if ($post['status'] == 0) {
                                    echo "<span>Pending</span>";
                                } else {
                                    echo "<span class='text-success'>Completed</span>";
                                } ?>
                            </td>
                            <!-- <td>
                            <button type="button" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                            <button type="button" class="btn btn-success">
                                <i class="fa fa-check"></i>
                            </button>
                        </td> -->
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        <?php endif ?>

    </div>
</div>

<!-- For user -->

<?php

include "./views/inc/footer.php";
?>