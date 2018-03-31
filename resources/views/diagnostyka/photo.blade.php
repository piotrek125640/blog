<article class='content'>
	<h2 class='title is 2'>
		<a href='{{url("/posts/{$post->id}") }}'>{{$post->title}}</a>
		</h2>
	<time>{{$post->created_at->diffForHumans()}}</time>
	<div>{{$post->body}}</div>
</article>
<img class="first-slide" src="{{$photo->src}}" alt="First slide">
