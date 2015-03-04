using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using GameServerDB.Components;
using System.IO;
using System.Web;
using Newtonsoft.Json;

namespace GameServerDB.Packets.Incoming
{
    class Reqtab : IIncomingPacketEvent
    {
        public void Invoke(Session _Session, IncomingPacket _Packet)
        {
            int fid = _Packet.GetInt();

            if (fid == 0)
            {
                _Session.Send(_Session.User.UpdateBoddy());
            }
            else if (fid == 1)
            {
                _Session.Send(_Session.User.Guildinfo());
            }
        }
    }

    class Reqrefresh_friends : IIncomingPacketEvent
    {
        public void Invoke(Session _Session, IncomingPacket _Packet)
        {
            _Session.Send(_Session.User.ListFriends());
        }
    }

    class Reqrefresh_guildies : IIncomingPacketEvent
    {
        public void Invoke(Session _Session, IncomingPacket _Packet)
        {
            _Session.Send(_Session.User.Guildinfo());
        }
    }
}
