# pagination script with PHP
pagination script in php with OOP

to engine dir
 change limit and number of pages
  .
 connection establishing is here
 <code>
   $conn       = new mysqli( 'localhost', 'root', '', 'vishnukumar' );
    $limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 25;
    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
    $query      = "SELECT * FROM vishnukumar";
    $Paginator  = new Paginator_vishnukumar( $conn, $query );
    $results    = $Paginator->getData( $page, $limit );
  </code>
    here is the code for display pagination list
    <code>
     <?php for( $i = 0; $i < count( $results->data ); $i++ ) : ?>
        <tr>
                <td><?php echo $results->data[$i]['edist']; ?></td>
                <td><?php echo $results->data[$i]['edistid']; ?></td>
              
        </tr>
<?php endfor; ?>
</code>


to display links
<?php echo $Paginator->createLinks( $links, 'pagination pagination-sm' ); ?> 
