@component('mail::message')

Dear {{$orders->user->name}},

We have a new status for you on the order your purchased on our platform.<br>
#OrderID : {{$orders->order_id}}<br>
#Order Status : {{Ucfirst($orders->status)}}<br>
#Purchased Date: {{$orders->created_at->format('d-m-Y')}}<br>

You can track your order in your dashboard.

@component('mail::button', ['url' => ''])
Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
