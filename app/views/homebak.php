<head>
  <title>SQL Trainer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>



{% block content %}

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SQL Trainer</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="HZ-Email" class="form-control"><br />
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control"><br />
            </div>
            <button type="submit" class="btn btn-success">Sign in</button><br />
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

	<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
	  
		<div id="resultQuery" class="form-group" style="margin-top:25px;">
			<label for="comment">Opdract 1: <?php echo $rows[0]['beschrijving']; ?></label><br />
			<!--<label for="comment2">Test:<?php print json_encode($rows); ?></label>-->
			<textarea style="width: 100%;" class="form-control" rows="3" placeholder="Voer je query in" required></textarea>
			
		</div>
        <p><a onclick="submit()" class="btn btn-primary btn-lg" id="submitOpdracht" href="#" role="button">Submit &raquo;</a></p>
		
		<div class="alert alert-danger" id="errorBox" role="alert" style="display: none;>
		  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		  <span class="sr-only">Error:</span>
		  <b>Resultaat:</b><br />
		  Query is fout
		</div>
      </div>
    </div>
    
<div class="container">
      <!-- Example row of columns -->

		
		<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Query results: </div>

  <!-- Table -->
  <table class="table">
	  <tr>
		<th>Firstname</th>
		<th>Lastname</th> 
		<th>City</th>
	  </tr>
	  <tr>
		<td>Eve</td>
		<td>Jackson</td> 
		<td>New York</td>
	  </tr>
	  <tr>
		<td>Eve</td>
		<td>Jackson</td> 
		<td>New York</td>
	  </tr>
	  <tr>
		<td>Eve</td>
		<td>Jackson</td> 
		<td>New York</td>
	  </tr>
	  <tr>
		<td>Eve</td>
		<td>Jackson</td> 
		<td>New York</td>
	  </tr>
  </table>
  
  
</div>	


<h1>Opdrachten</h1>

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
        </div>
{% endblock %}

<br /><br /><br />



