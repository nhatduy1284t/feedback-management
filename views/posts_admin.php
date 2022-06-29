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
                <tr class="pointer">
                    <td>
                        #1
                    </td>
                    <td>
                        <p class="fw-normal mb-1">nhatduy1284t</p>

                    </td>
                    <td>
                        <p class="fw-normal mb-1">
                            <a href="<?php echo ROOT."/admin/posts/get/1"?>" class="text-dark ">Drink is so expensive</a>
                        </p>
                    </td>
                    <td>
                        Service
                    </td>
                    <td class="text-warning">
                        Pending
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
                <!-- <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Alex Ray</p>
                                <p class="text-muted mb-0">alex.ray@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Consultant</p>
                        <p class="text-muted mb-0">Finance</p>
                    </td>
                    <td>
                        <span class="badge badge-primary rounded-pill d-inline">Onboarding</span>
                    </td>
                    <td>Junior</td>
                    <td>
                        <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                            Edit
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="https://mdbootstrap.com/img/new/avatars/7.jpg" class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Kate Hunington</p>
                                <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Designer</p>
                        <p class="text-muted mb-0">UI/UX</p>
                    </td>
                    <td>
                        <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                    </td>
                    <td>Senior</td>
                    <td>
                        <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                            Edit
                        </button>
                    </td>
                </tr> -->
            </tbody>
        </table>
    </div>


</div>

<?php
include "./views/inc/footer.php";
?>