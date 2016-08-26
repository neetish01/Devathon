<title> Show News | TAPS NITW</title>
<div class="row">
    <table id="data-table-simple" class="bordered striped " >
     <!-- <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%"> -->
     <thead>
        <tr>
            <th>Post Id</th>
            <th>Title</th>
            <th>Content</th>
            <th>Time Posted</th> 
            <th>Cod Id</th> 
            <th>Modify</th> 
            <th>Delete</th>
            <!-- <th>Delete</th> --> 
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Post Id</th>
            <th>Title</th>
            <th>Content</th>
            <th>Time Posted</th> 
            <th>Cod Id</th> 
            <th>Modify</th> 
            <th>Delete</th>
            <!-- <th>Delete</th> --> 
        </tr>
    </tfoot>
    <tbody>
        <?php foreach($results as $news)  { ?>
        <tr>
            <td><?php echo $news['post_id']?></a></td>
            <td><?php echo $news['title']?></td>
            <td><?php echo $news['content']?></td>
            <td><?php echo $news['timestamp']?></td>
            <td><?php echo $news['cod_id']?></td>
            <td><form action="cod/modify_news" method="POST"><input type="hidden" name="post_id" value="<?php echo $news['post_id']?>" size="5000"><a href ="<?php echo site_url('cod/modify_news')?>"><button type="submit" class="btn" style="margin-top : 30px">Modify</button></a></form></td>
            <td><form action="cod/delete_news" method="POST"><input type="hidden" name="post_id" value="<?php echo $news['post_id']?>" size="5000"><a href ="<?php echo site_url('cod/delete_news')?>"><button type="submit" class="btn" style="margin-top : 30px">Delete</button></a></form></td>
        </tr>
        <?php  } ?>
    </tbody>
</table>
