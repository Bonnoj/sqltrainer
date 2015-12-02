{% include 'bootstrap.php' %}
{% include 'header.php' %}

<div class="jumbotron">
	<div class="container">
		<br /><a href="{{ urlFor('home') }}">Back home</a>
		
		<h3>Profiel</h3>

		{% if user is empty %}
			<p>Er is iets foutgegaan.</p>

		{% else %}
			<div class="user">
				
				
				<p>Naam: {{ user.first_name}} {{ user.last_name }}</p>
				<p>Mail: {{ user.user_mail}} </p>
					
				{% if user.rechten == 1 %}
					<p>Rol: Student</p>
				{% else %}	
					<p>Rol: Docent</p>
				{% endif %}
				
			</div>
		{% endif %}

    </div>
</div>



