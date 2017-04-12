$(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nom: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Entrez votre nom'
                    }
                }
            },
             prenom: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Entrez votre prenom'
                    }
                }
            },

            societe: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Entrez le nom de votre société'
                    }
                }
            },


            email: {
                validators: {
                    notEmpty: {
                        message: 'Entrez votre email'
                    },
                    emailAddress: {
                        message: 'veuillez vérifier votre email'
                    }
                }
            },
            telephone: {
                validators: {
                    notEmpty: {
                        message: 'Entrez votre numéro de téléphone'
                    },
                    phone: {
                        country: 'FR',
                        message: 'veuillez indiquez un numéro de téléphone valide'
                    }
                }
            },
            
            message: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Veuillez entrer au moins 10 caractères et pas plus de 200'
                    },
                    notEmpty: {
                        message: 'Veuillez fournir une description de votre projet'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow")
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Empêcher la soumission de formulaire
            e.preventDefault();

            // Obtenir l'exemple de formulaire
            var $form = $(e.target);

            // Obtenir l'exemple BootstrapValidator
            var bv = $form.data('bootstrapValidator');

            // Utiliser Ajax pour envoyer des données de formulaire
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});