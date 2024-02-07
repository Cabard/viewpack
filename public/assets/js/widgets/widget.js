const NetBot = new function(){
    class Chat {
        constructor(instance, selector, options) {
            this.apiInstance = instance;
            this.domElement = document.querySelector(selector);
            this.options = {...this.defineProps(), ...options};
        }

        defineProps() {
            return {
            }
        }

        init() {
            if (this.domElement) {
                return null;
            }
        }
    }

    class Api {
        initChat(selector, options = {})
        {
            const widget = new NetBot.Chat(this, selector, options)
            widget.init();
            return widget;
        }

        runInitCallbacks()
        {
            let NetbotApiInitCallbacks = window.NetbotApiInitCallbacks;
            if (NetbotApiInitCallbacks && NetbotApiInitCallbacks.length) {
                setTimeout(function () {
                    let callback;
                    while (callback = NetbotApiInitCallbacks.shift()) {
                        try {
                            callback();
                        } catch (e) {
                            console.error(e);
                        }
                    }
                }, 0);
            }
        }
    }

    //экспорт пространства имен
    return {Chat: Chat, Api: Api};
};

if (typeof window['NetBot'] === 'undefined') {
    window.NetBotApi = new NetBot.Api();
    window.NetBotApi.runInitCallbacks();
}
