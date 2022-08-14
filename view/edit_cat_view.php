<?php

   if(isset($_GET['status']))
   {
       if($_GET['status']='editcategory')
       {
          $id=$_GET['id'];
          $catdata=$obj->get_cat_info($id);
       }
   }

   if(isset($_POST['update_cat']))
   {
      $msg=$obj->update_cat($_POST);
   }

?>


<div class="shadow m-5 p-5">
    <?php if(isset($msg)) {echo $msg;}?>
<form action="" method="POST"  class="form">
<input type="hidden" name="edit_cat_id" value="<?php echo $id ?>">

<div class="form-group">
    <label class=" mb-1" for="change_name">Change Name</label> <br>
    <input value="<?php echo $catdata['cat_name']; ?>" class="form-control" name="change_name" class="py-4" id="change_title" type="text" />
</div>

<div class="form-group">
    <label class=" mb-1" for="change_description">Change Description</label> <br>
    <textarea class="form-control" name="change_des" id="change_des" cols="30" rows="10"><?php echo $catdata['cat_des']; ?></textarea>
</div>

<input type="submit" value="Update Category" name="update_cat" class="btn btn-primary">

</form>
</div>