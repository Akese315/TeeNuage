<div id="module">


<link rel="stylesheet" href="css/chat.css"/> 
<link rel="stylesheet" href="css/font-awesome.min.css"/>



    <div id="chat_area" class="chat_area"></div>   
    <form class="chat_form">
        <input class = "send_bar" type="text" id="message_textarea"  placeholder="écris!" autofocus>
        <button onclick="Application.getApplication().getChat().send()" type="button" ><img src = "images/6_social_send_now"></button>
    </form>
    <img src onerror="chat_mod_init();"></img>
  
</div>