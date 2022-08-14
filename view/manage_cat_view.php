<?php
   
   $cat_data=$obj->display_category();
    if(isset($_GET['status']))
    {
        if($_GET['status'])
        {
            $delid=$_GET['id'];
            
           $msg= $obj->delete_category($delid);
        }
    }

?>



<h2>Manage Catagory view</h2>
<?php if(isset($msg)) echo $msg;?>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Category Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while($cat=mysqli_fetch_assoc($cat_data)){ ?>
        <tr>
            <td><?php echo $cat['cat_id'];?></td>
            <td><?php echo $cat['cat_name'];?></td>
            <td><?php echo $cat['cat_des'];?></td>
            <td>
                <a class="btn btn-primary" href="edit_category.php?status=editcategory && id=<?php echo $cat['cat_id']; ?>">Edit</a>
                <a class="btn btn-danger" href="?status=1 && id=<?php echo $cat['cat_id'];?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>