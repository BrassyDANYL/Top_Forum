var burgerMenu = document.getElementById('burger-menu');
var overlay = document.getElementById('menu');
burgerMenu.addEventListener('click', function() {
    this.classList.toggle("close");
    overlay.classList.toggle("overlay");
});

$(document).ready(function() {
    
    $('.border').slick();
});

$(document).ready(function() {
    $('.review_slider').slick({
        slidesToShow: 2,
        responsive: [{
            breakpoint: 1171,
            settings: {
                slidesToShow: 1,
                fade: true
            }
        }]
    });
});
$(document).ready(function() {
    $('.clients_slider').slick({
        slidesToShow: 6,
        responsive: [{
                breakpoint: 1215,
                settings: {
                    slidesToShow: 5,
                }
            },
            {
                breakpoint: 972,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 942,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 711,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 411,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
});

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {

        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

function myFunction1() {
    document.getElementById("myDropdown1").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn1')) {

        var dropdowns = document.getElementsByClassName("dropdown1-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

function myFunction2() {
    document.getElementById("myDropdown2").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn2')) {

        var dropdowns = document.getElementsByClassName("dropdown2-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

function myFunction3() {
    document.getElementById("myDropdown3").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn3')) {

        var dropdowns = document.getElementsByClassName("dropdown3-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

function myFunction4() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}

function myFunction5() {
    var popup = document.getElementById("myPopup");
    popup.classList.remove("show");
}

$(".show-more").click(function() {
    $(document).find(".more_service").slideToggle();
    $(".hidden").css("display", "flex");
    $(".show-more").css("display", "none");
})