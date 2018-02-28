<div class="sidebar hide-for-print">

<% if $ProductBrochure %>
	<% with $ProductBrochure %>
		<a href="$URL" class="button download">$Title - ($Size)</a>
	<% end_with %>
<% end_if %>

<div class="sidebar-menu">
	<% if Menu(3) %>
		<ul>
			<% loop Menu(3) %>
				<li <% if LinkOrSection = section %>class="active"<% end_if %>>
					<a href="$Link">$Title</a>
				</li>
			<% end_loop %>
		</ul>
	<% else_if Menu(2) %>
		<ul>
			<% loop Menu(2) %>
				<li <% if LinkOrSection = section %>class="active"<% end_if %>>
					<a href="$Link">$Title</a>
				</li>
			<% end_loop %>
		</ul>
	<% else %>
		<ul>
			<% loop Menu(1) %>
				<li <% if LinkOrSection = section %>class="active"<% end_if %>>
					<a href="$Link">$Title</a>
				</li>
			<% end_loop %>
		</ul>
	<% end_if %>
</div>
