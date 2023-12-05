@component('mail::message')
<div style="text-align: center;">
    <img src="{{ $message->embed(public_path().'/images/kaluhasLogo.png') }}" alt="{{ config('app.name') }}" style="width: 200px;">
    <h2>Hi {{ $mailDataBooked['user_name'] }},</h2>
</div>
<p style="text-indent:20px">{{ $mailDataBooked['book'] }} The date of your booking is this coming {{ date('F j, Y', strtotime($mailDataBooked['reservation_date'])) }}. If there is any remaining balance please settle it 2 days before the event.</p>



<p><span style="display:block">Thanks,</span><span>Kaluhas BHL</span></p>


@component('mail::button', ['url' => 'http://127.0.0.1:8000'])
Click Here To Visit Page
@endcomponent

</div>
@endcomponent

