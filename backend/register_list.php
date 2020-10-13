

<?php 

    include 'include/header.php';
    include 'dbconnect.php';
 ?>

<!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
 	<h1 class="h3 mb-0 text-gray-800">Register List</h1>
 	<a href="register_create.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Register</a>
 </div>


  <!-- DataTales Example -->
        <div class="card shadow mb-4">
        	<div class="card-header py-3">
        		<h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        	</div>
        	<div class="card-body">
        		<div class="table-responsive">
        			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        				<thead>
        					<tr>
        						<th>#</th>
        						<th>Name</th>
        						<th>Email</th>
        						<th>Password</th>
                                <th>Phone Number</th>
                                <th>Address</th>
        					
        						<th>Option</th>
        					</tr>
        				</thead>
        				<tfoot>
        					<tr>
        						<th>#</th>
        						<th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Phone Number</th>
                                <th>Address</th>
        						
        						<th>Option</th>
        					</tr>
        				</tfoot>
        				<tbody>

        					
                            <?php 

                                $sql="SELECT * FROM users";
                                $stmt = $pdo->prepare($sql);
                                $stmt ->execute();

                                // var_dump($stmt);

                                $users=$stmt->fetchAll();
                                // var_dump($items);

                                $j=1;
                                foreach ($users as $user) {
                                    // var_dump($items);                            

                             ?>
        					 
        					 <tr>
        					 	
        					 	<td><?php echo $j++; ?></td>
        					 	<td><?php echo $user['name']; ?></td>
        					 	<td><?php echo $user['email']; ?></td>
                                <td><?php echo $user['password']; ?></td>
                                <td><?php echo $user['phone']; ?></td>
                                <td><?php echo $user['address']; ?></td>
        					 	
        					 	<td>
        					 		<a href="register_detail.php?id=<?php echo $user['id'];?>" class="btn btn-outline-primary btn-sm">Detail</a>
        					 		<a href="register_edit.php?id=<?php echo $user['id'];?>" class="btn btn-outline-warning btn-sm">Edit</a>
        					 		<a href="register_delete.php?id=<?php echo $user['id'];?>"onclick="return confirm('Delete this?');" class="btn btn-outline-danger btn-sm">Delete</a>
        					 	</td>
        					 </tr>

        					 <?php } ?>

        				</tbody>
        			</table>
        		</div>
        	</div>
        </div>


