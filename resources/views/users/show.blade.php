<html>
<head>
    <title>TAB Recruitment Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />
</head>
<body>
<div
    class="d-flex flex-column justify-content-center align-items-center col-12"
    style="min-height: 100vh"
>
    <div class="col-8 px-3 mb-4">
        <a href="{{route('users.index')}}" class="btn btn-info"
        >Back to all users</a
        >
    </div>
    <div class="col-8 d-flex flex-row flex-wrap">
        <div class="col-6 p-3">
            <h1>Sagar</h1>
            <p>svb@tabhq.com</p>
            <h5>New transaction</h5>
            <form
                class="col-6"
                method="POST"
                action="#"
            >
                @csrf
                <input type="hidden" name="user_id" value="1" readonly />
                <div class="form-group mb-3">
                    <label class="form-label" for="transaction_type">Type *</label>
                    <select
                        class="form-select"
                        name="type"
                        id="transaction_type"
                        required
                    >
                        <option value="Deposit">Deposit</option>
                        <option value="Transfer">Transfer</option>
                        <option value="Withdraw">Withdraw</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="transaction_amount" class="form-label"
                    >Amount *</label
                    >
                    <div class="input-group">
                        <span class="input-group-text">£</span>
                        <input
                            type="number"
                            value="0"
                            step="0.01"
                            class="form-control"
                            name="amount"
                            id="transaction_amount"
                            required
                        />
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="transaction_to"
                    >Transaction to (required if type is transfer)</label
                    >
                    <select name="to_id" id="transaction_to" class="form-select">
                        <option value=""></option>
                        <option value="2">Mark</option>
                        <option value="3">Kevin</option>
                    </select>
                </div>
                <div class="d-flex flex-row justify-content-end">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
        <div class="col-6 p-3">
            <h2>Recent transactions</h2>
            <div class="alert alert-success">
                <p class="my-0">Transfer: + £2,500</p>
                <small>29-07-2022 10:53</small>
            </div>
            <div class="alert alert-success">
                <p class="my-0">Deposit: + £10,000</p>
                <small>29-07-2022 08:32</small>
            </div>
        </div>
    </div>
</div>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
></script>
</body>
</html>
