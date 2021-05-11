@php
    $botimg = 'https://static.hsappstatic.net/bots-ui-app/ex/bot-avatar.jpg';
    $botname = 'HubBot';
    $date = '1mo. ago';
    $ended = 'Your chat has ended.';
    $conversations = 'Conversations';
    $chathelp = "Want to chat about HubSpot? I'm here to help you find your way";
@endphp


<div class="chatbot-off-container">

    <div class="assistant-off">
        <div class="top">
            <span>{{$conversations}}</span>
            <i class="fas fa-pen"></i>
        </div>

        <div class="bottom">
            <div class="chat-container">
                <div class="left">
                    <img src="{{$botimg}}" alt="">
                </div>
                <div class="right">
                    <div class="right-up">
                        <span>{{$botname}}</span>
                        <span>{{$date}}</span>
                    </div>
                    <div class="right-bottom">
                        {{$ended}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="assistant-on">
        <div class="top">
            <img src="{{$botimg}}" alt="">
            <span class="close material-icons">
                close
            </span>
        </div>
        <div class="bottom">
            <span>
                <i class="fas fa-hand-spock"></i>
                {{$chathelp}}
            </span>
        </div>
    </div>

    <div class="chatbot">
        <i class="far fa-comments"></i>
    </div>

    <div class="chatbot-two">
        <span class="closetwo material-icons">
            close
        </span>
    </div>

</div>
