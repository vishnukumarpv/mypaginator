<?php
    require_once 'eng/vishnukumar.class.php';
    $conn       = new mysqli( 'localhost', 'root', '', 'nandini' );
    $limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 25;
    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
    $query      = "SELECT * FROM edistopt";
    $Paginator  = new vishnukumar_paginator( $conn, $query );
    $results    = $Paginator->getData( $page, $limit );
?>

<!DOCTYPE html>
    <head>
	
	
	
	
        <title>PHP Pagination</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
                <div class="col-md-10 col-md-offset-1">
                <h1>PHP Pagination</h1>
                <table class="table table-striped table-condensed table-bordered table-rounded">
                        <thead>
                                <tr>
                                <th>City</th>
                                <th>City</th>

                        </tr>
                        </thead>
                        <tbody>
                    
                    <?php for( $i = 0; $i < count( $results->data ); $i++ ) : ?>
        <tr>
                <td><?php echo $results->data[$i]['edist']; ?></td>
                <td><?php echo $results->data[$i]['edistid']; ?></td>
              
        </tr>
<?php endfor; ?>
                    
                    
                    
                    </tbody>
                </table>
				<?php echo $Paginator->createLinks( $links, 'pagination pagination-sm' ); ?> 
                </div>
        </div>
        </body>
</html>
