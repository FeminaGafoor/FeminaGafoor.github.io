
(function() {

    if(document.cookie.indexOf('jmsa') === -1){
        var jmsa_cookie = '2.0||cMtyVwUTGz||2023-06-11T11:10:38Z';
        var expires = new Date(1686568238*1000);
        document.cookie = 'jmsa' + "=" + decodeURI(jmsa_cookie) + "; expires=" + expires.toUTCString() + "; secure; SameSite=Lax; path=/";
        document.cookie = 'jmsa_flag' + "=" + 'true' + "; expires=" + expires.toUTCString() + "; secure; SameSite=Lax; path=/";

        if(typeof(window.dataLayer) === 'object' && window.dataLayer.length > 0) {
            var dlReadyPos = window.dataLayer.map(function(e) {
            return e.event;
        }).indexOf("dataLayerReady") || 0;

        if(typeof(window.dataLayer[dlReadyPos]) === 'object' && typeof(window.dataLayer[dlReadyPos].user) === 'object')
            window.dataLayer[dlReadyPos].user.jmsaID = '2.0||cMtyVwUTGz||2023-06-11T11:10:38Z';
        }

        if(window.hasOwnProperty('Jms')) {
            if((Jms.hasOwnProperty('OnWampaComplete')) && (typeof(Jms.OnWampaComplete) === 'function')) {
                Jms.OnWampaComplete({
                    id: jmsa_cookie
                });
            }
        }
    }

})();
