<?php

  $postss= $obj->display_post_public_date();

?>


<div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                      <ul>
                      <?php while($postdata=mysqli_fetch_assoc($postss)) {?>

<div class="col-lg-12">
  <div class="blog-post">
    <div >
      <span><?php echo $postdata['cat_name']; ?></span>
      <a href="single_post.php?view=1 && id=<?php echo $postdata['post_id'];?>"><h4><?php echo $postdata['post_title']; ?></h4></a>
      <p><?php echo $postdata['post_summery']; ?></p>
    </div>
  </div>
</div>
<?php } ?>
                      </ul>
                    </div>
                  </div>
                </div>