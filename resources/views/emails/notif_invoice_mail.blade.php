<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $data['subject'] }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #e0e0e0;
        }
        .header img {
            width:64px;
            align-items: center;
        }
        .header h1 {
            color: #333;
            font-size: 24px;
            margin: 0;
            padding-top: 20px
        }
        .header p {
            color: #777;
            font-size: 14px;
        }
        .invoice-details, .customer-details, .payment-details {
            margin: 20px 0;
        }
        .invoice-details h2, .customer-details h2, .payment-details h2 {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }
        .invoice-details p, .customer-details p, .payment-details p {
            margin: 5px 0;
            color: #555;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .table th, .table td {
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
        }
        .table th {
            background-color: #f9f9f9;
            color: #333;
        }
        .table td {
            color: #555;
        }
        .total {
            text-align: right;
            /* font-weight: bold; */
            font-size: 16px;
            color: #333;
            margin-top: 10px;
        }
        .notes {
            text-align: left;
            margin-top: 5;
            padding-top: 5;
            /* border-top: 1px solid #e0e0e0; */
            color: #777;
            font-size: 14px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
            color: #777;
            font-size: 12px;
        }
        @media only screen and (max-width: 600px) {
            .container {
                padding: 10px;
            }
            .table th, .table td {
                font-size: 14px;
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <div style="background:#fff;background-color:#fff;Margin:0px auto;max-width:600px;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#fff;background-color:#fff;width:100%;">
            <tbody>
                <tr>
                    <td style="border:#dddddd solid 1px;border-top:0px;direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;">
                        <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:bottom;width:100%;">

                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:bottom;" width="100%">

                                <tr>
                                    <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">

                                        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                            <tbody>
                                                <tr>
                                                    <td style="width:64px;">
                                                        <img height="auto" src="https://www.dokterlegal.co.id/assets/img/logo-dark.png" style="border:0;display:block;outline:none;text-decoration:none;width:100%;" width="64" />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </td>
                                </tr>
                            </table>

                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container">    
        <div class="header">
            {{-- <img height="auto" src="https://www.dokterlegal.co.id/assets/img/logo-dark.png" style="border:0;display:block;outline:none;text-decoration:none;width:25%;padding-bottom: 20px" width="64px" /> --}}
            <h1>Payment Proof - Invoice</h1>
            <p>Thank you for your payment!</p>
        </div>

        <div class="invoice-details">
            <h2>Invoice Details</h2>
            <p><strong>Invoice Code:</strong> {{ $data['invoiceCode'] }}</p>
            <p><strong>Invoice Date:</strong> {{ $data['invoiceDate'] }}</p>
            <p><strong>Trx_ID:</strong> {{ $data['trxId'] }}</p>
            <p><strong>Payment Date:</strong> {{ $data['paymentDate'] }}</p>
            <p><strong>Payment Method:</strong> {{ $data['aymentMethod'] }}</p>
        </div>

        <div class="customer-details">
            <h2>Client Information</h2>
            <p><strong>ID:</strong> {{ $data['companyId'] }}</p>
            <p><strong>Company:</strong> {{ $data['companyName'] }}</p>
            <p><strong>Email:</strong> {{ $data['companyEmail'] }}</p>
            <p><strong>Address:</strong> {{ $data['companyAddress'] }}</p>
            <p><strong>Name Of:</strong> {{ $data['nameOf'] }}</p>
            <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
        </div>

        <div class="payment-details">
            <h2>Payment Details</h2>
            <p><strong>From:</strong> {{ $data['from'] }} </p>
            <p><strong>To:</strong> {{ $data['to'] }} </p>
            <table class="table">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th style="text-align: center">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $data['description'] }}</td>
                        <td style="text-align: right">{{ $data['total'] }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="notes">            
                <p><strong>Notes:</strong> {{ $data['notes'] }}</p>
            </div>
            <div class="total">
                {{-- <p style="padding-bottom: 20px;font-weight: bold">Total Paid: Rp 6,200,000</p> --}}
                
                <p style="border-top: 1px solid #e0e0e0;padding-top: 10px;"><strong>Total Payment Trx:</strong> Rp. {{ $data['paymentTrxTotal'] }}</p>
                <p><strong>Total Payment In:</strong> Rp. {{ $data['paymentIn'] }}</p>
                <p><strong>Remaining Payment:</strong> Rp. {{ $data['remainingPayment'] }}</p>
            </div>
        </div>

        <div class="footer">
            <p>Thank you for your business! For any inquiries, please contact us at <a href="https://www.dokterlegal.co.id" target="_blank" rel="noopener noreferrer">www.dokterlegal.co.id</a>.</p>
            <p>Dokter Legal | Cibubur, Cikarang, Surabaya, Bogor - Indonesia</p>
        </div>
    </div>
</body>
</html>