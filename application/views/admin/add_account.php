

<form action="<?php echo site_url("admin/add_account"); ?>" method="POST">
	<input type="text" name="username" placeholder="username">
	<input type="password" name="password" placeholder="password">
	<input type="email" name="email" placeholder="Email">
	<select name="account_type">
		<option value="admin">Admin</option>
		<option value="manex-france">Manex France</option>
		<option value="manex-usa">Manex Usa</option>
		<option value="cofrad">Cofrad</option>
		<option value="stockman">Stockman</option>
	</select>
	<input type="submit" name="submit" value="Submit">
</form>




