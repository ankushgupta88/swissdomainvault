$(document).ready(function () {
    //Validation home search form
    $("#home_header_search").validate({
        rules: {
            home_search: {
                required: true
            }
        },
        messages: {
            home_search: "Please enter domain name.",
        }
    }); 

    //Code for home domain search
    $(document).on("click",".home_domain_search",function(e) { 
        e.preventDefault(); 
        if ($('#home_header_search').valid()) {
            var keyword = jQuery("#home_search").val();
            
            $("#searchDomainModel").modal('show');
            $(this).prop('disabled', true);

            setTimeout(function () {
                $("#searchDomainModel").modal('hide');
                window.location.href = base_url + "/cart?a=add&domain=register&keyword="+keyword;
            }, 3000);
        } 
    });

    //Code for home domain transfer
    $(document).on("click",".home_domain_transfer",function(e) { 
        e.preventDefault();
        if ($('#home_header_search').valid()) {
            var keyword = jQuery("#home_search").val();
          
            $("#searchDomainModel").modal('show');
            $(this).prop('disabled', true);

            setTimeout(function () {
                $("#searchDomainModel").modal('hide');
                window.location.href = base_url + "/cart?a=add&domain=transfer&keyword="+keyword; 
            }, 3000);
        }
    });
    
    //Validation home search form
    $("#domain_search").validate({
        rules: {
            domain_name: {
                required: true
            }
        },
        messages: {
            domain_name: "Please enter domain name.",
        }
    }); 

    //Code for domain search
     setTimeout(function() {
        $(".domain_submit" ).trigger("click");
    },10);
    $('#domain_search').submit(function(e) {
        e.preventDefault();
        if ($('#domain_search').valid()) {
            
            var _token = $("input[name='_token']").val();
           
           //domain ajax request
            $.ajax({
                type: "POST",
                url: base_url + "/search-domain-result",
                headers: { 'X-CSRF-TOKEN': _token },
                data: $("#domain_search").serialize()+"&type=domain", 
                beforeSend: function () {
                    $(".domain_submit").attr("disabled", true);
                    $('.search_domain_info').hide();
                    $('.domain_search_default').show();
                },
                success: function (response) {
                    $('.domain_search_responce').html(response);
                    $('.domain_search_default').hide();
                    //$(".domain_submit").attr("disabled", false);
                }
            });
            //spotlight ajax request
            $.ajax({
                type: "POST",
                url: base_url + "/search-domain-result",
                headers: { 'X-CSRF-TOKEN': _token },
                data: $("#domain_search").serialize()+"&type=spotlight", 
                beforeSend: function () {
                    $(".domain_submit").attr("disabled", true);
                    $('.search_spotlight_info').hide();
                    $('.spotlight_search_default').show();
                },
                success: function (response) {
                    $('.spotlight_search_responce').html(response);
                    $('.spotlight_search_default').hide();
                    //$(".domain_submit").attr("disabled", false);
                }
            });
            //suggestions ajax
            $.ajax({
                type: "POST",
                url: base_url + "/search-domain-result",
                headers: { 'X-CSRF-TOKEN': _token },
                data: $("#domain_search").serialize()+"&type=suggestions", 
                beforeSend: function () {
                    $(".domain_submit").attr("disabled", true);
                    $('.suggestion_search_info').hide();
                    $('.suggestion_search_default').show();
                },
                success: function (response) {
                    $('.suggestion_search_responce').html(response);
                    $('.suggestion_search_default').hide();
                    $(".domain_submit").attr("disabled", false);
                } 
            });
            return false;
        } 
    });
    
    //Code for choose product 
    $(document).on('click', '.choose_domain_option', function () {
        var choose_option = $(this).attr("data-choose_option");
        
        $('.choose_domain_option.active').removeClass('active');
        $(this).addClass('active');
        
        //$('.choose_domain_option').next().prop('checked', false); 
        //$('.choose_domain_option').next().attr('checked', false);
        
       // $('.choose_domain_option.active').next().addAttr("checked", true);
        
        if(choose_option == "alreay_configure"){
            $(".register_domain").hide();
            $(".existing_domain").hide();
            $(".register_another_domain").hide();
            $(".domain_register_conf").hide();
            $(".domain_transfer_conf").hide();
            $(".domain_my_existing_conf").hide();
            $(".already_cart_domain").show(); 
        } else if(choose_option == "register"){
            $(".existing_domain").hide();
            $(".register_another_domain").hide();
            $(".already_cart_domain").hide();
            $(".domain_already_conf").hide();
            $(".domain_transfer_conf").hide();
            $(".domain_my_existing_conf").hide();
            $(".register_domain").show();
        }else if(choose_option == "transfer"){
            $(".register_domain").hide();
            $(".existing_domain").hide();
            $(".already_cart_domain").hide();
            $(".domain_already_conf").hide();
            $(".domain_register_conf").hide();
            $(".domain_my_existing_conf").hide();
            $(".register_another_domain").show();
        } else if(choose_option == "existing"){
            $(".register_another_domain").hide();
            $(".register_domain").hide();
            $(".already_cart_domain").hide();
            $(".domain_already_conf").hide();
            $(".domain_register_conf").hide();
            $(".domain_transfer_conf").hide();
            $(".existing_domain").show();
        } /*else {
            $(".existing_domain").hide();
            $(".register_another_domain").hide();
            $(".already_cart_domain").hide();
            $(".domain_already_conf").hide();
            $(".register_domain").show();
        }*/
    });
    
    
    //Code for add to cart domain
    $(document).on('click', '.btn_add_to_cart', function () {
        //Check if class checkout is exit or not
        if($(this).hasClass("checkout")) {
            window.location = base_url+"/cart?a=confdomains";
        } 
          
        var domain_name = $(this).attr("data-domain_name");
        var data_whois = $(this).attr("data-whois");
        
        $(this).addClass('checkout');
        $(this).find("span.to-add").hide();
        $(this).find("span.added").show();
        $(this).attr('disabled', true);
                        
        $.ajax({
            url : base_url+"/add-to-cart",
            type : 'GET',
            data: {
                domain_name: domain_name, 
                data_whois: data_whois,
            },
            beforeSend: function() {
                //$(".btn_add_to_cart").attr('disabled', true);
            },
            success : function (response) {
                $(".btn_add_to_cart").attr('disabled', false);
                $("#cartItemCount").html(response)
                //alert(response);
            } 
       });
       
    });
    
    
    //Validation config Use a domain already in my shopping cart 
    $("#already_domain_config").validate({
        rules: {
            domain_name: {
                required: true
            }
        },
        messages: {
            domain_name: "Please select domain name.",
        }
    }); 

    $('#already_domain_config').submit(function(e) {
        e.preventDefault();
        if ($('#already_domain_config').valid()) {
            var _token = $("input[name='_token']").val();
            $('.domain_already_conf').show();
           //domain ajax request
            $.ajax({
                type: "POST",
                url: base_url + "/domain-already-configure",
                headers: { 'X-CSRF-TOKEN': _token },
                data: $("#already_domain_config").serialize(), 
                beforeSend: function () {
                    $(".already_domain_config_submit").attr("disabled", true);
                    $('.search_domain_info').hide();
                    $('.domain_already_conf_default').show();
                },
                success: function (response) {
                    $('.domain_already_conf_responce').html(response);
                    $('.domain_already_conf_default').hide();
                    $(".already_domain_config_submit").attr("disabled", false);
                }
            });
        } 
    });
    
    //Validation config Register a new domain
    $("#config_domain_search").validate({
        rules: {
            domain_name: {
                required: true
            }
        },
        messages: {
            domain_name: "Please enter domain name.",
        }
    }); 

    $('#config_domain_search').submit(function(e) {
        e.preventDefault();
        if ($('#config_domain_search').valid()) {
            var _token = $("input[name='_token']").val();
            $('.domain_register_conf').show();
           //domain ajax request
            $.ajax({
                type: "POST",
                url: base_url + "/search-config-domain-result",
                headers: { 'X-CSRF-TOKEN': _token },
                data: $("#config_domain_search").serialize()+"&type=domain", 
                beforeSend: function () {
                    $(".config_domain_submit").attr("disabled", true);
                    $('.search_domain_info').hide();
                    $('.domain_search_default').show();
                },
                success: function (response) {
                    $('.domain_search_responce').html(response);
                    $('.domain_search_default').hide();
                }
            });
            //spotlight ajax request
           $.ajax({
                type: "POST",
                url: base_url + "/search-config-domain-result",
                headers: { 'X-CSRF-TOKEN': _token },
                data: $("#config_domain_search").serialize()+"&type=spotlight", 
                beforeSend: function () {
                    $('.search_spotlight_info').hide();
                    $('.spotlight_search_default').show();
                     $(".config_domain_submit").attr("disabled", true);
                },
                success: function (response) {
                    $('.spotlight_search_responce').html(response);
                    $('.spotlight_search_default').hide();
                }
            });
            //suggestions ajax
            $.ajax({
                type: "POST",
                url: base_url + "/search-config-domain-result",
                headers: { 'X-CSRF-TOKEN': _token },
                data: $("#config_domain_search").serialize()+"&type=suggestions", 
                beforeSend: function () {
                    $(".config_domain_submit").attr("disabled", true);
                    $('.suggestion_search_info').hide();
                    $('.suggestion_search_default').show();
                },
                success: function (response) {
                    $('.suggestion_search_responce').html(response);
                    $('.suggestion_search_default').hide();
                    $(".config_domain_submit").attr("disabled", false);
                }
            });
            return false;
        } 
    });
    
    //Validation config Transfer your domain from another registrar
    $("#config_domain_transfer").validate({
        rules: {
            domain_name: {
                required: true
            }
        },
        messages: {
            domain_name: "Please enter domain name.",
        }
    }); 

    $('#config_domain_transfer').submit(function(e) {
        e.preventDefault();
        if ($('#config_domain_transfer').valid()) {
            var _token = $("input[name='_token']").val();
            $('.domain_transfer_conf').show();
           //domain ajax request
            $.ajax({
                type: "POST",
                url: base_url + "/domain-transfer-configure",
                headers: { 'X-CSRF-TOKEN': _token },
                data: $("#config_domain_transfer").serialize(), 
                beforeSend: function () {
                    $(".domain_transfer_config_submit").attr("disabled", true);
                    $('.search_domain_info').hide();
                    $('.domain_transfer_conf_default').show();
                },
                success: function (response) {
                    $('.domain_transfer_conf_responce').html(response);
                    $('.domain_transfer_conf_default').hide();
                    $(".domain_transfer_config_submit").attr("disabled", false);
                }
            });
        } 
    });
    
    //Validation config my existing domain and update my nameservers
    $("#my_existing_domain_config").validate({
        rules: {
            domain_name: {
                required: true
            },
            domain_type: {
                required: true
            }
        },
        messages: {
            domain_name: "Please enter domain name.",
            domain_type: "Please enter domain type.",
        }
    }); 

    $('#my_existing_domain_config').submit(function(e) {
        e.preventDefault();
        if ($('#my_existing_domain_config').valid()) {
            var _token = $("input[name='_token']").val();
            $('.domain_my_existing_conf').show();
           //domain ajax request
            $.ajax({ 
                type: "POST",
                url: base_url + "/my-existing-domain-configure",
                headers: { 'X-CSRF-TOKEN': _token },
                data: $("#my_existing_domain_config").serialize(), 
                beforeSend: function () {
                    $(".my_existing_config_submit").attr("disabled", true);
                    $('.my_existing_conf_default').show();
                },
                success: function (response) {
                    $('.my_existing_conf_responce').html(response);
                    $('.my_existing_conf_default').hide();
                    $(".my_existing_config_submit").attr("disabled", false);
                }
            });
        } 
    });
    
    //Validation adding hosting in cart
    $("#submit_hositng_cart").validate({
        rules: {
            p_service_id: {
                required: true
            },
        },
        messages: {
            p_service_id: "Please enter service id.",
        }
    }); 

    $('#submit_hositng_cart').submit(function(e) {
        e.preventDefault();
        if ($('#submit_hositng_cart').valid()) {
            var _token = $("input[name='_token']").val();
           //domain ajax request
            $.ajax({  
                type: "POST",
                url: base_url + "/submit-hosting-cart",
                headers: { 'X-CSRF-TOKEN': _token },
                data: $("#submit_hositng_cart").serialize(), 
                beforeSend: function () {
                    $(".submit_button").attr("disabled", true);
                },
                success: function (response) {
                    $('.hosting_cart_responce').html(response);
                    $(".submit_button").attr("disabled", false);
                }
            });
        } 
    });
    
    //Code for add domain addon add_addon_cart
    $(document).on("click",".add_addon_cart",function(e) { 
        e.preventDefault();  
        
        //$(this).find(".cart_checkbox_val").attr('data-domain_name');
       
        $(this).removeClass("add_addon_cart");
        $(this).addClass("remove_addon_cart");
        $(this).find(".cart_checkbox_val").prop('checked', true);
    
        $(this).find(".addon_cart").removeClass("bg-orange");
        $(this).find(".addon_cart").addClass("bg-green");
        $(this).find(".addon_cart_text").html("<i class='fa fa-shopping-cart me-2'></i>Add to Cart (Remove)");
    });
    
    //Code for remove domain addon remove_addon_cart
    $(document).on("click",".remove_addon_cart",function(e) { 
        e.preventDefault();  
        
        //$(this).find(".cart_checkbox_val").attr('data-domain_name');
        
        $(this).removeClass("remove_addon_cart");
        $(this).addClass("add_addon_cart");
        $(this).find(".cart_checkbox_val").prop('checked', false);
    
        $(this).find(".addon_cart").removeClass("bg-green");
        $(this).find(".addon_cart").addClass("bg-orange");
        $(this).find(".addon_cart_text").html("<i class='fa fa-plus me-2'></i>Add to Cart");
           
    });
    
    //Validation submit checkout
    $("#submit_checkout").validate({
        rules: {
            first_name: {
                required: true
            },
            last_name: {
                required: true
            },
            email: {
                required: true
            },
            password: {
                required: true
            },
            confirm_password: {
                required: true
            }, 
            card_number: {
                required: true
            }, 
            exp_month: {
                required: true,
                minlength: 5,
            }, 
            cvc_number: {
                required: true
            }, 
            term_condition: {
                required: true
            },
        },
        messages: {
            //email: "Please enter email.",
        }
    }); 
    $('#submit_checkout').submit(function(e) {
        e.preventDefault();
        if ($('#submit_checkout').valid()) {
            var _token = $("input[name='_token']").val();
           //ajax request
            $.ajax({  
                type: "POST",
                url: base_url + "/submit-checkout",
                headers: { 'X-CSRF-TOKEN': _token },
                data: $("#submit_checkout").serialize(), 
                beforeSend: function () {
                    $(".submit_button").attr("disabled", true);
                },
                success: function (response) {
                    $('.checkout_responce').html(response);
                    $(".submit_button").attr("disabled", false);
                    setTimeout(function () {
                        $(".unsuccess-msg").fadeOut('slow');
                        $(".success-msg").fadeOut('slow');
                    }, 3000);
                }
            });
        } 
    });
});


