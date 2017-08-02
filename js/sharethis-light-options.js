$(document).ready(function()

    {

     stLight.options({publisher: "ae6cc5dd-901d-4e2c-8cfc-636f5126d7e3", doNotHash: false, doNotCopy: false, hashAddressBar: false});
     

     var options={ "publisher": "ae6cc5dd-901d-4e2c-8cfc-636f5126d7e3", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "linkedin", "evernote", "flipboard", "email", "sharethis"]}};
     var st_hover_widget = new sharethis.widgets.hoverbuttons(options);

    });


