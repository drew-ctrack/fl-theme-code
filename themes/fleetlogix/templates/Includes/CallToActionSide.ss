<!-- CTA 1 -->
<% if $ctaCheckbox %>
	<a href="$PageCallToActionLink" class="cta-container blocks animate-box">
		<div class="background-image" style="background-image: url($ThemeDir/assets/img/cta-bg.jpg);"></div>
		<div class="overlay"></div>
		<div class="cta-content">
			<h2>$PageCallToActionHeader</h2>
			<p>$PageCallToActionText</p>
			<span class="button">Learn More</span>
		</div>
	</a>
<% end_if %>
<!-- END CTA 1 -->
