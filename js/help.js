(function () {
    var options = {
        whatsapp: "+52 12211460750", // WhatsApp number
        email: "joseuriel82@hotmail.com", // Email
        call_to_action: "Soporte", // Call to action
        button_color: "#ffc107", // Color of button
        position: "right", // Position may be 'right' or 'left'
        order: "whatsapp,email", // Order of buttons
    };
    var proto = document.location.protocol,
        host = "whatshelp.io",
        url = proto + "//static." + host;
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url + '/widget-send-button/js/init.js';
    s.onload = function () {
        WhWidgetSendButton.init(host, proto, options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
})();
