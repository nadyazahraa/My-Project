@component('mail::message')
# Contact Us Mail

We really appreciate your suggestions, Thank you for contacting us!
 
<p>Name: {{ $data['name'] }}</p>
<p>Email: {{ $data['email'] }}</p>
<p>Subject: {{ $data['subject'] }}</p>
<p>Message: {{ $data['msg'] }}</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
