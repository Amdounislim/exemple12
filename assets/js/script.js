$(document).ready(function(){

    // $.validate.addMethod('strongPassword', function(value, element) {
    //     return ( this.optional(element)
    //         || value.length >= 6
    //         && /\d/.test(value)
    //         && /[a-z]/i.test(value));
    // })

    $('#registerForm').validate({
        rules: {
            first_name:{
                required: true,
                lettersonly: true
            },
            last_name:{
                required: true
            },
            phone:{
                number:true,
                minlength: 8,
                maxlength: 8
            },
            email:{
                required: true,
                email: true
            },
            password:{
                required: true,
                minlength: 8,
                strongPassword: true
            },
            confirm_password:{
                equalTo:"#inputPassword3"
            },
            cgu:{
                required: true
            },
        },
        messages: {
            first_name:{
                required: "Veuillez remplir ce champ",
                lettersonly:"Veuillez saisir que des lettres"
            },
            last_name:{
                required: "Veuillez remplir ce champ"
            },
            phone:{
                minlength: "Veuillez saisir au moins 8 caractères", 
                maxlength: "Veuillez saisir au plus 8 caractères", 
                number:"Veuillez saisir que des chiffres"

            },
            email:{
                required: "Veuillez remplir ce champ",
                email: 'Your email address must be in the format of name@domain.com'
            },
            password:{
                required: "Veuillez remplir ce champ",
                strongPassword: 'Your password must be at least 6 characters long and contain at least one number and one char\'.'
            },
            confirm_password:{
                equalTo:"Le champs n'est pas identique que "
            },
            cgu:{
                required: "Veuillez remplir ce champ"
            },
            
        }
    });
});