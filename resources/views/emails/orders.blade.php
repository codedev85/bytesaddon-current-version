@component('mail::message')

Dear {{$user}},

You currently placed an order on bytesaddon.com.ng.You can track your order with the order ID provided below.


  <table>
      <tr>
          <th>
              #
          </th>
          <th>
              Order Id
          </th>
      </tr>
      @foreach($orderArray  as $key => $order)
      <tr>
          <td>
              {{$key + 1}}
          </td>
          <td>
              {{$order->order_id}}
          </td>
      </tr>
      @endforeach
  </table>





@component('mail::button', ['url' => env("APP_URL")])
Visit Site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
