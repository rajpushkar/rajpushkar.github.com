<html>

<head>

<style>

ul
{
list-style-type:none;
margin:none;
padding-right:5px;
padding-left:5px;

}

h1
{
margin-left:50px;
}

h1.border
{
border-style:solid;
border-width:5px;
width:110px;
}

a
{
display:inline;
width:100px;

}

body{
    background-image:url(image.jpeg);
	background-repeat:no-repeat;
	background-size:cover;}
</style>
</head>


<body>

<ul>
<li><a href="#Home">Home</a></li>
<li><a href="#About us">About us</a></li>
<li><a href="#Regulatory Bodies">Regulatory Bodies</a></li>
<li><a href="#Feedback">Feedback</a></li>
<li><a href="#FAQs">FAQs</a></li>
</ul>


<?php
try {

 $objDb = new PDO('mysql:host=localhost;dbname=health', 'root', 'jaimatadi.');
 $objDb->exec('SET CHARACTER SET utf8');

 $sql = "SELECT DISTINCT State 
  FROM `DATA09`";
 $statement = $objDb->query($sql);
 $list = $statement->fetchAll(PDO::FETCH_ASSOC);

 } catch(PDOException $e) {
 echo 'There was a problem';
 }

 ?>    






<form action="" method="post">

	<select name="state" id="state" class="update">
        <option value="">Select State</option>
        <?php if (!empty($list)) { ?>
            <?php foreach($list as $row) { ?>
                <option value="<?php echo $row['State']; ?>">
                    <?php echo $row['State']; ?>
                </option>
            <?php } ?>
        <?php } ?>
    </select>	

	<select name="district" id="district" class="update">
	    <option value="">Select District</option>
	</select>

</form>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>	
<script src="ajax.js" type="text/javascript"></script>
  
</body>
</html>
