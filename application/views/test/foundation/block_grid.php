<div class="row">
	<div class="large-12 columns">
		<h3>Block grid</h3>

		<p>Block grids are ideal for blocked-in content generated by an application, as they <b>do not require rows</b> or even numbers of elements to display correctly. If you use the <code>small-block-grid-#</code> only, the grid will keep its spacing and configuration no matter the screen size. If you use <code>large-block-grid-#</code> only, the list items will stack down progressively on top of eachother for small devices. If you use both of those classes combined, you can control the configuration and layout separately for each breakpoint.</p>

		Using only <code>small-block-grid-3</code>
		<ul class="small-block-grid-3">
			<?php for($i = 1; $i <= 15; $i++) : ?>
			<li><img alt="" src="http://placehold.it/400x300&amp;text=<?=$i?>" /></li> <!--Small 200x150 Medium 400x300 Big 800x600-->
			<?php endfor ?>
		</ul>

		Using only the <code>large-block-grid-4</code> (stack for small devices)
		<ul class="large-block-grid-4">
			<?php for($i = 1; $i <= 15; $i++) : ?>
			<li><img alt="" src="http://placehold.it/400x300/00AA00/&amp;text=<?=$i?>" /></li> <!--Small 200x150 Medium 400x300 Big 800x600-->
			<?php endfor ?>
		</ul>

		Using both block grids together for different layouts
		<ul class="small-block-grid-2 large-block-grid-4">
			<?php for($i = 1; $i <= 15; $i++) : ?>
			<li><img alt="" src="http://placehold.it/400x300/0000AA/&amp;text=<?=$i?>" /></li> <!--Small 200x150 Medium 400x300 Big 800x600-->
			<?php endfor ?>
		</ul>
	</div>
</div>
