@extends('layouts.master')

@section('title', '| Guest Index')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-sm-offset-2">
			<div class="card border-dark">
				<div class="card-header border-dark text-center">
					Posts
				</div>

				<div class="card-body">
					<div class="form-row">
						<div class="col-md-6">
							<h4 class="card-title">List</h4>
							<h6 class="card-subtitle mb-2 text-muted">
								{{ $posts->total() }} Post(s) ({{ $posts->lastItem() }} of {{ $posts->total() }})
							</h6>
						</div>
					</div>

					<p class="card-text">
						<div class="table-responsive">
							<table class="table table-striped table-hover table-bordered">
								<thead>
									<tr>
										<th class="text-center">#</th>
										<th>Title</th>
										<th>Body</th>
										<th>Category</th>
										<th class="text-center">Option</th>
									</tr>
								</thead>

								<tbody>
									<?php
										$number = 1;
									?>
									@foreach($posts as $post)
										<tr>
											<th>{{ $number }}</th>
											<td style="min-width:250px;">{{ $post->title }}</td>
											<td style="min-width:250px;">{{ $post->body }}</td>
											<td style="min-width:100px;">{{ $post->categories->name }}</td>
											<td class="text-center" style="min-width:100px;">
												{!! Form::open([
													'route' => ['guest.index'],
													'method' => 'GET',
													])
												!!}
													{{ Form::submit('View', [
															'class' => 'btn btn-outline-info btn-block',
														])
													}}
												{!! Form::close() !!}
											</td>
										</tr>
									<?php
										$number++;
									?>
									@endforeach
								</tbody>
							</table>
						</div>
					</p>
				</div>

				<div class="card-footer border-dark bg-transparent mb-0 mt-0 pb-0 pt-0">
					{!! $posts->links(); !!}
				</div>
			</div>
		</div>
	</div>
	<hr class="border-dark" />
</div>

@endsection