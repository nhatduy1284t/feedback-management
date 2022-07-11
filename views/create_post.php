  <?php
  include "inc/head.php";
  ?>

  <!-- CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link href="<?php echo ROOT . "views/css/login.css" ?>" rel="stylesheet" type="text/css" />

  <div class="create create__post__user">
    <header class="masthead ">
      <div class="container">
        <div class="d-flex justify-content-center">
          <div class="card" style="height: 100%; width: 55%;">
            <div class="card-header">
              <h3>Feedback</h3>
            </div>
            <div class="card-body  text-left">
              <form action="<?= ROOT ?>user/post/create" method="post" enctype="multipart/form-data">
                <div class="form-group ">
                  <label for="category">You want to give us a feedback about:</label>
                  <select name="category" class="w-100 p-1">
                    <option value="drink">Drink</option>
                    <option value="service">Service</option>
                    <option value="attitude">Attitude</option>
                    <option value="others">Others</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="title ">Subject</label>
                  <input type="text" name="title" class="form-control" placeholder="Put your feedback title">
                  <?php if (!empty($errors)) : ?>
                    <?php if (isset($errors['post_title_err'])) : ?>
                      <p class="feedback-err"><?php echo $errors['post_title_err']; ?></p>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>

                <div class="form-group">
                  <label for="body">Message</label>
                  <textarea name="body" rows="4" class="form-control" placeholder="Put your feedback content"></textarea>
                  <?php if (!empty($errors)) : ?>
                    <?php if (isset($errors['post_body_err'])) : ?>
                      <p class="feedback-err"><?php echo $errors['post_body_err']; ?></p>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>

                <div class="form-group">
                  <label for="title">Image (optional - jpg, jpeg, gif, png)</label>
                  <input type="file" name="files[]" class="form-control" multiple>
                  <?php if (!empty($errors)) : ?>
                    <?php if (isset($errors['post_img_size_err'])) : ?>
                      <p class="feedback-err"><?php echo $errors['post_img_size_err']; ?></p>
                    <?php elseif (isset($errors['post_img_ext_err'])) : ?>
                      <p class="feedback-err"><?php echo $errors['post_img_ext_err']; ?></p>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>
                <?php CSRF::outputToken(); ?>
                <button type="submit" class="btn-send btn btn-secondary btn-block btn-lg"> Send</button>
              </form>
            </div>
            <div class="card-footer">
              <div class="d-flex justify-content-center links">
                <a href="<?php echo ROOT . "home" ?>">Go back to home</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </header>
  </div>


  <?php
  include "inc/footer.php";
  ?>