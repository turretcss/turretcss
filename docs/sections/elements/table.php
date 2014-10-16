<?php

$tables = array(
array (
	'title' => 'Table',
	'code' => '<table>
	<caption>Table Caption</caption>
	<thead>
		<tr>
			<th>Vestibulum Sem Ipsum</th>
			<th>Dolor Fringilla</th>
			<th>Amet Mattis</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Egestas Ipsum Nibh</td>
			<td>Magna Nullam</td>
			<td>Consectetur Euismod</td>
		</tr>
		<tr>
			<td>Egestas Ipsum Nibh</td>
			<td>Magna Nullam</td>
			<td>Consectetur Euismod</td>
		</tr>
		<tr>
			<td>Egestas Ipsum Nibh</td>
			<td>Magna Nullam</td>
			<td>Consectetur Euismod</td>
		</tr>
	</tbody>
</table>',
),
array (
	'title' => 'Table Bordered',
	'code' => '<table class="table-bordered">
	<thead>
		<tr>
			<th>Vestibulum Sem Ipsum</th>
			<th>Dolor Fringilla</th>
			<th>Amet Mattis</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Egestas Ipsum Nibh</td>
			<td>Magna Nullam</td>
			<td>Consectetur Euismod</td>
		</tr>
		<tr>
			<td>Egestas Ipsum Nibh</td>
			<td>Magna Nullam</td>
			<td>Consectetur Euismod</td>
		</tr>
		<tr>
			<td>Egestas Ipsum Nibh</td>
			<td>Magna Nullam</td>
			<td>Consectetur Euismod</td>
		</tr>
	</tbody>
</table>',
),
array (
	'title' => 'Table Block',
	'code' => '<table class="table-bordered table-block">
	<thead>
		<tr>
			<th>Vestibulum Sem Ipsum</th>
			<th>Dolor Fringilla</th>
			<th>Amet Mattis</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Egestas Ipsum Nibh</td>
			<td>Magna Nullam</td>
			<td>Consectetur Euismod</td>
		</tr>
		<tr>
			<td>Egestas Ipsum Nibh</td>
			<td>Magna Nullam</td>
			<td>Consectetur Euismod</td>
		</tr>
		<tr>
			<td>Egestas Ipsum Nibh</td>
			<td>Magna Nullam</td>
			<td>Consectetur Euismod</td>
		</tr>
	</tbody>
</table>',
),
array (
	'title' => 'Table Responsive',
	'code' => '<table class="table-bordered table-block table-responsive">
	<thead>
		<tr>
			<th>Vestibulum Sem Ipsum</th>
			<th>Dolor Fringilla</th>
			<th>Amet Mattis</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Egestas Ipsum Nibh</td>
			<td>Magna Nullam</td>
			<td>Consectetur Euismod</td>
		</tr>
		<tr>
			<td>Egestas Ipsum Nibh</td>
			<td>Magna Nullam</td>
			<td>Consectetur Euismod</td>
		</tr>
		<tr>
			<td>Egestas Ipsum Nibh</td>
			<td>Magna Nullam</td>
			<td>Consectetur Euismod</td>
		</tr>
	</tbody>
</table>',
),
);

?>


<section id="table" class="section">

<h2 class="section-title">Table <code>table.less</code></h2>

	<?php foreach ($tables as $input) : ?>
		<h3 class="section-sub-title"><?php echo $input['title']; ?></h3>
		<form class="gutter-top"><?php echo $input['code']; ?></form>
		<pre class="language-markup"><code class="language-markup"><?php echo htmlentities($input['code']); ?></code></pre>
	<?php endforeach; ?>

</section>