{% include 'bootstrap.php' %}
{% include 'header.php' %}

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
	<div class="container"><br />
		<p>Welkom {{ first_name }} {{ last_name }} bij de SQL Trainer!</p>
		
		{% if rechten == 1 %}
			<p>You are a student.</p>
		{% else %}
			<p>You are a teacher.</p>
		{% endif %}
	</div>
</div>
    
<div class="container">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h2>Opdrachten</h2>
				
				{% if opdrachten is empty %}
					<p>No opdrachten, yet.</p>
				{% else %}
				
				{% for opdracht in opdrachten %}
					<div class="opdracht">
						<a href="{{ urlFor('opdrachten.show', {'opdrachtId': opdracht.id}) }}">{{ opdracht.id }}: {{ opdracht.beschrijving }}</a>
					</div>
					{{ post.title }}
				{% endfor %}
				{% endif %}
				<br />
				<p><a class="btn btn-default" href="#" role="button">Alle opdrachten &raquo;</a></p>
			</div>
			<div class="col-md-4">
				<h2>Toetsen</h2>
				<p>Er zijn momenteel geen toetsen beschikbaar. </p>
			</div>
			<div class="col-md-4">
				<h2>Resultaten</h2>
				<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
			</div>
		</div>
	</div>
</div>





