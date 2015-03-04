using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using GameServerDB.Components;
using System.IO;
using System.Web;
using Newtonsoft.Json;
using GameServerDB.Channels;

namespace GameServerDB.Packets.Incoming
{
    class Reqroom_create : IIncomingPacketEvent
    {
        public void Invoke(Session _Session, IncomingPacket _Packet)
        {
            string name = _Packet.GetString();
            string password = _Packet.GetString();
            int maxplayers = _Packet.GetInt();
            int type = _Packet.GetInt();
            int Owner = _Session.User.ID;

            //Channel _cha = Program.ChannelManager.CreateChannel(name, password, 0, 0);
            //_cha.Owner = Owner;
        }
    }
}
