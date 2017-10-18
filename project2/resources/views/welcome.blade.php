@extends('app')
@section('content')
<div class="container">
			<div class="content">
				<div class="title">Welcome</div>
		 		<div class="quote">{{ Inspiring::quote() }}</div>
           </div>
</div>
@endsection