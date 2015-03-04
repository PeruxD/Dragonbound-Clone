using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace GameServerDB.Components
{
    interface IIncomingPacketEvent
    {
        void Invoke(Session _Session, IncomingPacket _Packet);
    }
}
