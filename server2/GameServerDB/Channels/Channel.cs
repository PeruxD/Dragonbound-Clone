using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using GameServerDB.Users;

namespace GameServerDB.Channels
{
    public class Channel
    {
        public int ID;
        public string name;
        public string password;
        public int Owner;
        public int map;
        public int Type;
        public int MaxPlayers;
        public int State;


        public List<User> AllUsers = new List<User>();



    }
}
