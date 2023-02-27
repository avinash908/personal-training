@component('mail::message')
	<h3>Training Type:</h3>
	<p>
		@foreach($contact->training_type as $type)
		{{ ucfirst($type) }},
		@endforeach
	</p>
	<h3>Training Goal:</h3>
	<p>
	{{ $contact->training_goal }}
	</p>
	<h3>Nutrition Advice:</h3>
	<p>
	{{ $contact->nutrition_advice }}
	</p>
	<h3>Preferred Training City:</h3>
	<p>
		@foreach($contact->preferred_training_city as $city)
		{{ ucfirst($city) }},
		@endforeach
	</p>
	<h3>Preferred Training Location:</h3>
	<p>
	{{ $contact->preferred_training_location }}
	</p>
	<h3>Coach Gender:</h3>
	<p>
	{{ $contact->gender }}
	</p>
	<h2>My Details</h2>
	<h3>Name:</h3>
	<p>
	{{ ucfirst($contact->name) }}
	</p>
	<h3>Email:</h3>
	<p>
	{{ $contact->email }}
	</p>
	<h3>Phone:</h3>
	<p>
	{{ $contact->phone }}
	</p>
	<br>
	<p style="font-weight: bold;">{{ $contact->send_me_links }}</p>
	<p style="font-weight: bold;">{{ $contact->send_my_contact }}</p>
@endcomponent
{{-- Footer --}}