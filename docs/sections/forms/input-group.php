<section id="input-group" class="section">

<h2 class="section-title">Input Group<code>forms/input-group.less</code></h2>

<h3 class="section-sub-title">Input Group</h3>
<form>
	<div class="input-group">
		<input type="text" placeholder="Enter Keyword...">
		<span class="input-group-button">
			<button class="button button-primary" type="submit">Submit</button>
		</span>
	</div>
</form>

<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<div class="input-group">
	<input type="text" placeholder="Enter Keyword...">
	<span class="input-group-button">
		<button class="button button-primary" type="submit">Submit</button>
	</span>
</div>'); ?></code></pre>

<h3 class="section-sub-title">Input Group Sizes</h3>
<form role="form">
	<div class="input-group">
		<input class="search form-input input-large" type="text" placeholder="Input Group Large">
		<span class="input-group-button input-group-button-large">
			<button class="button button-primary" type="submit">Submit</button>
		</span>
	</div>
</form>

<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<div class="input-group">
	<input class="search form-input input-large" type="text" placeholder="Enter Keyword...">
	<span class="input-group-button input-group-button-large">
		<button class="button button-primary" type="submit">Submit</button>
	</span>
</div>'); ?></code></pre>

<h3 class="section-sub-title">Search Form</h3>
<form role="form">
	<div class="input-group input-group-search">
		<input type="search" placeholder="Search">
		<span class="input-group-button">
			<button class="button button-primary" type="submit"><span class="icon icon-search"></span></button>
		</span>
	</div>
</form>

<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<div class="input-group input-group-search">
	<input type="search" placeholder="Enter Keyword...">
	<span class="input-group-button">
		<button class="button button-primary" type="submit"><span class="icon icon-search"></span></button>
	</span>
</div>'); ?></code></pre>

</section>