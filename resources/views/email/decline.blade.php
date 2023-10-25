@component('mail::message')
<div style="text-align: center;">
    <img src="{{ asset('images/kaluhasLogo.png') }}" alt="{{ config('app.name') }}" style="width: 200px;">
    <h2>Hi {{ $mailDecline['user_name'] }},</h2>
</div>
<p style="text-indent:20px">{{ $mailDecline['decline'] }} </p>

<p><span style="display:block">Thanks,</span><span>Kaluhas BHL</span></p>


@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Click Here To Visit Page
@endcomponent

</div>
@endcomponent
