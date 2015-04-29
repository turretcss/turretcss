<?php

$tables = array(
array (
	'title' => 'Table',
	'definition' => '@table-background: none;
@table-border-radius: @border-radius;

@table-caption-margin: 5px 10px;
@table-caption-font-size: @font-size-medium;
@table-caption-font-weight: @bold-font-weight;
@table-caption-color: @body-color;
@table-caption-text-align: left;

@table-head-padding: 10px;
@table-head-font-family: @bold-font-family;
@table-head-font-weight: @bold-font-weight;
@table-head-font-size: @paragraph-font-size;
@table-head-text-align: left;
@table-head-text-transform: none;
@table-head-color: @body-color;

@table-cell-padding: 10px;
@table-cell-font-size: @paragraph-font-size;
@table-cell-color: @body-color;
@table-cell-line-height: @line-height;
@table-cell-vertical-align: middle;',
	'code' => '<table>
	<caption>Table Caption</caption>
	<thead>
		<tr>
			<th scope="col">Vestibulum Sem Ipsum</th>
			<th scope="col">Dolor Fringilla</th>
			<th scope="col">Amet Mattis</th>
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
	'definition' => '@table-border: solid @light-grey;
@table-border-width: 1px;',
	'code' => '<table class="table-bordered">
	<thead>
		<tr>
			<th scope="col">Vestibulum Sem Ipsum</th>
			<th scope="col">Dolor Fringilla</th>
			<th scope="col">Amet Mattis</th>
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
	'definition' => '@table-block-head-background: @light;',
	'code' => '<table class="table-bordered table-block">
	<thead>
		<tr>
			<th scope="col">Vestibulum Sem Ipsum</th>
			<th scope="col">Dolor Fringilla</th>
			<th scope="col">Amet Mattis</th>
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
	'definition' => '@table-responsive-breakpoint: @small;
@table-responsive-row-margin: 10px 0px;
@table-responsive-cell-padding: 10px 0px;
@table-responsive-border: solid @light;
@table-responsive-border-width: 0px 0px 1px 0px;',
	'code' => '<table class="table-bordered table-block table-responsive">
	<thead>
		<tr>
			<th scope="col">Vestibulum Sem Ipsum</th>
			<th scope="col">Dolor Fringilla</th>
			<th scope="col">Amet Mattis</th>
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

	<?php foreach ($tables as $table) : ?>
		<h3 class="section-block-title"><?php echo $table['title']; ?></h3>
		<form class="gutter-top"><?php echo $table['code']; ?></form>
		<?php if ($table['definition']) : ?>
			<pre class="language-less"><code class="language-less"><?php echo htmlentities($table['definition']); ?></code></pre>
		<?php endif; ?>
		<pre class="language-markup"><code class="language-markup"><?php echo htmlentities($table['code']); ?></code></pre>
	<?php endforeach; ?>

</section>