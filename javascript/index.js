class Application {

    static _application = null;

    constructor() {
        this._my_timer = null;
        this._my_user = null;
        this._my_chat = null;
        this._my_forum = null;
        this._my_container = document.getElementById("myContainer");
        this._my_debug = document.getElementById("debug");
    }
    setTimer(func, time) {
        if (this._my_timer != null) {
            clearInterval(this._my_timer);
        }
        this._my_timer = setInterval(func, time);
    }
    static getApplication() {
        if (Application._application == null)
            Application._application = new Application();
        return Application._application;
    }
    is_forum() {
        return (this._my_forum != null);
    }
    getUser() {
        return this._my_user;
    }
    setUser(user) {
        this._my_user = user;
    }
    getForum() {
        return this._my_forum;
    }
    setForum(forum) {
        this._my_forum = forum;
    }
    getChat() {
        return this._my_chat;
    }
    setChat(chat) {
        this._my_chat = chat;
    }
    copyDebug(data) {
        var paragraphe = document.createElement("div"); // Create a new paragraphe Tag
        paragraphe.innerHTML = data;
        //        this._my_debug.appendChild(paragraphe);
        this._my_debug.innerHTML = data;
    }
    getModule(name) {
        this.removeModule();
        var current_js = document.getElementById("id_" + name);
        if (current_js == null) {

            var myScript = document.createElement("script");
            myScript.setAttribute("type", "text/javascript");
            myScript.setAttribute("src", "javascript/" + name + ".js");
            myScript.setAttribute("id", "id_" + name);
            document.getElementsByTagName("head")[0].appendChild(myScript);
        }
        $.when($.ready).then(function() {
            var mydata = 'Parameters={"module": "../modules/' + name + '.php"}';
            var jqxhr = $.ajax({
                    url: "processes/index_module.php",
                    context: document.body,
                    data: mydata,
                    datatype: "text",
                    method: 'POST',
                })
                .done(function(json_response, status) {
                    //
                    if (json_response != 'false') {
                        try {
                            var response = JSON.parse(json_response);
                            if (response.status) {
                                Application.getApplication()._my_container.innerHTML = response.value;
                            }
                        } catch (error) {
                            Application.getApplication().copyDebug(json_response + error);
                        }
                    } else {
                        console.log(status);
                    }

                })
                .fail(function() {})
                .always(function() {});
        });
    }

    removeModule() {
        if (this._my_timer != null) {
            clearInterval(this._my_timer);
            this._my_timer = null;
        }
        var current_module = document.getElementById("module");
        if (current_module != null) {
            this._my_container.removeChild(current_module);
        }
    }
}