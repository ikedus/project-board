@extends('layouts.app')

@section('content')
<section class="section">

	<div class="container">
	@if (session('status'))
                        <div class="box notification is-success">
                            <p>{{ session('status') }}</p>
                        </div>
                    @endif
        @if (count($data) <= 0)
			<div class="box notification is-warning">
				<p>Er zijn geen projecten om te tonen.</p>
			</div>
        @else
		@foreach ($data as $project)

	<div class="box tile notification">
	<div class="tile is-ancestor">
		<div class="tile is-parent is-vertical">
			<div class="tile is-child">
				<p class="title">projectnaam:</p>
				<h1 class="subtitle">{{$project->name}}</h1>
	
			</div>
			<div class="tile is-child">
					<p class="title">docent:</p>
				<p class="subtitle">{{$project->teacher->first()->name}}</p>
				
			</div>
			
		
		</div>
		<div class="is-parent tile is-vertical">
			<div class="tile is-child">
				<h2 class="title">omschrijving:</h2>
				<div class="content">
					<p>{{$project->description}}</p>
				</div>
			</div>
			<div class="tile">
				<div class="tile is-child">
					<div class="content">
						<p><span class="title is-5">codereview:</span> 20-09-17</p>
					</div>
				</div>
				<div class="tile is-child">
					<div class="content">
						<p><span class="title is-5">itteratie:</span> 23-09-17</p>
					</div>
				</div>
			</div>
		</div>
		<div class="tile is-parent is-vertical">
			<div class="tile is-child">
				<h2 class="title">klant:</h2>
				<p class="subtitle">{{$project->customer->first()->name}}</p>
			</div>
			<div class="tile is-child">
				<h2 class="title">studenten:</h2>
				<div class="subtitle">
						@foreach ($project->student as $student)
						{{$student->name}}
						@if (!$loop->last)
					</br>
						@endif
						@endforeach
				</div>
			</div>
		</div>
	</div>
	</div>
	@endforeach
	@endif
	</div>


</section>
@endsection
