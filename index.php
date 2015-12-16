<?php
    require_once 'Paginator.vishnukumar.php';
    $conn       = new mysqli( 'localhost', 'root', '', 'nandini' );
    $limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 25;
    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
    $query      = "SELECT * FROM edistopt";
    $Paginator  = new Paginator_vishnukumar( $conn, $query );
    $results    = $Paginator->getData( $page, $limit );
?>

<!DOCTYPE html>
    <head>
        <title>Pagination</title>
        <link rel="stylesheet" href="bllabla.min.css">
    </head>
    <body>
        <div class="container">
                <div>
                <h1>Pagination is here </h1>
                <table>
                        <thead>
                                <tr>
                                <th>name</th>
                                <th>phone</th>

                        </tr>
                        </thead>
                        <tbody>
                    
                    <?php for( $i = 0; $i < count( $results->data ); $i++ ) : ?>
        <tr>
                <td><?php echo $results->data[$i]['name']; ?></td>
                <td><?php echo $results->data[$i]['phone']; ?></td>
              
        </tr>
<?php endfor; ?>
                    
                    
                    
                    </tbody>
                </table>
				<?php echo $Paginator->createLinks( $links, 'pagination pagination-sm' ); ?> 
				
                </div>
        </div>
        </body>
</html>
