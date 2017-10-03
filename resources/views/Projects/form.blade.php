@extends('layouts.app')

@section('content')
<section class="section">
	<div class="container">
	<div class="box">
		<form action="{{url('project/new')}}" method="post" >
		{{ csrf_field() }}
			<div class="field is-horizontal">
				<div class="field-label">
					<label class="label">Naam project</label>
				</div>
				<div class="field-body">
					<div class="field">
						<div class="control">
						<input type="text" name="title" class="input" placeholder="Naam">
						</div>
					</div>
				</div>
			</div>
			<div class="field is-horizontal">
				<div class="field-label">
					<label class="label">Beschrijving</label>
				</div>
				<div class="field-body">
					<div class="field">
						<div class="control">
						<textarea class="textarea" name="description"></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="field is-horizontal">
				<div class="field-label">
					<label class="label">Docent</label>
				</div>
				<div class="field-body">
					<div class="field">
						<div class="control">
						<input type="text" class="input" name="teacher" placeholder="Naam">
						</div>
					</div>
				</div>
			</div>
			<div class="field is-horizontal">
				<div class="field-label">
					<label class="label">klant</label>
				</div>
				<div class="field-body">
					<div class="field">
						<div class="control">
						<input type="text" class="input" name="customer" placeholder="Naam">
						</div>
					</div>
				</div>
			</div>
			<div class="field is-horizontal">
				<div class="field-label">
					<label class="label">studenten:</label>
				</div>
				<div class="field-body">
					<div class="field">
						<div class="control">
						<input type="text" class="input" name="students[]"placeholder="Naam">
						</div>
					</div>
				</div>
			</div>
			<div class="field is-horizontal">
				<div class="field-label">
					<label class="label"></label>
				</div>
				<div class="field-body">
					<div class="field">
						<div class="control">
						<input type="text" class="input" name="students[]" placeholder="Naam">
						</div>
					</div>
				</div>
			</div>
			<div class="field is-horizontal">
				<div class="field-label">
					<label class="label"></label>
				</div>
				<div class="field-body">
					<div class="field">
						<div class="control">
						<input type="text" class="input" name="students[]" placeholder="Naam">
						</div>
					</div>
				</div>
			</div>
			<div class="field is-horizontal">
				<div class="field-label">
					<label class="label"></label>
				</div>
				<div class="field-body">
					<div class="field">
						<div class="control">
						<input type="text" class="input" name="students[]" placeholder="Naam">
						</div>
					</div>
				</div>
			</div>
			<div class="field is-horizontal">
  <div class="field-label">
    <!-- Left empty for spacing -->
  </div>
  <div class="field-body">
    <div class="field">
      <div class="control">
        <button type="submit" class="button is-primary">
          Creer project
        </button>
      </div>
    </div>
  </div>
</div>

		</form>
		
	</div>
	</div>
</section>
@endsection