<?php
//Template Name:contact
get_header();



?>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<!-- <h3 align="center">Contact Form</h3> -->

<div class="container">
  <!-- <form action="/action_page.php"> -->
  	<h3 align="center">Contact Form</h3>
   <!--  <label for="fname">Phone Number 1</label> -->
    Phone Number 1:<p><?php the_field('phone_number_1',8); ?></p>
    <!-- <input type="text" id="fname" name="firstname" placeholder="Your name.."> -->

    phone_number_2:<p><?php the_field('phone_number_2',8); ?></p>
    Email:<p><a href="mailto:<?php the_field('email',8);?>"><?php the_field('email',8); ?></a></p>
    website_link:<p><a href="mailto:<?php the_field('email',8);?>"><?php the_field('website_link',8); ?></a></p>
    address:<p><?php the_field('address',8); ?></p>
    <!-- Map:<p><?php the_field('map_link',8); ?></p> -->
    <!-- <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form> -->
</div>

<div class="container">
  
    <p><?php the_field('map_link',8); ?></p>
</div>

<!-- <?php
the_field('phone_number_1',8);
?><br>
<?php
the_field('phone_number_2',8);
?>
<br>
<?php
the_field('email',8);
?><br>
<?php
the_field('website_link',8);
?><br>
<?php
the_field('address',8);
?><br>
<?php
the_field('map_link',8);
?> -->

<?php

	get_footer();

?>
