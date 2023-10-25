@component('mail::message')
<div style="text-align: center;">
    <img src="{{ asset('images/kaluhasLogo.png') }}" alt="{{ config('app.name') }}" style="width: 200px;">
    <h2>Hi {{ $mailDataBooked['user_name'] }},</h2>
</div>
<p style="text-indent:20px">{{ $mailDataBooked['book'] }} The date of your booking is this coming {{ date('F j, Y', strtotime($mailDataBooked['reservation_date'])) }}, with a total amount of ₱{{ number_format($mailDataBooked['price'], 2) }}.</p>

<p><span style="display:block">Thanks,</span><span>Kaluhas BHL</span></p>


@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Click Here To Visit Page
@endcomponent

</div>
@endcomponent
