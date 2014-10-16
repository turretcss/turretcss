<section id="form" class="section">

<h2 class="section-title">Form<code>forms/form.less</code></h2>

<h3 class="section-sub-title">Labels</h3>
<h3 class="section-sub-title">Fieldset</h3>
<h3 class="section-sub-title">Errors</h3>


<h3 class="section-sub-title">Simple Example</h3>
<form role="form" class="bottom-gutter">
	<label for="email">Email</label>
	<input type="email" id="email" placeholder="Enter Email">
	<label for="password">Password</label>
	<input type="password" id="password" placeholder="Enter Password">
	<label class="control checkbox">
		<input type="checkbox" name="checkbox" checked="true">
		<span class="control-indicator"></span>
		<span class="control-label">I agree to checking this checkbox</span>
	</label>
	<button type="submit" class="button">Submit</button>
</form>

<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<form role="form" class="bottom-gutter">
	<label for="email">Email</label>
	<input type="email" id="email" placeholder="Enter Email">
	<label for="password">Password</label>
	<input type="password" id="password" placeholder="Enter Password">
	<label class="control checkbox">
		<input type="checkbox" name="checkbox" checked="true">
		<span class="control-indicator"></span>
		<span class="control-label">I agree to checking this checkbox</span>
	</label>
	<button type="submit" class="button">Submit</button>
</form>'); ?></code></pre>


<h3 class="section-sub-title">Multi-Column Example</h3>
<form role="form" class="bottom-gutter">
	<div class="row">
		<div class="column-1-2">
			<label for="first-name">First Name</label>
			<input type="text" id="first-name" placeholder="Enter First Name">
		</div>
		<div class="column-1-2">
			<label for="last-name">Last Name</label>
			<input type="text" id="last-name" placeholder="Enter Last Name">
		</div>
		<div class="column-1-2">
			<label for="email">Email</label>
			<input type="email" id="email" placeholder="Enter Email">
		</div>
		<div class="column-1-2">
			<label for="password">Password</label>
			<input type="password" id="password" placeholder="Enter Password">
		</div>
		<div class="column-1">
			<button type="submit" class="button">Submit</button>
		</div>
	</div>
</form>

<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<form role="form">
	<div class="row">
		<div class="column-1-2">
			<label for="first-name">First Name</label>
			<input type="text" id="first-name" placeholder="Enter First Name">
		</div>
		<div class="column-1-2">
			<label for="last-name">Last Name</label>
			<input type="text" id="last-name" placeholder="Enter Last Name">
		</div>
		<div class="column-1-2">
			<label for="email">Email</label>
			<input type="email" id="email" placeholder="Enter Email">
		</div>
		<div class="column-1-2">
			<label for="password">Password</label>
			<input type="password" id="password" placeholder="Enter Password">
		</div>
		<div class="column-1">
			<button type="submit" class="button">Submit</button>
		</div>
	</div>
</form>'); ?></code></pre>

</section>