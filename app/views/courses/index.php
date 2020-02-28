
<?php require_once 'app/views/templates/header.php' ?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Departments</h1>
				
                <p class="lead">Click on a department for more information </p>
				
				<?php
	
	foreach($data[departments] as $department)
	{
		//$link= str_replace(' ','',$department[department]);
		$link = rawurlencode($department[department]);
		echo '<p> <a href="/courses/' .$link. ' ">'.$department[department]. '</a></p>';
	}
	
					
	
	
	
	?>
	
				
				
            </div>
        </div>
    </div>


    <?php require_once 'app/views/templates/footer.php' ?>
