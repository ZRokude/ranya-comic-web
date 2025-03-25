// const emailinput = $("#email").value;
// const pass_input = $("#pass").value;
// const cfm_pass = $("#cfnpass").value;
// const btn = $("#button");
// const emailerror = $("#emailError");
// const passwordError = $("#passwordError");

// function check() {
//     const email = emailinput.value.trim;
//     const password = pass_input.value;
//     const confirmpw = cfm_pass.value;

//     if (password !== confirmpw){
//         btn.style.display = "none";
//     }else {
//         btn.style.display = "inline"
//     }

//     const emailcheck = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
//     const emailValid = emailcheck.test(email);
//     emailerror.style.display = emailValid ? "none" : "inline";

//     const passwordCheck = password === confirmpw;
//     passwordError.style.display = passwordCheck || confirmpw === "" ? "none" : "inline";

//     btn.disabled = !(email && password && confirmpw && emailcheck);

// };