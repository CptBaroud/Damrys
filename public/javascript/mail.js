let sendButton = document.getElementById('buttonContactSend');


sendButton.addEventListener('click', function (e) {
    $("#contact_form").validate({
        rules: {
            author: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                minlength: 2
            },
            phone: {
                required: true,
                minlength: 2
            },
            title: {
                required: true,
                minlength: 2
            },
            content: {
                required: true,
                minlength: 2
            },
        },
        messages: {
            author: {
                required: "*Veuillez saisir un Nom.",
                minlength: "Veuillez saisir au moins 2 caractères."
            },
            email: {
                required: "*Veuillez saisir un mail.",
                minlength: "Veuillez saisir au moins 2 caractères."
            },
            phone: {
                required: "*Veuillez saisir un numéro de téléphone.",
                minlength: "Veuillez saisir au moins 2 caractères."
            },
            title: {
                required: "*Veuillez saisir un titre",
                minlength: "Veuillez saisir au moins 2 caractères."
            },
            content: {
                required: "*Veuillez saisir un message",
                minlength: "Veuillez saisir au moins 2 caractères."
            },
        },
        errorElement: 'div',
        errorPlacement: function (error, element) {
            const placement = $(element).data('error');
            if (placement) {
                $(placement).append(error);
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function () {
            send();
        }
    });
});


function send() {
    const template_params = {
        "type": document.getElementById('contact_type').value,
        "name": document.getElementById('contact_name').value,
        "message": document.getElementById('contact_message').value,
        "mail": document.getElementById('contact_mail').value,
        "phone": document.getElementById('contact_phone').value,
    };

    let service_id = "default_service";
    let template_id = "damrys";
    emailjs.send(service_id, template_id, template_params).then(r => alert('Votre message a été envoyé avec succès'));
}
