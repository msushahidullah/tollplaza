"use strict";

// REMOVE from wishlist
$(document).on('click', '.removeFrmWish', function () {
    let wc = Number($('#wishcount').text());
    wc = wc > 0 ? wc - 1 : 0;
    $('#wishcount').text(wc);

    let id = $(this).attr('mainid');
    let ajaxremoveurl = $(this).attr('data-remove');
    let url = baseUrl + '/AddToWishList/' + id;

    console.log("[REMOVE WISH] Clicked:", { id, ajaxremoveurl, url });

    $(this).parent().removeClass('active').css({ background: '#0f6cb2' });
    $(this).parent().html(
        '<a mainid="' + id + '" data-add="' + url + '" class="text-white btn addtowish" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="fa fa-heart"></i></a>'
    );

    $('body').append('<div class="preL"><div class="preloader3"></div></div>');

    setTimeout(function () {
        $.ajax({
            type: 'GET',
            url: ajaxremoveurl,
            success: function (response) {
                console.log("[REMOVE WISH] Response:", response);

                if (response === 'deleted') {
                    Swal.fire({
                        title: "Removed",
                        text: 'Product is removed from wishlist',
                        icon: 'success'
                    });
                } else {
                    Swal.fire({
                        title: "Failed",
                        text: 'Failed to remove it from wishlist',
                        icon: 'warning'
                    });
                }
            },
            error: function (xhr, status, error) {
                console.error("[REMOVE WISH] AJAX Error:", { response: xhr.responseText, status, error });
                Swal.fire({
                    title: "Error",
                    text: 'Failed to connect to the server!',
                    icon: 'error'
                });
            }
        });

        $('.preL, .preloader3').fadeOut('fast');
        $('body').attr('scroll', 'yes').css('overflow', 'auto');
    }, 1500);
});


// ADD to wishlist
$(document).on('click', '.addtowish', function () {
    let wc = Number($('#wishcount').text());
    $('#wishcount').text(wc + 1);

    let id = $(this).attr('mainid');
    let ajaxaddurl = $(this).attr('data-add');
    let url = baseUrl + '/removeWishList/' + id;

    console.log("[ADD WISH] Clicked:", { id, ajaxaddurl, url });

    $(this).parent().css({ background: '#fdd922' });
    $(this).parent().html(
        '<a mainid="' + id + '" data-remove="' + url + '" class="color000 btn removeFrmWish" data-toggle="tooltip" data-placement="right" title="Remove From Wishlist"><i class="fa fa-heart"></i></a>'
    );

    $('body').append('<div class="preL"><div class="preloader3"></div></div>');

    setTimeout(function () {
        $.ajax({
            type: 'GET',
            url: ajaxaddurl,
            success: function (response) {
                console.log("[ADD WISH] Response:", response);

                if (response === 'success') {
                    Swal.fire({
                        title: "Added",
                        text: 'Product is added to your wishlist!',
                        icon: 'success'
                    });
                } else {
                    Swal.fire({
                        title: "Oops!",
                        text: 'Product is already in your wishlist!',
                        icon: 'warning'
                    });
                }
            },
            error: function (xhr, status, error) {
                console.error("[ADD WISH] AJAX Error:", { response: xhr.responseText, status, error });
                Swal.fire({
                    title: "Error",
                    text: 'Failed to connect to the server!',
                    icon: 'error'
                });
            }
        });

        $('.preL, .preloader3').fadeOut('fast');
        $('body').attr('scroll', 'yes').css('overflow', 'auto');
    }, 1500);
});