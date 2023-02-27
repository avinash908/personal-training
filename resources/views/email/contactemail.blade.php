@component('mail::message')
	You received a message from : {{ ucwords($contact->name)}}
	 <p>
	Name: {{ ucfirst($contact->name) }}
	</p>
	<p>
	Email: {{ $contact->email }}
	</p>
	 {{ $contact->message }}
@endcomponent
{{-- Footer --}}
