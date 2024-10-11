<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice #{{ $invoice->invoice_number }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            color: #333;
        }

        header {
            background-color: #0096A0;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .invoice-header h1 {
            margin: 0;
            font-size: 2em;
        }

        .invoice-details {
            width: 100%;
            margin: 20px;
            padding: 20px;
            display: table;
            /* Ensures proper side-by-side display for PDF */
        }

        .invoice-details div {
            display: table-cell;
            vertical-align: top;
            /* Aligns the content to the top */
            padding: 0 10px;
        }

        .invoice-details .invoice-left {
            width: 60%;
            /* 70% for the invoice details */
        }

        .invoice-details .invoice-right {
            width: 40%;
            /* 30% for the bill to details */
        }

        .invoice-details h2 {
            margin-bottom: 10px;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .total {
            font-weight: bold;
            font-size: 1.2em;
            text-align: right;
            margin-right: 20px;
        }

        main {
            margin-bottom: 40px;
            /* Add space before the footer */
        }

        footer {
            background-color: #0096A0;
            color: white;
            text-align: center;
            padding: 10px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
    </style>
</head>

<body>
    <header>
        <div class="invoice-header">
            <h1>Invoice #{{ $invoice->invoice_number ?? '' }}</h1>
            <div>
                <p>
                    <strong>
                        <h3>{{ $systemSettings->system_name ?? '' }}</h3>
                    </strong>
                </p>
                <p>Email: {{ $systemSettings->email ?? '' }}</p>
                <p>Phone Number: {{ $systemSettings->phone_number ?? '' }}</p>
                <p>Address: {{ $systemSettings->address ?? '' }}</p>
            </div>
        </div>
    </header>

    <div class="invoice-details">
        <div class="invoice-left">
            <h2>INVOICE DETAILS:</h2>
            <p><strong>Date:</strong> {{ $invoice->invoice_date ?? '' }}</p>
            <p><strong>Status:</strong> {{ $invoice->status ?? '' }}</p>
            <p><strong>Total Amount:</strong> {{ $invoice->total_amount ?? '' }} {{ $invoice->currency ?? '' }}</p>
        </div>

        <div class="invoice-right">
            <h2>BILL TO:</h2>
            <p><strong>Name:</strong> {{ $invoice->user->name ?? '' }}</p>
            <p><strong>Address:</strong> {{ $invoice->user->address ?? 'N/A' }}</p>
            <p><strong>Email:</strong> {{ $invoice->user->email ?? '' }}</p>
        </div>
    </div>

    <main>
        <table>
            <thead>
                <tr>
                    <th>ITEMS</th>
                    <th>QUANTITY</th>
                    <th>PRICE</th>
                    <th>AMOUNT</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoice->transaction->orders as $order)
                    <tr>
                        <td>{{ $order->product->title ?? '' }}</td>
                        <td>{{ $order->quantity ?? '' }}</td>
                        <td>{{ $order->product_price ?? '' }} {{ $order->currency ?? '' }}</td>
                        <td>{{ $order->payed_amount ?? '' }} {{ $order->currency ?? '' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <p class="total">TOTAL: {{ $invoice->total_amount ?? '' }} {{ $invoice->currency ?? '' }}</p>
    </main>

    <footer>
        <p>{{ $systemSettings->copyright_text ?? '' }}</p>
    </footer>

</body>

</html>
