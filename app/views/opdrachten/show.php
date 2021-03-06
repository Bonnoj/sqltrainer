{% include 'bootstrap.php' %}
{% include 'header.php' %}

<div class="jumbotron">
	<div class="container">
		<br /><a href="{{ urlFor('home') }}">Back home</a>
		
		<h3>{{ opdracht.beschrijving }}</h3>
	  
		<div id="resultQuery" class="form-group" style="margin-top:25px;">
			<label for="comment">Vul hier je query in: <?php echo $rows[0]['beschrijving']; ?></label><br />

			<form action="" method="post">
				<textarea name="query" style="width: 100%;" class="form-control" rows="3" placeholder="Voer je query in" required></textarea>
				<br /><input class="btn btn-primary btn-lg" type="submit" name="uitvoeren" value="Uitvoeren">
				<input class="btn btn-primary btn-lg" type="submit" name="inleveren" value="Inleveren">
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
                
                <table class="table">
                {% for result1 in result %}
                    <tr>
                    {% for result2 in result1 %}
                    <td>
                {{ result2 }} 
                    </td>
                    {% endfor %}
                    </tr>
                {% endfor %}
                </table>

		</br>
		{% if test == true %}
			true
		{% else %}
			false
		{% endif %}
                
    </div>
</div>
	
