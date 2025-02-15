const newPassword = document.querySelector("#newPassword");
const confirmPassword = document.querySelector("#confirmNewPassword");

newPassword.addEventListener("keyup", function() {
    verificationPassword();
})

confirmPassword.addEventListener("keyup", function() {
    verificationPassword();
})

function verificationPassword() {
    // Vérification si le nouveau mdp n'est pas identique à la confirmation du mdp
    if(newPassword.value === confirmPassword.value) {
        // Désactivation du button de validation
        document.querySelector("#btnValidation").disabled = false;
        // Ajout du div contenant l'id errorConfirmPassword en ajoutant la class d-none
        document.querySelector("#errorConfirmPassword").classList.add("d-none");
    } else {
        // Activiation du button de validation
        document.querySelector("#btnValidation").disabled = true;
        // Retrait du div contenant l'id errorConfirmPassword en retirant la class d-none
        document.querySelector("#errorConfirmPassword").classList.remove("d-none");
    }
}

