// Add your nice, nice JavaScript here
// And minify! Time to check out Grunt or Gulp - what else to you have to do this weekend?

$(document).ready(function () {

    // We just init one global variable, instead a lot
    var app = {
        $navigationMenu: $('#nav-main'),
        $mobileButton: $('#nav-link'),
        $navigationLinks: $('a.nav-item-link'),
        screenSize: 800,
        helperClass: 'desktop-screen',//we will use this, in order to add different styles for desktops and mobiles/tablets
        addClassForDesktops: function() {
            //We can check if user came from mobile browser. But if user just resize window screen, our script don`t work
            //So we just check window size.
            if (window.innerWidth > this.screenSize) {
                $(document.body).addClass(this.helperClass);
            }else{
                $(document.body).removeClass(this.helperClass);
            }
        },
        animationDuration: 500
    };

    //This will work if user have small screen, and when user will just resize screen
    app.addClassForDesktops();
    //resize jquery event
    $(window).resize(function() {
        app.addClassForDesktops();
    });

    //With this trick, hover will work only with desktop menu
    $('.' + app.helperClass).find(app.$navigationMenu).find('li.nav-item').hoverIntent(function () {
        $(this).children('ul').fadeIn(app.animationDuration);
    }, function () {
        $(this).children('ul').fadeOut(app.animationDuration);
    });

    app.$mobileButton.click(function(e) {
        e.preventDefault();
        //If menu visible we hide it, else show
        app.$navigationMenu.toggle();
    });

    app.$navigationLinks.click(function(e) {
        e.preventDefault();

        var $subMenu = $(this).parent().children('ul');
        //If this elements have sub menus, we show it or hide
        if ($subMenu.length > 0) {
            $subMenu.toggle();
        }else{
            window.location = $(this).attr('href');
        }
    });

});