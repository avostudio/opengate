// For version detection, set to min. required Flash Player version, or 0 (or 0.0.0), for no version detection.

            var swfVersionStr = "7.1.0";
            // To use express install, set to playerProductInstall.swf, otherwise the empty string.
            var xiSwfUrlStr = "http://opengate.com.ua/swf/vs_garage.swf";
            var flashvars = {};
            var params = {};
            params.quality = "high";
			params.wmode = "opaque";
            params.bgcolor = "#ffffff";
            params.allowscriptaccess = "sameDomain";
            params.allowfullscreen = "true";
            var attributes = {};
            attributes.id = "intro";
            attributes.name = "intro";
            attributes.align = "middle";
            swfobject.embedSWF(
                "http://opengate.com.ua/swf/vs_garage.swf", "flashContent",
                "1300", "235",
                swfVersionStr, xiSwfUrlStr,
                flashvars, params, attributes);