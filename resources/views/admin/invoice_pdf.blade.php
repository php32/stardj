<!DOCTYPE doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
                <title>
                    Invoice
                </title>
                <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css" integrity="sha512-HdXbv8lyOND1Ueuy0orIopVhFwlzWycyfSG9YvFR88TgiiMUkSmh/tezmCjv36wtzTJk3QK3hnBiVt6BJBnqUQ==" referrerpolicy="no-referrer" rel="stylesheet"/>
                <link href="{{ asset('img/logo/favicone.png') }}" rel="shortcut icon" type="image/x-icon"/>
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                </link>
            </meta>
        </meta>
    </head>
    <body>
        <div class="container bootstrap snippets bootdeys">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default invoice" id="invoice">
                        <div class="panel-body">
                            <!-- <div class="invoice-ribbon"><div class="ribbon-inner">PAID</div></div> -->
                            <div class="row">
                                <table style="width:100%;font-family: arial, sans-serif;">
                                    <tr>
                                        <td>
                                            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('logo.png'))) }}">
                                        </td>
                                        <td style="text-align:right;padding-right:20px;">
                                            <h3 style="text-align:right;padding-bottom: 0;margin-bottom: 10px;">
                                                INVOICE-{{ $event->id }}
                                            </h3>
                                            <span style="text-align:right;">
                                                14 April 2014
                                            </span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <hr>
                                <table style="font-family: arial, sans-serif;border-collapse: collapse;width: 100%;">
                                    <tr>
                                        <td style="font-size:14px;width: 30%;text-align: left;padding: 8px;">
                                            <p style="font-size:16px;font-weight: bold;">
                                                From : Star Dj Hire
                                            </p>
                                            <p>
                                                350 Rhode Island Street
                                            </p>
                                            <p>
                                                Suite 240, San Francisco
                                            </p>
                                            <p>
                                                California, 94103
                                            </p>
                                            <p>
                                                Phone: 415-767-3600
                                            </p>
                                            <p>
                                                Email: stardjhire@gmail.com
                                            </p>
                                        </td>
                                        <td style="font-size:14px;text-align: left;width: 30%;">
                                            <p style="font-size:16px;font-weight: bold;">
                                                To : {{ $event->contact_name }}
                                            </p>
                                            <p>
                                                Event Name: {{ $event->event_type }}
                                            </p>
                                            <p>
                                                Event Date: {{ $event->event_date }}
                                            </p>
                                            <p>
                                                Event Address: {{ $event->event_address }}
                                            </p>
                                            <p>
                                                Phone: {{ $event->contact_number }}
                                            </p>
                                            <p>
                                                Email: {{ $event->contact_email }}
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                                <table style="font-family: arial, sans-serif;border-collapse: collapse;width: 100%; border: 1px solid #dddddd; margin-top: 20px;">
                                    <tr style="border: 1px solid #dddddd;">
                                        <th style="border-right: 1px solid #dddddd;padding: 10px;">
                                            #
                                        </th>
                                        <th style="border-right: 1px solid #dddddd;padding: 10px;">
                                            Event
                                        </th>
                                        <th style="border-right: 1px solid #dddddd;padding: 10px;">
                                            Package
                                        </th>
                                        <th style="border-right: 1px solid #dddddd;padding: 10px;">
                                            Amount
                                        </th>
                                    </tr>
                                    <tr style="border: 1px solid #dddddd;background: #f9f9f9;">
                                        <td style="text-align:center; border-right: 1px solid #dddddd;padding: 8px;">
                                            1
                                        </td>
                                        <td style="text-align:center;border-right: 1px solid #dddddd;padding: 8px;">
                                            {{ $event->event_type }}
                                        </td>
                                        <td style="text-align:center;border-right: 1px solid #dddddd;padding: 8px;">
                                            {{ $event->package }}
                                        </td>
                                        <td style="text-align:center;border-right: 1px solid #dddddd;padding: 8px;">
                                            {{ $package->amount }}
                                        </td>
                                    </tr>
                                </table>
                                <div style="margin-top: 20px;margin-left: 10px;font-family: arial, sans-serif;">
                                    <p>
                                        THANK YOU!
                                    </p>
                                </div>
                                <table style="width: 100%;float: right;margin-right: 10px;margin-top: -60px;font-family: arial, sans-serif;">
                                    <tr style="text-align:right">
                                        <td>
                                            <p>
                                                Subtotal : ${{ $package->amount }}
                                            </p>
                                            <p>
                                                VAT (10%) : ${{ $package->amount/10 }}
                                            </p>
                                            <p>
                                                Total : ${{ $package->amount+$package->amount/10 }}
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script crossorigin="anonymous" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">
        </script>
        <script type="text/javascript">
        </script>
    </body>
</html>
