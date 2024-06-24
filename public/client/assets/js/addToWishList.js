$(function () {
    // localStorage.clear();
    wishlistDetails();
    wishlistPageDetails();

    $(".btn-wishlist").click(function () {
        let isVariable = parseFloat($("#isVariable").val());

        let productId = $(this).attr("cus-product-id");
        let productSku = $(this).attr("cus-product-sku");
        let productName = $(this).attr("cus-product-name");
        let productSlug = $(this).attr("cus-product-slug");
        let cusPrice = $(this).attr("cus-price");
        let cusDiscount = $(this).attr("cus-discount");
        let discountedPrice = parseFloat(cusPrice) - parseFloat(cusDiscount);

        let cusPhoto = $(this).attr("cus-photo");
        let brandName = $(this).attr("cus-brand");
        let categoryName = $(this).attr("cus-category");
        let productColor = $(this).attr("cus-color");
        let productSize = $(this).attr("cus-size");
        let addedDate = $(this).attr("cus-date");
        let addedTime = $(this).attr("cus-time");
        let hasStock = $(this).attr("cus-stock");

        if (hasStock == 1) {
            hasStock = "Available";
        } else {
            hasStock = "Out Of Stock";
        }
        let productMaxQty = parseFloat($("#qty").attr("max"));

        let cusQtyNo = parseFloat($("#qty").val());
        let product = {
            productId: productId,
            productSku: productSku,
            productName: productName,
            productSlug: productSlug,
            cusPrice: cusPrice,
            cusDiscount: cusDiscount,
            discountedPrice: discountedPrice,
            cusPhoto: cusPhoto,
            brandName: brandName,
            categoryName: categoryName,
            productSize: productSize,
            productColor: productColor,
            productMaxQty: productMaxQty,
            cusQty: cusQtyNo,
            addedDate: addedDate,
            addedTime: addedTime,
            hasStock: hasStock,
        };

        let wishlist = [];
        if (localStorage.getItem("wishlist") === null) {
        } else {
            wishlist = JSON.parse(localStorage.getItem("wishlist"));
        }

        let index = checkWishlist(product);

        if (index == -1) {
            addToWishlist(wishlist, product);
        } else {
            updateWishlist(product, index, cusQtyNo);
        }

        wishlistDetails();
    });

    function addToWishlist(wishlist, product) {
        wishlist.push(product);
        localStorage.setItem("wishlist", JSON.stringify(wishlist));
        // alert('Product Successfully added into Wishlist')
        Swal.fire({
            position: "bottom-center",
            icon: "success",
            title: "Product added to Wishlist",
            text: "",
            toast: true,
            iconColor: "green",
            showConfirmButton: false,
            showCloseButton: true,
            timer: 4000,
            timerProgressBar: true,
            background: "#ffffff",
            customClass: {
                popup: "bottom-center-toast",
            },
        });
    }

    function updateWishlist(product, index, cusQtyNo) {
        let wishlist = JSON.parse(localStorage.getItem("wishlist"));

        wishlist[index].cusQty = cusQtyNo;
        localStorage.setItem("wishlist", JSON.stringify(wishlist));

        // wishlist[index].cusQty += cusQtyNo;
        Swal.fire({
            position: "bottom-center",
            icon: "success",
            title: "Wishlist Updated",
            text: "",
            toast: true,
            iconColor: "green",
            showConfirmButton: false,
            showCloseButton: true,
            timer: 4000,
            timerProgressBar: true,
            background: "#ffffff",
            customClass: {
                popup: "bottom-center-toast",
            },
        });

        // alert('Product Already in Wishlist')
    }
    function updateWishlistWithVariable(product, index, cusQtyNo) {
        let wishlist = JSON.parse(localStorage.getItem("wishlist"));
        wishlist[index].cusQty = cusQtyNo;
        localStorage.setItem("wishlist", JSON.stringify(wishlist));
        // wishlist[index].cusQty += cusQtyNo;
        alert("Product Already in Wishlist");
    }

    function wishlistDetails() {
        let totalPrice = 0;
        let totalSubtotal = 0;
        let totalDiscount = 0;
        let withDiscount = 0;
        let wishlistContent = "";

        if (localStorage.getItem("wishlist") === null) {
            $(".wishlist-count").html(0);
        } else {
            let wishlistData = JSON.parse(localStorage.getItem("wishlist"));

            $(".wishlist-count").html(wishlistData.length);
            let wishlistNo = 0;
            wishlistData.forEach(function (data) {
                wishlistContent +=
                    '<div class="product product-wishlist">' +
                    ' <div class="product-detail text-left">' +
                    '     <a href="' +
                    data.productSlug +
                    '" class="product-name">' +
                    data.productName +
                    "</a>" +
                    '     <div class="price-box">' +
                    '         <span class="product-quantity">' +
                    data.cusQty +
                    "</span>" +
                    '         <span class="product-price">Tk ' +
                    Number(data.discountedPrice).toFixed(2) +
                    "</span>" +
                    "     </div>" +
                    " </div>" +
                    ' <figure class="product-media">' +
                    '         <img src="' +
                    data.cusPhoto +
                    '" alt="product photo" style="height: 60px; width: 60px;" ' +
                    " </figure>" +
                    ' <button class="btn btn-link btn-close btn-remove" cus-product-id="' +
                    data.productId +
                    '" wishlist_item_no="' +
                    wishlistNo +
                    '" title="Remove Product" aria-label="button">' +
                    '     <i class="fas fa-times"></i>' +
                    " </button>" +
                    " </div>";

                totalSubtotal += data.cusPrice * data.cusQty;
                totalPrice += data.discountedPrice * data.cusQty;
                totalDiscount += data.cusDiscount * data.cusQty;
                wishlistNo += 1;
            });
        }

        $(".dropdown-wishlist-products").html(wishlistContent);
        $(".header-wishlist-details").html(wishlistContent);
    }

    function wishlistPageDetails() {
        let wishlistContent = "";

        if (localStorage.getItem("wishlist") === null) {
            wishlistContent += "No Product found in Wishlist";
            $(".wishlist-count").html(0);
        } else {
            let wishlistData = JSON.parse(localStorage.getItem("wishlist"));
            $(".wishlist-count").html(wishlistData.length);
            let wishlistNo = 0;
            wishlistData.forEach(function (data) {
                wishlistContent +=
                    "<tr>" +
                    '<td class="product_remove"><a class="ec-com-remove" cus-product-id="' +
                    data.productId +
                    '" wishlist_item_no="' +
                    wishlistNo +
                    '" href="javascript:void(0)" title="Remove From Wishlist List">X</a></td>' +
                    '<td class="product_thumb"><img class="prod-img" src="' +
                    data.cusPhoto +
                    '" alt="product image" width="100" height="100"></td>' +
                    '<td class="product_name" title="' +
                    data.addedTime +
                    '">' +
                    data.addedDate +
                    "</td>" +
                    '<td class="product_name"><a href="' +
                    data.productSlug +
                    '">' +
                    data.productName +
                    "</a></td>" +
                    '<td class="product-price">Tk ' +
                    Number(data.cusPrice).toFixed(2) +
                    "</td>" +
                    // '<td class="product_quantity">' + data.hasStock + '</td>' +
                    '<td class="product_total"><span class="tbl-btn">' +
                    '        <a class="" href="' +
                    data.productSlug +
                    '" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to cart" title="Product Details">' +
                    '            <i class="fa fa-shopping-cart" aria-hidden="true"></i>' +
                    "        </a>" +
                    "</td>" +
                    "</tr>";

                wishlistNo += 1;
            });
        }
        if (localStorage.getItem("wishlist") === null) {
            $(".wishlistDataDiv").hide();
            $(".wishlistEmptyDiv").show();
        } else {
            $(".wishlistDataDiv").show();
            $(".wishlistEmptyDiv").hide();
            $(".wishlist-page-view").html(wishlistContent);
        }
    }

    function checkWishlist(product) {
        let res = -1;
        if (localStorage.getItem("wishlist") === null) {
            return -1;
        } else {
            let isVariable = parseFloat($("#isVariable").val()); // has product variation or not
            let wishlistData = JSON.parse(localStorage.getItem("wishlist"));
            let i;
            for (i = 0; i < wishlistData.length; i++) {
                if (isVariable == 1) {
                    if (
                        wishlistData[i].productId == product.productId &&
                        wishlistData[i].productSize == product.productSize &&
                        wishlistData[i].productColor == product.productColor
                    ) {
                        res = i;
                        break;
                    }
                } else {
                    if (wishlistData[i].productId == product.productId) {
                        res = i;
                        break;
                    }
                }
            }
        }
        return res;
    }

    function checkWishlistItems() {
        if (localStorage.getItem("wishlist") === null) {
            return false;
        } else {
            return true;
        }
    }

    $(document).on("click", ".ec-com-remove", function () {
        let productId = $(this).attr("cus-product-id");
        let wishlistItemNo = $(this).attr("wishlist_item_no");
        let wishlist = JSON.parse(localStorage.getItem("wishlist"));
        if (productId == wishlist[wishlistItemNo].productId) {
            wishlist.splice(wishlistItemNo, 1);
        }
        localStorage.setItem("wishlist", JSON.stringify(wishlist));
        wishlistDetails();
        wishlistPageDetails();
    });

    // $(document).on('click','.btn-clear',function (){
    //     localStorage.clear();
    //     wishlistDetails();
    //     wishlistPageDetails();
    // });
});
