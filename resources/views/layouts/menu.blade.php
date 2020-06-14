<div class="card">
	<article class="card-group-item">
		<div class="filter-content">
			<div class="list-group list-group-flush">
			  <a href="{{ url('about') }}" class="list-group-item">О журнале> </a>
			  <a href="#" class="list-group-item">Редакционная коллегия</a>
			  <a href="#" class="list-group-item">Morbi leo risus <span class="float-right badge badge-light round">32</span>  </a>
			  <a href="#" class="list-group-item">Another item <span class="float-right badge badge-light round">12</span>  </a>
			</div>  <!-- list-group .// -->
    </div>
    <hr>
    <div class="filter-content">
			<div class="list-group list-group-flush">
        @foreach($tasks as $task)
          <a href="{{ url("/category/{$task->id}") }}" class="list-group-item">{{ $task->name }}</a>
        @endforeach
			</div>  <!-- list-group .// -->
    </div>
	</article> <!-- card-group-item.// -->
</div> <!-- card.// -->
