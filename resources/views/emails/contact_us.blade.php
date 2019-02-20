@component('mail::message')
# Contact Us Mail

<h3> Name : {{ $contact_mails['name'] }}</h3>

<h3> Email : {{ $contact_mails['email'] }}</h3>

<h3> Subject : {{ $contact_mails['subject'] }}</h3>


<p>
 <b>Message:</b> <br>
{{ $contact_mails['message'] }}

</p>



@endcomponent