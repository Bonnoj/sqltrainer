{% include 'bootstrap.php' %}
{% include 'header.php' %}

<div class="jumbotron">
	<div class="container">
		<br /><a href="{{ urlFor('home') }}">Back home</a>
		
		<h3>Users</h3>

		{% if users is empty %}
			<p>No users, yet.</p>

		{% else %}
			{% for user in users %}
			<div class="user">
				
				<a href="{{ urlFor('userinfo', {'username': user.id}) }}">
				<p>{{ user.id}} | {{ user.first_name }}</p>
				</a>
			</div>
			{% endfor %}
		{% endif %}

    </div>
</div>



