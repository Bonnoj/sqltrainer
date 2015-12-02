{% include 'bootstrap.php' %}
{% include 'header.php' %}

<div class="jumbotron">
	<div class="container">
		<br /><a href="{{ urlFor('home') }}">Back home</a>
		
		<h3>Nieuwe opdracht</h3>
	  
		<div id="opdrachtOmschrijving" class="form-group" style="margin-top:25px;">
			<label for="comment">Opdrachtomschrijving: </label><br />
			<form action="" method="post">
				<textarea name="beschrijving" style="width: 100%; resize: none;" class="form-control" rows="1" placeholder="Voer je omschrijving in" required></textarea>

			
		</div>
                
                <div id="resultQuery" class="form-group" style="margin-top:25px;">
			<label for="comment">Vul hier je query in: </label><br />

			
				<textarea name="antwoord" style="width: 100%;" class="form-control" rows="3" placeholder="Voer je query in" required></textarea>
				<br /><input class="btn btn-primary btn-lg" type="submit">
			</form>
		</div>
        <!--<p><a onclick="submit()" class="btn btn-primary btn-lg" id="submitOpdracht" href="#" role="button">Submit &raquo;</a></p>
		-->
		<div class="alert alert-danger" id="errorBox" role="alert" style="display: none;">
		  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		  <span class="sr-only">Error:</span>
		  <b>Resultaat:</b><br />
		  Query is fout
		</div>
		
		{% if test is empty %}
		{% else %}
			<p>Query: {{ test }}</p>
		{% endif %}
    </div>
</div>
	
