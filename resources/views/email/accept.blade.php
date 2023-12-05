@component('mail::message')
<div style="text-align: center;">
    <img src="{{ $message->embed(public_path().'/images/kaluhasLogo.png') }}" alt="{{ config('app.name') }}" style="width: 200px;">
    <h2>Hi {{ $mailDataAccept['user_name'] }},</h2>
</div>
<p style="text-indent:20px">{{ $mailDataAccept['book'] }} The date of your reservation is this coming {{ date('F j, Y', strtotime($mailDataAccept['reservation_date'])) }}, with a total amount of ₱{{ number_format($mailDataAccept['price'], 2) }}. 
    In order to confirm your booking, we would like to ask the advance payment or reservation fee, to formally book the date. Just click the button below.</p>

{{-- @component('mail::panel')
    <h4 style="text-align: center;">PAYMENT FORM</h4>
    <strong>Name:</strong> <br>
    <strong>Address:</strong> <br>
    <strong>Contact Number:</strong> <br>
    <strong>Type of Payment:</strong> Full/Downpayment <br>
    <div style="margin-top: 20px; ">
        <strong>For GCash Payment:</strong> <br>
        <div style="text-align: center;">
            <img src="{{ $message->embed(public_path().'/images/qr.png') }}" alt="Payment Image" style="width: 100px;">
        </div>
    </div>
    <div style="text-align: center; margin-top: 20px;">
        <img src="{{ $message->embed(public_path().'/images/GCash-Logo.png') }}" alt="Payment Image" style="width: 100px;">
    </div>
@endcomponent --}}



<p><span style="display:block">Thanks,</span><span>Kaluhas BHL</span></p>


@component('mail::button', ['url' => 'http://127.0.0.1:8000/payment'])
Proceed for Online Payment
@endcomponent

</div>
@endcomponent
