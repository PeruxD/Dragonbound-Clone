using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace GameServerDB.Packets
{
    static class IncomingPackets
    {
        public const int Reqlogin = 0;
        public const int Reqchat = 1;
        public const int Reqpchat = 2;
        public const int Reqtab = 3;
        public const int Reqgame_move = 4;
        public const int Reqgame_shoot = 5;
        public const int Reqmobile = 6;
        public const int Reqroom_change_ready = 7;
        public const int Reqroom_change_team = 8;
        public const int Reqgetinfo = 9;
        public const int Reqroom_create = 10;
        public const int Reqroom_join = 11;
        public const int Reqchannel_join = 12;
        public const int Reqgame_start = 13;
        public const int Reqgame_pass_turn = 14;
        public const int Reqgame_items = 15;
        public const int Reqgame_use_item = 16;
        public const int Reqget_my_avatars = 17;
        public const int Reqequip = 18;
        public const int Reqbuy = 19;
        public const int Reqquick_join = 20;
        public const int Reqroom_title = 21;
        public const int Reqselect_bot = 22;
        public const int Reqevent = 23;
        public const int Reqaddfriend = 24;
        public const int Reqguildinvite = 25;
        public const int Reqfriend_approved = 26;
        public const int Reqguild_approved = 27;
        public const int Reqfriend_delete = 28;
        public const int Reqroom_options = 29;
        public const int Reqguild_create = 30;
        public const int Reqguild_leave = 31;
        public const int Reqchannel_rooms = 32;
        public const int Reqrefresh = 33;
        public const int Reqguild_kick = 34;
        public const int Reqchange_info = 35;
        public const int Reqchange_name = 36;
        public const int Reqguildres = 37;
        public const int Reqget_room_info = 38;
        public const int Reqrefresh_friends = 39;
        public const int Reqrefresh_guildies = 40;
        public const int Reqtournament_start_game = 41;
        public const int Reqtournament_cancel_wait = 42;
    }
}
