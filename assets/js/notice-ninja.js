;(function($){
    $(document).ready(function(){

        $("body").on("click", "#noticeninja .notice-dismiss", function(){
            console.log("It's working from notice ninja");
            setACookie('nn-close', '1', 60);
        });

        function setACookie(cookieName, cookieVakue, cookieExpiry){
            var expiry = new Date();

            expiry.setTime(expiry.getTime() + cookieExpiry * 1000);

            document.cookie = cookieName + "=" + escape(cookieVakue) + "; expires=" + expiry.toUTCString()+"; path=/";
        }

     
        

    })

})(jQuery)