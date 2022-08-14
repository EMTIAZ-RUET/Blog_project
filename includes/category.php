<div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    <div class="content">
                      <ul>
                     
                      <?php while($category=mysqli_fetch_assoc($getcat)){?>
                      <li>
                     <a  href="category_view.php?view=1 && id=<?php echo $category['cat_id']; ?>">
                     <?php    echo $category['cat_name'];?>
                      </a>
                      </li> 
                     <?php } ?>
                      </ul>
                    </div>
                  </div>
                </div>