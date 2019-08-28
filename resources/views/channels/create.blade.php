@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Channel</div>

                <div class="card-body">
                	@if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('channels.store') }}" method="POST">
                    	{{ csrf_field() }}


                    	<div class="form-group">
                    		<input name="channel" type="text" class="form-control">
                    	</div>

                    	<div class="form-group">
                    		<div class="text-center">
                    			<button class="btn btn-success" type="submit">
                    				Save Channel
                    			</button>
                    		</div>
                    	</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
