<h1>Users</h1>

{% if users is empty %}
	<p>No users, yet.</p>

{% else %}
	{% for user in users %}
	<div class="user">
		<h2>{{ user.first_name }}</h2>
	</div>
	{% endfor %}

{% endif %}