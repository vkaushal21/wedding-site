<?php include 'function.php';?>
<div class="comments-right">
  <form action="#" method="post" id="commentform">
    <div>Name:
      <input type="text" name="name"/>
    </div>
    <div>Email
      <input type="email" name="email"/>
    </div>
    <div>Comments:
      <textarea name="comments" class="ckeditor"></textarea>
    </div>
    <div class="clearfix">
      <input type="submit"  name="send" value="submit" id="submitbtn"/>
    </div>
  </form>
</div>
<div id="comment" class="comments-left">
  <ul>
    <?php  
		$comments=readCommnets();            
		if(count($comments)){ 
			foreach($comments as $rows){?>
    <li>
      <h3><?php echo ucfirst($rows->name);?></h3>
      <p><?php echo $rows->comments;?></p>
      <h5><?php echo $rows->date;?></h5>
    </li>
    <?php }}?>
  </ul>
</div>
