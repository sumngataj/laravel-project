@component('mail::message')
<div style="text-align: center;">
    <img src="{{ $message->embed(public_path().'/images/kaluhasLogo.png') }}" alt="{{ config('app.name') }}" style="width: 200px;">
    <h2>Hi {{ $mailData['user_name'] }},</h2>
</div>
<p style="text-indent:20px">{{ $mailData['body'] }} The total amount of {{ $mailData['package_name'] }} is ₱{{ number_format($mailData['price'], 2) }}.  Please wait for our sales representative to call you in order to confirm your booking.</p>

<p><span style="display:block">Thanks,</span><span>Kaluhas BHL</span></p>


{{-- @component('mail::panel')
    This is a panel
@endcomponent --}}

@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Click Here To Visit Page
@endcomponent

</div>
@endcomponent
