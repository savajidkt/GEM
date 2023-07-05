var step1 = true;
var step2 = false;
var step3 = false;

var FrmCheckoutPreference = function() {

    var FrmCheckoutValidation = function() {
        var FrmCheckoutPreferenceForm = $('#checkout-frm');
        var error4 = $('.error-message', FrmCheckoutPreferenceForm);
        var success4 = $('.error-message', FrmCheckoutPreferenceForm);

        FrmCheckoutPreferenceForm.validate({
            errorElement: 'span',
            errorClass: 'help-block help-block-error',
            focusInvalid: false,
            ignore: "",
            rules: {
                billing_first_name: {
                    required: function() {
                        if (step1) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                },
                billing_last_name: {
                    required: function() {
                        if (step1) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                },
                billing_company: {
                    required: function() {
                        if (step1) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                },
                billing_job_title: {
                    required: function() {
                        if (step1) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                },
                billing_phone: {
                    required: function() {
                        if (step1) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                },
                billing_email: {
                    required: function() {
                        if (step1) {
                            return true;
                        } else {
                            return false;
                        }
                    },
                email: true,
                emailExt: true,
                },
            },
            messages: {
            },
            highlight: function(element) {

                // add a class "has_error" to the element 
                $(element).addClass('has_error');
            },
            unhighlight: function(element) {

                // remove the class "has_error" from the element 
                $(element).removeClass('has_error');
            },
            errorPlacement: function(error, element) {
                if (element.attr("name") == "company_name") {
                    error.insertAfter("#company_name");
                } else if (element.attr("name") == "password") {
                    error.insertAfter(".password-error");
                } else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function(form) {
                alert('this');
                return false;
                //form.submit();
            }
        });
    }

    return {
        //main function to initiate the module
        init: function() {
            FrmCheckoutValidation();
            jQuery.validator.addMethod("emailExt", function(value, element, param) {
                return value.match(/^[a-zA-Z0-9_\.%\+\-]+@[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,}$/);
            }, 'Please enter a valid email address.');
        }
    };
}();
$(document).ready(function() {
    FrmCheckoutPreference.init();

});