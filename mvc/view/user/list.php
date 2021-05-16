<html>
	<head>
		<title>List of users</title>
	</head>
	<body>
		<h3>Users</h3>
		<table>
			<tr>
				<td>Id</td>
				<td>Full name</td>
				<td>Username</td>
				<td>Email</td>
			</tr>
			<?php foreach($users as $user) { ?>
			<tr>
				<td><?php echo $user['id'];?></td>
				<td><?php echo $user['fullname'];?></td>
				<td><?php echo $user['username'];?></td>
				<td><?php echo $user['email'];?></td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>