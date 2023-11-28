@component('mail::message')
<div style="text-align: center;">
    <img src="{{ $message->embed(public_path().'/images/kaluhasLogo.png') }}" alt="{{ config('app.name') }}" style="width: 200px;">
    <h2>Hi {{ $mailDataCustom['user_name'] }},</h2>
</div>
<p style="text-indent:20px">{{ $mailDataCustom['body'] }} 
    Here is the summary of your reservation: the venue is in {{ $mailDataCustom['venue_name'] }}, {{ $mailDataCustom['venue_address'] }}. 
    And it includes {{ $mailDataCustom['add_ons'] }}, and a total price of ₱{{ number_format($mailDataCustom['price'], 2) }}. 
    Please wait for more information.</p>

<p><span style="display:block">Thanks,</span><span>Kaluhas BHL</span></p>


{{-- @component('mail::panel')
    This is a panel
@endcomponent --}}

@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Click Here To Visit Page
@endcomponent

</div>
@endcomponent
