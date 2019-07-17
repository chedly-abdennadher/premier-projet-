<?php 
require 'phpmysqlconnect.php';
$sql ="select * from customers";
$q=$conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
?>

	
<table class="table table-bordered table-condensed">
    <thead>
        <tr>
            <th>customerid </th>
		<th>First Name</th>
            <th>Last Name</th>

            <th>state</th>
            <th>city </th>

			</tr>
    </thead>
    <tbody>
        <?php while ($r = $q->fetch()): ?>
            <tr>
			<td><?php echo $r['customerid']; ?></td>
                <td><?php echo $r['lastname'] ?></td>
                <td><?php echo $r['firstname']; ?></td>
                
                <td><?php echo $r['state']; ?></td>
         <td><?php echo $r['city']; ?></td>
 
 </tr>
        <?php endwhile; ?>
    </tbody>
</table>