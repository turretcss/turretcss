<section id="form" class="section">

<div class="title-group">
	<h1 class="title">Form</h1>
	<p class="lead">A collection of form elements including inputs, input-groups, radio and checkbox controls, and selects.</p>
</div>

<h2 class="section-title">Form<code>forms/form.less</code></h2>
<p>The styles within <code>form.less</code> include the fieldset styles as well as normalising form element behaviours, making controls display <code>inline-block</code>, <code>height: auto</code> for textareas, and making selects<code>display: block</code>.</p>

<h3 class="section-sub-title">Fieldset</h3>

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


<h3 class="section-sub-title">Simple Example</h3>
<form role="form">
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
<form role="form">
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
		<div class="column-1 gutter-top">
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
		<div class="column-1 gutter-top">
			<button type="submit" class="button">Submit</button>
		</div>
	</div>
</form>'); ?></code></pre>

</section>