pimcore.registerNS("pimcore.plugin.ExtJSExamplesBundle");

pimcore.plugin.ExtJSExamplesBundle = Class.create(pimcore.plugin.admin, {
    getClassName: function () {
        return "pimcore.plugin.ExtJSExamplesBundle";
    },

    initialize: function () {
        pimcore.plugin.broker.registerPlugin(this);
    },

    pimcoreReady: function (params, broker) {
        // alert("ExtJSExamplesBundle ready!");
    }
});

var ExtJSExamplesBundlePlugin = new pimcore.plugin.ExtJSExamplesBundle();
