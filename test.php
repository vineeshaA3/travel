<style>
    :root {
        --header-color: #eee;
        --global-color: #333;
        --container-bg: #141313;
        --btn-background: #F2AA4CFF;
        --amount-color: rgb(245, 215, 176);
        --container-box-shadow: 0 10px 15px rgba(20, 20, 20, 0.15);
    }

    html {
        box-sizing: border-box;
    }

    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        color: var(--global-color);
    }

    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: var(--btn-background);
    }

    .container {
        width: 95%;
        max-width: 500px;
        padding: 20px 10px;
        border-radius: 10px;
        background-color: var(--container-bg);
        box-shadow: var(--container-box-shadow);
    }

    .row {
        width: 96%;
        height: 100%;
        margin: 0 auto;
    }

    .colum {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    form {
        width: 100%;
        max-width: 425px;
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    label {
        width: 100%;
        align-self: flex-start;
        font-weight: bolder;
        color: var(--header-color);
    }

    select,
    input[type="text"] {
        display: block;
        width: 100%;
        height: 45px;
        padding: 10px;
        max-width: 425px;
        font-weight: bolder;
        border-radius: 4px;
        margin-bottom: 15px;
        border: 1px solid var(--btn-background);
        box-sizing: border-box;
    }

    .btn {
        border: 0;
        width: 100%;
        height: 45px;
        display: block;
        margin: 0 auto;
        color: #ffff;
        cursor: pointer;
        margin-top: 15px;
        max-width: 425px;
        font-size: 1.1rem;
        font-weight: bold;
        border-radius: 4px;
        letter-spacing: 2.2px;
        background-color: var(--btn-background);
    }

    .btn:hover {
        background-color: var(--amount-color);
    }

    .banner {
        text-transform: capitalize;
        margin-bottom: 30px;
        font-size: 2.5rem;
        text-align: center;
        color: var(--header-color);
    }

    .amount {
        font-weight: bolder;
        color: var(--amount-color);
        text-align: center;
    }

    #currency {
        font-size: 2.5rem;
    }

    #country-code {
        font-size: 1.5rem;
    }

    @media(min-width:520px) {
        body {
            height: 700px;
        }
    }
</style>


<div class="container">
    <div class="row">
        <h1 class="banner">Currency Conveter</h1>
        <div class="colum">
            <form action="" method="post">
                <label for="amount">Amount:
                    <input type="text" id="amount" type="text" placeholder="Amount" required>
                </label>
                <label for="rate">From:
                    <select id="rate">
                        <option value="USD">US Dollar (USD)</option>
                        <option value="MXN">Mexican Peso (MXN)</option>
                        <option value="XOF">Benise CFA (XOF)</option>
                        <option value="INR">Indian Rupee (INR)</option>
                        <option value="CAD">Canadian Dollar (CAD)</option>
                        <option value="HTG">Haitian Gourde (HTG)</option>
                        <option value="XBT">Bitcoin (BTC)</option>
                        <option value="EUR">Cuban Peso (CUP)</option>
                        <option value="GBP">British Pound (BGP)</option>
                        <option value="XAF">Central African CFA (france)</option>
                    </select>
                </label>
                <label for="to">To:
                    <select id="to">
                        <option value="MXN">Mexican Peso (MXN)</option>
                        <option value="USD">US Dollar (USD)</option>
                        <option value="XOF">Benise CFA (XOF)</option>
                        <option value="INR">Indian Rupee (INR)</option>
                        <option value="CAD">Canadian Dollar (CAD)</option>
                        <option value="HTG">Haitian Gourde (HTG)</option>
                        <option value="XBT">Bitcoin (BTC)</option>
                        <option value="EUR">Cuban Peso (CUP)</option>
                        <option value="GBP">British Pound (BGP)</option>
                        <option value="XAF">Central African CFA (france)</option>
                    </select>
                </label>
            </form>
            <!--End form-->
        </div>
        <!--End colum-->
        <button class="btn" type="button">CALCULATE</button>
        <h2 class="amount">
            <span id="currency"></span>
            <span id="total"></span>
            <span id="country-code"></span>
        </h2>
    </div>
    <!--End row-->
</div>
<!--End container-->


<script>
    //global variables
    const form = document.querySelector("form");
    const button = document.querySelector(".btn");
    // Convert amount from one denomination to another.
    const calculateAmount = (rate1, rate2, amount) => {
        let sum = amount * rate2;
        return `${sum.toFixed(2)}`;
    };

    //the displayAmount function for currency calculation
    const displayAmount = event => {
        //prevents the form from submiting without values.
        event.preventDefault();

        // Retrieve values from the form.
        let sum = Number(document.getElementById("amount").value);
        let exchangeRate1 = document.getElementById("rate").value;
        let exchangeRate2 = document.getElementById("to").value;
        // Create variables to update and output values
        let currency = document.getElementById("currency");
        let total = document.getElementById("total");
        let code = document.getElementById("country-code");
        //check if amount is a number
        if (isNaN(sum)) {
            currency.innerHTML = "";
            total.innerHTML = "Input not valid.";
            code.innerHTML = "";
            return;
        } else {
            let rate1;
            let rate2;

            switch (exchangeRate1) {
                case "MXN":
                    rate1 = 18.8495;
                    break;
                case "USD":
                    rate1 = 0.052923;
                    break;
                case "HTG":
                    rate1 = 69.8086;
                    break;
                case "INR":
                    rate1 = 6.69;
                    break;
                case "CUP":
                    rate1 = 1.0;
                    break;
                case "CAD":
                    rate1 = 1.302;
                    break;
                case "EUR":
                    rate1 = 0.8649;
                    break;
                case "XBT":
                    rate1 = 0.000161245;
                    break;
                case "GBP":
                    rate1 = 0.760151;
                    break;
                case "XOF":
                    rate1 = 567.206;
                    break;
                case "XAF":
                    rate1 = 544.02;
                    break;
                default:
                    return;
            }

            switch (exchangeRate2) {
                case "MXN":
                    rate2 = 18.8495;
                    break;
                case "USD":
                    rate2 = 0.052923;
                    break;
                case "HTG":
                    rate2 = 69.8086;
                    break;
                case "INR":
                    rate2 = 6.69;
                    break;
                case "CUP":
                    rate2 = 1.0;
                    break;
                case "CAD":
                    rate2 = 1.302;
                    break;
                case "EUR":
                    rate2 = 0.8649;
                    break;
                case "XBT":
                    rate2 = 0.000161245;
                    break;
                case "GBP":
                    rate2 = 0.760151;
                    break;
                case "XOF":
                    rate2 = 567.206;
                    break;
                case "XAF":
                    rate2 = 544.02;
                    break;
                default:
                    return;
            }

            currency.innerHTML = "$";
            total.innerHTML = calculateAmount(rate1, rate2, sum);
            code.innerHTML = exchangeRate2;
        }
    };


    // Listen for form sumbition.
    form.addEventListener("submit", displayAmount);
    button.addEventListener("click", displayAmount);
</script>