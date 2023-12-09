@component('mail::message')
<div style="text-align: center;">
    <img src="{{ $message->embed(public_path().'/images/kaluhasLogo.png') }}" alt="{{ config('app.name') }}" style="width: 200px;">
</div>

@component('mail::panel')
    <h4 style="text-align: center;">SUMMARY OF PAYMENT</h4>
    <strong>Name:</strong> {{ $mailPayment['fullname'] }} <br>
    <strong>Address:</strong> {{ $mailPayment['address'] }} <br>
    <strong>Contact Number:</strong> {{ $mailPayment['mobile_number'] }} <br>
    @if ($mailPayment['account_number']) <strong>Payment Details:</strong> <br> Account Number: {{ $mailPayment['account_number'] }} <br> Bank Details: {{ $mailPayment['bank_details'] }} <br> @endif
    @if ($mailPayment['gcash']) <strong>Payment Details:</strong> <br> Gcash Account Number: {{ $mailPayment['gcash'] }}@endif
    
    <div style="margin-top: 20px; ">
        <div style="text-align: center;">
            @if ($mailPayment['BnewFileName'])
            <img src="{{ $message->embed(public_path().'/images/payment_files/' . $mailPayment['BnewFileName']) }}" alt="Payment Image" style="width: 400px;">
            @endif
            @if ($mailPayment['GnewFileName'])
            <img src="{{ $message->embed(public_path().'/images/payment_files/' . $mailPayment['GnewFileName']) }}" alt="Payment Image" style="width: 400px;">
            @endif
        </div>        
    </div>
@endcomponent

<p><span style="display:block">Thanks,</span><span>Kaluhas BHL</span></p>


@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Click Here To Visit Page
@endcomponent

@endcomponent
