<html>
	<heead>
		<title>Welcome to User</title>
	</heead>
	<body>
		<h1>Welcome to user:<?php foreach($data as $d):echo $d->name;break; endforeach; ?></h1>
		<a href="">Logout</a>
		<table border="1">
			<thead>
				<tr>
					<td>User Name</td>
					<td>User Email</td>
					<td>User Type</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach($data as $d): ?>
					<tr>
				<td><?php echo $d->name; ?></td>
				<td><?php echo $d->email ?></td>
				<td><?php echo $d->usertype ?></td>
				<?php endforeach;?>
			</tr>
			</tbody>
		</table>



	</body>
</html>