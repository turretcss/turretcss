<section id="fieldset" class="section">

<h2 class="section-title">Fieldset<code>forms/fieldset.less</code></h2>

<form role="form">
	<fieldset>
		<legend>Login</legend>
		<label for="email">Email</label>
		<input type="email" id="email" placeholder="Enter Email">
		<label for="password">Password</label>
		<input type="password" id="password" placeholder="Enter Password">
		<button type="submit" class="button gutter-top">Submit</button>
	</fieldset>
</form>

<pre class="language-less"><code class="language-less"><?php echo htmlentities('@fieldset-margin: 0;
@fieldset-padding: 20px;
@fieldset-border: 1px solid @grey;

@fieldset-legend-padding: 10px;
@fieldset-legend-font-size: @font-size-medium;
@fieldset-legend-color: @grey;'); ?></code></pre>

<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<form role="form">
	<fieldset>
		<legend>Login</legend>
		<label for="email">Email</label>
		<input type="email" id="email" placeholder="Enter Email">
		<label for="password">Password</label>
		<input type="password" id="password" placeholder="Enter Password">
		<button type="submit" class="button gutter-top">Submit</button>
	</fieldset>
</form>'); ?></code></pre>

</section>