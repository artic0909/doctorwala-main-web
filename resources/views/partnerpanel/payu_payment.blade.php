    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="{{ $payuUrl }}" method="POST" id="payuForm">
            <input type="hidden" name="key" value="{{ $merchantKey }}">
            <input type="hidden" name="txnid" value="{{ $txnid }}">
            <input type="hidden" name="amount" value="{{ $amount }}">
            <input type="hidden" name="productinfo" value="{{ $productInfo }}">
            <input type="hidden" name="firstname" value="{{ $firstname }}">
            <input type="hidden" name="email" value="{{ $email }}">
            <input type="hidden" name="surl" value="{{ $successUrl }}">
            <input type="hidden" name="furl" value="{{ $failureUrl }}">
            <input type="hidden" name="hash" value="{{ $hash }}">

            <?php
            if (!$hash) { ?>
                <button type="submit" class="btn btn-primary">Proceed to Pay</button>
            <?php } ?>
        </form>
        <script>
            var payuForm = document.forms.payuForm;
            payuForm.submit();
        </script>
    </body>

    </html>