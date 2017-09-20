@extends('layouts.app')

@section('content')
<section class="section">

	<div class="container">
	@if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
		@for ($i = 0; $i < 5; $i++)
	<div class="box tile notification">
	<div class="tile is-ancestor">
		<div class="tile is-parent is-vertical">
			<div class="tile is-child">
				<p class="title">projectnaam:</p>
				<h1 class="subtitle">Lorem ipsum dolor sit amet</h1>
	
			</div>
			<div class="tile is-child">
					<p class="title">docent:</p>
				<p class="subtitle">de slager</p>
				
			</div>
			
		
		</div>
		<div class="is-parent tile is-vertical">
			<div class="tile is-child">
				<h2 class="title">omschrijving:</h2>
				<div class="content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
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
				<p class="subtitle">lorem ipsum</p>
			</div>
			<div class="tile is-child">
				<h2 class="title">studenten:</h2>
				<div class="content">
					<p>
						pieter</br>
						sjohn</br>
						teun</br>
					</p>
				</div>
			</div>
		</div>
	</div>
	</div>
	@endfor
	</div>


</section>
@endsection
