    <!--JS-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



    <script>
        function formatAMPM(date) {
            var hours = date.getHours();
            var minutes = date.getMinutes();
            var ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12; // the hour '0' should be '12'
            minutes = minutes < 10 ? '0'+minutes : minutes;
            var strTime = hours + ':' + minutes + ' ' + ampm;
            return strTime;
        }            

        //-- No use time. It is a javaScript effect.
        function insertChat(who, text, time){
            if (time === undefined){
                time = 0;
            }
            var control = "";
            var date = formatAMPM(new Date());
            
            if (who == "me"){
                control = '<li style="width:100%">' +
                                '<div class="msj macro">' +
                                    '<div class="text text-l">' +
                                        '<p>'+ text +'</p>' +
                                        '<p><small>' + date + '</small></p>' +
                                    '</div>' +
                                '</div>' +
                            '</li>';                    
            }else{
                control = '<li style="width:100%;">' +
                                '<div class="msj-rta macro">' +
                                    '<div class="text text-r">' +
                                        '<p>' + text + '</p>' +
                                        '<p><small>' + date + '</small></p>' +
                                    '</div>' +                           
                        '</li>';
            }
            setTimeout(
                function(){                        
                    $("ul").append(control).scrollTop($("ul").prop('scrollHeight'));
                }, time);
            
        }

        function resetChat(){
            $("ul").empty();
        }

        $(".mytext").on("keydown", function(e){
            if (e.which == 13){
                var text = $(this).val();
                if (text !== ""){
                    insertChat("me", text);              
                    $(this).val('');
                }
            }
        });

        $("body > div > div > div:nth-child(2) > span").click(function(){
            $(".mytext").trigger({type: 'keydown', which: 13, keyCode: 13});
        })

        //-- Clear Chat
        resetChat();

        //-- Print Messages
        insertChat("me", "Hello Tom...", 0);  
        insertChat("you", "Hi, Pablo", 1500);
        insertChat("me", "What would you like to talk about today?", 3500);
        insertChat("you", "Tell me a joke",7000);
        insertChat("me", "Spaceman: Computer! Computer! Do we bring battery?!", 9500);
        insertChat("you", "LOL", 12000);

        resetChat();
    </script>
</body>
</html>
