using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading;
using System.Threading.Tasks;
using System.IO;
using Newtonsoft.Json;
using System.Web;
using System.Drawing;
using GameServerDB.MapsL;
namespace GameServerDB.ChanelManager
{
    // test script
    //-----------------------------------------------------------------------------------------------------
    public class Channel
    {
        //-----------------------------------------------------------------------------------------------------
        #region Private
        //-----------------------------------------------------------------------------------------------------
        private int _channel_id = 0;
        private bool _channel_private = false;
        private int _channel_maxplayers = 8;
        private int _channel_gamemode = 1;
        private int _channel_status = 0;
        private string _channel_name = "";
        private string _channel_password = "";
        private int _channel_useronli = 0;
        private int _channel_look = 0;
        private int _channel_map = -1;
        private int _channel_poweruse = 0;
        private bool _channel_avatar_on = false;
        private int _channel_max_wind = 0;
        private int _channel_gp_rate = 0;
        private int _unk1 = 0;
        private string _unk2;
        private string _unk3;
        private string _unk4;
        int[][] d = { new int[] { 0, 0, 0, 0 }, new int[] { 0, 0, 0, 0 } };
        //-----------------------------------------------------------------------------------------------------
        #endregion
        //-----------------------------------------------------------------------------------------------------

        //-----------------------------------------------------------------------------------------------------
        #region Public
        //-----------------------------------------------------------------------------------------------------
        public int channel_id {
            set {
                _channel_id = value;
            }
            get {
                return _channel_id;
            }
        }
        public string channel_name {
            set {
                _channel_name = value;
            }
            get {
                return _channel_name;
            }
        }
        public int channel_useronli {
            set {
                _channel_useronli = value;
            }
            get {
                return _channel_useronli;
            }
        }
        public int channel_maxplayers {
            set {
                _channel_maxplayers = value;
            }
            get {
                return _channel_maxplayers;
            }
        }
        public int channel_status {
            set {
                _channel_status = value;
            }
            get {
                return _channel_status;
            }
        }
        public int channel_gamemode {
            set {
                _channel_gamemode = value;
            }
            get {
                return _channel_gamemode;
            }
        }
        public int channel_map {
            set {
                _channel_map = value;
            }
            get {
                return _channel_map;
            }
        }
        public int channel_poweruse {
            set {
                _channel_poweruse = value;
            }
            get {
                return _channel_poweruse;
            }
        }
        public string channel_password {
            set {
                _channel_password = value;
            }
            get {
                return _channel_password;
            }
        }
        //-----------------------------------------------------------------------------------------------------
        #endregion
        //-----------------------------------------------------------------------------------------------------
        bool[] user_slot = new bool[8] { false, false, false, false, false, false, false, false };
        List<UserManager.UserClass> UserInSala = new List<UserManager.UserClass>();
        maprw _map_data;
        CShot cshot;
        //-----------------------------------------------------------------------------------------------------
        public Channel() { }
        //-----------------------------------------------------------------------------------------------------
        public void Join(UserManager.UserClass _user)
        {
            if (_user.Is_Bot != 1)
            {
                _user.sep.Send("[" + (int)ServerOpcode.enter_room + "]");
                StringBuilder sb = new StringBuilder();
                StringWriter sw = new StringWriter(sb);
                using (JsonWriter writer = new JsonTextWriter(sw))
                {
                    writer.Formatting = Formatting.None;
                    writer.WriteStartArray();
                    writer.WriteValue((int)ServerOpcode.room_state);
                    writer.WriteStartArray();
                    writer.WriteValue(_channel_id);
                    writer.WriteValue(_channel_name);
                    writer.WriteValue(_channel_password);
                    writer.WriteValue(_channel_maxplayers);
                    writer.WriteValue(_channel_gamemode);
                    writer.WriteValue(_channel_map);
                    writer.WriteValue(_channel_avatar_on);
                    writer.WriteValue(_channel_max_wind);
                    writer.WriteValue(_channel_gp_rate);
                    writer.WriteValue(_unk1);
                    writer.WriteValue(_unk2);
                    writer.WriteValue(_unk3);
                    writer.WriteValue(_unk4);
                    writer.WriteEndArray();
                    writer.WriteEndArray();
                }
                _user.sep.Send(sb.ToString());
            }
            _user.channel = _channel_id;
            RoomPlayer(_user);
        }
        //-----------------------------------------------------------------------------------------------------
        public void RoomPlayer(UserManager.UserClass user_send)
        {
            //[2,[2,7,[],0,146634,"Carlos 22",0,0,1,1,"m",0,[1,2,0,0,0,0],0,0,1,181494328,"Bill Board",13,0,0,1,"m",5,[12,30],1,0]]
            user_send.Position = SlotJoin();
            LogConsole.Show(LogType.INFO, "newPosition: {0}", user_send.Position);
            UpdateSlot(user_send);
            UserInSala.Add(user_send);
            StringBuilder sb = new StringBuilder();
            StringWriter sw = new StringWriter(sb);
            using (JsonWriter writer = new JsonTextWriter(sw))
            {
                writer.Formatting = Formatting.None;
                writer.WriteStartArray();
                writer.WriteValue((int)ServerOpcode.room_players);
                writer.WriteStartArray();
                writer.WriteValue(UserInSala.Count);  //unk1 - user_on?
                writer.WriteValue(7);  //unk2
                writer.WriteStartArray();
                writer.WriteEndArray();
                foreach (UserManager.UserClass _user in UserInSala)
                {
                    writer.WriteValue(_user.Position);
                    writer.WriteValue(_user.user_id);
                    writer.WriteValue(_user.Name);
                    writer.WriteValue(_user.rank);
                    writer.WriteValue(0);  // unk - guild ?
                    writer.WriteValue(_user.Is_Master);
                    writer.WriteValue(0);  // unk - is_ready ?
                    writer.WriteValue(_user.gender);
                    writer.WriteValue(_user.mobil);
                    writer.WriteStartArray();
                    writer.WriteValue(_user.head);
                    writer.WriteValue(_user.body);
                    writer.WriteValue(_user.eyes);
                    writer.WriteValue(_user.flag);
                    writer.WriteValue(_user.foreground);
                    writer.WriteValue(_user.background);
                    writer.WriteEndArray();
                    writer.WriteValue(0);  // unk - is_bot ?
                    writer.WriteValue(0);  // unk - power_user ?
                    //team a - b c%2
                }
                writer.WriteEndArray();
                writer.WriteEndArray();
            }
            user_send.sep.Send(sb.ToString());
        }
        //-----------------------------------------------------------------------------------------------------
        public void UpdateSlot(UserManager.UserClass _user)
        {
            StringBuilder sb = new StringBuilder();
            StringWriter sw = new StringWriter(sb);
            using (JsonWriter writer = new JsonTextWriter(sw))
            {
                writer.Formatting = Formatting.None;
                writer.WriteStartArray();
                writer.WriteValue((int)ServerOpcode.slot_update);
                writer.WriteStartArray();
                writer.WriteValue(UserInSala.Count);
                writer.WriteValue(5);
                writer.WriteStartArray();
                writer.WriteEndArray();
                writer.WriteValue(_user.Position);
                writer.WriteValue(_user.user_id);
                writer.WriteValue(_user.Name);
                writer.WriteValue(_user.rank);
                writer.WriteValue(0);
                writer.WriteValue(0);
                writer.WriteValue(0);
                writer.WriteValue(_user.gender);
                writer.WriteValue(_user.mobil);
                writer.WriteStartArray();
                writer.WriteValue(_user.head);
                writer.WriteValue(_user.body);
                writer.WriteValue(_user.eyes);
                writer.WriteValue(_user.flag);
                writer.WriteValue(_user.foreground);
                writer.WriteValue(_user.background);
                writer.WriteEndArray();
                writer.WriteValue(0);
                writer.WriteValue(0);
                writer.WriteEndArray();
                writer.WriteEndArray();
            }
            SendAll(sb.ToString());
        }
        //-----------------------------------------------------------------------------------------------------
        public static void SendList()
        {
            StringBuilder sb = new StringBuilder();
            StringWriter sw = new StringWriter(sb);
            using (JsonWriter writer = new JsonTextWriter(sw))
            {
                writer.Formatting = Formatting.None;
                writer.WriteStartArray();
                writer.WriteValue((int)ServerOpcode.rooms_list);
                writer.WriteStartArray();
                foreach (Channel _cha in Program.Chanels)
                {
                    writer.WriteStartArray();
                    writer.WriteValue(_cha._channel_id);
                    writer.WriteValue(_cha._channel_name);
                    writer.WriteValue(_cha.UserInSala.Count());
                    writer.WriteValue(_cha._channel_maxplayers);
                    writer.WriteValue(_cha._channel_status);
                    writer.WriteValue(_cha._channel_gamemode);
                    writer.WriteValue(_cha._channel_look);
                    writer.WriteValue(_cha._channel_map);
                    writer.WriteValue(_cha._channel_poweruse);
                    writer.WriteEndArray();
                }
                writer.WriteEndArray();
                writer.WriteValue(0);
                writer.WriteValue(0);
                writer.WriteEndArray();
            }
            foreach (UserManager.UserClass _us in Program.Users)
            {
                if (!_us.playing)
                {
                    _us.sep.Send(sb.ToString());
                }
            }
        }
        //-----------------------------------------------------------------------------------------------------
        public bool UserIn(UserManager.UserClass _user)
        {
            bool vr = false;
            if (UserInSala.Count > 0)
            {
                try
                {
                    UserManager.UserClass rt = UserInSala.Single(a => a.user_id == _user.user_id);
                    if (rt != null)
                        vr = true;
                }
                catch
                {
                }
            }
            return vr;
        }
        //-----------------------------------------------------------------------------------------------------
        public void ChangeMobil(UserManager.UserClass _user, int _mobil)
        {
            _user.mobil = _mobil;
            StringBuilder sb = new StringBuilder();
            StringWriter sw = new StringWriter(sb);
            using (JsonWriter writer = new JsonTextWriter(sw))
            {
                writer.Formatting = Formatting.None;
                writer.WriteStartArray();
                writer.WriteValue((int)ServerOpcode.changed_mobile);
                writer.WriteValue(_user.user_id);
                writer.WriteValue(_mobil);
                writer.WriteEndArray();
            }
            foreach (UserManager.UserClass _usp in UserInSala)
            {
                _usp.sep.Send(sb.ToString());
            }
        }
        //-----------------------------------------------------------------------------------------------------
        public void GameStart()
        {
            try
            {
                if (this._channel_map < 0)
                {
                    Random rand = new Random();
                    this._channel_map = 0;//rand.Next(0, 11);
                }

                if (UserInSala.Count() <= 1)
                {
                    ChatInfo("Error ", "", 6);
                    return;
                }
                _map_data = Program.RMaps.Single(a => a.id == this._channel_map);
                cshot = new CShot(_map_data.ground);
                cshot.Shot += cshot_Shot;
            }
            catch
            {
                LogConsole.Show(LogType.ERROR, "Map: {0} no Found", this._channel_map);
            }
            //[4,[[
            //[0,146634,"Carlos 22",null,0,377,134,1000,0,0,10,55,-8,0,[1,2,0,0,0,0],52,33,52,33,52,33],
            //[1,151426,"Bil Board",null,13,20,35,1800,250,30,15,65,-7,5,[12,30],    68,45,68,45,68,45]
            StringBuilder sb = new StringBuilder();
            StringWriter sw = new StringWriter(sb);
            using (JsonWriter writer = new JsonTextWriter(sw))
            {
                writer.Formatting = Formatting.None;
                writer.WriteStartArray();
                writer.WriteValue((int)ServerOpcode.game_start);
                writer.WriteStartArray();
                writer.WriteStartArray();
                int c = 0;
                foreach (UserManager.UserClass usp in UserInSala)
                {
                    Point pt = _map_data.pos[c];
                    usp.x = pt.X;
                    usp.y = pt.Y;
                    writer.WriteStartArray();
                    writer.WriteValue(usp.Position);
                    writer.WriteValue(usp.user_id);
                    writer.WriteValue(usp.Name);
                    string dsd = null;
                    writer.WriteValue(dsd);
                    writer.WriteValue(usp.rank);
                    writer.WriteValue(usp.x);
                    writer.WriteValue(usp.y);
                    writer.WriteValue(1000);
                    writer.WriteValue(0);
                    writer.WriteValue(0);
                    writer.WriteValue(10);
                    writer.WriteValue(55);
                    writer.WriteValue(-8);
                    writer.WriteValue(usp.mobil);
                    writer.WriteStartArray();
                    writer.WriteValue(usp.head);
                    writer.WriteValue(usp.body);
                    if (usp.Is_Bot != 1)
                    {
                        writer.WriteValue(usp.eyes);
                        writer.WriteValue(usp.flag);
                        writer.WriteValue(usp.foreground);
                        writer.WriteValue(usp.background);
                    }
                    writer.WriteEndArray();
                    writer.WriteValue(52);
                    writer.WriteValue(33);
                    writer.WriteValue(52);
                    writer.WriteValue(33);
                    writer.WriteValue(52);
                    writer.WriteValue(33);
                    writer.WriteEndArray();
                    c++;
                }
                //],0,562,-452,0,0,[2,2,0,0,3],0,257,7,null]]
                writer.WriteEndArray();
                writer.WriteValue(0);
                writer.WriteValue(562);
                writer.WriteValue(-452);
                writer.WriteValue(0);
                writer.WriteValue(0);
                writer.WriteStartArray();
                writer.WriteValue(2);
                writer.WriteValue(2);
                writer.WriteValue(0);
                writer.WriteValue(0);
                writer.WriteValue(3);
                writer.WriteEndArray();
                writer.WriteValue(0);
                writer.WriteValue(257);
                writer.WriteValue(_channel_map);
                string xdd = null;
                writer.WriteValue(xdd);
                writer.WriteEndArray();
                writer.WriteEndArray();
                SendAll(sb.ToString());
            }
        }
        //-----------------------------------------------------------------------------------------------------
        public void ChangeReady(UserManager.UserClass _user, int tp)
        {
            StringBuilder sb = new StringBuilder();
            StringWriter sw = new StringWriter(sb);
            using (JsonWriter writer = new JsonTextWriter(sw))
            {
                writer.Formatting = Formatting.None;
                writer.WriteStartArray();
                writer.WriteValue((int)ServerOpcode.changed_ready);
                writer.WriteValue(_user.user_id);
                writer.WriteValue(tp);
                writer.WriteEndArray();
                foreach (UserManager.UserClass _usp in UserInSala)
                {
                    _usp.sep.Send(sb.ToString());
                }
            }
        }
        //-----------------------------------------------------------------------------------------------------
        public void RemoveUser(UserManager.UserClass _user)
        {
            if (_user.Is_Master == 1 && UserInSala.Count <= 1)
            {
                _user.Is_Master = 0;
                Program.Chanels.Remove(this);
            }
            else
            {
                UserInSala.Remove(_user);
                if (UserInSala.Count() > 0)
                {
                    StringBuilder sb = new StringBuilder();
                    StringWriter sw = new StringWriter(sb);
                    using (JsonWriter writer = new JsonTextWriter(sw))
                    {
                        writer.Formatting = Formatting.None;
                        writer.WriteStartArray();
                        writer.WriteValue((int)ServerOpcode.player_left);
                        writer.WriteValue(5);
                        writer.WriteValue(0);
                        writer.WriteValue(_user.user_id);
                        writer.WriteEndArray();
                    }
                    SendAll(sb.ToString());
                    RemoveSlot(_user.Position, _user.Is_Master);
                    _user.Is_Master = 0;
                }
            }
        }
        //-----------------------------------------------------------------------------------------------------
        public void GameShoot(UserManager.UserClass _user, int _x, int _y, int _body, int _look, int _angle, int _a, int _b, int _d)
        {
            try
            {
                int x = _x; //1022
                int y = _y; //121
                int body = _body; //0
                int look = _look; //1
                int angle = _angle; //24
                //int a; //43 - power
                //int b; //7  - Timer
                //int d; //0  - ShotType / 0 = shot 1 - 1 = shot 2 - 2 = shot ss
                int power = (int)Math.Round((double)((_a * 234) / 100));
                int a = (look == 0 ? 180 - angle : angle);
                cshot.SetShot(_user, a, power, 0, 398, x, y, look);
                cshot.Start();
                /*
                var E_PLAY = Object.freeze({
                next_turn_number: 0,
                player_number: 1,
                x: 2,
                y: 3,
                look: 4,
                add_delay: 5,
                next_turn_of_player: 6,
                chat: 7,
                thor_x: 8,
                thor_y: 9,
                thor_angle: 10,
                thor_damage: 11,
                new_weather: 12,
                wind_power: 13,
                wind_angle: 14,
                shots: 15,
                gold: 16
                }),
                */
                //[8,[2,0,1022,121,1,845,1,[],799,-420,24,0,3,0,326,[{"start":{"x":1042,"y":95,"ang":24,"power":101,"ax":0,"ay":398},"exp":0,"img":0,"time":1340}],0]]
                LogConsole.Show(LogType.DEBUG, "Send: x: {0} - y: {1} angle: {2}", _x, _y, _angle);
            }
            catch (Exception ex)
            {
                LogConsole.Show(LogType.ERROR, ex.ToString());
            }
        }
        //-----------------------------------------------------------------------------------------------------
        public void cshot_Shot(object o, ShotEventArgs e)
        {
            try
            {
                StringBuilder sb = new StringBuilder();
                StringWriter sw = new StringWriter(sb);
                using (JsonWriter writer = new JsonTextWriter(sw))
                {
                    writer.Formatting = Formatting.None;
                    writer.WriteStartArray();
                    writer.WriteValue((int)ServerOpcode.play); //8
                    writer.WriteStartArray();
                    if (e.User.Position == 0)
                    {
                        writer.WriteValue(1); //2 - next_turn_number
                    }
                    else
                    {
                        writer.WriteValue(0); //2 - next_turn_number
                    }
                    writer.WriteValue(e.User.Position); //0 - player_number
                    writer.WriteValue(e.xb); //1022 - x
                    writer.WriteValue(e.yb); //121 - y
                    writer.WriteValue(e.look); //1 - look
                    writer.WriteValue(1); //845 - delay
                    //writer.WriteValue(0); //1 - next_turn_of_player
                    if (e.User.Position == 0)
                    {
                        writer.WriteValue(1); //2 - next_turn_of_player
                    }
                    else
                    {
                        writer.WriteValue(0); //2 - next_turn_of_player
                    }
                    writer.WriteStartArray();
                    writer.WriteEndArray();
                    writer.WriteValue(799); //799 - thor_x
                    writer.WriteValue(-420); //-420 - thor_y
                    writer.WriteValue(0); //24 - thor_angle
                    writer.WriteValue(40); //0 - thor_damage
                    writer.WriteValue(1); //33
                    writer.WriteValue(0); //0
                    writer.WriteValue(234); //326
                    writer.WriteStartArray();
                    writer.WriteStartObject();
                    writer.WritePropertyName("start");
                    writer.WriteStartObject();
                    writer.WritePropertyName("x");
                    writer.WriteValue(e.xf);    //1042
                    writer.WritePropertyName("y");
                    writer.WriteValue(e.yf);    //95
                    writer.WritePropertyName("ang");
                    writer.WriteValue(e.angle);    //24
                    writer.WritePropertyName("power");
                    writer.WriteValue(e.power);//101
                    writer.WritePropertyName("ax");
                    writer.WriteValue(e.ax);  //0
                    writer.WritePropertyName("ay");
                    writer.WriteValue(e.ay);  //398
                    writer.WriteEndObject();
                    writer.WritePropertyName("exp");
                    writer.WriteValue(0);    //0
                    writer.WritePropertyName("img");
                    writer.WriteValue(0);    //0
                    writer.WritePropertyName("time");
                    writer.WriteValue(e.time); //1340
                    //"hole":[887,95,60,40],"damages":[]}],150]
                    if (e.col == true)
                    {
                        writer.WritePropertyName("hole");
                        writer.WriteStartArray();
                        writer.WriteValue(e.cx);    //x hole
                        writer.WriteValue(e.cy);    //y hole
                        writer.WriteValue(36);    //w
                        writer.WriteValue(40);    //h
                        writer.WriteEndArray();
                        writer.WritePropertyName("damages");
                        writer.WriteStartArray();
                        writer.WriteEndArray();
                    }
                    writer.WriteEndObject();
                    writer.WriteEndArray();
                    writer.WriteValue(150);
                    writer.WriteEndArray();
                    writer.WriteEndArray();
                }
                SendAll(sb.ToString());
            }
            catch (Exception ex)
            {
                LogConsole.Show(LogType.ERROR, ex.ToString());
            }
        }
        //-----------------------------------------------------------------------------------------------------
        public void PassTurn(UserManager.UserClass _user)
        {
            //[28,[4,0,1585,98,0,585,1,[],652,-436,18,0,2,0,99]]
            try
            {
                StringBuilder sb = new StringBuilder();
                StringWriter sw = new StringWriter(sb);
                using (JsonWriter writer = new JsonTextWriter(sw))
                {
                    writer.Formatting = Formatting.None;
                    writer.WriteStartArray();
                    writer.WriteValue((int)ServerOpcode.pass);
                    writer.WriteStartArray();
                    writer.WriteValue(0); //next_turn_number
                    writer.WriteValue(0); //slot user
                    writer.WriteValue(0); //x
                    writer.WriteValue(0); //y
                    writer.WriteValue(0); //look
                    writer.WriteValue(0); //delay
                    writer.WriteValue(0); //next turn of player
                    writer.WriteStartArray();//chat
                    writer.WriteEndArray();
                    writer.WriteValue(0); //thor_x
                    writer.WriteValue(0); //thor_y
                    writer.WriteValue(0); //thor_angle
                    writer.WriteValue(0); //thor_damage
                    writer.WriteValue(0); //new_wheater
                    writer.WriteValue(0); //wind_power
                    writer.WriteValue(0); //wind_angle
                    writer.WriteEndArray();
                    writer.WriteEndArray();
                }
                SendAll(sb.ToString());
            }
            catch (Exception ex)
            {
                LogConsole.Show(LogType.ERROR, ex.ToString());
            }
        }
        //-----------------------------------------------------------------------------------------------------
        public void ChangeTeam(UserManager.UserClass _user, string team)
        {
            if (_user.Is_Bot == 1)
                return;
            //[8,"B"]
            //[33,0,5,146634,"B"]
            StringBuilder sb = new StringBuilder();
            StringWriter sw = new StringWriter(sb);
            using (JsonWriter writer = new JsonTextWriter(sw))
            {
                writer.Formatting = Formatting.None;
                writer.WriteStartArray();
                writer.WriteValue((int)ServerOpcode.changed_team);
                writer.WriteValue(0);
                writer.WriteValue(5);
                writer.WriteValue(_user.user_id);
                writer.WriteValue(team);
                writer.WriteEndArray();
            }
            _user.sep.Send(sb.ToString());
        }
        //-----------------------------------------------------------------------------------------------------
        public void AddBot(int slot, string id_bot)
        {
            string tt = "[35,[2,1,[],1,131702018,\"Clown Stripe\",0,0,0,1,\"m\",0,[17,31],1,0]]";
            UserManager.UserClass usr = new UserManager.UserClass();
            usr.Name = "Clown Stripe";
            usr.user_id = 131702018;
            usr.gender = "m";
            usr.Is_Bot = 1;
            usr.Position = 2;
            this.Join(usr);
            SendAll(tt);
        }
        //-----------------------------------------------------------------------------------------------------
        public void Move(UserManager.UserClass _user)
        {
            StringBuilder sb = new StringBuilder();
            StringWriter sw = new StringWriter(sb);
            using (JsonWriter writer = new JsonTextWriter(sw))
            {
                writer.Formatting = Formatting.None;
                writer.WriteStartArray();
                writer.WriteValue((int)ServerOpcode.update);
                writer.WriteStartArray();
                writer.WriteValue(_user.Position);
                writer.WriteValue(_user.x);
                writer.WriteValue(_user.y);
                writer.WriteValue(_user.look);
                writer.WriteEndArray();
                writer.WriteEndArray();
            }
            SendAll(sb.ToString());
        }
        //-----------------------------------------------------------------------------------------------------
        private int SlotJoin()
        {
            int a = 0;
            int b = 0;
            int team = 0;
            for (int i = 0; i < 4; i++)
            {
                if (d[0][i] == 0)
                {
                    a = i;
                    team = 1;
                    d[0][i] = 1;
                    break;
                }
                else if (d[1][i] == 0)
                {
                    b = i;
                    team = 2;
                    d[1][i] = 1;
                    break;
                }
            }
            return GetPosT(team, a, b);
        }
        //-----------------------------------------------------------------------------------------------------
        private void RemoveSlot(int posSlot, int master = 0)
        {
            int TeamLeav = posSlot % 2;
            int posArray = (TeamLeav == 1) ? (posSlot <= 3 ? (posSlot == 3 ? posSlot - 2 : posSlot - 1) : (posSlot - 1) / 2) : (TeamLeav < 4 ? ((TeamLeav == 2) ? TeamLeav - 1 : TeamLeav) : (TeamLeav / 2));
            d[TeamLeav][posArray] = 0;
            for (int x = 0; x < 4; x++)
            {
                if (d[TeamLeav][x] == 0)
                {
                    int np = (x + 1) < 3 ? x + 1 : 3;
                    if (d[TeamLeav][np] == 1 && x < 3)
                    {
                        d[TeamLeav][x] = 1;
                        d[TeamLeav][np] = 0;
                        int px = GetPosT(TeamLeav, x, x, true);
                        int pnp = GetPosT(TeamLeav, np, np, true);
                        try
                        {
                            UserManager.UserClass _usr = UserInSala.Single(a => a.Position == pnp);
                            if (_usr != null)
                            {
                                _usr.Position = px;
                            }
                        }
                        catch (Exception ex)
                        {
                            LogConsole.Show(LogType.ERROR, ex.ToString());
                        }
                    }
                }
            }
            if (master == 1)
            {
                NewMas();
            }
        }
        //-----------------------------------------------------------------------------------------------------
        private int GetPosT(int team, int a, int b, bool Rm = false)
        {
            if (Rm)
            {
                if (team == 0)
                    team = 1;
                else if (team == 1)
                    team = 2;
            }
            return (team == 1) ? ((a == 0) ? a : (a == 1) ? (a + 1) : (a * 2)) : ((b == 0) ? (b + 1) : (b == 1 ? (b + 2) : (b * 2 + 1)));
        }
        //-----------------------------------------------------------------------------------------------------
        private void NewMas()
        {
            int pos = 0;
            bool foun = false;
            for (int i = 0; i < 4; i++)
            {
                if (d[0][i] == 1)
                {
                    pos = GetPosT(0, i, i, true);
                    foun = true;
                    break;
                }
                else if (d[1][i] == 1)
                {
                    pos = GetPosT(1, i, i, true);
                    foun = true;
                    break;
                }
            }
            if (foun)
            {
                try
                {
                    UserManager.UserClass _usr = UserInSala.Single(a => a.Position == pos);
                    if (_usr != null)
                    {
                        _usr.Is_Master = 1;
                        PassMaster(_usr);
                    }
                }
                catch (Exception ex)
                {
                    LogConsole.Show(LogType.ERROR, ex.ToString());
                }
            }
        }
        //-----------------------------------------------------------------------------------------------------
        public void PassMaster(UserManager.UserClass _usr)
        {
            StringBuilder sb = new StringBuilder();
            StringWriter sw = new StringWriter(sb);
            using (JsonWriter writer = new JsonTextWriter(sw))
            {
                writer.Formatting = Formatting.None;
                writer.WriteStartArray();
                writer.WriteValue((int)ServerOpcode.pass_master);
                writer.WriteValue(_usr.user_id);
                writer.WriteEndArray();
            }
            SendAll(sb.ToString());
        }
        //-----------------------------------------------------------------------------------------------------
        public void ChatInfo(string msg, string unk, int type)
        {
            StringBuilder sb = new StringBuilder();
            StringWriter sw = new StringWriter(sb);
            using (JsonWriter writer = new JsonTextWriter(sw))
            {
                writer.Formatting = Formatting.None;
                writer.WriteStartArray();
                writer.WriteValue((int)ServerOpcode.chat);
                writer.WriteValue(msg);
                writer.WriteValue(unk);
                writer.WriteValue(type);
                writer.WriteEndArray();
            }
            SendAll(sb.ToString());
        }
        //-----------------------------------------------------------------------------------------------------
        public void SendAll(string sb)
        {
            foreach (UserManager.UserClass _usp in UserInSala)
            {
                if (_usp.Is_Bot != 1)
                    _usp.sep.Send(sb);
            }
        }
    }
}

