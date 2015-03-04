using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using GameServerDB.Components;

namespace GameServerDB.Packets.Incoming
{
    class Reqlogin : IIncomingPacketEvent
    {
        public void Invoke(Session _Session, IncomingPacket _Packet)
        {
            int version = _Packet.GetInt();
            int user_id = _Packet.GetInt();
            string user_key = _Packet.GetString();

            _Session.Send("[" + (int)ServerOpcode.login_profile + "]");
            _Session.User.LoadUser(version, user_id, user_key);
            _Session.Send("[" + (int)ServerOpcode.login_avatars + "]");
            _Session.User.LoadinfoAvatars();
            _Session.Send(_Session.User.PlayerInfo());

            _Session.Send(_Session.User.UpdateBoddy());

            LogConsole.Show(LogType.INFO, "Version: {0} User_id: {1} User_key: {2}", version, user_id, user_key);
        }
    }

    class Reqchange_name : IIncomingPacketEvent
    {
        public void Invoke(Session _Session, IncomingPacket _Packet)
        {
            string nname = _Packet.GetString();

            _Session.Send(_Session.User.ChangeName(nname));
            _Session.Send(_Session.User.PlayerInfo());
            _Session.Send(_Session.User.UpdateBoddy());
        }
    }

    class Reqget_my_avatars : IIncomingPacketEvent
    {
        public void Invoke(Session _Session, IncomingPacket _Packet)
        {
            _Session.Send(_Session.User.GetAvatars());
        }
    }

    class Reqequip : IIncomingPacketEvent
    {
        public void Invoke(Session _Session, IncomingPacket _Packet)
        {
            _Session.User.UpdateEquip(_Packet.ToString());
            _Session.User.LoadinfoAvatars();
            _Session.Send(_Session.User.PlayerInfo());
        }
    }

    class Reqbuy : IIncomingPacketEvent
    {
        public void Invoke(Session _Session, IncomingPacket _Packet)
        {
            string _item = _Packet.GetString();
            string _tipop = _Packet.GetString();
            int _periodo = _Packet.GetInt();
            int _pre = _Packet.GetInt();
            _Session.Send(_Session.User.BuyItems(_item, _tipop, _periodo, _pre));
            _Session.Send(_Session.User.GetAvatars());
        }
    }
}
