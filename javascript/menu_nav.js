class Link {
    static m_menu;
    constructor(name) {
        this.root_id = name;
        Link.m_menu = new Array();
        this.root = document.getElementById(name)
    }
    add(name, type, func) {
        var li = document.createElement('li');
        var link = document.createElement('a');
        link.textContent = name;
        Link.m_menu[name] = func;
        li.className = 'options';
        li.style.display = type;
        link.href='javascript:Application.getApplication().getModule("'+func+'")';
        li.appendChild(link);
        li.appendChild(document.createElement('hr'));
        this.root.appendChild(li);
    }
    add_down(name, type, func) {
        var li = document.createElement('a');
        li.textContent = name;
        Link.m_menu[name] = func;
        li.addEventListener('click', function(ev) {
            Link.m_menu[link.textContent]();
        }, false);
        li.appendChild(document.createElement('hr'));
        this.root.appendChild(li);
    }
}