@component('mail::message')
# Thank you for trusting us, your package will be delivered soon.

If you haven't received the package within <strong>10 days</strong>, 
then you can send a complaint to our official website or contact:

Phone: <a href="tel:+62-81318418394">+62-8131 841 8394</a>
Email: <a href="mailto:nadyaaazahraa@gmail.com">milkyWay@gmail.com</a>

@component('mail::button', ['url' => ''])
Our Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
