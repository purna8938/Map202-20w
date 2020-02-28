<?php require_once 'app/views/templates/header.php' ?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Courses</h1>
                
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p>  <?php 
	foreach($data[courses] as $course)
	{
		echo '<p>' .$course[courseid].'  <b>'.$course[coursename].' </b></p>';
	}
	?>
				
			</p>
        </div>
    </div>

    <?php require_once 'app/views/templates/footer.php' ?>
