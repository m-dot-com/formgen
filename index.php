<!DOCTYPE html>
<html>
<head>
	<title>Form Generator</title>
</head>
<body>

	<center><h1>Form generator</h1></center>

	<form method="POST">
		<p>
			<span>method = </span>

			<select id="method">
				<option></option>
				<option>POST</option>
				<option>GET</option>
			</select>

			<span>action = </span>
			<input type="text" id="action">

			<span>enctype = </span>
			<input type="text" id="enctype">

		</p>

		<hr>

		<p>
			<span>label = </span>
			<input type="text" id="label">
		</p>

		<p>
			<span>type = </span>
			<select id="type">
				<option></option>
				<option>text</option>
				<option>password</option>
				<option>radio</option>
				<option>file</option>
				<option>submit</option>
				<option>checkbox</option>
				<option>reset</option>
				<option>email</option>
				<option>date</option>
				<option>color</option>
				<option>number</option>
				<option>range</option>
				<option>search</option>
				<option>tel</option>
				<option>time</option>
				<option>url</option>
				<option>month</option>
				<option>week</option>
			</select>

			<span>class = </span>
			<input type="text" id="class">

			<span>id = </span>
			<input type="text" id="id">

			<span>name = </span>
			<input type="text" id="name">

			<span id='attributes'></span>

		</p>

		<hr>

		<p>
			<input type="button" id="button" value="Add">
			<input type="reset" id="button" value="Reset">
		</p>

		<p>
			<label for="csrf_field">csrf_field</label>
			<input type="checkbox" id="csrf_field">
		</p>

		<hr>

	</form>

	<div class="result">
		<p>
			<?= htmlspecialchars('<form'); ?><span class='method'></span><span class='action'></span><span class='enctype'></span><?= htmlspecialchars('>'); ?>
			<br>
			<span class='csrf_field'></span>
		</p>
	</div>

	<?= '<br>'.htmlspecialchars('</form>'); ?>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/main.js"></script>

</html>
