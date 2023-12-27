<style>
    #timer {
        color: var(--primaryColor);
        font-weight: bold;
        font-size: calc(var(--textJumbo) + var(--textLG)); 
        margin: var(--spaceXMD);
    }
</style>
<script>
    let validation2 = [
        { id: "password", req: true, len: 75 },
        { id: "password_valid", req: true, len: 75 }
    ];
    var val1 = false; 
</script>

<div class="text-center justify-center" style="min-height:50vh;">
    <h4 class="text-primary text-center mb-4">{{ __('messages.set_new_pass') }}</h4><br>

    <div id="token-validation-holder">
        <label for="pin-code" style="font-size:var(--textXMD);">Token</label>
        <div class="pin-code mt-3" id="pin-holder">
            <input type="text" maxlength="1" oninput="validatePin()" autofocus>
            <input type="text" maxlength="1" oninput="validatePin()">
            <input type="text" maxlength="1" oninput="validatePin()">
            <input type="text" maxlength="1" oninput="validatePin()">
            <input type="text" maxlength="1" oninput="validatePin()">
            <input type="text" maxlength="1" oninput="validatePin()">
        </div>
        <div id="token_validate_msg" class="text-danger my-2" style="font-size:13px;"></div>
        <div id="timer">15:00</div>
        <p id="token_msg">{{ __('messages.time_token_validation') }}</p>
        <p>{{ __('messages.dont_receive_email') }} <a class="btn btn-success px-4 py-2 mx-2" style="border-radius:var(--roundedLG);" onclick="postValdRecover(true)" id="regenerate-btn"><i class="fa-solid fa-envelope"></i> Resend Email</a></p>
    </div>
    <div id="success-validation-token"></div>
    <div id="success-validation-msg"></div>

    <div id="new-pass-holder" class="d-none">
        <form class="d-inline" id="form-edit-pass">
            <input hidden name="username" id="final_username">
            <input hidden name="validation_token" id="final_token">
            <div class="form-floating mb-1">
                <input type="password" class="form-control nameInput" id="password" name="password" onchange="validateFormSecond(validation2)" maxlength="75" required>
                <label for="password">Password</label>
                <a id="password_msg" class="text-danger my-2" style="font-size:13px;"></a>
            </div>
            <div class="form-floating my-2">
                <input type="password" class="form-control nameInput" id="password_valid" name="password_valid" oninput="validateFormSecond(validation2)" maxlength="75" required>
                <label for="password">{{ __('messages.pass_valid') }}</label>
                <a id="password_valid_msg" class="text-danger my-2" style="font-size:13px;"></a>
            </div>
        </form>
        <div id="token_validate_msg_2" class="text-danger my-2" style="font-size:13px;"></div>
    </div>
</div>

<form class="d-inline" id="form-validate-token">
    <input hidden name="username" id="validate_username">
    <input hidden name="email" id="validate_email">
    <input hidden name="validation_token" id="validate_token" value="AAA123">
    <input hidden name="type" id="validate_type">
</form>
<span id="btn-next-finish-holder" class="d-flex justify-content-end mt-3">
    <button class="btn-next-steps locked" id="btn-next-finish" onclick="warn('validate')"><i class="fa-solid fa-lock"></i> Next</button>
</span>