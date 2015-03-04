using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using WebSocketSharp.Server;
using GameServerDB.Users;

namespace GameServerDB.Components
{
    class Session
    {
        public int ID;
        public User User;
        WebSocketService sClient;

        public Session(WebSocketService _cl)
        {
            sClient = _cl;
            User = new User(ID);
        }


        public void Send(string _tmp)
        {
            sClient.Send(_tmp);
        }

        public void Broadcast(string _tmp)
        {
            sClient.Broadcast(_tmp);
        }

        public void Clear()
        {
            ID = default(int);
            sClient = null;

            //User.Logout();

            User = null;
        }
    }
}
