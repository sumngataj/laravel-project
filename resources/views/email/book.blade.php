@component('mail::message')
<div style="text-align: center;">
    <img src="{{ asset('images/kaluhasLogo.png') }}" alt="{{ config('app.name') }}" style="width: 200px;">
    <h2>Hi {{ $mailDataBooked['user_name'] }},</h2>
</div>
<p style="text-indent:20px">{{ $mailDataBooked['book'] }} The date of your booking is this coming {{ date('F j, Y', strtotime($mailDataBooked['reservation_date'])) }}, with a total amount of ₱{{ number_format($mailDataBooked['price'], 2) }}. To pay online please fill up the form below and upload a photo of the receipt.</p>

@component('mail::panel')
    <h4 style="text-align: center;">PAYMENT FORM</h4>
    <strong>Name:</strong> <br>
    <strong>Address:</strong> <br>
    <strong>Contact Number:</strong> <br>
    <strong>Type of Payment:</strong> Full/Downpayment <br>
    <div style="margin-top: 20px; ">
        <strong>For GCash Payment:</strong> <br>
        <div style="text-align: center;">
            <img src="{{ asset('images/qr.png') }}" alt="Payment Image" style="width: 100px;">
        </div>
    </div>
    <div style="text-align: center; margin-top: 20px;">
        <img src="{{ asset('images/GCash-Logo.png') }}" alt="Payment Image" style="width: 100px;">
    </div>
@endcomponent



<p><span style="display:block">Thanks,</span><span>Kaluhas BHL</span></p>


@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Click Here To Visit Page
@endcomponent

</div>
@endcomponent
