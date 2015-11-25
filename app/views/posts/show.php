<a href="{{ urlFor('home') }}">Back home</a>

<h1>{{ post.title }}</h1>

<p>{{ post.body }}</p>

<div class="author">
	By {{ post.first_name}} {{ post.last_name }} on {{ post.created }}
</div>