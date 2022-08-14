
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

<?php

$posts=$obj->display_post();
if(isset($_GET['status']))
{
    if($_GET['status'])
    {
        $delid=$_GET['id'];
        
       $msg= $obj->delete_post($delid);
    }
}

?>




<div class="table-responsive">
<table class="table">
      <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Summary</th>
            <th>Thumb</th>
            <th>Author</th>
            <th>Date</th>
            <th>Category</th>
            <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php while($postdata=mysqli_fetch_assoc($posts)) {?>
        <tr>
             <td><?php echo $postdata['post_id']; ?></td>
             <td><?php echo $postdata['post_title']; ?></td>
             <td><?php echo $postdata['post_summery']; ?></td>
             <td><img height="100px" src="upload/<?php echo $postdata['post_img']; ?>" alt="">
            </td>
             <td><?php echo $postdata['post_author']; ?></td>
             <td><?php echo $postdata['post_date']; ?></td>
             <td><?php echo $postdata['cat_name']; ?></td>
             <td><?php if($postdata['post_status']==1){
                 
                 echo "Published";

             }else
             {
                echo "Unpublished";
             } ?></td>
             
        </tr>
        <?php } ?>
      </tbody>
</table>
</div>
                
            