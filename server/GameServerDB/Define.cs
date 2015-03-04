using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Drawing;
using GameServerDB.MapsL;

namespace GameServerDB
{
    enum ServerOpcode : byte
    {
        chat = 0,
        my_player_info = 1,
        room_players = 2,
        room_state = 3,
        game_start = 4,
        pchat = 5,
        room_update = 6,
        friend_update = 7,
        play = 8,
        hi = 9,
        rooms_list = 10,
        update = 11,
        dead = 12,
        game_over = 13,
        items = 14,
        master_timer = 15,
        my_avatars = 16,
        alert = 17,
        friends = 18,
        guild = 19,
        info = 20,
        friendreq = 21,
        guildreq = 22,
        guildres = 23,
        logout = 24,
        disconnect_reason = 25,
        login_profile = 26,
        login_avatars = 27,
        pass = 28,
        joined = 29,
        left = 30,
        channel_players = 31,
        changed_mobile = 32,
        changed_team = 33,
        changed_ready = 34,
        slot_update = 35,
        player_left = 36,
        enter_room = 37,
        pass_master = 38,
        extra_room_info = 39,
        alert2 = 40,
        tournament_wait = 41
    }
    enum ClientOpcode
    {
        login = 0,
        chat = 1,
        pchat = 2,
        tab = 3,
        game_move = 4,
        game_shoot = 5,
        mobile = 6,
        room_change_ready = 7,
        room_change_team = 8,
        getinfo = 9,
        room_create = 10,
        room_join = 11,
        channel_join = 12,
        game_start = 13,
        game_pass_turn = 14,
        game_items = 15,
        game_use_item = 16,
        get_my_avatars = 17,
        equip = 18,
        buy = 19,
        quick_join = 20,
        room_title = 21,
        select_bot = 22,
        xevent = 23,
        addfriend = 24,
        guildinvite = 25,
        friend_approved = 26,
        guild_approved = 27,
        friend_delete = 28,
        room_options = 29,
        guild_create = 30,
        guild_leave = 31,
        channel_rooms = 32,
        refresh = 33,
        guild_kick = 34,
        change_info = 35,
        change_name = 36,
        guildres = 37,
        get_room_info = 38,
        refresh_friends = 39,
        refresh_guildies = 40,
        tournament_start_game = 41,
        tournament_cancel_wait = 42
    }
    enum Maps : int
    {
        MAP_CUSTOM = -2,
        MAP_RANDOM = -1,
        MAP_MIRAMO = 0,
        MAP_NIRVANA = 1,
        MAP_METRO = 2,
        MAP_SEA = 3,
        MAP_ADIUM = 4,
        MAP_DRAGON = 5,
        MAP_COZY = 6,
        MAP_DUMMY = 7,
        MAP_STAR = 8,
        MAP_METAMINE = 9,
        MAP_CAVE = 10,
        MAP_SECRET = 11,
    }
    struct maprw
    {
        public int id;
        public int w;
        public int h;
        public BitMapx ground;
        public Dictionary<int, Point> pos;
    }

    enum Mobile : int
    {
        ARMOR = 0,
        ICE = 1,
        ADUKA = 2,
        LIGHTNING = 3,
        BIGFOOT = 4,
        JD = 5,
        ASATE = 6,
        RANDOM = 7,
        KNIGHT = 8,
        FOX = 9,
        DRAGON = 10,
        NAK = 11,
        TRICO = 12,
        BEE = 13
    }
    enum ChatType : int
    {
        CHAT_TYPE_NORMAL = 0,
        CHAT_TYPE_DEAD = 2,
        CHAT_TYPE_GOLD = 3,
        CHAT_TYPE_GM = 5,
        CHAT_TYPE_SYSTEM = 6,
        CHAT_TYPE_NORMAL_TEAM = 7,
        CHAT_TYPE_GM_BUGLE = 9,
    }
}
