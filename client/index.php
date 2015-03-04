<?php 
include( "config.php"); 

?>
    <!DOCTYPE HTML>
    <!--[if lt IE 7]>
        <html class="lt-ie10 lt-ie9 lt-ie8 lt-ie7">
        <![endif]-->
        <!--[if IE 7]>
            <html class="lt-ie10 lt-ie9 lt-ie8">
            <![endif]-->
            <!--[if IE 8]>
                <html class="lt-ie10 lt-ie9">
                <![endif]-->
                <!--[if IE 9]>
                    <html class="lt-ie10">
                    <![endif]-->
                    <!--[if gt IE 9]>
                        <!-->
                        <html manifest="/static/manifest.appcache" itemscope itemtype="http://schema.org/Product">
                        <!--<![endif]-->
                        
                        <head>
                            <meta charset="utf-8">
                            <title>
                                DragonBound - Emulator
                            </title>
                            <meta name='description' content='Play DragonBound now, a Free Multiplayer Online HTML5 Game. Play with or meet new friends anywhere, no downloads. Collect items, new game modes, and challenges.'/>
                            <meta name='keywords' content='Play, DragonBound, now, Free, Multiplayer, Online, HTML5, Game, friends, anywhere, no, downloads, items, modes, challenges, 2d shooter, advanced, vs, ai, computer, players, bbtank, browser, custom, avatars, ui, theme, interface, gunbound, cash, gold, fast, gp, exp, f2p, free to play, free offers, free currency, aimbot, game, dragonboune.net, games, NO cheaters, NO download, NO hackers, NO installation, private source, public game, shooter, turn based, unique, worm, worms, zero exploits, america, peru, gitzwc, gitz, force, history, zero'/>
                            <meta property="og:type" content="game"/>
                            <meta property="og:title" content="DragonBound - Next generation HTML5 online massive multi-player game!"/>
                            <meta property="og:url" content="http://<?php echo $url_web;?>"/>
                            <meta property="og:description" content="Play with or against your friends from your browser anywhere for free. Shop for items to make you stronger. Unlock hidden characters, new game modes, and challenges. Meet new friends. Single player option too."/>
                            <meta property="og:image" content="http://<?php echo $url_web;?>/static/images/icon2_200x200.png"/>
                            <meta property="og:site_name" content="<?php echo $url_web;?>"/>
                            <meta property="fb:app_id" content="<?php echo $fb_api;?>"/>
                            <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
                            <meta name="apple-mobile-web-app-capable" content="yes">
                            <meta name="apple-mobile-web-app-status-bar-style" content="black">
                            <link rel="apple-touch-icon" href="/static/images/icon.png">
                            <link rel="apple-touch-startup-image" href="/static/images/splash2.png">
                            <meta name="twitter:widgets:csp" content="on">
                            <meta itemprop="name" content="DragonBound">
                            <meta itemprop="description" content="Play with or against your friends from your browser anywhere for free. Shop for items to make you stronger. Unlock hidden characters, new game modes, and challenges. Meet new friends. Single player option too.">
                            <meta itemprop="image" content="http://<?php echo $url_web;?>/static/images/icon2_200x200.png">
                            <link rel="stylesheet" href="/static/css/jquery-ui-1.10.3.min.css"/>
                            <script src="/static/js/jquery-2.0.3.min.js">
                            </script>
                            <script src="/static/js/jquery-ui-1.10.3.min.js">
                            </script>
                            <script src="/static/js/avatars.js?<?php echo $ver;?>">
                            </script>
                            <script src="/static/js/game.js?<?php echo $ver;?>">
                            </script>
                            <link rel="stylesheet" href="/static/css/DragonBound.min.css?137"/>
                            <style id="DragonTheme">
                            </style>
                        </head>
                        
                        <body>
                            <script type="text/javascript">
                                //<![CDATA[try{(function(a){var b="http://",c="dbcloneserver.com",d="/cdn-cgi/cl/",e="img.gif",f=new a;f.src=[b,c,d,e].join("")})(Image)}catch(e){}//]]>
                                
                            </script>
                            <h1 class="hide">
                                <b>
                                    DragonBound - Next generation HTML5 online massive multi-player game!
                                    <br>
                                    Play DragonBound now, a Free Multiplayer Online HTML5 Game. Play with or meet new friends anywhere, no downloads. Collect items, new game modes, and challenges.
                                    <br>
                                    Play with or against your friends from your browser anywhere for free. Shop for items to make you stronger. Unlock hidden characters, new game modes, and challenges. Meet new friends. Single player option
                                    too.
                                    <br>
                                    Play, DragonBound, now, Free, Multiplayer, Online, HTML5, Game, friends, anywhere, no, downloads, items, modes, challenges, 2d shooter, advanced, vs, ai, computer, players, bbtank, browser, custom, avatars,
                                    ui, theme, interface, gunbound, cash, gold, fast, gp, exp, f2p, free to play, free offers, free currency, aimbot, game, dragonboune.net, games, NO cheaters, NO download, NO hackers, NO installation, private
                                    source, public game, shooter, turn based, unique, worm, worms, zero exploits, america, peru, gitzwc, gitz, force, history, zero
                                </b>
                            </h1>
                            <div id="updater">
                            </div>
                            <div id="FullScreenButton">
                            </div>
                            <div id="fb-root">
                            </div>
                            <div id="ranking_panel">
                                <div id="ranking_title" class="blackShadow">
                                    DragonBound
                                </div>
                                <div id="ranking_title2">
                                </div>
                                <div id="ranking_btns">
                                    <div id="ranking_btn_type1" class="ranking_btn NoSelect">
                                    </div>
                                    <div id="ranking_btn_type3" class="ranking_btn NoSelect">
                                    </div>
                                    <div id="ranking_btn_type2" class="ranking_btn NoSelect">
                                    </div>
                                    <div id="ranking_btn_ranks" class="ranking_btn NoSelect">
                                    </div>
                                    <div id="ranking_btn_howto" class="ranking_btn NoSelect">
                                    </div>
                                    <div id="ranking_btn_contact" class="ranking_btn NoSelect">
                                    </div>
                                </div>
                                <div id="ranking_data">
                                    <div id="ranking_btn_terms" class="ranking_btn NoSelect">
                                    </div>
                                    <div id="ranking_btn_privacy" class="ranking_btn NoSelect">
                                    </div>
                                    <div class="fb-facepile" data-href="http://dbcloneserver.com" data-width="232" data-height="1000" data-max-rows="10" data-colorscheme="dark" data-size="large">
                                    </div>
                                    <div class="fb-facepile" data-app-id="<?php echo $fb_api;?>" data-width="232" data-height="1000" data-max-rows="15" data-colorscheme="dark" data-size="large">
                                    </div>
                                </div>
                            </div>
                            <div id="ShareWindow">
                                <div id="ShareToFacebook" class="ShareButton glow_button" title="Share to Facebook">
                                </div>
                                <div id="ShareToTwitter" class="ShareButton glow_button" title="Share to Twitter">
                                </div>
                                <div id="ShareToGoogle" class="ShareButton glow_button" title="Share to Google+">
                                </div>
                                <div id="ShareToEmail" class="ShareButton glow_button" title="Share by Email">
                                </div>
                                <div id="ShareToClipboard" class="ShareButton glow_button" title="Press Ctrl+C to Copy to Clipboard">
                                </div>
                                <div id="ShareToNewTab" class="ShareButton glow_button" title="Open Link">
                                </div>
                                <input id="ShareURL" dir="ltr" value="" readonly />
                                <div id="CopyToClipboardText">
                                    Ctrl+C to Copy
                                </div>
                                <div id="ShareWindowClose" class="buttonClose opacity_button">
                                </div>
                            </div>
                            <div id="chargeWindow">
                                <div id="charge_myinfo_btn" class="seller_button opacity_button">
                                </div>
                                <div id="charge_pin_btn" class="seller_button opacity_button">
                                </div>
                                <div id="charge_bitcoin_btn" class="seller_button opacity_button">
                                </div>
                                <div id="matomy_btn" class="seller_button opacity_button">
                                </div>
                                <div id="ultimatepay_btn" class="seller_button opacity_button">
                                </div>
                                <div id="paymentwall_btn" class="seller_button opacity_button buttonGlow">
                                </div>
                                <div id="resellers_btn" class="seller_button opacity_button">
                                </div>
                                <div id="superrewards_btn" class="seller_button opacity_button">
                                </div>
                                <div id="supersonic_btn" class="seller_button opacity_button">
                                </div>
                                <div id="dragonoffers_btn" class="seller_button opacity_button">
                                </div>
                                <div id="astropay_btn" class="seller_button opacity_button">
                                    <div id="new_charge" class="shop_item_note">
                                        <div class="shot_item_note_text">
                                            NEW
                                        </div>
                                    </div>
                                </div>
                                <div id="chargeWindowPayment">
                                </div>
                                <div id="chargeWindowClose" class="buttonClose opacity_button">
                                </div>
                            </div>
                            <div id="DragonVideo">
                                <video id="localVideo">
                                </video>
                                <div id="remotesVideos">
                                </div>
                            </div>
                            <div id="OptionsDialog" class="ui-widget-content NoSelect">
                                <div class="opacity_button" id="OptionsLeave">
                                </div>
                                <div class="opacity_button" id="OptionsOK">
                                </div>
                                <div class="opacity_button RadioOff" id="OptionsShootingModeDrag">
                                </div>
                                <div class="opacity_button RadioOn" id="OptionsShootingModeSlice">
                                </div>
                                <div class="opacity_button RadioOn" id="OptionsLangEN">
                                </div>
                                <div class="opacity_button RadioOff" id="OptionsLangPR">
                                </div>
                                <div class="opacity_button RadioOff" id="OptionsLangFI">
                                </div>
                                <div class="opacity_button RadioOff" id="OptionsLangES">
                                </div>
                                <div class="opacity_button RadioOff" id="OptionsLangVN">
                                </div>
                                <div class="opacity_button" id="OptionsTheme">
                                    [Change Graphics]
                                </div>
                                <div id="OptionsBG">
                                    <span class="GOption OptionTitle1">
                                        Sounds
                                    </span>
                                    <div id="slidersection1">
                                        <span class="tooltip">
                                        </span>
                                        <div class="slider">
                                        </div>
                                        <span class="volume glow_button_anim">
                                        </span>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <span class="GOption OptionTitle1">
                                        Music
                                    </span>
                                    <div id="slidersection2">
                                        <span class="tooltip">
                                        </span>
                                        <div class="slider">
                                        </div>
                                        <span class="volume glow_button_anim">
                                        </span>
                                    </div>
                                    <br>
                                    <br>
                                    <span class="GOption OptionTitle1">
                                        Language
                                    </span>
                                    <select id="lang_select">
                                        <option value="EN">
                                            English
                                        </option>
                                        <option value="ES">
                                            Espa�ol
                                        </option>
                                        <option value="PR">
                                            Portuguese
                                        </option>
                                        <option value="FI">
                                            Filipino
                                        </option>
                                        <option value="VN">
                                            Vietnamese
                                        </option>
                                    </select>
                                    <br>
                                    <br>
                                    <span class="GOption OptionTitle1">
                                        Graphics
                                    </span>
                                    <span class="GOption">
                                        <label>
                                            <input type="checkbox" id="OptionExplodes">
                                            Explodes
                                        </label>
                                    </span>
                                    <span class="GOption">
                                        <label>
                                            <input type="checkbox" id="OptionKillMsg">
                                            Kill-Msg
                                        </label>
                                    </span>
                                    <span class="GOption">
                                        <label>
                                            <input type="checkbox" id="OptionBackground">
                                            Background
                                        </label>
                                    </span>
                                    <span class="GOption">
                                        <label>
                                            <input type="checkbox" id="OptionAnimations">
                                            Animations
                                        </label>
                                    </span>
                                    <span class="GOption">
                                        <label>
                                            <input type="checkbox" id="OptionVortex">
                                            Vortex
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div id="DragonThemeDialog" title="Change Graphics [BETA]">
                                <a href="http://dragonbound-forums.com/forumdisplay.php?fid=60" target="_blank" class="blueBtn">Get DragonBound Themes & Graphics</a>
                                <table>
                                    <tr>
                                        <td>
                                            Lobby BG
                                        </td>
                                        <td>
                                            <input id="theme_lobby_bg">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Room BG
                                        </td>
                                        <td>
                                            <input id="theme_room_bg">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Shop BG
                                        </td>
                                        <td>
                                            <input id="theme_shop_bg">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Ranks
                                        </td>
                                        <td>
                                            <input id="theme_ranks">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            BG Full
                                        </td>
                                        <td>
                                            <input id="theme_bg_full">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Lobby Stuff
                                        </td>
                                        <td>
                                            <input id="theme_lobby_stuff">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Room Stuff
                                        </td>
                                        <td>
                                            <input id="theme_room_stuff">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Game Stuff
                                        </td>
                                        <td>
                                            <input id="theme_game_stuff">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <nobr>
                                                Scores Stuff&nbsp;
                                            </nobr>
                                        </td>
                                        <td>
                                            <input id="theme_scores_stuff">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Shop Stuff
                                        </td>
                                        <td>
                                            <input id="theme_shop_stuff">
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                DragonBound Theme (set of graphics):
                                <br>
                                <textarea id="themeFull">
                                </textarea>
                            </div>
                            <div id="dialogCreateRoom">
                                <input type="text" id="createRoomTitle" value="Hello World" maxlength="30">
                                <div id="CreateRoomPrivateCheckbox" class="checkboxOff opacity_button">
                                </div>
                                <div id="CreateRoomPassword" class="hide">
                                    <input type="text" id="createRoomPasswordInput" value="" maxlength="10">
                                </div>
                                <div id="CreateRoomNumPlayersPrev" class="buttonPrev opacity_button">
                                </div>
                                <div id="CreateRoomNumPlayersNext" class="buttonNext opacity_button">
                                </div>
                                <div id="CreateRoomPlayers" class="players4vB">
                                </div>
                                <div id="CreateRoomModePrev" class="buttonPrev opacity_button">
                                </div>
                                <div id="CreateRoomModeNext" class="buttonNext opacity_button">
                                </div>
                                <div id="CreateRoomMode" class="gameModeBoss">
                                </div>
                                <div id="CreateRoomModeIcon" class="iconModeBoss">
                                </div>
                                <div id="CreateRoomModeText">
                                </div>
                                <div id="dialogCreateRoomButtonCancel" class="buttonCancel">
                                </div>
                                <div id="dialogCreateRoomButtonOK" class="buttonOK">
                                </div>
                                <div id="dialogCreateLocked">
                                </div>
                                <div id="dialogCreateMessage">
                                </div>
                            </div>
                            <div id="chat_divs">
                            </div>
                            <div id="container">
                                <div class="DialogLayer hide">
                                    <div id="myDialog">
                                        <div class="AlertBoxBackground">
                                        </div>
                                        <div class="AlertBox">
                                            <div class="AlertBoxTitle">
                                            </div>
                                            <div class="AlertBoxContent blackShadow">
                                            </div>
                                            <div class="AlertBoxOK buttonOK">
                                            </div>
                                            <div class="AlertBoxCancel buttonCancel">
                                            </div>
                                            <div id="dialog_graphic">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="BrokerScreen">
                                    <div class="AlertBoxBackground">
                                    </div>
                                    <div id="BrokerWindow">
                                        <div id="BrokerTitle" class="blackShadow">
                                        </div>
                                        <div id="BrokerChannels">
                                        </div>
                                        <div class="BrokerChannel" id="BrokerChannel0">
                                        </div>
                                        <div class="BrokerChannel" id="BrokerChannel1">
                                        </div>
                                        <div class="BrokerChannel" id="BrokerChannel2">
                                        </div>
                                        <div class="BrokerChannel" id="BrokerChannel3">
                                        </div>
                                        <div class="BrokerChannel" id="BrokerChannel4">
                                        </div>
                                        <div class="BrokerChannel" id="BrokerChannel5">
                                        </div>
                                        <div class="BrokerChannel" id="BrokerChannel6">
                                        </div>
                                        <div class="BrokerChannel" id="BrokerChannel7">
                                        </div>
                                        <div class="BrokerChannel" id="BrokerChannel8">
                                        </div>
                                        <div class="BrokerChannel" id="BrokerChannel9">
                                        </div>
                                        <div class="BrokerChannel" id="BrokerChannel10">
                                        </div>
                                        <div class="BrokerChannel" id="BrokerChannel11">
                                        </div>
                                        <div class="BrokerChannel" id="BrokerChannel12">
                                        </div>
                                        <div class="BrokerChannel" id="BrokerChannel13">
                                        </div>
                                        <div class="BrokerChannel" id="BrokerChannel14">
                                        </div>
                                        <div id="BrokerTotalPlayers" class="blackShadow">
                                        </div>
                                        <div class="NoSelect opacity_button" id="BrokerLogout">
                                        </div>
                                        <div id="BrokerRefresh" class="opacity_button NoSelect">
                                        </div>
                                        <div id="BrokerHelp" class="NoSelect">
                                        </div>
                                    </div>
                                </div>
                                <div id="friendsList" class="NoSelect hide">
                                    <div class="scrollbar">
                                        <div class="track">
                                            <div class="thumb">
                                                <div class="end">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="viewport">
                                        <div class="overview" id="friendsListHtml">
                                        </div>
                                    </div>
                                </div>
                                <div id="guildMembersList" class="NoSelect hide">
                                    <div class="scrollbar">
                                        <div class="track">
                                            <div class="thumb">
                                                <div class="end">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="viewport">
                                        <div class="overview" id="guildMembersListHtml">
                                        </div>
                                    </div>
                                </div>
                                <div class="screen" id="channelScreen">
                                    <div id="tournament_waiting" class="anim_ease">
                                    </div>
                                    <div id="dialog_change_name_div">
                                        <div class="AlertBoxBackground">
                                        </div>
                                        <div class="AlertBox">
                                            <div class="AlertBoxTitle">
                                            </div>
                                            <div class="AlertBoxContent blackShadow">
                                                <label for="display_name" id="display_name_label">
                                                </label>
                                                <input type="text" value="" id="display_name" maxlength="15"/>
                                                <br>
                                                <div id="NameChangeLittle">
                                                </div>
                                                <input type="checkbox" checked id="can_show_photo"/>
                                                <label for="can_show_photo" id="can_show_photo_label">
                                                </label>
                                                <a href="/settings" target="_blank" id="changePassLink" class="yellowBtn"></a>
                                                <a href="/me" target="_blank" id="myInfoProfile" class="blueBtn"></a>
                                                <button id="changePassword" class="glow_button_anim">
                                                    Change Password+Secret for OLD login
                                                </button>
                                                <div id="dialog_change_name_ok" class="buttonOK">
                                                </div>
                                                <div id="dialog_change_name_cancel" class="buttonCancel">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="dialog_join_room_div">
                                        <div class="AlertBoxBackground">
                                        </div>
                                        <div class="AlertBox">
                                            <div class="AlertBoxTitle">
                                            </div>
                                            <div class="AlertBoxContent blackShadow">
                                                <p>
                                                    <label for="join_room_input" id="join_room1">
                                                    </label>
                                                    <input type="text" value="" id="join_room_input" maxlength="10" class="input_field"/>
                                                </p>
                                                <br>
                                                <p>
                                                    <label for="join_password_input" id="join_room2">
                                                    </label>
                                                    <input type="text" value="" id="join_password_input" maxlength="10" class="input_field"/>
                                                </p>
                                                <div id="dialog_join_room_ok" class="buttonOK">
                                                </div>
                                                <div id="dialog_join_room_cancel" class="buttonCancel">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" id="channelInput" value="" maxlength="150">
                                    <div id="channel">
                                        <div class="scrollbar">
                                            <div class="track">
                                                <div class="thumb">
                                                    <div class="end">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="viewport">
                                            <div class="CanSelect overview" id="channelTextHtml">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="playersList" class="NoSelect">
                                        <div class="scrollbar">
                                            <div class="track">
                                                <div class="thumb">
                                                    <div class="end">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="viewport">
                                            <div class="overview" id="channelPlayersListHtml">
                                            </div>
                                            <div class="overview hide" id="channelFriendsListHtml">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="FacebookLike" class="NoSelect fb-like" data-href="http://DragonBound.net" data-send="true" data-layout="button_count" data-width="360" data-show-faces="false" data-font="verdana" data-colorscheme="dark">
                                    </div>
                                    <div id="Tweeter">
                                        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://dragonbound.net" data-text="dbcloneserver.com - Next generation HTML5 online massive multi-player game!">Tweet</a>
                                    </div>
                                    <div id="GooglePlus">
                                        <div class="g-plusone" data-size="medium" data-href="http://dragonbound.net">
                                        </div>
                                    </div>
                                    <div id="myInfoBox">
                                    </div>
                                    <div id="myRank2" class="rank rank0">
                                    </div>
                                    <div id="myGP2" class="blackShadow NoSelect">
                                    </div>
                                    <div id="myName3" class="blackShadow NoSelect">
                                    </div>
                                    <div id="myName2" class="blackShadow NoSelect">
                                    </div>
                                    <div id="myGold2" class="blackShadow NoSelect">
                                    </div>
                                    <div id="myCash2" class="blackShadow NoSelect">
                                    </div>
                                    <div id="myPUGP" class="blackShadow NoSelect">
                                        +10%
                                    </div>
                                    <div id="myPUG" class="blackShadow NoSelect">
                                        +10%
                                    </div>
                                    <div id="myPlusGP" class="blackShadow NoSelect">
                                        +10%
                                    </div>
                                    <div id="myPhotoDiv">
                                    </div>
                                    <div id="myGFPhotoDiv">
                                    </div>
                                    <div id="channel_player">
                                    </div>
                                    <div id="channelName" class="blackShadow NoSelect">
                                    </div>
                                    <div id="tournament_info" class="blackShadow NoSelect">
                                    </div>
                                    <div id="roomsList">
                                        <div class="room" id="room0">
                                            <div class="roomNumber blackShadow">
                                            </div>
                                            <div class="roomTitle blackShadow">
                                            </div>
                                            <div class="numPlayers whiteShadow">
                                            </div>
                                            <div class="maxPlayers whiteShadow">
                                            </div>
                                            <div class="status">
                                            </div>
                                            <div class="roomMap">
                                            </div>
                                            <div class="gameMode">
                                            </div>
                                            <div class="roomLock">
                                            </div>
                                            <div class="roomGuildMember">
                                            </div>
                                            <div class="roomBuddy">
                                            </div>
                                        </div>
                                        <div class="room" id="room1">
                                            <div class="roomNumber blackShadow">
                                            </div>
                                            <div class="roomTitle blackShadow">
                                            </div>
                                            <div class="numPlayers whiteShadow">
                                            </div>
                                            <div class="maxPlayers whiteShadow">
                                            </div>
                                            <div class="status">
                                            </div>
                                            <div class="roomMap">
                                            </div>
                                            <div class="gameMode">
                                            </div>
                                            <div class="roomLock">
                                            </div>
                                            <div class="roomGuildMember">
                                            </div>
                                            <div class="roomBuddy">
                                            </div>
                                        </div>
                                        <div class="room" id="room2">
                                            <div class="roomNumber blackShadow">
                                            </div>
                                            <div class="roomTitle blackShadow">
                                            </div>
                                            <div class="numPlayers whiteShadow">
                                            </div>
                                            <div class="maxPlayers whiteShadow">
                                            </div>
                                            <div class="status">
                                            </div>
                                            <div class="roomMap">
                                            </div>
                                            <div class="gameMode">
                                            </div>
                                            <div class="roomLock">
                                            </div>
                                            <div class="roomGuildMember">
                                            </div>
                                            <div class="roomBuddy">
                                            </div>
                                        </div>
                                        <div class="room" id="room3">
                                            <div class="roomNumber blackShadow">
                                            </div>
                                            <div class="roomTitle blackShadow">
                                            </div>
                                            <div class="numPlayers whiteShadow">
                                            </div>
                                            <div class="maxPlayers whiteShadow">
                                            </div>
                                            <div class="status">
                                            </div>
                                            <div class="roomMap">
                                            </div>
                                            <div class="gameMode">
                                            </div>
                                            <div class="roomLock">
                                            </div>
                                            <div class="roomGuildMember">
                                            </div>
                                            <div class="roomBuddy">
                                            </div>
                                        </div>
                                        <div class="room" id="room4">
                                            <div class="roomNumber blackShadow">
                                            </div>
                                            <div class="roomTitle blackShadow">
                                            </div>
                                            <div class="numPlayers whiteShadow">
                                            </div>
                                            <div class="maxPlayers whiteShadow">
                                            </div>
                                            <div class="status">
                                            </div>
                                            <div class="roomMap">
                                            </div>
                                            <div class="gameMode">
                                            </div>
                                            <div class="roomLock">
                                            </div>
                                            <div class="roomGuildMember">
                                            </div>
                                            <div class="roomBuddy">
                                            </div>
                                        </div>
                                        <div class="room" id="room5">
                                            <div class="roomNumber blackShadow">
                                            </div>
                                            <div class="roomTitle blackShadow">
                                            </div>
                                            <div class="numPlayers whiteShadow">
                                            </div>
                                            <div class="maxPlayers whiteShadow">
                                            </div>
                                            <div class="status">
                                            </div>
                                            <div class="roomMap">
                                            </div>
                                            <div class="gameMode">
                                            </div>
                                            <div class="roomLock">
                                            </div>
                                            <div class="roomGuildMember">
                                            </div>
                                            <div class="roomBuddy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="NoSelect opacity_button LobbyButton" id="buttonCreateRoom">
                                    </div>
                                    <div class="NoSelect opacity_button LobbyButton" id="buttonMyInfo">
                                    </div>
                                    <div class="NoSelect opacity_button LobbyButton" id="buttonShop">
                                    </div>
                                    <div class="NoSelect opacity_button LobbyButton" id="buttonCharge2">
                                    </div>
                                    <div class="NoSelect opacity_button LobbyButton" id="buttonJoin">
                                    </div>
                                    <div class="NoSelect opacity_button LobbyButton" id="buttonQuickJoin">
                                    </div>
                                    <div class="NoSelect opacity_button LobbyButton" id="buttonRoomsListUp">
                                    </div>
                                    <div class="NoSelect opacity_button LobbyButton" id="buttonRoomsListDown">
                                    </div>
                                    <div class="NoSelect opacity_button LobbyButton" id="buttonRanking">
                                    </div>
                                    <div class="NoSelect opacity_button LobbyButton blackShadow" id="facebook_post">
                                        <div class="event_button_text">
                                        </div>
                                    </div>
                                    <div class="NoSelect opacity_button LobbyButton blackShadow" id="event_button">
                                        <div class="event_button_text">
                                        </div>
                                    </div>
                                    <div class="NoSelect opacity_button LobbyButton" id="buttonOptions">
                                    </div>
                                    <div class="NoSelect opacity_button LobbyButton" id="buttonChannels">
                                    </div>
                                    <div class="NoSelect opacity_button LobbyButton" id="buttonAllBuddyList">
                                    </div>
                                    <div class="NoSelect opacity_button LobbyButton" id="filter_all">
                                    </div>
                                    <div class="NoSelect opacity_button LobbyButton" id="filter_waiting">
                                    </div>
                                    <div class="NoSelect opacity_button iconModeNormal" id="filter_normal">
                                    </div>
                                    <div class="NoSelect opacity_button iconModeBoss" id="filter_boss">
                                    </div>
                                    <div class="NoSelect opacity_button iconModeSame" id="filter_same">
                                    </div>
                                    <div class="NoSelect opacity_button LobbyButton" id="filter_friends">
                                    </div>
                                    <div class="NoSelect opacity_button LobbyButton" id="filter_guild">
                                    </div>
                                    <div class="NoSelect glow_button hide StartGame" id="buttonStart1v1">
                                    </div>
                                    <div class="NoSelect glow_button hide StartGame" id="buttonCreateTeam">
                                    </div>
                                    <div class="NoSelect glow_button hide StartGame" id="buttonJoinTeam">
                                    </div>
                                    <div id="lobbyButtonMobile" class="NoSelect buttonMobile hide glow_button">
                                    </div>
                                    <div class="NoSelect hide blackShadow" id="fastLobbyMsg">
                                    </div>
                                </div>
                                <div class="screen" id="roomScreen">
                                    <div id="team_search">
                                    </div>
                                    <div id="roomOverly">
                                        <div id="roomInfoBG">
                                        </div>
                                        <div id="roomItemsBG" class="TBG">
                                        </div>
                                        <div id="roomInfo1" class="blackShadow">
                                            Game Mode:
                                        </div>
                                        <div id="roomInfo2" class="blackShadow">
                                            Players:
                                        </div>
                                        <div id="roomInfo3" class="blackShadow">
                                            Avatars:
                                        </div>
                                        <div id="roomInfo4" class="blackShadow">
                                            Max Wind:
                                        </div>
                                        <div id="roomInfo5" class="blackShadow">
                                            ^ Using Items ^
                                        </div>
                                        <div id="roomInfo6" class="blackShadow">
                                            Available Items:
                                        </div>
                                    </div>
                                    <div id="roomNumber" class="blackShadow">
                                    </div>
                                    <div id="roomTitle" class="blackShadow">
                                    </div>
                                    <div id="roomButtonBack">
                                    </div>
                                    <div id="roomButtonReady" class="opacity_button">
                                    </div>
                                    <div id="roomButtonStart" class="opacity_button">
                                    </div>
                                    <div id="roomButtonInvite" class="opacity_button">
                                        Invite
                                    </div>
                                    <div id="roomButtonChangeTeam">
                                    </div>
                                    <div id="roomButtonMobile" class="buttonMobile">
                                    </div>
                                    <div id="DragonVideoControls">
                                        <div id="roomButtonVideoChat" class="opacity_button">
                                            VideoChat
                                        </div>
                                        <div id="videoChannelDiv" class="blackShadow">
                                            <nobr>
                                                CH:
                                                <input id="VideoChannelInput">
                                            </nobr>
                                        </div>
                                        <div id="DrgaonVideoBeta" class="blackShadow">
                                            BETA
                                        </div>
                                    </div>
                                    <div id="roomMobileSelect">
                                        <div id="roomMobileSelectCancel" class="buttonCancel">
                                        </div>
                                    </div>
                                    <div class="playerInRoom SideA" id="playerInRoom0">
                                        <div class="roomPlayerName blackShadow">
                                        </div>
                                        <div class="roomPlayerInfo opacity_button">
                                        </div>
                                        <div class="roomPlayerReady">
                                        </div>
                                        <div class="roomPlayerNotReady">
                                        </div>
                                        <div class="roomPlayerMaster">
                                        </div>
                                        <div class="roomPlayerMobile">
                                        </div>
                                        <div class="roomPlayerMyself">
                                        </div>
                                        <div class="roomPlayerBalloon">
                                        </div>
                                        <div class="roomPlayerBalloonTip">
                                        </div>
                                    </div>
                                    <div class="playerInRoom SideA" id="playerInRoom2">
                                        <div class="roomPlayerName blackShadow">
                                        </div>
                                        <div class="roomPlayerInfo opacity_button">
                                        </div>
                                        <div class="roomPlayerReady">
                                        </div>
                                        <div class="roomPlayerNotReady">
                                        </div>
                                        <div class="roomPlayerMaster">
                                        </div>
                                        <div class="roomPlayerMobile">
                                        </div>
                                        <div class="roomPlayerMyself">
                                        </div>
                                        <div class="roomPlayerBalloon">
                                        </div>
                                        <div class="roomPlayerBalloonTip">
                                        </div>
                                    </div>
                                    <div class="playerInRoom SideA" id="playerInRoom4">
                                        <div class="roomPlayerName blackShadow">
                                        </div>
                                        <div class="roomPlayerInfo opacity_button">
                                        </div>
                                        <div class="roomPlayerReady">
                                        </div>
                                        <div class="roomPlayerNotReady">
                                        </div>
                                        <div class="roomPlayerMaster">
                                        </div>
                                        <div class="roomPlayerMobile">
                                        </div>
                                        <div class="roomPlayerMyself">
                                        </div>
                                        <div class="roomPlayerBalloon">
                                        </div>
                                        <div class="roomPlayerBalloonTip">
                                        </div>
                                    </div>
                                    <div class="playerInRoom SideA" id="playerInRoom6">
                                        <div class="roomPlayerName blackShadow">
                                        </div>
                                        <div class="roomPlayerInfo opacity_button">
                                        </div>
                                        <div class="roomPlayerReady">
                                        </div>
                                        <div class="roomPlayerNotReady">
                                        </div>
                                        <div class="roomPlayerMaster">
                                        </div>
                                        <div class="roomPlayerMobile">
                                        </div>
                                        <div class="roomPlayerMyself">
                                        </div>
                                        <div class="roomPlayerBalloon">
                                        </div>
                                        <div class="roomPlayerBalloonTip">
                                        </div>
                                    </div>
                                    <div class="playerInRoom SideB" id="playerInRoom1">
                                        <div class="roomPlayerName blackShadow">
                                        </div>
                                        <div class="roomPlayerInfo opacity_button">
                                        </div>
                                        <div class="roomBotRemove opacity_button">
                                        </div>
                                        <div class="roomBotSelect opacity_button">
                                        </div>
                                        <div class="roomPlayerReady">
                                        </div>
                                        <div class="roomPlayerNotReady">
                                        </div>
                                        <div class="roomPlayerMaster">
                                        </div>
                                        <div class="roomPlayerMobile">
                                        </div>
                                        <div class="roomPlayerMyself">
                                        </div>
                                        <div class="roomPlayerBalloon">
                                        </div>
                                        <div class="roomPlayerBalloonTip">
                                        </div>
                                    </div>
                                    <div class="playerInRoom SideB" id="playerInRoom3">
                                        <div class="roomPlayerName blackShadow">
                                        </div>
                                        <div class="roomPlayerInfo opacity_button">
                                        </div>
                                        <div class="roomBotRemove opacity_button">
                                        </div>
                                        <div class="roomBotSelect opacity_button">
                                        </div>
                                        <div class="roomPlayerReady">
                                        </div>
                                        <div class="roomPlayerNotReady">
                                        </div>
                                        <div class="roomPlayerMaster">
                                        </div>
                                        <div class="roomPlayerMobile">
                                        </div>
                                        <div class="roomPlayerMyself">
                                        </div>
                                        <div class="roomPlayerBalloon">
                                        </div>
                                        <div class="roomPlayerBalloonTip">
                                        </div>
                                    </div>
                                    <div class="playerInRoom SideB" id="playerInRoom5">
                                        <div class="roomPlayerName blackShadow">
                                        </div>
                                        <div class="roomPlayerInfo opacity_button">
                                        </div>
                                        <div class="roomBotRemove opacity_button">
                                        </div>
                                        <div class="roomBotSelect opacity_button">
                                        </div>
                                        <div class="roomPlayerReady">
                                        </div>
                                        <div class="roomPlayerNotReady">
                                        </div>
                                        <div class="roomPlayerMaster">
                                        </div>
                                        <div class="roomPlayerMobile">
                                        </div>
                                        <div class="roomPlayerMyself">
                                        </div>
                                        <div class="roomPlayerBalloon">
                                        </div>
                                        <div class="roomPlayerBalloonTip">
                                        </div>
                                    </div>
                                    <div class="playerInRoom SideB" id="playerInRoom7">
                                        <div class="roomPlayerName blackShadow">
                                        </div>
                                        <div class="roomPlayerInfo opacity_button">
                                        </div>
                                        <div class="roomBotRemove opacity_button">
                                        </div>
                                        <div class="roomBotSelect opacity_button">
                                        </div>
                                        <div class="roomPlayerReady">
                                        </div>
                                        <div class="roomPlayerNotReady">
                                        </div>
                                        <div class="roomPlayerMaster">
                                        </div>
                                        <div class="roomPlayerMobile">
                                        </div>
                                        <div class="roomPlayerMyself">
                                        </div>
                                        <div class="roomPlayerBalloon">
                                        </div>
                                        <div class="roomPlayerBalloonTip">
                                        </div>
                                    </div>
                                    <div id="vortex0" class="vortex">
                                    </div>
                                    <div id="vortex1" class="vortex">
                                    </div>
                                    <div id="vortex2" class="vortex">
                                    </div>
                                    <div id="vortex3" class="vortex">
                                    </div>
                                    <div id="vortex4" class="vortex">
                                    </div>
                                    <div id="vortex5" class="vortex">
                                    </div>
                                    <div id="vortex6" class="vortex">
                                    </div>
                                    <div id="vortex7" class="vortex">
                                    </div>
                                    <div id="add_bot_button" class="opacity_button">
                                    </div>
                                    <div id="itemSlot0" class="itemDual">
                                    </div>
                                    <div id="itemSlot1">
                                    </div>
                                    <div id="itemSlot2" class="itemDual">
                                    </div>
                                    <div id="itemSlot3">
                                    </div>
                                    <div id="itemSlot4" class="itemTeleport">
                                    </div>
                                    <div id="itemSlot5">
                                    </div>
                                    <div id="itemDual" class="itemDual">
                                    </div>
                                    <div id="itemTeleport" class="itemTeleport">
                                    </div>
                                    <div id="room_timer">
                                        <div id="room_timer_text">
                                        </div>
                                    </div>
                                    <div id="room_game_mode">
                                    </div>
                                    <div id="room_players">
                                    </div>
                                    <div id="room_avatars" class="blackShadow">
                                    </div>
                                    <div id="room_wind" class="blackShadow">
                                    </div>
                                    <div id="room_change_title_button" class="opacity_button">
                                    </div>
                                    <div id="room_item_buddy_tab" class="opacity_button">
                                    </div>
                                    <div id="friendsListExtra">
                                    </div>
                                    <div id="guildRoomTabExtra">
                                    </div>
                                    <div id="room_options_button" class="opacity_button">
                                    </div>
                                    <div id="room_map">
                                    </div>
                                    <div id="gp_team_a" class="blackShadow">
                                    </div>
                                    <div id="gp_team_b" class="blackShadow">
                                    </div>
                                    <div id="gp_rate" class="blackShadow">
                                    </div>
                                    <div id="no_win_bonus" class="blackShadow">
                                    </div>
                                    <div id="RoomS1Disabled" class="NoSelect imgS1 grayscale">
                                    </div>
                                    <div id="RoomRandomTeams" class="NoSelect blackShadow">
                                        Random Teams
                                    </div>
                                    <div class="NoSelect opacity_button LobbyButton" id="buttonShopFromRoom">
                                    </div>
                                    <input type="text" id="roomInput" value="" maxlength="150">
                                    <div id="roomChat">
                                        <div class="scrollbar">
                                            <div class="track">
                                                <div class="thumb">
                                                    <div class="end">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="viewport">
                                            <div class="CanSelect overview" id="roomChatHtml">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="dialog_change_title_div" class="hide">
                                        <div class="AlertBoxBackground">
                                        </div>
                                        <div class="AlertBox">
                                            <div class="AlertBoxTitle">
                                            </div>
                                            <div class="AlertBoxContent blackShadow">
                                                <br>
                                                <p>
                                                    <label for="room_change_title_input">
                                                    </label>
                                                    <input type="text" value="" id="room_change_title_input" maxlength="30" class="input_field"/>
                                                </p>
                                                <div id="dialog_change_title_ok" class="buttonOK">
                                                </div>
                                                <div id="dialog_change_title_cancel" class="buttonCancel">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="playerInfoDialog">
                                        <div id="infoLoading" class="blackShadow">
                                        </div>
                                        <div id="infoKey1" class="blackShadow">
                                        </div>
                                        <div id="infoKey2" class="blackShadow">
                                        </div>
                                        <div id="infoKey3" class="blackShadow">
                                            GP
                                        </div>
                                        <div id="infoKey4" class="blackShadow">
                                        </div>
                                        <div id="infoKey5" class="blackShadow">
                                        </div>
                                        <div id="infoKey6" class="blackShadow">
                                        </div>
                                        <div id="infoKey7" class="blackShadow">
                                        </div>
                                        <div id="infoKey8" class="blackShadow">
                                        </div>
                                        <div id="infoKey9" class="blackShadow">
                                        </div>
                                        <div id="infoName" class="blackShadow">
                                        </div>
                                        <div id="infoRanking" class="blackShadow">
                                        </div>
                                        <div id="infoGender" class="blackShadow">
                                        </div>
                                        <div id="infoGP" class="blackShadow">
                                        </div>
                                        <div id="infoWinRate" class="blackShadow">
                                        </div>
                                        <div id="infoDamage" class="blackShadow">
                                        </div>
                                        <div id="infoWin" class="blackShadow">
                                        </div>
                                        <div id="infoLose" class="blackShadow">
                                        </div>
                                        <div id="infoGuild" class="blackShadow">
                                        </div>
                                        <div id="infoGuildJob" class="blackShadow">
                                        </div>
                                        <div id="infoRank" class="rank rank0">
                                        </div>
                                        <div id="infoImageDiv">
                                            <div id="infoImageDiv2">
                                            </div>
                                        </div>
                                        <div id="infoAddBuddy" class="opacity_button">
                                        </div>
                                        <div id="infoGuildInvite" class="opacity_button">
                                        </div>
                                        <div id="infoChat" class="opacity_button">
                                        </div>
                                        <div id="infoClose" class="opacity_button">
                                        </div>
                                        <div id="infoGFPhotoDiv">
                                        </div>
                                        <div id="infoRelationBtn" class="blueBtn">
                                        </div>
                                        <div id="infoRelationBonus" class="blackShadow">
                                        </div>
                                    </div>
                                    <div id="dialog_room_options" class="hide NoSelect">
                                        <div id="RoomOptionsNumPlayersPrev" class="NoSelect buttonPrev opacity_button">
                                        </div>
                                        <div id="RoomOptionsNumPlayersNext" class="NoSelect buttonNext opacity_button">
                                        </div>
                                        <div id="RoomOptionsPlayers" class="NoSelect">
                                        </div>
                                        <div id="RoomOptionsModePrev" class="NoSelect buttonPrev opacity_button">
                                        </div>
                                        <div id="RoomOptionsModeNext" class="NoSelect buttonNext opacity_button">
                                        </div>
                                        <div id="RoomOptionsMode" class="NoSelect">
                                        </div>
                                        <div id="RoomOptionsModeIcon" class="NoSelect iconModeBoss">
                                        </div>
                                        <div id="RoomOptionsModeLocked" class="NoSelect imgLock">
                                        </div>
                                        <div id="RoomOptionsMessage" class="NoSelect">
                                        </div>
                                        <div id="RoomOptionsMapPrev" class="NoSelect buttonPrev opacity_button">
                                        </div>
                                        <div id="RoomOptionsMapNext" class="NoSelect buttonNext opacity_button">
                                        </div>
                                        <div id="RoomOptionsMapName" class="NoSelect">
                                        </div>
                                        <div id="RoomOptionsMapImage" class="NoSelect">
                                        </div>
                                        <div id="RoomOptionsAvatars" class="NoSelect blackShadow">
                                        </div>
                                        <div id="RoomOptionsAvatarsPrev" class="NoSelect buttonPrev opacity_button">
                                        </div>
                                        <div id="RoomOptionsAvatarsNext" class="NoSelect buttonNext opacity_button">
                                        </div>
                                        <div id="RoomOptionsAvatarsGP" class="NoSelect blackShadow">
                                        </div>
                                        <div id="RoomOptionsWind" class="NoSelect blackShadow">
                                        </div>
                                        <div id="RoomOptionsWindPrev" class="NoSelect buttonPrev opacity_button">
                                        </div>
                                        <div id="RoomOptionsWindNext" class="NoSelect buttonNext opacity_button">
                                        </div>
                                        <div id="RoomOptionsWindGP" class="NoSelect blackShadow">
                                        </div>
                                        <div id="RoomOptionsRandomTeams" class="NoSelect grayscale blackShadow glow_button">
                                            [ ] Random Teams
                                        </div>
                                        <div id="RoomOptionsRandomTeamsRank" class="NoSelect rank rank7">
                                        </div>
                                        <div id="RoomOptionsRandomTeamsLock" class="NoSelect imgLock">
                                        </div>
                                        <div id="RoomOptionsTele" class="NoSelect itemTeleport glow_button">
                                        </div>
                                        <div id="RoomOptionsTeleRank" class="NoSelect rank rank11">
                                        </div>
                                        <div id="RoomOptionsTeleLock" class="NoSelect imgLock">
                                        </div>
                                        <div id="RoomOptionsS1" class="NoSelect imgS1 glow_button">
                                        </div>
                                        <div id="RoomOptionsS1Rank" class="NoSelect rank rank9">
                                        </div>
                                        <div id="RoomOptionsS1Lock" class="NoSelect imgLock">
                                        </div>
                                        <div id="RoomOptionsCustomMap" class="NoSelect opacity_button">
                                            <a href="/static/images/custom_maps.png" target=_blank>(Drag PNG for custom map)</a>
                                        </div>
                                        <div id="RoomOptionsCancel" class="NoSelect buttonCancel">
                                        </div>
                                        <div id="RoomOptionsOK" class="NoSelect buttonOK">
                                        </div>
                                        <a href="http://dragonbound-forums.com/forumdisplay.php?fid=62" target="_blank" class="blueBtn" id="GetCustomMaps">Get Custom Maps</a>
                                    </div>
                                    <div id="select_bot_div">
                                    </div>
                                </div>
                                <div class="screen" id="gameScreen">
                                    <div id="game_back">
                                    </div>
                                    <div id="game_front">
                                        <div id="turn_timer">
                                        </div>
                                        <div id="gameui">
                                            <div id="powerBar">
                                            </div>
                                            <div id="walkBar">
                                            </div>
                                            <div id="powerMarkArea">
                                                <div id="powerMark">
                                                </div>
                                            </div>
                                            <canvas id="MyAngle" width="43" height="15">
                                            </canvas>
                                            <div class="UIGoldDigit" id="UIGoldDigit0">
                                            </div>
                                            <div class="UIGoldDigit" id="UIGoldDigit1">
                                            </div>
                                            <div class="UIGoldDigit" id="UIGoldDigit2">
                                            </div>
                                            <div class="UIGoldDigit" id="UIGoldDigit3">
                                            </div>
                                            <div class="UIGoldDigit" id="UIGoldDigit4">
                                            </div>
                                            <div id="btnShot1" class="Pressed">
                                            </div>
                                            <div id="btnShot2">
                                            </div>
                                            <div id="btnShotSS">
                                            </div>
                                            <div id="btnPass" class="opacity_button">
                                            </div>
                                            <div id="btnEsc" class="opacity_button">
                                            </div>
                                            <div id="gameItemSlot0">
                                            </div>
                                            <div id="gameItemSlot1">
                                            </div>
                                            <div id="gameItemSlot2">
                                            </div>
                                            <div id="gameItemSlot3">
                                            </div>
                                            <div id="gameItemSlot4">
                                            </div>
                                            <div id="gameItemSlot5">
                                            </div>
                                            <div id="last_power_mark">
                                            </div>
                                            <div id="weatherSlot0">
                                            </div>
                                            <div id="weatherSlot1">
                                            </div>
                                            <div id="weatherSlot2">
                                            </div>
                                            <div id="weatherSlot3">
                                            </div>
                                            <div id="weatherSlot4">
                                            </div>
                                            <div id="slice_drag_button">
                                            </div>
                                            <div id="LastAngleDigit-" class="LastAngleDigit LastAngleDigit-">
                                            </div>
                                            <div id="LastAngleDigit1">
                                            </div>
                                            <div id="LastAngleDigit2">
                                            </div>
                                            <div id="message_over_items">
                                            </div>
                                            <div id="all_chat">
                                            </div>
                                            <div id="team_chat">
                                            </div>
                                            <div id="help_btn">
                                                ?
                                            </div>
                                            <div id="game_dnd_btn" class="dnd_btn">
                                                PM
                                            </div>
                                        </div>
                                        <div id="turns_list">
                                            <div class="turn_list_title blackShadow">
                                            </div>
                                            <div class="turn_line" id="turn_line0">
                                                <div class="turn_line_number turn_line_number0">
                                                </div>
                                                <div class="turn_line_rank">
                                                </div>
                                                <div class="turn_line_name blackShadow">
                                                </div>
                                                <div class="turn_line_delay blackShadow">
                                                </div>
                                            </div>
                                            <div class="turn_line" id="turn_line1">
                                                <div class="turn_line_number turn_line_number1">
                                                </div>
                                                <div class="turn_line_rank">
                                                </div>
                                                <div class="turn_line_name blackShadow">
                                                </div>
                                                <div class="turn_line_delay blackShadow">
                                                </div>
                                            </div>
                                            <div class="turn_line" id="turn_line2">
                                                <div class="turn_line_number turn_line_number2">
                                                </div>
                                                <div class="turn_line_rank">
                                                </div>
                                                <div class="turn_line_name blackShadow">
                                                </div>
                                                <div class="turn_line_delay blackShadow">
                                                </div>
                                            </div>
                                            <div class="turn_line" id="turn_line3">
                                                <div class="turn_line_number turn_line_number3">
                                                </div>
                                                <div class="turn_line_rank">
                                                </div>
                                                <div class="turn_line_name blackShadow">
                                                </div>
                                                <div class="turn_line_delay blackShadow">
                                                </div>
                                            </div>
                                            <div class="turn_line" id="turn_line4">
                                                <div class="turn_line_number turn_line_number4">
                                                </div>
                                                <div class="turn_line_rank">
                                                </div>
                                                <div class="turn_line_name blackShadow">
                                                </div>
                                                <div class="turn_line_delay blackShadow">
                                                </div>
                                            </div>
                                            <div class="turn_line" id="turn_line5">
                                                <div class="turn_line_number turn_line_number5">
                                                </div>
                                                <div class="turn_line_rank">
                                                </div>
                                                <div class="turn_line_name blackShadow">
                                                </div>
                                                <div class="turn_line_delay blackShadow">
                                                </div>
                                            </div>
                                            <div class="turn_line" id="turn_line6">
                                                <div class="turn_line_number turn_line_number6">
                                                </div>
                                                <div class="turn_line_rank">
                                                </div>
                                                <div class="turn_line_name blackShadow">
                                                </div>
                                                <div class="turn_line_delay blackShadow">
                                                </div>
                                            </div>
                                            <div class="turn_line" id="turn_line7">
                                                <div class="turn_line_number turn_line_number7">
                                                </div>
                                                <div class="turn_line_rank">
                                                </div>
                                                <div class="turn_line_name blackShadow">
                                                </div>
                                                <div class="turn_line_delay blackShadow">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="text" id="gameInput" value="" maxlength="150">
                                        <div id="gameChat">
                                            <div class="scrollbar">
                                                <div class="track">
                                                    <div class="thumb">
                                                        <div class="end">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="viewport">
                                                <div class="CanSelect overview" id="gameChatHtml">
                                                </div>
                                            </div>
                                        </div>
                                        <canvas id="wind_meter2" width="66" height="60">
                                        </canvas>
                                        <div id="game_replay">
                                        </div>
                                        <div id="touch_ui">
                                            <div id="btnShoot">
                                            </div>
                                            <div id="btnRight">
                                            </div>
                                            <div id="btnLeft">
                                            </div>
                                            <div id="btnUp">
                                            </div>
                                            <div id="btnDown">
                                            </div>
                                        </div>
                                        <div id="howtoplay">
                                            <div id="howtoplayClose" class="buttonClose glow_button">
                                            </div>
                                        </div>
                                        <div id="game_over">
                                            <div id="scores_lose_a">
                                            </div>
                                            <div id="scores_lose_b">
                                            </div>
                                            <div class="score" id="score0">
                                                <div class="score_me">
                                                </div>
                                                <div class="score_rank">
                                                </div>
                                                <div class="score_name blackShadow">
                                                </div>
                                                <div class="score_gp blackShadow">
                                                </div>
                                                <div class="score_gold blackShadow">
                                                </div>
                                                <div class="score_bonus_gp blackShadow">
                                                </div>
                                                <div class="score_bonus_gold blackShadow">
                                                </div>
                                                <div class="score_state">
                                                </div>
                                            </div>
                                            <div class="score" id="score1">
                                                <div class="score_me">
                                                </div>
                                                <div class="score_rank">
                                                </div>
                                                <div class="score_name blackShadow">
                                                </div>
                                                <div class="score_gp blackShadow">
                                                </div>
                                                <div class="score_gold blackShadow">
                                                </div>
                                                <div class="score_bonus_gp blackShadow">
                                                </div>
                                                <div class="score_bonus_gold blackShadow">
                                                </div>
                                                <div class="score_state">
                                                </div>
                                            </div>
                                            <div class="score" id="score2">
                                                <div class="score_me">
                                                </div>
                                                <div class="score_rank">
                                                </div>
                                                <div class="score_name blackShadow">
                                                </div>
                                                <div class="score_gp blackShadow">
                                                </div>
                                                <div class="score_gold blackShadow">
                                                </div>
                                                <div class="score_bonus_gp blackShadow">
                                                </div>
                                                <div class="score_bonus_gold blackShadow">
                                                </div>
                                                <div class="score_state">
                                                </div>
                                            </div>
                                            <div class="score" id="score3">
                                                <div class="score_me">
                                                </div>
                                                <div class="score_rank">
                                                </div>
                                                <div class="score_name blackShadow">
                                                </div>
                                                <div class="score_gp blackShadow">
                                                </div>
                                                <div class="score_gold blackShadow">
                                                </div>
                                                <div class="score_bonus_gp blackShadow">
                                                </div>
                                                <div class="score_bonus_gold blackShadow">
                                                </div>
                                                <div class="score_state">
                                                </div>
                                            </div>
                                            <div class="score" id="score4">
                                                <div class="score_me">
                                                </div>
                                                <div class="score_rank">
                                                </div>
                                                <div class="score_name blackShadow">
                                                </div>
                                                <div class="score_gp blackShadow">
                                                </div>
                                                <div class="score_gold blackShadow">
                                                </div>
                                                <div class="score_bonus_gp blackShadow">
                                                </div>
                                                <div class="score_bonus_gold blackShadow">
                                                </div>
                                                <div class="score_state">
                                                </div>
                                            </div>
                                            <div class="score" id="score5">
                                                <div class="score_me">
                                                </div>
                                                <div class="score_rank">
                                                </div>
                                                <div class="score_name blackShadow">
                                                </div>
                                                <div class="score_gp blackShadow">
                                                </div>
                                                <div class="score_gold blackShadow">
                                                </div>
                                                <div class="score_bonus_gp blackShadow">
                                                </div>
                                                <div class="score_bonus_gold blackShadow">
                                                </div>
                                                <div class="score_state">
                                                </div>
                                            </div>
                                            <div class="score" id="score6">
                                                <div class="score_me">
                                                </div>
                                                <div class="score_rank">
                                                </div>
                                                <div class="score_name blackShadow">
                                                </div>
                                                <div class="score_gp blackShadow">
                                                </div>
                                                <div class="score_gold blackShadow">
                                                </div>
                                                <div class="score_bonus_gp blackShadow">
                                                </div>
                                                <div class="score_bonus_gold blackShadow">
                                                </div>
                                                <div class="score_state">
                                                </div>
                                            </div>
                                            <div class="score" id="score7">
                                                <div class="score_me">
                                                </div>
                                                <div class="score_rank">
                                                </div>
                                                <div class="score_name blackShadow">
                                                </div>
                                                <div class="score_gp blackShadow">
                                                </div>
                                                <div class="score_gold blackShadow">
                                                </div>
                                                <div class="score_bonus_gp blackShadow">
                                                </div>
                                                <div class="score_bonus_gold blackShadow">
                                                </div>
                                                <div class="score_state">
                                                </div>
                                            </div>
                                            <div id="GameShare" class="glow_button">
                                                Share
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="screen NoSelect" id="shopScreen">
                                    <div id="shopOverly">
                                        <div id="shopTitle" class="blackShadow NoSelect">
                                        </div>
                                        <div id="shopMyBox">
                                        </div>
                                        <div id="shopInvBox" class="TBGnBorder">
                                        </div>
                                        <div id="shopInvTitle" class="blackShadow NoSelect">
                                        </div>
                                    </div>
                                    <div id="buttonShopExit" class="opacity_button NoSelect shopButton">
                                    </div>
                                    <div id="buttonShopBuy" class="opacity_button NoSelect shopButton">
                                    </div>
                                    <div id="buttonShopHead" class="opacity_button NoSelect shopButton">
                                    </div>
                                    <div id="buttonShopBody" class="opacity_button NoSelect shopButton">
                                    </div>
                                    <div id="buttonShopEyes" class="opacity_button NoSelect shopButton">
                                    </div>
                                    <div id="buttonShopFlag" class="opacity_button NoSelect shopButton">
                                    </div>
                                    <div id="buttonShopBackground" class="opacity_button NoSelect shopButton">
                                    </div>
                                    <div id="buttonShopForeground" class="opacity_button NoSelect shopButton">
                                    </div>
                                    <div id="buttonShopExItem" class="opacity_button NoSelect shopButton">
                                    </div>
                                    <div id="buttonShopPrev" class="opacity_button NoSelect shopButton">
                                    </div>
                                    <div id="buttonShopNext" class="opacity_button NoSelect shopButton">
                                    </div>
                                    <div id="shop_player">
                                    </div>
                                    <div id="shop_my_cash" class="cashShadow">
                                    </div>
                                    <div id="shop_my_gold" class="goldShadow">
                                    </div>
                                    <div id="shop_my_stats">
                                        <div class="shop_item_stat shop_item_stat0">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat1">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat2">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat3">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat4">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat5">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat6">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat7">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="shop_my_items_container">
                                        <div class="scrollbar">
                                            <div class="track">
                                                <div class="thumb">
                                                    <div class="end">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="viewport">
                                            <div class="overview NoSelect" id="shop_my_items">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="shop_my_items_number">
                                        <div class="digit0 stat_font stat_font9">
                                        </div>
                                        <div class="digit1 stat_font stat_font8">
                                        </div>
                                        <div class="digit2 stat_font stat_font7">
                                        </div>
                                        <div class="digit3 stat_font stat_font6">
                                        </div>
                                    </div>
                                    <div id="shop_my_items_stats" class="blackShadow">
                                    </div>
                                    <div id="shop_sort">
                                        <span id="SortLabel" class="blackShadow">
                                        </span>
                                        <select id="shop_sort_select">
                                            <option value="Purchase Time">
                                                Purchase Time
                                            </option>
                                            <option value="Type">
                                                Type
                                            </option>
                                            <option value="Name">
                                                Name
                                            </option>
                                            <option value="Gift,Cash,Gold">
                                                Gift, Cash, Gold
                                            </option>
                                            <option value="Stat: Life">
                                                Stat: Life
                                            </option>
                                            <option value="Stat: Dig">
                                                Stat: Dig
                                            </option>
                                            <option value="Stat: Defense">
                                                Stat: Defense
                                            </option>
                                            <option value="Stat: Attack">
                                                Stat: Attack
                                            </option>
                                            <option value="Stat: Shield">
                                                Stat: Shield
                                            </option>
                                            <option value="Stat: Speed">
                                                Stat: Speed
                                            </option>
                                            <option value="Stat: Item">
                                                Stat: Item
                                            </option>
                                            <option value="Stat: Gold">
                                                Stat: Gold
                                            </option>
                                        </select>
                                    </div>
                                    <div id="shop_item0" class="shop_item">
                                        <div class="shop_item_icon">
                                        </div>
                                        <div class="shop_item_name blackShadow">
                                        </div>
                                        <div class="shop_item_image NoSelect">
                                        </div>
                                        <div class="shop_item_stat shop_item_stat0">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat1">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat2">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat3">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat4">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat5">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat6">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat7">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_cash cashShadow">
                                        </div>
                                        <div class="shop_item_gold goldShadow">
                                        </div>
                                        <div class="shop_item_note">
                                            <div class="shot_item_note_text">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="shop_item1" class="shop_item">
                                        <div class="shop_item_icon">
                                        </div>
                                        <div class="shop_item_name blackShadow">
                                        </div>
                                        <div class="shop_item_image NoSelect">
                                        </div>
                                        <div class="shop_item_stat shop_item_stat0">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat1">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat2">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat3">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat4">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat5">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat6">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat7">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_cash cashShadow">
                                        </div>
                                        <div class="shop_item_gold goldShadow">
                                        </div>
                                        <div class="shop_item_note">
                                            <div class="shot_item_note_text">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="shop_item2" class="shop_item">
                                        <div class="shop_item_icon">
                                        </div>
                                        <div class="shop_item_name blackShadow">
                                        </div>
                                        <div class="shop_item_image NoSelect">
                                        </div>
                                        <div class="shop_item_stat shop_item_stat0">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat1">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat2">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat3">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat4">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat5">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat6">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat7">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_cash cashShadow">
                                        </div>
                                        <div class="shop_item_gold goldShadow">
                                        </div>
                                        <div class="shop_item_note">
                                            <div class="shot_item_note_text">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="shop_item3" class="shop_item">
                                        <div class="shop_item_icon">
                                        </div>
                                        <div class="shop_item_name blackShadow">
                                        </div>
                                        <div class="shop_item_image NoSelect">
                                        </div>
                                        <div class="shop_item_stat shop_item_stat0">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat1">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat2">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat3">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat4">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat5">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat6">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat7">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_cash cashShadow">
                                        </div>
                                        <div class="shop_item_gold goldShadow">
                                        </div>
                                        <div class="shop_item_note">
                                            <div class="shot_item_note_text">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="shop_item4" class="shop_item">
                                        <div class="shop_item_icon">
                                        </div>
                                        <div class="shop_item_name blackShadow">
                                        </div>
                                        <div class="shop_item_image NoSelect">
                                        </div>
                                        <div class="shop_item_stat shop_item_stat0">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat1">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat2">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat3">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat4">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat5">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat6">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat7">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_cash cashShadow">
                                        </div>
                                        <div class="shop_item_gold goldShadow">
                                        </div>
                                        <div class="shop_item_note">
                                            <div class="shot_item_note_text">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="shop_item5" class="shop_item">
                                        <div class="shop_item_icon">
                                        </div>
                                        <div class="shop_item_name blackShadow">
                                        </div>
                                        <div class="shop_item_image NoSelect">
                                        </div>
                                        <div class="shop_item_stat shop_item_stat0">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat1">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat2">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat3">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat4">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat5">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat6">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat7">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_cash cashShadow">
                                        </div>
                                        <div class="shop_item_gold goldShadow">
                                        </div>
                                        <div class="shop_item_note">
                                            <div class="shot_item_note_text">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="shop_item6" class="shop_item">
                                        <div class="shop_item_icon">
                                        </div>
                                        <div class="shop_item_name blackShadow">
                                        </div>
                                        <div class="shop_item_image NoSelect">
                                        </div>
                                        <div class="shop_item_stat shop_item_stat0">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat1">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat2">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat3">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat4">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat5">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat6">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat7">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_cash cashShadow">
                                        </div>
                                        <div class="shop_item_gold goldShadow">
                                        </div>
                                        <div class="shop_item_note">
                                            <div class="shot_item_note_text">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="shop_item7" class="shop_item">
                                        <div class="shop_item_icon">
                                        </div>
                                        <div class="shop_item_name blackShadow">
                                        </div>
                                        <div class="shop_item_image NoSelect">
                                        </div>
                                        <div class="shop_item_stat shop_item_stat0">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat1">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat2">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat3">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat4">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat5">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat6">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat7">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_cash cashShadow">
                                        </div>
                                        <div class="shop_item_gold goldShadow">
                                        </div>
                                        <div class="shop_item_note">
                                            <div class="shot_item_note_text">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="shop_item8" class="shop_item">
                                        <div class="shop_item_icon">
                                        </div>
                                        <div class="shop_item_name blackShadow">
                                        </div>
                                        <div class="shop_item_image NoSelect">
                                        </div>
                                        <div class="shop_item_stat shop_item_stat0">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat1">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat2">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat3">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat4">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat5">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat6">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_stat shop_item_stat7">
                                            <div class="stat_icon">
                                            </div>
                                            <div class="stat_digit1 stat_font">
                                            </div>
                                            <div class="stat_digit2 stat_font">
                                            </div>
                                        </div>
                                        <div class="shop_item_cash cashShadow">
                                        </div>
                                        <div class="shop_item_gold goldShadow">
                                        </div>
                                        <div class="shop_item_note">
                                            <div class="shot_item_note_text">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="shop_buy_dialog" class="ui-widget-content">
                                        <div id="buy_panel1" class="blackShadow">
                                        </div>
                                        <div id="buy_panel2" class="blackShadow">
                                        </div>
                                        <div id="buy_option1" class="blackShadow">
                                        </div>
                                        <div id="buy_option2" class="blackShadow">
                                        </div>
                                        <div id="buy_option3" class="blackShadow">
                                        </div>
                                        <div class="shop_item_icon">
                                        </div>
                                        <div class="shop_item_name blackShadow">
                                        </div>
                                        <div class="shop_item_image NoSelect">
                                        </div>
                                        <div id="buy_gold_week" class="buy_option goldShadow">
                                        </div>
                                        <div id="buy_gold_month" class="buy_option goldShadow">
                                        </div>
                                        <div id="buy_gold_perm" class="buy_option goldShadow">
                                        </div>
                                        <div id="buy_cash_week" class="buy_option cashShadow">
                                        </div>
                                        <div id="buy_cash_month" class="buy_option cashShadow">
                                        </div>
                                        <div id="buy_cash_perm" class="buy_option cashShadow">
                                        </div>
                                        <div id="buy_period" class="hide">
                                        </div>
                                        <div id="buy_period_next_btn" class="opacity_button shopButton hide">
                                        </div>
                                        <div id="buy_period_prev_btn" class="opacity_button shopButton hide">
                                        </div>
                                        <div id="buy_gold_btn" class="opacity_button shopButton hide">
                                        </div>
                                        <div id="buy_cash_btn" class="opacity_button shopButton hide">
                                        </div>
                                        <div id="buy_cancel_btn" class="opacity_button shopButton">
                                        </div>
                                        <div class="NoSelect opacity_button LobbyButton" id="buttonChargeShop">
                                        </div>
                                        <div id="buy_ui">
                                            <label>
                                                <input type="checkbox" id="buy_ui_chk">
                                                Old UI
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="LoginWindowBG">
                                <div id="LoginWindow">
                                    <div id="loginTitle">
                                        Login to DragonBound
                                    </div>
                                    <div id="ConnectWithFacebook" class="glow_button_anim">
                                    </div>
                                    <div id="ConnectWithPassword" class="glow_button_anim">
                                        <span class="loginBtnInfo">
                                            Old
                                        </span>
                                    </div>
                                    <div id="LoginOR1" class="blackShadow">
                                        - OR -
                                    </div>
                                    <div id="LoginSap">
                                    </div>
                                    <div id="LoginPart">
                                        <input class="inputField" id="LoginUsername" name="username" placeholder="Email / UserID / Username">
                                        <br>
                                        <input class="inputField" type="password" id="LoginPass" name="pass" placeholder="Password">
                                        <input type="submit" value="Login" id="LoginSubmit" class="blueBtn">
                                        <br>
                                        <label class="remember">
                                            <input type="checkbox" name="remember" id="LoginRemember">
                                            Keep me logged in
                                        </label>
                                        |
                                        <span class="resetPass">
                                            <a href="/accounts/password/reset">Forgot password?</a>
                                        </span>
                                    </div>
                                    <div id="registerTitle">
                                        Or Create Account
                                    </div>
                                    <div id="RegisterPart">
                                        <br>
                                        <div class="formLine">
                                            <input class="inputField" id="name" name="name" placeholder="Name" maxlength="15" value="">
                                        </div>
                                        <div class="formLine">
                                            <input class="inputField" id="email" name="email" placeholder="Email" maxlength="70" value="">
                                        </div>
                                        <div class="formLine">
                                            <input class="inputField" type="password" id="password" name="password" placeholder="New Password">
                                        </div>
                                        <div class="formLine" style="margin: 5px">
                                            <input type="radio" name="gender" id="male" value="m">
                                            <label for="male">
                                                Male
                                            </label>
                                            <input type="radio" name="gender" id="female" value="f">
                                            <label for="female">
                                                Female
                                            </label>
                                        </div>
                                        <div class="formLine" style="margin-left: 10px">
                                            Birthday
                                            <span>
                                                <select class="RegisterSelect" name="month" id="month">
                                                    <option value="0" selected>
                                                        Month
                                                    </option>
                                                    <option value="1">
                                                        Jan
                                                    </option>
                                                    <option value="2">
                                                        Feb
                                                    </option>
                                                    <option value="3">
                                                        Mar
                                                    </option>
                                                    <option value="4">
                                                        Apr
                                                    </option>
                                                    <option value="5">
                                                        May
                                                    </option>
                                                    <option value="6">
                                                        Jun
                                                    </option>
                                                    <option value="7">
                                                        Jul
                                                    </option>
                                                    <option value="8">
                                                        Aug
                                                    </option>
                                                    <option value="9">
                                                        Sep
                                                    </option>
                                                    <option value="10">
                                                        Oct
                                                    </option>
                                                    <option value="11">
                                                        Nov
                                                    </option>
                                                    <option value="12">
                                                        Dec
                                                    </option>
                                                </select>
                                                <select class="RegisterSelect" name="day" id="day">
                                                    <option value="0" selected>
                                                        Day
                                                    </option>
                                                    <option value="1">
                                                        1
                                                    </option>
                                                    <option value="2">
                                                        2
                                                    </option>
                                                    <option value="3">
                                                        3
                                                    </option>
                                                    <option value="4">
                                                        4
                                                    </option>
                                                    <option value="5">
                                                        5
                                                    </option>
                                                    <option value="6">
                                                        6
                                                    </option>
                                                    <option value="7">
                                                        7
                                                    </option>
                                                    <option value="8">
                                                        8
                                                    </option>
                                                    <option value="9">
                                                        9
                                                    </option>
                                                    <option value="10">
                                                        10
                                                    </option>
                                                    <option value="11">
                                                        11
                                                    </option>
                                                    <option value="12">
                                                        12
                                                    </option>
                                                    <option value="13">
                                                        13
                                                    </option>
                                                    <option value="14">
                                                        14
                                                    </option>
                                                    <option value="15">
                                                        15
                                                    </option>
                                                    <option value="16">
                                                        16
                                                    </option>
                                                    <option value="17">
                                                        17
                                                    </option>
                                                    <option value="18">
                                                        18
                                                    </option>
                                                    <option value="19">
                                                        19
                                                    </option>
                                                    <option value="20">
                                                        20
                                                    </option>
                                                    <option value="21">
                                                        21
                                                    </option>
                                                    <option value="22">
                                                        22
                                                    </option>
                                                    <option value="23">
                                                        23
                                                    </option>
                                                    <option value="24">
                                                        24
                                                    </option>
                                                    <option value="25">
                                                        25
                                                    </option>
                                                    <option value="26">
                                                        26
                                                    </option>
                                                    <option value="27">
                                                        27
                                                    </option>
                                                    <option value="28">
                                                        28
                                                    </option>
                                                    <option value="29">
                                                        29
                                                    </option>
                                                    <option value="30">
                                                        30
                                                    </option>
                                                    <option value="31">
                                                        31
                                                    </option>
                                                </select>
                                                <select class="RegisterSelect" name="year" id="year">
                                                    <option value="0" selected>
                                                        Year
                                                    </option>
                                                    <option value="2013">
                                                        2013
                                                    </option>
                                                    <option value="2012">
                                                        2012
                                                    </option>
                                                    <option value="2011">
                                                        2011
                                                    </option>
                                                    <option value="2010">
                                                        2010
                                                    </option>
                                                    <option value="2009">
                                                        2009
                                                    </option>
                                                    <option value="2008">
                                                        2008
                                                    </option>
                                                    <option value="2007">
                                                        2007
                                                    </option>
                                                    <option value="2006">
                                                        2006
                                                    </option>
                                                    <option value="2005">
                                                        2005
                                                    </option>
                                                    <option value="2004">
                                                        2004
                                                    </option>
                                                    <option value="2003">
                                                        2003
                                                    </option>
                                                    <option value="2002">
                                                        2002
                                                    </option>
                                                    <option value="2001">
                                                        2001
                                                    </option>
                                                    <option value="2000">
                                                        2000
                                                    </option>
                                                    <option value="1999">
                                                        1999
                                                    </option>
                                                    <option value="1998">
                                                        1998
                                                    </option>
                                                    <option value="1997">
                                                        1997
                                                    </option>
                                                    <option value="1996">
                                                        1996
                                                    </option>
                                                    <option value="1995">
                                                        1995
                                                    </option>
                                                    <option value="1994">
                                                        1994
                                                    </option>
                                                    <option value="1993">
                                                        1993
                                                    </option>
                                                    <option value="1992">
                                                        1992
                                                    </option>
                                                    <option value="1991">
                                                        1991
                                                    </option>
                                                    <option value="1990">
                                                        1990
                                                    </option>
                                                    <option value="1989">
                                                        1989
                                                    </option>
                                                    <option value="1988">
                                                        1988
                                                    </option>
                                                    <option value="1987">
                                                        1987
                                                    </option>
                                                    <option value="1986">
                                                        1986
                                                    </option>
                                                    <option value="1985">
                                                        1985
                                                    </option>
                                                    <option value="1984">
                                                        1984
                                                    </option>
                                                    <option value="1983">
                                                        1983
                                                    </option>
                                                    <option value="1982">
                                                        1982
                                                    </option>
                                                    <option value="1981">
                                                        1981
                                                    </option>
                                                    <option value="1980">
                                                        1980
                                                    </option>
                                                    <option value="1979">
                                                        1979
                                                    </option>
                                                    <option value="1978">
                                                        1978
                                                    </option>
                                                    <option value="1977">
                                                        1977
                                                    </option>
                                                    <option value="1976">
                                                        1976
                                                    </option>
                                                    <option value="1975">
                                                        1975
                                                    </option>
                                                    <option value="1974">
                                                        1974
                                                    </option>
                                                    <option value="1973">
                                                        1973
                                                    </option>
                                                    <option value="1972">
                                                        1972
                                                    </option>
                                                    <option value="1971">
                                                        1971
                                                    </option>
                                                    <option value="1970">
                                                        1970
                                                    </option>
                                                    <option value="1969">
                                                        1969
                                                    </option>
                                                    <option value="1968">
                                                        1968
                                                    </option>
                                                    <option value="1967">
                                                        1967
                                                    </option>
                                                    <option value="1966">
                                                        1966
                                                    </option>
                                                    <option value="1965">
                                                        1965
                                                    </option>
                                                    <option value="1964">
                                                        1964
                                                    </option>
                                                    <option value="1963">
                                                        1963
                                                    </option>
                                                    <option value="1962">
                                                        1962
                                                    </option>
                                                    <option value="1961">
                                                        1961
                                                    </option>
                                                    <option value="1960">
                                                        1960
                                                    </option>
                                                    <option value="1959">
                                                        1959
                                                    </option>
                                                    <option value="1958">
                                                        1958
                                                    </option>
                                                    <option value="1957">
                                                        1957
                                                    </option>
                                                    <option value="1956">
                                                        1956
                                                    </option>
                                                    <option value="1955">
                                                        1955
                                                    </option>
                                                    <option value="1954">
                                                        1954
                                                    </option>
                                                    <option value="1953">
                                                        1953
                                                    </option>
                                                    <option value="1952">
                                                        1952
                                                    </option>
                                                    <option value="1951">
                                                        1951
                                                    </option>
                                                    <option value="1950">
                                                        1950
                                                    </option>
                                                    <option value="1949">
                                                        1949
                                                    </option>
                                                    <option value="1948">
                                                        1948
                                                    </option>
                                                    <option value="1947">
                                                        1947
                                                    </option>
                                                    <option value="1946">
                                                        1946
                                                    </option>
                                                    <option value="1945">
                                                        1945
                                                    </option>
                                                    <option value="1944">
                                                        1944
                                                    </option>
                                                    <option value="1943">
                                                        1943
                                                    </option>
                                                    <option value="1942">
                                                        1942
                                                    </option>
                                                    <option value="1941">
                                                        1941
                                                    </option>
                                                    <option value="1940">
                                                        1940
                                                    </option>
                                                    <option value="1939">
                                                        1939
                                                    </option>
                                                    <option value="1938">
                                                        1938
                                                    </option>
                                                    <option value="1937">
                                                        1937
                                                    </option>
                                                    <option value="1936">
                                                        1936
                                                    </option>
                                                    <option value="1935">
                                                        1935
                                                    </option>
                                                    <option value="1934">
                                                        1934
                                                    </option>
                                                    <option value="1933">
                                                        1933
                                                    </option>
                                                    <option value="1932">
                                                        1932
                                                    </option>
                                                    <option value="1931">
                                                        1931
                                                    </option>
                                                    <option value="1930">
                                                        1930
                                                    </option>
                                                    <option value="1929">
                                                        1929
                                                    </option>
                                                    <option value="1928">
                                                        1928
                                                    </option>
                                                    <option value="1927">
                                                        1927
                                                    </option>
                                                    <option value="1926">
                                                        1926
                                                    </option>
                                                    <option value="1925">
                                                        1925
                                                    </option>
                                                    <option value="1924">
                                                        1924
                                                    </option>
                                                    <option value="1923">
                                                        1923
                                                    </option>
                                                    <option value="1922">
                                                        1922
                                                    </option>
                                                    <option value="1921">
                                                        1921
                                                    </option>
                                                    <option value="1920">
                                                        1920
                                                    </option>
                                                    <option value="1919">
                                                        1919
                                                    </option>
                                                    <option value="1918">
                                                        1918
                                                    </option>
                                                    <option value="1917">
                                                        1917
                                                    </option>
                                                    <option value="1916">
                                                        1916
                                                    </option>
                                                    <option value="1915">
                                                        1915
                                                    </option>
                                                    <option value="1914">
                                                        1914
                                                    </option>
                                                    <option value="1913">
                                                        1913
                                                    </option>
                                                    <option value="1912">
                                                        1912
                                                    </option>
                                                    <option value="1911">
                                                        1911
                                                    </option>
                                                    <option value="1910">
                                                        1910
                                                    </option>
                                                    <option value="1909">
                                                        1909
                                                    </option>
                                                    <option value="1908">
                                                        1908
                                                    </option>
                                                    <option value="1907">
                                                        1907
                                                    </option>
                                                    <option value="1906">
                                                        1906
                                                    </option>
                                                    <option value="1905">
                                                        1905
                                                    </option>
                                                </select>
                                            </span>
                                        </div>
                                        <div class="formLine" style="margin: 20px">
                                            <button type="submit" id="RegisterSubmit" class="registerButton">
                                                Create Account
                                            </button>
                                        </div>
                                        <div id="registerErrors" class="errorlist">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </body>
                        
                        </html>