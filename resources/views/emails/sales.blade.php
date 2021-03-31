@component('mail::message')
Hello Admin,

User with the email {{$usersEmail}} , just made a purchase with the Order Id  listed below .

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

Thanks,<br>
{{ config('app.name') }}
@endcomponent
