using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Threading;
using System.IO;
using WebSocketSharp;
//using WebSocketSharp.Net;
using WebSocketSharp.Server;
using Newtonsoft.Json;
using Newtonsoft.Json.Linq;

#region Using
using GameServerDB.UserManager;
using GameServerDB.ChanelManager;
#endregion


using System.Web;

namespace GameServerDB
{
    public class Serverb : WebSocketService
    {
        UserClass User = new UserClass();
        public int _uid = 0;
        public Serverb()
        {
        }
        protected override void OnOpen()
        {
            string _hi_p = "[9,41,\"Beginners\",0,0]";
            Send(_hi_p);
            User.session_id = this.ID;
            Program.Users.Add(User);
            User.sep = this;
        }
        protected override void OnClose(CloseEventArgs e)
        {
            Program.Users.Remove(User);
            try
            {
                Channel _chan = Program.Chanels.Single(a => a.UserIn(User) == true);
                if (_chan != null)
                {
                    _chan.RemoveUser(User);
                }
            }
            catch { }
        }

        protected override void OnMessage(MessageEventArgs e)
        {
            try
            {
                switch (e.Type)
                {
                    case Opcode.TEXT:
                        {
                            JArray dcode = JArray.Parse(e.Data);
                            ClientOpcode opcode = (ClientOpcode)int.Parse(dcode[0].ToString());
                            LogConsole.Show(LogType.DEBUG, "opcode: {0}", opcode);
                            switch (opcode)
                            {
                                case ClientOpcode.login:
                                    {
                                        //[0,41,1,"123456789",1]
                                        User.version = dcode[1].ToObject<int>();
                                        User.user_id = dcode[2].ToObject<int>();
                                        User.user_key = dcode[3].ToObject<string>();
                                        User.Login();
                                        LogConsole.Show(LogType.DEBUG, "User_Id: {0}", User.user_id);
                                        Chat.ChatManager.Notice(User);
                                        Chat.ChatManager.UpdateBoddy(this);
                                        Channel.SendList();
                                        User.ListFriends();
                                        break;
                                    }
                                case ClientOpcode.chat:
                                    {
                                        string chtm = dcode[1].ToString();
                                        if (User.rank == 24)
                                        {
                                            string[] cd = chtm.Split(' ');
                                            switch (cd[0])
                                            {
                                                case "/mobil":
                                                    {
                                                        Channel _cha = Program.Chanels.Single(a => a.UserIn(User) == true);
                                                        if (_cha != null)
                                                        {
                                                            int _mobil = int.Parse(cd[1]);
                                                            _cha.ChangeMobil(User, _mobil);
                                                        }
                                                        break;
                                                    }
                                            }
                                        }
                                        Broadcast(Chat.ChatManager.Msj(chtm, User));
                                        break;
                                    }
                                case ClientOpcode.room_create:
                                    {
                                        //test script
                                        Channel _new_c = new Channel();
                                        _new_c.channel_id = new Random().Next(2, 9);
                                        _new_c.channel_name = dcode[1].ToObject<string>();
                                        _new_c.channel_password = dcode[2].ToObject<string>();
                                        _new_c.channel_maxplayers = dcode[3].ToObject<int>();
                                        _new_c.channel_gamemode = dcode[4].ToObject<int>();
                                        User.Is_Master = 1;
                                        _new_c.Join(User);
                                        Program.Chanels.Add(_new_c);
                                        Channel.SendList();
                                        break;
                                    }
                                case ClientOpcode.room_join:
                                    {
                                        try
                                        {
                                            Channel _chan = Program.Chanels.Single(a => a.UserIn(User) == true);
                                            if (_chan != null)
                                            {
                                                _chan.RemoveUser(User);
                                            }
                                        }
                                        catch { }
                                        int _sala_id = dcode[1].ToObject<int>();
                                        try
                                        {
                                            Channel _cha = Program.Chanels.Single(a => a.channel_id == _sala_id);
                                            if (_cha != null)
                                            {
                                                if (_cha.UserIn(User))
                                                {
                                                    _cha.RemoveUser(User);
                                                }

                                                _cha.Join(User);
                                            }
                                        }
                                        catch { }
                                        break;
                                    }
                                case ClientOpcode.channel_join:
                                    {
                                        try
                                        {
                                            Channel _chan = Program.Chanels.Single(a => a.UserIn(User) == true);
                                            if (_chan != null)
                                            {
                                                _chan.RemoveUser(User);
                                            }
                                        }
                                        catch { }
                                        User.PlayerInfo();
                                        Chat.ChatManager.UpdateBoddy(this);
                                        Channel.SendList();
                                        break;
                                    }
                                case ClientOpcode.mobile:
                                    {
                                        Channel _cha = Program.Chanels.Single(a => a.UserIn(User) == true);
                                        if (_cha != null)
                                        {
                                            int _mobil = dcode[1].ToObject<int>();
                                            _cha.ChangeMobil(User, _mobil);
                                        }
                                        break;
                                    }
                                case ClientOpcode.get_my_avatars:
                                    {
                                        User.GetAvatars();
                                        break;
                                    }
                                case ClientOpcode.equip:
                                    {
                                        User.SendEquip(dcode[1].ToString());
                                        break;
                                    }
                                case ClientOpcode.buy:
                                    {
                                        User.BuyItems(dcode[1].ToObject<string>(), dcode[2].ToObject<string>(), dcode[3].ToObject<int>(), dcode[4].ToObject<int>());
                                        break;
                                    }
                                case ClientOpcode.change_name:
                                    {
                                        User.ChangeName(dcode[1].ToObject<string>());
                                        User.PlayerInfo();
                                        Chat.ChatManager.UpdateBoddy(this);
                                        break;
                                    }
                                case ClientOpcode.tab:
                                    {
                                        int idt = dcode[1].ToObject<int>();
                                        switch (idt)
                                        {
                                            case 0:
                                                {
                                                    Chat.ChatManager.UpdateBoddy(this);
                                                    break;
                                                }
                                            case 2:
                                                {
                                                    //User.sep.Send("[19]");
                                                    User.Guildinfo();
                                                    break;
                                                }
                                        }
                                        break;
                                    }
                                case ClientOpcode.guild_create:
                                    {
                                        string guild_name = dcode[1].ToObject<string>();
                                        LogConsole.Show(LogType.DEBUG, "GuildC: {0}", guild_name);
                                        break;
                                    }
                                case ClientOpcode.refresh_friends:
                                    {
                                        User.ListFriends();
                                        break;
                                    }
                                case ClientOpcode.refresh_guildies:
                                    {
                                        User.Guildinfo();
                                        break;
                                    }
                                case ClientOpcode.room_change_ready:
                                    {
                                        Channel _chan = Program.Chanels.Single(a => a.UserIn(User) == true);
                                        if (_chan != null)
                                        {
                                            _chan.ChangeReady(User, dcode[1].ToObject<int>());
                                        }
                                        break;
                                    }
                                case ClientOpcode.game_start:
                                    {
                                        Channel _chan = Program.Chanels.Single(a => a.UserIn(User) == true);
                                        if (_chan != null)
                                        {
                                            _chan.GameStart();
                                        }
                                        break;
                                    }
                                case ClientOpcode.game_move:
                                    {
                                        Channel _chan = Program.Chanels.Single(a => a.UserIn(User) == true);
                                        if (_chan != null)
                                        {
                                            User.x = dcode[1].ToObject<int>();
                                            User.y = dcode[2].ToObject<int>();
                                            User.body_move = dcode[3].ToObject<int>();
                                            User.look = dcode[4].ToObject<int>();
                                            User.ang = dcode[5].ToObject<int>();
                                            _chan.Move(User);
                                        }
                                        break;
                                    }
                                case ClientOpcode.game_shoot:
                                    {
                                        Channel _chan = Program.Chanels.Single(a => a.UserIn(User) == true);
                                        if (_chan != null)
                                        {
                                            _chan.GameShoot(User, dcode[1].ToObject<int>(), dcode[2].ToObject<int>(), dcode[3].ToObject<int>(), dcode[4].ToObject<int>(), dcode[5].ToObject<int>(), dcode[6].ToObject<int>(), dcode[7].ToObject<int>(), dcode[8].ToObject<int>());
                                        }
                                        break;
                                    }
                                case ClientOpcode.game_pass_turn:
                                    {
                                        //[14,1585,98,-18,0,24,6]
                                        //[28,[4,0,1585,98,0,585,1,[],652,-436,18,0,2,0,99]]
                                        Channel _chan = Program.Chanels.Single(a => a.UserIn(User) == true);
                                        if (_chan != null)
                                        {
                                            int _uid = dcode[1].ToObject<int>();
                                            int _x = dcode[2].ToObject<int>();
                                            int _y = dcode[3].ToObject<int>();
                                            int _body = dcode[4].ToObject<int>();
                                            int _look = dcode[5].ToObject<int>();
                                            int _angl = dcode[6].ToObject<int>();
                                            int _time = dcode[7].ToObject<int>();
                                        }
                                        break;
                                    }
                                case ClientOpcode.room_change_team:
                                    {
                                        Channel _chan = Program.Chanels.Single(a => a.UserIn(User) == true);
                                        if (_chan != null)
                                        {
                                            _chan.ChangeTeam(User, dcode[1].ToObject<string>());
                                        }
                                        break;
                                    }
                                case ClientOpcode.select_bot:
                                    {
                                        //[22,1,"0"] slot - id_bot
                                        //[35,[2,1,[],1,131702018,"Clown Stripe",0,0,0,1,"m",0,[17,31],1,0]]
                                        Channel _chan = Program.Chanels.Single(a => a.UserIn(User) == true);
                                        if (_chan != null)
                                        {
                                            _chan.AddBot(dcode[1].ToObject<int>(), dcode[1].ToObject<string>());
                                        }
                                        break;
                                    }
                                default:
                                    {
                                        Console.WriteLine("opcode: {0}", opcode);
                                        Console.WriteLine("data: {0}", e.Data);
                                        break;
                                    }
                            }
                            break;
                        }
                    default:
                        {
                            Console.WriteLine("tp: {0}", e.Type);
                            break;
                        }
                }
            }
            catch (Exception Ex)
            { 
                LogConsole.Show(LogType.ERROR, "{0}", Ex.ToString());
            }
        }
    }
}
