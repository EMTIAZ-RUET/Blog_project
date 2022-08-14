
<?php

  if(isset($_GET['keyword']))
  {
    $keyword=$_GET['keyword'];
  }
  else
  {
    $keyword="";
  }


?>


<div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="search_post.php">
                      <input type="text" name="keyword" class="form-control me-sm-2" placeholder="type to search..." 
                      required maxlength="70" autocomplete="off" value="<?php echo $keyword;?>">
                      
                      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div>
                </div>